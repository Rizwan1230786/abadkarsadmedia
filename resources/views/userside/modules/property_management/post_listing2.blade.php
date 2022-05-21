@extends('userside.layout')
@section('main')
    @include('userside.layouts.sidebar')
    <div id="rightcolumn" style="
                        width:79% " class="rightcolumn_div post_story_margin">
            <?php
                    if (isset($record->id) && $record->id != 0) {?>
                <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
                    <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=2&section=listings">Property
                            Management</a> &raquo; Edit Listing </span>
                </div>
            <?php
                 }else{?>
                <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
                    <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=2&section=listings">Property
                            Management</a> &raquo; Post Listing </span>
                </div>
               <?php
                 }

                ?>

        <div id="add_prop_main" class="add_prop_main step_1 purpose_ AdvanceSubmision">

            <div class="add_property_page step_1 purpose_ ">
                <div class="clearfix"></div>
                <div class="post-listing-credit-box" style="display: none;">
                    <h3>You do not have credits available on any platforms.</h3>
                    <p>Call the numbers below to buy more quota for the platforms provided below.</p>
                    <div class="contact-credit-info">
                        <div class="zameen-details">
                            <div>
                                <img src="{{ asset('userside') }}/profolio/images/post_listing_credit_box_zlogo1_1.svg"
                                    width="110" alt="zameen.com">
                            </div>
                            <div class="number">
                                Buy now or call<br /><b>0800-ZAMEEN (92633)</b>
                            </div>
                            <a href="{{ asset('userside') }}/profolio/index.php?tabs=13&section=advertise"
                                class="buy-more-btn">Buy More</a>
                        </div>
                        <div class="olx-details">
                            <div>
                                <img src="{{ asset('userside') }}/profolio/images/post_listing_credit_box_olx_logo1_1.svg"
                                    width="27" alt="OLX">
                            </div>
                            <div class="number">
                                Call to buy more quota<br /><b>0800-ZAMEEN (92633)</b>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <?php
                if (isset($record->id) && $record->id != 0) {
                    $url = route('admin:properties_update', [$data['updateId'] ?? 0]);
                } else {
                    $url = route('admin:properties_submit');
                }

                ?>
                <form class="add_property add_property_form singleForm clr" method="post" autocomplete="off"
                    onsubmit="return validate_form()" action="{{ url($url) }}">
                    <div class="message_box" id="error_message_box"
                        style="padding-bottom: 10px;padding-top: 13px;display:none">
                        <div id='msg_box' class='error' style=''><span class='icon_error'></span>
                            <ul class='items  single'>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" id="hidden_buy_credits" name="buy_credits" value="0">
                        <input type="hidden" id="hidden_rent_credits" name="rent_credits" value="0">
                    </div>
                    <div class="subhead font_s ros subhead1">Purpose, Property Type and Location</div>
                    <div class="divrow">
                        <label class="label l font_s">Purpose: <img
                                src='{{ asset('userside') }}/images/common/asteriskred.gif' /></label>
                        <ul id='purpose_push_buttons' class='l push_buttons'>
                            <input type='hidden' name='purpose' id='purpose' value='1' />
                            <li class='l pushBtnLabel checked' id='purpose_label_1'
                                onclick='pushBtnClick(this,"purpose","1")' title='For Sale'>
                                <span class='span'>For Sale</span>
                            </li>
                            <li class='l pushBtnLabel ' id='purpose_label_2' onclick='pushBtnClick(this,"purpose","2")'
                                title='Rent'>
                                <span class='span'>Rent</span>
                            </li>
                        </ul>
                    </div>
                    <div class="divrow div_wantedfor" style="display:none">
                        <label class="label l font_s">Wanted For: </label>
                        <ul id='wanted_for_push_buttons' class='l push_buttons'>
                            <input type='hidden' name='wanted_for' id='wanted_for' value='' />

                            <li class='l pushBtnLabel ' id='wanted_for_label_Buy'
                                onclick='pushBtnClick(this,"wanted_for","Buy")' title='Buy'>
                                <span class='span'>Buy</span>
                            </li>
                            <li class='l pushBtnLabel ' id='wanted_for_label_Rent'
                                onclick='pushBtnClick(this,"wanted_for","Rent")' title='Rent'>
                                <span class='span'>Rent</span>
                            </li>
                        </ul>
                    </div>
                    <div class="divrow">
                        <label class="label l font_s">Property Type: <img
                                src='{{ asset('userside') }}/images/common/asteriskred.gif' /></label>
                        <ul id='ptype_push_buttons' class='l push_buttons'>
                            <input type='hidden' name='ptype' id='ptype' value='' />

                            <li class='l pushBtnLabel ' id='ptype_label_1' onclick='pushBtnClick(this,"ptype","1")'
                                title='Homes'>
                                <span class='span'>Homes</span>
                            </li>
                            <li class='l pushBtnLabel ' id='ptype_label_2' onclick='pushBtnClick(this,"ptype","2")'
                                title='Plots'>
                                <span class='span'>Plots</span>
                            </li>
                            <li class='l pushBtnLabel ' id='ptype_label_3' onclick='pushBtnClick(this,"ptype","3")'
                                title='Commercial'>
                                <span class='span'>Commercial</span>
                            </li>
                        </ul>
                    </div>
                    <div class="divrow div_type" style="display:none">
                        <label class="label l font_s">&nbsp;</label>
                        <div class="l" id="sub_type_box"></div>
                    </div>

                    <!-- /////////////////////CITY///////////////////////// -->
                    <div class="divrow zameen-city-box">
                        <label class="label l font_s">City:</label>
                        <div class=''><select name='city_name' onchange='onchange_city(this)' id='city'>
                                <option value='' selected>Select City</option>
                                @foreach ($city as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select></div>
                        <div class="city_rest_tooltip" style="position: relative; top: -20px; left: 245px; display: none;">
                            <img class="bgc" src="{{ asset('userside') }}/images/common/exclamation.gif"
                                onmouseover="city_restriction_tooltip(this, 'Cross city restriction applied. You can post to specific platform only.');">
                        </div>
                    </div>

                    <div class="divrow">
                        <label class="label l font_s">Location: <img
                                src='{{ asset('userside') }}/images/common/asteriskred.gif' /></label>
                        <div id="location_id_sel_box" class="l autofill cls_rtl sb_text_new">
                            <input type="text" id="location_id_input" class="autofilter disabled" data-value=""
                                value="Then enter location here ..." disabled="disabled" />
                        </div>
                        <input type="hidden" id="location_id_data"
                            value='{"disabled_txt":"Then enter location here ...","default_txt":"Enter location here ...","keyboard":1}' />

                        <input type="hidden" id="last_location" name="last_location" value="" />
                        <div class=" empty_city" id="loc_selector_row">
                            <label class="label l font_s">or</label>
                            <input type="hidden" id="loc_selector" name="loc_selector" value="" />
                            <div id="cat_selector" class="l cat_selector">
                                <span id='_cat_selector_0_sel_box' class='sb_combo sel_box ' style='width:210px'><select
                                        name='_cat_selector_0' id='_cat_selector_0' style='width:211px;' autocomplete='off'>
                                        <option value='' selected>Select from list</option>
                                    </select><span id='_cat_selector_0_txt' class='txt'>Select from list</span>
                                    <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                                </span> <span class="container"></span>
                            </div>
                        </div>

                    </div>
                    <span class="sboxarrow" style="display:none">&raquo;</span>
                    <!-- ADDRESS -->
                    <div class="divrow field_detailed" id="div_address" style="display:none">
                        <label class="label l font_s">Address: </label>
                        <span class="l span" id="sp_unit">
                            <label class="l label1" id="lb_unit">Unit #</label>
                            <input type='text' name='unit_no' id='unit_no' value='' style='width:76px;' class='rfield l ' />
                        </span>
                        <span class="l span" id="sp_street">
                            <label class="l label1">Street #</label>
                            <input type='text' name='street_no' id='street_no' value='' style='width:76px;'
                                class='rfield l ' /> </span>
                        <span class="l span" id="sp_floor">
                            <label class="l label1">Floor #</label>
                            <input type='text' name='floor_no' id='floor_no' value='' style='width:76px;'
                                class='rfield l ' /> </span>
                        <span class="l span" id="sp_plot">
                            <label class="l label1">Plot #</label>
                            <input type='text' name='plot_no' id='plot_no' value='' style='width:76px;' class='rfield l ' />
                        </span>
                    </div>
                    <!-- MAP -->
                    <div class="divrow" id="map_div" style="display:none">
                        <div class="l span_breadcrumb label1" id="span_breadcrumb"></div>
                        <label class="label l font_s clr">Map Pin:</label>
                        <a class="link_select_loc l" onclick="show_map_enlarged({map_field_id:'map_field'})" rel="nofollow"
                            title="Click the map to select your location">
                            <img id="small_map" />
                        </a>
                        <span class="l map_msg_inline" id="map_msg_inline"></span>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                google_image('#small_map', {
                                    latitude: '',
                                    longitude: '',
                                    zoom: 17
                                });
                            });
                        </script>
                        <input type="hidden" id="map_field"
                            value="zoom=16&call_back=map_select_default&small_map=#small_map" autocomplete="off" />
                        <input type="hidden" id="default_params"
                            value="zoom=16&call_back=map_select_default&small_map=#small_map" autocomplete="off" />
                        <input type="hidden" name="mylatitude" id="mylatitude" value="" autocomplete="off" />
                        <input type="hidden" name="mylongitude" id="mylongitude" value="" autocomplete="off" />
                    </div>

                    <div class="subhead font_s ros subhead2" id="property_box_heading">PROPERTY SPECS AND PRICE</div>
                    <div class="divrow">
                        <label class="label l font_s">Area Size: <img
                                src='{{ asset('userside') }}/images/common/asteriskred.gif' /> </label>
                        <input type='text' name='area' id='area' value='' style='width:135px;' class='rfield l ' /> <label
                            class="label_inline l font_s">Unit: </label>
                        <span id='unit_sel_box' class='sb_combo sel_box ' style='width:135px'><select name='unit' id='unit'
                                style='width:136px;' autocomplete='off'>
                                <option value='Square Feet' selected>Square Feet</option>
                                <option value='Square Meters'>Square Meters</option>
                                <option value='Square Yards'>Square Yards</option>
                                <option value='Marla'>Marla</option>
                                <option value='Kanal'>Kanal</option>
                            </select><span id='unit_txt' class='txt'>Square Feet</span>
                            <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                        </span> <span class='bgc infologo2' onmouseover="land_convert_txt2(this,'')">Area Calculator</span>
                        <input type="hidden" id="db_area" value="" />
                        <input type="hidden" id="db_unit" value="Square Feet" />
                    </div>

                    <div class="divrow div_beds" id="div_beds">
                        <label class="label l font_s">Bedrooms:</label>
                        <span id='beds_sel_box' class='sb_combo sel_box ' style='width:150px'><select name='beds' id='beds'
                                style='width:151px;' autocomplete='off'>
                                <option value='' selected>Please Select</option>
                                <option value='-1'>Studio</option>
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                                <option value='6'>6</option>
                                <option value='7'>7</option>
                                <option value='8'>8</option>
                                <option value='9'>9</option>
                                <option value='10'>10</option>
                                <option value='11'>10+</option>
                            </select><span id='beds_txt' class='txt'>Please Select</span>
                            <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                        </span>
                    </div>
                    <div class="divrow div_bathrooms" id="div_bathrooms">
                        <label class="label l font_s">Bathrooms:</label>
                        <span id='baths_sel_box' class='sb_combo sel_box ' style='width:150px'><select name='baths'
                                id='baths' style='width:151px;' autocomplete='off'>
                                <option value='' selected>Please Select</option>
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                                <option value='6'>6</option>
                                <option value='7'>7</option>
                                <option value='8'>8</option>
                                <option value='9'>9</option>
                                <option value='10'>10</option>
                            </select><span id='baths_txt' class='txt'>Please Select</span>
                            <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                        </span>
                    </div>


                    <div class="divrow div_oc_status field_detailed" id="div_oc_status">
                        <label class="label l font_s">Occupancy Status:</label>
                        <span id='occupancy_status_sel_box' class='sb_combo sel_box ' style='width:150px'><select
                                name='occupancy_status' id='occupancy_status' style='width:151px;' autocomplete='off'>
                                <option value='' selected>Please Select</option>
                                <option value='vacant'>Vacant</option>
                                <option value='rented'>Occupied</option>
                            </select><span id='occupancy_status_txt' class='txt'>Please Select</span>
                            <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                        </span> <span class="ib span_rented_till" id="span_rented_till">
                            <label class="label l font_s" style="width: auto; margin: 0px 6px;">Occupied Till:</label>
                            <span id='occupancymonth_sel_box' class='sb_combo sel_box ' style='width:102px'><select
                                    name='occupancymonth' id='occupancymonth' style='width:103px;' autocomplete='off'>
                                    <option value='01' selected>Jan</option>
                                    <option value='02'>Feb</option>
                                    <option value='03'>Mar</option>
                                    <option value='04'>Apr</option>
                                    <option value='05'>May</option>
                                    <option value='06'>Jun</option>
                                    <option value='07'>Jul</option>
                                    <option value='08'>Aug</option>
                                    <option value='09'>Sep</option>
                                    <option value='10'>Oct</option>
                                    <option value='11'>Nov</option>
                                    <option value='12'>Dec</option>
                                </select><span id='occupancymonth_txt' class='txt'>Jan</span>
                                <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                            </span><span id='occupancyyear_sel_box' class='sb_combo sel_box ' style='width:102px'><select
                                    name='occupancyyear' id='occupancyyear' style='width:103px;' autocomplete='off'>
                                    <option value='2022' selected>2022</option>
                                    <option value='2023'>2023</option>
                                    <option value='2024'>2024</option>
                                    <option value='2025'>2025</option>
                                    <option value='2026'>2026</option>
                                    <option value='2027'>2027</option>
                                    <option value='2028'>2028</option>
                                    <option value='2029'>2029</option>
                                    <option value='2030'>2030</option>
                                    <option value='2031'>2031</option>
                                    <option value='2032'>2032</option>
                                    <option value='2033'>2033</option>
                                    <option value='2034'>2034</option>
                                    <option value='2035'>2035</option>
                                    <option value='2036'>2036</option>
                                    <option value='2037'>2037</option>
                                    <option value='2038'>2038</option>
                                    <option value='2039'>2039</option>
                                    <option value='2040'>2040</option>
                                    <option value='2041'>2041</option>
                                    <option value='2042'>2042</option>
                                </select><span id='occupancyyear_txt' class='txt'>2022</span>
                                <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                            </span> </span>
                    </div>

                    <div class="divrow price_div">
                        <label class="label l font_s pheading display-block">Total Price: <img
                                src='{{ asset('userside') }}/images/common/asteriskred.gif' /> </label>
                        <input type='text' name='price' id='price' value='' style='width:228px;' class='rfield l ' />
                    </div>
                    <div class="divrow price_div">
                        <label class="label l font_s">&nbsp;</label>
                        <span class="l price_text txtfont ltr">&nbsp;</span>
                    </div>

                    <div class="divrow div_instalments">
                        <label class="label l font_s">Installments Available: </label>
                        <ul id="instalment_status_push_buttons" class="l push_buttons">
                            <input type="hidden" name="instalment_status" id="instalment_status" value="">
                            <li class="l pushBtnLabel instalment_status " onclick="show_instalment_boxes(this)"
                                style="border-radius: 4px;">
                                <span class="span">Property on Installment</span>
                            </li>
                        </ul>
                    </div>
                    <div class="instalments-box " style="display: none;">
                        <div class="divrow ">
                            <label class="label l font_s pheading display-block">Advance/Initial Payment: <img
                                    src='{{ asset('userside') }}/images/common/asteriskred.gif' /> </label>
                            <input type='text' name='adv_amount' id='adv_amount' value='' style='width:228px;'
                                class='rfield l ' />
                        </div>
                        <div class="divrow">
                            <label class="label l font_s pheading display-block">No. of Remaining Installments: <img
                                    src='{{ asset('userside') }}/images/common/asteriskred.gif' /> </label>
                            <input type='text' name='no_of_instalments' id='no_of_instalments' value='' style='width:228px;'
                                class='rfield l ' />
                        </div>
                        <div class="divrow">
                            <label class="label l font_s pheading display-block">Monthly Installment: <img
                                    src='{{ asset('userside') }}/images/common/asteriskred.gif' /> </label>
                            <input type='text' name='monthly_instalments' id='monthly_instalments' value=''
                                style='width:228px;' class='rfield l ' />
                        </div>
                    </div>
                    <div class="divrow div_possession">
                        <label class="label l font_s display-block">Possession Available: </label>
                        <ul id="possession_available_push_buttons" class="l push_buttons">
                            <input type="hidden" name="possession_available" id="possession_available" value="">
                            <li class="l pushBtnLabel possession_available " onclick="show_checkbox_icon(this)"
                                title="Possession Available:" style="border-radius:4px;">
                                <span class="span">Available</span>
                            </li>
                        </ul>
                    </div>

                    <div class="divrow field_detailed" style="display:block">
                        <label class="label l font_s">Listing Expiry:</label>
                        <span id='expiry_days_sel_box' class='sb_combo sel_box ' style='width:150px'><select
                                name='expiry_days' id='expiry_days' style='width:151px;' autocomplete='off'>
                                <option value='30' selected>1 Month</option>
                                <option value='90'>3 Months</option>
                                <option value='180'>6 Months</option>
                            </select><span id='expiry_days_txt' class='txt'>1 Month</span>
                            <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                        </span>
                    </div>

                    <div class="divrow div_features" style="display:none">
                        <label class="label l font_s">&nbsp;<span class="feature_label">Features:</span></label>
                        <a class="l orng_smore popup_features">Add Features</a>
                    </div>

                    <div class="divrow div_features" style="display:none">
                        <label class="label l font_s">&nbsp;<span class="feature_label">Features:</span></label>
                        <span class="l num_of_feature_text"> <span class='features_count'></span> Features Selected</span>
                        <a class="l orng_smore popup_features">Add More Features</a>
                    </div>

                    <div id="hfeatures"></div>

                    <div class="divrow price-hide" id="price_notification" style="display: none;">
                        <label class="label l font_s">&nbsp;</label>
                        <div class="notification_outer notification_default">
                            <span class="notification_img"></span>
                            <span class="notification_txt"></span>
                        </div>
                    </div>

                    <div id="rental_prices" style="display:none">
                        <div class="subhead font_s ros subhead3">Rental Price Details</div>
                        <div class="divrow" style="display:block">
                            <label class="label l font_s">Minimum Contract Period:</label>
                            <span id='txt_contract_period_sel_box' class='sb_combo sel_box ' style='width:150px'><select
                                    name='txt_contract_period' id='txt_contract_period' style='width:151px;'
                                    autocomplete='off'>
                                    <option value='' selected>Please Select</option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='5'>5</option>
                                    <option value='6'>6</option>
                                    <option value='7'>7</option>
                                    <option value='8'>8</option>
                                    <option value='9'>9</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12'>12</option>
                                </select><span id='txt_contract_period_txt' class='txt'>Please Select</span>
                                <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                            </span><span id='sel_contract_period_sel_box' class='sb_combo sel_box '
                                style='width:150px'><select name='sel_contract_period' id='sel_contract_period'
                                    style='width:151px;' autocomplete='off'>
                                    <option value='' selected>Please Select</option>
                                    <option value='year'>Year</option>
                                    <option value='month'>Month</option>
                                </select><span id='sel_contract_period_txt' class='txt'>Please Select</span>
                                <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                            </span>
                        </div>
                        <div class="divrow" style="display:block">
                            <label class="label l font_s">Monthly Rent: <img
                                    src='{{ asset('userside') }}/images/common/asteriskred.gif' /></label>
                            <input type='text' name='rental' id='rental' value='' style='width:136px;' class='rfield l ' />
                        </div>
                        <div class="divrow">
                            <label class="label l font_s">&nbsp;</label>
                            <span class="l price_text">&nbsp;</span>
                        </div>
                        <div class="divrow" style="display:block">
                            <label class="label l font_s">Security Deposit:</label>

                            <input type='text' name='security_deposit' id='security_deposit' value='' style='width:136px;'
                                onblur='rentalFieldsBlur(this);' class='rfield l ' /> <label
                                class="label_inline l font_s">or</label>
                            <input type='text' name='security_deposit_perc' id='security_deposit_perc' value=''
                                style='width:85px;' onblur='rentalFieldsBlur(this);' class='rfield l ' /> <label
                                class="label_inline l font_s">number of month's rental amount </label>
                        </div>

                        <div class="divrow" style="display:block">
                            <label class="label l font_s">Advance Rent:</label>
                            <input type='text' name='advance_rent' id='advance_rent' value='' style='width:136px;'
                                onblur='rentalFieldsBlur(this);' class='rfield l ' /> <label
                                class="label_inline l font_s">or</label>
                            <input type='text' name='advance_rent_perc' id='advance_rent_perc' value='' style='width:85px;'
                                onblur='rentalFieldsBlur(this);' class='rfield l ' /> <label
                                class="label_inline l font_s">number of month's rental amount </label>
                        </div>
                    </div>

                    <div class="subhead font_s ros subhead2">Property Title and Description</div>
                    <div class="divrow">
                        <label class="label l font_s">Property Title: <img
                                src='{{ asset('userside') }}/images/common/asteriskred.gif' /></label>
                        <input type='text' name='title' id='title' value='' style='width:419px;' class='rfield l '
                            placeholder='Enter property title here...' /><br>
                        <div id="title_validation">*Minimum of 5 characters required </div>
                    </div>

                    <div class="divrow">
                        <label class="label l font_s">Description: <img
                                src='{{ asset('userside') }}/images/common/asteriskred.gif' /></label>
                        <textarea name="description" id="description" style="width:418px" rows="5" class="rfield l"
                            placeholder="Enter property description here..."></textarea><br>
                        <div id="description_validation">*Minimum of 20 characters required </div>
                    </div>

                    <div id="UploadImages" class="uploaderbox uploaderbox_images UploadImages noItems">
                        <div class="subhead font_s ros subhead_img">Images</div>

                        <div class="clr info_msg l drag_images_message" style="margin-bottom: 13px;">Drag & drop images to
                            change order</div>
                        <div class="clr info_msg l multipleuploader" style="margin-bottom: 13px;display:none">Please use
                            firefox or chrome to upload multiple images at once</div>
                        <ul class="list_sortable" id="images_list" data-sortable_selector="#images_list"
                            data-sortable_key="img_order"></ul>

                        <div class="clr">
                            <div class="filecontrol_images">
                                <a id="add_more_images" class="l orng_smore mr-bt10 fileUpload">Add Images</a>
                                <div class="info_msg l multiple_key_message">Press CTRL key while selecting images to
                                    upload multiple images at once</div>
                                <input type="hidden" id="image_ids" name="image_ids" value="" autocomplete="off" />
                                <a class="orng_smore get_image_bank clr l" onclick="get_from_bank(this,'get_image_bank')"
                                    data-title="My Image Bank">Add image from image bank</a>
                            </div>
                            <div class="uploading_images" style="display:none">
                                <img class="l pleasewait"
                                    src="{{ asset('userside') }}/images/common/pleasewait.gif" />
                                <span class="l">Uploading. Please Wait...</span>
                            </div>
                        </div>
                        <div class="clr message_box_files" style="display:none;"></div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            path_uploader_images = request_url_image + "&ajaxUpload=img";
                            uploader_images = new plupload.Uploader({
                                browse_button: 'add_more_images',
                                url: path_uploader_images,
                                filters: {
                                    mime_types: [{
                                        title: "Image files",
                                        extensions: "jpg,gif,png,jpeg"
                                    }]
                                },
                                resize: {
                                    width: 800,
                                    height: 800,
                                    crop: false,
                                    quality: 100
                                },
                                init: {
                                    FilesAdded: function(up, files) {
                                        uploader_images.settings.url = path_uploader_images + "&edit_property=" +
                                            edit_property_page;
                                        up.start();
                                    },
                                    StateChanged: function(up) {
                                        if (up.state == plupload.STARTED) {
                                            $(".filecontrol_images").hide();
                                            $(".uploading_images").show();
                                        } else {
                                            $(".filecontrol_images").show();
                                            $(".uploading_images").hide();
                                        }
                                    },
                                    FileUploaded: function(up, file, info) {
                                        result = FileUploadedCallback(up, file, info, 'images');
                                        all_img_ids = result[4];
                                        if (all_img_ids) {
                                            $("#image_ids").val(all_img_ids);
                                        }
                                    },
                                    BeforeUpload: function(up) {
                                        up.settings.multipart_params = {
                                            'image_ids': $("#image_ids").val()
                                        };
                                    }
                                }
                            });
                            uploader_images.init();
                        });
                    </script>
                    <script type="text/javascript">
                        key = parseInt("0");
                        image_upload_limit = parseInt("50");
                    </script>
                    <div id="Uploadvideos" class="uploaderbox Uploadvideos noItems">
                        <div class="subhead font_s ros subhead_img">Videos</div>

                        <div class="clr info_msg l drag_videos_message" style="margin-bottom: 13px;">Drag & drop videos to
                            change order</div>
                        <ul class="list_sortable" id="videos_list" data-sortable_selector="#videos_list"
                            data-sortable_key="video_order">
                        </ul>

                        <li id='ListItem_' class='ListItem video_listing_zpt' style='display:none;'>
                            <span class='num txtfont'>1</span>
                            <div class='thumb2'>

                            </div>
                            <div class='l subdiv'>
                                <div class='drow'>
                                    <span>Video Status:</span> <input type='text' class='rfield l video_status readonly'
                                        name='video_status[]' value='Pending' disabled />
                                </div>
                                <div class='drow'>
                                    <span>Video Link:</span> <input type='text' class='rfield l' name='video_link[]'
                                        value='' />
                                    <span>Video Title:</span> <input type='text' class='rfield l' name='video_title[]'
                                        value='' />
                                </div>
                                <span class='l clr'>Video Host:</span> <select class='rfield l video_host_id'
                                    name='video_host[]' autocomplete='off'>
                                    <option value=''>Select</option>
                                    <option value='youtube' autocomplete='off'>Youtube</option>
                                    <option value='vimeo' autocomplete='off'>Vimeo</option>
                                    <option value='dailymotion' autocomplete='off'>Dailymotion</option>
                                    <option value='3d_view' autocomplete='off'>3D View</option>
                                </select>
                                <a id='a_1' class='removeImg clr l onserver remove_video'
                                    onclick='remove_video("",this)'>Remove this Video</a>
                                <input type='hidden' class='js_field' name='video_id[]' value='' />
                            </div>
                        </li>
                        <div class="clr">
                            <div class="filecontrol">

                                <a id="add_more_videos" onclick="check_image_count('add_more_videos')"
                                    class="l orng_smore">Add Videos</a>
                            </div>
                            <div class="uploading" style="display:none">
                                <img class="l pleasewait"
                                    src="{{ asset('userside') }}/images/common/pleasewait.gif" />
                                <span class="l">Uploading. Please Wait...</span>
                            </div>
                        </div>

                        <input type="hidden" name="save_videos" value="1" />
                    </div>
                    <script type="text/javascript">
                        key = parseInt("1");
                        video_upload_limit = parseInt("10");
                    </script>
                    <div id="Uploaddocuments" class="uploaderbox uploaderbox_documents Uploaddocuments noItems">
                        <div class="subhead font_s ros subhead_img">Documents</div>

                        <div class="clr info_msg l drag_documents_message" style="margin-bottom: 13px;">Drag & drop
                            documents to change order</div>
                        <ul class="list_sortable" id="documents_list" data-sortable_selector="#documents_list"
                            data-sortable_key="documents_order"></ul>

                        <div class="clr message_box_files" style="display:none;"></div>
                        <!-- <br /> -->
                        <div class="clr">
                            <div class="filecontrol_documents">
                                <a id="add_doc" class="l orng_smore">Add document</a>
                                <div class="info_msg l multiple_key_message">Press CTRL key while selecting documents to
                                    upload multiple documents at once</div>
                                <input type="hidden" id="document_ids" name="document_ids" value="" autocomplete="off" />
                            </div>
                            <div class="uploading_documents" style="display:none">
                                <img class="l pleasewait"
                                    src="{{ asset('userside') }}/images/common/pleasewait.gif" />
                                <span class="l">Uploading. Please Wait...</span>
                            </div>
                        </div>

                        <input type="hidden" name="save_documents" value="1" />
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            path_uploader_documents = request_url + "&ajaxUploadDocs=1";
                            uploader_documents = new plupload.Uploader({
                                browse_button: 'add_doc',
                                url: path_uploader_documents,
                                filters: {
                                    mime_types: [{
                                        extensions: "jpg,gif,png,jpeg"
                                    }]
                                },
                                init: {
                                    FilesAdded: function(up, files) {
                                        uploader_documents.settings.url = path_uploader_documents + "&edit_property=" +
                                            edit_property_page;
                                        up.start();
                                    },
                                    StateChanged: function(up) {
                                        if (up.state == plupload.STARTED) {
                                            $(".filecontrol_documents").hide();
                                            $(".uploading_documents").show();
                                        } else {
                                            $(".filecontrol_documents").show();
                                            $(".uploading_documents").hide();
                                        }
                                    },
                                    FileUploaded: function(up, file, info) {
                                        result = FileUploadedCallback(up, file, info, 'documents');
                                        all_doc_ids = result[4];
                                        if (all_doc_ids) {
                                            $("#document_ids").val(all_doc_ids);
                                        }
                                    },
                                    BeforeUpload: function(up) {
                                        up.settings.multipart_params = {
                                            'document_ids': $("#document_ids").val()
                                        };
                                    }
                                }
                            });
                            uploader_documents.init();
                        });
                    </script>
                    <script type="text/javascript">
                        key = parseInt("0");
                        document_upload_limit = parseInt("50");
                    </script>
                    <div class="subhead font_s ros subhead3">Contact Details</div>

                    <div class="divrow">
                        <label class="label l font_s">Listing Owner: </label>
                        <span id='listing_owner_sel_box' class='sb_combo sel_box ' style='width:242px'><select
                                name='listing_owner' onchange='listing_owner_change(this); ' id='listing_owner'
                                style='width:243px;' autocomplete='off'>
                                <option value='1001388906' selected>Myself</option>
                            </select><span id='listing_owner_txt' class='txt'>Myself</span>
                            <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                        </span> <a class="l add_price_breakdown" style="margin-left: 10px;" href="javascript:void(0)"
                            onclick='show_users_list();'>Load user info</a>
                    </div>

                    <script type="text/javascript">
                        agency_users_list = {
                            "1001388906": {
                                "userid": "1001388906",
                                "name": "Muhammad Rizwan Akhtar",
                                "email": "rizwan.13347@gmail.com",
                                "phone": null,
                                "cell": null,
                                "fax": null
                            }
                        };
                    </script>
                    <div class="imz_dialog" id="users_list_dialog" style="display:none">
                        <!-- price_breakdown_dialog -->
                        <div class="title_div">
                            <span class="dialog_title">Users List</span>
                            <span onclick="imz_filter.click()" class="dialog_close"></span>
                        </div>
                        <div class="dialog_container" id="pricedown_main">
                            <div class="cluetip_div">
                                <div class="rowdiv">
                                    <label class="pblabel">Select User</label>
                                    <select class='rfield l' id='users_list' name='users_list'>
                                        <option value='1001388906'>Myself</option>
                                    </select>
                                </div>

                                <div class="rowdiv" style="">
                                    <label class="pblabel">&nbsp;</label>
                                    <span onclick="listing_owner_change_new($('#users_list'));"
                                        class="clr submit_button l bgdgry ros smargin">
                                        Load Info </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divrow">
                        <label class="label l font_s">Contact Person: <img
                                src='{{ asset('userside') }}/images/common/asteriskred.gif' /> </label>
                        <input type='text' name='name' id='name'
                            value='{{ Auth::guard('customeruser')->user()->firstname }}' style='width:228px;'
                            class='rfield l ' />
                        <div class="bgc infologo r">
                            <p>Please enter your first and last name respectively.</p>
                        </div>
                    </div>
                    <!--
                                        class put_cell_input_after_this added, the purpose of this class is just to put a new cell field after it through a js function, that is being called on select contact person
                                        dropdown
                                        -->
                    <div class="divrow put_cell_input_after_this">
                        <label class="label l font_s">Landline Phone #: </label>
                        <span class="ph_input_box l">
                            <input type='text' name='phone0' id='phone0'
                                value='{{ Auth::guard('customeruser')->user()->contact }}' style='width:33px;'
                                maxlength='6'
                                onfocus='overlib_info(this,"Enter your country code.&lt;br /&gt;Example: &lt;b class=red&gt;+92&lt;/b&gt;-51-1234567")'
                                class='rfield l ' /> <label class="separator">-</label>
                            <input type='text' name='phone1' id='phone1' value='' style='width:33px;' maxlength='6'
                                onfocus='overlib_info(this,"Enter your area code.&lt;br /&gt;Example: +92-&lt;b class=red&gt;51&lt;/b&gt;-1234567")'
                                class='rfield l ' /> <label class="separator">-</label>
                            <input type='text' name='phone2' id='phone2' value='' style='width:112px;' maxlength='500'
                                onfocus='overlib_info(this,"Enter your phone number.&lt;br /&gt;Example: +92-51-&lt;b class=red&gt;1234567&lt;/b&gt;")'
                                class='rfield l ' /> </span>
                        <div class="bgc infologo r">
                            <p>Enter your phone (land line or fixed phone) number along with area and international dialing
                                code.<br />Example: +92-51-12345678</p>
                        </div>
                    </div>

                    <div class="divrow cellinputs">
                        <label class="label l font_s">Mobile #1: <img
                                src='{{ asset('userside') }}/images/common/asteriskred.gif' /></label>
                        <span class="ph_input_box l">
                            <input type='text' name='cell[]' id='cell1' value='' style='width:245px;' maxlength='100'
                                class='rfield l ' /><span id="valid-msg-cell1" class="valid-msg-cell"
                                style="display: none"></span>
                            <span id="error-msg-cell1" onmouseover="show_cell_message_tooltip(this)" class="error-msg-cell"
                                style="display: none"></span> </span>

                        <div class="bgc infologo r">
                            <p>Enter your mobile number along with international dialing code.<br />Example: +92-3001234567
                            </p>
                        </div>
                        <a class="l add_price_breakdown add_new_cell_input_listing_form" id="add_cell_id"
                            style="margin-left: 10px;" href="javascript:void(0)"
                            onclick='add_new_cell_input_listing_form(this.id);'>Add Another Mobile Number</a>
                    </div>


                    <div class="divrow">
                        <label class="label l font_s">Email: <img
                                src='{{ asset('userside') }}/images/common/asteriskred.gif' /></label>
                        <input type='text' name='email' id='email'
                            value='{{ Auth::guard('customeruser')->user()->email }}' style='width:228px;'
                            class='rfield l ' />
                    </div>
                    <input type="hidden" name="selector" value="0" id="selector" autocomplete="off" />
                    <input type="hidden" name="userid" value="1001388906" id="userid" autocomplete="off" />
                    <input type="hidden" name="step_value" id="step_value" value="1" autocomplete="off" />
                    <input type="hidden" name="image_bank_ids" id="image_bank_ids" />
                    <input type="hidden" name="main_img_id" id="main_img_id" />
                    <input type="hidden" name="property_form_type" value="add" />
                    <input type="submit" name="add_property" value="1" style="visibility: hidden; position: absolute;" />

                    <div class="imz_dialog" id="popup_features" style="display:none">
                        <div class="title_div">
                            <span class="dialog_title">Add Features</span>
                            <span onclick="imz_filter.click()" class="dialog_close"></span>
                        </div>
                        <div class="dialog_container"></div>
                    </div>


                    <div class="divrow btn-sec-bottom">
                        <label class="label l font_s"> &nbsp;</label>
                        <span style="display:none;" id="direct_submit" class="btn1 submit_button l bgdgry ros smargin"
                            onclick="submit_button_click();">
                            Submit Property </span>
                        <span class="btn1 submit_button l bgdgry ros smargin "
                            onclick="check_premium_quota('direct_submit', 'add');">
                            Submit Property </span>

                    </div>

            </div>
            </form>
            <div id='hidden_type_1' style='display:none'>
                <ul id='type_push_buttons' class='l push_buttons'>
                    <input type='hidden' name='type' id='type' value='' />

                    <li class='l pushBtnLabel ' id='type_label_9' onclick='pushBtnClick(this,"type","9")' title='House'>
                        <span class='span'>House</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_8' onclick='pushBtnClick(this,"type","8")' title='Flat'>
                        <span class='span'>Flat</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_21' onclick='pushBtnClick(this,"type","21")'
                        title='Upper Portion'>
                        <span class='span'>Upper Portion</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_22' onclick='pushBtnClick(this,"type","22")'
                        title='Lower Portion'>
                        <span class='span'>Lower Portion</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_20' onclick='pushBtnClick(this,"type","20")'
                        title='Farm House'>
                        <span class='span'>Farm House</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_24' onclick='pushBtnClick(this,"type","24")' title='Room'>
                        <span class='span'>Room</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_25' onclick='pushBtnClick(this,"type","25")'
                        title='Penthouse'>
                        <span class='span'>Penthouse</span>
                    </li>
                </ul>
            </div>
            <div id='hidden_type_2' style='display:none'>
                <ul id='type_push_buttons' class='l push_buttons'>
                    <input type='hidden' name='type' id='type' value='' />

                    <li class='l pushBtnLabel ' id='type_label_12' onclick='pushBtnClick(this,"type","12")'
                        title='Residential Plot'>
                        <span class='span'>Residential Plot</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_11' onclick='pushBtnClick(this,"type","11")'
                        title='Commercial Plot'>
                        <span class='span'>Commercial Plot</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_19' onclick='pushBtnClick(this,"type","19")'
                        title='Agricultural Land'>
                        <span class='span'>Agricultural Land</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_27' onclick='pushBtnClick(this,"type","27")'
                        title='Industrial Land'>
                        <span class='span'>Industrial Land</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_23' onclick='pushBtnClick(this,"type","23")'
                        title='Plot File'>
                        <span class='span'>Plot File</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_26' onclick='pushBtnClick(this,"type","26")'
                        title='Plot Form'>
                        <span class='span'>Plot Form</span>
                    </li>
                </ul>
            </div>
            <div id='hidden_type_3' style='display:none'>
                <ul id='type_push_buttons' class='l push_buttons'>
                    <input type='hidden' name='type' id='type' value='' />

                    <li class='l pushBtnLabel ' id='type_label_13' onclick='pushBtnClick(this,"type","13")' title='Office'>
                        <span class='span'>Office</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_15' onclick='pushBtnClick(this,"type","15")' title='Shop'>
                        <span class='span'>Shop</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_17' onclick='pushBtnClick(this,"type","17")'
                        title='Warehouse'>
                        <span class='span'>Warehouse</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_14' onclick='pushBtnClick(this,"type","14")' title='Factory'>
                        <span class='span'>Factory</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_16' onclick='pushBtnClick(this,"type","16")'
                        title='Building'>
                        <span class='span'>Building</span>
                    </li>
                    <li class='l pushBtnLabel ' id='type_label_18' onclick='pushBtnClick(this,"type","18")' title='Other'>
                        <span class='span'>Other</span>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            property_type = 0;
            old_purpose = '';
            $(document).ready(function() {
                property_type = $("#type").val();
                $("#price,#area,#rental").keyup();
                $("#rental").change(); //COMMENT: rental fields onblur
                pushBtnClick("purpose");
                pushBtnClick("ptype");
                pushBtnClick("type");
            });
            error_messages = {};
            error_messages["purpose"] = "Please select purpose";
            error_messages["wanted_for"] = "Please select wanted for";
            error_messages["type"] = "Please select property type";
            error_messages["city"] = "Please select city";
            error_messages["cat_id"] = "Please select location";
            error_messages["location_id"] = "Please select location";
            error_messages["phone"] = "Please specify phone";
            error_messages["phone0"] = "Please specify country code";
            error_messages["phone1"] = "Please specify area code";
            error_messages["phone2"] = "Please specify phone";
            error_messages["title"] = "Please specify title";
            error_messages["title_limit"] = "Title must be 5 characters";
            error_messages["description"] = "Please specify description";
            error_messages["description_limit"] = "Description must be 20 characters";
            error_messages["price1"] = "Please specify total price";
            error_messages["min_price"] = "Please specify valid total price";
            error_messages["min_rental"] = "Please specify valid monthly rent";
            error_messages["landarea"] = "Please specify valid area";
            error_messages["price2"] = "Please specify monthly rent";
            error_messages["price3"] = "Please specify budget";
            error_messages["area"] = "Please specify area";
            error_messages["name"] = "Please specify contact person.";
            error_messages["cell"] = "Please specify contact person cell number.";
            error_messages["cell_val_err"] = "Please specify correct contact person cell number.";
            error_messages["email"] = "Please specify email.";
            error_messages["email_format"] = "Your email address does not follow the basic format.";
            error_messages["file_name"] = "Please specify image title";
            error_messages["file"] = "Please specify image file";
            error_messages["login"] = "Please specify login";
            error_messages["password"] = "Please specify password";
            error_messages["security_code"] = "Please specify security code";
            error_messages["fullname"] = "Please specify name";
            error_messages["client_email"] = "Please specify client email";
            error_messages["client_email_format"] = "Client email address does not follow the basic format.";
            error_messages["client_name"] = "Please specify client name";
            error_messages["client_type"] = "Please specify client type";
            error_messages["olx_api_error"] = "Something went wrong, Please try again later!";
            error_messages["platform_select"] = "Please select atleast 1 platform";
            error_messages["instalment_status"] = "Please select installments available";
            error_messages["possession_available"] = "Please select possession available";
            error_messages["adv_amount"] = "Please specify advance amount";
            error_messages["monthly_instalments"] = "Please specify monthly installments";
            error_messages["no_of_instalments"] = "Please specify no. of installments";
            error_messages["adv_amount_greater"] = "Advance amount should be less than the total price";
            error_messages["monthly_instalments_greater"] = "Installment amount can not be greater than the remaining amount";
        </script>
        <span class="hot_listings_txt" style="display: none;">Hot listings generate <b>400% more exposure</b> and response
            as compared to basic listings<br /><br />Displayed on <b>home page</b> as featured properties with <b>top
                ranks</b> and positions in their respective categories<br><br>Please contact your Account Manager or
            Zameen.com's Customer Service to purchase Super Hot/Hot listing credits.</span>
        <span class="olx_feature_txt" style="display: none;">Get noticed with 'FEATURED' tag in a top position and attract
            more buyers.</span>
        <span class="mark_feature_pending_txt" style="display: none;">Listing can't be make featured in pending
            state.</span>
        <span class="super_hot_listings_txt" style="display: none;">Super Hot listings offer 5 times more exposure compared
            to Hot Listings, and 20 times more exposure than basic listings.<br><br>Every Super Hot listing comes with the
            option to get videos made and photos taken of your property by Zameen.com’s expert team.<br><br>Enjoy top ranks
            in searches, receive exponentially increased response, and sell or rent out your properties quicker than
            ever.<br><br>Please contact your Account Manager or Zameen.com's Customer Service to purchase Super Hot/Hot
            listing credits.</span>

        <div class="jeffi_task" style="display: none;">
            <div class="message_box_popup" style="margin-bottom: 10px;margin-top: 13px;display:none"></div>
            <form id="jeffi_task_form" style="height:240px">
                Zameen.com provides a special photography and videography service for your properties with Super Hot
                Listings. Please choose which of these services, or both, you would like to avail:<br><br> <input
                    type="checkbox" id="check_photo" name="check_photo" /><label
                    for="check_photo"><b>Photography</b></label><br>
                <input type="checkbox" id="check_video" name="check_video" /><label
                    for="check_video"><b>Videography</b></label><br><br>
                <div>Please choose a date and time for our Media Associate to visit your property using the panel below
                    (this service is not available on Saturdays and Sundays):</div><br>
                <b>Appointment Date</b>
                <input type="text" class="date_added_jeffi" name="date_added_jeffi" id="date_added_jeffi"
                    style="margin-left:15px"><br><br>
                <center>
                    <span class="bg_orng" onclick="submit_jeffi_task();">Yes</span>&nbsp;
                    <span class="bg_orng" onclick="hide_popup();">No</span>
                </center>
            </form>
            <br>
        </div>
    </div>
    </div>
@endsection
