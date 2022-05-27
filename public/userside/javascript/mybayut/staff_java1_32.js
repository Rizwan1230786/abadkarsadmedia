var load_image = "<center><img src='" + this_domain + "/images/common/loading_circle.gif' /></center>";
var this_section = querySt("section");
var page_record = 20;
$(document).ready(function() {

    var selected = $("#country").val();
    if (selected == 155) {
        $("#city_div").show();
    } else {
        $("#city_div").hide();
    }
    $("#country").change(function() {
        //var selected = $("input[type='radio']:checked");
        var selected = $("#country").val();
        if (selected == 155) {
            $("#city_div").show();
        } else {
            $("#city_div").hide();
        }
    });

    //$("#frm_add_support").css("display","none");
    $("#frm_add_support").css("display", "none");
    $("#select_team_div").hide();

    $(".team_check").change(function() {
        //var selected = $("input[type='radio']:checked");
        var selected = $('input[name=team_check]:checked').val();
        if (selected == "existing_team") {
            $("#select_team_div").show();
        } else {
            $("#select_team_div").hide();
        }
    });

    $("#frm_add_support").hide();

    $('#first').live('click', function(e) {
        $("#second").removeClass('active');
        $(this).addClass('active');
        $("#tab1_").show();
        $("#frm_add_support").hide();
        $("#msg_div").hide();
        $("#frm_addtoteam").show();
    });

    $('#second').live('click', function(e) {
        $("#first").removeClass('active');
        $(this).addClass('active');
        $("#tab2_").show();
        $("#frm_addtoteam").hide();
        $("#msg_div").hide();
        $("#frm_add_support").show();
    });
    if (I("data_div") == null)
        return false;

    I("data_div").innerHTML = load_image;
    //var url = this_domain_mybayut+"/includes/";
    //var url = this_domain_mybayut;
    var rdata = {
        ajax: 1
    };
    if (this_section == "agedit_user") {
        //url += "agedit_user/sub_agusers.php";
        rdata.ajax_section = "agency_staff";
        rdata.ajax_action = "get_all_staff_html";
    } else if (this_section == "ag_manageteam") {
        //url += "ag_manageteam/sub_agteam.php";
        rdata.ajax_section = "agency_staff";
        rdata.ajax_action = "get_manage_team_user_html";
    } else if (this_section == "manage_quota") {
        //url += "manage_quota/sub_managequota.php";
        rdata.ajax_section = "agency_staff";
        rdata.ajax_action = "get_subquota_user_html";
    } else if (this_section == "ag_inviteuser") {
        //url += "ag_inviteuser/sub_inviteduser.php";
        rdata.ajax_section = "agency_staff";
        rdata.ajax_action = "get_invited_user_html";
    }
    var str = $.ajax({
        data: rdata,
        async: false
    }).responseText;
    I("data_div").innerHTML = str;
    var totalresults = parseInt(I("agtotal").innerHTML);
    var paginate = jajax_paginate(totalresults, page_record, 1, 10);
    $(".paginate").html(paginate);
});

function show_teamob(ag_id, userid) {
    //var url = this_domain_mybayut+"/includes/agedit_user/addtoteam.php?ajax=1&ajax_section=agency_staff&ajax_action=add_edit_team_html&agent_id="+ag_id+"&userid="+userid;
    //var url = this_domain_mybayut;
    var rdata = {
        ajax: 1,
        ajax_section: 'agency_staff',
        ajax_action: 'add_edit_team_html',
        agent_id: ag_id,
        userid: userid
    };
    var str = $.ajax({
        data: rdata,
        async: false
    }).responseText;
    return overlib(str, STICKY, CAPTION, "Add Team Users", CLOSECLICK, WIDTH, 230, HEIGHT, 100, OFFSETX, -20, OFFSETY, -50);
}

function sb_teamod_form(userid) {
    $('#frm_add_edit_team').ajaxSubmit(function(str) {
        $("#msg_div").html(str);
        var rdata = {
            ajax: 1,
            ajax_section: 'agency_staff',
            ajax_action: 'save_edit_team_html_show',
            userid: userid
        };

        //var url = this_domain_mybayut+"/includes/agedit_user/sub_agusers.php?userid="+userid;
        //var url = this_domain_mybayut;
        var str = $.ajax({
            data: rdata,
            async: false
        }).responseText;

        $("#divag_" + userid).html(str);
        setTimeout("cClick()", 2000);
    });
}

$(".paginate span a").livequery("click", function(event) {
    I("data_div").innerHTML = load_image;
    var url = this_domain_mybayut + "/includes/";
    if (this_section == "agedit_user")
        url += "agedit_user/sub_agusers.php";
    else if (this_section == "ag_manageteam")
        url += "ag_manageteam/sub_agteam.php";
    else if (this_section == "manage_quota")
        url += "manage_quota/sub_managequota.php";
    else if (this_section == "ag_inviteuser")
        url += "ag_inviteuser/sub_inviteduser.php";

    url += "?page=" + this.id;
    var str = $.ajax({
        url: url,
        async: false
    }).responseText;
    $("#data_div").html(str);
    var totalresults = parseInt($("#agtotal").html());
    var paginate = jajax_paginate(totalresults, page_record, this.id, 10);
    $(".paginate").html(paginate);
});

function sbmit_priv_form() {
    chk_team = $("#sl_agteam").val();
    chk_status = $("#sl_admin_team").val();
    if (chk_team == 0 && chk_status == "tm") {
        var ob_msg = "";
        ob_msg += "If you remove any user from a team then all team level privileges for the user will be removed as well.";
        if (I("sl_admin_team").length == 2)
            ob_msg += "<br />You do not have privileges to add users to teams.";
        ob_msg += "<br /><br /><center><input type=\"button\" name=\"btn_ok\" value=\"OK\" onclick=\"document.frm_userpriv.submit();\" />&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"cClick();\" /></center>";
        return overlib(ob_msg, STICKY, CLOSECLICK, CAPTION, "Submit Privileges");
    } else {
        document.frm_userpriv.submit();
    }
} ////End of Function

function disable_team_combo(el) {
    if (I("sl_agteam") == null)
        return false;
    if (el.checked) {
        I('sl_agteam').disabled = true;
    } else {
        I('sl_agteam').disabled = false;
    }
}

$(".delete_team").live("click", function(event) {
    var msg = "Are you sure you want to delete this team.";
    if ($(this).hasClass("have_child")) {
        msg = "Are you sure you want to delete this team and its child teams?";
    }
    var team_id = $(this).attr("id");
    team_id = team_id.replace("del_team_", "");
    frm_action = "?ajax=1&ajax_section=agency_staff&ajax_action=get_delete_user_manage_team&team_id=" + team_id;
    $("#frm_userteam").attr({
        "action": frm_action
    });
    overlib_txt = "<div id=\"msg_div\"><form name=\"frm_userteam\" id=\"frm_userteam\" action=\"" + frm_action + "\" method=\"post\"><input type=\"hidden\" name=\"team_id\" id=\"team_id\" value=\"" + team_id + "\" /><input type=\"hidden\" name=\"del_id\" id=\"del_id\" value=\"1\" />" + msg + "<br /><br /><center><input type=\"button\" value=\"Yes\" class=\"sb_teamyes\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"cClick();\" /></center></form></div>";
    return overlib(overlib_txt, STICKY, CLOSECLICK, CAPTION, "Delete Team", OFFSETX, -50, OFFSETY, -30);
});

$(".rename_team").live("click", function(event) {
    var team_id = $(this).attr("id");
    team_id = team_id.replace("rename_", "");
    frm_action = "?ajax=1&ajax_section=agency_staff&ajax_action=get_rename_user_manage_team&rename=" + team_id;
    $("#frm_userteam").attr({
        "action": frm_action
    });
    overlib_txt = "<div id=\"msg_div\"></div><form name=\"frm_userteam\" id=\"frm_userteam\" action=\"" + frm_action + "\" method=\"post\"><input type=\"hidden\" name=\"team_id\" id=\"team_id\" value=\"" + team_id + "\" /><span style = \"margin-top:10px\">Rename:&nbsp;</span><input style = \"margin-top:10px;margin-bottom:5px;\" type=\"text\" name=\"txt_rename\" id=\"txt_rename\" maxlength=\"25\" /><br /><span style=\"font-size: 8px;font-style:italic\">Note: Only alpha-numeric characters are allowed.</span><br /><center style = \"margin-top:5px\"><input type=\"button\" value=\"Ok\" class=\"sb_teamyes rename\" />&nbsp;&nbsp;<input type=\"button\" value=\"Cancel\" onclick=\"cClick();\" /></center></form>";
    return overlib(overlib_txt, STICKY, CLOSECLICK, CAPTION, "Rename Team", WIDTH, 240, OFFSETX, -100, OFFSETY, -100);
});

$(".sb_teamyes").livequery("click", function(event) {
    if ($(".sb_teamyes").hasClass("rename")) {
        if ($.trim(I("txt_rename").value) == '') {
            overlib("Team name couldn't be empty.", STICKY, CAPTION, "Error", CLOSECLICK);
            return false;
        }
        var str = $.trim(I("txt_rename").value);
        var regx = /^[A-Za-z\d\s]+$/;
        if (!regx.test(str)) {
            overlib("Only alpha-numeric characters are allowed.", STICKY, CAPTION, "Error", CLOSECLICK);
            return false;
        }
    }
    $('#frm_userteam').ajaxSubmit(function(str) {
        if (I("del_id") != null && I("del_id").value == 1) {
            var team_id = I("team_id").value;
            var childs = $("#divteam_" + team_id).find('.row_select').size();
            $("#divteam_" + team_id).remove();
            var totalresults = parseInt(I("agtotal").innerHTML);
            totalresults = totalresults - (childs + 1);
            I("agtotal").innerHTML = totalresults;
            if (totalresults <= 0)
                I("data_div").innerHTML = "<center>No Team Found</center>";

            location.reload();
        } else {
            var rdata = {
                ajax: 1,
                ajax_section: "agency_staff",
                ajax_action: "get_manage_team_user_html",
                teamid: team_id
            };
            //var url = this_domain_mybayut+"/includes/ag_manageteam/sub_agteam.php?teamid="+team_id;
            var teamstr = $.ajax({
                data: rdata,
                async: false
            }).responseText;
            $('#data_div').html("");
            $('#data_div').html(teamstr);
            //$("#divteam_"+team_id).html(teamstr);
            //$('#data_div').html(teamstr);
        }
        $("#msg_div").html(str);
        setTimeout("cClick()", 1000);
    });
});

function getMouse(e) {
    var ev = (!e) ? window.event : e; //IE:Moz
    if (ev.pageX) { //Moz
        posx = ev.pageX + window.pageXOffset;
        posy = ev.pageY + window.pageYOffset;
    } else if (ev.clientX) { //IE
        posx = ev.clientX + document.body.scrollLeft;
        alert("IE");
        posy = ev.clientY + document.body.scrollTop;
    } else {
        return false
    }
}

function view_teamuser(team_id) {
    if (I("div_team_user") != null)
        $("#div_team_user").remove();
    var url = this_domain_mybayut + "/index.php?tabs=7&ajax=1&ajax_section=agency_staff&ajax_action=get_all_staff_html&teamid=" + team_id;

    var str = $.ajax({
        url: url,
        async: false
    }).responseText;
    var cdiv = "";
    cdiv += "<div class=\"cdiv_class\" id=\"div_team_user\" style=\"left:19%;top:190px;position:fixed;\" align=\"left\"><div class=\"this_title\"><img src=\"" + this_domain + "/images/common/cross.jpg\" border=\"0\" style=\"float:right; cursor:pointer\" onclick=\"$('.cdiv_class').remove();$('.shadow_div').remove();\" />Team Users</div><div class=\"cdiv_title\"><span style=\"width:20%;\">&nbsp;Name</span><span style=\"width:25%;\">Email</span><span style=\"width:10%;\">Team</span><span style=\"width:10%; text-align:right; padding-right:5%;\">Listings</span><span style=\"width:5%;text-align:right;padding-right:5%;\">Inquires</span><span>Controls</span></div><div id=\"thisdata_div\"></div></div>";
    $("#rightcolumn").append(cdiv);
    I("thisdata_div").innerHTML = str;


    // if(I("div_team_user") != null)
    // $("#div_team_user").remove();
    // var url = this_domain_mybayut+"/includes/agedit_user/sub_agusers.php?teamid="+team_id;
    // var str = $.ajax({url:url,async:false}).responseText;
    // var cdiv = "";
    // cdiv += "<div class=\"cdiv_class\" id=\"div_team_user\" style=\"left:19%;top:190px\" align=\"left\"><div class=\"this_title\"><img src=\""+this_domain+"/images/common/cross.jpg\" border=\"0\" style=\"float:right; cursor:pointer\" onclick=\"$('.cdiv_class').remove();$('.shadow_div').remove();\" />Team Users</div><div class=\"cdiv_title\"><span style=\"width:25%;\">&nbsp;Name</span><span style=\"width:25%;\">Email</span><span style=\"width:15%;\">Team</span><span style=\"width:10%; text-align:right; padding-right:5%;\">Listings</span><span style=\"wwidth:19.8%;\">Controls</span></div><div id=\"thisdata_div\"></div></div>";	
    // $("#rightcolumn").append(cdiv);
    // I("thisdata_div").innerHTML = str;
} ////End Of Function

function submit_addteam() {
    $('#addTeamButton').prop('disabled', true);
    var selected = $('input[name=team_check]:checked').val();
    if (selected == "new_team") {
        if ($.trim(I("team_name").value) == "") {
            overlib("Please specify team name", STICKY, CAPTION, "Error", CLOSECLICK);
            $("#addTeamButton").prop("disabled", false);
            return false;
        } else {
            var str = $.trim(I("team_name").value);
            var regx = /^[A-Za-z\d\s]+$/;
            if (!regx.test(str)) {
                overlib("Only alpha-numeric characters are allowed.", STICKY, CAPTION, "Error", CLOSECLICK);
                $("#addTeamButton").prop("disabled", false);
                return false;
            }
            $('#frm_addteam').ajaxSubmit(function(str) {
                if (str == "limited") {
                    return overlib("You are allowed to create 10 teams only.", CAPTION, "Team Creation", STICKY, CLOSECLICK);
                } else {
                    var totalresults = parseInt(I("agtotal").innerHTML);
                    if (totalresults <= 0) {
                        I("data_div").innerHTML = "";
                    }
                    $("#data_div").append(str);
                    I("team_name").value = "";
                    totalresults = totalresults + 1;
                    I("agtotal").innerHTML = totalresults;
                    I("team_create_msg").style.display = "block";
                    location.reload();
                }
            });
        }
    } else if (selected == "existing_team") {
        var existing_team = $("#select_team option:selected").val();
        if (existing_team != "") {
            if ($.trim(I("team_name").value) == "") {
                overlib("Please specify team name", STICKY, CAPTION, "Error", CLOSECLICK);
                $("#addTeamButton").prop("disabled", false);
                return false;
            } else {
                $('#frm_addteam').ajaxSubmit(function(str) {
                    if (str == "limited") {
                        return overlib("You are allowed to create 10 teams only.", CAPTION, "Team Creation", STICKY, CLOSECLICK);
                    } else {
                        var totalresults = parseInt(I("agtotal").innerHTML);
                        if (totalresults <= 0) {
                            I("data_div").innerHTML = "";
                        }
                        $("#data_div").append(str);
                        I("team_name").value = "";
                        totalresults = totalresults + 1;
                        I("agtotal").innerHTML = totalresults;
                        I("team_create_msg").style.display = "block";
                        location.reload();
                    }
                });
            }
        } else {
            overlib("Please select parent team", STICKY, CAPTION, "Error", CLOSECLICK);
            $("#addTeamButton").prop("disabled", false);
            return false;
        }
    } else {
        overlib("Please select as new team or existing team", STICKY, CAPTION, "Error", CLOSECLICK);
        $("#addTeamButton").prop("disabled", false);
        return false;
    }

} ////End Of Function

$("#sl_admin_team").change(function(event) {
    val = $(this).val();
    if (val == "ad")
        I("a_default_priv").innerHTML = "Load default admin privileges";
    else if (val == "tm")
        I("a_default_priv").innerHTML = "Load default team privileges";
    else if (val == "su")
        I("a_default_priv").innerHTML = "Load default user privileges";
});
$("#sl_admin_team").trigger("change");

function apply_defaultpriv() {
    sl_ref = I("sl_admin_team");
    sl_val = sl_ref.options[sl_ref.selectedIndex].value;
    $("#div_privileges input[type=checkbox]").removeAttr("checked");
    if (sl_val == "ad") {
        $("#div_privileges input[type=checkbox]").attr({
            checked: "checked"
        });
    } else if (sl_val == "tm") {
        $("#div_privileges input[class=team]").attr({
            checked: "checked"
        });
        $("#div_privileges input[class=all]").attr({
            checked: "checked"
        });
    } else if (sl_val == "su") {
        $("#div_privileges input[class=all]").attr({
            checked: "checked"
        });
    }
} ////End Of Function

function change_profilediv(div_name, evt) {
    // alert(div_name);
    // return false;
    if (div_name == "profile") {
        I("div_profile").style.display = "block";
        I("div_priv").style.display = "none";
        I("div_usersettings").style.display = "none";
        //I("div_projectallocation").style.display = "none";
        I("a_profile").className = "selected";
        I("a_priv").className = "";
        I("a_usersettings").className = "";
        //I("a_projectallocation").className = "";
    } else if (div_name == "priv") {
        I("div_profile").style.display = "none";
        I("div_priv").style.display = "block";
        I("div_usersettings").style.display = "none";
        //I("div_projectallocation").style.display = "none";
        I("a_profile").className = "";
        I("a_priv").className = "selected";
        I("a_usersettings").className = "";
        //I("a_projectallocation").className = "";
    } else if (div_name == "projectallocation") {
        I("div_profile").style.display = "none";
        I("div_priv").style.display = "none";
        I("div_usersettings").style.display = "none";
        I("div_projectallocation").style.display = "block";
        I("a_profile").className = "";
        I("a_priv").className = "";
        I("a_usersettings").className = "";
        I("a_projectallocation").className = "selected";
    } else {
        I("div_profile").style.display = "none";
        I("div_priv").style.display = "none";
        I("div_usersettings").style.display = "block";
        //I("div_projectallocation").style.display = "none";
        I("a_profile").className = "";
        I("a_priv").className = "";
        I("a_usersettings").className = "selected";
        I("div_profile").style.display = "none";
        I("div_priv").style.display = "none";
        I("div_usersettings").style.display = "block";
        I("a_profile").className = "";
        I("a_priv").className = "";
        I("a_usersettings").className = "selected";
        //I("a_projectallocation").className = "";
    }
} ////End Of Function

function assign_listing(userid, standard_quota, hot_quota, used_quota, mgz_quota, story_ad_quota, refresh_quota, international_quota, super_hot_quota) {
    show_story_ad = true;
    if (typeof standard_quota === "undefined")
        standard_quota = 0;
    if (typeof hot_quota === "undefined")
        hot_quota = 0;
    /*code edit by uzair*/
    if (typeof refresh_quota === "undefined")
        refresh_quota = 0;
    if (typeof international_quota === "undefined")
        international_quota = 0;
    if (typeof super_hot_quota === "undefined")
        super_hot_quota = 0;
    if (typeof story_ad_quota === "undefined") {
        story_ad_quota = 0;
    } else if (story_ad_quota == 'hide') {
        story_ad_quota = 0;
        show_story_ad = false;
    }
    var ob = "";

    var this_url = this_domain_mybayut + "/?ajax=1&ajax_section=agency_staff&ajax_action=manage_team_user_quota&userid=" + userid + "&platform=zameen";
    ob += "<div id=\"ob_quota_msg\"></div><form action=\"" + this_url + "\" method=\"post\" id=\"frm_quota\" name=\"frm_quota\"><div id=\"ob_quota_div\">";
    //ob += "<br /><strong>Total active listings of this user: "+used_quota+"</strong><br /><br />";
    ob += "<br/>";
    ob += "<label style=\"display:block; float:left; width:150px; margin-right:2px;\">Assigned Basic Quota</label><input type=\"text\" id=\"txt_assign_basic\" name=\"txt_assign_basic\" value=\"" + standard_quota + "\" /><br /><br />";
    ob += "<label style=\"display:block; float:left; width:150px; margin-right:2px;\">Assigned Super Hot Credits</label><input type=\"text\" id=\"txt_assign_super_hot\" name=\"txt_assign_super_hot\" value=\"" + super_hot_quota + "\" /><br /><br />";
    ob += "<label style=\"display:block; float:left; width:150px; margin-right:2px;\">Assigned Hot Credits</label><input type=\"text\" id=\"txt_assign_hot\" name=\"txt_assign_hot\" value=\"" + hot_quota + "\" /><br /><br />";
    /*ob += "<label style=\"display:block; float:left; width:150px; margin-right:2px;\">Assigned Magazine Credits</label><input type=\"text\" id=\"txt_assign_mgz\" name=\"txt_assign_mgz\" value=\""+mgz_quota+"\" /><br /><br />";*/
    if (show_story_ad) {
        ob += "<label style=\"display:block; float:left; width:150px; margin-right:2px;\">Story Ad Credits</label><input type=\"text\" id=\"txt_assign_story_ad\" name=\"txt_assign_story_ad\" value=\"" + story_ad_quota + "\" /><br /><br />";
    }
    ob += "<label style=\"display:block; float:left; width:150px; margin-right:2px;\">Refresh Credits</label><input type=\"text\" id=\"txt_assign_ref\" name=\"txt_assign_ref\" value=\"" + refresh_quota + "\" /><br /><br />";
    // ob += "<label style=\"display:block; float:left; width:150px; margin-right:2px;\">International Credits</label><input type=\"text\" id=\"txt_assign_inter\" name=\"txt_assign_inter\" value=\""+international_quota+"\" /><br /><br />";
    ob += "<center><input type=\"button\" id=\"btn_qok\" name=\"btn_qok\" value=\"\" onclick=\"update_user_quota(" + userid + "," + standard_quota + "," + hot_quota + "," + mgz_quota + "," + story_ad_quota + "," + refresh_quota + "," + international_quota + "," + super_hot_quota + ")\" />&nbsp;&nbsp;<input type=\"button\" id=\"btn_qcancel\"  value=\"\" onclick=\"cClick();\" /></center><br /><br />";
    ob += "</div></form>";

    return overlib(ob, CAPTION, "Assign Quota/Credit", STICKY, CLOSECLICK, WIDTH, 350, OFFSETX, -100, OFFSETY, -50);
} ////End Of Function

function update_user_quota(userid, standard_quota, hot_quota, mgz_quota, story_ad_quota, refresh_quota, international_quota, super_hot_quota) {
    I("ob_quota_msg").style.display = "block";
    var intger_pattern = /^\s*-?\d+(\.\d{1,2})?\s*$/;
    // var intger_pattern =  /^\d*$/;
    var txt_assign_basic = $("#frm_quota").find("#txt_assign_basic").val();
    var txt_assign_super_hot = $("#frm_quota").find("#txt_assign_super_hot").val();
    var txt_assign_hot = $("#frm_quota").find("#txt_assign_hot").val();
    //var txt_assign_mgz = $("#frm_quota").find("#txt_assign_mgz").val();
    var txt_assign_ref = $("#frm_quota").find("#txt_assign_ref").val();
    var txt_assign_inter = $("#frm_quota").find("#txt_assign_inter").val();
    var txt_assign_story_ad = $("#frm_quota").find("#txt_assign_story_ad").val();


    if ($.trim(txt_assign_basic) != "") {
        if (!intger_pattern.test(txt_assign_basic)) {
            I("ob_quota_msg").innerHTML = "Values with maximum of 2 decimals are allowed.";
            return false;
        }
    }
    if ($.trim(txt_assign_super_hot) != "") {
        if (!intger_pattern.test(txt_assign_super_hot)) {
            I("ob_quota_msg").innerHTML = "Values with maximum of 2 decimals are allowed.";
            return false;
        }
    } else if ($.trim(txt_assign_super_hot) == "") {
        $("#frm_quota").find("#txt_assign_super_hot").val('0');
    }

    if ($.trim(txt_assign_hot) != "") {
        if (!intger_pattern.test(txt_assign_hot)) {
            I("ob_quota_msg").innerHTML = "Values with maximum of 2 decimals are allowed.";
            return false;
        }
    } else if ($.trim(txt_assign_hot) == "") {
        $("#frm_quota").find("#txt_assign_hot").val('0');
    }


    if ($.trim(txt_assign_ref) != "") {
        if (!intger_pattern.test(txt_assign_ref)) {
            I("ob_quota_msg").innerHTML = "Values with maximum of 2 decimals are allowed.";
            return false;
        }
    } else if ($.trim(txt_assign_ref) == "") {
        $("#frm_quota").find("#txt_assign_ref").val('0');
    }

    if ($.trim(txt_assign_story_ad) != "") {
        if (!intger_pattern.test(txt_assign_story_ad)) {
            I("ob_quota_msg").innerHTML = "Values with maximum of 2 decimals are allowed.";
            return false;
        }
    } else if ($.trim(txt_assign_story_ad) == "") {
        $("#frm_quota").find("#txt_assign_story_ad").val('0');
    }


    if ($.trim(txt_assign_inter) != "") {
        if (!intger_pattern.test(txt_assign_inter)) {
            I("ob_quota_msg").innerHTML = "Values with maximum of 2 decimals are allowed.";
            return false;
        }
    } else if ($.trim(txt_assign_inter) == "") {
        $("#frm_quota").find("#txt_assign_inter").val('0');
    }


    I("ob_quota_msg").innerHTML = "Processing....";
    $("#frm_quota").ajaxSubmit(function(str) {
        var chk = 1;
        str_arr = str.split(":|||:");
        str = JSON.parse(str_arr[1]);
        var err_txt = "";
        var success_txt = "";
        if (str.std_error == 1) //less
        {
            err_txt += "<br/><span style=\"color:red\">Please ensure that basic listing quota is greater than or equal to used/active listings.</span><br/>";
            chk = 0;
        } else if (str.std_success == 1) {
            success_txt += "<span style=\"color:green\">Basic listings updated Successfully.</span><br/>";
        }

        if (str.hot_error == 1) //error
        {
            err_txt += "<br/><span style=\"color:red\">Please ensure that Hot credit value must be less than your total agency hot credits.</span><br/>";
            chk = 0;
        } else if (str.hot_success == 1) {
            success_txt += "<span style=\"color:green\">Hot credits updated Successfully.</span><br/>";
        }

        /*if(str.mgz_error == 1)
        {
        	err_txt += "<br/><span style=\"color:red\">Please ensure that Magazine credit value must be less than your total agency magazine credits.</span>";
        	chk = 0;
        }
        else if(str.mgz_success == 1){
        	success_txt += "<span style=\"color:green\">Magazine credits updated Successfully.</span>";
        }*/


        if (str.ref_error == 1) {
            err_txt += "<br/><span style=\"color:red\">Please ensure that Refresh credit value must be less than your total agency refresh credits.</span>";
            chk = 0;
        } else if (str.ref_success == 1) {
            success_txt += "<span style=\"color:green\">Refresh credits updated Successfully.</span>";
        }

        if (str.story_ad_error == 1) {
            err_txt += "<br/><span style=\"color:red\">Please ensure that Story Ad credit value must be less than your total agency story ad credits.</span>";
            chk = 0;
        } else if (str.story_ad_success == 1) {
            success_txt += "<span style=\"color:green\">Story Ad credits updated Successfully.</span>";
        }
        //           if(str.inter_error == 1)
        // {
        // 	err_txt += "<br/><span style=\"color:red\">Please ensure that International credit value must be less than your total agency International credit.</span>";
        // 	chk = 0;
        // }
        // else if(str.inter_success == 1){
        // 	success_txt += "<span style=\"color:green\">International credit updated Successfully.</span>";
        // }    
        if (str.super_hot_error == 1) {
            err_txt += "<br/><span style=\"color:red\">Please ensure that Super Hot credit value must be less than your total agency Super Hot credit.</span>";
            chk = 0;
        } else if (str.super_hot_success == 1) {
            success_txt += "<span style=\"color:green\">Super Hot credit updated Successfully.</span>";
        } else if (str.hot_api_error == 1) {
            err_txt += "<br/><span style=\"color:red\">Unable to transfer hot credits. Please try again later.</span><br/>";
            chk = 0;
        } else if (str.super_hot_api_error == 1) {
            err_txt += "<br/><span style=\"color:red\">Unable to transfer supper hot credits. Please try again later.</span><br/>";
            chk = 0;
        }


        I("ob_quota_msg").innerHTML = "";
        if (success_txt != "") {
            I("ob_quota_msg").innerHTML += success_txt + "<br/>";
        }
        if (err_txt != "") {
            I("ob_quota_msg").innerHTML += err_txt;
        }
        I("divag_" + userid).innerHTML = str_arr[0];
        if (chk == 1)
            setTimeout("cClick()", 2000);

        if (str.not_chk == 1) {
            setTimeout("cClick()", 1000);
        }
    });
} ////End Of Function

function assign_olx_listing(userid, standard_quota, featured_quota, boost_quota) {
    if (typeof standard_quota === "undefined")
        standard_quota = 0;
    if (typeof featured_quota === "undefined")
        featured_quota = 0;
    if (typeof boost_quota === "undefined")
        boost_quota = 0;
    var ob = "";

    var this_url = this_domain_mybayut + "/?ajax=1&ajax_section=agency_staff&ajax_action=manage_team_user_quota&userid=" + userid + "&platform=olx";
    ob += "<div id=\"ob_olx_quota_msg\"></div><form action=\"" + this_url + "\" method=\"post\" id=\"frm_olx_quota\" name=\"frm_olx_quota\"><div id=\"ob_quota_div\">";
    ob += "<br/>";
    ob += "<label style=\"display:block; float:left; width:150px; margin-right:2px;\">Assigned Basic Quota</label><input type=\"text\" id=\"txt_assign_basic\" name=\"txt_assign_basic\" value=\"" + standard_quota + "\" /><br /><br />";
    ob += "<input type=\"hidden\" id=\"txt_assign_basic_old\" name=\"txt_assign_basic_old\" value=\"" + standard_quota + "\" />";
    ob += "<label style=\"display:block; float:left; width:150px; margin-right:2px;\">Assigned Feature Credits</label><input type=\"text\" id=\"txt_assign_featured\" name=\"txt_assign_featured\" value=\"" + featured_quota + "\" /><br /><br />";
    ob += "<input type=\"hidden\" id=\"txt_assign_featured_old\" name=\"txt_assign_featured_old\" value=\"" + featured_quota + "\" />";
    ob += "<label style=\"display:block; float:left; width:150px; margin-right:2px;\">Assigned Boost Credits</label><input type=\"text\" id=\"txt_assign_boost\" name=\"txt_assign_boost\" value=\"" + boost_quota + "\" /><br /><br />";
    ob += "<input type=\"hidden\" id=\"txt_assign_boost_old\" name=\"txt_assign_boost_old\" value=\"" + boost_quota + "\" />";
    ob += "<center><input type=\"button\" id=\"btn_qok\" name=\"btn_qok\" value=\"\" onclick=\"update_user_olx_quota(" + userid + ")\" />&nbsp;&nbsp;<input type=\"button\" id=\"btn_qcancel\"  value=\"\" onclick=\"cClick();\" /></center><br /><br />";
    ob += "</div></form>";

    return overlib(ob, CAPTION, "Assign Quota/Credit", STICKY, CLOSECLICK, WIDTH, 350, OFFSETX, -100, OFFSETY, -50);
} ////End Of Function

function update_user_olx_quota(userid) {
    I("ob_olx_quota_msg").style.display = "block";
    var intger_pattern = /^\s*-?\d+(\.\d{1,2})?\s*$/;
    var txt_assign_basic = $("#frm_olx_quota").find("#txt_assign_basic").val();
    var txt_assign_featured = $("#frm_olx_quota").find("#txt_assign_featured").val();
    var txt_assign_boost = $("#frm_olx_quota").find("#txt_assign_boost").val();

    if ($.trim(txt_assign_basic) != "") {
        if (!intger_pattern.test(txt_assign_basic)) {
            I("ob_olx_quota_msg").innerHTML = "Values with maximum of 2 decimals are allowed.";
            return false;
        }
    }
    if ($.trim(txt_assign_featured) != "") {
        if (!intger_pattern.test(txt_assign_featured)) {
            I("ob_olx_quota_msg").innerHTML = "Values with maximum of 2 decimals are allowed.";
            return false;
        }
    } else if ($.trim(txt_assign_featured) == "") {
        $("#frm_olx_quota").find("#txt_assign_featured").val('0');
    }

    if ($.trim(txt_assign_boost) != "") {
        if (!intger_pattern.test(txt_assign_boost)) {
            I("ob_olx_quota_msg").innerHTML = "Values with maximum of 2 decimals are allowed.";
            return false;
        }
    } else if ($.trim(txt_assign_boost) == "") {
        $("#frm_olx_quota").find("#txt_assign_boost").val('0');
    }

    I("ob_olx_quota_msg").innerHTML = "Processing....";
    $("#frm_olx_quota").ajaxSubmit(function(str) {
        var chk = 1;
        str_arr = str.split(":|||:");
        str = JSON.parse(str_arr[1]);
        var err_txt = "";
        var success_txt = "";
        if (str.std_error == 1) //less
        {
            err_txt += "<br/><span style=\"color:red\">Please ensure that basic listing quota is greater than or equal to used/active listings.</span><br/>";
            chk = 0;
        } else if (str.std_success == 1) {
            success_txt += "<span style=\"color:green\">Basic listings updated successfully.</span><br/>";
        } else if (str.std_api_error == 1) //less
        {
            err_txt += "<br/><span style=\"color:red\">Unable to transfer basic listing quota. Please try again later.</span><br/>";
            chk = 0;
        }

        if (str.featured_error == 1) //error
        {
            err_txt += "<br/><span style=\"color:red\">Please ensure that Feature credit value must be less than your total agency feature credits.</span><br/>";
            chk = 0;
        } else if (str.featured_success == 1) {
            success_txt += "<span style=\"color:green\">Feature credits updated Successfully.</span><br/>";
        } else if (str.featured_api_error == 1) {
            err_txt += "<br/><span style=\"color:red\">Unable to transfer Feature credits. Please try again later.</span><br/>";
            chk = 0;
        }

        if (str.boost_error == 1) {
            err_txt += "<br/><span style=\"color:red\">Please ensure that Boost credit value must be less than your total agency Boost credit.</span>";
            chk = 0;
        } else if (str.boost_success == 1) {
            success_txt += "<span style=\"color:green\">Boost credit updated Successfully.</span>";
        } else if (str.boost_api_error == 1) {
            err_txt += "<br/><span style=\"color:red\">Unable to transfer boost credits. Please try again later.</span><br/>";
            chk = 0;
        }

        I("ob_olx_quota_msg").innerHTML = "";
        if (success_txt != "") {
            I("ob_olx_quota_msg").innerHTML += success_txt + "<br/>";
        }
        if (err_txt != "") {
            I("ob_olx_quota_msg").innerHTML += err_txt;
        }
        I("divagolx_" + userid).innerHTML = str_arr[0];
        if (chk == 1)
            setTimeout("cClick()", 2000);

        if (str.not_chk == 1) {
            setTimeout("cClick()", 1000);
        }
    });
} ////End Of Function

$(".team_users").livequery("click", function(event) {
    $("#frm_add_support").css("display", "none");
    team_id = this.id;
    team_id = team_id.replace("adduser_", "");
    var url = "?ajax=1&ajax_section=agency_staff&ajax_action=get_user_control_manage_team_html&team_id=" + team_id;
    //var url = this_domain_mybayut + "/includes/ag_manageteam/tabs.php";
    var str = $.ajax({
        url: url,
        async: false
    }).responseText;;
    return overlib(str, STICKY, CAPTION, "Add Team Users", CLOSECLICK, WIDTH, 560, HEIGHT, 430, CENTER, OFFSETY, -250);

});

function move_combo(from, to) {
    $("#" + from + " option:selected").prependTo("#" + to);
    $("#" + from + " option:selected").remove();
} ////End Of Function

function addusertoteam(team_id) {
    $("#sl_users option").attr({
        selected: "selected"
    });
    $("#sl_admin option").attr({
        selected: "selected"
    });
    $("#frm_addtoteam").ajaxSubmit(function(str) {
        I("msg_div").style.display = "block";
        //setTimeout("cClick()",2000);
    });
}

function addsupport_user(team_id) {
    $("#sl_support option").attr({
        selected: "selected"
    });
    $("#frm_add_support").ajaxSubmit(function(str) {
        I("msg_div").style.display = "block";
        //setTimeout("cClick()",2000);
    });
}

$(".remove_member").livequery("click", function(event) {
    remove_id = $(this).attr("id");
    remove_id = remove_id.replace("re_", "");

    frm_action = "?ajax=1&ajax_section=agency_staff&ajax_action=angency_staff_remove&remove_user=re_" + remove_id;
    overlib_txt = "<form action=\"" + frm_action + "\" method=\"post\" name=\"frm_team\" id=\"frm_team\"><div id=\"msg_div\" style=\"height:80px\">";
    overlib_txt += "Are you sure you want to delete this user from the agency?.<br /><br />";
    overlib_txt += "The selected user account will be deleted but move all its listings, messages, leads, clients, folders, etc under your account.<br /><br />";
    overlib_txt += "<span style='display:none;'><input type=\"hidden\" name=\"userDelete\" value=\"DeleteM\"/><input type=\"checkbox\" name=\"transfer_credits\" value=\"1\" style=\"position:relative;top:2px;\" checked=\"checked\">&nbsp;Move all credits to creater <br /><br /></span>";

    overlib_txt += "<center><input type=\"button\" value=\"Yes\" class=\"sb_agyes\" onclick=\"submit_agob_forms(" + remove_id + ")\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"cClick();\" /></center><br /></div></form>";

    return overlib(overlib_txt, STICKY, CLOSECLICK, CAPTION, "Delete User", WIDTH, 350, HEIGHT, 200, CELLPAD, 10, OFFSETX, -20, OFFSETY, -30);
});

function submit_agob_forms(userid) {
    $("#msg_div").prepend("<span style=\"\"><b>Processing...</b></span><br />");
    $('#frm_team').ajaxSubmit(function(str) {
        if (str != "") {
            I("msg_div").innerHTML = str;
            $("#divag_" + userid).remove();
            var tuser = parseInt(I("agtotal").innetHTML);
            I("agtotal").innetHTML = tuser - 1;
            setTimeout("cClick()", 2000);
        }
    });
}

function submitInvitation() {
    var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
    if ($.trim(I("txtemail").value) == "") {
        I("errDiv").innerHTML = "Please enter email address";
        I("invited_msg").style.display = "block";
    } else if (!re.test(I("txtemail").value)) {
        I("errDiv").innerHTML = "Please enter valid email address";
        I("invited_msg").style.display = "block";
    } else {
        $("#frm_invitedUser").ajaxSubmit(function(str) {
            jobj = eval(str);
            I("errDiv").innerHTML = jobj[0]["error_msg"];
            I("invited_msg").style.display = "block";
        });
    }
} ////End Of Function

function closeInvitationDiv() {
    I("errDiv").innerHTML = "An invitation has sent to email address";
    I("invited_msg").style.display = "none";
} ////End Of Function

function changeInvitationStatus(id, status) {
    frm_action = "?ajax=1&ajax_section=agency_staff&ajax_action=delete_user_invitation&ivi=" + id + "&status=" + status;
    overlib_txt = "<form action=\"" + frm_action + "\" method=\"post\" name=\"frm_inv\" id=\"frm_inv\" style=\"margin:0px;padding:0px;\"><div id=\"msg_div\">";
    switch (status) {
        case "Pending":
            overlib_txt += "Are you sure you want to resend this invitation.<br /><br />";
            ob_title = "Resend Invitation";
            break;
        case "Deleted":
            overlib_txt += "Are you sure you want to delete this invitation.<br /><br />";
            ob_title = "Delete Invitation";
            break;
    }


    overlib_txt += "<center><input type=\"button\" value=\"Yes\" class=\"sb_agyes\" onclick=\"submit_invitationstatus(" + id + ")\" />&nbsp;&nbsp;<input type=\"button\" value=\"No\" onclick=\"cClick();\" /></center><br /></div></form>";
    return overlib(overlib_txt, STICKY, CLOSECLICK, CAPTION, ob_title, WIDTH, 300, HEIGHT, 150, CELLPAD, 10, OFFSETX, -20, OFFSETY, -30);
} ////End Of Function

function submit_invitationstatus(id) {
    $("#msg_div").prepend("<span style=\"\">Processing...</span><br /><br />");
    $('#frm_inv').ajaxSubmit(function(str) {
        divid = "divinv_" + id;
        I(divid).innerHTML = str;
        setTimeout("cClick()", 2000);
    });
}

function show_users_allocation(id) {
    var html = "";
    var sel = $("#change_user_" + id).attr('rel');

    if (sel.length) {
        sel = sel.split(',');
    }

    html += "<table cellpadding='3' cellspacing='' width='150'>";
    //html += "<tr><th>&nbsp;</th><th align='left'>Users</th></tr>";
    $.each(agency_user_arr, function(index, value) {

        if ((sel.length > 0) && (sel.indexOf(index) != -1)) {
            checked = "checked='checked'";
        } else
            checked = '';

        html += "<tr><td><input type='checkbox' class='change_alloc_user' name='change_alloc_user[" + index + "]' value='" + index + "' " + checked + " /></td><td>" + value.name + "</td></tr>";
    });
    html += "<tr><td>&nbsp;</td><td><input type='button' value='Change' id='change_alloc_user_id' onclick='change_alloc_users(" + id + ")'/></td></tr>";
    html += "<tr><td>&nbsp;</td><td><input type='hidden' value='" + id + "' id='change_alloc_dev_id'/></td></tr>";
    html += "</table>";

    ob_title = "Change User Allocation";
    return overlib(html, STICKY, CLOSECLICK, CAPTION, ob_title, WIDTH, 200, CELLPAD, 10, OFFSETX, -20, OFFSETY, -30);
}

function change_alloc_users(id) {
    var users_arr = new Array();
    var ctr = 0;
    $('.change_alloc_user').each(function() {
        if ($(this).is(":checked"))
            users_arr[ctr++] = $(this).val();
    });

    if (users_arr.length == 0)
        users_arr = '';

    var url = this_domain + "/profolio/includes/agedit_user/template/ajax_project_allocation.php";
    $.post(url, {
            project_id: id,
            val_array: users_arr,
            section: 'allocate_user'
        },
        function(response) {
            cClick();
            $('#project_submit').submit();
        });
}

function show_teams_allocation(id) {
    var html = "";
    var sel = $("#change_team_" + id).attr('rel');

    if (sel.length) {
        sel = sel.split(',');
    }
    html += "<table cellpadding='3' cellspacing='' width='150'>";
    //html += "<tr><th>&nbsp;</th><th align='left'>Users</th></tr>";
    $.each(agency_team_arr, function(index, value) {
        if ((sel.length > 0) && (sel.indexOf(index) != -1)) {
            checked = "checked='checked'";
        } else
            checked = '';
        html += "<tr><td><input type='checkbox' class='change_alloc_team' name='change_alloc_team[" + index + "]' value='" + index + "' " + checked + " /></td><td>" + value.agnteam_name + "</td></tr>";
    });
    html += "<tr><td>&nbsp;</td><td><input type='button' value='Change' id='change_alloc_team_id' onclick='change_alloc_teams(" + id + ")'/></td></tr>";
    html += "<tr><td>&nbsp;</td><td><input type='hidden' value='" + id + "' id='change_alloc_dev_id'/></td></tr>";
    html += "</table>";

    ob_title = "Change Team Allocation";
    return overlib(html, STICKY, CLOSECLICK, CAPTION, ob_title, WIDTH, 200, CELLPAD, 10, OFFSETX, -20, OFFSETY, -30);
}

function change_alloc_teams(id) {
    var teams_arr = new Array();
    var ctr = 0;
    $('.change_alloc_team').each(function() {
        if ($(this).is(":checked"))
            teams_arr[ctr++] = $(this).val();
    });
    if (teams_arr.length == 0)
        teams_arr = '';

    var url = this_domain + "/profolio/includes/agedit_user/template/ajax_project_allocation.php";
    $.post(url, {
            project_id: id,
            val_array: teams_arr,
            section: 'allocate_team'
        },
        function(response) {
            cClick();
            $('#project_submit').submit();
        });
}