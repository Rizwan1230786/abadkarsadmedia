// (function($){$.fn.extend({
// 	center_screen: function(position) {
// 		var win_height = $(window).height();
// 		var ypos = $(window).scrollTop();
// 		var bounds = { w : $(this).width(), h : $(this).height() };
// 		xpos = ($(window).width()-bounds.w)/2; if(position=="fixed") ypos = 0;else position="absolute";
// 		ypos = ypos + (win_height-bounds.h)/2; ypos=(ypos>17)?ypos:17;
// 		return $(this).css({ top: ypos, left: xpos,position:position});
// 	}});
// })(jQuery);


//$(document).ready(function()
section = querySt("section");
status = querySt("status");
tabs = querySt("tabs");
href = "";
if (typeof tabs === "undefined") {
    tabs = 1;
}
tabs_val = "tabs=" + tabs;

href += "tabs=" + tabs;
if (typeof campSelect === "undefined")
    campSelect = "0";
var section_array = new Array("agedit_user", "clients", "inquiries", "editAlert", "inquiries", "advertise", "clients", "inquiries");
var subsection_array = new Array("", "clients", "inquiry_details", "", "inquiry_details", "editCompaign", "add_client", "newlead");
var link_index = new Array("0", "6", "4", "3", "5", campSelect, "8", "3");
var link_counter = 0;
var next_counter = section_array.length;
var url_main = top.location.href;
for (var n = 0; n < next_counter; n++) {
    var chk_link = "";
    if (section_array[n] != "")
        chk_link += "section=" + section_array[n];
    if (subsection_array[n] != "")
        chk_link += "&subsection=" + subsection_array[n];
    if (top.location.href.indexOf(chk_link) > -1) {
        url_main = $("#mybayut_menu a")[link_index[n]];
    }
}
$("#mybayut_menu a").each(function() {
    this_link = $(this).attr("href");
    if (url_main == this_link) {
        $(this).removeClass("leftcolumnlink");
        $(this).addClass("leftcolumnlink_selected");
        link_counter++;
    }
});
var section_mail = querySt("section");
var mail_page = querySt("subsection");
var mail_folder = querySt("folder");
var check_link = true;
var mail_type = querySt("type");
var mail_user = querySt("userid");
var purpose = querySt("purpose");

if (section_mail == "listings" && typeof status !== "undefined") {
    listing_url = this_domain_mybayut + "/index.php?tabs=2&section=" + section_mail;
    if (typeof mail_page !== "undefined")
        listing_url += "&subsection=" + mail_page;
    listing_url += "&status=" + status;
    $("#mybayut_menu a").each(function() {
        this_link = $(this).attr("href");
        if (this_link.indexOf(listing_url) > -1) {
            $(this).removeClass("leftcolumnlink");
            $(this).addClass("leftcolumnlink_selected");
            return false;
        }
    });
} else if (!isNaN(mail_folder)) {
    custom_folder_link = "";
    if (typeof mail_type !== "undefined")
        custom_folder_link += "&type=" + mail_type;
    custom_folder_link += "&folder=" + mail_folder;
    if (typeof mail_user !== "undefined" && mail_user > 0 && !isNaN(mail_user))
        custom_folder_link += "&userid=" + mail_user;

    $("#mybayut_menu a").each(function() {
        this_link = $(this).attr("href");
        if (this_link.indexOf(custom_folder_link) > -1 && check_link) {
            $(this).removeClass("leftcolumnlink");
            $(this).addClass("leftcolumnlink_selected");
            check_link = false;
        }
    });
} else if (section_mail == "mailbox_viewmessages" && typeof mail_folder === "undefined") {
    custom_folder_link = "section=" + newview + "&tabs=3&type=" + mail_type;
    if (typeof mail_user !== "undefined" && mail_user > 0 && !isNaN(mail_user))
        custom_folder_link += "&userid=" + mail_user;
    $("#mybayut_menu a").each(function() {
        this_link = $(this).attr("href");
        if (this_link.indexOf(custom_folder_link) > -1 && check_link) {
            $(this).removeClass("leftcolumnlink");
            $(this).addClass("leftcolumnlink_selected");
            check_link = false;
        }
    });
} else if (mail_page >= 1) {
    custom_page_link = "section=" + section_mail + "&tabs=3";
    if (typeof mail_type !== "undefined")
        custom_page_link += "&type=" + mail_type;

    if (typeof mail_user !== "undefined" && mail_user > 0 && !isNaN(mail_user))
        custom_page_link += "&userid=" + mail_user;
    $("#mybayut_menu a").each(function() {
        this_link = $(this).attr("href");
        if (this_link.indexOf(custom_page_link) > -1) {
            $(this).removeClass("leftcolumnlink");
            $(this).addClass("leftcolumnlink_selected");
            return false;
        }
    });
} else if (mail_page != "" && (section_mail != "rejected_images" && section_mail != "rejected_videos" && section_mail != "advertise")) {
    custom_page_link = "tabs=" + tabs + "&section=" + section_mail;
    if (typeof mail_type !== "undefined")
        custom_page_link += "&type=" + mail_type;


    if (typeof mail_user !== "undefined" && mail_user > 0 && !isNaN(mail_user))
        custom_page_link += "&userid=" + mail_user;


    $("#mybayut_menu a").each(function() {

        this_link = $(this).attr("href");
        if (this_link.indexOf(custom_page_link) > -1) {
            $(this).removeClass("leftcolumnlink");
            $(this).addClass("leftcolumnlink_selected");
            return false;
        }
    });
} else if (section_mail == "rejected_images") {
    custom_page_link = "tabs=" + tabs + "&section=" + section_mail;
    if (typeof purpose !== "undefined")
        custom_page_link += "&purpose=" + purpose;

    $("#mybayut_menu a").each(function() {
        this_link = $(this).attr("href");
        if (this_link.indexOf(custom_page_link) > -1) {
            $(this).removeClass("leftcolumnlink");
            $(this).addClass("leftcolumnlink_selected");
            return false;
        }
    });
} else if (section_mail == "rejected_videos") {
    custom_page_link = "tabs=" + tabs + "&section=" + section_mail;
    if (typeof purpose !== "undefined")
        custom_page_link += "&purpose=" + purpose;

    $("#mybayut_menu a").each(function() {
        this_link = $(this).attr("href");
        if (this_link.indexOf(custom_page_link) > -1) {
            $(this).removeClass("leftcolumnlink");
            $(this).addClass("leftcolumnlink_selected");
            return false;
        }
    });
}

imzee_live(".view_detail",
    "mousemove",
    function() {
        overlib('<b>Click here to view:</b><br />Property Details<br />Landlord Details<br />Listing Owner Details', WIDTH, 150, CENTER, CAPTION, "Details");
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        id = $(this).attr("id");
        selector = id.replace("view_", "");
        //newlink = this_domain_mybayut + "/includes/inventory_search/inventory_view_detail.php?selector="+selector;

        var rdata = {
            ajax: 1,
            ajax_section: "dash_prop_invent",
            ajax_action: "get_property_view_popup_html",
            selector: selector
        };

        str = $.ajax({
            data: rdata,
            async: false
        }).responseText;
        overlib(str, STICKY, CLOSECLICK, CAPTION, "View Details", WIDTH, 350, HEIGHT, 200, HAUTO, VAUTO, EXCLUSIVE, CELLPAD, 0);
    }
);

$(".project_view_detail").live("mousemove", function(event) {
    overlib('<b>Click here to view:</b><br />Project Details<br />Developer Info', WIDTH, 150, CENTER, CAPTION, "Details");
});

$(".project_view_detail").live("mouseout", function(event) {
    return nd();
});

$(".project_view_detail").live("click", function(event) {
    id = $(this).attr("id");
    selector = id.replace("view_", "");
    //newlink = this_domain_mybayut + "/includes/inventory_search/inventory_view_project_detail.php?selector="+selector;
    newlink = "?ajax=1&ajax_section=clients_leads&ajax_action=project_view_detail&selector=" + selector;
    str = $.ajax({
        url: newlink,
        async: false
    }).responseText;
    overlib(str, STICKY, CLOSECLICK, CAPTION, "View Details", WIDTH, 350, HEIGHT, 200, HAUTO, VAUTO, EXCLUSIVE, CELLPAD, 0);
});

function propertyview_tabs(this_id) {
    if (this_id == "a_property") {
        I("property_div").style.display = "block";
        I("client_div").style.display = "none";
        I("user_div").style.display = "none";
        I("a_property").className = "selected";
        I("a_client").className = "";
        I("a_user").className = "";
    } else if (this_id == "a_client") {
        I("property_div").style.display = "none";
        I("client_div").style.display = "block";
        I("user_div").style.display = "none";
        I("a_property").className = "";
        I("a_client").className = "selected";
        I("a_user").className = "";
    } else if (this_id == "a_user") {
        I("property_div").style.display = "none";
        I("client_div").style.display = "none";
        I("user_div").style.display = "block";
        I("a_property").className = "";
        I("a_client").className = "";
        I("a_user").className = "selected";
    }
}
imzee_live("#admin_msg_btn", "click", function(event) {
    $("#admin_msg_form").ajaxSubmit(function(str) {
        $('.admin_msg').remove();
    });
});

function menu_divtoggle(a_id, div_id) {
    div_display = I(div_id).style.display;
    if (div_display == "block") {
        I(div_id).style.display = "none";
        I(a_id).className = "leftcolumnlink_sub ";
    } else {
        I(div_id).style.display = "block";
        I(a_id).className = "leftcolumn_selected";
    }
}

function menu_alldiv(a_id) {
    a_class = I(a_id).className;
    if (a_class == "a_allclose") {
        I("d_active").style.display = "block";
        I("a_active").className = "leftcolumn_selected";
        I("d_edited").style.display = "block";
        I("a_edited").className = "leftcolumn_selected";
        I("d_pending").style.display = "block";
        I("a_pending").className = "leftcolumn_selected";
        I("d_expired").style.display = "block";
        I("a_expired").className = "leftcolumn_selected";
        I("d_uploaded").style.display = "block";
        I("a_uploaded").className = "leftcolumn_selected";
        I("d_deleted").style.display = "block";
        I("a_deleted").className = "leftcolumn_selected";
        I("d_rejected").style.display = "block";
        I("a_rejected").className = "leftcolumn_selected";
        I("rejected_images_body").style.display = "block";
        I("rejected_images_head").className = "leftcolumn_selected";

        I(a_id).className = "a_allopen";
    } else {
        I("d_active").style.display = "none";
        I("a_active").className = "leftcolumnlink_sub";
        I("d_edited").style.display = "none";
        I("a_edited").className = "leftcolumnlink_sub";
        I("d_pending").style.display = "none";
        I("a_pending").className = "leftcolumnlink_sub";
        I("d_expired").style.display = "none";
        I("a_expired").className = "leftcolumnlink_sub";
        I("d_uploaded").style.display = "none";
        I("a_uploaded").className = "leftcolumnlink_sub";
        I("d_deleted").style.display = "none";
        I("a_deleted").className = "leftcolumnlink_sub";
        I("d_rejected").style.display = "none";
        I("a_rejected").className = "leftcolumnlink_sub";
        I("rejected_images_body").style.display = "none";
        I("rejected_images_head").className = "leftcolumnlink_sub";
        I(a_id).className = "a_allclose";
    }
}

function jajax_paginate(totalresults, pageresults, pagenumber, linksnumber) {
    totalresults = parseInt(totalresults);
    pageresults = parseInt(pageresults);
    pagenumber = parseInt(pagenumber);
    if (typeof linksnumber === "undefined") {
        linksnumber = 10;
    } else {
        linksnumber = parseInt(linksnumber);
    }
    var ret = "";
    previoustext = "<";
    nexttext = ">";
    firsttext = "<<";
    lasttext = ">>";

    if (totalresults > 0 && totalresults > pageresults) {
        if (pagenumber <= 0) {
            pagenumber = 1;
        }
        totallinks = Math.ceil(totalresults / pageresults);
        if (pagenumber > totallinks) {
            pagenumber = totallinks;
        }


        if (pagenumber > linksnumber) {

            ret += "<span style=\"line-height:normal;\"><a href=\"javascript: void(0);\" title=\"First page\" id=\"1\">" + firsttext + "</a></span>";
            if (pagenumber > 1) {
                p_no = pagenumber - 1;
                ret += "<span style=\"line-height:normal;\"><a href=\"javascript: void(0);\" title=\"Previous page\" id=\"" + p_no + "\">" + previoustext + "</a></span>";
            }
        } else {
            if (pagenumber > 1) {
                p_no = pagenumber - 1;
                ret += "<span style=\"line-height:normal;\"><a href=\"javascript: void(0);\" title=\"Previous page\" id=\"" + p_no + "\">" + previoustext + "</a></span>";
            }
        }
        left = (pagenumber % linksnumber != 0) ? pagenumber - pagenumber % linksnumber + 1 : (pagenumber - linksnumber + 1);
        right = (left + linksnumber - 1 > totallinks) ? totallinks : left + linksnumber - 1;

        ret += "";
        for (i = left; i <= right; i++) {
            if (pagenumber != i) {
                ret += "<span style=\"line-height:normal;\"><a href=\"javascript: void(0); \" title=\"Page " + i + "\" id=\"" + i + "\" >" + i + "</a></span>";

            } else {
                ret += "<span class=\"selected\" style=\"line-height:normal;\">" + i + "</span>";
            }
        }

        if (pagenumber < totallinks) {
            p_no = pagenumber + 1;
            ret += "<span style=\"line-height:normal;\"><a href=\"javascript: void(0);\" title=\"Next page\" id=\"" + p_no + "\">" + nexttext + "</a></span>";
            if (right < totallinks) {
                ret += "<span style=\"line-height:normal;\"><a href=\"javascript: void(0);\" title=\"Last page\" id=\"" + totallinks + "\">" + lasttext + "</a></span>";

            }
        } else {
            if (right < totallinks) {
                p_no = pagenumber + 1;
                ret += "<span style=\"line-height:normal;\"><a href=\"javascript: void(0);\" title=\"Last page\" id=\"" + p_no + "\">" + lasttext + "</a></span>";
            }
        }
        ret += "<span style=\"line-height:normal;\" class=\"page_x_of_y\">Page " + pagenumber + " of " + totallinks + "</span>";
    }
    return ret;
} //// End of Function

// new existing client 
imzee_live("#new_client_radio", "click", function(event) {
    $("#spacer_div_existing").css({
        "display": "block"
    });
    if (I("lead_client_allocated") != null)
        I("lead_client_allocated").style.display = "block";
    $("#new_client_div").css({
        "display": ""
    });
    $("#existing_client_div").css({
        "display": "none"
    });
    $("#search_res_div").html("");
});
imzee_live("#existing_client_radio", "click", function(event) {
    $("#spacer_div_existing").css({
        "display": "none"
    });
    if (I("lead_client_allocated") != null)
        I("lead_client_allocated").style.display = "none";
    $("#existing_client_div").css({
        "display": ""
    });
    $("#new_client_div").css({
        "display": "none"
    });
});

function client_search() {

    $("#spacer_div_existing").css({
        "display": "block"
    });
    var searchable_text = I("searchable_text").value;
    var searchable_type = I("search_type").value;
    var existing_client_ids = I("existing_client_ids").value;
    $("#search_res_div").css({
        "display": ""
    });
    var load_image = "<center><img src='" + this_domain + "/images/common/loading.gif' /></center>";
    $("#search_res_div").html(load_image);
    //$.get(this_domain_mybayut + '/includes/inquiries/search_clients.php', {search_value:searchable_text,search_field:searchable_type,existing_client_ids:existing_client_ids},
    $.get('?ajax=1&ajax_section=clients_leads&ajax_action=search_clients', {
            search_value: searchable_text,
            search_field: searchable_type,
            existing_client_ids: existing_client_ids
        },
        function(str) {
            $("#search_res_div").html(str);
        });
}

function submitform() {
    cClick();
    document.myform.submit();
}


function textCounter(field, countfield, maxlimit) {

    if (field.value.length > maxlimit)
        field.value = field.value.substring(0, maxlimit);
    else
        countfield.value = maxlimit - field.value.length;
} ////End of Function

function actionInvitation(id, char) {
    frmaction = document.frm_inv.action;
    newaction = frmaction + "?id=" + id + "&action=" + char;
    document.frm_inv.action = newaction;
    $("#frm_inv").ajaxSubmit(function(str) {
        window.location.reload();
    });
    document.frm_inv.action = frmaction;
} ////End of Function

function lead_box(prop_selector) {
    overlib("<div id=\"listing_lead\">Loading....</div>", STICKY, CLOSECLICK, CAPTION, 'View Leads', WIDTH, 850, OFFSETY, -20);
    //$.get(this_domain_mybayut + "/includes/sub/display_leads.php",{selector : prop_selector},
    $.get('?ajax=1&ajax_section=clients_leads&ajax_action=display_leads', {
            selector: prop_selector
        },
        function(str) {
            I("listing_lead").innerHTML = str;
        });
} ////End of Function





function shortlist_properties(div_id) {
    var this_id = "";
    if (div_id == "inventory_data") {
        var data_div = "#" + div_id;
    } else {
        var data_div = "#data_" + div_id;
    }
    var this_chk = $(data_div + " .grid-column-data input[@type=checkbox]:checked");
    var chk_len = this_chk.length;
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].id;
        chk_id = chk_id.replace("chk_", "");
        this_id += chk_id + ",";
    }
    if (this_id == "") {
        return overlib("No property selected.<br /><br /><center><input type=\"button\" value=\"Close\" onclick=\"cClick();\"></center>", STICKY, CLOSECLICK, CAPTION, 'Error', VAUTO, HAUTO);
    } else {
        var inquiry_id = $("#inquiry_id").val();
        if (inquiry_id == 'undefined')
            inquiry_id = 0;
        var load_image = "<img src='" + this_domain + "/images/common/loading1.gif' />";
        overlib("<div style=\"position:relative; z-index:1000;\" id=\"ob_searchShortlist\">" + load_image + "</div>", CAPTION, "Add To Shortlist", STICKY, EXCLUSIVE, CLOSECLICK, WIDTH, 700);
        $("#overDiv").prepend("<iframe id=\"Iframe1\" style=\"position:absolute;filter:alpha(opacity=0);-moz-opacity: 0;margin-top:30px;\" width=\"100%\"  scrolling=\"no\"  height=\"400\" frameborder=\"0\"  src=\"\"></iframe>");
        //$.get(this_domain_mybayut+"/includes/inquiries/shortlist_search.php",{properties_id:this_id,inquiry_id:inquiry_id},function(str)
        $.get('?ajax=1&ajax_section=clients_leads&ajax_action=shortlist_search', {
            properties_id: this_id,
            inquiry_id: inquiry_id,
            ajax_is: 1
        }, function(str) {
            $("#ob_searchShortlist").html(str);
        });
    }
}


function add_location(load_div) {
    //$('body')(document.getElementById("hidden_location_" +load_div).innerHTML);
    //document.getElementById("location_" +load_div).innerHTML = document.getElementById("hidden_location_" +load_div).innerHTML;

    document.getElementById("location_" + load_div).style.display = "block";
    //document.getElementById("hidden_location_" +load_div).innerHTML = "";

    var curr_div = load_div - 1;
    document.getElementById("loc_add_text_" + curr_div).style.visibility = "hidden";

}

function shortlist_seach() {

    //var new_div_top = $("#inquiry_update_btn").offset().top +10;
    //var new_div_left = $("#inquiry_update_btn").offset().left +20;
    //$("#inquiry_update_rec").css({'display':'block','position':'absolute','top':new_div_top,'left':new_div_left,'border':'1px solid','background':'#DCDCDC','z-index':'1000','width':'200px'});

    var load_image = "<span id=\"shortlist_res_div\" style=\"margin-top:25px;display:block;float:left;width:95%;\"><img src='" + this_domain + "/images/common/loading1.gif' /></span>";
    $("#shortlist_search_res").html(load_image);
    $("#shortlistings_search").ajaxSubmit(function(str) {
        $("#shortlist_search_res").html(str);
        var res_div_height = $("#searched_leads").height();
        var res_div_width = $("#searched_leads").width();
        var iframeHeight = $("#Iframe1").height();
        //alert(iframeHeight);
        //if(iframeHeight > 700)
        //{
        $("#Iframe1").height('1400px');
        //}
        //alert($("#Iframe1").height());		
        //document.getElementById("#Iframe1").style.height = "900px";
        //alert(document.getElementById("#Iframe1").style.height):


    });
}

imzee_live("#shortlist_ajax_type", "change", function(event) {
    if (this.value != '') {
        var shortListing = $("#shortlisting").val();
        var load_image = "<img src='" + this_domain + "/images/common/loading1.gif' />";
        $('#ajax_subtype').html(load_image);
        show_txt = '';
        if (mail_page == "clients" || mail_page == "newlead" || mail_page == "inquiry_details")
            show_txt = 'show_txt';

        if (shortListing == 1)
            show_txt = 'shortlisting';
        $.get(this_domain_mybayut + '/includes/newlisting/home_ajax_subtype.php', {
                type: this.value,
                ajax_subsection: show_txt
            },
            function(str) {
                $("#ajax_subtype").html(str);
            });
        if ($(this).val() == 1)
            return false;
    } else {
        $("#ajax_subtype").html('');
    }
});

function shortlist_go() {

    var data_div = "#searched_leads";
    var this_id = "";
    var this_chk = $(data_div + " input[@type=checkbox]:checked");
    var chk_len = this_chk.length;
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].id;
        chk_id = chk_id.replace("chk_", "");
        this_id += chk_id + ",";
    }

    if (this_id == "") {
        return overlib("No property selected.<br /><br /><center><input type=\"button\" value=\"Close\" onclick=\"cClick();\"></center>", STICKY, CLOSECLICK, CAPTION, 'Error', VAUTO, HAUTO);
    } else {

        var inquiry_id = $("#inquiry_id").val();
        if (inquiry_id == 'undefined')
            inquiry_id = 0;

        overlib("<div style=\"display:block;float:left;\" id=\"ob_searchShortlist\">Loading....</div>", CAPTION, "Search listings for Shortlist", STICKY, CLOSECLICK, WIDTH, 600);
        //	$.get(this_domain_mybayut+"/includes/inquiries/shortlist_search.php",{properties_id:this_id,inquiry_id:inquiry_id},function(str)
        $.get('?ajax=1&ajax_section=clients_leads&ajax_action=shortlist_search', {
            properties_id: this_id,
            inquiry_id: inquiry_id,
            ajax_is: 1
        }, function(str) {
            $("#ob_searchShortlist").html(str);
        });
    }


}


function lead_go(p) {
    var load_image = "<span style=\"margin-top:25px;display:block;float:left;width:95%;\"><img src='" + this_domain + "/images/common/loading1.gif' /></span>";
    $("#outer_addshortlist").append(load_image);

    if (p == 2) {
        var data_div = "#searched_leads";
        var this_id = "";
        var this_chk = $(data_div + " input[@type=checkbox]:checked");
        var chk_len = this_chk.length;
        for (var i = 0; i < chk_len; i++) {
            chk_id = this_chk[i].id;
            chk_id = chk_id.replace("chk_", "");
            this_id += chk_id + ",";
        }
        var lead_ids = this_id;
        var lead_id_length = lead_ids.length;
        lead_id_length = lead_id_length - 1;
        lead_ids = lead_ids.substring(0, lead_id_length);
    } else {
        var lead_ids = $("#entered_leadID").val();
    }
    var property_ids = $("#selected_properties").val();
    //$.get(this_domain_mybayut + '/includes/inquiries/addto_shortlist.php', {properties:property_ids,lead_ids:lead_ids}, 
    $.get('?ajax=1&ajax_section=clients_leads&ajax_action=addto_shortlist', {
            properties: property_ids,
            lead_ids: lead_ids
        },
        function(str) {
            $("#outer_addshortlist").html(str);
        });
}

function show_more_info(info_var) {
    class_name = "." + info_var;
    $(class_name).toggle();
    showing = 0;
    if (I("chk_moreinfo").checked)
        showing = 1;
    //$.get(this_domain_mybayut + "/includes/inventory_search/set_cookie.php",{set_cookie:showing, cookie_name:info_var},
    //$.get('?ajax=1&ajax_section=clients_leads&ajax_action=set_leads_cookies',{set_cookie:showing, cookie_name:info_var},
    $.get("?ajax=1&ajax_section=dash_prop_invent&ajax_action=show_info_inventory_search_list", {
            set_cookie: showing,
            cookie_name: info_var
        },
        function(str) {});
} ////End of Function

function show_reg_addition_info(inputid) {
    switch (inputid) {
        case "phone_country":
        case "fax_country":
            ob_text = "Enter your country code.<br />Example: <b>+92</b>-51-12345678";
            break;
        case "phone_area":
        case "fax_area":
            ob_text = "Enter your area code.<br />Example: +92-<b>51</b>-12345678";
            break;
        case "phone":
        case "fax":
            ob_text = "Enter your phone code.<br />Example: +92-51-<b>12345678</b>";
            break;
        case "cell_code":
        case "whatsapp_code":
            ob_text = "Enter your country code..<br />Example: <b>+92</b>-3001234567";
            break;
        case "cell":
        case "company_whatsapp":
        case "whatsapp":
            ob_text = "Enter your mobile code.<br />Example: +92-<b>3001234567</b>";
            break;
    }
    c_height = 0;
    container_div = I(inputid);
    var p_left = 0;
    var p_top = 0;
    if (container_div.offsetParent) {
        do {
            p_left += container_div.offsetLeft;
            p_top += container_div.offsetTop;
        }
        while (container_div = container_div.offsetParent);
    }
    p_top += 20;
    overlib(ob_text, STICKY, FIXX, p_left, FIXY, p_top);
}
imzee_live("#forum_cross_link", "click", function(event) {
    $("#forum_banner_div").remove("div");
    $.get(this_domain_mybayut + '/includes/remove_forum_banner.php', {},
        function(str) {});
});

function updateCSS(val, css_attr, effected_obj) {
    val = '#' + val
    if (val.length == 7) {
        $(effected_obj).css(css_attr, val);
    }
}

function confirm_del_image(form_action) {
    overlib("Are you sure you want to delete this item?<br /><br /><center><input type=\"submit\" value=\"Delete\" onclick=\" document.location= '" + form_action + "'\"> <input type=\"button\" value=\"Cancel\" onclick=\"cClick();\"></center></form>", STICKY, CLOSECLICK, CAPTION, 'Confirmation', VAUTO, HAUTO);
    return false;
}

imzee_live("#frm_tabs_search", "submit", function(a) {
    sel_val = $("#txt_tabs_search").val();
    sel_val = $.trim(sel_val);
    error_txt = "Invalid ID";
    if (isNaN(sel_val) || sel_val == "") {
        $("#txt_tabs_search").val(error_txt)
    } else {
        $("#txt_tabs_search").attr("maxlength", 15);
        $("#txt_tabs_search").val("Checking ID....");
        link_redirect = this_domain + '/profolio/index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=glb_redirect_search&page_type=ajax&selector=' + sel_val;
        //alert("hello");
        str = $.ajax({
            url: link_redirect,
            async: false
        }).responseText;
        if ($.trim(str) == "error") {
            $("#txt_tabs_search").val(error_txt);
            $("#txt_tabs_search").attr("maxlength", 10);
        } else {
            window.location = str;
        }
    }
    return false
});
imzee_live("#txt_tabs_search", "click", function(a) {
    $("#txt_tabs_search").val("")
});

function get_task_overlib(date, id) {
    var jsonData = $("#" + id).data('value');
    var productNames = $("#" + id).data('for');

    var response = "<table style='width:100%;'><thead><th style='text-align:left;'>Purchased Date</th><th style='text-align:left;'>Allocated To</th><th style='text-align:left;'>Product</th><th style='text-align:center;'>Quantity</th></thead><tbody>";
    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    $.each(jsonData, function(index, value) {
        if (index == date) {
            $.each(value, function(ind, val) {
                $.each(val, function(i, v) {
                    key = new Date(index);
                    var nameData = ind.split('|');
                    nameData = nameData[1];
                    response += "<tr><td style='text-align:left;'>" + key.getDate() + " " + month[key.getMonth()] + ", " + key.getFullYear() + "</td>";
                    response += "<td style='text-align:left;'>" + nameData + "</td>";
                    response += "<td style='text-align:left;'>" + productNames[v['product_id']] + "</td>";
                    response += "<td style='text-align:center;'>" + v['quantity'] + "</td>";

                    response += "</tr>";
                });
            });
        }
    });
    response += "</tbody></table>";
    overlib(response, STICKY, CLOSECLICK, CAPTION, "Purchased Log Data", WIDTH, 400, HAUTO, VAUTO, EXCLUSIVE, CELLPAD, 0);

    $('#overDiv').css({
        "top": "60%",
    });
}










// ---------------------------------------- Advertise tab start here ------------------------------- //


imzee_live(".checkout_cart", "click", function(event) {
    var txt = "";

    overlib("<div id='header_cart_body'>Processing...</div>", STICKY, CLOSECLICK, CAPTION, "Cart", WIDTH, 315, HEIGHT, 100, HAUTO, VAUTO, EXCLUSIVE, CELLPAD, 0);


    // ajax here
    data = {
        ajax: 1,
        get_cart_items_overlib: '1',
        ajax_section: "advertise",
        ajax_action: "get_cart_items_overlib",
    };



    $.ajax({
        data: data,
        success: function(responseText) {
            $("#header_cart_body").html(responseText);
        }
    });

});





function populate_cart_items() {

    var user_id = $("#session_user_id").val();
    var order_id = $("#session_order_id").val();

    // If cart has items in it
    if (order_id != 0) {


        // ajax here
        var data = {
            ajax: 1,
            get_cart_items: '1',
            ajax_section: "advertise",
            ajax_action: "get_cart_items",
            user: user_id,
            order: order_id,
        };

        str = $.ajax({
            data: data,
            async: false
        }).responseText;

        // if(typeof str == 'string')
        str = JSON.parse(str);


        if ($.trim(str['status']) == "true") {
            // Cart box
            $("#cart-body").html(str['html']);
            $(".total_amount").text(str['grand_total_price'].toLocaleString());

            $(".gross_total").attr('data-gross_total', str['grand_total_price']);
            $(".gross_total").text(str['grand_total_price'].toLocaleString());


            // header Cart btn count
            if (parseInt(str['grand_total_price']) == "0") {
                $("#header_cart_count").css('display', 'none');
            } else {
                $("#header_cart_count").css('display', 'block');
            }

            $("#header_cart_count").html(str['cart_count']);

            // credits box
            $.each(str['credits'], function(index, value) {
                if ($("#" + index).length > 0) {
                    $("#" + index + " .product_quantity").val(value);
                }
            });


            $(".product_quantity").trigger("blur");


            var odid = "";
            var productid = "";

            $("#cart-body .row").each(function(index, value) {
                odid = $(this).data('odid');
                productid = $(this).data('productid');
                $("#product_" + productid).attr('data-productid', odid);
            });


        } else {
            $("#cart-body").text("No products added into cart.");
            $(".total_amount").text("0");
            $(".gross_total").attr('data-gross_total', str['grand_total_price']);
            $(".gross_total").text(str['grand_total_price'].toLocaleString());


            // To generate data attributes of total price n product price
            $(".product_quantity").trigger("blur");
        }

    } else {
        $("#cart-body").text("No products added into cart.");

        $(".total_amount").text("0");
        $(".gross_total").attr('data-gross_total', str['grand_total_price']);
        $(".gross_total").text(str['grand_total_price'].toLocaleString());



        $(".product_quantity").trigger("blur");
    }

}

imzee_live(".reset_count",
    "click",
    function(event) {
        var count = 0;
        var total_price = 0;
        var product_id = "";
        product_id = $(this).parent().parent().attr('id');

        var gross_total = parseInt($(".gross_total").attr('data-gross_total')) - parseInt($("#" + product_id + " .product_total_price").attr("data-total_price"));
        $(".gross_total").attr('data-gross_total', gross_total).text(gross_total.toLocaleString());

        $("#" + product_id + " .product_quantity").val(count);

        $("#" + product_id + " .product_total_price").text(total_price);
        $("#" + product_id + " .product_total_price").attr("data-total_price", total_price);

    }
);


imzee_live(".minus_count",
    "click",
    function(event) {
        var product_id = "";
        product_id = $(this).parent().parent().attr('id');
        var count = 0;
        var total_price = 0;

        count = parseInt($("#" + product_id + " .product_quantity").val());

        if (count > 0) {
            count--;

            total_price = parseInt($("#" + product_id + " .product_total_price").attr('data-total_price')) - parseInt($("#" + product_id + " .product_unit_price").attr('data-product_price'));
            $("#" + product_id + " .product_total_price").attr("data-total_price", total_price);


            // Minus only the price of that row.....
            gross_total = parseInt($(".gross_total").attr('data-gross_total')) - parseInt($("#" + product_id + " .product_unit_price").attr('data-product_price'));
            $(".gross_total").attr('data-gross_total', gross_total).text(gross_total.toLocaleString());


            total_price = total_price.toLocaleString();
            if (count != 0)
                total_price += "(" + count + ")";
        }

        $("#" + product_id + " .product_total_price").text(total_price);
        $("#" + product_id + " .product_quantity").val(count);

    }
);


imzee_live(".plus_count",
    "click",
    function(event) {
        var product_id = "";
        product_id = $(this).parent().parent().attr('id');
        var count = 0;
        var total_price = 0;

        count = parseInt($("#" + product_id + " .product_quantity").val());

        if (count < parseInt(qty_upper_limit)) {
            count++;

            total_price = parseInt($("#" + product_id + " .product_total_price").attr('data-total_price')) + parseInt($("#" + product_id + " .product_unit_price").attr('data-product_price'));

            gross_total = parseInt($("#" + product_id + " .product_unit_price").attr('data-product_price')) + parseInt($(".gross_total").attr('data-gross_total'));
            $(".gross_total").attr('data-gross_total', gross_total).text(gross_total.toLocaleString());


            $("#" + product_id + " .product_total_price").attr("data-total_price", total_price);

            total_price = total_price.toLocaleString();

            total_price += "(" + count + ")";


            $("#" + product_id + " .product_total_price").text(total_price);
            $("#" + product_id + " .product_quantity").val(count);

        }
    }
);


function cal_product_quantity(param) {
    var value = param.value;

    // If input value is made empty set it to '0'
    if (value == "") {
        $(param).val('0');
    }

    var count = 0;
    var total_price = 0;
    var unit_price = 0;
    var product_id = 0;
    var gross_total = 0;

    product_id = $(param).parent().parent().attr('id');

    count = $(param).val();

    if (count >= 0) {
        unit_price = $("#" + product_id + " .product_unit_price").data("product_price");
        total_price = count * unit_price;
        $("#" + product_id + " .product_total_price").attr("data-total_price", total_price);
        total_price = total_price.toLocaleString();
        if (count != 0)
            total_price += " (" + count + ")";

        $("#" + product_id + " .product_total_price").text(total_price);

        $("#" + product_id + " .product_quantity").val(count);

        // Calculating gross_total
        $("#credits-body .row").each(function(index, value) {

            gross_total = parseInt(gross_total) + parseInt($(this).find(".product_total_price").attr('data-total_price'));

        });

        $(".gross_total").attr('data-gross_total', gross_total).text(gross_total.toLocaleString());

    }
}

$(".product_quantity").live("keyup", function(e) {
    text_div = $(".price_text").eq(0);

    if (/^[0-9]+$/.test(this.value)) {
        if (this.value > parseInt(qty_upper_limit))
            this.value = qty_upper_limit;
    } else {
        this.value = this.value.replace(/\D/g, '');
    }
});



function add_insert_to_cart(obj) {
    var product_name = $(obj).data('product');

    var product_row = "";
    var user_id = $("#session_user_id").val();
    var order_id = $("#session_order_id").val();

    var str = "";
    str = $(obj).parent().parent().attr('id');
    product_row = str;
    str = str.split("_");
    var product_id = str[str.length - 1];

    var quantity = $("#" + product_row + " .product_quantity").val();
    var product_price = parseInt($("#" + product_row + " .product_unit_price").attr("data-product_price"));
    var odid = "";

    if (quantity == parseInt(qty_lower_limit)) {
        $("#" + product_row + " .product_quantity").val("0");
        $(".product_quantity").trigger("blur");
        show_popup("", "<center><div style='line-height:30px; color:red;'>Please select an appropriate quantity before adding to cart.</div></center>", 350);
        return false;
    } else if (quantity > parseInt(qty_upper_limit)) {
        show_popup("", "<center><div style='line-height:30px; color:red;'>Please select an appropriate quantity before adding to cart.</div></center>", 350);
        return false;
    }


    if ($("#" + product_row).attr('data-productid')) {
        odid = $("#" + product_row).data('productid');
    }

    $(obj).children('.add_to_cart_btn').css('display', 'none');
    $(obj).children('.loader').css('display', 'block');


    show_popup("", "<center><div id='add_to_cart_processing' style='line-height:30px;'>Processing...</div></center>", 350);

    // // ajax here
    data = {
        ajax: 1,
        add_insert_items_to_cart: '1',
        ajax_section: "advertise",
        ajax_action: "add_insert_items_to_cart",
        user: user_id,
        order: order_id,
        product_id: product_id,
        quantity: quantity,
        odid: odid,
        product_price: product_price,
    };


    var txt = "";

    $.ajax({
        data: data,
        success: function(responseText) {
            str = JSON.parse(responseText);

            $(obj).children('.add_to_cart_btn').css('display', 'block');
            $(obj).children('.loader').css('display', 'none');


            if (str['status'] == "true") {

                // Input hidden sent to trigger cart overlib just when the call is successful
                txt = "<div>";
                txt += product_name + " Product has been successfuly added into the cart";
                txt += "</div>";

                $("#header_cart_count").text(str['cart_count']);

                if (str['cart_count'] != "0") {
                    $("#header_cart_count").css('display', 'block');
                }

                // Update session_order_id if this was the first item inserted.
                $("#session_order_id").val(str['odid']);

                // Repopulating cart on advertise tab 
                populate_cart_items();
                // $(".remove_cart_item").css("pointer-events","none");

            } else if (str['status'] == "lowquantity") {

                txt = "<div style='color:red;'>Cannot add less than one quantity into the cart</div>";

            } else if (str['status'] == "highquantity") {

                txt = "<div style='color:red;'>Cannot add more than 10000 quantity into the cart</div>";

            } else {
                txt = "Something went wrong. Couldn't add product into the cart";
                $(obj).children().attr("src", this_domain + "/images/common/add_to_cart.png");
            }

            $("#add_to_cart_processing").html(txt);

        }

    });



}

imzee_live(".remove_cart_item",
    "click",
    function(event) {
        var odid = "";
        var bulk_remove = 0;
        bulk_remove = $(this).data('bulk');

        if (bulk_remove == "1") {
            var multiple = $("#cart-body .row").length;

            if (multiple > 0) {
                $("#cart-body .row").each(function(index, value) {

                    $(this).find(".remove_cart_item").children().attr('src', this_domain + "/images/common/loading1.gif").css('margin-right', "15%");
                    odid += $(this).data('odid') + ",";

                });
                odid = odid.slice(0, -1);
            }
        } else {
            odid = $(this).parent().parent().data('odid');
            $(this).children().attr('src', this_domain + "/images/common/loading1.gif");
            $(this).children().css('margin-right', "15%");

            if ($(this).parent(".cart_row_child").length > 0)
                $(this).html("Processing...");
        }

        var current = $(this);


        // ajax here
        data = {
            ajax: 1,
            remove_cart_item: '1',
            ajax_section: "advertise",
            ajax_action: "remove_cart_item",
            odid: odid
        };

        str = $.ajax({
            data: data,
            async: true,
            success: function(str) {
                str = JSON.parse(str);
                if (str['status'] == "true") {

                    if (str['cart_count'] == "0") {
                        $("#header_cart_count").css('display', 'none');
                    }

                    $("#header_cart_count").text(str['cart_count']);

                    $("#session_order_id").val(str['odid']);

                    var product_id = "";

                    if (bulk_remove == "1") {

                        var productids = "";

                        $("#cart-body .row").each(function(index, value) {

                            productids += $(this).data('productid') + ",";

                        });

                        productids = productids.slice(0, -1);

                        var product_ids = productids.split(',');

                        $.each(product_ids, function(index, value) {

                            product_id = "product_" + value;

                            $("#" + product_id + " .product_quantity").val("0");

                            $("#" + product_id).attr("data-productid", "");

                            $("#" + product_id + " .product_quantity").trigger("blur");

                        });

                    } else {
                        product_id = "product_" + current.parent().parent().data('productid');

                        $("#" + product_id + " .product_quantity").val("0");

                        $("#" + product_id).attr("data-productid", "");

                        $("#" + product_id + " .product_quantity").trigger("blur");

                        // CART OVERLIB
                        if ($("#header_cart_overlib").children().length == 2) {
                            $("#header_cart_overlib").html("No products found in cart.");
                        } else {
                            $("#overlib_" + odid).remove();
                        }

                    }


                    // Repopulating cart on advertise tab 
                    populate_cart_items();

                }

            }

        });

    }

);




imzee_live(".cart_checkout",
    "click",
    function(event) {
        var checkout_btn_header = $(this).data("checkout_overlib");
        // If checkout btn not clicked from overlib in header
        if ($(this).data("checkout_overlib") != "1") {

            // Error if no item in cart 
            var cart_length = $("#cart-body").children().length;

            if (cart_length < 1) {
                show_popup("", "<center><div style='line-height:30px;'>No product(s) added into the cart</div></center>", 350);
                return false;
            }

        }

        if (checkout_btn_header != "1")
            show_popup("", "<center><div style='line-height:30px;'>Processing....</div></center>", 350);

        var current = $(this);

        var data = {
            ajax: 1,
            cart_checkout: '1',
            ajax_section: "advertise",
            ajax_action: "cart_checkout",
        };


        $.ajax({
            data: data,
            success: function(str) {
                current.children().attr('src', this_domain + "/images/common/checkout.png");

                str = JSON.parse(str);

                if (str["status"] == "true") {
                    if (str['missing_user_info'] == "true") {
                        // hide popup overlib if checkout clicked from header cart btn
                        if (checkout_btn_header == "1") {
                            cClick();
                        }


                        var city_dropdown = "<center>" + str['html'] + "</center>";
                        show_popup("", city_dropdown, 400);

                    } else {
                        populate_cart_items();
                        window.location.replace(str['html']);
                    }
                } else {

                    var popup_str = "<center><div style='line-height:30px; color:red;'>" + str['html'] + "</div></center>";
                    if (checkout_btn_header == "1") {
                        $("#header_cart_overlib").html(popup_str);

                    } else {
                        show_popup("", popup_str, 350);
                    }
                }

            }

        });

    }

);


imzee_live(".retry_checkout",
    "click",
    function(event) {
        var order_id = $(this).attr('data-order_id');

        var data = {
            ajax: 1,
            cart_checkout: '1',
            ajax_section: "advertise",
            ajax_action: "cart_checkout",
            order_id: order_id,
        };


        $.ajax({
            data: data,
            success: function(str) {

                str = JSON.parse(str);

                if (str["status"] == "true") {
                    window.location.replace(str['html']);
                } else {
                    var str_1 = "<center><div style='line-height:30px; color:red;'>" + str['html'] + "</div></center>";
                    show_popup("", str_1, 350);
                }

            }

        });

    }

);

function hide_popup() {
    imz_filter.click();
}


function show_imz_filter(_parms_) {
    _parms_ = _parms_ || {};
    imz_filter = $('#backgroundFilter').height($("body").height()).show().get(0);
    imz_filter.onclick = function() {
        $(imz_filter).hide();
        if (_parms_.onclose) _parms_.onclose.call();
        $(_parms_.div_selector).hide();
    };
    if (_parms_.div_selector) {
        if (_parms_.width) $(_parms_.div_selector).width(_parms_.width);
        if (_parms_.title) $(_parms_.div_selector).find(".dialog_title").html(_parms_.title);
        if (_parms_.html) $(_parms_.div_selector).find(".dialog_container").html(_parms_.html);

        if (_parms_.is_center == "1") {
            $(_parms_.div_selector).show().center_screen().find("input:first").focus();
        } else {
            $(_parms_.div_selector).css("left", "");
            $(_parms_.div_selector).css("top", "");

            $(_parms_.div_selector).show().find("input:first").focus();
        }


        $(_parms_.div_selector).keydown(function(e) {
            if (e.which == 27) $(imz_filter).click();
        });
    }
}

function imz_dialog(params) {
    show_imz_filter(params);
}


function show_popup(title, html, width, is_center = "1") {
    width = width || 450;
    imz_dialog({
        'div_selector': '#common_popup',
        width: width,
        title: title,
        html: html,
        is_center: is_center
    });
}

function show_product_infographics() {

    var img = "<img width='100%' height='100%' src='" + this_domain + "/images/common/listing_comparison.png' />";
    show_popup("", img, "750", "0");

}

function isEmpty(str) {
    return !str.replace(/\s+/, '').length;
}

imzee_live("#user_address", "blur", function(event) {
    if (user_address != null) {
        if (isEmpty($('#user_address').val())) {
            $('#user_address').css('border', '1px solid red');
        } else {
            $('#user_address').css('border', '1px solid #aeaeae');
        }
    }
});

imzee_live("#city_id_dropdown", "change", function(event) {
    if ($("#city_id_dropdown").val() == "") {
        $('#city_id_dropdown').css('border', '1px solid red');
    } else {
        $('#city_id_dropdown').css('border', '1px solid #aeaeae');
    }

});

imzee_live("#missing_user_info",
    "click",
    function(event) {
        var count = 0;

        var city_id = $('select[name="city_id"]').val();

        if (city_id == '' || city_id == 0) {
            $('select[name="city_id"]').css('border', '1px solid red');
            count++;
        }
        var user_address = $('#user_address').val();

        if (user_address != null) {
            if (isEmpty(user_address)) {
                $('#user_address').css('border', '1px solid red');
                count++;
            }
        }

        if (count == 0) {
            $("#missing_user_info").hide();

            var data = {
                ajax: 1,
                missing_user_info: '1',
                ajax_section: "advertise",
                ajax_action: "missing_user_info",
                city_id: city_id,
                user_address: user_address,
            };


            $.ajax({
                data: data,
                success: function(str) {

                    str = JSON.parse(str);

                    var response_msg = "";

                    if (str['status'] == "true") {
                        // Show success msg
                        response_msg = "The user's information has been successfully updated.";

                    } else {
                        // failure msg
                        response_msg = "<center><div style='line-height:30px; color:red;'>Something went wrong. Please try again later</div></center>";
                    }

                    $("#missing_details").html(response_msg);

                    // Wait for 3.5 seconds before closing popup
                    setTimeout(function() {

                        $(".dialog_close").click();

                    }, 3500);

                }

            });

        }


    }

);