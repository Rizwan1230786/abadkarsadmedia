@extends('userside.layout')
@section('main')
    @include('userside.layouts.agency_staff_sidebar')
    @if(Auth::user()->roles)
    <div id="rightcolumn" style="
        width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=7&section=agedit_user">Agency
                    Staff</a> &raquo; Manage Teams </span>
        </div>
        <div id="team_create_msg">
            <div class="success_msg_box" style="display:block; width:99%;  margin-bottom:15px;height:auto;overflow:auto;"
                id="div_display_message">
                <div style="margin-top:9px; margin-left:8px; padding-bottom:10px; display:inline;float:left;width:38px;">
                    <span><img src="{{ asset('userside') }}/profolio/images/profolio_reen_circle_tick1_1.svg"
                            style=''></span></div>
                <div style="display:inline;float:left;width:80%;margin-top:15px; "><span
                        style="color:#1B6242;font-size:12px;font-weight:bold;margin-top:15px;" id="errDiv">Team created
                        successfully. You may update the team in the Manage Teams section below.<br><br></span></div>
            </div>
        </div>
        <style>

        </style>
        <div class="box_title">
            <div><b>Create a Team</b></div>
        </div>
        <div class="box_body" style="width:100%;">
            <form action="" method="post"
                name="frm_addteam" id="frm_addteam" onsubmit="return false;">
                <div id="editusertext">

                    <div id="team_input" style="float: left;width: 100%">

                        <span style="width: 182px;float: left;padding-top: 3px;">
                            <b style="text-align: left;width:10%; font-size: 11px">Type</b>
                            <span style="float: left;  width: 85%">
                                <label>
                                    <input style="vertical-align: middle; margin-top: 0px;" type="radio" id="team_check"
                                        class="team_check" name="team_check" value="new_team" checked="checked">New Team
                                </label>
                                <label>
                                    <input style="vertical-align: middle; margin-top: 0px;" type="radio" id="team_check"
                                        class="team_check" name="team_check" value="existing_team">Sub Team
                                </label>
                            </span>
                        </span>
                        <span style="width: 468px;float: left;">
                            <b style="font-size: 11px;float: left;width: 15%; padding-top: 3px;">Team Name<span
                                    style=" color: red; width: 5px; float: right;">*</span></b>

                            <span style="width: 234px;">
                                <input name="team_name" type="text" id="team_name" size="35" maxlength="100" value=""
                                    style="width:200px;">
                                <span style="cursor: pointer;float: right;width: 3%;position: relative;top: 5px;right: 10px"
                                    onmouseover="overlib('Only alpha-numeric characters are allowed.',CAPTION,'Note',WIDTH,325,HAUTO,VAUTO,EXCLUSIVE);"
                                    onclick="overlib('Only alpha-numeric characters are allowed.',STICKY,CLOSECLICK,CAPTION,'Note',WIDTH,325,HAUTO,VAUTO,EXCLUSIVE);"
                                    onmouseout="return nd();">
                                    <img src="{{ asset('userside') }}/profolio/images/info.gif"
                                        border="0" style="cursor:pointer;">
                                </span>
                            </span>

                            <span style="float: left; width:154px;">
                                <label style="float: left; display: block; padding-top: 3px;">
                                    <input style="margin-top: 0px; float: left; height: 13px;" type="checkbox"
                                        id="is_support_check" name="is_support_check" value="support">
                                    <span style="float: left; line-height: 13px; width: auto; display: ">
                                        Support Team
                                    </span>
                                </label>
                            </span>

                        </span>
                        </span>

                        <span style="width: 15%;float: right;">
                            <input id="addTeamButton" type="button" align="middle" name="sb_addteam"
                                onclick="return submit_addteam();"
                                style="background:url({{ asset('userside') }}/profolio/images/create_team1_1.png) no-repeat; width:100px; height:20px; border:none;cursor:pointer" />
                        </span>

                    </div>

                    <div id="select_team_div">
                        <b style="font-size: 11px;float: initial;">Parent Team<span
                                style="color: red; width:5%;float: none;">*</span></b>
                        <select id="select_team" name="select_team" style="width:15%;height:20px;">
                            <option value="">Select Team</option>



                        </select>
                    </div>

                    <!-- <div>
                    <b>&nbsp;</b>
                    <span class="rejected_txt" style="width:55%;">
                        You can create 10 teams only.			</span>
                </div> -->
                </div>
                <div id="submit">&nbsp;</div>
            </form>
        </div>
        <br /><br />
        <div class="box_title">
            <div><b>Manage Teams</b></div>
        </div>
        <div class="box_body">

            <div style="margin-bottom:5px;">
                <b>Total Team(s): <span id="agtotal">0</span></b>
            </div>
            <div class="titlebar">
                <span style="width:19%;">&nbsp;Team</span>
                <span style="width:15%;">&nbsp;Type</span>
                <span style="width:15%;">Created On</span>
                <span style="width:11%;text-align:right">Total Users</span>
                <span style="width:4%;">&nbsp;</span>
                <span style="width:22%;">User Controls</span>
                <span>Team Controls</span>
            </div>
            <div id="data_div"></div>
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
