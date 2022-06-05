@extends('userside.layout')
@section('main')
    @include('userside.layouts.agency_staff_sidebar')
    @if(Auth::user()->roles)
    <div id="rightcolumn" style="
        width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=7&section=agedit_user">Agency
                    Staff</a> &raquo; Manage Users </span>
        </div>
        <div class="box_title">
            <div><b>Agency Users</b></div>
        </div>
        <div class="box_body">
            <div style="margin-bottom:5px;">
                <b>Total User(s): <span id="agtotal">2</span></b>
            </div>
            <div class="titlebar">
                <span style="width:20%;">&nbsp;Contact Person</span>
                <span style="width:20%;">&nbsp;E-mail</span>
                <span style="width:15%;">&nbsp;Team</span>
                <span style="width:10%;text-align:right;">&nbsp;Listings</span>
                <span style="width:10%;text-align:right;">&nbsp;Leads</span>
                <span style="width:5%;">&nbsp;</span>
                <span>Controls</span>
            </div>
            <div id="data_div">
                <div class="row_select" id="divag_1001388906">
                    <span style="width:20%; word-wrap: break-word;">&nbsp;Muhammad Rizwan Akhtar</span>
                    <span style="width:25%; word-wrap: break-word;">&nbsp;rizwan.13347@gmail.com</span>
                    <span style="width:10%; word-wrap: break-word;">&nbsp;-</span>
                    <span style="width:10%;text-align:right;padding-right:5%; word-wrap: break-word;">&nbsp;1</span>
                    <span style="width:5%;text-align:right;padding-right:5%">&nbsp;0</span>
                    <span>
                        <a href="https://profolio.zameen.com/profolio/index.php?tabs=7&section=agedit_user&userid=1001388906"
                            target="_blank"
                            onMouseOver="return overlib('Edit user profile and privileges',CAPTION,'Edit User')"
                            onMouseOut="return nd();"><img src="{{ asset('userside') }}/images/common/edit_user.gif"
                                border="0" /></a>&nbsp;
                        <a href="javascript: void(0);"
                            onMouseOver="return overlib('Add or edit team',CAPTION,'Add/Edit Team')"
                            onMouseOut="return nd();" onclick="show_teamob(192577,userid=1001388906);"
                            class="add_team"><img src="{{ asset('userside') }}/images/common/add_edit.gif"
                                border="0" /></a>&nbsp;
                        <a href="javascript: void(0);"
                            onMouseOver="return overlib('Click here to delete user from your agency.',CAPTION,'Delete User')"
                            onMouseOut="return nd();" class="remove_member" id="re_1001388906" title="Remove from team"><img
                                src="{{ asset('userside') }}/images/common/del.gif" border="0" /></a>
                    </span>
                </div>
                <div class="row cdiv_title_bg" id="divag_1001415959">
                    <span style="width:20%; word-wrap: break-word;">&nbsp;Rizy</span>
                    <span style="width:25%; word-wrap: break-word;">&nbsp;jhanzaibshakeel123@gmail.com</span>
                    <span style="width:10%; word-wrap: break-word;">&nbsp;-</span>
                    <span style="width:10%;text-align:right;padding-right:5%; word-wrap: break-word;">&nbsp;0</span>
                    <span style="width:5%;text-align:right;padding-right:5%">&nbsp;0</span>
                    <span>
                        <a href="https://profolio.zameen.com/profolio/index.php?tabs=7&section=agedit_user&userid=1001415959"
                            target="_blank"
                            onMouseOver="return overlib('Edit user profile and privileges',CAPTION,'Edit User')"
                            onMouseOut="return nd();"><img src="https://profolio.zameen.com/images/common/edit_user.gif"
                                border="0" /></a>&nbsp;
                        <a href="javascript: void(0);"
                            onMouseOver="return overlib('Add or edit team',CAPTION,'Add/Edit Team')"
                            onMouseOut="return nd();" onclick="show_teamob(192577,userid=1001415959);"
                            class="add_team"><img src="https://profolio.zameen.com/images/common/add_edit.gif"
                                border="0" /></a>&nbsp;
                        <a href="javascript: void(0);"
                            onMouseOver="return overlib('Click here to delete user from your agency.',CAPTION,'Delete User')"
                            onMouseOut="return nd();" class="remove_member" id="re_1001415959"
                            title="Remove from team"><img src="https://profolio.zameen.com/images/common/del.gif"
                                border="0" /></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    @else
    <div id="rightcolumn" style="
    width:79% " class="rightcolumn_div post_story_margin">
    <div class="note_msg_box" style="display:block; width:99%;  margin-bottom:15px;height:auto;overflow:auto;" id="div_display_message">
        <div style="margin-top:9px; margin-left:8px; padding-bottom:10px; display:inline;float:left;width:38px;">
            <span><img src="{{ asset('userside') }}/profolio/images/critical_pending_icon.svg" style=""></span></div>
        <div style="display:inline;float:left;width:80%;margin-top:15px; "><span style="color:#000000;font-size:12px;font-weight:bold;margin-top:15px;" id="errDiv">You do not have a right permissions in this module!</span></div>
    </div>
    </div>
    @endif
    </div>
@endsection
