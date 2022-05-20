var load_image = "<center><img src='" + this_domain + "/images/common/zn_logo_loading.gif' /></center>";
if ((section_mail != "clients" && section_mail != "inquiries") || mail_page == "clients") {
    imzee_live(".paginate span a", "click", function(event) {
        var a = $(this).parents('.paginate').attr("id");
        var data_div = "#data_" + a;
        $(data_div).html(load_image);
        var b = "#" + a + "_listings";
        var c = "#" + a + "_select select";
        var page_id = this.id
        var status_val = $("#h_firmstate").val();
        var sub_value = 20;
        if ($(c).val())
            sub_value = $(c).val();
        var sort_val = $("#order_" + a).val();
        var by_val = $("#by_" + a).val();
        var order_val = sort_val + "_" + by_val;
        var st_value = $("#st_" + a).val();
        var user_val = $("#slag_" + a).val();
        var listing_platform = $("#drp-" + a + "-input").val();
        var section = $("#section").val();

        //var newlink = this_domain_mybayut + "/includes/sub.php?purpose="+a+"&number_records="+sub_value+"&status="+status_val+"&page="+page_id+"&order="+order_val+"&showstatus="+st_value+"&sl_users="+user_val;
        var newlink = "?ajax=1&ajax_section=dash_prop_invent&ajax_action=get_property_management_list_html&purpose=" + a + "&number_records=" + sub_value + "&status=" + status_val + "&page=" + page_id + "&order=" + order_val + "&showstatus=" + st_value + "&sl_users=" + user_val + "&listing_platform=" + listing_platform + "&section=" + section;
        if ($("#client_id").val() > 0) {
            sort_val = $("#order_client").val();
            by_val = $("#by_client").val();
            order_val = sort_val + "_" + by_val;
            sub_value = I("sl_clientpage").value;
            //newlink = this_domain_mybayut + "/includes/sub.php?client_id="+$("#client_id").val()+"&page="+page_id+"&order="+order_val+"&number_records="+sub_value;
            newlink = "?ajax=1&ajax_section=dash_prop_invent&ajax_action=get_property_management_list_html&client_id=" + $("#client_id").val() + "&page=" + page_id + "&order=" + order_val + "&number_records=" + sub_value + "&listing_platform=" + listing_platform;
            data_div = "#data_client";
            rd_client_filter = $(".rd_clisting").val();
            if (rd_client_filter == 1 || rd_client_filter == 2)
                newlink += "&filter=" + rd_client_filter;
            a = "propClient_div";
        }

        $.get(newlink, {},
            function(str) {
                $(data_div).html(str);
                if ($("#client_id").val() > 0) {
                    var totalresults = parseInt(I("newtotal_").innerHTML);
                } else {
                    var totalresults = parseInt($("#newtotal_" + a).html());
                    var pageresults = parseInt($("#pno_" + a).val());
                    var pagenumber = parseInt($("#p_" + a).val());
                }
                var paginate = jajax_paginate(totalresults, sub_value, page_id);
                $("#" + a).html(paginate);
            });
    });
}
imzee_live(".show_select", "click", function(event) {
    var status_val = $("#h_firmstate").val();
    var div_id = $(this).parent().attr("id");
    var a = div_id.replace("_select", "");
    if ($("#slag_" + a).is("select")) {
        return false;
    }
    var b = "#" + a + "_listings";
    var page_id = parseInt($("#p_" + a).val());
    var data_div = "#data_" + a;
    $(data_div).html(load_image);
    var sub_value = this.value;

    var sort_val = $("#order_" + a).val();
    var by_val = $("#by_" + a).val();
    var order_val = sort_val + "_" + by_val;
    var st_value = $("#st_" + a).val();
    // if(sub_value == 10)
    // {
    // 	$(b).css({"height":"440px"});	
    // }
    // else if(sub_value == 15)
    // {
    // 	$(b).css({"height":"580px"});	
    // }
    // else if(sub_value == 30)
    // {
    // 	$(b).css({"height":"1010px"});	
    // }
    // else if(sub_value == 50)
    // {
    // 	$(b).css({"height":"1540px"});	
    // }
    $(b).css({
        "height": "auto"
    });
    var newlink = this_domain_mybayut + "/includes/sub.php?purpose=" + a + "&number_records=" + sub_value + "&status=" + status_val + "&order=" + order_val + "&showstatus=" + st_value;

    $.get(newlink, {},
        function(str) {
            $(data_div).html(str);
            if ($("#client_id").val() > 0) {
                var totalresults = 23;
                sub_value = 10;
                pagenumber = page_id;
            } else {
                var totalresults = parseInt($("#newtotal_" + a).html());
                var pageresults = parseInt($("#pno_" + a).val());
                var pagenumber = parseInt($("#p_" + a).val());
            }
            var paginate = jajax_paginate(totalresults, sub_value, page_id);
            $("#" + a).html(paginate);
        });
});
imzee_live(".go_csort", "click", function(event) {
    var load_image = "<center><img src='" + this_domain + "/images/common/loading.gif' /></center>";
    I("data_client").innerHTML = load_image;
    var order_val = I("order_client").value + "_" + I("by_client").value;
    sub_value = I("sl_clientpage").value;
    var newlink = this_domain_mybayut + "/includes/sub.php?client_id=" + $("#client_id").val() + "&page=1&order=" + order_val + "&number_records=" + sub_value;
    rd_client_filter = $("input:checked[type='radio'][name='rd_leadfilter']").val();
    if (rd_client_filter == 1 || rd_client_filter == 2)
        newlink += "&filter=" + rd_client_filter;
    var str = $.ajax({
        url: newlink,
        async: false
    }).responseText;

    if (sub_value == 10) {
        I("data_client").style.height = "440px";
    } else if (sub_value == 15) {
        I("data_client").style.height = "580px";
    } else if (sub_value == 30) {
        I("data_client").style.height = "1010px";
    } else if (sub_value == 50) {
        I("data_client").style.height = "1540px";
    }
    I("data_client").innerHTML = str;
    var totalresults = parseInt($("#total_").html());
    var paginate = jajax_paginate(totalresults, sub_value, 1);
    $("#propClient_div").html(paginate);
});
imzee_live(".go_sort", "click", function(event) {
    if ($("#overDiv").css("display") == "block") {
        cClick();
    }
    var status_val = $("#h_firmstate").val();
    var pdiv_id = $(this).parent();
    var div_id = pdiv_id.parent().attr("id");
    var a = div_id.replace("_listings", "");
    var b = "#" + a + "_listings";
    var c = "#" + a + "_select select";
    var page_id = parseInt($("#p_" + a).val());
    var data_div = "#data_" + a;
    $(data_div).html(load_image);
    var sub_value = $(c).val();
    var sort_val = $("#order_" + a).val();
    var by_val = $("#by_" + a).val();
    var order_val = sort_val + "_" + by_val;
    var st_value = $("#st_" + a).val();
    var user_val = $("#slag_" + a).val();
    var listing_platform = $("#drp-" + a + "-input").val();
    var section = $("#section").val();
    if (sub_value == 10) {
        //$(b).css({"height":"440px"});	
    } else if (sub_value == 15) {
        //$(b).css({"height":"580px"});	
    } else if (sub_value == 30) {
        //$(b).css({"height":"1010px"});	
    } else if (sub_value == 50) {
        //$(b).css({"height":"1540px"});	
    }

    //var newlink = this_domain_mybayut + "/includes/sub.php?purpose="+a+"&number_records="+sub_value+"&status="+status_val+"&order="+order_val+"&showstatus="+st_value+"&sl_users="+user_val;
    var newlink = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=get_property_management_list_html&purpose=" + a + "&number_records=" + sub_value + "&status=" + status_val + "&order=" + order_val + "&showstatus=" + st_value + "&sl_users=" + user_val + "&listing_platform=" + listing_platform + "&section=" + section;
    $.get(newlink, {},
        function(str) {
            $(data_div).html(str);
            if ($("#client_id").val() > 0) {
                var totalresults = 23;
                sub_value = 10;
                pagenumber = page_id;
            } else {
                var totalresults = parseInt($("#newtotal_" + a).html());
                var pageresults = parseInt($("#pno_" + a).val());
                var pagenumber = parseInt($("#p_" + a).val());
            }
            var paginate = jajax_paginate(totalresults, sub_value, 1, 10);
            $("#" + a).html(paginate);
            if (isNaN(totalresults)) {
                totalresults = "0";
            }
            $("#total_" + a).html(totalresults);
        });
});
imzee_live(".mdel", "click", function(event) {
    var div_id = $(this).parent().attr('name');
    div_id = div_id.replace("mass_", "");
    var this_id = "";
    var data_div = "#data_" + div_id;
    var this_chk = $(data_div + " .grid-column-data input[type=checkbox]:checked");
    var chk_len = this_chk.length;
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].id;
        chk_id = chk_id.replace("chk_", "");
        this_id += chk_id + ",";
    }
    if (this_id == "") {
        return overlib("Please select checkbox to update listings.<br /><br /><center><input type=\"button\" value=\"Close\" onclick=\"cClick();\"></center>", STICKY, CLOSECLICK, CAPTION, 'Error', VAUTO, HAUTO);
    } else {
        var this_title = $(this).attr("name");

        if (this_title == "Delete") {
            var del_val = 1;
            var txt_msg = "Are you sure you want to delete the listing(s) and any associated images, floorplans and documents?<br /><br /><center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&nbsp;&nbsp<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
        } else if (this_title == "Undelete") {
            del_val = 2;
            var txt_msg = overlib4deletelisting(this_title, this_id, "Deleted");
        } else {
            del_val = 2;
            var txt_msg = overlib4deletelisting(this_title, this_id, "on");
            this_title = 'Delete';
        }
        active_sale = $("#active_sale_listing_count").val();
        //action_url =  listing_update + "?selector="+this_id+"&del="+del_val;
        action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=" + del_val;
        var txt = "";
        txt += "<div id=\"over_div\"></div>";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += txt_msg;
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "<input type=\"hidden\" name=\"active_sale_listing_count\" value=\'" + active_sale + "\' />";
        txt += "</td></tr></table>";
        txt += "</form>";
        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_title + ' Listing', WIDTH, 225, ABOVE);
    }
});

imzee_live(".pdel", "click", function(event) {
    var div_id = $(this).parent("div").attr("id");
    div_id = div_id.replace("mass_", "");
    var this_id = "";
    var data_div = "#data_" + div_id;
    var this_chk = $(data_div + " .grid-column-data input[type=checkbox]:checked");
    chk_len = this_chk.length;
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].id;
        chk_id = chk_id.replace("chk_", "");
        this_id += chk_id + ",";
    }
    if (this_id == "") {
        return overlib("Please select checkbox to delete listings.<br /><br /><center><input type=\"button\" value=\"Close\" onclick=\"cClick();\"></center>", STICKY, CLOSECLICK, CAPTION, 'Error');
    } else {
        var this_title = $(this).attr("name");
        //	var action_url =  listing_update + "?selector="+this_id+"&del=7";
        var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=7";
        var txt_msg = "";
        txt_msg = "Are you sure you want to delete the listing(s) and any associated images, floorplans and documents?<br /><br /><center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&nbsp;&nbsp<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
        var txt = "";
        txt += "<div id=\"over_div\"></div>";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += txt_msg;
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "</td></tr></table>";
        txt += "</form>";
        return overlib(txt, STICKY, CLOSECLICK, CAPTION, 'Delete Listing', WIDTH, 220, ABOVE);
    }
});
imzee_live(".ob_yes", "click", function(event) {
    $(this).attr('disabled', true);
    $(".frm_del").prepend("<table width=\"100%\" height=\"20\"><tr><td width=\"100%\" height=\"20\" align=\"center\" valign=\"middle\"><span class=\"red_text\"><img style='margin-bottom:10px;' src=" + this_domain + '/images/common/zn_logo_loading.gif' + " border='0' /></span></td></tr></table>");

    var selector = I("selector").value;
    // alert(selector);
    // return;
    view_link_id = "#view_" + selector;
    $(view_link_id).parent().html("<img src='" + this_domain + "/images/common/loading1.gif' border='0' />");

    $(".frm_del").ajaxSubmit(function(str) {
        var flag_overlib_close = 1;
        if (str.indexOf("loc_quota_full") > -1) {
            str = str.split("splt");
            str_err = str[0];
            str = str[1].trim();
        }
        if (str.indexOf("api_down") > -1) {
            str = str.split("splt");
            str_err = str[0];
            str = str[1].trim();
        }
        if (str.indexOf("expiry_date_msg") > -1) {
            str = str.split("splt");
            str_err = str[0];
            str = str[1].trim();
        }

        var reload_listings_data = true;
        var a = $("#div_letter").val();
        var ob_title = $(".olib_title div").html().replace(/<\/?[^>]+(>|$)/g, "");
        //cClick();
        var link_property = this_domain_mybayut + "/includes/inventory_search/inventory_results.php?selector=" + selector;
        //var update_property = $.ajax({url: link_property ,async: false }).responseText;
        //$("#selector_"+selector).html(update_property);	

        if (ob_title == "Basic Listing" || ob_title == "<span class='shot-tooltip-head'>Basic Listing</span>" || ob_title == "<span class='hot-tooltip-head'>Basic Listing</span>") {
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing successfully updated to a basic listing</td></tr></table>");
        } else if (ob_title == "Make It Hot" || ob_title == "<span class='hot-tooltip-head'>Make It Hot</span>") {
            property_hot_msg = "Listing  successfully upgraded to Hot Listing";
            if (isNaN(str)) {
                property_hot_msg = str;
                reload_listings_data = false;
            }
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + property_hot_msg + "</td></tr></table>");

            if (str == "loc_quota_full") {
                flag_overlib_close = 0;
                str_err = str_err.split("|");
                if (str_err[2] == 1) {
                    var p = "for sale";
                } else {
                    var p = "for rent";
                }
                if (str_err[3] == 1)
                    var ty_pe = "Homes";
                else if (str_err[3] == 2)
                    var ty_pe = "Plots";
                else
                    var ty_pe = "Commercial";
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\"><span style=\"color:red\"><b>Sorry, cannot turn this property HOT.</b><br/>As per our fair use policy, you already have the maximum allowed number of Hot properties (" + str_err[0] + " Hot " + ty_pe + ") in " + str_err[1] + " " + p + ".</span><br/></td></tr></table>");
                reload_listings_data = true; //pass and refresh
            }

            if (str == "api_down") {
                flag_overlib_close = 0;
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\"><span style=\"color:red\"><b>" + str_err + "</span><br/></td></tr></table>");
                reload_listings_data = true; //pass and refresh
            } else {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing successfully updated to a hot listing</td></tr></table>");
            }
        } else if (ob_title == "<span class='shot-tooltip-head'>Make this listing Super Hot.</span>" || ob_title == "Make this listing Super Hot.") {
            property_hot_msg = "Listing  successfully upgraded to Super Hot Listing";
            if (isNaN(str)) {
                property_hot_msg = str;
                reload_listings_data = false;
            }
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + property_hot_msg + "</td></tr></table>");

            if (str == "loc_quota_full") {
                str_err = str_err.split("|");
                if (str_err[2] == 1) {
                    var p = "for sale";
                } else {
                    var p = "for rent";
                }
                if (str_err[3] == 1)
                    var ty_pe = "Homes";
                else if (str_err[3] == 2)
                    var ty_pe = "Plots";
                else
                    var ty_pe = "Commercial";
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\"><b style=\"color:red\">Sorry, cannot turn this property SUPER HOT.<br/>As per our fair use policy, you already have the maximum allowed number of Super Hot properties (" + str_err[0] + " Super Hot " + ty_pe + ") in " + str_err[1] + " " + p + ".</b><br/></td></tr></table>");
                reload_listings_data = true; //pass and refresh
            } else if (str == "api_down") {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\"><span style=\"color:red\"><b>" + str_err + "</span><br/></td></tr></table>");
                reload_listings_data = true; //pass and refresh
            } else {
                flag_overlib_close = 0;
                var my_new_html = "<div>Zameen.com provides a special photography and videography service for your properties with Super Hot Listings. Please choose which of these services, or both, you would like to avail:</div>";
                my_new_html += "<div> <input type='checkbox' id='image_" + selector + "' name='im'><b>Photography</b><br><input type='checkbox' name='vi' id='video_" + selector + "'><b>Videography</b><br><br><div>Please choose a date and time for our Media Associate to visit your property using the panel below:<br> <b>Note:</b> This service is not available on Saturdays and Sundays.</div><br><b>Appointment Time </b><input type='text'  class='date-pick-jeffi date'  name='date_added_jeffi' style='margin-left:5px' ></div>";
                my_new_html += "<br><br><center >";
                my_new_html += "<input type=\"button\" name='jeff_" + selector + "' value=\"Yes\" class=\"a_jeff_generate\" />&nbsp;";
                my_new_html += "<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";

                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + my_new_html + "</td></tr></table>");
                //$('.date-pick-jeffi').dateinput({format: 'dd/mm/yyyy',speed: 'fast',firstDay: 1,offset: [10, -50],min:2,firstDay:1});

                $('.date-pick-jeffi').datetimepicker({
                    minDate: 2,
                    dateFormat: 'dd/mm/yy',
                    timeFormat: 'hh:mm',
                    hourMin: 0,
                    stepMinute: 15,
                    hourMax: 24,
                    minuteGrid: 15,
                    onClose: function() {}
                });


            }
        } else if (ob_title == "Delete Listing") {
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing deleted successfully</td></tr></table>");
        } else if (ob_title == "Submit Listing") {
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing has been submitted for approval and will be in \"Pending\" state until reviewed by Bayut.com staff.</td></tr></table>");
        } else if (ob_title == "Change Listing Owner") {
            if (parseInt(str) === 1) {

                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing quota of respective user unavailable for this action.</td></tr></table>");

            } else {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing user has been changed.</td></tr></table>");
                reload_listings_data = true;
            }
        } else if (ob_title == "Magazine Basic Listing") {
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing successfully updated to a normal listing</td></tr></table>");
            if (str == "Mgz_issued0") {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\"><b>Error</b><br/>This listing has been selected to publish. Therefore this  can't be marked as normal listing.</td></tr></table>");
            }
        } else if (ob_title == "Create Magazine Listing") {
            property_hot_msg = "Listing  successfully updated";
            //console.log(str);
            if (isNaN(str)) {
                property_hot_msg = str;
                reload_listings_data = false;
            }
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + property_hot_msg + "</td></tr></table>");
            if (str == "mgz_quota_exceed") {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\"><b style=\"color:red\">Quota Limit Exceeds</b><br/></td></tr></table>");
                reload_listings_data = true; //pass and refresh
            }
        } else if (ob_title == "Bulk Refresh &amp; Boost" || ob_title == "Bulk Refresh" || ob_title == "Bulk Boost") {
            var strs = str;
            err_arr = [];
            str = str.split("splt");
            err_arr = str;
            var show_str = "";
            $.each(err_arr, function(index, value) {
                if (index != (err_arr.length - 1))
                    show_str += value;
            });
            if (show_str == '') {
                msg_arr = [];
                strs = strs.split("breakk");
                msg_arr = strs;
                $.each(msg_arr, function(index, value) {
                    if (index != (msg_arr.length - 1))
                        show_str += value;
                });
                // show_str = "Listings have been refreshed successfully.";
                flag_overlib_close = 0;
                // setTimeout('cClick();',6000);
            } else {
                flag_overlib_close = 1;
            }
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + show_str + "</td></tr></table>");

        } else if (ob_title == "Make Hidden") {
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing is hide successfully</td></tr></table>");
        } else if (ob_title == "Unhide Listing") {
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing unhide successfully</td></tr></table>");
        } else if (ob_title == "Change Expiry Days") {
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + str_err + "</td></tr></table>");
            flag_overlib_close = 0;
        } else if (ob_title == "Upgrade listing") {
            if (str == 0) {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing is upgraded successfully</td></tr></table>");
            } else {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + str_err + "</td></tr></table>");
            }

            flag_overlib_close = 1;
        }


        //return false;
        /***modified by uzair for special purpose of super Hot Jeffi generation 2/2/2016 ***/
        if (flag_overlib_close == 1) {
            setTimeout('cClick();', 3000);
        }
        /*******end of modification********/
        if (reload_listings_data) {
            var data_div = "#data_" + a;
            var st_value = $("#st_" + a).val();
            var totalresults = parseInt($("#total_" + a).html());
            var pageresults = parseInt($("#pno_" + a).val());
            var pagenumber = parseInt($("#p_" + a).val());
            var user_val = $("#slag_" + a).val();
            var listing_platform = $("#drp-" + a + "-input").val();
            var section = $("#section").val();
            // alert(section)

            $(data_div).html(load_image);

            var status_val = $("#h_firmstate").val();
            //var newlink = this_domain_mybayut + "/includes/sub.php?purpose="+a+"&number_records="+pageresults+"&status="+status_val+"&page="+pagenumber+"&showstatus="+st_value+"&sl_users="+user_val;

            var rdata = {
                ajax: 1,
                ajax_section: "dash_prop_invent",
                ajax_action: "get_property_management_list_html",
                purpose: a,
                number_records: pageresults,
                status: status_val,
                page: pagenumber,
                showstatus: st_value,
                sl_users: user_val,
                section: section,
                listing_platform: listing_platform

            };

            if ($("#client_id").val() > 0) {
                var rdata = {
                    ajax: 1,
                    ajax_section: "dash_prop_invent",
                    ajax_action: "get_property_management_list_html",
                    client_id: $("#client_id").val(),
                    data_div: "#data_client"

                };
                //var newlink = this_domain_mybayut + "/includes/sub.php?client_id="+$("#client_id").val(); data_div = "#data_client";
            }

            var c = $.ajax({
                data: rdata,
                async: false
            }).responseText;
            //alert(c);return false;
            $(data_div).html(c);
            var total = parseInt($("#newtotal_" + a).html());
            //total = total-parseInt(str);
            // console.log(c);
            $("#total_" + a).html(total);
        }
    });
});
imzee_live(".ch_date", "click", function(event) {
    var div_id = $(this).parent("div").attr("id");
    div_id = div_id.replace("mass_", "");
    var this_id = "";
    data_div = "#data_" + div_id;
    var this_chk = $(data_div + " .grid-column-data input[type=checkbox]:checked");
    var chk_len = this_chk.length;
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].id;
        chk_id = chk_id.replace("chk_", "");
        this_id += chk_id + ",";
    }
    if (this_id == "") {
        return overlib("Please select checkbox to update listings.<br /><br /><center><input type=\"button\" value=\"Close\" onclick=\"cClick();\"></center>", STICKY, CLOSECLICK, CAPTION, 'Error');
    } else {
        //action_url =  listing_update + "?selector="+this_id+"&del=4";		
        action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=4";
        status_val = $("#h_firmstate").val();
        purpose = parseInt($(this).attr("name"));
        var txt = "";
        txt += "<div id=\"over_div\"></div>";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "<select name=\"sl_date\" id=\"sl_date\">";
        /*txt += "<option value=\"15\">15 Days</option>";*/
        txt += "<option value=\"30\">1 Month</option>";
        /*txt += "<option value=\"60\">2 Months</option>";*/
        txt += "<option value=\"90\">3 Months</option>";
        txt += "<option value=\"180\">6 Months</option>";
        //txt += "<option value=\"9999\">Never Expires</option>";
        txt += "</select><br /><br />";
        txt += "Selected duration will be started from today.<br /><br />";
        txt += "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&ensp;";
        txt += "<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "</td></tr></table>";
        txt += "</form>";
        cap_title = 'Delete Listing';
        return overlib(txt, STICKY, CLOSECLICK, CAPTION, 'Change Expiry Days', WIDTH, 220, HEIGHT, 80, ABOVE);
    }
});

imzee_live(".u_app", "click", function(event) {
    var div_id = $(this).parent("div").attr("id");
    div_id = div_id.replace("mass_", "");
    var this_id = "";
    data_div = "#data_" + div_id;
    var this_chk = $(data_div + " input[type=checkbox]:checked");
    var chk_len = this_chk.length;
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].id;
        chk_id = chk_id.replace("chk_", "");
        this_id += chk_id + ",";
    }
    if (this_id == "") {
        return overlib("Please select checkbox to update listings.<br /><br /><center><input type=\"button\" value=\"Close\" onclick=\"cClick();\"></center>", STICKY, CLOSECLICK, CAPTION, 'Error');
    } else {
        var action_url = listing_update + "?selector=" + this_id + "&del=5";
        var status_val = $("#h_firmstate").val();
        var purpose = parseInt($(this).attr("name"));
        var txt = "";
        txt += "<div id=\"over_div\"></div>";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "Are you sure you want to submit these properties for approval?<br /><br />";
        txt += "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />";
        txt += "<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "</td></tr></table>";
        txt += "</form>";
        cap_title = 'Delete Listing';

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, 'Change Expiry Days', HEIGHT, 50);
    }
});

imzee_live(".ref_listing", "click", function(event) {
    var div_id = $(this).parent("div").attr("id");
    div_id = div_id.replace("mass_", "");
    var this_id = "";
    data_div = "#data_" + div_id;
    var this_chk = $(data_div + " .grid-column-data input[type=checkbox]:checked");
    var chk_len = this_chk.length;
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].id;
        chk_id = chk_id.replace("chk_", "");
        this_id += chk_id + ",";
    }
    var platform = $(this).data("platform");
    var text = "";
    var title = ""
    var credits = ""
    var type_text = "promote"

    if (platform == "" || platform == "all") {
        title = "Bulk Refresh & Boost"
        text = "Zameen and OLX";
        credits = "Refresh and Boost";
    } else if (platform == "zameen") {
        title = "Bulk Refresh"
        text = "Zameen";
        credits = "Refresh";
        type_text = "refresh"
    } else if (platform == "olx") {
        title = "Bulk Boost"
        text = "OLX";
        credits = "Boost";
        type_text = "boost"
    }
    if (this_id == "") {
        return overlib("Please select checkbox to " + credits + " listings.<br /><br /><center><input type=\"button\" value=\"Close\" onclick=\"cClick();\"></center>", STICKY, CLOSECLICK, CAPTION, 'Error');
    } else {
        var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=14";
        var txt = "";
        txt += "<div id=\"over_div\"></div>";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "Once you " + type_text + " the selected listings, the " + credits + " credits will be deducted from your account for each listing. <br /><br />";
        txt += "Are you sure you want to " + type_text + " the selected " + text + " properties?";
        txt += "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&ensp;";
        txt += "<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "<input type=hidden name=platform id=platform value=\"" + platform + "\" />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "</td></tr></table>";
        txt += "</form>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, title, WIDTH, 350, HEIGHT, 50);
    }
});


function ajaxsubmitDelete() {
    rad = document.getElementsByClassName("del_listing");
    radlength = rad.length;
    var counter = 0;
    var rad_id = "";
    for (var i = 0; i < radlength; i++) {
        if (rad[i].getAttribute('type') == "radio") {
            if (rad[i].checked) {
                counter++;
                index = i;
                if (rad[i].id != "")
                    rad_id = rad[i].id;
            }
        }
    }
    if (counter == 0) {
        I("error_msg").innerHTML = "Please select reason for deletion";
    } else if (rad_id == "opencomment" && $.trim(I("txtcom").value) == "") {
        I("error_msg").innerHTML = "Please provide comments";
    } else {
        $(".frm_del").prepend("<table width=\"100%\" height=\"20\"><tr><td width=\"100%\" height=\"20\" align=\"center\" valign=\"middle\"><span class=\"red_text\"><img style='margin-bottom:10px;' src=" + this_domain + '/images/common/zn_logo_loading.gif' + " border='0' /></span></td></tr></table>");
        $(".frm_del").ajaxSubmit(function(str) {
            flag_overlib_close = 0;
            var reload_listings_data = true;
            a = $("#div_letter").val();
            selector = I("selector").value;
            if (str.indexOf("false") != -1 && str.indexOf("true") == -1) {
                $(".frm_del").html("<table width=\"100%\" class=\"note_msg_box\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">You have reached the limit of your listing quota and you do not have any more credits available to Activate this listings.<br />In order to Activate this listings, you either need to delete old listings or increase your quota.</td></tr></table>");
                return;
            }
            if (a == "Sale") {
                $("#active_sale_listing_count").val("1");
            }


            ob_title = $(".olib_title div").html();
            // if(ob_title == "Delete Listing")
            if (ob_title == "Delete Listing" || ob_title == "Reason for Deletion") {
                err_arr = [];
                str = str.split("splt");
                err_arr = str;
                var show_str = "";
                $.each(err_arr, function(index, value) {
                    if (index != (err_arr.length - 1))
                        show_str += value;
                });
                if (show_str == '') {
                    show_str = "Listings have been Deleted successfully.";
                    flag_overlib_close = 1;
                    //setTimeout('cClick();',5000);
                } else {
                    flag_overlib_close = 0;
                }
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + show_str + "</td></tr></table>");
                //$(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing deleted successfully</td></tr></table>");
            } else if (ob_title == "Undelete Listing") {
                err_arr = [];
                str = str.split("splt");
                err_arr = str;
                var show_str = "";
                $.each(err_arr, function(index, value) {
                    if (index != (err_arr.length - 1))
                        show_str += value;
                });
                if (show_str == '') {
                    show_str = "Listing status successfully updated to \"Active\"";
                }
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + show_str + "</td></tr></table>");
                flag_overlib_close = 1;
            }


            if (flag_overlib_close == 1) {
                setTimeout('cClick();', 3000);
            }

            data_div = "#data_" + a;
            var totalresults = parseInt($("#total_" + a).html());
            var pageresults = parseInt($("#pno_" + a).val());
            var pagenumber = parseInt($("#p_" + a).val());

            var st_value = $("#st_" + a).val();
            var user_val = $("#slag_" + a).val();
            var listing_platform = $("#drp-" + a + "-input").val();
            $(data_div).html(load_image);

            var status_val = $("#h_firmstate").val();
            //var newlink = this_domain_mybayut + "/includes/sub.php?purpose="+a+"&number_records="+pageresults+"&status="+status_val+"&page="+pagenumber+"&showstatus="+st_value+"&sl_users="+user_val;
            var rdata = {
                ajax: 1,
                ajax_section: "dash_prop_invent",
                ajax_action: "get_property_management_list_html",
                purpose: a,
                number_records: pageresults,
                status: status_val,
                page: pagenumber,
                showstatus: st_value,
                sl_users: user_val,
                listing_platform: listing_platform

            };

            if ($("#client_id").val() > 0) {
                //var newlink = this_domain_mybayut + "/includes/sub.php?client_id="+$("#client_id").val(); var data_div = "#data_client";
                var rdata = {
                    ajax: 1,
                    ajax_section: "dash_prop_invent",
                    ajax_action: "get_property_management_list_html",
                    client_id: $("#client_id").val(),
                    data_div: "#data_client"

                };
            }
            var c = $.ajax({
                data: rdata,
                async: false
            }).responseText;

            $(data_div).html(c);
            var total = parseInt($("#total_" + a).html());
            str = str.toString().replace('true', ''); //str.replace('true','');
            str = str.replace('false', '');
            total = total - parseInt(str);
            $("#total_" + a).html(total);
        });
    }
} ////End of Function
imzee_live(".go_users", "click", function(event) {
    if (I("overDiv").style.display == "block") {
        cClick();
    }
    var status_val = $("#h_firmstate").val();
    var a = $(this).attr("id");
    a = a.replace("gousers_", "");
    var b = "#" + a + "_listings";
    var c = "#" + a + "_select select";
    var data_div = "#data_" + a;
    var sub_value = $(c).val();
    sub_value = $(c).val();
    var sort_val = $("#order_" + a).val();
    var by_val = $("#by_" + a).val();
    var order_val = sort_val + "_" + by_val;
    var st_value = $("#st_" + a).val();
    var user_val = $("#slag_" + a).val();

    $(data_div).html(load_image);
    if (sub_value == 10) {
        $(b).css({
            "height": "440px"
        });
    } else if (sub_value == 15) {
        $(b).css({
            "height": "580px"
        });
    } else if (sub_value == 30) {
        $(b).css({
            "height": "1010px"
        });
    } else if (sub_value == 50) {
        $(b).css({
            "height": "1540px"
        });
    }
    var newlink = this_domain_mybayut + "/includes/sub.php?purpose=" + a + "&number_records=" + sub_value + "&status=" + status_val + "&page=" + this.id + "&order=" + order_val + "&showstatus=" + st_value + "&sl_users=" + user_val;
    var str = $.ajax({
        url: newlink,
        async: false
    }).responseText;
    $(data_div).html(str);

    var totalresults = parseInt($("#newtotal_" + a).html());
    var pageresults = parseInt($("#pno_" + a).val());
    var pagenumber = parseInt($("#p_" + a).val());
    var paginate = jajax_paginate(totalresults, sub_value, 1);
    $("#" + a).html(paginate);
    $("#total_" + a).html(totalresults);
    return false;
});
imzee_live("#menu_users", "change", function(event) {
    this_value = $(this).val();

    var user_id = "";
    if (this_value == "all")
        user_id += "userid=0";
    else if (this_value == "myteam")
        user_id += "userid=-1";
    else
        user_id += "userid=" + this_value;


    var current_url = window.location;
    var params = current_url.search.split('&');
    var new_url = "";

    var ctr = 0;
    params.forEach(function(value) {
        if (value.includes('userid')) {
            new_url += user_id + "&";
        } else {
            ctr++;
            new_url += value + "&";
        }

    });

    if (params.length == ctr) {
        new_url += user_id + "&";
    }

    new_url = new_url.slice(0, new_url.length - 1);


    current_url = current_url.href.split("?");
    document.location = current_url[0] + new_url;

});


function show_quota_consumption_popup(product_id) {

    if (product_id == '')
        return false;

    var data = {
        ajax: 1,
        ajax_section: "common",
        ajax_action: "fetch_zone_wise_consumption",
        product_id: product_id,
        action: "fetch_zone_wise_consumption"
    };

    str = $.ajax({
        data: data,
        async: false
    }).responseText;
    str = JSON.parse($.trim(str));

    response = "<center><div>";
    response += str['html'];
    response += "</div></center>";


    var heading = "Breakdown of Used " + product_list[product_id].product_title;

    show_popup(heading, response, 300);
}