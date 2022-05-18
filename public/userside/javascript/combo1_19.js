/*Line:3 - Combo.js*/
/*Line:835 - auto_comp.js*/
/*Line:852 - search.js*/
// Function Used in auto complete
auto_complete_ipnut_id = "";
this_click_me_id = "";
match_category = {};
cat3_json_obj = "";
cat3_range_json_obj = "";

function get_ajax_suggs(key, cont) {
    var script_name = this_domain + '/gmaps/ajax_caegory_list.php';
    var params = {
        'q': key
    };
    if (cat_json_obj == "") {
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

function get_ajax_loc_3(key, cont) {
    var script_name = this_domain + '/gmaps/ajax_cat_level3_list.php';
    var params = {
        'q': key
    };
    if (cat3_range_json_obj == "") {
        cat3_combo_url = this_domain + '/gmaps/ajax_cat_level3_list.php';
        $.get(cat3_combo_url, {}, function(obj) {
            cat3_range_json_obj = eval(obj);
        });
    }

    res = [];
    cat_json_obj_length = cat3_range_json_obj.length;
    lower_case_key = key.toLowerCase();
    for (var i = 0; i < cat_json_obj_length; i++) {
        auto_cat_name = cat3_range_json_obj[i].cat_name.toLowerCase();
        if (auto_cat_name.indexOf(lower_case_key) > -1)
            res.push({
                id: cat3_range_json_obj[i].cat_id,
                value: cat3_range_json_obj[i].cat_name,
                info: cat3_range_json_obj[i].cat_city
            });
    }
    cont(res);
}

function get_ajax_category_for_leads(key, cont) {
    var script_name = this_domain + '/gmaps/ajax_caegory_list.php';
    var params = {
        'q': key
    };
    if (cat3_range_json_obj == "") {
        cat3_combo_url = this_domain + '/gmaps/ajax_caegory_list.php';
        $.get(cat3_combo_url, {}, function(obj) {
            cat3_range_json_obj = eval(obj);
        });
    }

    res = [];
    cat_json_obj_length = cat3_range_json_obj.length;
    lower_case_key = key.toLowerCase();
    for (var i = 0; i < cat_json_obj_length; i++) {
        auto_cat_name = cat3_range_json_obj[i].cat_name.toLowerCase();
        if (auto_cat_name.indexOf(lower_case_key) > -1)
            res.push({
                id: cat3_range_json_obj[i].cat_id,
                value: cat3_range_json_obj[i].cat_name,
                info: cat3_range_json_obj[i].cat_city
            });
    }
    cont(res);
}

function get_ajax_range_loc_3(key, cont) {
    var script_name = this_domain + '/gmaps/ajax_cat_range3_list.php';
    var params = {
        'q': key
    };
    if (cat3_json_obj == "") {
        cat3_combo_url = this_domain + '/gmaps/ajax_cat_range3_list.php';
        $.get(cat3_combo_url, {}, function(obj) {
            cat3_json_obj = eval(obj);
        });
    }

    res = [];
    cat_json_obj_length = cat3_json_obj.length;
    lower_case_key = key.toLowerCase();
    for (var i = 0; i < cat_json_obj_length; i++) {
        auto_cat_name = cat3_json_obj[i].cat_name.toLowerCase();
        if (auto_cat_name.indexOf(lower_case_key) > -1)
            res.push({
                id: cat3_json_obj[i].cat_id,
                value: cat3_json_obj[i].cat_name,
                info: cat3_json_obj[i].cat_city
            });
    }
    cont(res);
}

function print_sugg(obj) {

    //if(autoCompleteObj.id)
    //{
    autoCompleteObj.id = obj.id;
    autoCompleteObj.value = obj.value;
    autoCompleteObj.extra = obj.info;
    //}
    if (auto_complete_ipnut_id != "" && auto_complete_ipnut_id != "input") {
        contain_box_id = auto_complete_ipnut_id.replace("_input", "");
        if ($("#" + contain_box_id + "_multiple"))
            set_adv_confirm_multiple(contain_box_id, "auto");
    }

    return obj;
}


function set_ac_flag(val) {
    acflag = val;
}

function setadvflag(value) {
    advflag = value;
}

function hide_auto_complete() {
    I('jqac_id').style.display = 'none';
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
    $.fn.autocomplete =
        function(options) {
            return this.each(function() {
                // take me
                var me = $(this);

                var me_this = $(this).get(0);

                // test for supported text elements
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
                        height: 500,
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
                        case ARRUP:
                        case ARRDOWN:
                            return false;
                    }
                    return true;
                });

                me.keyup(function(ev) {
                    switch (ev.which) {
                        // don't propagate
                        case ESC:
                        case RETURN:
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
                        auto_complete_ipnut_id = $(me).attr("id");
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
                    //if (val == user_input) return false;
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

                    // create holding div
                    suggestions_menu = $('<div class="jqac-menu" id="jqac_id" onmouseover="set_ac_flag(1); setadvflag(1);" onmouseout="set_ac_flag(0); setadvflag(0);"></div>').get(0);

                    // ovveride some necessary CSS properties 
                    $(suggestions_menu).css('position', 'absolute');
                    $(suggestions_menu).css('max-height', options.height + 'px');
                    $(suggestions_menu).css('overflow-y', 'auto');

                    // create and populate ul
                    suggestions_list = $('<ul></ul>').get(0);
                    // set some CSS's
                    $(suggestions_list).css('list-style', 'none').
                    css('margin', '0px').
                    css('padding', '2px').
                    css('overflow', 'hidden');
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
                    //var all_li = [];
                    var fragment = document.createDocumentFragment();
                    for (var i = 0; i < arr.length; i++) {
                        var val = new String(arr[i].value);
                        // using RE
                        var output = htmlspecialchars(val).replace(re, '<em style=font-style:normal;>$1</em>');
                        // using substr
                        //var st = val.toLowerCase().indexOf( user_input.toLowerCase() );
                        //var len = user_input.length;
                        //var output = val.substring(0,st)+"<em>"+val.substring(st,st+len)+"</em>"+val.substring(st+len);

                        var span = document.createElement("span");
                        //span.setAttribute('class','jqac-link');

                        //var span = $("<span class='jqac-link'></span>").get(0);
                        var span_inner = '<div style="width:70%; overflow:hidden; height:15px; float:left">' + output + '</div>';


                        //var span = $('<span class="jqac-link" style="height:15px;" ><div style="width:70%; overflow:hidden; height:15px; float:left">'+output+'</div></span>').get(0);

                        if (arr[i].info != undefined && arr[i].info != "") {
                            //$(span).append($('<div class="jqac-info">'+arr[i].info+'</div>'));
                            span_inner += '<div class="jqac-info" style="color: #969696; height:15px; overflow:hidden;">' + arr[i].info + '</div>';
                        }

                        span.innerHTML = span_inner;

                        span.setAttribute('name', i + 1);

                        if (my_browser == 'ie6') {
                            $(span).mousedown(function() {
                                setHighlightedValue();
                            });
                            $(span).mouseover(function() {
                                setHighlight($(this).attr('name'), true);
                            });
                        } else {
                            $(span).mousedown(function() {
                                current_highlight = Number($(this).attr('name'));
                                setHighlightedValue();
                            });
                            //$(span).mouseover(function () { setHighlight($(this).attr('name'),true); });
                        }
                        //all_li[i] = $('<li ></li>').get(0);
                        //$(all_li[i]).append(span);
                        //var li = document.createElement('li');
                        //li.appendChild(span);

                        fragment.appendChild(span);
                        //$(suggestions_list).append(span);
                    }

                    //$(fragment).find('span').setAttr('class','jqac-link');
                    suggestions_list.appendChild(fragment);
                    //someDiv.appendChild( fragment );
                    //$(suggestions_list).append(all_li);

                    /*if(arr.length > 10)
                    {
                        //if(my_browser == 'ie6')
                        //{
                        //    $(span).click(function () {setHighlightedValue(); });
                        //    $(span).mouseover(function () { setHighlight($(this).attr('name'),true); });
                        //}   
                        //var li = $('<li class="" id=\'next_sugg\'><span class="jqac-link" style="height:15px;"><div style="width:185px; overflow:hidden; height:15px; float:left">Previous</div><div class="jqac-info" style="height:15px; overftlow:hidden;">Next</div></span></li>');
                        //$(suggestions_list).append(li); 
                    } */

                    // no results
                    var pos = me.offset();
                    //this_click_me_id = $(me).attr("id");
                    auto_form_obj = $(me).parents("form");
                    auto_form_action_url = this_domain + "/search/search_location.html";
                    if (arr.length == 0) {
                        $(suggestions_list).append("<li class='jqac-warning' >" + options.noresults + "... <label style='font-style:normal;'></label></li>");
                    }


                    $(suggestions_menu).append(suggestions_list);

                    // get position of target textfield
                    // position holding div below it
                    // set width of holding div to width of field
                    if (options.offset) {
                        pos.left += options.offset[0];
                        pos.top += options.offset[1];
                    }
                    $(suggestions_menu).css('left', (pos.left - 1) + "px");
                    $(suggestions_menu).css('top', (pos.top + me.height() + 2) + "px");
                    if (!options.autowidth)
                        $(suggestions_menu).width(360);

                    // set mouseover functions for div
                    // when mouse pointer leaves div, set a timeout to remove the list after an interval
                    // when mouse enters div, kill the timeout so the list won't be removed
                    $(suggestions_menu).mouseover(function() {
                        killTimeout();
                    });
                    $(suggestions_menu).mouseout(function() {
                        resetTimeout();
                    });

                    // add DIV to document
                    $('body').append(suggestions_menu);

                    // adjust height: add +20 for scrollbar
                    if (suggestions_menu.scrollHeight > options.height) {
                        $(suggestions_menu).height(options.height);
                        $(suggestions_menu).width($(suggestions_menu).width() + 20);
                    }

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
                        if ($.isFunction(options.callback))
                            options.callback(suggestions[current_highlight - 1]);
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
                    if (elBottom > scrolled + viewportHeight) {
                        suggestions_menu.scrollTop = elBottom - viewportHeight;
                    } else if (elTop < scrolled) {
                        suggestions_menu.scrollTop = elTop;
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

var cat_json = null;

function LoadAutoFillCategory() {
    $("#input").css({
        "display": "none"
    });
    var load_image = "<center id='limg'><img style='margin-top:0px' src='" + this_domain + "/images/common/loading1.gif' /></center>";
    $("#auto_complete").append(load_image);
    ajax_page = this_domain + "/gmaps/ajax_caegory_list.php";
    $.get(ajax_page, {},
        function(str) {
            cat_json = eval(str);
            $("#input").css({
                "display": "inline"
            });
            $("#limg").remove();
        });
}

function get_random_suggs(v) {
    var a = [];
    //var names = ['Dubai','Dubai of Arabia','Dubai','Dubai','Dubai','Dubai','Dubai','Dubai','Dubai','Dubai','Dubai','Dubai'];
    for (var i = 0; i < cat_json.length; i++) {
        if (cat_json[i].cat_name.toUpperCase().indexOf(v.toUpperCase()) >= 0) {
            a.push({
                id: cat_json[i].cat_id,
                value: cat_json[i].cat_name,
                info: cat_json[i].cat_city,
                extra: "extra fields remains!"
            });
        }
    }
    return a;
}

$('.jqac-menu').livequery('mousedown', function(event) {
    event.stopPropagation();
});


$('.jqac-menu li').livequery('mousedown', function(event) {
    event.stopPropagation();
});

function findtotaloffset(obj) {
    var ol = ot = 0;
    if (obj.offsetParent) {
        do {
            ol += obj.offsetLeft;
            ot += obj.offsetTop;
        }
        while (obj = obj.offsetParent);
    }
    return {
        left: ol,
        top: ot
    };
}