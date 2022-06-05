@extends('userside.layout')
@section('main')
    @include('userside.layouts.agency_staff_sidebar')
    @if(Auth::user()->roles)
    <div id="rightcolumn" style="
            width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=7&section=agedit_user">Agency
                    Staff</a> &raquo; Add New User </span>
        </div>
        <div class="box_title">
            <div><b>Add New User</b></div>
        </div>
        <div id="ag_users" class="new_user_div" style="display:block;overflow:hidden;float:left;width:98%;">
            <form method="POST">
                <hr size="4" class="postlistingProperty_separator">
                <label class="newlistingdiv_innerheading">User Details</label>
                <div>
                    <label>E-mail: <img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                    <span><input size="39" type="text" size="40" name="mail" value="" /></span>
                </div>

                <div>
                    <label>Password: <img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                    <span><input size="39" type="password" name="pass" value="" /></span>
                </div>
                <div>
                    <label>Password (confirm): <img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                    <span><input size="39" type="password" name="pass2" value="" /></span>
                </div>

                <div>
                    <label>Name: <img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                    <span><input size="39" type="text" name="contact_person" value="" /></span>
                </div>


                <div id="div_cell_add_0" style="">
                    <label>Cell:</label>
                    <span>
                        <input type="text" style="width: 30px;" value="+92" maxlength="12" name="cell_code">
                        &nbsp;&nbsp;
                        <input type="text" style="width: 160px;" value="" maxlength="100" name="cell">
                    </span>
                    {{-- <span style="float:left; margin-left:20px;"><img src="https://assets.zameen.com/profolio/images/add_more_cell1_1.png" border="0" onclick="show_cell_numbers_fields(this,0)" align="top" /></span> --}}
                </div>
                <div>
                    <label>Address:</label>
                    <span><input size="39" type="text" name="address" maxlength="100" value="" /></span>
                </div>
                <div>
                    <label>Zip Code:</label>
                    <span><input size="39" type="text" name="zip_code" maxlength="100" value="" /></span>
                </div>
                <div>
                    <label>Country: <img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                    <span>

                        <select name="country" id="country" style="width:210px;">
                            <option value="0" selected='selected'>Select Your Country</option>
                            <option value="1">Pakistan</option>
                            <option value="210">United Arab Emirates</option>
                        </select>
                    </span>
                </div>

                <div id="city_div" style="display:none">
                    <label>City: <img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                    <span>

                        <select name="city" id="city" style="width:210px;">
                            <option value="0" selected='selected'>Select Your City</option>
                            <option value='1'>Lahore</option>
                            <option value='2'>Karachi</option>
                            <option value='3'>Islamabad</option>
                            <option value='15'>Multan</option>
                            <option value='16'>Faisalabad</option>
                        </select>
                    </span>
                </div>
                <div>
                    <hr size="4" class="postlistingProperty_separator">
                    <span class="newlistingdiv_innerheading">Assign Listing Quota</span>
                </div>
                <div style="margin-bottom:10px;">
                    <label>Listing Quota:</label>
                    <span><input size="39" type="text" name="standard_quota" value="" /></span>
                    <span style="margin-left:10px;">3 Available</span>
                    &nbsp;&nbsp;
                    <a href="https://www.zameen.com/contactus.html" target="_blank"><u>Contact us</u></a>
                    &nbsp; or &nbsp;
                    <a href="{{ asset('userside') }}/profolio/index.php?tabs=13&section=advertise&product=2"
                        target="_blank"><u>Contact us to increase listing quota</u></a>
                </div>
                <!--    Olx quota field is commented for the time being, might be needed in the future-->
                <!--    -->
                <!--    <div style="margin-bottom:10px;">-->
                <!--        <label>-->
                <!--:</label>-->
                <!--        <span><input style="width: 238px;" size="39" type="text" name="olx_quota" value="-->
                <!--"  /></span>-->
                <!--        <span style="margin-left:10px;">-->
                <!--</span>-->
                <!--        &nbsp;&nbsp;-->
                <!--        <a href="-->
                <!--/contactus.html" target="_blank"><u>-->
                <!--</u></a>-->
                <!--    </div>-->
                <div>
                    <label>Hot Quota:</label>
                    <span><input size="39" type="text" name="hot_quota" value="" /></span>
                    <span style="margin-left:10px;">0 Available</span>
                    <span style="margin-left:17px; padding-bottom:5px;">
                        <a href="#" target="_blank" class="orangeTxt">Buy Hot Listings</a>
                        &nbsp;
                        <a href="javascript:void(0);" class="propinfo_link"
                            onmouseover="return overlib('1. Please contact us via e-mail or call us on 0800-ZAMEEN (92633), +92 42 32560445 (9:am to 6:00pm working days) to purchase Hot Listings<br /><br />2. After you have purchased Hot Property Listings, you can turn any basic listing into a Hot listing by simply clicking the Chilli [ <img src=https://profolio.zameen.com/images/common/grey_chilli.png border=0> ] button in your property controls. The image will turn red [ <img src=https://profolio.zameen.com/images/common/hot_icon.png border=0> ] if the listing is successfully updated.<br ><br />3. A single hot listing credit will be deducted from your quota and your listing will remain hot for a period of <b>30 days</b> after which the status will automatically change to a basic listing.<br /><br />4. Just a word of advice: Once a credit has been utilized, it cannot be re-used, so select your basic listing carefully and make sure that you want to turn it Hot.',CAPTION,'How to use Hot Property Listing Credits',WIDTH,550,LEFT,ABOVE);"
                            onmouseout="return nd();">&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </span>
                </div>
                <div>
                    <label>&nbsp;</label>
                    <input type="image" name="register" value="Submit Registration"
                        src="{{ asset('userside') }}/profolio/images/create_team1_1.png" />
                    <br>
                </div>
                <div>
                    <label>&nbsp;</label>
                    <span>&nbsp;</span>
                </div>

            </form>
        </div>

    </div>
    <p>end</p>
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
    {{-- <script type="text/javascript">
        function show_phone_numbers_fields(button, index) {
            if (typeof next_index1 === "undefined") {
                next_index1 = index + 1;
            } else
                next_index1 = next_index1 + 1;
            $(button).hide();
            $("#div_phone_add_" + next_index1).show();
        }

        function show_cell_numbers_fields(button, index) {
            if (typeof next_index === "undefined") {
                next_index = index + 1;
            } else
                next_index = next_index + 1;
            $(button).hide();
            $("#div_cell_add_" + next_index).show();
        }
    </script> --}}
@endsection
