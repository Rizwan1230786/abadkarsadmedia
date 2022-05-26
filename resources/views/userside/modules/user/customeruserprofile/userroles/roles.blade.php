@extends('userside.layout')
@section('main')
    @include('userside.layouts.profile_sidebar')
    <div id="rightcolumn" style="
        width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=4&section=editUser">My Account &
                    Profiles</a> &raquo; User Roles </span>
        </div>

        <div class="box_title">
            <div><b>My Roles</b></div>
        </div>
        <div class="box_body">
            <form action="" method="post" name="form1">
                <br />
                <div align="center"> <br></div>

                <input type="hidden" name="users_roles" id="users_roles">
                <div>
                    <div>
                        <div align="center" style="margin-bottom:10px;">
                            <div class="role_text_heading"
                                style="text-align:center; width:70%; border-bottom:1px solid #BBBBBB; padding-bottom:2px;">
                                <b>Individual</b>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%"><input name="Owner/Investor" class="role_input"
                                    type="checkbox" value="2"><label>Owner/Investor</label></div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%"><input name="Tenant" class="role_input" type="checkbox"
                                    value="6"><label>Tenant</label></div>
                        </div>

                        <div align="center" style="margin-bottom:10px; ">
                            <div class="role_text_heading"
                                style="text-align:center; width:70%; border-bottom:1px solid #BBBBBB; margin-top:20px; padding-top:23px; padding-bottom:2px">
                                <b>Company</b>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%">
                                <input name="Agent/Broker" class="role_input" type="checkbox" value="1">
                                <label>Agent/Broker</label>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%">
                                <input name="Appraiser" class="role_input" type="checkbox" value="7">
                                <label>Appraiser</label>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%">
                                <input name="Architect" class="role_input" type="checkbox" value="13">
                                <label>Architect</label>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%">
                                <input name="Builder" class="role_input" type="checkbox" value="14">
                                <label>Builder</label>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%">
                                <input name="Corporate Investor" class="role_input" type="checkbox" value="3">
                                <label>Corporate Investor</label>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%">
                                <input name="Developer" class="role_input" type="checkbox" value="4">
                                <label>Developer</label>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%">
                                <input name="Listing Administrator" class="role_input" type="checkbox" value="9">
                                <label>Listing Administrator</label>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%">
                                <input name="Mortgage Broker" class="role_input" type="checkbox" value="8">
                                <label>Mortgage Broker</label>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%">
                                <input name="Partner" class="role_input" type="checkbox" value="16">
                                <label>Partner</label>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%">
                                <input name="Property/Asset Manager" class="role_input" type="checkbox" value="5">
                                <label>Property/Asset Manager</label>
                            </div>
                        </div>
                        <div class="editRoleCheck">
                            <div style="float:left; width:50%">
                                <input name="Researcher" class="role_input" type="checkbox" value="10">
                                <label>Researcher</label>
                            </div>
                        </div>

                    </div>

                </div>
                <input value=""
                    style="background: url('https://assets.zameen.com/profolio/images/submit_big1_1.png');border: 0 none;clear:left;float: left;height:20px;left: 43%;margin-bottom:10px;margin-top: 22px;position: relative;width: 62px;cursor: pointer;"
                    type="submit" name="Submit" id="Submit">
            </form>
        </div>

    </div>
    </div>
@endsection
