@extends('userside.layout')
@section('main')
    @include('userside.layouts.profile_sidebar')
    <div id="rightcolumn" style="width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">

            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=4&section=editUser">My Account &
                    Profiles</a> &raquo; User Profile </span>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>


        <div class="box_title">
            <div><b>My Profile</b></div>
        </div>
        <div class="box_body">
            <form action="{{ url('user/update_user_profile/' . Auth::user()->id) }}" method="post" name="form1" class="formSubmit"
                enctype="multipart/form-data">
                @csrf
                <br>
                <div id="editusertext">
                    <div>
                        <b>E-mail:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></b>
                        <span>
                            {{ Auth::guard('customeruser')->user()->email }}&nbsp;<input type="hidden" name="email"
                                id="email" value="{{ Auth::guard('customeruser')->user()->email }}">
                            <input type="hidden" name="old_imag_name" id="old_imag_name" value="">
                        </span>
                        <a class="info">
                            <p>Please contact administrator to edit your e-mail address. Your e-mail address represents your
                                unique username and remains locked for security reasons.</p>
                        </a>
                    </div>
                    <div>
                        <b>First Name:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></b>
                        <span>
                            <input style="width:187px" name="firstname" type="text" id="contact" size="35" maxlength="100"
                                value="{{ Auth::guard('customeruser')->user()->firstname }}">
                        </span>
                        <a class="info">
                            <p>Please enter your first and last name respectively</p>
                        </a>
                    </div>
                    <div>
                        <b>Last Name:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></b>
                        <span>
                            <input style="width:187px" name="lastname" type="text" id="contact" size="35" maxlength="100"
                                value="{{ Auth::guard('customeruser')->user()->lastname }}">
                        </span>
                        <a class="info">
                            <p>Please enter your first and last name respectively</p>
                        </a>
                    </div>
                    <div id="div_phone_add_0" style="">
                        <b>Phone:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </b>
                        <span>
                            @if (Auth::guard('customeruser')->user()->contact)
                                <input style="width:187px" value="{{ Auth::guard('customeruser')->user()->contact }}"
                                    maxlength="13" name="contact" id="phone_country_0">
                            @else
                                <input style="width:187px" value="+92" maxlength="13" name="contact" id="phone_country_0">
                            @endif
                        </span>
                        <span style="width:5px;"> <a class="info">
                                <p>Enter your phone (land line or fixed phone) number along with area and international
                                    dialing code.<br />Example: +92-51-12345678</p>
                            </a>
                        </span>
                    </div>
                    <div>
                        <b>Address:<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></b>
                        <span>
                            <textarea name="address" cols="50" rows="8" id="com_about" size="35" maxlength="100"
                                style="width:188px;text-align:left;">{{ Auth::user()->address }}</textarea>
                        </span>
                        <a class="info">
                            <p>Please enter your street address</p>
                        </a>
                    </div>
                    <div>
                        <b>Region:<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></b>
                        <span>
                            <select name="region" id="city_id_profile" style="width:190px">
                                <option value="{{ Auth::user()->region }}">{{ Auth::user()->region }}</option>
                                <option value='Punjab'>Punjab</option>
                                <option value='sindh'>sindh</option>
                            </select>
                        </span>
                        <a class="info">
                            <p>Please enter your area zip or postal code</p>
                        </a>
                    </div>
                    <div>
                        <b>Country:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></b>
                        <span>
                            <input style="width:187px" name="country" type="text" id="zip_code" size="35" maxlength="100"
                                value="{{ Auth::user()->country }}">
                        </span>
                        <a class="info">
                            <p>Please select your country of residence from the given list</p>
                        </a>
                    </div>
                    <div class="city_input" style='display:none;'>
                        <b>City:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></b>
                        <span>
                            <select name="city_id_profile" id="city_id_profile" style="width:190px">

                                <option value="">Select city from list</option>
                                <option value='3'>Islamabad</option>
                                <option value='2'>Karachi</option>
                                <option value='1'>Lahore</option>
                            </select>
                        </span>
                        <a class="info">
                            <p>Please select your city of residence from the given list</p>
                        </a>
                    </div>
                    <div>
                        <b>Community Nick:&nbsp;</b>
                        <span>
                            <input style="width:187px" name="nick" type="text" id="nick" size="35" maxlength="100" value="">
                        </span>
                        <a class="info">
                            <p>This is your community nick name which is generally a short form of your name which you would
                                like to use to show your profile in the community. You have the option to keep this name
                                similar to your first and last name.</p>
                        </a>
                    </div>
                    <div>
                        <b>About Yourself:&nbsp;</b>
                        <span>
                            <textarea name="detail" cols="50" rows="8" id="com_about" size="35" maxlength="100"
                                style="width:188px;text-align:left;">{{ Auth::user()->detail }}</textarea>
                        </span>
                        <a class="info">
                            <p>Please provide information about yourself. You could tell us about your work, your interests,
                                lifestyle, nature and other related information about your personality.</p>
                        </a>
                    </div>
                    <div>
                        <b>Picture:</b>
                        <span>
                            <table style="border:1px solid #E0E0E0">
                                <tr>
                                    <td style="padding:8px;">
                                        @if (Auth::user()->image != null)
                                            <img src="{{ asset('assets/images/userphoto/' . Auth::guard('customeruser')->user()->image) ?? '' }}"
                                                alt="" width="50" height="50">
                                        @else
                                            <img src='{{ asset('userside') }}/images/common/resize.jpg' />
                                        @endif
                                    </td>
                                <tr>
                            </table>
                            <br>
                        </span>
                    </div>
                    <div>
                        <b>Upload New Picture:</b>
                        <span>
                            <input style="width:187px" type="file" style="height: 19px;" size="34" name="image" /><br />(Max
                            500x500@400KB)
                        </span>

                    </div>
                    <div>
                        <b>&nbsp;</b>
                        <span>
                            <input type="image" align="middle" class="quota" name="Submit"
                                src="{{ asset('userside') }}/profolio/images/modify1_2.png" />
                        </span>
                    </div>

                </div>
                <div id="submit">&nbsp;</div>
                <script>
                    var local_country_id = "1";

                    $("#country").change(function() {
                        // alert($("#country").val());
                        if ($("#country").val() != local_country_id) {
                            $(".city_input").hide();
                        } else {
                            $(".city_input").show();
                        }

                    });

                    $(".info").mouseover(function(event) {
                        display_text = $(this).find("p").html();
                        return overlib(display_text, WIDTH, 200);
                    });
                    $(".info").mouseout(function(event) {
                        return nd();
                    });
                </script>
            </form>
        </div>
    </div>
    </div>
@endsection
@section('js')
    <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    @include('admin.layouts.select2JsFiles')
    @include('admin.layouts.fancy-uploader-js')
    @include('admin.layouts.tinymce-js')
    @include('admin.layouts.templateJquery')
    <script src="{{ URL::asset('assets/themeJquery/customeruser/jquery1.js') }}"></script>
@endsection
