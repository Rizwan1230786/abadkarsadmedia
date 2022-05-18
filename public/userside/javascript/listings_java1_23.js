var check_option = false;

hot_property_text = "Hot Properties generate <b>400% more exposure</b> and response as compared to basic listings<br><br>Displayed on <b>Home Page</b> as featured properties<br><br><b>Top ranks</b> and positions<br><br>Click on the link for further details<br>";

Premium_property_txt = "Premium Properties generate <b>250% more exposure</b> and response as compared to basic listings<br><br>Every property listed by a featured agent or an individual who has purchased a listing package is shown as a <b>Premium Property</b> on Zameen.com<br><br>Premium Properties always have <b>Top Ranks</b> and positions and appear right after Hot Properties<br><br>Please e-mail us or call us on <b>+92-42-5775777</b> (9:AM to 5:30PM) or simply visit the advertising section for further information about Premium Property listing packages";

function querySt(ji) {
    hu = window.location.search.substring(1);
    gy = hu.split("&");
    for (i = 0; i < gy.length; i++) {
        ft = gy[i].split("=");
        if (ft[0] == ji) {
            return ft[1];
        }
    }
}

function showLand() {
    var area_unit = document.getElementsByTagName("select");
    var inps = document.getElementsByTagName("input");
    var tempAU;
    var tempHL;
    var tempINP;

    for (k = 0; k < area_unit.length; k++) {
        if (area_unit[k].getAttribute("name") == "area_unit")
            tempAU = area_unit[k];
    }
    for (f = 0; f < inps.length; f++) {
        if (inps[f].getAttribute("name") == "land")
            tempINP = inps[f];
    }
    if (isNaN(tempINP.value)) {
        document.getElementById("sland").innerHTML = "<font color=\"red\">Land must contain numbers only</font>";
    } else {
        str_land = tempINP.value + " " + tempAU.value;
        document.getElementById("sland").innerHTML = str_land;
    }
} ////End of Function

function getCalculated() {
    var area_unit = document.getElementById("land");
    land_value = area_unit.value;
    if (isNaN(land_value)) {
        return overlib('<font color=\"red\">Land must contain numbers only</font>', WIDTH, 200, HEIGHT, 50, CENTER);
    } else {
        sqfeet = land_value;
        cal_value = land_value + " " + "Sq.ft" + "<br>Equals:<br><hr>" + Math.round((sqfeet * 0.09290304) * 100) / 100 + " Sq. Meter<br />" + Math.round((sqfeet / 9) * 100) / 100 + " Sq. Yard<br />" + Math.round((sqfeet / 4500) * 100) / 100 + " Kanal<br>" + Math.round((sqfeet / 225) * 100) / 100 + " Marla";

        return overlib(cal_value, WIDTH, 150, HEIGHT, 50, CENTER);
    }
} ////End of Function

$('#sl_city').change(function() {

    var load_image = "<img src='" + this_domain + "/images/common/loading1.gif' />";
    $('#ajax_locality').html(load_image);
    $.get(this_domain + '/body/home/home_ajax_locality.php', {
            cat_id: this.value
        },
        function(str) {
            $("#ajax_locality").html(str);
        });

    return false;
});



$("#btnemail").click(function() {
    overlib("<div id=\"ob_mailstatus\"><img src='" + this_domain + "/images/common/loading_circle.gif' border='0' /></div>", STICKY, LEFT, CAPTION, 'E-Mail', CLOSECLICK, WIDTH, 400, ABOVE);
    $('#frmemail').ajaxForm(function(str) {
        jobj = eval(str);
        I("ob_mailstatus").innerHTML = jobj[0]["obtext"];
        I("div_display_message").style.width = "auto";
        I("div_display_message").style.margin = "0px";
        if (jobj[0]["status"] == "success") {
            I("firstName").value = "";
            I("email").value = "";
            I("tel").value = "";
            I("subject").value = "";
            I("txtmsg").value = "";
            I("security").value = "";
            $("#accept_chkbox").attr('checked', false);
            image = jobj[0]["image"];
            if (image != "")
                I("lb_capimage").innerHTML = image;
        }
    });
});

$("#btnfmail").click(function() {
    $('#frmfmail').ajaxForm(function(str) {
        $("#fmailmsg").html(str);
    });
});



function newWindow(mypage, myname, w, h, features) {
    if (screen.width) {
        var winl = (screen.width - w) / 2;
        var wint = (screen.height - h) / 2;
    } else {
        winl = 0;
        wint = 0;
    }
    if (winl < 0) winl = 0;
    if (wint < 0) wint = 0;
    var settings = 'height=' + h + ',';
    settings += 'width=' + w + ',';
    settings += 'top=' + wint + ',';
    settings += 'left=' + winl + ',';
    settings += features;
    settings += 'scrollbars=yes ';
    win = window.open(mypage, myname, settings);
    win.window.focus();
}


$('#cluetip-close').click(function() {
    $('#mail_send_res').css({
        'display': 'none'
    });
});

$('#mail_err_msg').click(function() {
    $('#mail_send_res').css({
        'display': 'none'
    });
});


function newpricetext(input_id, div_id) {
    var price_value = I(input_id).value;
    if (isNaN(price_value) || price_value <= 0)
        var showprice = "<font color=\"red\">Price must contain numbers only</font>";
    else
        var showprice = getPriceText(price_value);
    I(div_id).innerHTML = showprice;
} ////End of Function


function submitreg_ajax() {
    $("#popup_reg").ajaxSubmit(function(str) {

        if (str) {
            $("#TB_ajaxContent").html("");
            $("#TB_ajaxContent").append(str);
        } else {
            window.location = this_domain;
        }

    });
}

function submitlogin_ajax() {
    $("#frmlogin").ajaxSubmit(function(str) {
        if (str) {
            $("#TB_ajaxContent").html("");
            $("#TB_ajaxContent").append(str);
        } else {
            window.location = this_domain;
        }

    });
    return false;
}

function ajax_login(html) {
    if ($('#role_text').html()) {
        nd();
    }
    var fav_selector = $('#fav_selector').val();
    var r_t = $("#redirect_type").val();
    var r_v = $("#redirect_val").val();
    var r_extra = $("#redirect_extra_info").val();
    var show_cross = $("#show_cross").val();


    $("#TB_ajaxContent").html("");
    $("#TB_ajaxContent").append(html);
    $("#fav_listing").val(fav_selector);
    $("#redirect_type").val(r_t);
    $("#redirect_val").val(r_v);
    $("#redirect_extra_info").val(r_extra);
    $("#show_cross").val(show_cross);
    $("#login_html").show();
}

function ajax_register(html) {
    var fav_selector = $('#fav_listing').val();
    var r_t = $("#redirect_type").val();
    var r_v = $("#redirect_val").val();
    var r_extra = $("#redirect_extra_info").val();
    var show_cross = $("#show_cross").val();

    $("#TB_ajaxContent").html("");
    $("#TB_ajaxContent").append(html);
    $("#fav_selector").val(fav_selector);
    $("#redirect_type").val(r_t);
    $("#redirect_val").val(r_v);
    $("#redirect_extra_info").val(r_extra);
    $("#show_cross").val(show_cross);
    $("#reg_html").show();
}
reg_chk_array = new Array();
var role_text = null;

/*$("body").on('click',function(event){    
 
    if($("#reg_main").html()) {
        confirm_open = 1;
    }
}); */


function swapLoginBox() {
    if (document.getElementById('loginbox').style.display == 'block') {
        document.getElementById('loginbox').style.display = 'none';
        document.getElementById('forgotbox').style.display = 'block';
    } else {
        document.getElementById('forgotbox').style.display = 'none';
        document.getElementById('loginbox').style.display = 'block';
    }
}

function ajaxfav_listing(listing_id, page) //page 1 is listing page and 2 is view page
{
    var userID = $('#userID').val();
    var link_id = "link_" + listing_id + "";
    var load_image = "<img src='" + this_domain + "/images/common/loading1.gif'/>";
    $("#" + link_id).html(load_image);
    $("#" + link_id).removeClass("add_to_fav");
    $.get(this_domain + '/body/listings/add_fav.php', {
            fav_id: listing_id,
            user_id: userID,
            page: page
        },
        function(str) {
            $("#" + link_id).replaceWith(str);
        }
    );
}

function setAndExecute(divId, innerHTML) {
    if (document.getElementById(divId)) {
        var div = document.getElementById(divId);
        div.innerHTML = innerHTML;
        var x = div.getElementsByTagName("script");
        for (var i = 0; i < x.length; i++) {
            eval(x[i].text);
        }
    }
}

function getAjaxListings(type, subtype, list_order, list_order2, list_order3, list_order4, number_records, purpose, page, cat_id, dev_p) {
    _domain = this_domain;
    _domain = _domain + "//body/listings/listings_display.php?";
    _domain += "type=" + type;
    _domain += "&subtype=" + subtype;
    _domain += "&filter=" + list_order;
    if (list_order2) _domain += "&filter_sec=" + list_order2;
    if (list_order3) _domain += "&filter_third=" + list_order3;
    if (list_order4 != "") _domain += "&filter_forth=" + list_order4;
    _domain += "&number_records=" + number_records;
    _domain += "&purpose=" + purpose;
    _domain += "&page=" + page;
    _domain += "&cat_id=" + cat_id;
    if (dev_p)
        _domain += "&propertypurpose=" + dev_p;

    google_ajax_pagination_analytics(page);
    _em.trackAjaxPageview(window.location);
    table_offset = $("#subtabs").offset();
    table_height = $("#ajax_listing").height() - 55;
    table_width = $("#ajax_listing").width();
    load_image = "<div class='page_loading_img' style='width:" + table_width + "px;height:" + table_height + "px;'>";
    load_image += "<div style=''><img style='margin-top:10px;' src='" + this_domain + "/images/common/logo_loading.gif' /></div>";
    load_image += "</div>";
    $("#ajax_listing").append(load_image);
    $("html, body").animate({
        scrollTop: table_offset.top
    }, 1000);
    $.get(_domain, {
            page_type: 'ajax'
        },
        function(str) {
            $(".page_loading_img").remove("div");
            str = str.split("--@@@@--@@@@--"); //listing block splitter	
            setAndExecute("listing_display_b1", str[0]);
            setAndExecute("listing_display_b2", str[2]);
            str = str[1].split("----@@@----@@@----"); //listing ads splitter

            for (i = 0; i < str.length; i++) {
                var target_div = "list_block_" + i;

                setAndExecute(target_div, str[i]);
            }
            for (i = str.length; i < 4; i++) //empty remaining old blocks
            {
                var target_div = "list_block_" + i;
                I(target_div).innerHTML = "";
            }
            $("#listing_display").show();
            tb_init('a.thickbox, area.thickbox, input.thickbox');
            //$("html, body").animate({scrollTop: $("#subtabs").offset().top}, 1000);
        });
} //End of Function

function submitpage(type, subtype, list_order, list_order2, list_order3, list_order4, number_records, purpose, cat_id, dev_p) {
    page_value = I("txtGo").value;
    if (!isNaN(page_value)) {
        getAjaxListings(type, subtype, list_order, list_order2, list_order3, list_order4, number_records, purpose, page_value, cat_id, dev_p)
    }
}



function ajaxfav_process(listing_id, user_id, listing_type, use_pos) {
    var userID = $('#userID').val();
    var link_id = "link_" + listing_id;
    var load_image = "<img src='" + this_domain + "/images/common/loading1.gif'/>";
    $("#" + link_id).html(load_image);
    $("#" + link_id).removeClass("add_to_fav");
    $.get(this_domain + '/body/agents/add_fav_ajax.php', {
            fav_id: listing_id,
            user_id: userID,
            fav_type: listing_type
        },
        function(str) {
            $("#" + link_id).replaceWith(str);
        }
    );
}

$("#location_display_class").click(function() {
    if (I("selectedcity").style.height == "20px") {
        I("selectedcity").style.height = "auto";
        $(this).css('backgroundPosition', '-149px -64px');
        show = 1;
    } else {
        I("selectedcity").style.height = "20px";
        $(this).css('backgroundPosition', '-149px -45px');
        show = 2;
    }
    $.get(this_domain + '/body/common/change_category_show.php', {
        show_category: show
    }, function(str) {});

});

function fold_unfold(parent, child) {
    if (parent.className == "head_select") {
        parent.className = "head";
        $('#div_' + child).css({
            "display": "none"
        });
    } else {
        parent.className = "head_select";
        $('#div_' + child).css({
            "display": "block"
        });
    }
} ////End of Function



function show_reg_addition_info(inputid) {

    switch (inputid) {
        case "phone_country":
        case "cmp_phone_country":
        case "fax_country":
        case "cmp_fax_country":
            ob_text = "Enter your country code.<br />Example: <b>+92</b>-51-12345678";
            break;
        case "phone_area":
        case "cmp_phone_area":
        case "fax_area":
        case "cmp_fax_area":
            ob_text = "Enter your area code.<br />Example: +92-<b>51</b>-12345678";
            break;
        case "phone":
        case "cmp_phone":
        case "fax":
        case "cmp_fax":
            ob_text = "Enter your phone code.<br />Example: +92-51-<b>12345678</b>";
            break;
        case "cell_code":
        case "cmp_cell_code":
            ob_text = "Enter your country code..<br />Example: <b>+92</b>-3001234567";
            break;
        case "cell":
        case "cmp_cell":
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

function loc_search_form_submit(frm) {
    var msg_text = "Location search must contain more than one character<br><center><input type='button' value=' Ok ' onclick='cClick();'></center>";
    var input_val = frm.txt_loc_search.value;
    if (input_val == 'Enter Location' || input_val == 'Find Your Location' || input_val == '') {
        frm.txt_loc_search.value = '';
        frm.txt_loc_search.focus();
        overlib(msg_text, STICKY, CLOSECLICK, CAPTION, 'Alert', CENTER, WIDTH, 278);
        return false;
    } else if (input_val.length < 2) {
        frm.txt_loc_search.focus();
        overlib(msg_text, STICKY, CLOSECLICK, CAPTION, 'Alert', CENTER, WIDTH, 278);
        return false;
    }
}

if (function_exists("last_events"))
    last_events();

/*$(".sub_hot_property").live(function(event)
{
	$(this).mouseover(function()
	{
		return overlib(hot_property_text,CAPTION,'Hot Property',WIDTH,400);
	});
	$(this).mouseout(function()
	{
		return nd();
	});
});

$(".sub_premium_property").live(function(event)
{
	$(this).mouseover(function()
	{
		return overlib(Premium_property_txt,CAPTION,'Premium Property',WIDTH,400);
	});
	$(this).mouseout(function()
	{
		return nd();
	});
});*/

function google_ajax_pagination_analytics(page) {
    if (page > 1) {
        hashed_link = "page" + page;
        //$.address.value(hashed_link);
        window.location.hash = hashed_link;
        ga_url = window.location.pathname + window.location.hash;
    } else {
        ga_url = window.location.pathname;
        window.location.hash = "";
        //$.address.value("");
        //window.location = window.location.href.replace( /#.*/, "");
    }
    if (typeof _gaq !== "undefined")
        _gaq.push(['_trackPageview', ga_url]);
}

function ajax_classification_log(inquiry_id) {
    var action = 'get_classification_log';
    $.post(this_domain_mybayut + '/includes/inquiries/ajax_classification_log.php', {
        action: action,
        inquiry_id: inquiry_id
    }, function(html) {
        overlib(html, CAPTION, 'Classification Log Details', WIDTH, 400, VAUTO, HAUTO);
    });
}

function share_leads_overlib(inquiry_id) {

    var action = 'lead_share_overlib';

    //$.post(this_domain_mybayut + '/includes/inquiries/ajax_share_lead.php',{action:action,inquiry_id:inquiry_id}
    $.post("?ajax=1&ajax_section=clients_leads&ajax_action=ajax_share_lead", {
        action: action,
        inquiry_id: inquiry_id
    }, function(html) {
        //overlib(html,WIDTH,400,HEIGHT,300,STICKY,CAPTION,'Share Lead',CLOSECLICK,VAUTO,HAUTO);
        overlib(html, STICKY, CLOSECLICK, CAPTION, "Share Lead(s)", WIDTH, 400, HAUTO, VAUTO, EXCLUSIVE);
    });


}

function delete_lead_overlib(inquiry_id) {

    var action = 'lead_share_overlib';

    // $.post(this_domain_mybayut + '/includes/inquiries/ajax_share_lead.php',{action:action,inquiry_id:inquiry_id}
    // 	,function(html) 
    // 	{
    // 		//overlib(html,WIDTH,400,HEIGHT,300,STICKY,CAPTION,'Share Lead',CLOSECLICK,VAUTO,HAUTO);
    // 		overlib(html,STICKY,CLOSECLICK,CAPTION,"Share Lead(s)",WIDTH,400,HAUTO,VAUTO,EXCLUSIVE);
    // 	});	

    var msg = "Please specify reason for deletion:";
    //frm_action = this_domain_mybayut + "/includes/inquiries/ajax_delete_lead.php?inquiry_id="+ inquiry_id;
    frm_action = "?ajax=1&ajax_section=clients_leads&ajax_action=ajax_delete_lead&inquiry_id=" + inquiry_id;
    //overlib_txt = "asdasdasd";
    overlib_txt = "<div id=\"msg_div\"><form name=\"del_lead\" id=\"del_lead\" action=\"" + frm_action + "\" method=\"post\"><input type=\"hidden\" name=\"lead_id\" id=\"lead_id\" value=\"" + inquiry_id + "\" /><input type=\"hidden\" name=\"del_id\" id=\"del_id\" value=\"1\" />" + msg + "<br /><div style = 'width:100%;margin-top:10px'><div style = 'width:100%'><input style='margin-top: 1px;vertical-align: middle;' type='radio' name='del_reason' value='duplicate' checked='checked'>Duplicate</div><div style = 'width:100%'><input style='margin-top: 1px;vertical-align: middle;' type='radio' name='del_reason' value='test'>Test</div><div style = 'width:100%'><input style='margin-top: 1px;vertical-align: middle;' type='radio' name='del_reason' value=' irrelevant'>Irrelevant</div><div style = 'width:100%'><input style='margin-top: 1px;vertical-align: middle;' type='radio' name='del_reason' id = 'others' value='others'>Others <input type = 'text' id = 'del_reason_others_input' placeholder = 'Reason' name = 'del_reason_others_input' style = 'width:64%;display:none'></div></div><center style = 'margin-top:10px'><input type=\"button\" value=\"Delete\" class=\"sb_leadyes\" />&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"cClick();\" /></center></form></div>";
    return overlib(overlib_txt, STICKY, CLOSECLICK, CAPTION, "Delete Lead", OFFSETX, -50, OFFSETY, -30);


}



$(".sb_leadyes").live("click", function(event) {
    var inquiry_id = I("lead_id").value;
    if ($("#others").prop("checked") && !$('#del_reason_others_input').val()) {
        $("#msg_div").html("Please specify reason properly.");
    } else {
        $('#del_lead').ajaxSubmit(function(str) {
            if (I("del_id") != null && I("del_id").value == 1) {

                $("#lead_row_" + inquiry_id).remove();
                var totalresults = parseInt(I("total_lead_count").innerHTML);
                totalresults = totalresults - 1;
                I("total_lead_count").innerHTML = totalresults;
                $("#msg_div").html("Lead is deleted.");
            } else {
                $("#msg_div").html("Lead isn't deleted.");
                /*var rdata = {
                	ajax:1,
                	ajax_section:"agency_staff",
                	ajax_action:"get_manage_team_user_html"
                	
                };
                //var url = this_domain_mybayut+"/includes/ag_manageteam/sub_agteam.php?teamid="+team_id;
                var teamstr = $.ajax({data:rdata,async:false}).responseText;
                $('#data_div').html("");
                $('#data_div').html(teamstr);
                //$("#divteam_"+team_id).html(teamstr);
                //$('#data_div').html(teamstr);*/
            }
            setTimeout("cClick()", 1000);
        });
    }
});



function stop_sharing(inquiry_id = '') {
    $('.loading_image_share_leadq1').show();
    if (typeof inquiry_id == 'undefined' || inquiry_id == '') {
        $(".inquiry_check").each(function() {
            if ($(this).is(":checked")) {
                inquiry_id += ($(this).attr('rel')) + ',';
            }
        });
    }
    var action = 'stop_sharing';
    if (typeof inquiry_id != 'undefined' && inquiry_id != '') {
        //$.post(this_domain_mybayut + '/includes/inquiries/ajax_stop_sharing.php',{action:action,inquiry_id:inquiry_id}
        $.post("?ajax=1&ajax_section=clients_leads&ajax_action=ajax_stop_sharing", {
            action: action,
            inquiry_id: inquiry_id
        }, function(str) {
            if (str == 'N') {
                $('.loading_image_share_leadq1').hide();
                return overlib("You do not have priviliges to stop sharing of leads", STICKY, CLOSECLICK, CAPTION, "Stop Sharing", width, 400, HAUTO, VAUTO, EXCLUSIVE);
            } else {
                $('.loading_image_share_leadq1').hide();
                location.reload();
            }
        });
    } else {
        $('.loading_image_share_leadq1').hide();
        alert('Please Select Lead(s)');
    }
}

function stop_sharing1(inquiry_id) {
    var html = "<div style='margin-left:47px;margin-top:20px;margin-bottom:15px;'><input type='button' id='stop_sharing_btn' name='stop_sharing_btn' value='Stop Sharing' onclick='stop_sharing_single( ";
    html += inquiry_id;
    html += ");' /></div>";
    overlib(html, CAPTION, 'Stop Sharing', STICKY, CLOSECLICK, CENTER, OFFSETY, -30);
}

function stop_sharing_single(inquiry_id) {

    var action = 'stop_sharing';
    if (typeof inquiry_id != 'undefined' && inquiry_id != '') {
        //$.post(this_domain_mybayut + '/includes/inquiries/ajax_stop_sharing.php',{action:action,inquiry_id:inquiry_id}
        $.post("?ajax=1&ajax_section=clients_leads&ajax_action=ajax_stop_sharing", {
            action: action,
            inquiry_id: inquiry_id
        }, function(str) {
            if (str == 'N') {
                $('.loading_image_share_leadq1').hide();
                return overlib("You do not have priviliges to stop sharing of leads", STICKY, CLOSECLICK, CAPTION, "Stop Sharing", width, 400, HAUTO, VAUTO, EXCLUSIVE);
            } else {
                $('.loading_image_share_leadq1').hide();
                location.reload();
            }
        });
    } else {
        $('.loading_image_share_leadq1').hide();
        alert('Please Select Lead(s)');
    }
}

function share_leads(inquiry_id = '') {
    var user_ids = [];

    $('#user_sel_to_share option').each(function() {
        user_ids.push($(this).val());
    });

    if (typeof inquiry_id == 'undefined' || inquiry_id == '') {
        $(".inquiry_check").each(function() {
            if ($(this).is(":checked")) {
                inquiry_id += ($(this).attr('rel')) + ',';
            }
        });
    }

    var action = 'share_lead';

    if (typeof inquiry_id != 'undefined' && inquiry_id != '') {
        $('.loading_image_share_lead').show();
        //$.post(this_domain_mybayut + '/includes/inquiries/ajax_share_lead.php',{action:action,user_ids:user_ids,inquiry_id:inquiry_id}
        $.post("?ajax=1&ajax_section=clients_leads&ajax_action=ajax_share_lead", {
            action: action,
            user_ids: user_ids,
            inquiry_id: inquiry_id
        }, function(str) {
            $('.message').html(str);
            $('.loading_image_share_lead').hide();

        });
    } else {
        alert('Please Select Lead(s)');
    }


}
// Close the dropdown menu if the user clicks outside of it
document.onclick = function(event) {
    if (!event.target.matches('.dropbtn-tab-listing')) {
        platformDropdownClose();
    }
}
$('.dropdown-content-tab-listing li').click(function() {
    $('#' + $(this).parent().attr('id') + '-input').val($(this).data('val'));
    $(this).parent().siblings('.dropbtn-tab-listing').attr('class', 'dropbtn-tab-listing ' + $(this).attr('class')).text($(this).text());

    if ($(this).parent().data('section')) {
        $('#go_' + $(this).parent().data('section')).click();
    } else {
        if ($(this).data('val') == 'olx') {
            // $('#txt_status_option').attr('disabled',true).attr('style','background:#e0e0e0 !important');
        } else {
            $('#txt_status_option').attr('disabled', false).attr('style', '');
        }
    }
});

function platformDropdownClose() {
    $('.dropdown-content-tab-listing').fadeOut(100, 'linear');
    $('.dropdown-content-tab-listing').animate({
        'bottom': '0px'
    }, 50, 'linear');
    $('.dropdown-content-tab-listing').removeClass('drp-active');
}

function platformDropdownOpen(obj) {
    var id = $(obj).siblings('.dropdown-content-tab-listing').attr("id");
    if (!$('#' + id).hasClass('drp-active')) {
        $('.dropdown-content-tab-listing').animate({
            'bottom': '0px'
        }, 50, 'linear');
        $('.dropdown-content-tab-listing').removeClass('drp-active');
        $('.dropdown-content-tab-listing').fadeOut(100, 'linear');
        $('#' + id).addClass('drp-active');
        $("#" + id).animate({
            'bottom': '-88px'
        }, 50, 'linear');
        $("#" + id).fadeIn(25, 'linear');
    } else {
        platformDropdownClose();
    }
}