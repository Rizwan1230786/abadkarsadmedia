@extends('userside.layout')
@section('main')
    @include('userside.layouts.agency_staff_sidebar')
    <div id="rightcolumn" style="
    width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=7&section=agedit_user">Agency
                    Staff</a> &raquo; Invite Users </span>
        </div>

        <div id="invited_msg">
            <form action="" method="post" style="margin:0px; padding:0px;">
                <div class="note_msg_box" style="display:block; width:99%;  margin-bottom:15px;height:auto;overflow:auto;"
                    id="div_display_message">
                    <div
                        style="margin-top:9px; margin-left:8px; padding-bottom:10px; display:inline;float:left;width:38px;">
                        <span><img src="https://assets.zameen.com/profolio/images/critical_pending_icon.svg"
                                style=''></span></div>
                    <div style="display:inline;float:left;width:80%;margin-top:15px; "><span
                            style="color:#000000;font-size:12px;font-weight:bold;margin-top:15px;" id="errDiv"></span></div>
                </div>
            </form>
        </div>
        <div class="box_title">
            <div><b>Invite User</b></div>
        </div>
        <div class="box_body" style="display:;">
            <form action="?ajax=1&ajax_section=agency_staff&ajax_action=invite_user_save" method="post"
                name="frm_invitedUser" id="frm_invitedUser" style="margin:0px; padding:0px;">
                <br />
                <div id="editusertext">
                    <div>
                        <b>Contact Person:</b>
                        <span>
                            <input name="txtname" type="text" id="txtname" size="35" maxlength="100" value="">
                        </span>
                    </div>
                    <div>
                        <b>E-mail:</b>
                        <span>
                            <input name="txtemail" type="text" id="txtemail" size="35" maxlength="100" value="">
                        </span>
                    </div>
                    <div>
                        <b>&nbsp;</b>
                        <span>
                            <input type="button"
                                style="background:url(https://assets.zameen.com/profolio/images/send_invitation1_1.png) no-repeat; border:none; width:120px; height:20px;cursor: pointer;"
                                name="sb_invite" onclick="submitInvitation();" />
                        </span>
                    </div>
                </div>
                <div id="submit">&nbsp;</div>
                <br />
            </form>
        </div>
        <div class="box_title">
            <div><b>Invitations</b></div>
        </div>
        <div class="box_body">

            <div style="margin-bottom:5px;">
                <b>Total Invitation(s): <span id="agtotal">0</span></b>
            </div>
            <div class="titlebar">
                <span style="width:25%;">&nbsp;Contact Person</span>
                <span style="width:25%;">E-mail</span>
                <span style="width:25%;">Status</span>
                <span>Controls</span>
            </div>
            <div id="data_div"></div>
        </div>
    </div>
    </div>
@endsection
