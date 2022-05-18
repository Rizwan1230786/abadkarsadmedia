var load_image = "<center><img src='" + this_domain + "/images/common/zn_logo_loading.gif' /></center>";

function submit_inventoryform() {
    if (I("div_status_option").style.display == "block") {
        display_status_option("block");
    } else {
        check_div = false;
    }
    $("#inventory_area").css({
        display: "block"
    });
    $("#inventory_data").html(load_image);
    this_chk = $("#div_status_option input[type=checkbox]:checked");
    chk_len = this_chk.length;
    firmstate = "";
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].value;
        firmstate += chk_id + ",";
    }
    $("#frm_inventorysearch").append("<input type=\"hidden\" name=\"firmstate\" id=\"firmstate\" value=\"" + firmstate + "\" />");
    $("#inventory_order").val("order_by_selector");
    $("#sl_by").val("DESC");
    $("#sl_numrow").val("50");

    $("#frm_inventorysearch").ajaxSubmit(function(str) {
        if (I("h_lbl_value").value != "")
            I("lbl_inventory_area").innerHTML = I("h_lbl_value").value;
        $("#inventory_data").html(str);
        totalresults = 0;
        if ($('#total_inventory').length > 0 && parseInt($('#total_inventory').text()) > 0)
            totalresults = parseInt($('#total_inventory').text());
        paginate = jajax_paginate(totalresults, 50, 1, 10);
        $(".paginate").html(paginate);
        $("#inventory_page_bottom").html(paginate);
    });
}

if (I("txt_idref") != null) {
    if (I("txt_idref").value != "")
        submit_inventoryform();
}

function submit_overlib_forms() {
    selector = I("selector").value;
    I("div_obmsg").innerHTML = "Processing ....";
    $(".frm_del").ajaxSubmit(function(str) {
        ob_title = $(".olib_title div").html(); //$("#overDiv div").html();
        if (str.indexOf("expiry_date_msg") > -1) {
            str = str.split("splt");
            str_err = str[0];
            str = str[2].trim();
        }

        //link_property = this_domain_mybayut+"/includes/inventory_search/inventory_results.php?selector="+selector;
        var rdata = {
            ajax: 1,
            ajax_section: "dash_prop_invent",
            ajax_action: "get_inventory_search_list",
            selector: selector
        };
        update_property = $.ajax({
            data: rdata,
            async: false
        }).responseText;
        if (update_property.indexOf("Change Expiry Days") > -1) {
            $("#selector_" + selector).remove("div");
            var total = $("#total_inventory").html();
            total = parseInt(total) - 1;
            $("#total_inventory").html(total);
        } else
            $("#selector_" + selector).html(update_property);
        I("div_obmsg").innerHTML = "";
        if (ob_title == "Change Expiry Date") {
            lb_div = I("h_lable").value + selector;
            I(lb_div).innerHTML = str;


            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + str_err + "</td></tr></table>");
        }
        setTimeout('cClick();', 3000);
    });
}


imzee_live(".ob_yes", "click", function(event) {
    $(this).attr('disabled', true);
    $(".frm_del").prepend("<table width=\"100%\" height=\"20\"><tr><td width=\"100%\" height=\"20\" align=\"center\" valign=\"middle\"><span class=\"red_text\"><img style='margin-bottom:10px;' src=" + this_domain + '/images/common/zn_logo_loading.gif' + " border='0' /></span></td></tr></table>");
    selector = I("selector").value;
    view_link_id = "#view_" + selector;
    $(view_link_id).parent().html("<img src='" + this_domain + "/images/common/loading1.gif' border='0' />");
    $(".frm_del").ajaxSubmit(function(str) {
        var flag_overlib_close = 1;

        //ob_title = $("#overDiv div").html();
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
            str = str[2].trim();
        }
        var ob_title = $(".olib_title div").html().replace(/<\/?[^>]+(>|$)/g, "");
        var page = $('#p_inventory_data').val();

        inventory_data_reaload();

        if (ob_title == "Basic Listing" || ob_title == "<span class='shot-tooltip-head'>Basic Listing</span>" || ob_title == "<span class='hot-tooltip-head'>Basic Listing</span>") {
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing successfully updated to a basic listing</td></tr></table>");
        } else if (ob_title == "Make It Hot" || ob_title == "<span class='hot-tooltip-head'>Make It Hot</span>") {

            //console.log(str);
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
                /* $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\"><b style=\"color:red\">Sorry, cannot turn this property HOT.<br/>As per our fair use policy, you already have the maximum allowed number of Hot properties ("+str_err[0]+" Hot "+ty_pe+") in "+ str_err[1] +" "+ p +".</b><br/></td></tr></table>"); */
            } else if (str == "api_down") {
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
                my_new_html += "<div> <input type='checkbox' id='image_" + selector + "' name='im'><b>Photography</b><br><input type='checkbox' name='vi' id='video_" + selector + "'><b>Videography</b><br><br><div>Please choose a date and time for our Media Associate to visit your property using the panel below: <br> <b>Note:</b> This service is not available on Saturdays and Sundays.</div><br><b>Appointment Time </b><input type='text'  class='date-pick-jeffi date'  name='date_added_jeffi' style='margin-left:5px' ></div>";
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
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing has been submited for approval and will be in \"Pending\" state until reviewed by Bayut.com staff.</td></tr></table>");
        } else if (ob_title == "Change Listing Owner") {
            if (parseInt(str) === 1) {

                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing quota of respective user unavailable for this action.</td></tr></table>");

            } else {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing user has been changed.</td></tr></table>");

            }
        } else if (ob_title == "Magazine Basic Listing") {
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing successfully updated to a basic listing</td></tr></table>");
            if (str == "Mgz_issued0") {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\"><b>Error</b><br/>Magazine has bee issued. This listing can't return to basic listing</td></tr></table>");
            }
        } else if (ob_title == "Create Magazine Listing") {
            property_hot_msg = "Listing  successfully upgraded to Magazine Listing";
            //console.log(str);
            if (isNaN(str)) {
                property_hot_msg = str;
                //reload_listings_data = false;
            }
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + property_hot_msg + "</td></tr></table>");
            if (str == "mgz_quota_exceed") {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\"><b style=\"color:red\">Quota Limit Exceeds</b><br/></td></tr></table>");
                //reload_listings_data = true;//pass and refresh
            }
        } else if (ob_title == "Make Hidden") {
            $("#selector_" + selector).css('color', hidden_listing_bk_color);
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">The listing was hidden successfully.</td></tr></table>");
        } else if (ob_title == "Unhide Listing") {
            $("#selector_" + selector).removeAttr('style');
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">This listing has been unhidden from the website. </td></tr></table>");
        } else if (ob_title == "Hide Listing(s)") {
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">These listing have been hidden from the website. </td></tr></table>");
            $('#div_userselect > .go_filter').trigger("click");
            $('html,body').animate({
                scrollTop: 460
            }, 'slow');
        } else if (ob_title == "Unhide Listing(s)") {
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">These listing have been unhidden from the website. </td></tr></table>");
            $('#div_userselect > .go_filter').trigger("click");
            $('html,body').animate({
                scrollTop: 460
            }, 'slow');
        } else if (ob_title == "Change Expiry Days") {
            I("lb_edate_" + selector).innerHTML = str;
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + str_err + "</td></tr></table>");
        } else if (ob_title == "Upgrade listing") {
            if (str == 0) {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing is upgraded successfully</td></tr></table>");
            } else {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + str_err + "</td></tr></table>");
            }

            flag_overlib_close = 1;
        }


        /***modified by uzair for special purpose of super Hot Jeffi generation 2/2/2016 ***/
        if (flag_overlib_close == 1) {
            setTimeout('cClick();', 3000);
        }
        /*******end of modification********/
    });
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
    } else if (rad_id == "opencomment" && I("txtcom").value == "") {
        I("error_msg").innerHTML = "Please provide comments";
    } else {
        $(".frm_del").prepend("<table width=\"100%\" height=\"20\"><tr><td width=\"100%\" height=\"20\" align=\"center\" valign=\"middle\"><span class=\"red_text\"><img style='margin-bottom:10px;' src=" + this_domain + '/images/common/zn_logo_loading.gif' + " border='0' /></span></td></tr></table>");

        $(".frm_del").ajaxSubmit(function(str) {
            ob_title = $(".olib_title div").html();

            inventory_data_reaload();

            // else 
            if (ob_title == "Undelete Listing") {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing status successfully updated to \"Active\"</td></tr></table>");
            } else {
                $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">Listing status successfully updated to \"Deleted\"</td></tr></table>");
            }
            setTimeout('cClick();', 3000);
        });
    }
} ////End of Function


function inventory_data_reaload() {
    /*======================================*/
    this_chk = $("#div_status_option input[type=checkbox]:checked");
    chk_len = this_chk.length;
    firmstate = "";
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].value;
        firmstate += chk_id + ",";
    }
    if (chk_len == 0)
        firmstate = 1;
    num_row = $("#sl_numrow").val();
    qr_string = "";
    sort_order = $("#inventory_order").val() + "_" + $("#sl_by").val();
    var pagenumber = parseInt($("#p_inventory_data").val());
    if (num_row != 10) {
        qr_string = "?number_records=" + num_row + "&order=" + sort_order + "&page=" + pagenumber;
    } else {
        qr_string = "?order=" + sort_order + "&page=" + pagenumber;
    }

    var listing_image_count = $('select[name=listing_images]').val();

    // alert(listing_image_count);return false;

    frm = $("<form id=\"frm_this\" method=\"post\"></form>");
    $("#main_inventory").prepend(frm);
    $("#frm_this").html($("#frm_iresults").html());
    $("#frm_this").append("<input type=\"hidden\" name=\"firmstate\" id=\"firmstate\" value=\"" + firmstate + "\" />");
    $("#frm_this").append("<input type=\"hidden\" name=\"listing_images\" id=\"listing_images\" value=\"" + listing_image_count + "\" />");

    if (qr_string) {
        var new_action = qr_string + "&ajax=1&ajax_section=dash_prop_invent&ajax_action=get_inventory_search_list";
    } else {
        var new_action = "?ajax=1&ajax_section=dash_prop_invent&ajax_action=get_inventory_search_list";
    }
    //var new_action = this_domain_mybayut + "/includes/inventory_search/inventory_results.php"+qr_string;
    $("#frm_this").attr("action", new_action);
    /*$("#inventory_data").html(load_image);*/

    $('#order_by').val($("#inventory_order").val() + "_" + $("#sl_by").val());

    $("#frm_this").ajaxSubmit(function(str) {
        $("#inventory_data").html(str);
        totalresults = I("htotal").value;
        paginate = jajax_paginate(totalresults, num_row, pagenumber, 10);
        $(".paginate").html(paginate);
        $("#inventory_page_bottom").html(paginate);
        $("#total_inventory").html(totalresults);
        $("#frm_this").remove();
    });
    /*======================================*/
}



imzee_live(".paginate span a", "click", function(event) {
    user_val = $("#sl_agusers").val();
    frm = $("<form id=\"frm_this\" method=\"post\"></form>");
    this_chk = $("#div_status_option input[type=checkbox]:checked");
    chk_len = this_chk.length;
    var firmstate = "";
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].value;
        firmstate += chk_id + ",";
    }
    $("#frm_this").append("<input type=\"hidden\" name=\"firmstate\" id=\"firmstate\" value=\"" + firmstate + "\" />");
    $("#main_inventory").prepend(frm);
    $("#frm_this").html($("#frm_iresults").html());

    $("#inventory_data").html(load_image);
    qr_string = "";
    num_row = $("#sl_numrow").val();
    this_id = $(this).attr("id");
    sort_order = $("#inventory_order").val() + "_" + $("#sl_by").val();
    if (num_row != 10) {
        qr_string = "&number_records=" + num_row + "&page=" + this_id + "&order=" + sort_order + "&sl_users=" + user_val;
    } else {
        qr_string = "&page=" + this_id + "&order=" + sort_order + "&sl_users=" + user_val;
    }

    var old_action = "?ajax=1&ajax_section=dash_prop_invent&ajax_action=get_inventory_search_list" + qr_string;
    //var old_action = this_domain_mybayut + "/includes/inventory_search/inventory_results.php"+qr_string;
    var new_action = old_action;
    $("#frm_this").attr("action", new_action);
    $("#frm_this").ajaxSubmit(function(str) {
        $("#inventory_data").html(str);
        totalresults = I("htotal").value;
        paginate = jajax_paginate(totalresults, num_row, this_id, 10);
        $(".paginate").html(paginate);
        $("#inventory_page_bottom").html(paginate);
        $("#total_inventory").html(totalresults);
        $("#frm_this").remove();
    });

});

imzee_live(".role_input", "mousedown", function(event) {
    check_option = false;
    return false;
});

imzee_live("#div_status_option", "click", function(event) {
    check_div = true;

});

check_div = false;
imzee_live("#rightcolumn", "click", function(event) {
    if (!check_div) {
        display_status_option("block");
    } else {
        check_div = false;
    }
});

imzee_live(".go_filter", "click", function(event) {
    $('input[name="listing_platform"]').val($('#dropdown-content-tab-inventory-input').val());
    this_chk = $("#div_status_option input[type=checkbox]:checked");
    chk_len = this_chk.length;
    firmstate = "";
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].value;
        firmstate += chk_id + ",";
    }
    if (chk_len == 0)
        firmstate = 1;
    num_row = $("#sl_numrow").val();
    qr_string = "";
    sort_order = $("#inventory_order").val() + "_" + $("#sl_by").val();
    if (num_row != 10) {
        qr_string = "?number_records=" + num_row + "&order=" + sort_order;
    } else {
        qr_string = "?order=" + sort_order;
    }

    var listing_image_count = $('select[name=listing_images]').val();

    // alert(listing_image_count);return false;

    frm = $("<form id=\"frm_this\" method=\"post\"></form>");
    $("#main_inventory").prepend(frm);
    $("#frm_this").html($("#frm_iresults").html());
    $("#frm_this").append("<input type=\"hidden\" name=\"firmstate\" id=\"firmstate\" value=\"" + firmstate + "\" />");
    $("#frm_this").append("<input type=\"hidden\" name=\"listing_images\" id=\"listing_images\" value=\"" + listing_image_count + "\" />");

    if (qr_string) {
        var new_action = qr_string + "&ajax=1&ajax_section=dash_prop_invent&ajax_action=get_inventory_search_list";
    } else {
        var new_action = "?ajax=1&ajax_section=dash_prop_invent&ajax_action=get_inventory_search_list";
    }
    //var new_action = this_domain_mybayut + "/includes/inventory_search/inventory_results.php"+qr_string;
    $("#frm_this").attr("action", new_action);
    $("#inventory_data").html(load_image);

    $('#order_by').val($("#inventory_order").val() + "_" + $("#sl_by").val());

    $("#frm_this").ajaxSubmit(function(str) {
        $("#inventory_data").html(str);
        totalresults = I("htotal").value;
        paginate = jajax_paginate(totalresults, num_row, 1, 10);
        $(".paginate").html(paginate);
        $("#inventory_page_bottom").html(paginate);
        $("#total_inventory").html(totalresults);
        $("#frm_this").remove();
    });
});

function display_status_option(defualt_display) {
    var div_display = I("div_status_option").style.display;
    if (typeof defualt_display !== "undefined") {
        div_display = defualt_display;
    }
    if (div_display == "none") {
        if (document.all) {
            var topp = I("txt_status_option").offsetTop + I("txt_status_option").parentNode.offsetTop;
            var heightp = I("txt_status_option").offsetHeight;
            var positionp = parseInt(topp) + parseInt(heightp) - 2;
            var leftp = I("txt_status_option").offsetLeft;
            //alert("top:"+topp+" height:"+heightp+" position:"+positionp+" left:"+leftp);
        } else {
            var topp = I("txt_status_option").offsetTop;
            var heightp = I("txt_status_option").offsetHeight;
            var positionp = parseInt(topp) + parseInt(heightp) - 2;
            var leftp = I("txt_status_option").offsetLeft;
        }

        I("div_status_option").style.display = "block";
        I("div_status_option").style.top = positionp + "px";
        I("div_status_option").style.left = leftp + "px";
        I("sl_by").style.display = "none";
        check_div = true;
    } else {
        this_chk = $("#div_status_option input[type=checkbox]:checked");
        chk_len = this_chk.length;
        if (chk_len == 8)
            I("txt_status_option").value = "All";
        else if (chk_len == 0)
            I("txt_status_option").value = "No option selected";
        else
            I("txt_status_option").value = chk_len + " option(s) selected";
        I("div_status_option").style.display = "none";
        I("sl_by").style.display = "inline";
        check_div = false;
    }

    return false;
}
imzee_live("#cat_opt", "change", function(event) {
    if (this.value == 'in')
        I('cat_km').style.display = 'none';
    else if (this.value == 'near')
        I('cat_km').style.display = 'block';
});

function submit_to_excel() {
    old_action = I("frm_iresults").action;
    //I("frm_iresults").action = this_domain_mybayut + "/includes/inventory_search/inventory_excel.php";
    I("frm_iresults").action = "?ajax=1&ajax_section=dash_prop_invent&ajax_action=export_to_excel";
    document.frm_iresults.submit();
    I("frm_iresults").action = old_action;
} ////End of Function

function change_area_unit(to, select_id) {
    I("h_areaunit").value = to;

    if ($('#area_range').length)
        $('#area_range').val(0);

    var sl_mk_select = select_id + "_mk_select";

    $('#h_lbl_value').val(to);
    to = to.replace(' ', '');
    I(sl_mk_select).style.display = "none";


    html = $("#hidden" + to + "_container .facebox_body .facebox_content ul").html();
    opthtml = $("#hidden" + to).html();


    var find = 'hidden' + to;
    var regex = new RegExp(find, "g");
    html = html.replace(regex, "sqft");


    //html = html.gsub('hidden'+to,'sqft');

    $("#sqft_container .facebox_body .facebox_content ul").html(html);
    $("#sqft").html(opthtml);

    return;


    check_div = true;
    from = I("h_areaunit").value;
    if (to == from)
        return false;

    if (from == "Square Yards")
        from = "Sq Yd";
    else if (from == "Square Meters")
        from = "Sq m";
    else if (from == "Square Feet")
        from = "Sq Ft";
    container_id = select_id + "_container";
    sl_mk_select = select_id + "_mk_select";
    combo_text_data = strip_tags(I(select_id + "_combo_text").innerHTML);
    select_box = I(select_id);
    container_path = "#" + select_id + "_container ul li";
    this_convertor = 1;

    if (to == "Square Yards") {
        this_convertor = 0.111111111;
        to_abbr = "SqY";
        I(sl_mk_select).style.display = "none";
    } else if (to == "Square Meters") {
        this_convertor = 0.09290304;
        to_abbr = "SqM";
        I(sl_mk_select).style.display = "none";
    } else if (to == "Marla/Kanal") {
        this_convertor = 0.004444444;
        to_abbr = "Marla/Kanal";
        I(sl_mk_select).style.display = "inline";
    } else {
        I(sl_mk_select).style.display = "none";
    }

    if (this_convertor == 1)
        to_abbr = "SqFt";
    loop_counter = 0;
    I("h_areaunit").value = to;
    change_to = "";
    if (I("lbl_inventory_area") != null) {
        I("h_lbl_value").value = to_abbr;
        //I("lbl_cur_area").innerHTML = to;
    }
    $(container_path).each(function() {
        this_text = $(this).html();
        this_array = this_text.split(" ");
        last_index = this_array.length - 1;
        new_text = "";
        new_values = select_box[loop_counter].value;
        //new_values_array = new array();
        new_values_array = new_values.split("_");
        new_value_count = 0;
        for (v in this_array) {
            if (!isNaN(this_array[v])) {
                this_array[v] = number_format(new_values_array[new_value_count] * this_convertor, 0, '.', '');
                new_value_count++;
            }
            /* if((this_array[v] > 20 || (this_array[v] == 20 && new_value_count == 1)) && to == "Marla/Kanal")
            {
            	change_to = "Marla/Kanal";
            	this_array[v] = this_array[v] / 20;
            } */
            new_text += this_array[v] + " ";
        }

        new_text = new_text.replace(from, to);
        if (from == "Marla/Kanal")
            new_text = new_text.replace("Marla/Kanal", to);
        else if (change_to == "Marla/Kanal")
            new_text = new_text.replace(to, "Marla/Kanal");
        new_text = $.trim(new_text);

        if (to == "Square Yards")
            new_text = new_text.replace("Square Yards", "Sq Yd");
        else if (to == "Square Meters")
            new_text = new_text.replace("Square Meters", "Sq m");
        else if (to == "Square Feet")
            new_text = new_text.replace("Square Feet", "Sq Ft");

        compare_new_text = this_text.replace(/ /g, "_");
        if (compare_new_text == combo_text_data)
            I(select_id + "_combo_text").innerHTML = new_text;

        new_text = new_text.replace("Marla/Kanal", "Marla");
        $(this).html(new_text);

        loop_counter++;
    });
}

function cmb_focus(cmb_id) {
    I(container_id).style.display = "block";
    $("#" + container_id).focus();
    I(container_id).style.display = "none";
}

/* =====Hook===Callback Function============= */
var old_add_select_option = add_select_option;
var add_select_option = function(id, input_val1, input_val2, max_value, msg) {
    old_add_select_option(id, input_val1, input_val2, max_value, msg);
    add_select_option_callback(input_val1, input_val2);
}

function add_select_option_callback(input_val1, input_val2) {
    $('#h_lbl_value').val($('#sl_change_area_unit').val());

    if ($('#sqft_input2').val() > 0) {
        if ($('#sqft_input1').val() == '')
            $('#sqft_input1').val(0);
        var area_range = 1;
    } else
        var area_range = 0;

    if ($('#area_range').length)
        $('#area_range').val(area_range);
    else
        $('#frm_inventorysearch').append("<input type='hidden' id='area_range' name='area_range' value='" + area_range + "' />");
}

I('sqft_mk_select').style.display = "none";

var oldliv = liv;
var liv = function(id, id2, val) {
    oldliv(id, id2, val);
    liv_callback();
}

function liv_callback() {
    if ($('#area_range').length)
        $('#area_range').val(0);
}
/* =========================== */


function bulk_hide_selected(obj) {
    var this_id = "";
    var this_chk = $(".table  .grid-column-data input[type=checkbox]:checked");
    var chk_len = this_chk.length;

    var ishide = 0;
    if (obj == "hide")
        ishide = 1;
    else
        ishide = 0;

    var check_hide = 0;
    var check_unhide = 0;
    for (var i = 0; i < chk_len; i++) {
        chk_id = this_chk[i].id;
        chk_id = chk_id.replace("chk_", "");
        this_id += chk_id + ",";
        if ($("#selector_" + chk_id + " > .table-propstatus .hidden_text").length > 0) {
            check_hide = check_hide + 1;
        }
        if ($("#selector_" + chk_id + " > .table-propstatus .hidden_text").length == 0) {
            check_unhide = check_unhide + 1;
        }
    }



    if (this_id == "") {
        if (obj == "hide")
            return overlib("Please select listing(s) to hide.<br /><br /><center><input type=\"button\" value=\"Close\" onclick=\"cClick();\"></center>", STICKY, CLOSECLICK, CAPTION, 'Error', VAUTO, HAUTO);
        else
            return overlib("Please select listing(s) to unhide.<br /><br /><center><input type=\"button\" value=\"Close\" onclick=\"cClick();\"></center>", STICKY, CLOSECLICK, CAPTION, 'Error', VAUTO, HAUTO);
    } else {

        if (obj == "hide" && check_hide == chk_len) {
            return overlib("Selected listing(s) are already hidden. Please select required listing(s) to hide.<br /><br /><center><input type=\"button\" value=\"Close\" onclick=\"cClick();\"></center>", STICKY, CLOSECLICK, CAPTION, 'Error', VAUTO, HAUTO);
        }
        if (obj == "unhide" && check_unhide == chk_len) {
            return overlib("Selected listing(s) are already unhidden. Please select required listing(s) to unhide.<br /><br /><center><input type=\"button\" value=\"Close\" onclick=\"cClick();\"></center>", STICKY, CLOSECLICK, CAPTION, 'Error', VAUTO, HAUTO);
        }

        action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=16" + "&data_case=" + ishide;
        var label = "";

        if (obj == 'hide') {
            db_obtitle = "Hide Listing(s)";
            label = "Click Continue to hide selected listing(s).</br>";
        } else {
            db_obtitle = "Unhide Listing(s)";
            label = "Click Continue to unhide selected listing(s).</br>";
        }

        var txt = "";
        txt += "<center><form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += label;

        // txt += "<input type=\"hidden\" id=\"div_letter\" value=\""+obj+"\" />";
        txt += "<input type=\"hidden\" id=\"selector\" name='selector' value=\"" + this_id + "\" />";
        txt += "<input type='button' value='Continue' class='ob_yes'>";
        txt += "</td></tr></table>";

        txt += "</form></center>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, db_obtitle, OFFSETY, -20, HEIGHT, 50, EXCLUSIVE);

    }

}