@extends('userside.layout')
@section('main')
    @include('userside.layouts.profile_sidebar')
    <div id="rightcolumn" style="
        width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">

            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=4&section=editUser">My Account &
                    Profiles</a> &raquo; Change Password </span>
        </div>


        <div class="box_title">
            <div><b>Password</b></div>
        </div>
        <div id="edituser_divheading">
            <form action="{{ url('user/update-password') }}" method="post" name="form1">
                <br />
                @csrf
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                <div id="editusertext">
                    <div>
                        <b>Current Password:</b>
                        <span>
                            <input name="current_password" type="password" class="setting_input" id="old_pass" size="35" maxlength="100" value="">
                            @if ($errors->has('current_password'))
                                <div class="error">{{ $errors->first('current_password') }}</div>
                            @endif
                        </span>
                        <div>
                        </div>
                        <b>New Password:</b>
                        <span>
                            <input name="new_password" type="password"  class="setting_input" id="new_pass" size="35" maxlength="100">
                            @if ($errors->has('new_password'))
                                <div class="error">{{ $errors->first('new_password') }}</div>
                            @endif
                        </span>
                        <div>
                        </div>
                        <b>Confirm New Password:</b>
                        <span>
                            <input name="new_confirm_password" type="password"  class="setting_input" id="confirm_pass" size="35" maxlength="100">
                            @if ($errors->has('new_confirm_password'))
                                <div class="error">{{ $errors->first('new_confirm_password') }}</div>
                            @endif
                        </span>
                        <div>
                        </div>
                        <b>&nbsp;</b>
                        <span>
                            <input type="image" align="middle" class="quota" name="Submit"
                                src="{{ asset('userside') }}/profolio/images/modify1_2.png" />
                        </span>
                    </div>
                </div>
                <div id="submit">&nbsp;</div>
            </form>
        </div>
    </div>
    </div>
@endsection
