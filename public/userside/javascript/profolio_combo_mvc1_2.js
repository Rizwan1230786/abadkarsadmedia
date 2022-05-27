function log(obj) {
    console.log(obj);
}

function json_obj(str) {
    var obj = {};
    try {
        obj = eval('(' + str + ')')
    } catch (e) {};
    return obj;
}

function sync_get(url) {
    return $.ajax({
        url: url,
        async: false
    }).responseText;
}

function split_string(value) {
    var arr = Array();
    var output = Array();
    if (value != "" && value != "0") arr = value.split(",");
    for (i in arr) {
        if (arr[i] != "") output.push(arr[i]);
    }
    return output;
}

function list_manager(data_string, val) {
    var item_array = split_string(data_string);
    found = jQuery.inArray("" + val + "", item_array);
    if (found > -1)
        item_array.splice(found, 1); //remove val from array
    else
        item_array = item_array.concat(val); //add val to array
    out = item_array.join(",") + ",";
    if (out == ",") out = "";
    return out;
}


var loading_html = "<center><img src='" + property_loading + "' style='padding:10px;' /></center>";
var loading_small = paths['images'] + "/common/loading_small.gif";
var timeoutid = 0;
var filter = 0;
var popup_params = 0;

function I(a) {
    return document.getElementById(a)
}
var version = navigator.userAgent;



/////////Combo Code//////
/* combo_tm*/
match_category = {};

function get_ajax_suggs(key, cont) {
    var params = {
        'q': key
    };
    if (cat_json_obj == "") {
        var script_name = this_domain_cache_data + '/ajax_caegory_list.php';
        $.get(script_name, params, function(obj) {
            cat_json_obj = obj;
            var res = [];
            for (var i = 0; i < obj.length; i++) {
                res.push({
                    id: obj[i].cat_id,
                    value: obj[i].cat_name,
                    info: obj[i].cat_city
                });
            }
            cont(res);
        }, 'json');
    } else {
        res = [];
        cat_json_obj_length = cat_json_obj.length;
        lower_case_key = key.toLowerCase();
        for (var i = 0; i < cat_json_obj_length; i++) {
            auto_cat_name = cat_json_obj[i].cat_name.toLowerCase();
            if (auto_cat_name.indexOf(lower_case_key) > -1)
                res.push({
                    id: cat_json_obj[i].cat_id,
                    value: cat_json_obj[i].cat_name,
                    info: cat_json_obj[i].cat_city
                });
        }
        cont(res);
    }
}




/*-------------------------------------------------------A U T O    C O M P L E T E-------------------------------------------------------------------------------------*/
/**
 * Extending jQuery with autocomplete
 * Version: 1.4
 * Author: Yanik Gleyzer (clonyara)
 */
var autoCompleteObj = {};

(function($) {

    // some key codes
    var RETURN = 13;
    var TAB = 9;
    var ESC = 27;
    var ARRLEFT = 37;
    var ARRUP = 38;
    var ARRRIGHT = 39;
    var ARRDOWN = 40;
    var BACKSPACE = 8;
    var DELETE = 46;

    function debug(s) {
        $('#info').append(htmlspecialchars(s) + '<br>');
    }
    // getting caret position obj: {start,end}
    function getCaretPosition(obj) {
        var start = -1;
        var end = -1;
        if (typeof obj.selectionStart != "undefined") {
            start = obj.selectionStart;
            end = obj.selectionEnd;
        } else if (document.selection && document.selection.createRange) {
            var M = document.selection.createRange();
            var Lp;
            try {
                Lp = M.duplicate();
                Lp.moveToElementText(obj);
            } catch (e) {
                Lp = obj.createTextRange();
            }
            Lp.setEndPoint("EndToStart", M);
            start = Lp.text.length;
            if (start > obj.value.length)
                start = -1;

            Lp.setEndPoint("EndToStart", M);
            end = Lp.text.length;
            if (end > obj.value.length)
                end = -1;
        }
        return {
            'start': start,
            'end': end
        };
    }
    // set caret to
    function setCaret(obj, l) {
        obj.focus();
        if (obj.setSelectionRange) {
            obj.setSelectionRange(l, l);
        } else if (obj.createTextRange) {
            m = obj.createTextRange();
            m.moveStart('character', l);
            m.collapse();
            m.select();
        }
    }
    // prepare array with velued objects
    // required properties are id and value
    // rest of properties remaines
    function prepareArray(jsondata) {

        var new_arr = [];
        for (var i = 0; i < jsondata.length; i++) {
            if (jsondata[i].id != undefined && jsondata[i].value != undefined) {
                jsondata[i].id = jsondata[i].id + "";
                jsondata[i].value = jsondata[i].value + "";
                if (jsondata[i].info != undefined)
                    jsondata[i].info = jsondata[i].info + "";
                new_arr.push(jsondata[i]);
            }
        }
        return new_arr;
    }
    // php analogs
    function escapearg(s) {
        if (s == undefined || !s) return '';
        return s.replace('\\', '\\\\').
        replace('*', '\\*').
        replace('.', '\\.').
        replace('/', '\\/');
    }

    function htmlspecialchars(s) {
        if (s == undefined || !s) return '';
        return s.replace('&', '&amp;').
        replace('<', '&lt;').
        replace('>', '&gt;');
    }

    function ltrim(s) {
        if (s == undefined || !s) return '';
        return s.replace(/^\s+/g, '');
    }



    // extending jQuery
    $.fn.autocomplete = function(options) {
        return this.each(function() {
            var me = $(this);
            var me_this = $(this).get(0);
            if (!me.is('input:text,input:password,textarea'))
                return;
            // get or ajax_get required!
            if (!options && (!$.isFunction(options.get) || !options.ajax_get)) {
                return;
            }
            // check plugin enabled
            if (me.attr('jqac') == 'on') return;
            // plugin on!
            me.attr('jqac', 'on');
            // no browser's autocomplete!
            me.attr('autocomplete', 'off');
            // options
            options = $.extend({
                    delay: 0,
                    timeout: 90000,
                    minchars: 2,
                    multi: false,
                    cache: true,
                    height: 388,
                    autowidth: false,
                    noresults: "No results"
                },
                options);

            // bind key events
            me.keypress(function(ev) {
                switch (ev.which) {
                    // return choose highlighted item or default propogate
                    case RETURN:
                        if (!suggestions_menu) return true;
                        else setHighlightedValue();
                        return false;
                        // excape clears menu
                    case ESC:
                        clearSuggestions();
                        return false;
                        // don't propagate up/down
                        //case ARRUP:case ARRDOWN:
                        //return false;
                }
                return true;
            });

            me.keyup(function(ev) {
                switch (ev.which) {
                    // don't propagate
                    case ESC:

                        return false;
                    case RETURN:
                        //alert(match_category.value);
                        if ($.isFunction(options.callback) && typeof match_category.value !== "undefined") {
                            clearSuggestions();
                            options.callback(match_category);
                        }
                        return false;
                        // propagate
                    case ARRLEFT:
                    case ARRRIGHT:
                        return true;
                        // up changes highlight
                    case ARRUP:
                        changeHighlight(ev.which);
                        return false;
                        // down changes highlight or open new menu
                    case ARRDOWN:
                        if (!suggestions_menu) getSuggestions(getUserInput());
                        else changeHighlight(ev.which);
                        return false;
                    default:
                        //$('#info').text(ev.which);
                        getSuggestions(getUserInput());
                }
                return true;
            });
            // init variables
            var user_input = "";
            var input_chars_size = 0;
            var suggestions = [];
            var current_highlight = 0;
            var suggestions_menu = false;
            var suggestions_list = false;
            var loading_indicator = false;
            var clearSuggestionsTimer = false;
            var getSuggestionsTimer = false;
            var showLoadingTimer = false;
            // get user input
            function getUserInput() {
                var val = me.val();
                if (options.multi) {
                    var pos = getCaretPosition(me_this);
                    var start = pos.start;
                    for (; start > 0 && val.charAt(start - 1) != ','; start--) {}
                    var end = pos.start;
                    for (; end < val.length && val.charAt(end) != ','; end++) {}
                    var val = val.substr(start, end - start);
                }
                return ltrim(val);
            }
            // set suggestion
            function setSuggestion(val) {
                user_input = val;
                if (options.multi) {
                    var orig = me.val();
                    var pos = getCaretPosition(me_this);
                    var start = pos.start;
                    for (; start > 0 && orig.charAt(start - 1) != ','; start--) {}
                    var end = pos.start;
                    for (; end < orig.length && orig.charAt(end) != ','; end++) {}
                    var new_val = orig.substr(0, start) + (start > 0 ? ' ' : '') + val + orig.substr(end);
                    me.val(new_val);
                    setCaret(me_this, start + val.length + (start > 0 ? 1 : 0));
                } else {
                    me_this.focus();
                    me.val(val);
                }
            }
            // get suggestions
            function getSuggestions(val) {

                //alert(val);
                if (val == "") autoCompleteObj.id = null;
                if (val == user_input) return false;
                // input length is less than the min required to trigger a request
                // reset input string
                // do nothing
                if (val.length < options.minchars) {
                    if (suggestions_menu) {
                        $(suggestions_menu).remove();
                    }
                    suggestions_menu = false;
                    suggestions_list = false;
                    current_highlight = 0;
                    suggestions = [];
                    return false;
                }

                // if caching enabled, and user is typing (ie. length of input is increasing)
                // filter results out of suggestions from last request
                if (options.cache && val.length > input_chars_size && suggestions.length) {
                    var arr = [];
                    for (var i = 0; i < suggestions.length; i++) {
                        var re = new RegExp("(" + escapearg(val) + ")", 'ig');
                        if (re.exec(suggestions[i].value))
                            arr.push(suggestions[i]);
                    }
                    user_input = val;
                    input_chars_size = val.length;
                    suggestions = arr;
                    createList(suggestions);
                    if (suggestions != "" && val.toUpperCase() == suggestions[0].value.toUpperCase()) {
                        //alert("if: " + suggestions[0].value); 
                        autoCompleteObj.id = suggestions[0].id;
                        autoCompleteObj.value = suggestions[0].value;
                        autoCompleteObj.extra = suggestions[0].extra;
                    } else {
                        autoCompleteObj.id = null;
                    }
                    return false;
                } else { // do new request
                    //alert("testing"); 

                    clearTimeout(getSuggestionsTimer);
                    user_input = val;
                    input_chars_size = val.length;
                    getSuggestionsTimer = setTimeout(
                        function() {
                            //try{
                            suggestions = [];
                            // call pre callback, if exists
                            if ($.isFunction(options.pre_callback))
                                options.pre_callback();
                            // call get
                            if ($.isFunction(options.get)) {
                                suggestions = prepareArray(options.get(val));
                                createList(suggestions);
                            }
                            // call AJAX get
                            else if ($.isFunction(options.ajax_get)) {
                                clearSuggestions();
                                showLoadingTimer = setTimeout(show_loading, options.delay);
                                options.ajax_get(val, ajax_continuation);
                            }

                            if (suggestions != "" && val.toUpperCase() == suggestions[0].value.toUpperCase()) {
                                //alert("Else: " + suggestions[0].value);     
                                autoCompleteObj.id = suggestions[0].id;
                                autoCompleteObj.value = suggestions[0].value;
                                autoCompleteObj.extra = suggestions[0].extra;
                            } else {
                                autoCompleteObj.id = null;
                            }

                            //}catch(e){
                            //   alert('Error when AJAX call: '+e);
                            //}
                        }, options.delay);
                    //alert("tsting");


                }
                return false;
            };
            // AJAX continuation
            function ajax_continuation(jsondata) {
                hide_loading();
                suggestions = prepareArray(jsondata);
                createList(suggestions);
            }
            // shows loading indicator
            function show_loading() {
                if (!loading_indicator) {
                    loading_indicator = $('<div class="jqac-menu" ><div class="jqac-loading" style="float:right; height:15px; font-size:12px; padding-right:5px; padding-top:5px;">Loading...</div></div>').get(0);
                    $(loading_indicator).css('position', 'absolute');
                    var pos = me.offset();
                    $(loading_indicator).css('left', pos.left + "px");
                    $(loading_indicator).css('top', (pos.top + me.height() + 2) + "px");
                    if (!options.autowidth)
                        $(loading_indicator).width(me.width());
                    $('body').append(loading_indicator);
                }
                $(loading_indicator).show();
                setTimeout(hide_loading, 10000);
            }

            // hides loading indicator 
            function hide_loading() {
                if (loading_indicator)
                    $(loading_indicator).hide();
                clearTimeout(showLoadingTimer);
            }
            // create suggestions list
            function createList(arr) {
                if (suggestions_menu)
                    $(suggestions_menu).remove();
                hide_loading();
                killTimeout();
                var divtitle = me.attr("divtitle");
                // create holding div   
                var corner_div = "<table class='combo_body' style='margin: 0'><tr style='height:27px'><td class='tl'></td><td class='t'><label>" + divtitle + "</label><i></i></td><td class='tr'></td></tr><tr><td class='ml'></td><td class='combo_data' style='width:412px' id='cmb_loc_search'></td><td class='mr'></td></tr><tr><td class='bl'></td><td class='b'></td><td class='br'></td></tr></table>";
                suggestions_menu = $('<div class="jqac-menu" id="jqac_id"></div>').get(0);
                $(suggestions_menu).append(corner_div);
                last_top = 0;
                $(suggestions_menu).css('position', 'absolute');
                // create and populate ul
                suggestions_list = $('<ul style="max-height:385px;overflow-y: scroll;padding: 2px;"></ul>').get(0);
                // regexp for replace 
                var re = new RegExp("(" + escapearg(htmlspecialchars(user_input)) + ")", 'ig');
                // loop throught arr of suggestions creating an LI element for each suggestion
                var my_browser = "";
                if (jQuery.browser.msie && jQuery.browser.version == 6.0) {
                    my_browser = "ie6";
                };
                if (arr.length == 1 && arr[0].value == "" && arr[0].info == "") {
                    arr = [];
                }
                match_category = {};
                user_input_lower_case = user_input.toLowerCase();
                for (var i = 0; i < arr.length; i++) {
                    var val = new String(arr[i].value);
                    // using RE
                    if (val.toLowerCase() == user_input_lower_case) {
                        //alert("id = "+arr[i].id+", value = "+arr[i].value+", extra="+arr[i].info);
                        match_category.id = arr[i].id;
                        match_category.value = arr[i].value;
                        match_category.info = arr[i].info;
                        var output = htmlspecialchars(val).replace(re, '<em style=font-style:normal;font-weight:bold;>$1</em>');
                    } else {
                        var output = htmlspecialchars(val).replace(re, '<em style=font-style:normal;>$1</em>');
                    }
                    var span = $('<span class="jqac-link"><div style="width:70%;float:left;padding-bottom:1px">' + output + '</div></span>').get(0);
                    if (arr[i].info != undefined && arr[i].info != "") {
                        //$(span).append($('<div class="jqac-info">'+arr[i].info+'</div>'));
                        $(span).append($('<div class="jqac-info" style="color: #969696;float: left;">' + arr[i].info + '</div>'));
                    }
                    $(span).attr('name', i + 1);
                    if (my_browser == 'ie6') {
                        $(span).click(function() {
                            setHighlightedValue();
                        });
                        $(span).mouseover(function() {
                            setHighlight($(this).attr('name'), true);
                        });
                    } else {
                        $(span).click(function() {
                            current_highlight = Number($(this).attr('name'));
                            setHighlightedValue();
                        });
                    }
                    var li = $('<li ></li>').get(0);
                    $(li).append(span);

                    $(suggestions_list).append(li);
                }
                // no results
                auto_form_obj = $(me).closest("form");
                auto_form_action_url = this_domain_main + "/search/search_location.html";
                this_auto_text = $(me).val();
                $(auto_form_obj).remove("#txt_loc_search");
                $(auto_form_obj).append("<input type='hidden' class='nofilter' name='txt_loc_search' id='txt_loc_search' value='" + this_auto_text + "' />");
                if (arr.length == 0) {
                    if (me_this.id.indexOf("agent") > -1)
                        $(suggestions_list).append("<li>No agent found. <label style='font-style:normal;'>Try our <a style='text-decoration:underline;color:#6C922A;'  href=\"" + this_domain_main + "/agents.html\">Agent Section</a></label></li>");
                    else
                        $(suggestions_list).append("<li class='jqac-warning' >" + options.noresults + "... <label style='font-style:normal;'>Try our <a href='javascript:void(0);' style='text-decoration:underline;color:#6C922A;'  onclick=\"$(auto_form_obj).removeAttr('onsubmit');$(auto_form_obj).attr('action',auto_form_action_url);setTimeout('$(auto_form_obj).submit()',100);return false;\">Location Search</a></label></li>");
                }
                var pos = me.offset();
                $(suggestions_menu).css('left', (pos.left - 10) + "px").css('top', (pos.top + me.height() + 2) + "px");
                if (!options.autowidth)
                    $(suggestions_menu).width(435);
                $(suggestions_menu).mouseover(function() {
                    killTimeout();
                    mouse_in_suggestion_menu = 1;
                });
                $(suggestions_menu).mouseout(function() {
                    resetTimeout();
                    mouse_in_suggestion_menu = 0;
                });
                // add DIV to document
                $('body').append(suggestions_menu);
                var cmb_loc_search = $("#cmb_loc_search");
                cmb_loc_search.append(suggestions_list);
                var results_ul = cmb_loc_search.find("ul")[0];
                if (results_ul.scrollHeight > options.height)
                    $(results_ul).css({
                        "overflow-y": "scroll",
                        "height": options.height
                    });
                else
                    $(results_ul).css({
                        "overflow-y": "auto",
                        "height": "auto"
                    });
                // currently no item is highlighted
                current_highlight = 0;

                // remove list after an interval
                clearSuggestionsTimer = ''; //setTimeout(function () { clearSuggestions() }, options.timeout);
            };
            // set highlighted value
            function setHighlightedValue() {
                if (current_highlight && suggestions[current_highlight - 1]) {
                    var sugg = suggestions[current_highlight - 1];
                    if (sugg.affected_value != undefined && sugg.affected_value != '')
                        setSuggestion(sugg.affected_value);
                    else
                        setSuggestion(sugg.value);
                    // pass selected object to callback function, if exists
                    if ($.isFunction(options.callback)) {
                        match_category = {};
                        options.callback(suggestions[current_highlight - 1]);
                    }
                    //alert(suggestions[current_highlight-1].value);
                    clearSuggestions();
                }
            };
            // change highlight according to key
            function changeHighlight(key) {

                if (!suggestions_list || suggestions.length == 0) return false;
                var n;
                if (key == ARRDOWN)
                    n = current_highlight + 1;
                else if (key == ARRUP)
                    n = current_highlight - 1;

                if (n > $(suggestions_list).children().size())
                    n = 1;
                if (n < 1)
                    n = $(suggestions_list).children().size();
                setHighlight(n);
            };
            // change highlight
            function setHighlight(n, mouse_mode) {
                if (!suggestions_list) return false;
                if (current_highlight > 0) clearHighlight();
                current_highlight = Number(n);
                var li = $(suggestions_list).children().get(current_highlight - 1);
                li.className = 'jqac-highlight';
                // for mouse mode don't adjust scroll! prevent scrolling jumps
                if (!mouse_mode) adjustScroll(li);
                killTimeout();
            };
            // clear highlight
            function clearHighlight() {
                if (!suggestions_list) return false;
                if (current_highlight > 0) {
                    $(suggestions_list).children().get(current_highlight - 1).className = '';
                    current_highlight = 0;
                }
            };
            // clear suggestions list
            function clearSuggestions() {
                killTimeout();
                if (suggestions_menu) {
                    $(suggestions_menu).remove();
                    suggestions_menu = false;
                    suggestions_list = false;
                    current_highlight = 0;
                }

            };
            // set scroll
            function adjustScroll(el) {
                if (!suggestions_menu) return false;
                var viewportHeight = suggestions_menu.clientHeight;
                var wholeHeight = suggestions_menu.scrollHeight;
                var scrolled = suggestions_menu.scrollTop;
                var elTop = el.offsetTop;
                var elBottom = elTop + el.offsetHeight;
                if (elBottom > last_top + viewportHeight - 30) {
                    //$(".jqac-menu ul").scrollTo(elBottom - viewportHeight);
                    last_top = elTop; //+ viewportHeight;
                    $(".jqac-menu ul").animate({
                        scrollTop: last_top
                    }, 1000);
                } else if (elTop < last_top) {
                    //suggestions_menu.scrollTop = elTop;
                    last_top = last_top - viewportHeight + 30;
                    $(".jqac-menu ul").animate({
                        scrollTop: last_top
                    }, 1000);
                }
                return true;
            }
            // timeout funcs
            function killTimeout() {
                clearTimeout(clearSuggestionsTimer);
            };

            function resetTimeout() {
                clearTimeout(clearSuggestionsTimer);
                clearSuggestionsTimer = setTimeout(function() {
                    clearSuggestions()
                }, options.timeout);
            };

        })
    };

})($);

function get_ajax_agent_suggs(key, cont) {
    var ag_list = [];
    agent_json_obj_length = agent_json_obj.length;
    lower_case_key = key.toLowerCase();
    for (var i = 0; i < agent_json_obj_length; i++) {
        auto_agent_name = agent_json_obj[i].agent_name.toLowerCase();
        if (auto_agent_name.indexOf(lower_case_key) > -1)
            ag_list.push({
                id: agent_json_obj[i].agentid,
                value: agent_json_obj[i].agent_name,
                info: "&nbsp;"
            });
    }
    cont(ag_list);
}

$('.jqac-menu').livequery('mousedown', function(event) {
    event.stopPropagation();
});

$('.jqac-menu li').livequery('mousedown', function(event) {
    event.stopPropagation();
});

/* combo_tm*/
var Keys = {
    Enter: 13,
    Up: 38,
    Down: 40,
    Left: 37,
    Right: 39,
    Esc: 27,
    Space: 32,
    Backspace: 8,
    PageDown: 34,
    PageUp: 33
};

function strip_spaces(text) {
    text = text.replace(/&nbsp;&nbsp;/g, ""); //remove tabed text
    text = strip_tags(text);
    text = text.replace(/[ ]/g, "<u>_</u>"); //remove spaces
    return text
}

function mouse_over(container, e) //document.onclick
{
    if (!e) var e = window.event;
    var mpos = mouse_pos(e);
    var over = 0;
    for (i in container)
        over += ElementRect(container[i]).conains(mpos); //mouse is in container
    return over;
}

function highlight(obj) {
    if (combo.selected_option)
        rem_class(combo.selected_option, "selected");
    combo.selected_option = obj;
    set_class(combo.selected_option, "selected");
}

function rem_class(obj, cls) {
    if (!obj) return;
    obj.className = obj.className.replace(" " + cls, "");
}

function set_class(obj, cls) {
    if (!obj) return;
    obj.className = obj.className + " " + cls;
}

function ElementRect(obj_param) {
    var x = 0,
        y = 0;
    obj = obj_param;
    x = obj.offsetLeft;
    y = obj.offsetTop;
    var body = document.getElementsByTagName('body')[0];
    while (obj.offsetParent && obj != body) {
        x += obj.offsetParent.offsetLeft;
        y += obj.offsetParent.offsetTop;
        obj = obj.offsetParent;
    }
    this.x = x;
    this.y = y;
    this.w = obj_param.clientWidth;
    this.h = obj_param.clientHeight;
    this.xx = this.x + this.w;
    this.yy = this.y + this.h;
    this.conains = function(pos) {
        if (pos.x > this.x && pos.y > this.y && pos.x < this.xx && pos.y < this.yy)
            return 1;
        else
            return 0;
    };
    return this;
}

function mouse_pos(e) {
    var posx = 0,
        posy = 0,
        x = 0,
        y = 0;
    if (!e) var e = window.event;
    if (e.pageX || e.pageY) {
        posx = e.pageX;
        posy = e.pageY;
    } else if (e.clientX || e.clientY) {
        posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
        posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
    }
    return {
        x: posx,
        y: posy
    };
}

function show_msg(message, caption) {
    if (!combo.visible) return;
    var rect = ElementRect(combo.body);
    var combo_alert = $("#combo_alert").css({
        "left": rect.x,
        "top": (rect.yy + 10)
    }).show();
    combo_alert.find(".combo_data").html(message).width(rect.w - 30);
    if (!caption) caption = "Alert";
    combo_alert.find(".caption").html(caption);
}

function hide_msg() {
    $("#combo_alert").hide();
}

function combo_class() {
    this.input = 0;
    this.parent = 0;
    this.visible = 0;
    this.title = 0;
    this.body = 0;
    this.selected_option = 0;
    this.hover_option = 0;
    this.inputFocus = 0;
    this.selected_index = -1;
    this.combo_items = 0;
    this.options = [];
    this.new_value = null;
    this.max_height = 260;
    this.init = function(input) {
        this.name = input.id;
        this.input = input;
        this.body = I(input.id + "_combo_body");
        this.title = I(input.id + "_title");
        this.combo_items = I(input.id + "_combo_items");
        this.parent = input.getAttribute("parent");
        this.ctype = input.getAttribute("ctype");
        this.max_height = input.getAttribute("combo_height") || 260;
        if (I(input.id + "_inputdata") != null)
            this.inputInfo = I(input.id + "_inputdata").value;
        //incase of type custom
        this.input1 = I(input.id + "_input1");
        this.input2 = I(input.id + "_input2");
        this.old_value = input.value;
        this.load_options();
        this.show_combo();
    };
    this.inpEvent = function(e, obj, origEvent) {
        if (e == "focus") {
            if (this.selected_option) {
                rem_class(this.selected_option, "selected");
                this.selected_option = 0;
            }
        }
        if (e == "blur") {
            hide_msg();
        }
    };
    this.add_item = function(input1, input2) {
        var value = input1 + "_" + input2;
        var title = input1 + " to " + input2;
        var useritem = I(this.input.id + "_useritem");
        if (!useritem) {
            var useritem = $("<li val='" + value + "' id='" + this.input.id + "_useritem'>" + title + "</li>")[0];
            useritem.onmousedown = select_item;
            this.combo_items.appendChild(useritem);
        } else {
            useritem.innerHTML = title;
            useritem.setAttribute("val", value);
        }
        useritem.onmousedown();
    };

    this.show_combo = function() {
        $("#combo_alert").hide();
        this.visible = 1;
        this.body.style.display = "block";
        var cm_items = $(this.combo_items);
        if (this.combo_items) {
            if (cm_items.height() > this.max_height) {
                cm_items.height(this.max_height);
                this.combo_items.style.overflowY = "scroll";
            }
        }
    };

    this.update_combo = function() {
        var update_flag = true;
        fname = this.input.id + "_beforeUpdate";
        if (this.new_value == null) fname = fname + "(" + this.input.value + ")";
        else fname = fname + "('" + this.input.value + "','" + this.new_value + "')";
        try {
            ret1 = eval(fname);
            if (ret1 == false) update_flag = false;
        } catch (e) {};
        return update_flag;
    };
    this.close_combo = function() {
        var close_flag = true;
        try {
            fname = this.input.id + "_onclose(this.input,this.old_value)";
            if (eval(fname) == false) close_flag = false;
        } catch (e) {};
        return close_flag;
    };
    this.load_options = function() {
        this.options = Array();
        if (!this.combo_items) return;
        var childs = this.combo_items.childNodes;
        for (var i = 0; i < childs.length; i++) {
            var child = childs[i];
            if (child.tagName == "LI") {
                if (this.ctype == "multi_check")
                    child.onmousedown = select_item_chk;
                else
                    child.onmousedown = select_item;
                child.onmouseover = this.hover;
                this.options.push(child);
            }
        }
    };
    this.close = function(p) {
        if (!combo || !combo.visible) return;
        if (this.close_combo() != false) {
            this.hide_combo();
            combos.pop();
            return 1;
        } else
            return 0;
    };
    this.hover = function() {
        if (combo.hover_option)
            rem_class(combo.hover_option, "hover");
        combo.hover_option = this;
        set_class(combo.hover_option, "hover");
    };
    this.ViewItem = function() {
        var option = this.options[this.selected_index];
        highlight(option);
        this.vewindex = (this.selected_index - 2 < 0) ? 0 : this.selected_index - 2;
        var element = this.options[this.vewindex];
        var parent = element.parentNode;
        scrl_top = $(parent).scrollTop() + $(element).offset().top - $(parent).offset().top;
        $(this.combo_items).scrollTop(scrl_top);
    };
    this.change_index = function(dir) {
        this.selected_index += dir;
        var last = this.options.length - 1;
        if (this.selected_index < 0) this.selected_index = last;
        else if (this.selected_index > last) this.selected_index = 0;
        this.ViewItem();
    };

    this.hide_combo = function() {
        this.new_value = "";
        this.body.style.display = "none";
        $("#combo_alert").hide();
        this.visible = 0;
        if (this.selected_option) {
            rem_class(this.selected_option, "selected");
            this.selected_option = 0;
            this.selected_index = -1;
        }
        if (this.hover_option)
            rem_class(this.hover_option, "hover");
        var top_combo = top_visible();
        try {
            eval(this.input.id + "_onhide(this.input,this.old_value)");
        } catch (e) {};
        if (top_combo)
            combo = top_combo;
    };
    this.filtered_items = function(keyCode) {
        var firstChar;
        var itms = [];
        var title_text = "";
        for (var i = 0; i < this.options.length; i++) {
            if (this.ctype == "multi_check")
                title_text = this.options[i].childNodes[1].data;
            else
                title_text = this.options[i].innerHTML;
            firstChar = strip_spaces(title_text).charCodeAt(0);
            if (keyCode == firstChar)
                itms.push(i);
        }
        return itms;
    };
    this.keydown = function(keyCode) {
        if (!combo || !combo.visible) return 0;
        if (keyCode == Keys.Esc) this.close();
        if (this.ctype == "adv_category") return;
        if (keyCode == Keys.PageUp)
            this.change_index(-10);
        else if (keyCode == Keys.PageDown)
            this.change_index(10);
        else if (keyCode == Keys.Up || keyCode == Keys.Left)
            this.change_index(-1);
        else if (keyCode == Keys.Down || keyCode == Keys.Right)
            this.change_index(1);
        else if (keyCode == Keys.Enter || keyCode == Keys.Space)
            $(this.selected_option).mousedown();
        if ($.inArray(keyCode, [27, 33, 34, 37, 38, 39, 40, 13, 32]) > -1) return 1;
        if (this.oldkey != keyCode) {
            this.fitems = this.filtered_items(keyCode);
            this.oldkey = keyCode;
            if (this.fitems.length) {
                this.nindex = 0;
                this.selected_index = this.fitems[0];
                this.ViewItem();
                return 1;
            }
        } else {
            if (this.fitems.length) {
                this.nindex++;
                if (this.nindex >= this.fitems.length)
                    this.nindex = 0;
                this.selected_index = this.fitems[this.nindex];
                this.ViewItem();
                return 1;
            }
        }
    };
};

function top_visible() {
    for (var i = combos.length - 1; i > -1; i--) {
        if (combos[i].visible) return combos[i];
    }
    return 0;
}
var combo = new combo_class();
var combos = new Array();



function open_combo(input) {
    var input = I(input);
    var nparent = input.getAttribute("parent")
    var tcombo = top_visible();
    if (tcombo) {
        if (nparent == tcombo.input.id) //new child open
        {} else {
            if (!nparent && tcombo.parent) //new combo open
            {
                return;
            }
            if (tcombo.close() == 0) return;
        }
    }
    new_combo = new combo_class();
    new_combo.init(input);
    new_combo.body.onmouseout = function() {
        rem_class(combo.hover_option, "hover");
    };
    combos.push(new_combo);
    combo = new_combo;
}

function document_onclick(e) //document.onclick
{
    if (!combo.input) return;
    if (mouse_over([combo.body, I("combo_alert")], e)) return;
    if (cat_box.focus) return; //for advance_cat_combo
    if (combo.close()) {
        combo = top_visible();
    }
}


var js_category = {};

function cat_id_onchange(input) //for advance_cat_combo
{
    var parent = input.getAttribute("parent");
    var cat_level = input.getAttribute("cat_level");
    var load_img = '<img src="' + paths.images + '/common/loading1.gif" style="margin-top: 5px; float: left;" />';
    var container = $("#" + parent + "_container_" + cat_level).html(load_img);
    var info = {};
    info["cat_id"] = input.value;
    info["level"] = cat_level;
    info["parent"] = parent;
    var ajax_cat_childs_url = this_domain_ajax + "&c=ajax_cat_childs";
    $.get(ajax_cat_childs_url, info, function(str) {
        js_obj = json_obj(str);
        js_category[parent] = js_obj;
        container.html(js_obj.combo_html);
    });
}

function adv_confirm_box(name, title_1, title_2) {
    message = '<div id="cat_confirm">' +
        '<label class="label3">' +
        '<input type="radio" name="confirm" class="radio1" style="padding:0;margin:0;position:relative;top:2px;" checked value="1" /> ' + title_1 +
        '</label>' +
        '<label class="label3">' +
        '<input type="radio" name="confirm" class="radio1" style="padding:0;margin:0;position:relative;top:2px;" value="2" /> ' + title_2 +
        '</label>' +
        '<span onmousedown=\'adv_category_confirm("' + name + '",2)\' class="ok_button" ></span>' +
        '</div>';
    show_msg(message, "Please Confirm");
}

function adv_category_confirm(name, param) {
    var js_obj = js_category[name] || [];
    cat_id1 = js_obj['cat_id'];
    cat_id1 = (cat_id1 != 0 && cat_id1 != "") ? cat_id1 : 0;
    title_1 = js_obj['title'];
    cat_id2 = $("#" + name + "_filter").val();
    cat_id2 = (cat_id2 != 0 && cat_id2 != "") ? cat_id2 : 0;
    title_2 = $("#" + name + "_filter").attr("title");
    prompt_ = (cat_id1 && cat_id2) ? 1 : 0;
    if (prompt_ == 0) //single value select
    {
        if (cat_id1) {
            param = 1;
            confirm = 1;
        } else if (cat_id2) {
            param = 1;
            confirm = 2;
        }
    }
    var output = $("#" + name);
    var title = $("#" + name + "_title");
    var text = $("#" + name + "_text");
    var call_back_ = output.attr("call_back");
    if (prompt_ == 0 && !param) {
        output_obj = [0, "Any"];
        output.val(output_obj[0]);
        title.html(strip_spaces(output_obj[1]));
        text.val(output_obj[1]);
        if (call_back_) eval(call_back_ + "(output_obj)");
        combo.close();
        return;
    }
    if (param) {
        if (param == 2) var confirm = $("#cat_confirm input[name=confirm]:checked").val();
        if (confirm == 1) output_obj = [cat_id1, title_1];
        if (confirm == 2) output_obj = [cat_id2, title_2];
        if (confirm) {
            output.val(output_obj[0]);
            title.html(strip_spaces(output_obj[1]));
            text.val(output_obj[1]);
            if (call_back_) eval(call_back_ + "(output_obj)");
        }
        combo.close();
    } else {
        adv_confirm_box(name, title_1, title_2);
    }
}
hce_devmm = true;

function select_item() {
    if (combo.ctype == "adv_area") {
        var custom = this.id.indexOf("useritem") > -1;
        if (custom)
            $("#" + combo.name + "_custom").val(1);
        else
            $("#" + combo.name + "_custom").val(0);
    }
    var value = this.getAttribute("val");
    if (combo.update_combo() == false) return;
    combo.title.innerHTML = strip_spaces(this.innerHTML);
    combo.input.value = value;
    if (0) //if( controler == "property_results" )
    {
        if (value == 0)
            combo.title.className = "text";
        else
            combo.title.className = "text selected";
    }
    if (hce_devmm) {
        try {
            eval(combo.input.id + "_onchange(combo.input)");
        } catch (e) {};
        $(combo.input).trigger("change");
    }
    combo.hide_combo();
    combos.pop();
}

function getEvent(event) {
    event = event || window.event;
    source = event.target || event.srcElement;;
    return {
        event: event,
        source: source
    };
}

function select_item_chk(event) {
    var cvalue = this.getAttribute("val");
    var checkbox = this.firstChild;

    var innerhtml = strip_spaces(this.innerHTML);
    event = getEvent(event);
    if (event.source.type != "checkbox") {
        checkbox.checked = !checkbox.checked;
        Itemchecked = checkbox.checked;
    } else {
        Itemchecked = !checkbox.checked;
    }











    var new_value = list_manager(combo.input.value, cvalue)
    combo.input.value = new_value;
    combo_update_text(combo.input.id);
    if (hce_devmm) {
        try {
            eval(combo.input.id + "_onchange(combo.input,cvalue,Itemchecked)");
        } catch (e) {};
        //$(combo.input).trigger("change");
    }
}

function combo_update_text(name) {






    var inputInfo = json_obj("{" + I(name + "_inputdata").value + "}");
    var item_array = split_string(I(name).value);
    if (item_array.length == 0) {


        title_html = inputInfo.default_caption;
    } else {
        if (item_array.length == 1 && inputInfo.single_caption) {
            title_html = $("#" + name + "_combo_items li[val=" + item_array[0] + "]").html();
        } else
            title_html = inputInfo.selected_caption.replace("@count@", item_array.length);
    }
    I(name + "_title").innerHTML = strip_spaces(title_html);
}

function add_option(input, range2) {

    var inputInfo = eval('({' + combo.inputInfo + '})');
    var is_empty = combo.input1.value == "" || combo.input2.value == "";

    var range = inputInfo.range.split("_");
    var message = range[2];

    if (is_empty) {
        show_msg("<font color=red><b>" + message + "</b></font>");
        return;
    }
    var r1 = parseInt(range[0]);
    var r2 = parseInt(range[1]);
    var from = parseInt(combo.input1.value);
    var to = parseInt(combo.input2.value);
    var not_num = isNaN(from) || isNaN(to);
    var incorect_range = from < r1 || to > r2 || to < from;
    if (not_num)

        show_msg("<font color=red><b>Values must contain numbers only.</b></font>");


    else if (incorect_range)

        show_msg("<font color=red><b>Please Enter Correct Price range</b></font>");
    else
        combo.add_item(from, to);

}

function price_combo_inputEvent(e, obj, event) {
    if (e == "keyup") {
        var price_value = obj.value;
        if (isNaN(price_value))
            showprice = "<font color='red'>Price must contain numbers only</font>";
        else
            showprice = getPriceText(price_value);
        show_msg('<font><b>' + showprice + '</b></font>');
    }
    combo.inpEvent(e, obj, event);
    //stop(event);
}
$(document).keydown(function(e) {
    source = e.target;
    if (combo && combo.visible && source.className != "categoryfilter") {
        if (source.tagName == "INPUT") {
            if (e.which == 13) {
                e.preventDefault();
                return false;
            }
        } else {
            if (combo.keydown(e.which)) {
                e.preventDefault();
                return false;
            }
        }
    }
});

document.onclick = document_onclick;

setTimeout("document.onclick = document_onclick;", 10);

var combo_alert_html = '<table id="combo_alert" class="combo_body" style="margin: 0px; left: 797px; top: -528px;"><tbody><tr style="height: 27px;"><td class="tl"></td><td class="t"><label class="combo_alert_caption">Alert</label><i></i></td><td class="tr"></td></tr><tr><td class="ml"></td><td class="combo_data" style="width: 200px;" id="combo_msg"></td><td class="mr"></td></tr><tr><td class="bl"></td><td class="b"></td><td class="br"></td></tr></tbody></table>';

setTimeout("$('body').append(combo_alert_html);", 10);

function find_li(cm_name, find_val) {
    var combo_items = I(cm_name + "_combo_items");
    var childs = combo_items.childNodes;
    for (var i = 0; i < childs.length; i++) {
        var child = childs[i];
        if (child.tagName == "LI" && child.getAttribute("val") == find_val)
            return child;
    }
    return 0;
}

function set_combo_value(name, value) {
    var li_obj = $("#" + name + "_combo_items li[val='" + value + "']")[0];

    var obj_li = find_li(name, value);
    if (obj_li == 0) {
        var caption = value.replace("_", " to ");
        if (li_obj) {
            caption = li_obj.innerHTML;
        }
        obj_li = $("<li val='" + value + "'>" + caption + "</li>")[0];
        obj_li.onmousedown = select_item;
    }
    open_combo(name);
    $(obj_li).trigger("mousedown");
}

function set_combo_multicheck_value(name, value) {
    var item_array = split_string(value);
    var childs = I(name + "_combo_items").childNodes;
    for (i in childs) {
        child = childs[i];
        if (child.tagName == "LI") {
            var val = child.getAttribute("val");
            var checked = jQuery.inArray("" + val + "", item_array) > -1;
            child.firstChild.checked = checked;
        }
    }
    I(name).value = value;
    combo_update_text(name, value);
}

var cat_combo_url = this_domain_ajax + '&tpl=ajax_category_list';
//$.get(cat_combo_url,function(obj){ cat_json_obj = eval(obj);});