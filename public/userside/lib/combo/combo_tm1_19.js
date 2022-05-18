var flag = 0;
var advflag = 0;
var acflag = 0;
//Single Combo Events
function setflag(value) {
    flag = value;
}
var combo_name = 0;
var combo_selected_item = 0;

function hide_stext(el) {
    I('stext_facebox').style.display = 'none';
}

function show_stext(el) {
    I('stext_facebox').style.display = 'block';
}

function show_contaier(el) {
    el.style.display = '';
    el.focus();
}

function hide_contaier(div) {
    if (flag == 0) // o= mouse is out , 1 = mouse is in the div
    {
        I(div).style.display = "none";
        if (I('stext')) hide_stext();
    }
}

function toggle_contaier(div) {
    if (I('stext')) hide_stext();
    var el = I(div);
    el_combo_id = $(el).attr("id");
    var cat = (el_combo_id.indexOf("cat_id") > -1);
    if (typeof cat_json_obj !== "undefined" && cat_json_obj == "" && cat) {
        cat_combo_url = this_domain + '/gmaps/ajax_caegory_list.php';
        $.get(cat_combo_url, {}, function(obj) {
            cat_json_obj = obj;
        }, 'json');
    }
    tab_index = el.getAttribute('tabindex');
    if (el.style.display != 'none') {

        el.style.display = 'none';
    } else {
        el.style.display = '';
        //$('#type_n').show();
        //$('#type_n').focus();
        $('#type_n').keyup();
        if (cat) {
            setadvflag(1);
            set_ac_flag(1);
            input_complete_id = el_combo_id.replace("_container", "_input");
            if (I(input_complete_id) != null)
                input_mousedown(I(input_complete_id));
        }
        //I('price_container').focus();
        //setTimeout("I('price_container').focus()",1);
        combo_name = div.replace("_container", "");
    }
}

function filter_items(el) {

}

function change_bg_color(el, clr) {
    el.style.background = clr;
}

function check_input_range(val1, val2, min_length, error_msg) {
    el_stext = I("stext");
    if (isNaN(val1) || isNaN(val2)) {
        el_stext.innerHTML = "<font color=\"red\">Values must contain numbers only</font>";
        return false;
    } else if (val1 == '' || val2 == '') {
        show_txt_msg = "Cannot Accept Empty Field";
        str_array = error_msg.split(" ");
        replace_text = str_array[0].toLowerCase();
        if (replace_text == "price" || replace_text == "area" || replace_text == "beds" || replace_text == "baths")
            show_txt_msg = "Please enter a " + replace_text + " range";
        el_stext.innerHTML = "<font color=\"red\">" + show_txt_msg + "</font>";
        return false;
    } else {
        val1 = parseInt(val1);
        val2 = parseInt(val2);
        if (val2 < val1) {
            el_stext.innerHTML = "<font color=\"red\">Invalid Range</font>";
            return false;
        } else if (val1 < min_length || val2 < min_length) {
            el_stext.innerHTML = "<font color=\"red\">" + error_msg + "</font>";
            return false;
        }
    }


    return true;

}

function add_select_option(select_div, input1_div, input2_div, max_value, error_msg) {
    el_select = I(select_div);
    el_input1 = I(input1_div);
    el_input2 = I(input2_div);
    if (check_input_range(el_input1.value, el_input2.value, max_value, error_msg)) {
        var new_select_text = el_input1.value + " to " + el_input2.value;
        var new_select_val = el_input1.value + "_" + el_input2.value;
        var option = document.createElement("option");
        option.innerHTML = new_select_text;
        option.value = new_select_val;
        el_select.appendChild(option);

        option.selected = "selected";
        var combo_div = select_div + "_combo_text";
        I(combo_div).innerHTML = new_select_text;
        I(select_div + "_combo").style.background = "#E5ECF9";
        var container_div = select_div + "_container";
        hide_contaier(container_div);
        setflag(0);
        el_select.onchange();
    } else {
        display_stext(select_div);
        setflag(1);
    }
}

function value_index(select, value) {
    var container = I(select + "_container");
    var options = $("#" + select).find("option");
    var result = 0;
    options.each(function(index, option) {
        if (option.value == value) {
            li_tag = $(container).find("li:nth-child(" + (index + 1) + ")")[0];
            result = {
                id: select,
                text: option.innerHTML,
                index: index,
                li: li_tag
            };
        }
    });
    return result;
}

function set_cm_value(combo, combo_text, container, select, text, value) {
    setflag(0);
    hide_contaier(container);
    I(container).onblur();
    var browser = navigator.appName;
    if (browser != "Microsoft Internet Explorer") {
        I(combo).focus();
    }
    I(select).value = value;
    I(combo_text).innerHTML = text.replace(/ /g, "<font color=\"#E5ECF9\">_</font>");
    if (value != 0)
        I(combo).style.background = "#E5ECF9";
    else
        I(combo).style.background = "#FFFFFF";
}


//Multi Combo Events

function select_option(el) {
    var el_opt = I(el);
    if (el_opt.checked)
        el_opt.checked = false;
    else
        el_opt.checked = true;
}

function multi_fill_combo(el, value) {

}

function multi_combo_btn(el) {
    var el_opt;
    var index = 1;
    var select_count = 0;
    var target_val = '';
    var opt_name = el + "_opt_" + index;
    while (el_opt = I(opt_name)) {
        if (el_opt.checked == true) {
            target_val += el_opt.value + ':';
            select_count++;
        }
        index++;
        opt_name = el + "_opt_" + index;
    }
    if (select_count != 0) {
        I(el + "_combo_text").innerHTML = select_count + " Item(s) Selected";
        I(el + "_combo").style.background = "#E5ECF9";
    } else {
        I(el + "_combo_text").innerHTML = "Any";
        I(el + "_combo").style.background = "#FFFFFF";
    }
    I(el).value = target_val;
    I(el + "_container").blur();

}

function multi_hide_container(el) {

    if (flag == 0) // o= mouse is out , 1 = mouse is in the div
    {
        var fname = el + "_onclose();";
        try {
            eval(fname); //call custom closing function
        } catch (e) {}
        I(el + "_container").style.display = "none";
        multi_combo_btn(el);
        document.body.onclick = function() {};
        document.body.onclick();
        document.body.onclick = '';
    }

}

function Bounds(obj_param) {
    var w = 0,
        h = 0;
    var offset = $(obj_param).offset();
    w = $(obj_param).width();
    h = $(obj_param).height();
    return {
        x: offset.left,
        y: offset.top,
        w: w,
        h: h,
        xx: offset.left + w,
        yy: offset.top + h,
        obj: obj_param
    };
}

function combo_alert(parent_div_id, msg) {
    var facebox = $("#stext_facebox");
    var parent_div = I(parent_div_id);
    var rect = Bounds(parent_div);
    var css = {
        left: rect.x + 'px',
        top: (rect.yy + 10) + 'px'
    }
    facebox.css(css).show().find("#stext").html(msg);
    facebox.find("table").width(rect.w);
    return facebox;
}

function display_stext(select_div, el) {
    var container_div = I(select_div + "_container");
    var c_height = $(container_div).height();
    var p_left = 0;
    var p_top = 0;
    if (container_div.offsetParent) {
        do {
            p_left += container_div.offsetLeft;
            p_top += container_div.offsetTop;
        }
        while (container_div = container_div.offsetParent);
    }
    el_stext = I("stext");
    if (el) {
        el_stext.innerHTML = showPriceText(el);
    }
    var s = I("stext_facebox");
    p_top = p_top + c_height + 10;
    s.style.top = p_top + "px";
    s.style.left = p_left + "px";
    s.style.display = "block";
}


//Advance Comno Events

function set_adv_confirm(combo_id, default_text, hide_div_flag) {
    //console.log(ccombo);
    container = combo_id + "_container";
    if (ccombo && ccombo.cat_level < 3 && !(autoCompleteObj.id)) {
        combo_alert(container, "<font class='red' style='float: left; padding-top: 2px;'>Error: You cannot select a province as your location.</font>");
        return;
    }
    var index = 0;
    var last_index = 0;
    var tag_name;
    tag_name = I(combo_id + "_combo_text").tagName;
    while (el = I(combo_id + "_" + index + "_combo_text")) {
        if (el.innerHTML != 'Any') {
            last_index = index;
        }
        index++;
    }
    //alert(combo_id + "_" + last_index);
    var combo_value = I(combo_id + "_" + last_index).value;
    var combo_text = I(combo_id + "_" + last_index + "_combo_text").innerHTML;

    combo_text = combo_text.replace(/<font color="#e5ecf9">_<\/font>/g, " ");
    combo_text = combo_text.replace(/<font color="#E5ECF9">_<\/font>/g, " ");
    combo_text = combo_text.replace(/<FONT color=#e5ecf9>_<\/FONT>/g, " ");

    if (combo_value > 0 && autoCompleteObj.id > 0) {

        I(combo_id + "_confirm_label1").innerHTML = combo_text;
        I(combo_id + "_confirm_label2").innerHTML = autoCompleteObj.value;
        I(combo_id + "_confirm_opt1").value = combo_value;
        I(combo_id + "_confirm_opt2").value = autoCompleteObj.id;

        I(combo_id + "_confirm_box").style.display = 'block';
    } else if (combo_value > 0) {

        setadvflag(0);
        if (typeof hide_div_flag === "undefined")
            hide_adv_contaier(combo_id + '_container');

        if (tag_name == 'DIV' || tag_name == "div") {
            I(combo_id + "_combo_text").innerHTML = combo_text;
            I(combo_id + "_combo").style.background = '#E5ECF9';
        } else
            I(combo_id + "_combo_text").value = combo_text;

        I(combo_id).value = combo_value;


        set_ac_flag(0);
        hide_ac();
        //I(combo_id + "_cat_button").blur();
        if (typeof hide_div_flag === "undefined")
            I(combo_id + "_container").blur();
        //alert(this.src);
    } else if (autoCompleteObj.id > 0) {

        setadvflag(0);
        hide_adv_contaier(combo_id + '_container');

        if (tag_name == 'DIV' || tag_name == "div") {
            I(combo_id + "_combo_text").innerHTML = autoCompleteObj.value;
            I(combo_id + "_combo").style.background = '#E5ECF9';
        } else {
            I(combo_id + "_combo_text").value = autoCompleteObj.value;
        }

        I(combo_id).value = autoCompleteObj.id;

        set_ac_flag(0);
        hide_ac();
        if (autoCompleteObj) {
            autoCompleteObj = {};
            var auto = I(combo_id + "_auto_c").firstChild;
            auto.value = "Type Your Location Here...";
            auto.style.color = "#808080";
        }
        I(combo_id + "_auto_c").firstChild.blur();
        /* I(combo_id + "_container").blur();
        I(combo_id + "_cat_button").blur(); */
    } else {
        setadvflag(0);
        hide_adv_contaier(combo_id + '_container');
        if (tag_name == 'DIV' || tag_name == "div") {
            if (!default_text) default_text = "Any";
            I(combo_id + "_combo_text").innerHTML = default_text;
        } else {
            if (!default_text) default_text = "Not Selected";
            I(combo_id + "_combo_text").value = default_text;
        }

        I(combo_id).value = 0;
        if (tag_name == 'DIV' || tag_name == "div") {
            I(combo_id + "_combo").style.background = '#FFFFFF';
        }
        set_ac_flag(0);
        hide_ac();
    }

}


function hide_ac() {
    //$('body').prepend(acflag);
    if (acflag == 0) {
        //alert(acflag);
        //$('body').prepend(acflag);
        el = I("jqac_id");
        if (el)
            el.style.display = 'none';
    }
}


function set_adv_value(combo_id) {
    el_checkbox = I(combo_id + "_confirm_opt1");
    var tag_name;
    tag_name = I(combo_id + "_combo_text").tagName;
    if (el_checkbox.checked) {
        if (tag_name == "DIV" || tag_name == "div")
            I(combo_id + "_combo_text").innerHTML = I(combo_id + "_confirm_label1").innerHTML;
        else
            I(combo_id + "_combo_text").value = I(combo_id + "_confirm_label1").innerHTML;

        I(combo_id).value = el_checkbox.value;
    } else {
        if (tag_name == "DIV" || tag_name == "div")
            I(combo_id + "_combo_text").innerHTML = I(combo_id + "_confirm_label2").innerHTML;
        else
            I(combo_id + "_combo_text").value = I(combo_id + "_confirm_label2").innerHTML;
        I(combo_id).value = I(combo_id + "_confirm_opt2").value;
    }
    if (tag_name == "DIV" || tag_name == "div")
        I(combo_id + "_combo").style.background = '#E5ECF9';
    I(combo_id + "_confirm_box").style.display = 'none';

    setadvflag(0);
    hide_adv_contaier(combo_id + '_container');
    if (autoCompleteObj) {
        autoCompleteObj = {};
        var auto = I(combo_id + "_auto_c").firstChild;
        auto.value = "Type Your Location Here...";
        auto.style.color = "#808080";
    }
}

function FocusAdvContainer(combo_id) {
    var container = I(combo_id + "_container");
    try {
        container.focus();
    } catch (err) {}
}

function set_cm_combo_any(combo, no_evt) {
    obj_combo = $("#" + combo);
    var index = 0;
    if (obj_combo.length) index = obj_combo[0].id.replace(/[a-zA-Z_]/g, "");
    onchange_evt = obj_combo.attr("onchange");
    if (no_evt) obj_combo.attr("onchange", "");
    $("#" + combo + "_container").find("li:first").mousedown();
    if (no_evt) obj_combo.attr("onchange", onchange_evt);
    return parseInt(index);
}

var ccombo = 0;
/* function get_child_cat( el_select )
{
	name = el_select.name;
	target_id = name.replace(/[a-zA-Z_]/g,"");
	combo_name = name.replace("_"+target_id,"");
	target_id = parseInt(target_id) + 1;
	//$("#"+combo_name).attr("target_id",target_id).val(el_select.value);
	document.getElementById(combo_name).setAttribute("target_id",target_id);
	document.getElementById(combo_name).value = el_select.value;
	try
	{
		var fname=combo_name+"_onSelect(el_select.value,el_select,target_id)";
		eval(fname);
	}
	catch(e){};
} */
function get_child_cat(el_select, container_width, with_childs, selected, param, value, children) {
    value = typeof value !== 'undefined' ? value : "";
    children = typeof children !== 'undefined' ? children : "";
    if (el_select.value == 0) {
        el_select.value = value;

    }
    //selected = el_select.value;
    var target_div = el_select.name;
    var id_array = new Array();

    id_array[0] = target_div.split(/_[0-9]/)[0];
    if (document.all)
        id_array[1] = target_div.split(/[a-z0-9_]*_/);
    else
        id_array[1] = target_div.split(/[a-z0-9_]*_/)[1];
    try {
        var fname = id_array[0] + "_onSelect(el_select.value,el_select)";
        eval(fname);
    } catch (e) {};
    var id = parseInt(id_array[1]) + 1;
    target_div = 'category_' + id_array[0] + '_' + id;
    var load_image = "<img style='margin-top:4px;' src='" + this_domain + "/images/common/loading1.gif' />";
    I(target_div).innerHTML = load_image;

    var url = '';
    if (container_width) {
        url = this_domain + '/profolio/includes/child_locations.php?container_width=' + container_width + '&selected=' + selected + '&with_childs=' + with_childs;

        if (param)
            for (var key in param)
                url += "&" + key + "=" + param[key];
    } else {
        //url = this_domain + '/body/common/child_locations.php';
        url = this_domain + '/profolio/index.php?ajax=1&ajax_section=clients_leads&ajax_action=search_leads_location';
    }
    if ($('#int_deal').length)
        var int_dl = 1;
    else
        var int_dl = 0;
    $.get(url, {
            cat_id: el_select.value,
            target_id: id,
            pre: id_array[0],
            childs: children,
            int_deal: int_dl
        },
        function(str) {
            I(target_div).innerHTML = str;

        });
}

function input_mousedown(el) {
    oo = el;
    setTimeout('oo.focus();', 0);
    //alert(autoCompleteObj.value);
    if (el.value == "Type Your Location Here..." || !autoCompleteObj.value) {
        if ($(el).is(":enabled")) {
            el.value = "";
            el.style.color = "#000000";
        }
    }
    hide_stext();
}

function input_blur(el, combo_id) {
    if (el.value == "") {
        el.value = "Type Your Location Here...";
        el.style.color = "#808080";
    }
    //set_ac_flag(0);
    hide_ac();
    hide_adv_contaier(combo_id + '_container');
}



//Common Events

function hide_adv_contaier(div) {
    current_url = window.location.search.substring(1);
    if ((current_url.indexOf("newlisting") > -1 || current_url.indexOf("editlisting") > -1) && I("prov_error_div") != null) {
        if (I("cat_id_0_combo") != null && I("cat_id_1_combo") != null) {
            if (I("cat_id_0_combo") != null && I("cat_id_1_combo_text").innerHTML == "Any") {
                $("#cat_id_0_container ul li:first").trigger("mousedown");
                I("cat_id_combo_text").innerHTML = "Any";
                $("#prov_error_div").remove("div");
            }
        }
    }
    if (advflag == 0) // o = mouse is out , 1 = mouse is in the div
    {
        I(div).style.display = "none";
        if (I('stext')) hide_stext();
    }
}


//rapper functions
function liw(el) {
    change_bg_color(el, "#FFFFFF");
}

function lib(el) {
    change_bg_color(el, "#E5ECF9");
    setflag(1);
}

function liv(el, id, val) {
    if (el == "") {
        text_to_display = val;
        text_to_display = text_to_display.replace("_", " to ");
    } else
        text_to_display = el.innerHTML;
    set_cm_value(id + '_combo', id + '_combo_text', id + '_container', id, text_to_display, val);
    //$('#'+id).change();
    $('#' + id).trigger("change");
}

function liv2(el, id, val) {
    text_to_display = el;
    set_cm_value(id + '_combo', id + '_combo_text', id + '_container', id, text_to_display, val);
    //$('#'+id).change();
    $('#' + id).trigger("change");
}

function hc(id) {
    hide_contaier(id + '_container')
}


// Dynamic Events---------------------------------------------------

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

function last_events(combo_type) {
    if (typeof combo_type != "undefined")
        $('input.complete').autocomplete({
            ajax_get: get_ajax_suggs_city,
            callback: print_sugg,
            multi: true
        });
    else
        $('input.complete').autocomplete({
            ajax_get: get_ajax_suggs,
            callback: print_sugg,
            multi: true
        });
    //alert("in last_events");
    if (I('type_n')) {
        I('type_n').onchange = function() {
            if (this.value == 1) {
                I("subtype_container").innerHTML = I('subtypes_1').innerHTML;
                I("subtype_container").style.display = "block";
                if (I("beds_container")) {
                    I("beds_container").innerHTML = I('beds_area').innerHTML;
                    I("beds_container").style.display = "block";
                }
                if (I("baths_container")) {
                    I("baths_container").innerHTML = I('baths_area').innerHTML;
                    I("baths_container").style.display = "block";
                }
            } else if (this.value == 2) {
                I("subtype_container").innerHTML = I('subtypes_2').innerHTML;
                I("subtype_container").style.display = "block";
                if (I("beds_container")) {
                    I("beds_container").style.display = "none";
                }
                if (I("baths_container")) {
                    I("baths_container").style.display = "none";
                }
            } else if (this.value == 3) {
                I("subtype_container").innerHTML = I('subtypes_3').innerHTML;
                I("subtype_container").style.display = "block";
                if (I("beds_container")) {
                    I("beds_container").innerHTML = I('beds_area').innerHTML;
                    I("beds_container").style.display = "block";
                }
                if (I("baths_container")) {
                    I("baths_container").innerHTML = I('baths_area').innerHTML;
                    I("baths_container").style.display = "block";
                }
            } else if (this.value == 0) {
                I("subtype_container").innerHTML = "";
                I("subtype_container").style.display = "none";
                if (I("beds_container")) {
                    I("beds_container").style.display = "none";
                }

                if (I("baths_container")) {
                    I("baths_container").style.display = "none";
                }
            }

            return false;
        };
    }

    if (I("purpose_n")) {
        I("purpose_n").onchange = function() {

            if (this.value == 1) {

                I("price_main").innerHTML = I("price_buy").innerHTML;

            } else if (this.value == 2) {

                I("price_main").innerHTML = I("price_rent").innerHTML;

            } else if (this.value == 3) {

                I("price_main").innerHTML = I("price_wanted").innerHTML;
            } else {
                I("price_main").innerHTML = I("price_buy").innerHTML;
            }
        };
    }
}

/////Multiple Location

add_other_loc = true;

function set_adv_confirm_multiple(combo_id, default_text, hide_div_flag) {

    var index = 0;
    var last_index = 0;
    var tag_name;
    var parent_cat_array = new Array();
    tag_name = I(combo_id + "_combo_text").tagName;
    while (el = I(combo_id + "_" + index + "_combo_text")) {
        if (el.innerHTML != 'Any') {
            last_index = index;
            parent_cat_array[index] = I(combo_id + "_" + last_index + "_combo_text").innerHTML;
        }
        index++;
    }
    //alert(combo_id + "_" + last_index);
    if (last_index > 0) {
        var combo_value = I(combo_id + "_" + last_index).value;
        var combo_text = I(combo_id + "_" + last_index + "_combo_text").innerHTML;
        combo_text = combo_text.replace(/<font color="#e5ecf9">_<\/font>/g, " ");
        combo_text = combo_text.replace(/<font color="#E5ECF9">_<\/font>/g, " ");
        combo_text = combo_text.replace(/<FONT color=#e5ecf9>_<\/FONT>/g, " ");
    }


    multi_select_cross = "</label><a onclick='unselect_multi_location(\"" + combo_id + "\",this)' >&nbsp;&nbsp;&nbsp;</a>";
    rounded_top = "<label>";
    rounded_bottom = "";
    loc_added = false;
    if (combo_value > 0 && default_text == "combo") {
        old_multiple_value = I(combo_id).value;
        if (old_multiple_value.indexOf(",") < 0)
            old_multiple_value = ",";
        I(combo_id + "_multiple").style.display = "block";
        parent_loc = "Pakistan";
        if (last_index > 1)
            parent_loc = parent_cat_array[1];
        parent_loc = parent_loc.replace(/<font color="#e5ecf9">_<\/font>/g, " ");
        parent_loc = parent_loc.replace(/<font color="#E5ECF9">_<\/font>/g, " ");
        parent_loc = parent_loc.replace(/<FONT color=#e5ecf9>_<\/FONT>/g, " ");
        loc_added = true;
        if (old_multiple_value.indexOf("," + combo_value + ",") < 0) {
            cmb_new_text = combo_text + " - " + parent_loc;
            combo_text = "<span id='" + combo_value + "_" + combo_id + "' class='multiple_location_span'>" + rounded_top + cmb_new_text + multi_select_cross + rounded_bottom + "</span>";
            $("#" + combo_id + "_multiple div").append(combo_text);
            I(combo_id).value = old_multiple_value + combo_value + ",";
            set_adv_confirm_text(combo_id, 'inner_call');
        }
    } else if (autoCompleteObj.id > 0 && default_text == "auto") {
        old_multiple_value = I(combo_id).value;
        if (old_multiple_value.indexOf(",") < 0)
            old_multiple_value = ",";
        I(combo_id + "_multiple").style.display = "block";

        cat_id_value = autoCompleteObj.id;
        loc_added = true;
        if (old_multiple_value.indexOf("," + cat_id_value + ",") < 0) {
            cmb_new_text = autoCompleteObj.value + " - " + autoCompleteObj.extra;
            //cmb_new_text = cmb_new_text.replace(/ /g,'_');
            combo_text = "<span id='" + cat_id_value + "_" + combo_id + "' class='multiple_location_span'>" + rounded_top + cmb_new_text + multi_select_cross + rounded_bottom + "</span>";
            $("#" + combo_id + "_multiple div").append(combo_text);
            I(combo_id).value = old_multiple_value + cat_id_value + ",";
            set_adv_confirm_text(combo_id, 'inner_call');
        }

        if (autoCompleteObj) {
            autoCompleteObj = {};
            var auto = I(combo_id + "_auto_c").firstChild;
            auto.value = "Type Your Location Here...";
            auto.style.color = "#808080";
        }
        I(combo_id + "_auto_c").firstChild.blur();
    }
    if (loc_added && I("multi_cat_select_div_" + combo_id) == null) {
        add_other_loc = false;
        another_loc_div = "Add Another Location";
        more_loc_div = "<div style='padding:20px 0px 0px 8px;clear:both;color:#EF7C21;font-weight:bold;width:70%;' id='multi_cat_select_div_" + combo_id + "'>Selected Location(s)</div>";
        $("#" + combo_id + "_multiple").before(more_loc_div);
        $("#other_loc_extra_div" + combo_id).html(another_loc_div);
    }

}


function set_adv_confirm_text(combo_id, default_text, hide_div_flag) {
    if (typeof default_text === "undefined")
        setadvflag(0);
    hide_adv_contaier(combo_id + '_container');
    total_cat = $("#" + combo_id + "_multiple div > span").size();
    if (total_cat == 1) {
        I(combo_id + "_combo_text").innerHTML = strip_tags($("#" + combo_id + "_multiple div").find("span").html());
    } else if (total_cat > 1) {
        I(combo_id + "_combo_text").innerHTML = total_cat + " Locations Selected";
    } else {
        I(combo_id + "_combo_text").innerHTML = "Any";
    }
    set_ac_flag(0);
    hide_ac();
}



function hide_adv_contaier_multiple(div) {

    current_url = window.location.search.substring(1);
    if ((current_url.indexOf("newlisting") > -1 || current_url.indexOf("editlisting") > -1) && I("prov_error_div") != null) {
        if (I("cat_id_0_combo") != null && I("cat_id_1_combo") != null) {
            if (I("cat_id_0_combo") != null && I("cat_id_1_combo_text").innerHTML == "Any") {
                $("#cat_id_0_container ul li:first").trigger("mousedown");
                I("cat_id_combo_text").innerHTML = "Any";
                $("#prov_error_div").remove("div");
            }
        }
    }
    if (advflag == 0) // o = mouse is out , 1 = mouse is in the div
    {
        I(div).style.display = "none";
    }
}

function unselect_multi_location(c_id, atag) {
    parent_span = $(atag).parent();
    parent_span_id = $(parent_span).attr("id");
    cat_value = parent_span_id.replace("_" + c_id, "");
    I(c_id).value = I(c_id).value.replace("," + cat_value + ",", ",");
    setTimeout("action_after_removed_mutli_cat('" + parent_span_id + "','" + c_id + "')", 10);

}

function action_after_removed_mutli_cat(parent_span_id, c_id) {
    $("#" + parent_span_id).remove();
    if ($("#" + c_id + "_multiple div").html() == "") {
        I(c_id + "_multiple").style.display = "none";
        $("#other_loc_extra_div" + c_id).html("Please type your location below");
        $("#multi_cat_select_div_" + c_id).remove("div");
        add_other_loc = true;
    }
    set_adv_confirm_text(c_id, "inner_call");
}

function log(value) {
    //console.log(value);
}