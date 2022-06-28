@extends('userside.layout')
@section('main')
    @include('userside.layouts.profile_sidebar')
    <div id="rightcolumn" style="width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">

            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=4&section=editUser">My Account &
                    Profiles</a> &raquo; Agnecy Profile </span>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
        <div class="box_title">
            <div><b>My Agency Profile</b></div>
        </div>
        <div class="box_body">
            <form action="{{ url('user/submit_agency_profile/') }}" method="post" name="form1" class="formSubmit"
                enctype="multipart/form-data">
                @csrf
                <br>
                @if (!empty($agency->user_id))
                    <input type="hidden" value="{{ $agency->user_id ?? '' }}" name="user_id">
                @else
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                @endif
                <div id="editusertext">
                    <div>
                        <b>Agency Name:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></b>
                        <span>
                            <input style="width:187px" name="name" type="text" id="contact" size="35" maxlength="100"
                                value="{{ $agency->name ?? '' }}">
                        </span>
                        <a class="info">
                            <p>Please enter your first and last name respectively</p>
                        </a>
                    </div>
                    <div>
                        <b>E-mail:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></b>
                        <span>
                            <input style="width:187px" name="email" type="email" id="contact" size="35" maxlength="100"
                                value="{{ $agency->email ?? '' }}">
                        </span>
                        <a class="info">
                            <p>Please contact administrator to edit your e-mail address. Your e-mail address represents your
                                unique username and remains locked for security reasons.</p>
                        </a>
                    </div>
                    <div>
                        <b>Office Address:<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></b>
                        <span>
                            <textarea name="office_address" cols="50" rows="8" id="com_about" size="35" maxlength="100"
                                style="width:188px;text-align:left;">{{ $agency->office_address ?? '' }}</textarea>
                        </span>
                        <a class="info">
                            <p>Please enter your Office address</p>
                        </a>
                    </div>
                    <div id="div_phone_add_0" style="">
                        <b>Phone:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </b>
                        <span>
                            @if (!empty($agency->mobile_number))
                                <input style="width:187px" value="{{ $agency->mobile_number ?? '' }}" maxlength="13"
                                    name="mobile_number" id="phone_country_0">
                            @else
                                <input style="width:187px" value="+92" maxlength="13" name="mobile_number"
                                    id="phone_country_0">
                            @endif
                        </span>
                        <span style="width:5px;"> <a class="info">
                                <p>Enter your phone (land line or fixed phone) number along with area and international
                                    dialing code.<br />Example: +92-51-12345678</p>
                            </a>
                        </span>
                    </div>
                    <div id="div_phone_add_0" style="">
                        <b>Office No:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </b>
                        <span>
                            @if (!empty($agency->office_number))
                                <input style="width:187px" value="{{ $agency->office_number }}" maxlength="13"
                                    name="office_number" id="phone_country_0">
                            @else
                                <input style="width:187px" maxlength="13" name="office_number" id="phone_country_0">
                            @endif
                        </span>
                        <span style="width:5px;"> <a class="info">
                                <p>Enter your Office Number (land line or fixed phone) number along with area and
                                    international
                                    dialing code.<br />Example: +92-51-12345678</p>
                            </a>
                        </span>
                    </div>
                    <div id="div_phone_add_0" style="">
                        <b>Fax No:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </b>
                        <span>
                            @if (!empty($agency->fax_number))
                                <input style="width:187px" value="{{ $agency->fax_number }}" maxlength="13"
                                    name="fax_number" id="phone_country_0">
                            @else
                                <input style="width:187px" maxlength="13" name="fax_number" id="phone_country_0">
                            @endif
                        </span>
                        <span style="width:5px;"> <a class="info">
                                <p>Enter your FAx Number (land line or fixed phone) number along with area and international
                                    dialing code.<br />Example: +92-51-12345678</p>
                            </a>
                        </span>
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
                    <div class="city_input">
                        <b>City:&nbsp;<img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></b>
                        <span>
                            <select name="city_name" id="city_id_profile" style="width:190px">
                                <option value=''>Select City</option>
                                @foreach ($city as $value)
                                    <option value='{{ $value->name }}'>{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </span>
                        <a class="info">
                            <p>Please select your city of residence from the given list</p>
                        </a>
                    </div>
                    <div>
                        <b>About Your Agency:&nbsp;</b>
                        <span>
                            <textarea name="descripition" cols="50" rows="8" id="com_about" size="35" maxlength="100"
                                style="width:188px;text-align:left;">{{ $agency->descripition ?? '' }}</textarea>
                        </span>
                        <a class="info">
                            <p>Please provide information about your agency. You could tell us about your work, your
                                interests,
                                lifestyle, nature and other related information about your personality.</p>
                        </a>
                    </div>
                    <div>
                        <b>Current Agency Logo:</b>
                        <span>
                            <table style="border:1px solid #E0E0E0">
                                <tr>
                                    <td style="padding:8px;">
                                        @if (!empty($agency->image))
                                            <img src="{{ asset('assets/images/agency/' . $agency->image) ?? '' }}" alt=""
                                                width="50" height="50">
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
    <script src="{{ URL::asset('assets/themeJquery/customeruser/agencyjquery.js') }}"></script>
@endsection
