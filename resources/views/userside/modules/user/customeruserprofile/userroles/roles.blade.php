<?php
use Spatie\Permission\Models\Role;
$user_roles = Auth::user()->roles;
$roles = Role::where('name', $user_roles)->first();
?>
@extends('userside.layout')
@section('main')
    @include('userside.layouts.profile_sidebar')
    <div id="rightcolumn" style="
                    width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=4&section=editUser">My Account &
                    Profiles</a> &raquo; User Roles </span>
        </div>
        <div class="col-sm-12">
            @if (Session::has('error'))
                <p class="alert alert-danger">{{ Session::get('error') }}</p>
            @endif
        </div>
        <div class="box_title">
            <div><b>My Roles</b></div>
        </div>
        <div class="box_body">
            <form action="{{ url('user/create_roles') }}" method="post" name="form1">
                <br />
                @csrf
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
                        @if (Auth::user()->roles)
                            <input type="hidden" name="id" value="{{ $roles->id }}">
                            <div class="editRoleCheck">
                                <div style="float:left; width:50%"><input name="name" class="role_input" type="checkbox"
                                        value="{{ $roles->name }}" checked><label>Owner/Investor</label></div>
                            </div>
                        @else
                            <div class="editRoleCheck">
                                <div style="float:left; width:50%"><input name="name" class="role_input" type="checkbox"
                                        value="Owner/Investor"><label>Owner/Investor</label></div>
                            </div>
                            @if ($errors->has('name'))
                                <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                        @endif
                    </div>
                    <input value=""
                        style="background: url('https://assets.zameen.com/profolio/images/submit_big1_1.png');border: 0 none;clear:left;float: left;height:20px;left: 43%;margin-bottom:10px;margin-top: 22px;position: relative;width: 62px;cursor: pointer;"
                        type="submit" id="Submit">
            </form>
        </div>
    </div>
    </div>
@endsection
