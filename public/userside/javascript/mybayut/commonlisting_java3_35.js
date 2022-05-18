var listing_update = this_domain_mybayut + "/includes/sub/updatelistings.php";

function showtxt() {
    if (document.getElementById("opencomment").checked)
        document.getElementById("sp").style.visibility = "visible";
    else
        document.getElementById("sp").style.visibility = "hidden";
} ////End of Function

imzee_live(".db_del",
    "mouseover",
    function() {
        return overlib('Click to delete listing permanently', CAPTION, 'Delete Listing');
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        div_id = $(this).parent().attr("name");
        this_id = $(this).attr("id");
        this_id = this_id.replace("d_", "");
        action_url = listing_update + "?selector=" + this_id + "&del=1";
        var txt = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "Are you sure you want to delete this listing and its associated images, floorplans and documents?<br /><br />";
        txt += "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />";
        txt += "<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";
        return overlib(txt, STICKY, CLOSECLICK, CAPTION, 'Delete Listing', OFFSETY, -20, WIDTH, 300, HEIGHT, 100);

    }
);

imzee_live(".db_status",
    "click",
    function(event) {
        div_id = $(this).parent().attr("name");
        this_id = $(this).attr("id");
        this_id = this_id.replace("d_", "");
        active_sale = $("#active_sale_listing_count").val();
        //action_url =  listing_update + "?selector="+this_id+"&del=2";
        action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=2";
        //status_val = $("#h_firmstate").val();
        status_val = $(this).data("name");
        if (status_val == "Deleted")
            db_obtitle = "Undelete Listing"
        else
            db_obtitle = "Reason for Deletion"
        purpose = parseInt($(this).attr("name"));
        var txt = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += overlib4deletelisting(purpose, this_id, status_val);
        if (status_val == 'edited') {
            txt += "<input type=\"hidden\" id=\"delete_from_edited_list\" name=\"delete_from_edited_list\" value=\"1\" />";
        }
        txt += "<input type=\"hidden\" name=\"active_sale_listing_count\" value=\'" + active_sale + "\' />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "</td></tr></table>";
        txt += "</form>";
        cap_title = 'Delete Listing';

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, db_obtitle, OFFSETY, -20, WIDTH, 230, HEIGHT, 100, EXCLUSIVE);
    }
);


imzee_live(".no_priv_del",
    "mouseover",
    function() {
        var hrs = $(this).data('hrs');
        db_obtitle = "Delete Listing";
        db_obtxt = "You have <b>" + hrs + " hr(s)</b> left to remove this listing. For details on our policies, please read our (Terms and Conditions). ";
        return overlib(db_obtxt, CAPTION, db_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    }
);
imzee_live(".no_priv_recycle",
    "mouseover",
    function() {
        var hrs = $(this).data('hrs');
        db_obtitle = "Recycle Listing";
        db_obtxt = "You have <b>" + hrs + " hr(s)</b> left to recycle this listing. For details on our policies, please read our (Terms and Conditions). ";
        return overlib(db_obtxt, CAPTION, db_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    }
);


imzee_live(".hide_listing",
    /*"mouseover",function()
    {
    	show_web = $(this).data('show');
    	if(show_web == 0)
    	{	
    		db_obtitle = "Unhide Listing"; 
    		db_obtxt = "Click here to unhide this listing."; 
    	}
    	else
    	{	
    		db_obtitle = "Hide Listing"; 
    		//db_obtxt = "A listing cannot be deleted for 24 hours after it is posted. You can only hide this listing from the website. ";
    		db_obtxt = "Click here to hide this listing.";
    	}
    	return overlib(db_obtxt,CAPTION,db_obtitle);
    },
    "mouseout",function()
    {
    	return nd();
    },*/
    "click",
    function(event) {
        div_id = $(this).parent().attr("name");
        this_id = $(this).attr("id");
        this_id = this_id.replace("d_", "");
        //active_sale = $("#active_sale_listing_count").val();
        is_show = $(this).data("show");
        action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=16" + "&data_case=" + is_show;
        //status_val = $("#h_firmstate").val();
        var label = "";
        if (is_show == 0) {
            db_obtitle = "Unhide Listing";
            label = "Click <b>continue</b> to unhide this listing.</br>";
        } else {
            db_obtitle = "Make Hidden";
            label = "Are you sure you want to hide this listing from the website? </br>";
        }
        //purpose = parseInt($(this).attr("name"));


        var txt = "";
        txt += "<center><form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td style='text-align:left;'>";
        txt += label;
        // if(status_val == 'edited'){
        // 	txt += "<input type=\"hidden\" id=\"delete_from_edited_list\" name=\"delete_from_edited_list\" value=\"1\" />";
        // }
        //txt += "<input type=\"hidden\" name=\"active_sale_listing_count\" value=\'"+active_sale+"\' />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "<input type=\"hidden\" id=\"selector\" name='selector' value=\"" + this_id + "\" />";
        txt += "<input type='button' value='Continue' class='ob_yes'>";
        txt += "</td></tr></table>";

        txt += "</form></center>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, db_obtitle, OFFSETY, -20, HEIGHT, 50, EXCLUSIVE);
    }
);


imzee_live(".db_pdelete",
    /*"mouseover",function()
    {
    	div_id=$(this).parent("span").attr("name");
    	this_id = $(this).attr("id");
    	this_id = this_id.replace("pd_","");
    	action_url =  listing_update + "?selector="+this_id+"&del=7";
    	var txt = "";
    	if(isNaN(this_id))
    	{
    		var obtxt = "You do not have permission to access this property.";
    		var obtitle = "Access Denied";
    	}
    	else
    	{
    		var obtxt = "Click to delete listing permanently";
    		var obtitle = "Delete Listing";
    	}
    	return overlib(obtxt,CAPTION,obtitle);
    },
    "mouseout",function()
    {
    	return nd();
    },*/
    "click",
    function(event) {
        div_id = $(this).parent().attr("name");
        this_id = $(this).attr("id");
        this_id = this_id.replace("pd_", "");
        //action_url =  listing_update + "?selector="+this_id+"&del=7";
        action_url = this_domain_mybayut + "/index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=7";
        //console.log(this_domain_mybayut);
        console.log(action_url);
        //return false;
        var txt = "";
        if (isNaN(this_id)) {
            txt += "You do not have permission to access this property.";
        } else {
            txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
            txt += "<table width=\"100%\" align=\"center\"><tr><td>";
            txt += "Are you sure you want to delete this listing and its associated images, floorplans and documents?<br /><br />";
            txt += "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" /> &ensp;";
            txt += "<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
            txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
            txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
            txt += "</td></tr></table>";
            txt += "</form>";
        }
        return overlib(txt, STICKY, CLOSECLICK, CAPTION, 'Delete Listing', OFFSETY, -20, WIDTH, 250, HEIGHT, 100);
    }
);

imzee_live(".sb_pending",
    "mouseover",
    function() {
        return overlib('Click to submit listing for approval', CAPTION, 'Submit Listing');
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        div_id = $(this).parent().attr("name");
        this_id = $(this).attr("id");
        this_id = this_id.replace("s_", "");
        action_url = listing_update + "?selector=" + this_id + "&del=5";
        var txt = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "Are you sure you want to submit this property for approval?<br /><br />";
        txt += "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />";
        txt += "<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";
        return overlib(txt, STICKY, CLOSECLICK, CAPTION, 'Submit Listing', OFFSETY, -20, HEIGHT, 100);
    }
);

imzee_live(".mhot",
    "mouseover",
    function() {
        this_title = $(this).attr("name");
        var days = $(this).data('days');
        var hrs = $(this).data('hrs');

        if (this_title == "B") {
            this_obtitle = "<span class='hot-tooltip-head'>Hot Property</span>";
            over_txt = "Click to make it a basic listing";
            if (days > 0 || hrs > 0) {
                this_obtitle = "<span class='hot-tooltip-head'>Credit Expiry</span>";
                over_txt = "Expiring in ";
                if (days > 0)
                    over_txt += "<b>" + days + " day(s) </b>";
                if (hrs > 0)
                    over_txt += "<b>" + hrs + " hr(s)</b>";
            }
        } else {
            this_obtitle = "<span class='hot-tooltip-head'>Make It Hot</span>";
            over_txt = "Click to make it a  hot listing";
        }
        return overlib(over_txt, CAPTION, this_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        if ($("#overDiv").length > 0) {
            cClick();
            // $("#overDiv").css('display', 'none');	
        }

        admin_action = $(this).attr("rel"); //for admin asking

        this_title = $(this).attr("name");
        this_obtitle = "<span class='hot-tooltip-head'>Make It Hot</span>";
        if (this_title == "B")
            this_obtitle = "<span class='hot-tooltip-head'>Basic Listing</span>";
        else
            this_obtitle = "<span class='hot-tooltip-head'>Make It Hot</span>";
        div_id = $(this).parent().attr("name");
        this_id = $(this).attr("id");
        this_id = this_id.replace("h_", "");
        action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=3";
        //action_url =  listing_update + "?selector="+this_id+"&del=3";
        status_val = $("#h_firmstate").val();
        purpose = parseInt($(this).attr("name"));
        this_title = $(this).attr("name");
        /* -- edited by faran date: 2013-12-31 */
        this_status = $(this).siblings('.db_status').find('img').attr('name');
        /* -- edited by faran date: 2013-12-31 (END) */


        var txt = "";
        var txt_btn = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";

        var check = "";
        var str = "";
        var str_arr = "";
        // var quota_from="";
        var deduction_for = "hot_listing";

        if (this_title != "B" && admin_action != 'transfer_quota') {
            // if(admin_action == 'only_user')
            // 	quota_from = 'user';
            // else if(admin_action == 'only_admin')
            // 	quota_from = 'admin';
            var rdata = {
                ajax: 1,
                ajax_section: "dash_prop_invent",
                ajax_action: "save_delete_property_list_popup_html",
                selector: this_id,
                del: 15,
                txtcom: deduction_for
                // quota_from:quota_from
            }
            quantity_to_be_deducted_str = $.ajax({
                data: rdata,
                async: false
            }).responseText;
            var str_arr = quantity_to_be_deducted_str.split("|");
            str = str_arr[0];

            if (str_arr[1] == "200") { //console.log(str_arr); 
                check = "1";
                // txt_btn = "<input type='hidden' name='quota_from' value='"+quota_from+"' /><center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
                txt_btn = "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
                $(".frm_del").append(txt_btn);
            } else if (str_arr[1] == "204") {
                check = "0";

                // Already handled in php
                // Handling duplication of msgs if credit less && not agency owner
                if (this_title != "") {
                    txt += "Sorry, you do not have any Hot Property credits available.<br /><br />Please click <a href=\"" + this_domain + "/profolio/index.php?tabs=13&section=advertise&product=" + system_products_list[deduction_for] + "\" class=\"green_text\" target=\"_blank\"> here </a> to purchase Hot Listing Credits<br><br>";
                    txt += "<center><input type=\"button\" value=\"close\" onclick=\"return cClick();\" /></center>";
                }
            } else {
                check = "0";
                txt += "Something went wrong, please try again later.<br><br>";
                txt += "<center><input type=\"button\" value=\"close\" onclick=\"return cClick();\" /></center>";
            }
        }

        var txt_msg = "";

        if (typeof this_title === "undefined" || this_title == "") {
            txt_msg = "Sorry, you do not have any Hot Property credits available.<br /><br />Please click <a href=\"" + this_domain + "/profolio/index.php?tabs=13&section=advertise&product=" + system_products_list[deduction_for] + "\" class=\"green_text\" target=\"_blank\"> here </a> to purchase Hot Listing Credits";
            txt_btn = "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
            this_obtitle = "<span class='hot-tooltip-head'>Make it Hot</span>";
        } else {
            //txt_btn = "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
            if (this_title == "B") {
                txt_msg = "Hot listing cannot be converted into a basic listing.<br /><br />";
                var flag = "D";
                txt = "";
                txt += "<table width=\"100%\" align=\"center\"><tr><td>";
                txt += txt_msg;
                txt += "</td></tr></table>";
                return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 300, HEIGHT, 30, EXCLUSIVE);
            } else {
                if (str_arr[2] == "0")
                    txt_msg = "Are you sure you want to turn this listing into a Hot Property? Once you turn this property hot, 1 credit will be deducted from your hot listing credits.<br /><br />";
                var flag = "B";
            }
        }
        // var txt = "";
        // txt += "<form class=\"frm_del\" method=\"post\" action=\""+action_url+"\">";
        // txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        if (admin_action == "") {
            txt += txt_msg;
        }

        // console.log('Append api msg');
        // console.log(str_arr);	

        // If msg zone factor returns 200 n zone factor applies is confirmed and not transfre quota case
        if (str_arr[1] == "200" && str_arr[2] == "1" && admin_action != 'transfer_quota') {
            txt += str + "<br /><br />";
        }

        if (check == "1") {
            if (admin_action != "") {
                switch (admin_action) {
                    case 'ask_admin':
                        if (str_arr[2] == "0") {
                            txt += " Are you sure you want to turn this listing into a Hot Property?";
                            txt += " Once you turn this property hot, 1 credit will be deducted from hot listing credits.<br /><br />";
                        }

                        txt += "<b>Deduct Credit From</b><br/>";
                        txt += "<input type='radio' checked name='quota_from' value='admin' /> My Self";
                        txt += "&ensp;&ensp;&ensp;<input type='radio' name='quota_from' value='user' /> User (" + $(this).attr("user") + ")";
                        break;
                    case 'only_user':
                        if (str_arr[2] == "0") {
                            txt += " Are you sure you want to turn this listing into a Hot Property?";
                            txt += " Once you turn this property hot, 1 credit will be deducted from <b>" + $(this).attr("user") + "</b> hot listing credits.<br /><br />";
                        }
                        // txt += "Credit will be deducted from <b>"+$(this).attr("user")+"</b><br/>";
                        txt += "<input type='hidden' name='quota_from' value='user' />";
                        break;
                    case 'only_admin':
                        if (str_arr[2] == "0") {
                            txt += " Are you sure you want to turn this listing into a Hot Property?";
                            txt += " Once you turn this property hot, 1 credit will be deducted from your hot listing credits.<br /><br />";
                        }
                        // txt += "Credit will be deducted from <b>Admin</b>";
                        //txt_msg += "<b>1 unit will be deducted from your hot listings quota</b>";
                        //txt += txt_msg;
                        break;
                        // case 'transfer_quota':
                        // 	txt_msg = "You "+(($(this).attr("user") != "")?' and '+$(this).attr("user"):'')+" do not have hot listings credit available. Please either take the required hot credits back from the following agency users or purchase more to mark your properties as hot listings"
                        // 	txt_msg += I("hotquota_msg_admin_only").innerHTML;
                        // 	txt += txt_msg;
                        // 	// txt += "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
                        // break;

                }
            }
            // txt += txt_msg;
        }


        if (admin_action != 'transfer_quota')
            txt += txt_btn;
        // transfer quota case 
        else {
            // txt_btn = "<center><input type=\"button\" value=\"continue\" data-of='"+this_id+"' data-for='"+deduction_for+"' onclick='deduction_quota(this)' />&nbsp;&nbsp;<input type=\"button\" value=\"cancel\" onclick=\"return cClick();\" /></center>";
            // if(check == "")
            // 	txt += "Something went wrong, please try again later.";	
            // txt_btn = "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
            // txt += txt_btn;
            txt_msg = "You " + (($(this).attr("user") != "") ? ' and ' + $(this).attr("user") : '') + " do not have hot listings credit available. Please either take the required hot credits back from the following agency users or purchase more to mark your properties as hot listings"
            txt_msg += I("hotquota_msg_admin_only").innerHTML;
            txt += txt_msg;
            txt += "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
        }

        /* -- edited by faran date: 2013-12-31 */
        if (this_status == "edited") {
            txt += "<input type=\"hidden\" id=\"flag\" name=\"update_flag_in_edit\" value=\"true\" />";
        }
        /* -- edited by faran date: 2013-12-31 (END) */
        txt += "</td></tr></table>";
        txt += "<input type=\"hidden\" id=\"flag\" name=\"flag\" value=\"" + flag + "\" />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        // txt += "</td></tr></table>";
        txt += "</form>";
        cap_title = 'Delete Listing';
        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 300, HEIGHT, 120, EXCLUSIVE);
    }
);

imzee_live(".story-icon, .story-icon-disabled, .story-icon-active",
    "mouseover",
    function() {
        this_obtitle = "<h2 class='heading-story-ad'>Zameen Stories</h2>";

        var val = $(this).data('value');
        if (val == 'story-create') {
            over_txt = "Post a story for this property";
        } else if (val == 'story-listing-not-approved') {
            over_txt = "Your listing is not approved yet. Please try again later.";
        } else if (val == 'story-listing-not-free') {
            over_txt = "This feature is not available for Free listings.";
        } else if (val == 'story-listing-no-image') {
            over_txt = "At least 1 image is required to post this ad as story.";
        } else if (val == 'story-already-posted') {
            // over_txt = '<ul class="story-ad-list"><li><h3>Posted on</h3><p>24th Feb, 2021</p></li><li><h3>Post Count</h3><p>5 Times</p></li><li><h3>Story Views</h3><p>123,426</p></li><li><h3>Time Remaining</h3><p>5 Hours</p></li></ul><br/><a href="#" class="btn-story-ad remove">Remove</a>';
            over_txt = "Click to view the story stats.";
            return overlib(over_txt, CAPTION, this_obtitle, WIDTH, 220);
        } else if (val == 'story-credits-not-available') {
            over_txt = "Insufficient story credits.";
        }
        return overlib(over_txt, CAPTION, this_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    });

imzee_live(".story-already-posted",

    "click",
    function() {
        this_obtitle = "<h2 class='heading-story-ad'>Zameen Stories</h2>";
        var txt = '';
        var story_post_date = $(this).data('story_post_date');
        var story_post_count = $(this).data('story_post_count');
        var story_post_views = $(this).data('story_post_views');
        var story_post_remaining_time = $(this).data('story_post_remaining_time');

        var story_id = $(this).data('story_id');
        var div_id = $(this).parent().attr("name");
        var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=delete_listing_story&story_id=" + story_id + "&del=12";

        txt = "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += '<ul class="story-ad-list"><li><h3>Posted on</h3><p>' + story_post_date + '</p></li><li><h3>Post Count</h3><p>' + story_post_count + '</p></li><li><h3>Story Views</h3><p>' + story_post_views + '</p></li><li><h3>Time Remaining</h3><p>' + story_post_remaining_time + '</p></li></ul><br/><a href="javascript:void(0)" data-story_id = "' + story_id + '" class="btn-story-ad remove remove_story">Remove</a>';
        var txt_btn = "";
        txt += "<input type=hidden name=story_id id=story_id value=" + story_id + " />";
        txt += "</form>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 220, HEIGHT, 60, EXCLUSIVE);
    });

imzee_live(".remove_story",
    "click",
    function(event) {
        // cClick();
        $(this).attr('disabled', true);
        $(".frm_del").prepend("<table width=\"100%\" height=\"20\"><tr><td width=\"100%\" height=\"20\" align=\"center\" valign=\"middle\"><span class=\"red_text\"><img style='margin-bottom:10px;' src=" + this_domain + '/images/common/zn_logo_loading.gif' + " border='0' /></span></td></tr></table>");

        $(".frm_del").ajaxSubmit(function(str) {
            str = JSON.parse(str.trim());
            var reload_listings_data = 0;
            var txt = '';
            if (str['status'] == 0) {
                txt = str['message'];
            } else if (str['status'] == 1) {
                txt = str['message'];
                reload_listings_data = 1;
            }

            if (reload_listings_data) {
                var a = $("#div_letter").val();
                var data_div = "#data_" + a;
                if ($('#inventory_data').length > 0)
                    data_div = "#inventory_data";
                var st_value = $("#st_" + a).val();
                var totalresults = parseInt($("#total_" + a).html());
                var pageresults = parseInt($("#pno_" + a).val());
                var pagenumber = parseInt($("#p_" + a).val());
                var user_val = $("#slag_" + a).val();
                var status_val = $("#h_firmstate").val();
                var ajax_action = 'get_property_management_list_html';
                if (data_div == "#inventory_data") {
                    inventory_data_reaload();
                } else {
                    var rdata = {
                        ajax: 1,
                        ajax_section: "dash_prop_invent",
                        ajax_action: ajax_action,
                        purpose: a,
                        number_records: pageresults,
                        status: status_val,
                        page: pagenumber,
                        showstatus: st_value,
                        sl_users: user_val
                    };
                    if ($("#client_id").val() > 0) {
                        var rdata = {
                            ajax: 1,
                            ajax_section: "dash_prop_invent",
                            ajax_action: ajax_action,
                            client_id: $("#client_id").val(),
                            data_div: "#data_client"
                        };
                    }
                    var c = $.ajax({
                        data: rdata,
                        async: false
                    }).responseText;
                    $(data_div).html(c);
                    var total = parseInt($("#newtotal_" + a).html());
                    $("#total_" + a).html(total);
                }
            }
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + txt + "</td></tr></table>");
            setTimeout('cClick();', 5000);
        });
    });
imzee_live(".m_mgz",
    "mouseover",
    function() {
        this_title = $(this).attr("name");
        if (this_title == "Magazine") {
            this_obtitle = 'Magazine Basic Listing';
            over_txt = "Click to make it a basic listing";
        } else {
            this_obtitle = 'Create Magazine Listing';
            over_txt = "Click to make it a  Magazine listing";
        }
        return overlib(over_txt, CAPTION, this_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        admin_action = $(this).attr("rel"); //for admin asking

        div_id = $(this).parent().attr("name");
        this_id = $(this).attr("id");
        this_id = this_id.replace("mgz_", "");
        //action_url =  listing_update + "?selector="+this_id+"&del=9";
        action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=9";
        this_title = $(this).attr("name");

        this_obtitle = 'Create Magazine Listing';
        if (this_title == "Magazine")
            this_obtitle = 'Magazine Basic Listing';
        else
            this_obtitle = 'Create Magazine Listing';

        if (typeof this_title === "undefined" || this_title == "") {
            txt_msg = "Sorry, you do not have any Magazine Credits available.<br /><br />Please click <a href=\"" + this_domain + "/profolio/index.php?tabs=13&section=advertise&product=3\" class=\"green_text\" target=\"_blank\"> here </a> to purchase Magazine Credits";
            txt_btn = "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
            this_obtitle = 'Create Magazine Listing';
        } else {
            txt_btn = "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
            if (this_title == "Magazine") {
                txt_msg = "Are you sure you do not want to include this listing in current magazine edition?<br /><br />";
                var this_value = 0;
            } else {
                txt_msg = "Are you sure you want to mark this property as a magazine listing? If yes, then one credit will be deducted from your Magazine Listings Credits.<br /><br/>";
                var this_value = 1;
            }
        }

        var txt = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        //if(admin_action == "" ||  (admin_action != "transfer_quota" && admin_action != "date_end" && admin_action != "date_end_user_quota"))
        if (admin_action == "") {
            txt += txt_msg;
        }

        if (admin_action != "") {
            switch (admin_action) {
                case 'date_end':
                    if (this_title == "Magazine") {
                        txt += "This listing has been locked to be published in the Magazine. It cannot be returned to a basic listing anymore.";
                        txt_btn = "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
                    } else {
                        if (this_title != "") {
                            txt += "Booking for magazine listings is over for this month. This listing will be published in the next month's issue.<br/>";
                        } else {
                            txt += txt_msg;
                        }
                        var after_date_rel = $(this).attr('after_date_rel');
                        if (typeof after_date_rel !== 'undefined' && after_date_rel !== false) {
                            var newtxt = switch_case_for_mgz(after_date_rel, $(this));
                            txt += newtxt;
                        }
                    }
                    break;
                case 'ask_admin':
                case 'only_user':
                case 'only_admin':
                case 'transfer_quota':
                    var newtxt = switch_case_for_mgz(admin_action, $(this));
                    txt += newtxt;
                    break;
                    /*
                    case 'ask_admin':
                    	if(this_title != "Magazine"){
                    		txt += "<b>Deduct credit from</b><br/>";
                    		txt += "<label for='quota_admin'><input id='quota_admin' type='radio' checked name='quota_from' value='admin' /> My Self</label>";
                    		txt += "&ensp;&ensp;&ensp;<label for='quota_user'><input id='quota_user' type='radio' name='quota_from' value='user' /> User ("+$(this).attr("user")+")</label>";
                    	}
                    break;
                    case 'only_user':
                    	txt += "Credit will be deducted from <b>"+$(this).attr("user")+"</b><br/>";
                    	txt += "<input type='hidden' name='quota_from' value='user' />";
                    break;
                    case 'only_admin':
                    	txt += "Credit will be deducted from <b>Admin</b>";
                    	//txt += txt_msg;
                    break;
                    case 'transfer_quota':
                    	txt_msg = "You "+(($(this).attr("user") != "")?' and '+$(this).attr("user"):'')+" do not have magazine credits available. Please either take the required magazine credits back from the following agency users or purchase more to mark your properties as magazine listings"
                    	txt_msg += I("mzghotquota_msg_admin_only").innerHTML;
                    	txt_btn = "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
                    	txt += txt_msg;
                    break;*/
            }
        }
        txt += txt_btn;


        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "<input type=hidden name=is_mgz_listing id=is_mgz_listing value=" + this_value + " />";
        txt += "</td></tr></table>";
        txt += "</form>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 300, HEIGHT, 120, EXCLUSIVE);
    }
);

function switch_case_for_mgz(c, obj) {
    var txt = "";
    switch (c) {
        case 'ask_admin':
            if (this_title != "Magazine") {
                txt += "Are you sure you want to mark this property as a magazine listing? If yes, then one credit will be deducted from Magazine Listings Credits.<br/><br/>"
                txt += "<b>Deduct credit from</b><br/>";
                txt += "<label for='quota_admin'><input id='quota_admin' type='radio' checked name='quota_from' value='admin' /> My Self</label>";
                txt += "&ensp;&ensp;&ensp;<label for='quota_user'><input id='quota_user' type='radio' name='quota_from' value='user' /> User (" + obj.attr("user") + ")</label><br/>";
            }
            break;
        case 'only_user':
            txt += "Are you sure you want to mark this property as a magazine listing? If yes, then one credit will be deducted from <b>" + obj.attr("user") + "</b> Magazine Listings Credits.<br/><br/>";
            //txt += "Credit will be deducted from <b>"+obj.attr("user")+"</b><br/><br/>";
            txt += "<input type='hidden' name='quota_from' value='user' />";
            break;
        case 'only_admin':
            txt += "Are you sure you want to mark this property as a magazine listing? If yes, then one credit will be deducted from your Magazine Listings Credits.<br/><br/>";
            //txt += "Credit will be deducted from <b>Admin</b>";
            //txt += txt_msg;
            break;
        case 'transfer_quota':
            txt_msg = "You " + ((obj.attr("user") != "") ? ' and ' + obj.attr("user") : '') + " do not have magazine credits available. Please either take the required magazine credits back from the following agency users or purchase more to mark your properties as magazine listings"
            txt_msg += I("mzghotquota_msg_admin_only").innerHTML;
            txt_btn = "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
            txt += txt_msg;
            break;
    }
    return txt;
}

imzee_live(".dhot",
    "mouseover",
    function() {
        this_title = $(this).attr("name");
        if (this_title == "A") {
            this_obtitle = 'Basic Listing';
            over_txt = "Click to make it a basic listing";
        } else {
            this_obtitle = 'Make It Distress';
            over_txt = "Click to make it a  distress listing";
        }
        return overlib(over_txt, CAPTION, this_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        this_title = $(this).attr("name");
        this_obtitle = 'Make It Hot';
        if (this_title == "A")
            this_obtitle = 'Basic Listing';
        else
            this_obtitle = 'Make It Distress';
        div_id = $(this).parent().attr("name");
        this_id = $(this).attr("id");
        this_id = this_id.replace("d_", "");
        action_url = listing_update + "?selector=" + this_id + "&del=3";
        status_val = $("#h_firmstate").val();
        purpose = parseInt($(this).attr("name"));
        this_title = $(this).attr("name");
        if (typeof this_title === "undefined" || this_title == "") {
            txt_msg = "Sorry, you do not have any enough Hot Property credits available. Distress property required 2 hot credits.<br /><br />Please click <a href=\"" + this_domain_fe + "/advertise/listings-hot_property.html\" class=\"green_text\" target=\"blank\"> here </a> to purchase Hot Listing Credits";
            txt_btn = "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
            this_obtitle = 'Make it Hot';
        } else {
            txt_btn = "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
            if (this_title != "A") {
                txt_msg = "Are you sure you want to turn this listing into a Distress Property? Once you turn this property distress, two credit will be deducted from your hot listing quota.<br /><br />";
                var flag = "A";
            } else {
                txt_msg = "Are you sure you want to turn this hot property into a basic listing? NOTE: This action will not increase your hot listings quota.<br /><br />";
                var flag = "D";
            }
        }

        var txt = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += txt_msg;
        txt += txt_btn;
        txt += "<input type=\"hidden\" id=\"flag\" name=\"flag\" value=\"" + flag + "\" />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";
        cap_title = 'Delete Listing';

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, HEIGHT, 120, EXCLUSIVE);
    }
);

function overlib4deletelisting($purpose, $selector, status) {
    $output = "";
    $output += "<div id=error_msg class=redtext_class></div>";

    if (status == "Deleted") {
        $output += "<input type=radio class=\"del_listing position-absolute-icon\" name=delListing  value=on style=\"visibility:hidden;\" checked />";
        $output += "This listing has already been deleted. Please click the Undelete button below to restore this listing.";
        $output += "<br/>&nbsp;&nbsp;&nbsp;&nbsp;<input type=button name=subDel value=Undelete onclick=ajaxsubmitDelete(); />";
        $output += "&nbsp;&nbsp;<input type=button name=cancel value=Cancel onclick=cClick(); />";
    } else {
        if ($purpose == 1 || $purpose == 2) {
            $output += "<input type=radio class=del_listing name=delListing value=underoff onclick=showtxt(); />";
            $output += "Under Offer";
        } else {
            $output += "<input type=radio class=del_listing name=delListing value=reqfil onclick=showtxt(); />";
            $output += "Request Fulfilled";
        }

        if ($purpose == 1) {
            $output += "<br/><input type=radio class=del_listing name=delListing value=sold onclick=showtxt(); />";
            $output += "Sold";
        }
        if ($purpose == 2) {
            $output += "<br/><input type=radio class=del_listing name=delListing value=rented  onclick=showtxt(); />";
            $output += "Rented";
        }

        $output += "<br><input type=radio name=delListing class=del_listing id=opencomment value=other onclick=showtxt(); />";
        $output += "Other";
        $output += "<span id=sp style=visibility:hidden>";
        $output += "<br/>Comment <input type=text name=txtcom id=txtcom maxlength=100 />";
        $output += "</span>";
        $output += "<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;<input type=button name=subDel value=Submit onclick=ajaxsubmitDelete(); />";
        $output += "&nbsp;&nbsp;<input type=button name=cancel value=Cancel onclick=cClick(); />";
    }
    $output += "<input type=hidden name=selector id=selector value=" + $selector + " />";

    return $output;
} //// End of Function

imzee_live(".expired_text",
    "click",
    function(event) {
        this_id = $(this).attr("id");
        this_id = this_id.replace("exp_", "");
        action_url = listing_update + "?selector=" + this_id + "&del=8";
        var txt = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<div style=\"font-size:10px;\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "Renew for <select name=\"sl_date\" id=\"sl_date\">";
        txt += "<option value=\"15\">15 Days</option>";
        txt += "<option value=\"30\">1 Month</option>";
        txt += "<option value=\"60\">2 Months</option>";
        txt += "<option value=\"90\">3 Months</option>";
        txt += "<option value=\"180\">6 Months</option>";
        txt += "<option value=\"9999\">Never Expires</option>";
        txt += "</select><br /><br />";
        txt += "<center><input type=\"button\" value=\"Renew\" class=\"ob_yes\" />";
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "</td></tr></table>";
        txt += "</div>";
        txt += "</form>";
        return overlib(txt, STICKY, CLOSECLICK, CAPTION, 'Change Expiry Days');
    }
);

imzee_live(".a_rejected",
    "mouseover",
    function() {
        this_msg = $(this).attr("name");
        if (typeof this_msg === "undefined")
            this_msg = "Invalid Information";
        var txt = "";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += this_msg + "<br />";
        txt += "</td></tr></table>";

        return overlib(txt, CAPTION, 'Comments');
    },
    "mouseout",
    function() {
        return nd();
    }
);


function show_pricedown(txt, title) {
    return overlib(txt, STICKY, CLOSECLICK, CAPTION, title, WIDTH, 500, OFFSETX, -400, OFFSETY, -100, VAUTO, HAUTO);
}

/************code added by uzair  4/27/2015 ****************/


imzee_live(".go_refresh_listing",
    "mouseover",
    function() {
        this_obtext = "You can refresh your property once every 24 hours";
        overlib(this_obtext, CAPTION, 'Refresh listing', WIDTH, 200);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        this_obtext = "Refresh this listing";
        this_id = $(this).attr("id");
        listing_flag = $(this).attr("name");
        this_id = this_id.replace("refr_", "");
        this_credit = $("#credit_util_" + this_id).val();
        action_url = listing_update + "?selector=" + this_id + "&del=10";
        a = $(this).parent().attr("name");
        this_rel = $(this).attr("rel");


        var txt_msgg = "";
        var txt = "";
        var check = "";
        var str = "";
        var str_arr = "";
        var deduction_for = "refresh_listing";

        // If not hot and superhot and not transfer_quota case
        if (listing_flag != "B" && listing_flag != "A" && this_rel != 'transfer_quota') {

            var rdata = {
                ajax: 1,
                ajax_section: "dash_prop_invent",
                ajax_action: "save_delete_property_list_popup_html",
                selector: this_id,
                del: 15,
                txtcom: deduction_for
            }
            quantity_to_be_deducted_str = $.ajax({
                data: rdata,
                async: false
            }).responseText;
            str_arr = quantity_to_be_deducted_str.split("|");
            str = str_arr[0];
        }


        if (this_rel != 'transfer_quota') {
            if (str_arr[1] == "200") {

                if (this_rel == "no_quota") {

                    txt = "<div id=\"refresh_listing_1\" >Sorry, you do not have any Refresh Listing credits available.<br /><br />Please click <a href=\"" + this_domain + "/profolio/index.php?tabs=13&section=advertise&product=" + system_products_list[deduction_for] + "\" class=\"green_text\" target=\"_blank\"> here </a>to purchase Refresh Listing Credits.</div><br/>";
                    txt += "<center id =" + a + " >";
                    txt += "<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
                    return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtext, OFFSETY, -20, WIDTH, 300, HEIGHT, 50, EXCLUSIVE);
                } else if (this_rel == "user") {


                    txt_msgg = "<div id=\"refresh_listing_1\" >Are you sure you want to Refresh this property listing?";
                    txt_msgg += " Once you Refresh this property listing, <b>" + this_credit + "</b> credit will be deducted" + (($(this).attr("accesskey") == "") ? " from <b>your</b> Refresh Listing credits." : " from <b>" + $(this).attr("accesskey") + "</b> Refresh Listing credits.") + "</div><br/>";

                    if (str_arr[2] == 1)
                        txt += str + "<br /><br />";
                    else
                        txt += txt_msgg;


                    txt += "<center id =" + a + " ><div id=\"div_obmsg\"></div><input rel=" + (($(this).attr("accesskey") == "") ? "no" : "user") + " type=\"button\" id =" + this_id + " value=\"Refresh\" class=\"ref_listing_on_click\" />&nbsp;";
                    txt += "<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
                    return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtext, OFFSETY, -20, WIDTH, 300, HEIGHT, 50, EXCLUSIVE);

                } else if (this_rel == "ask_admin") {


                    var staff = $(this).attr("accesskey").split("_");
                    txt_msgg = "<div id=\"refresh_listing_1\" >Are you sure you want to Refresh this property listing?";
                    txt_msgg += " Once you Refresh this property listing, <b>" + this_credit + "</b> credit will be deducted from Refresh Listing credits.<br/><br/></div>";

                    if (str_arr[2] == 1)
                        txt += str + "<br /><br />";
                    else
                        txt += txt_msgg;

                    txt += "<center id =" + a + "><b>Deduct Credit from</b><br/><label for='quota_admin'><input  type='radio' checked name='refresh_quota_from' value='admin' /> My Self</label>";
                    txt += "&ensp;&ensp;&ensp;<label for='quota_user'><input  type='radio' name='refresh_quota_from' value='user' /> User (" + $(this).attr("accesskey") + ")</label><br/>";
                    txt += "<input type=\"button\" id =" + this_id + " value=\"Refresh\" class=\"ref_listing_on_click\" />&nbsp;";
                    txt += "<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
                    return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtext, OFFSETY, -20, WIDTH, 300, HEIGHT, 50, EXCLUSIVE);

                }

            } else if (str_arr[1] == "204") {
                txt += "<div id=\"refresh_listing_1\" >Sorry, you do not have any Refresh Listing credits available.<br /><br />Please click <a href=\"" + this_domain + "/profolio/index.php?tabs=13&section=advertise&product=" + system_products_list[deduction_for] + "\" class=\"green_text\" target=\"_blank\"> here </a>to purchase Refresh Listing Credits.</div><br/>";
                txt += "<center><input type=\"button\" value=\"close\" onclick=\"return cClick();\" /></center>";
                return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtext, OFFSETY, -20, WIDTH, 300, HEIGHT, 50, EXCLUSIVE);
            } else {

                txt += "Something went wrong, please try again later.<br><br>";
                txt += "<center><input type=\"button\" value=\"close\" onclick=\"return cClick();\" /></center>";
                return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtext, OFFSETY, -20, WIDTH, 300, HEIGHT, 50, EXCLUSIVE);
            }
        }

        // transfer_quota case
        if (this_rel == "transfer_quota") {
            txt = "You do not have Refresh Listing credits available. Please either take the required credits back from the following agency users, or purchase new Refresh Listing credits.";
            txt += I("refreshquota_msg_admin_only").innerHTML;
            txt += "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
            return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtext, OFFSETY, -20, WIDTH, 300, HEIGHT, 50, EXCLUSIVE);
        }
        /*        
                } 
                else{
                txt = "<div id=\"refresh_listing_1\" >Are you sure you want to turn this listing Refresh? NOTE: This action will not reverse your refresh listing credit.</div>";
                txt += "<center id ="+a+" ><div id=\"div_obmsg\"></div><input type=\"button\" id ="+this_id+" value=\"Refresh\" class=\"ref_listing_on_click\" />&nbsp;";
		txt += "<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
		return overlib(txt,STICKY,CLOSECLICK,CAPTION, this_obtext,OFFSETY,-20,WIDTH,200,HEIGHT,50);         
                } */


    }

);

imzee_live(".ref_listing_on_click", "click", function(event) {

    this_id = $(this).attr("id");

    this_id = this_id.replace("refr_", "");

    action_url = this_domain_mybayut + "/index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=10";

    //  action_url =  listing_update + "?selector="+this_id+"&del=10";
    a = $(this).parent("center").attr("id");
    refresh_quota_from = $('input:radio[name=refresh_quota_from]:checked').val();
    user_quota = $(this).attr("rel");
    if ((refresh_quota_from === "user") || (user_quota === "user")) {
        refresh_quota_from = "user";
    } else {
        refresh_quota_from = "";
    }

    $("#refresh_listing_1").parent().html('<div id="processing" align="center"><img src="' + this_domain + '/images/common/zn_logo_loading.gif" /></div>');

    var data = {
        selector: this_id,
        quota_from: refresh_quota_from
    };


    setTimeout(function() {
        $.ajax({
            url: action_url,
            type: "post",
            data: data,
            aysnc: true,
            success: function(data) {
                var data_div = "#data_" + a;
                var st_value = $("#st_" + a).val();
                var totalresults = parseInt($("#total_" + a).html());
                var pageresults = parseInt($("#pno_" + a).val());
                var pagenumber = parseInt($("#p_" + a).val());
                var user_val = $("#slag_" + a).val();

                $(data_div).html(load_image);
                var str = "";
                var str_err = "";
                if (data.indexOf("api_down") > -1) {
                    str = data.split("splt");
                    str_err = str[0];
                    str = str[1].trim();
                }
                if (str == "api_down") {
                    $("#processing").parent().html('<div align="center">' + str_err + '</div>');
                }

                var status_val = $("#h_firmstate").val();
                if ($("#frm_inventorysearch").length) {
                    var rdata = {
                        ajax: 1,
                        ajax_section: "dash_prop_invent",
                        ajax_action: "get_property_search_inventory_list",
                        page: pagenumber
                        /*selector:this_id,*/
                    };

                    inventory_data_reaload();
                } else {
                    var rdata = {
                        ajax: 1,
                        ajax_section: "dash_prop_invent",
                        ajax_action: "get_property_management_list_html",
                        purpose: a,
                        number_records: pageresults,
                        status: status_val,
                        page: pagenumber,
                        showstatus: st_value,
                        sl_users: user_val

                    };

                    if ($("#client_id").val() > 0) {
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
                    var total = parseInt($("#newtotal_" + a).html());

                    $("#total_" + a).html(total);

                }
                setTimeout(function() {
                    cClick();
                }, 3000);

                // cClick();
                //$('.go_filter').delay(500).click();

                $(this).parent("center").hide();
            }

        });

    }, 3000);

});
imzee_live(".not_refresh_listing",
    "mouseover",
    function() {
        this_id = $(this).attr("id");
        this_obtext = "You cannot Refresh the same listing more than once " + ((this_id <= 1) ? "within a day." : "next " + this_id + " days.");
        overlib(this_obtext, CAPTION, "<span class='refresh-tooltip-head'>Refreshed Listing</span>", WIDTH, 200);
    },
    "mouseout",
    function() {
        return nd();
    }
);
imzee_live(".hot_not_refresh_listing",
    "mouseover",
    function() {
        this_id = $(this).attr("id");
        this_obtext = "Super Hot or Hot Listings cannot be Refreshed. Please choose a Premium Listing. ";
        overlib(this_obtext, CAPTION, "<span class='refresh-tooltip-head'>Refreshed Listing</span>", WIDTH, 200);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {

        this_id = $(this).attr("id");
        this_obtext = "<div>Super Hot and Hot Listings cannot be Refreshed. Please choose a Premium Listing.</div>";
        this_obtext += "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
        return overlib(this_obtext, STICKY, CLOSECLICK, CAPTION, "<span class='refresh-tooltip-head'>Refreshed Listing</span>", OFFSETY, -20, WIDTH, 300, HEIGHT, 50, EXCLUSIVE);
    }
);

imzee_live(".assign_user",
    "mouseover",
    function() {
        this_obtext = "Click to change the owner of this listing or move this listing under a different agnecy staff member.<br /><br />Current Owner: <b>" + $(this).attr("name") + "</b><br />";
        overlib(this_obtext, CAPTION, 'Change Listing Owner', OFFSETX, -120, OFFSETY, -120, WIDTH, 350);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        div_id = $(this).parent().attr("name");
        this_id = $(this).attr("id");
        this_id = this_id.replace("user_", "");
        action_url = this_domain_mybayut + "/index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_property_listing_owner_popup_html&selector=" + this_id + "&change=1";
        //		action_url =  this_domain_mybayut + "/includes/sub/listing_users.php?selector="+this_id+"&change=1"
        var txt = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "<span id=\"additional_span\">Loading...</span><br /><br />";
        txt += "<center><input type=\"button\" value=\"Move\" class=\"ob_yes\" />&nbsp;";
        txt += "<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";
        overlib(txt, STICKY, CLOSECLICK, CAPTION, 'Change Listing Owner', WIDTH, 350, HAUTO, VAUTO, EXCLUSIVE);
        var rdata = {
            ajax: 1,
            ajax_section: "dash_prop_invent",
            ajax_action: "get_property_listing_owner_popup_html",
            selector: this_id
        };
        //this_domain_mybayut + '/includes/sub/listing_users.php?selector='+this_id
        str = $.ajax({
            data: rdata,
            async: false
        }).responseText;
        I("additional_span").innerHTML = str;
    }
);

function show_member_breakdown(filter, prop_selector, defualt_display) {
    div_id = "div_show_breakdown";
    var div_display = I(div_id).style.display;
    if (typeof defualt_display !== "undefined") {
        div_display = defualt_display;
    }
    div = I('backgroundFilter');
    if (div_display == "none") {
        winH = I("footer").offsetTop;
        div.style.height = winH + "px";
        div.style.display = 'block';

        positionp = typeof window.pageYOffset != 'undefined' ? window.pageYOffset : document.documentElement && document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop ? document.body.scrollTop : 0;
        positionp = positionp + 15;
        leftp = window.innerWidth != null ? window.innerWidth : document.documentElement && document.documentElement.clientWidth ? document.documentElement.clientWidth : document.body != null ? document.body.clientWidth : null;
        if (findIE6 != -1) {
            I("menu4iframe").style.display = "block";
            I("menu4iframe").style.height = "100%";
        }
        ajax_path = this_domain + "/body/view/view_pricebreakdown.php?selector=" + prop_selector;
        down_div = "pricedown_main";
        if (filter == "areadown_main") {
            positionp = positionp + 30;
            ajax_path = this_domain + "/body/view/view_areadown.php?selector=" + prop_selector;
            down_div = "areadown_main";
        }
        $.get(ajax_path, {}, function(str) {
            $("#" + div_id).html(str);
            I(down_div).style.display = "block";
        });
        leftp = "25%";
        I(div_id).style.display = "block";
        I(div_id).style.top = positionp + "px";
        I(div_id).style.left = leftp;
    } else {
        I(div_id).style.display = "none";
        div.style.height = "0px";
        div.style.display = "none";
        if (div_id == "pricedown_main") {
            var fprice = I("tsale_price").innerHTML;
            fprice = $.trim(fprice);
            //fprice = fprice.replace(",","");
            f_array = fprice.split(",");
            var fprice_len = f_array.length;
            fprice = "";
            for (i = 0; i < fprice_len; i++) {
                fprice += f_array[i];
            }
            $("#prices").val(fprice);

            $("#stext").html(getPriceText(fprice));
            //toggle_pricediv("else");
        }
    }
} ////End of Function

function show_breakdown(div_id, prop_selector, defualt_display) {
    I("div_show_breakdown").style.display = "none";
    I("backgroundFilter").style.display = "none";
    I("div_show_breakdown").innerHTML = "<table align=\"center\"><tr><td align=\"center\"><img src=\"" + this_domain + "/images/common/loading.gif\" border=\"0\" /></td></tr></table>";
} ////End of Function	

function toggle_pricediv(a_id) {
    if (a_id == "clue_installment") {
        I("price_breakdown").style.display = "none";
        I("div_install_info").style.display = "block";
        I("clue_installment").className = "selected";
        I("clue_price").className = "";
    } else {
        I("div_install_info").style.display = "none";
        I("price_breakdown").style.display = "block";
        I("clue_price").className = "selected";
        I("clue_installment").className = "";
    }
    return false;
}

imzee_live(".chk_all",
    "click",
    function(event) {
        var this_check = $(this).attr("checked");
        var div_id = $(this).attr("id");
        div_id = div_id.replace("chkall_", "");
        data_div = "#data_" + div_id;
        if (div_id == "inventory")
            data_div = "#inventory_data";

        if (this_check) {
            $(data_div + " input[type=checkbox]").attr("checked", "checked");
        } else {
            $(data_div + " input[type=checkbox]").removeAttr("checked");
        }
    }
);

function change_expdate(selector, expiry_date, label_id) {
    //action_url =  listing_update + "?selector="+selector+"&del=8";
    action_url = this_domain_mybayut + "/index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + selector + "&del=8";
    var txt = "";
    txt += "<div id=\"div_obmsg\"></div>";
    txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
    txt += "<table width=\"100%\" align=\"center\"><tr><td>";
    if (typeof expiry_date !== "undefined") {
        txt += "Expiry Date: " + expiry_date + "<br /><br />";
    }
    txt += "Renew for <select name=\"sl_date\" id=\"sl_date\">";
    txt += "<option value=\"15\">15 Days</option>";
    txt += "<option value=\"30\">1 Month</option>";
    txt += "<option value=\"60\">2 Months</option>";
    txt += "<option value=\"90\">3 Months</option>";
    txt += "<option value=\"180\">6 Months</option>";
    txt += "<option value=\"9999\">Never Expires</option>";
    txt += "</select><br /><br />";
    txt += "<center><input type=\"button\" value=\"Renew\" onclick=\"submit_overlib_forms();\" />";
    txt += "&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
    if (typeof expiry_date !== "undefined")
        txt += "<input type=hidden name=h_lable id=h_lable value=" + label_id + " />";
    txt += "<input type=hidden name=selector id=selector value=" + selector + " />";
    txt += "</td></tr></table>";
    txt += "</form>";
    return overlib(txt, STICKY, CLOSECLICK, CAPTION, "Change Expiry Date", EXCLUSIVE, HEIGHT, 120);
}
imzee_live(".reset_default_internation_listing",
    "mouseover",
    function() {
        this_obtext = "Click on the icon to unmark or view your listing on different portals.";
        overlib(this_obtext, CAPTION, 'International listing', WIDTH, 200);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {

        this_obtext = "International listing";
        this_id = $(this).attr("id");
        flag = $(this).attr("name");
        flag = flag.replace("flag_", "");
        this_id = this_id.replace("inter_", "");
        action_url = listing_update + "?selector=" + this_id + "&del=11";
        a = $(this).parent("span").attr("name");
        this_rel_a = $(this).attr("rel_a");
        this_rel_u = $(this).attr("rel_u");
        var international = this_domain_mybayut + "/marketing_show_listing.php?account_a=" + this_rel_a + "&account_u=" + this_rel_u + "&selector=" + this_id + "";

        txt = "<div class=\"gen_" + this_id + "\"style=\"display:block\" ><center><input type=\"button\" id=\"over_" + this_id + "\" value=\"Unmark\" class=\"show_unset_msg_intl add_lead_client_btns_int\" />&nbsp;<a class=\"add_lead_client_btns_int\" type=\"button\" href=" + international + " value=\"temp\" target=\"_blank\">View list</a></center></div><div class=\"over_" + this_id + "\" style=\"display:none\"><div id=\"international_listing_1\" >Are you sure you want to turn this International listing off ? NOTE: This action will not reverse your International listings credit.</div><br>";
        txt += "<center id =" + a + " ><div id=\"div_obmsg\"></div><input rel=" + (($(this).attr("accesskey") == "") ? "no" : "user") + " type=\"button\" id =" + this_id + " name=" + flag + " value=\"Yes\" class=\"inter_listing_on_click\" />&nbsp;";
        txt += "<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center></div>";
        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtext, OFFSETY, -20, WIDTH, 300, HEIGHT, 50, EXCLUSIVE);
    }
);
imzee_live(".show_unset_msg_intl", "click", function(event) {
    var div_id = $(this).attr("id");
    var gen_div = div_id.replace("over_", "gen_")
    $("." + div_id).css("display", "block");
    $("." + gen_div).css("display", "none");
});
/**************international Credit code end (uzair)**********/
/***************Super hot (uzair ) 1/19/2016*************************/
imzee_live(".super_hot_cannot_hot",
    "mouseover",
    function() {
        this_id = $(this).attr("id");
        this_obtext = "Super Hot listings cannot be made Hot. Only Basic listings can be converted to Hot listings. If you want to make this a Hot listing, please make it a Basic listing first.";
        overlib(this_obtext, CAPTION, "<span class='hot-tooltip-head'>Hot Property</span>", WIDTH, 200);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {

        this_id = $(this).attr("id");
        this_obtext = "<div>Super Hot listings cannot be made Hot. Only Basic listings can be converted to Hot listings. If you want to make this a Hot listing, please make it a Basic listing first.</div>";
        this_obtext += "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
        return overlib(this_obtext, STICKY, CLOSECLICK, CAPTION, "<span class='hot-tooltip-head'>Hot Property</span>", OFFSETY, -20, WIDTH, 300, HEIGHT, 50, EXCLUSIVE);
    }
);

imzee_live(".view_detail_new",
    /*"mousemove",function()
    {
    	overlib('<b>Click here to view:</b><br />Property Details<br />Landlord Details<br />Listing Owner Details',WIDTH,150,CENTER,CAPTION,"Details");
    },
    "mouseout",function()
    {
    	return nd();
    },*/
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

imzee_live(".ob_yes_olx", "click", function(event) {
    $(this).attr('disabled', true);
    $(".frm_del").prepend("<table width=\"100%\" height=\"20\"><tr><td width=\"100%\" height=\"20\" align=\"center\" valign=\"middle\"><span class=\"red_text\"><img style='margin-bottom:10px;' src=" + this_domain + '/images/common/zn_logo_loading.gif' + " border='0' /></span></td></tr></table>");
    $(".frm_del").ajaxSubmit(function(str) {
        str = JSON.parse(str.trim());
        var reload_listings_data = 0;
        var txt = '';
        if (str['status'] == 0) {
            txt = str['message'];
        } else if (str['status'] == 1) {
            txt = str['message'];
            reload_listings_data = 1;
        }

        if (reload_listings_data) {
            var a = $("#div_letter").val();
            var data_div = "#data_" + a;
            if ($('#inventory_data').length > 0)
                data_div = "#inventory_data";
            var st_value = $("#st_" + a).val();
            var totalresults = parseInt($("#total_" + a).html());
            var pageresults = parseInt($("#pno_" + a).val());
            var pagenumber = parseInt($("#p_" + a).val());
            var user_val = $("#slag_" + a).val();

            var status_val = $("#h_firmstate").val();

            var ajax_action = 'get_property_management_list_html';
            if (data_div == "#inventory_data") {
                inventory_data_reaload();
            } else {
                var rdata = {
                    ajax: 1,
                    ajax_section: "dash_prop_invent",
                    ajax_action: ajax_action,
                    purpose: a,
                    number_records: pageresults,
                    status: status_val,
                    page: pagenumber,
                    showstatus: st_value,
                    sl_users: user_val

                };

                if ($("#client_id").val() > 0) {
                    var rdata = {
                        ajax: 1,
                        ajax_section: "dash_prop_invent",
                        ajax_action: ajax_action,
                        client_id: $("#client_id").val(),
                        data_div: "#data_client"

                    };
                }

                var c = $.ajax({
                    data: rdata,
                    async: false
                }).responseText;
                $(data_div).html(c);
                var total = parseInt($("#newtotal_" + a).html());
                $("#total_" + a).html(total);
            }
        }
        $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + txt + "</td></tr></table>");
        setTimeout('cClick();', 5000);
    });
});

imzee_live(".olx_deleted_listing",
    "mouseover",
    function() {
        var selector = $(this).data('selector');
        this_obtitle = 'Deleted Listing';
        over_txt = "You have deleted this listing for OLX";
        return overlib(over_txt, CAPTION, this_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    });

imzee_live(".list-view-post-add",
    "click",
    function(event) {
        var selector = $(this).data('selector');
        var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=send_listing_olx&selector=" + selector + "&del=12";
        var div_id = $(this).parent().attr("name");

        var txt_btn = "";
        var txt = '';
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "Are you sure you want to make this listing featured<br>";
        txt += "<br><center><input type=\"button\" value=\"Yes\" class=\"ob_yes_olx\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=hidden name=selector id=selector value=" + selector + " />";
        txt += "<input type=hidden name=div_letter id=div_letter value=" + div_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";


        $("#post-ad-olx-result").html(txt);

    });

imzee_live(".olx-delete-listing",
    "mouseover",
    function() {
        var selector = $(this).data('selector');
        this_obtitle = 'Delete from OLX';
        over_txt = "<div id='post-ad-olx-result'>Click to delete your listing from OLX.<br>";
        return overlib(over_txt, CAPTION, this_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        var selector = $(this).data('selector');
        var div_id = $(this).parent().attr("name");
        var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=delete_listing&selector=" + selector + "&del=12";

        var txt_btn = "";
        var txt = '';
        this_obtitle = 'Delete from OLX';
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "Your listing will be deleted from OLX.<br>";
        txt += "<br><center><input type=\"button\" value=\"Confirm\" class=\"ob_yes_olx\" />&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=hidden name=selector id=selector value=" + selector + " />";
        txt += "<input type=hidden name=div_letter id=div_letter value=" + div_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 225, HEIGHT, 60, EXCLUSIVE);
        /*$("#post-ad-olx-result").html(txt);*/

    });

imzee_live(".post-ad-olx",
    "mouseover",
    function() {
        var selector = $(this).data('selector');
        this_obtitle = 'Post on OLX';
        over_txt = "<div id='post-ad-olx-result'>Click to get your property twice the attention and leads.<br>";
        return overlib(over_txt, CAPTION, this_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        var selector = $(this).data('selector');
        var div_id = $(this).parent().attr("name");
        var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=send_listing_olx&selector=" + selector + "&del=12";

        var txt_btn = "";
        var txt = '';
        this_obtitle = 'Post on OLX';
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "Your listing will be posted on OLX.<br>";
        txt += "<br><center><input type=\"button\" value=\"Confirm\" class=\"ob_yes_olx\" />&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=hidden name=selector id=selector value=" + selector + " />";
        txt += "<input type=hidden name=div_letter id=div_letter value=" + div_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 225, HEIGHT, 60, EXCLUSIVE);

    });

imzee_live(".show-listing-status",
    "mouseover",
    function() {
        var status = $(this).data('status');
        if (status != '' && status != 'undefined') {
            this_obtitle = 'Status';
            over_txt = status;
            return overlib(over_txt, CAPTION, this_obtitle);
        }
    },
    "mouseout",
    function() {
        return nd();
    }
);
imzee_live(".post-platform-ad",
    "mouseover",
    function() {
        var selector = $(this).data('selector');
        var for_platform = $(this).data('platform');
        if (for_platform != '' && for_platform != 'undefined') {
            this_obtitle = 'Post on ' + for_platform;
            over_txt = "<div id='post-ad-olx-result'>Click to get your property twice the attention and leads.<br>";
            return overlib(over_txt, CAPTION, this_obtitle);
        }
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        var selector = $(this).data('selector');
        var div_id = $(this).parent().attr("name");
        var for_platform = $(this).data('platform');
        var purpose = $(this).data('purpose');
        var type = $(this).data('type');
        var loc_selector = $(this).data('location');
        var userid = $(this).data('userid');

        if (for_platform != '' && for_platform != 'undefined') {
            var rsp_msg = '';
            if (for_platform.toLowerCase() == 'zameen' || (for_platform.toLowerCase() == 'olx' && is_new_olx_system)) {
                var data = {
                    purpose: purpose,
                    userid: userid,
                    type: type,
                    loc_selector: loc_selector,
                    platform: for_platform.toLowerCase()

                };
                post_request_url = this_domain_mybayut + "/includes/add_edit_property_single.php?ajax=1&id=" + selector;
                $.post(post_request_url + "&check_premium_quota_for_status_and_grid_page=1", data, function(str) {
                    var rsp_msg = '';
                    str = JSON.parse(str.trim());
                    if (str['return_msg'] != "false") {
                        var quantity = str['quantity'];
                        var extra_quantity = quantity - 1;
                        extra_quantity = extra_quantity.toFixed(2);
                        rsp_msg = "You are posting a listing in a premium location an overall " + extra_quantity + " extra quota will be deducted. Do you wish to continue?";
                    }
                    if (str['error'] == "true") {
                        var txt = str['error_msg'];
                        this_obtitle = "Something went wrong!"
                        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 225, HEIGHT, 60, EXCLUSIVE);
                    }

                    var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=send_listing_" + for_platform.toLowerCase() + "&selector=" + selector;

                    if (rsp_msg == '')
                        rsp_msg = "Your listing will be posted on " + for_platform;
                    var txt_btn = "";
                    var txt = '';
                    this_obtitle = 'Post on ' + for_platform;
                    txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
                    txt += "<table width=\"100%\" align=\"center\"><tr><td>";
                    txt += rsp_msg + ".<br>";
                    txt += "<br><center><input type=\"button\" value=\"Confirm\" class=\"ob_yes_olx\" />&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
                    txt += "<input type=hidden name=selector id=selector value=" + selector + " />";
                    txt += "<input type=hidden name=div_letter id=div_letter value=" + div_id + " />";
                    txt += "</td></tr></table>";
                    txt += "</form>";

                    return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 225, HEIGHT, 60, EXCLUSIVE);

                });
            } else {
                var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=send_listing_" + for_platform.toLowerCase() + "&selector=" + selector;


                rsp_msg = "Your listing will be posted on " + for_platform;
                var txt_btn = "";
                var txt = '';
                this_obtitle = 'Post on ' + for_platform;
                txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
                txt += "<table width=\"100%\" align=\"center\"><tr><td>";
                txt += rsp_msg + ".<br>";
                txt += "<br><center><input type=\"button\" value=\"Confirm\" class=\"ob_yes_olx\" />&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
                txt += "<input type=hidden name=selector id=selector value=" + selector + " />";
                txt += "<input type=hidden name=div_letter id=div_letter value=" + div_id + " />";
                txt += "</td></tr></table>";
                txt += "</form>";

                return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 225, HEIGHT, 60, EXCLUSIVE);
            }
        }

    });

imzee_live(".olx-disable",
    "click",
    function() {
        var selector = $(this).data('selector');
        var div_id = $(this).parent().attr("name");

        var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=disable_listing&selector=" + selector + "&del=12";

        this_obtitle = 'Disable OLX Listing';
        var txt = '';
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "Your listing will be disabled.<br>";
        txt += "<br><center><input type=\"button\" value=\"Confirm\" class=\"ob_yes_olx\" />&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=hidden name=selector id=selector value=" + selector + " />";
        txt += "<input type=hidden name=div_letter id=div_letter value=" + div_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";
        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 220, HEIGHT, 60, EXCLUSIVE);
    });

imzee_live(".olx-enable",
    "click",
    function() {
        var selector = $(this).data('selector');
        var div_id = $(this).parent().attr("name");
        var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=enable_listing&selector=" + selector + "&del=12";
        this_obtitle = 'Enable OLX Listing';
        var txt = '';
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "Your listing will be enabled.<br>";
        txt += "<br><center><input type=\"button\" value=\"Confirm\" class=\"ob_yes_olx\" />&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=hidden name=selector id=selector value=" + selector + " />";
        txt += "<input type=hidden name=div_letter id=div_letter value=" + div_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 220, HEIGHT, 60, EXCLUSIVE);
    });
imzee_live(".olx-repost",
    "click",
    function() {
        var selector = $(this).data('selector');
        var div_id = $(this).parent().attr("name");
        var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=repost_listing&selector=" + selector + "&del=12";
        this_obtitle = 'Repost on OLX';
        var txt = '';
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        txt += "Your listing will be reposted.<br>";
        txt += "<br><center><input type=\"button\" value=\"Confirm\" class=\"ob_yes_olx\" />&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=hidden name=selector id=selector value=" + selector + " />";
        txt += "<input type=hidden name=div_letter id=div_letter value=" + div_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 220, HEIGHT, 60, EXCLUSIVE);
    });

imzee_live(".featured-icon-active",
    "mouseover",
    function() {
        var val = $(this).data('val');

        if (val == 1) {
            var days = $(this).data('olx-fd');
            var hrs = $(this).data('olx-fh');

            this_obtitle = "<span class='featured-tooltip-head'>Featured Property</span>";
            over_txt = "This listing is already featured";

            if (days > 0 || hrs > 0) {
                over_txt = "Expiring in ";
                if (days > 0)
                    over_txt += "<b>" + days + " day(s)</b>";
                if (hrs > 0)
                    over_txt += " and <b>" + hrs + " hr(s)</b>";
            }
            return overlib(over_txt, CAPTION, this_obtitle);
        }
    },
    "mouseout",
    function() {
        return nd();
    });

imzee_live(".olx-featured",
    "mouseover",
    function() {
        this_obtitle = "<span class='featured-tooltip-head'>Feature your property</span>";
        over_txt = "Get your property featured on OLX";
        return overlib(over_txt, CAPTION, this_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        var selector = $(this).data('selector');
        var div_id = $(this).parent().attr("name");

        var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=olx_set_feature&selector=" + selector + "&del=12";

        var txt_btn = "";
        var txt = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        if ($('#is_new_olx_system').val()) {
            var deduction_for = "olx_feature";
            var rdata = {
                ajax: 1,
                ajax_section: "dash_prop_invent",
                ajax_action: "save_delete_property_list_popup_html",
                selector: selector,
                del: 18,
                txtcom: deduction_for
            }
            quantity_to_be_deducted_str = $.ajax({
                data: rdata,
                async: false
            }).responseText;

            str_arr = quantity_to_be_deducted_str.split("|");
            str = str_arr[0];

            // If msg zone factor returns 200 n zone factor applies is confirmed
            if (str_arr[1] == "200" && str_arr[2] == 1) {
                txt += str + "<br /><br />";
            }
        }
        this_obtitle = "<span class='featured-tooltip-head'>Make OLX listing featured</span>";
        txt += "Your listing will be featured on top of the search results page on OLX.<br>";
        txt += "<br><center><input type=\"button\" value=\"Confirm\" class=\"ob_yes_olx\" />&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=hidden name=selector id=selector value=" + selector + " />";
        txt += "<input type=hidden name=div_letter id=div_letter value=" + div_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 300, HEIGHT, 90, EXCLUSIVE);
    });

imzee_live(".olx-boost",
    "mouseover",
    function() {
        this_title = $(this).attr("name");
        var days = $(this).data('olx-bd');
        var hrs = $(this).data('olx-bh');
        var minutes = $(this).data('olx-bm');
        this_obtitle = "<span class='boost-tooltip-head'>Boost Your Property</span>";

        var val = $(this).data('val');

        if (val == 1) {

            over_txt = "This listing is already Boosted";

            if (days > 0 || hrs > 0) {
                over_txt = "You last applied Boost ";
                if (days > 0)
                    over_txt += "<b>" + days + " day(s)</b>";
                if (hrs > 0) {
                    if (days > 0)
                        over_txt += " and ";
                    over_txt += "<b>" + hrs + " hr(s)</b>";
                }

                over_txt += ' ago';
            } else if (days == 0 && hrs == 0) {
                if (minutes > 0) {
                    over_txt = "You last applied Boost ";
                    over_txt += "<b>" + minutes + " minute(s)</b>";
                    over_txt += ' ago';
                } else {
                    over_txt = "You last applied Boost less than a minute ago";
                }

            }
            return overlib(over_txt, CAPTION, this_obtitle);
        } else {
            over_txt = "Click to boost this property.";
        }
        return overlib(over_txt, CAPTION, this_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        var selector = $(this).data('selector');
        var div_id = $(this).parent().attr("name");

        var action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=common_platform_ajax_controller&sub_action=olx_boost_to_top&selector=" + selector + "&del=12";

        var txt_btn = "";
        var txt = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";
        if ($('#is_new_olx_system').val()) {
            var deduction_for = "olx_refresh_listing";
            var rdata = {
                ajax: 1,
                ajax_section: "dash_prop_invent",
                ajax_action: "save_delete_property_list_popup_html",
                selector: selector,
                del: 18,
                txtcom: deduction_for
            }
            quantity_to_be_deducted_str = $.ajax({
                data: rdata,
                async: false
            }).responseText;

            str_arr = quantity_to_be_deducted_str.split("|");
            str = str_arr[0];

            // If msg zone factor returns 200 n zone factor applies is confirmed
            if (str_arr[1] == "200" && str_arr[2] == 1) {
                txt += str + "<br /><br />";
            }
        }
        this_obtitle = "<span class='boost-tooltip-head'>Boost to top</span>";
        txt += "Are you sure you want to boost this listing.<br>";
        txt += "<br><center><input type=\"button\" value=\"Yes\" class=\"ob_yes_olx\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
        txt += "<input type=hidden name=selector id=selector value=" + selector + " />";
        txt += "<input type=hidden name=div_letter id=div_letter value=" + div_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 300, HEIGHT, 90, EXCLUSIVE);
    });

imzee_live(".superhot",
    "mouseover",
    function() {
        this_title = $(this).attr("name");
        var days = $(this).data('days');
        var hrs = $(this).data('hrs');

        if (this_title == "A") {
            this_obtitle = 'Basic Listing';
            over_txt = "<span class='shot-tooltip-head'>Click to make it a basic listing</span>";
            if (days > 0 || hrs > 0) {
                this_obtitle = 'Superhot Property';
                over_txt = "Expiring in ";
                if (days > 0)
                    over_txt += "<b>" + days + " day(s) </b>";
                if (hrs > 0)
                    over_txt += "<b>" + hrs + " hr(s)</b>";
            }
        } else {
            this_obtitle = "<span class='shot-tooltip-head'>Make this listing Super Hot.</span>";
            over_txt = "Click to make this a Super Hot listing.";
        }
        return overlib(over_txt, CAPTION, this_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {

        if ($("#overDiv").length > 0) {
            cClick();
            // $("#overDiv").css('display', 'none');	
        }

        admin_action = $(this).attr("rel"); //for admin asking

        this_title = $(this).attr("name");
        this_obtitle = "<span class='shot-tooltip-head'>Make this listing Super Hot.</span>";
        if (this_title == "A")
            this_obtitle = "<span class='shot-tooltip-head'>Basic Listing</span>";
        else
            this_obtitle = "<span class='shot-tooltip-head'>Make this listing Super Hot.</span>";
        div_id = $(this).parent().attr("name");
        this_id = $(this).attr("id");
        this_id = this_id.replace("super_h_", "");
        //action_url =  listing_update + "?selector="+this_id+"&del=12";
        action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=12";
        status_val = $("#h_firmstate").val();
        purpose = parseInt($(this).attr("name"));
        this_title = $(this).attr("name");
        /* -- edited by faran date: 2013-12-31 */
        this_status = $(this).siblings('.db_status').find('img').attr('name');
        /* -- edited by faran date: 2013-12-31 (END) */


        var txt = "";
        var txt_btn = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";

        var check = "";
        var str = "";
        var str_arr = "";
        // var quota_from="";
        var deduction_for = "shot_listing";

        if (this_title != "A" && admin_action != 'transfer_quota') {
            // if(admin_action == 'only_user')
            // 	quota_from = 'user';
            // else if(admin_action == 'only_admin')
            // 	quota_from = 'admin';
            var rdata = {
                ajax: 1,
                ajax_section: "dash_prop_invent",
                ajax_action: "save_delete_property_list_popup_html",
                selector: this_id,
                del: 15,
                txtcom: deduction_for
                // quota_from:quota_from
            }
            quantity_to_be_deducted_str = $.ajax({
                data: rdata,
                async: false
            }).responseText;
            str_arr = quantity_to_be_deducted_str.split("|");
            str = str_arr[0];

            if (str_arr[1] == "200") {
                check = "1";
                // txt_btn = "<input type='hidden' name='quota_from' value='"+quota_from+"' /><center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
                txt_btn = "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
                $(".frm_del").append(txt_btn);
            } else if (str_arr[1] == "204") {
                check = "0";

                // Already handled in php
                // Handling duplication of msgs if credit less && not agency owner
                if (this_title != "") {
                    txt += "Sorry, you do not have any Super Hot listing credits available. <br /><br />Please click <a href=\"" + this_domain + "/profolio/index.php?tabs=13&section=advertise&product=" + system_products_list[deduction_for] + "\" class=\"green_text\" target=\"_blank\"> here </a>to purchase Super Hot listing credits.<br><br>";
                    txt += "<center><input type=\"button\" value=\"close\" onclick=\"return cClick();\" /></center>";
                }
            } else {
                check = "0";
                txt += "Something went wrong, please try again later.<br><br>";
                txt += "<center><input type=\"button\" value=\"close\" onclick=\"return cClick();\" /></center>"
            }
        }

        var txt_msg = "";

        if (typeof this_title === "undefined" || this_title == "") {

            txt_msg = "Sorry, you do not have any Super Hot listing credits available. <br /><br />Please click <a href=\"" + this_domain + "/profolio/index.php?tabs=13&section=advertise&product=" + system_products_list[deduction_for] + "\" class=\"green_text\" target=\"_blank\"> here </a>to purchase Super Hot listing credits.";
            txt_btn = "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
            this_obtitle = "<span class='shot-tooltip-head'>Make this listing Super Hot.</span>";
        } else {
            //txt_btn = "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
            if (this_title == "A") {
                txt_msg = "Super Hot listing cannot be converted into a basic listing.<br /><br />";
                txt = "";
                txt += "<table width=\"100%\" align=\"center\"><tr><td>";
                txt += txt_msg;
                txt += "</td></tr></table>";
                return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 300, HEIGHT, 40, EXCLUSIVE);
                var flag = "D";
            } else {
                if (str_arr[2] == "0")
                    txt_msg = "Are you sure you want to turn this listing into a Super Hot listing? Once you make this listing Super Hot, 1 credit will be deducted from your Super Hot listing credits.<br /><br />";

                var flag = "A";
            }
        }

        if (admin_action == "") {
            txt += txt_msg;
        }

        // If msg zone factor returns 200 n zone factor applies is confirmed and not transfre quota case
        if (str_arr[1] == "200" && str_arr[2] == 1 && admin_action != 'transfer_quota') {
            txt += str + "<br /><br />";
        }

        if (check == "1") {
            if (admin_action != "") {
                switch (admin_action) {
                    case 'ask_admin':
                        if (str_arr[2] == "0") {
                            txt += "Are you sure you want to turn this listing into a Super Hot Property?";
                            txt += " Once you turn this property Super hot, 1 credit will be deducted from Super hot listing credits.<br /><br />";
                        }
                        txt += "<b>Deduct Credit From</b><br/>";
                        txt += "<input type='radio' checked name='quota_from' value='admin' /> My Self";
                        txt += "&ensp;&ensp;&ensp;<input type='radio' name='quota_from' value='user' /> User (" + $(this).attr("user") + ")";
                        break;
                    case 'only_user':
                        if (str_arr[2] == "0") {
                            txt += "Are you sure you want to turn this listing into a Super Hot Property?";
                            txt += " Once you turn this property Super hot, 1 credit will be deducted from <b>" + $(this).attr("user") + "</b> Super hot listing credits.<br /><br />";
                        }
                        //txt += "Credit will be deducted from <b>"+$(this).attr("user")+"</b><br/>";
                        txt += "<input type='hidden' name='quota_from' value='user' />";
                        break;
                    case 'only_admin':
                        if (str_arr[2] == "0") {
                            txt += "Are you sure you want to turn this listing into a Super Hot Property?";
                            txt += " Once you turn this property super hot, 1 credit will be deducted from your super hot listing credits.<br /><br />";
                        }
                        //txt += "Credit will be deducted from <b>Admin</b>";
                        //txt_msg += "<b>1 unit will be deducted from your hot listings quota</b>";
                        //txt += txt_msg;
                        break;
                        // case 'transfer_quota':
                        // 	txt_msg = "You "+(($(this).attr("user") != "")?' and '+$(this).attr("user"):'')+" do not have super hot listings credit available. Please either take the required super hot credits back from the following agency users or purchase more to mark your properties as super hot listings"
                        // 	txt_msg += I("superhotquota_msg_admin_only").innerHTML;
                        // 	txt_btn = "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
                        // 	txt += txt_msg;
                        // break;
                }
            }
            // txt += txt_btn;
        }

        if (admin_action != 'transfer_quota')
            txt += txt_btn;
        // transfer quota case 
        else {
            txt_msg = "You " + (($(this).attr("user") != "") ? ' and ' + $(this).attr("user") : '') + " do not have super hot listings credit available. Please either take the required super hot credits back from the following agency users or purchase more to mark your properties as super hot listings";
            txt_msg += I("superhotquota_msg_admin_only").innerHTML;
            txt += txt_msg;
            txt += "<center><input type=\"button\" value=\"Close\" onclick=\"return cClick();\" /></center>";
        }

        /* -- edited by faran date: 2013-12-31 */
        if (this_status == "edited") {
            txt += "<input type=\"hidden\" id=\"flag\" name=\"update_flag_in_edit\" value=\"true\" />";
        }
        /* -- edited by faran date: 2013-12-31 (END) */
        txt += "<input type=\"hidden\" id=\"flag\" name=\"flag\" value=\"" + flag + "\" />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";
        //cap_title = 'Delete Listing';

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 300, HEIGHT, 120, EXCLUSIVE);
    }
);

/* -- Upgrade a downgraded listing  */
imzee_live(".downgraded",
    "mouseover",
    function() {
        {
            this_obtitle = "<span class='shot-tooltip-head'>Upgrade listing</span>";
            over_txt = "Click to make this upgraded.";
        }
        return overlib(over_txt, CAPTION, this_obtitle);
    },
    "mouseout",
    function() {
        return nd();
    },
    "click",
    function(event) {
        if ($("#overDiv").length > 0) {
            cClick();
        }

        this_obtitle = "<span class='shot-tooltip-head'>Upgrade listing</span>";
        div_id = $(this).parent().attr("name");
        this_id = $(this).attr("id");
        this_id = this_id.replace("downgraded_", "");

        action_url = "index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=20";
        status_val = $("#h_firmstate").val();

        var txt = "";
        var txt_btn = "";
        txt += "<form class=\"frm_del\" method=\"post\" action=\"" + action_url + "\">";
        txt += "<table width=\"100%\" align=\"center\"><tr><td>";


        txt_btn = "<center><input type=\"button\" value=\"Yes\" class=\"ob_yes\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"return cClick();\" /></center>";
        $(".frm_del").append(txt_btn);
        var txt_msg = "";
        txt += "Are you sure you want to upgrade this listing?" + "<br /><br />";

        txt += txt_btn;

        var flag = "downgraded"
        txt += "<input type=\"hidden\" id=\"flag\" name=\"flag\" value=\"" + flag + "\" />";
        txt += "<input type=\"hidden\" id=\"div_letter\" value=\"" + div_id + "\" />";
        txt += "<input type=hidden name=selector id=selector value=" + this_id + " />";
        txt += "</td></tr></table>";
        txt += "</form>";

        return overlib(txt, STICKY, CLOSECLICK, CAPTION, this_obtitle, OFFSETY, -20, WIDTH, 300, HEIGHT, 70, EXCLUSIVE);
    }
);


/***************Super hot code end (uzair)***************************/
/**********Code related to Jeffi job added by uzair 2/2/2016**************/
imzee_live(".a_jeff_generate", "click", function(event) {

    listing_id = $(this).attr("name");
    listing_id = listing_id.replace("jeff_", "");
    this_id = listing_id;
    image_flag = 0;
    video_flag = 0;

    if ($('#image_' + listing_id).is(":checked")) {
        image_flag = 1;
    }
    if ($('#video_' + listing_id).is(":checked")) {
        video_flag = 1;
    }

    jdate = $("input[name=date_added_jeffi]").val();
    if (jdate.length > 0) {
        //action_url =  listing_update + "?selector="+this_id+"&del=13";
        action_url = "?ajax=1&ajax_section=dash_prop_invent&ajax_action=save_delete_property_list_popup_html&selector=" + this_id + "&del=13";

        $.post(action_url, {
            selector: this_id,
            image: image_flag,
            video: video_flag,
            date: jdate
        }, function(data) {

            // console.log(data);
            property_hot_msg = "Listing  successfully upgraded to Super Hot Listing";
            $(".frm_del").html("<table width=\"100%\"><tr><td width=\"100%\" align=\"left\" valign=\"top\">" + property_hot_msg + "</td></tr></table>");
            setTimeout('cClick();', 3000);
        });

    } else {
        setTimeout('cClick();', 3000);
    }
});
// Listing Scoring Functions
imzee_live(".non-plot-listings-health",
    "mouseover",
    function() {
        this_obtitle = 'Listing Health.';
        var age_color = $(this).attr('age-color-msg');
        var unique_image = $(this).attr('unique-images-color-msg');
        var features = $(this).attr('feature-color-msg');
        age_color = age_color.split('-');
        unique_image = unique_image.split('-');
        features = features.split('-');
        over_txt = "<div style=float:left;width:100%;margin-top:0px;border-bottom:2px;border-bottom:solid;margin-bottom:5px;>" +
            "<div style=float:left;width:30%;margin-top:0px;><div style=float:left;width:100%;margin-right:10px;>    " +
            "<span style=width:35%;><b><u>Freshness Score Guide</u></b></span><p style=display:block;width:100%;margin-bottom:0px;float:left;>" +
            "<span style=display:block;float:left>0 - 15 Days</span><span style=display:block;height:15px;width:10%;background-color:green;color:white;float:right;></span>" +
            "</p><p style=display:block;width:100%;margin-bottom:0px;float:left;><span style=display:block;float:left>16 - 30 Days</span>" +
            "<span style=display:block;height:15px;width:10%;background-color:yellow;color:white;float:right;></span></p>" +
            " <p style=display:block;width:100%;margin-bottom:5px;float:left;><span style=display:block;float:left>30+ Days</span>" +
            "<span style=display:block;height:15px;width:10%;background-color:red;color:white;float:right;></span></p> </div></div>" +
            "<div style=float:left;width:60%;margin-top:0px;margin-left:35px;><div style=float:left;width:100%;margin-right:10px;>" +
            "<span style=width:35%;font-weight:bold;>Age: " + age_color[0] + " Day(s)</span>" +
            " <p style=display:block;width:100%;margin-top:10px;float:left;><span style=display:block;float:left;font-size:15px;>Current Score</span>" +
            "<span style=display:block;height:20px;width:30%;background-color:" + age_color[1] + ";color:white;float:right;></span></p>       " +
            "<p style=display:block;width:100%;margin-top:10px;float:left;><span style=display:block;float:left>" + age_color[2] + "</span></p> </div></div></div>" +
            "<div style=float:left;width:100%;margin-top:0px;border-bottom:2px;border-bottom:solid;margin-bottom:5px;>" +
            "<div style=float:left;width:30%;margin-top:0px;><div style=float:left;width:100%;margin-right:10px;> " +
            "<span style=width:35%;><b><u>Unique Images Score Guide*</u></b></span> <p style=display:block;width:100%;margin-bottom:0px;float:left;>" +
            "<span style=display:block;float:left>No Image</span><span style=display:block;height:15px;width:10%;background-color:red;color:white;float:right;></span></p> " +
            "<p style=display:block;width:100%;margin-bottom:0px;float:left;><span style=display:block;float:left>Insufficient Images</span>" +
            "<span style=display:block;height:15px;width:10%;background-color:yellow;color:white;float:right;></span></p>" +
            "<p style=display:block;width:100%;margin-bottom:5px;float:left;><span style=display:block;float:left>Sufficient Images</span>" +
            "<span style=display:block;height:15px;width:10%;background-color:green;color:white;float:right;></span></p></div></div>" +
            "<div style=float:left;width:60%;margin-top:0px;margin-left:35px;><div style=float:left;width:100%;margin-right:10px;>" +
            "<span style=width:35%;font-weight:bold;>Unique Images: " + unique_image[0] + "</span>" +
            "<p style=display:block;width:100%;margin-top:10px;float:left;>" +
            "<span style=display:block;float:left;font-size:15px;>Current Score</span>" +
            "<span style=display:block;height:20px;width:30%;background-color:" + unique_image[1] + ";color:white;float:right;></span></p>" +
            "<p style=display:block;width:100%;margin-top:10px;float:left;><span style=display:block;float:left>" + unique_image[2] + "</span></p>" +
            "</div></div></div><div style=float:left;width:100%;margin-top:0px;margin-bottom:5px;><div style=float:left;width:30%;margin-top:0px;>" +
            "<div style=float:left;width:100%;margin-right:10px;><span style=width:35%;><b><u>Features Score Guide</u></b></span>" +
            "<p style=display:block;width:100%;margin-bottom:0px;float:left;><span style=display:block;float:left>No Feature</span>" +
            "<span style=display:block;height:15px;width:10%;background-color:red;color:white;float:right;></span></p> " +
            "<p style=display:block;width:100%;margin-bottom:0px;float:left;><span style=display:block;float:left>1 or More</span>" +
            "<span style=display:block;height:15px;width:10%;background-color:green;color:white;float:right;></span></p> </div></div>" +
            "<div style=float:left;width:60%;margin-top:0px;margin-left:35px;><div style=float:left;width:100%;margin-right:10px;>" +
            "<span style=width:35%;font-weight:bold;>Features Selected: " + features[0] + "</span>" +
            "<p style=display:block;width:100%;margin-top:10px;float:left;><span style=display:block;float:left;font-size:15px;>Current Score</span>" +
            "<span style=display:block;height:20px;width:30%;background-color:" + features[1] + ";color:white;float:right;></span></p>" +
            "<p style=display:block;width:100%;margin-top:-5px;float:left;><span style=display:block;float:left>" + features[2] + "</span></p>" +
            "</div></div>" +
            "</div><div style=float:left;width:100%;margin-top:0px;margin-left:0px;><div style=float:left;width:100%;margin-right:0px;><p> *Any Property image which has not been uploaded on Zameen.com before is considered as a unique image. </p></div></div>";
        return overlib(over_txt, CAPTION, this_obtitle, WIDTH, 400, HEIGHT, 150, OFFSETX, 20, OFFSETY, -150);
    },
    "mouseout",
    function() {
        return nd();
    }
);
imzee_live(".plot-listings-health",
    "mouseover",
    function() {
        this_obtitle = 'Listing Health.';
        var age_color = $(this).attr('age-color-msg');
        var unique_image = $(this).attr('unique-images-color-msg');
        var features = $(this).attr('feature-color-msg');
        age_color = age_color.split('-');
        unique_image = unique_image.split('-');
        features = features.split('-');
        over_txt = "<div style=float:left;width:100%;margin-top:0px;border-bottom:2px;border-bottom:solid;margin-bottom:5px;>" +
            "<div style=float:left;width:25%;margin-top:0px;><div style=float:left;width:100%;margin-right:10px;>    " +
            "<span style=width:35%;><b><u>Freshness Score Guide</u></b></span><p style=display:block;width:100%;margin-bottom:0px;float:left;>" +
            "<span style=display:block;float:left>0 - 6 Days</span><span style=display:block;height:15px;width:10%;background-color:green;color:white;float:right;>" +
            "</span></p><p style=display:block;width:100%;margin-bottom:0px;float:left;><span style=display:block;float:left>7 - 13 Days</span>" +
            "<span style=display:block;height:15px;width:10%;background-color:yellow;color:white;float:right;></span></p> " +
            "<p style=display:block;width:100%;margin-bottom:5px;float:left;><span style=display:block;float:left>13+ Days</span>" +
            "<span style=display:block;height:15px;width:10%;background-color:red;color:white;float:right;></span></p> </div></div>" +
            "<div style=float:left;width:60%;margin-top:0px;margin-left:35px;><div style=float:left;width:100%;margin-right:10px;>" +
            "<span style=width:35%;font-weight:bold;>Age: " + age_color[0] + " Day(s)</span> " +
            "<p style=display:block;width:100%;margin-top:10px;float:left;><span style=display:block;float:left;font-size:15px;>Current Score</span>" +
            "<span style=display:block;height:20px;width:30%;background-color:" + age_color[1] + ";color:white;float:right;></span></p>      " +
            " <p style=display:block;width:100%;margin-top:10px;float:left;><span style=display:block;float:left>" + age_color[2] + "</span></p>" +
            " </div></div></div><div style=float:left;width:100%;margin-top:0px;margin-bottom:5px;><div style=float:left;width:20%;margin-top:0px;></div>" +
            "<div style=float:left;width:100%;margin-top:0px;margin-left:0px;><div style=float:left;width:100%;margin-right:10px;>" +
            "<p style=display:block;width:100%;margin-top:10px;float:left;>" +
            "<span style=display:block;>Images or features do not boost the ranking of plot-type listings but they play a vital role in increasing the potential leads by making the particular listing more descriptive.</span></p></div></div></div>" +
            "<div style=float:left;width:100%;margin-top:0px;margin-bottom:5px;><div style=float:left;width:20%;margin-top:0px;></div></div>";
        return overlib(over_txt, CAPTION, this_obtitle, WIDTH, 400, HEIGHT, 150, OFFSETX, 20, OFFSETY, -100);
    },
    "mouseout",
    function() {
        return nd();
    }
);
$(document).ready(function() {
    $('.btn-auto-dismiss').click(function() {
        var rdata = {
            ajax: 1,
            ajax_section: "dash_prop_invent",
            ajax_action: "hide_auto_utl_guide",
        }
        hide_guide = $.ajax({
            data: rdata,
            async: false
        }).responseText;
        if (hide_guide) {
            $('.auto-try-utilization').slideUp(150);
        }
    });
});
/*************End of Code****************/