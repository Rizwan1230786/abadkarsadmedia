@extends('userside.layout')
@section('css')
    @include('admin.layouts.select2CssFiles')
    @include('admin.layouts.fancy-uploader-css')
@endsection
@section('main')
    @include('userside.layouts.sidebar')
    <style>
        .radio_container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #cecece;
            height: 28px;
            box-shadow: inset 0.5px 0.5px 2px 0 rgb(0 0 0 / 15%);
        }

        .d-none {
            display: none;
        }

        .radio {
            appearance: none !important;
            display: none !important;
        }

        .lable {
            font-size: 12px !important;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: inherit;
            background-image: linear-gradient(0deg, #a7a1a161, transparent);
            width: 95px;
            text-align: center;
            transition: linear 0.3s;
            color: black;
        }

        .radio:checked+label {
            background-color: #FF385C;
            color: #f1f3f5;
            font-weight: 900;
            transition: 0.3s;
        }

        .lable1 {
            font-size: 12px !important;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: inherit;
            background-image: linear-gradient(0deg, #a7a1a161, transparent);
            width: 95%;
            text-align: center;
            transition: linear 0.3s;
            color: #6e6e6edd;
        }

        .radio:checked+label {
            background-color: #FF385C;
            color: #f1f3f5;
            font-weight: 400 !important;
            transition: 0.3s;
        }

        .padding0 {
            padding-right: 0px;
            padding-left: 0px;
        }

        .lable1 {
            padding: 0px 20px;
            text-align: left;
        }

        .error {
            color: red;
        }

        .iti--allow-dropdown {
            width: 0px !important;
        }

    </style>
    <?php
    if (isset($record->id) && $record->id != 0) {
        $url = url('/user/update-listing/' . $record->id);
    } else {
        $url = url('/user/submit_post_listing');
    }

    ?>
    <div id="rightcolumn" style="
                                    width:79% " class="rightcolumn_div post_story_margin">
        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            @if (isset($record->id) && !empty($record->id))
                <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=2&section=listings">Property
                        Management</a> &raquo; Edit Listing </span>
            @else
                <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=2&section=listings">Property
                        Management</a> &raquo; Post Listing </span>
            @endif
        </div>
        <div id="add_prop_main" class="add_prop_main step_1 purpose_ AdvanceSubmision">

            <div class="add_property_page step_1 purpose_ ">
                <form class="add_property add_property_form singleForm clr" method="post" autocomplete="off"
                    action="{{ $url }}" enctype="multipart/form-data">
                    @csrf
                    <div class="message_box" id="error_message_box"
                        style="padding-bottom: 10px;padding-top: 13px;display:none">
                        <div id='msg_box' class='error'><span class='icon_error'></span>
                            <ul class='items  single'>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="subhead font_s ros subhead1">Purpose, Property Type and Location</div>
                    <div class="divrow">
                        <label class="label l font_s">Purpose: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                        <div style="display: flex;">
                            @if (isset($record->type) && !empty($record->type) && $record->type == 'sale')
                                <input type="radio" class="radio" name="property_purpose" checked id="sale"
                                    value="{{ $record->type }}">
                                <label for="sale" selected class="lable radio_container">For Sale</label>
                            @else
                                <input type="radio" class="radio" name="property_purpose" id="sale" value="sale">
                                <label for="sale" class="lable radio_container">For Sale</label>
                            @endif
                            @if (isset($record->type) && !empty($record->type) && $record->type == 'rent')
                                <input type="radio" class="radio" name="property_purpose" checked id="rent"
                                    value="{{ $record->type }}" selected>
                                <label for="rent" class="lable radio_container">For Rent</label>
                            @else
                                <input type="radio" class="radio" name="property_purpose" id="rent" value="rent">
                                <label for="rent" class="lable radio_container">For Rent</label>
                            @endif
                        </div>
                        @if ($errors->has('property_purpose'))
                            <div class="error">{{ $errors->first('property_purpose') }}</div>
                        @endif
                    </div>
                    <div class="divrow">
                        <label class="label l font_s">Property Type: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                        <div style="display: flex;">
                            @if (isset($record->category) && !empty($record->category))
                                @foreach ($category as $index=> $val)
                                    <input type="radio" class="form-switch1 radio cat" data-id="{{ $val->id }}"
                                        name="category_id" id="{{ $val->id }}" type="{{ $val->id }}"
                                        value="{{ $val->id }}" @if (!$index) {!! "checked" !!} @endif>
                                    <label for="{{ $val->id }}"
                                        class="lable radio_container">{{ $val->name }}</label>
                                @endforeach
                            @else
                                @foreach ($category as $val)
                                    <input type="radio" class="form-switch1 radio cat" data-id="{{ $val->id }}"
                                        name="category_id" id="{{ $val->id }}" type="{{ $val->id }}"
                                        value="{{ $val->id }}">
                                    <label for="{{ $val->id }}"
                                        class="lable radio_container">{{ $val->name }}</label>
                                @endforeach
                            @endif
                        </div>
                        @if ($errors->has('category_id'))
                            <div class="error">{{ $errors->first('category_id') }}</div>
                        @endif
                    </div>
                    <div class="divrow" style="display: flex;">
                        <label id="cat_class" class="label l font_s d-none">Sub Property Type: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                        <span class="cat_data">
                        </span>
                    </div>
                    <div class="divrow div_type" style="display:none">
                        <label class="label l font_s">&nbsp;</label>
                        <div class="l" id="sub_type_box"></div>
                        @if ($errors->has('subcat_id'))
                            <div class="error">{{ $errors->first('subcat_id') }}</div>
                        @endif
                    </div>
                    <!-- /////////////////////CITY///////////////////////// -->
                    <div class="divrow zameen-city-box">
                        <label class="label l font_s">City:</label>
                        <div class='sb_combo sel_box' style='width:150px'>
                            <select class="city" name='city_name' style="width:151px;" id='city'>
                                <option value='' selected>Select City</option>
                                @foreach ($city as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                        @if ($errors->has('city_name'))
                            <div class="error">{{ $errors->first('city_name') }}</div>
                        @endif
                    </div>
                    <div id="city_class" class="divrow zameen-city-box d-none">
                        <label class="label l font_s">Address:</label>
                        <div class='sb_combo sel_box' style='width:150px'>
                            <select name='area_id' class="city_data" style="width:151px;" id='area'>
                                <option value='' selected>Select Address</option>
                            </select>
                        </div>
                        <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                            @if ($errors->has('area_id'))
                                <div class="error">{{ $errors->first('area_id') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="divrow">
                        <label class="label l font_s">Location: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                        <div id="location_id_sel_box" class="l autofill cls_rtl sb_text_new">
                            <input name="location" type="text" id="location_id_input" class="autofilter disabled"
                                data-value="" value="" placeholder="Enter location here ..." />
                        </div>
                    </div>
                    <!-- Property Title and Description -->
                    <div class="subhead font_s ros subhead2">Property Title and Description</div>
                    <div class="divrow">
                        <label class="label l font_s">Property Title: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                        <input type='text' name='title' id='title' value="{{ $record->name ?? '' }}" style='width:419px;'
                            class='rfield l ' placeholder='Enter property title here...' /><br>
                        <!-- <div id="title_validation">*Minimum of 5 characters required </div> -->
                        <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                            @if ($errors->has('title'))
                                <div class="error">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="divrow">
                        <label class="label l font_s">Description: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                        <textarea name="description" id="description" style="width:418px" rows="5" class="rfield l"
                            placeholder="Enter property description here...">{{ $record->descripition ?? '' }}</textarea><br>
                        <!-- <div id="description_validation">*Minimum of 20 characters required </div> -->
                        <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                            @if ($errors->has('description'))
                                <div class="error">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>
                    <!-- PROPERTY SPECS AND PRICE -->
                    <div class="subhead font_s ros subhead2" id="property_box_heading">PROPERTY SPECS AND PRICE</div>
                    <div class="divrow">
                        <label class="label l font_s">Area Size: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </label>
                        <input type='text' name='land_area' id='area' value="{{ $record->land_area ?? '' }}"
                            style='width:135px;' class='rfield l ' placeholder="Enter land area size..." />
                    </div>
                    <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                        @if ($errors->has('land_area'))
                            <div class="error">{{ $errors->first('land_area') }}</div>
                        @endif
                    </div>
                    <div class="divrow zameen-city-box">
                        <label class="label l font_s">Unit: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                        <div class='sb_combo sel_box' style='width:150px'>
                            @if (isset($record->unit) && !empty($record->unit))
                                <select class="city" name='unit' style="width:151px;" id='city'>
                                    <option value="{{ $record->unit ?? '' }}">{{ $record->unit ?? '' }}</option>
                                    <option value='Square Feet'>Square Feet</option>
                                    <option value='Square Meters'>Square Meters</option>
                                    <option value='Square Yards'>Square Yards</option>
                                    <option value='Marla'>Marla</option>
                                    <option value='Kanal'>Kanal</option>
                                </select>
                            @else
                                <select class="city" name='unit' style="width:151px;" id='city'>
                                    <option value='Square Feet' selected>Square Feet</option>
                                    <option value='Square Meters'>Square Meters</option>
                                    <option value='Square Yards'>Square Yards</option>
                                    <option value='Marla'>Marla</option>
                                    <option value='Kanal'>Kanal</option>
                                </select>
                            @endif
                        </div>
                    </div>
                    <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                        @if ($errors->has('unit'))
                            <div class="error">{{ $errors->first('unit') }}</div>
                        @endif
                    </div>
                    <div class="divrow">
                        <label class="label l font_s">Front Dimenssion: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </label>
                        <input type='text' name='front_dim' id='area' value='{{ $record->front_dim ?? '' }}'
                            style='width:135px;' class='rfield l' placeholder="Enter front dimenssion..." />
                        <span style="color: #FF385C; margin-left:10px;">( Please Enter a Front dimenssion In sq ft )</span>
                    </div>
                    <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                        @if ($errors->has('front_dim'))
                            <div class="error">{{ $errors->first('front_dim') }}</div>
                        @endif
                    </div>
                    <div class="divrow">
                        <label class="label l font_s">Back Dimenssion: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </label>
                        <input type='text' name='back_dim' id='area' value='{{ $record->back_dim ?? '' }}'
                            style='width:135px;' class='rfield l ' placeholder="Enter back dimenssion..." />
                        <span style="color: #FF385C; margin-left:10px;">( Please Enter a Back Dimenssion In sq ft )</span>
                    </div>
                    <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                        @if ($errors->has('back_dim'))
                            <div class="error">{{ $errors->first('back_dim') }}</div>
                        @endif
                    </div>

                    <!-- <div class="divrow div_beds" id="div_beds">
                                            <label class="label l font_s">Bedrooms:</label>
                                            <span id='beds_sel_box' class='sb_combo sel_box ' style='width:150px'><select name='beds' id='beds' style='width:151px;' autocomplete='off'>
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
                                            <span id='baths_sel_box' class='sb_combo sel_box ' style='width:150px'><select name='baths' id='baths' style='width:151px;' autocomplete='off'>
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
                                        </div> -->


                    <!-- <div class="divrow div_oc_status field_detailed" id="div_oc_status">
                                            <label class="label l font_s">Occupancy Status:</label>
                                            <span id='occupancy_status_sel_box' class='sb_combo sel_box ' style='width:150px'><select name='occupancy_status' id='occupancy_status' style='width:151px;' autocomplete='off'>
                                                    <option value='' selected>Please Select</option>
                                                    <option value='vacant'>Vacant</option>
                                                    <option value='rented'>Occupied</option>
                                                </select><span id='occupancy_status_txt' class='txt'>Please Select</span>
                                                <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                                            </span><span id='occupancyyear_sel_box' class='sb_combo sel_box ' style='width:102px'><select name='occupancyyear' id='occupancyyear' style='width:103px;' autocomplete='off'>
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
                                    </div> -->

                    <div class="divrow price_div">
                        <label class="label l font_s pheading display-block">All Inclusive Price: (PKR): <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </label>
                        <input type='text' name='price' id='price' value="{{ $record->price ?? '' }}"
                            style='width:228px;' class='rfield l ' placeholder="Enter price..." />
                    </div>
                    <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                        @if ($errors->has('price'))
                            <div class="error">{{ $errors->first('price') }}</div>
                        @endif
                    </div>
                    <div class="divrow price_div">
                        <label class="label l font_s">&nbsp;</label>
                        <span class="l price_text txtfont ltr">&nbsp;</span>
                    </div>

                    <!-- <div class="divrow div_instalments">
                                            <label class="label l font_s">Installments Available: </label>
                                            <ul id="instalment_status_push_buttons" class="l push_buttons">
                                                <input type="hidden" name="instalment_status" id="instalment_status" value="">
                                                <li class="l pushBtnLabel instalment_status " onclick="show_instalment_boxes(this)" style="border-radius: 4px;">
                                                    <span class="span">Property on Installment</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="divrow">
                                            <label class="label l font_s pheading display-block">No. of Remaining Installments: <img src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </label>
                                            <input type='text' name='no_of_instalments' id='no_of_instalments' value='' style='width:228px;' class='rfield l ' />
                                        </div>
                                        <div class="divrow">
                                            <label class="label l font_s pheading display-block">Monthly Installment: <img src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </label>
                                            <input type='text' name='monthly_instalments' id='monthly_instalments' value='' style='width:228px;' class='rfield l ' />
                                        </div>
                                    </div>
                                    <div class="divrow div_possession">
                                        <label class="label l font_s display-block">Possession Available: </label>
                                        <ul id="possession_available_push_buttons" class="l push_buttons">
                                            <input type="hidden" name="possession_available" id="possession_available" value="">
                                            <li class="l pushBtnLabel possession_available " onclick="show_checkbox_icon(this)" title="Possession Available:" style="border-radius:4px;">
                                                <span class="span">Available</span>
                                            </li>
                                        </ul>
                                    </div> -->

                    <div class="divrow field_detailed" style="display:block">
                        <label class="label l font_s">Listing Expiry: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                        @if (isset($record->is_expire) && !empty($record->is_expire))
                            <span id='expiry_days_sel_box' class='sb_combo sel_box ' style='width:150px'><select
                                    name='is_expired' id='expiry_days' style='width:151px;' autocomplete='off'>
                                    <option value='{{ $record->is_expire }}' selected>{{ $record->is_expire }}
                                    </option>
                                    <option value='1'>1 Month</option>
                                    <option value='3'>3 Months</option>
                                    <option value='6'>6 Months</option>
                                </select><span id='expiry_days_txt' class='txt'>1 Month</span>
                                <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                            </span>
                        @else
                            <span id='expiry_days_sel_box' class='sb_combo sel_box ' style='width:150px'><select
                                    name='is_expired' id='expiry_days' style='width:151px;' autocomplete='off'>
                                    <option value='1' selected>1 Month</option>
                                    <option value='3'>3 Months</option>
                                    <option value='6'>6 Months</option>
                                </select><span id='expiry_days_txt' class='txt'>1 Month</span>
                                <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                            </span>
                        @endif

                    </div>
                    <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                        @if ($errors->has('is_expired'))
                            <div class="error">{{ $errors->first('is_expired') }}</div>
                        @endif
                    </div>
                    <div class="single-add-property">
                        <div class="subhead font_s ros subhead_img">Property Feature</div>
                        <div class="property-form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="pro-feature-add pl-0">
                                        <li class="fl-wrap filter-tags clearfix">
                                            <div class="filter-tags-wrap">
                                                <?php
                                            if (isset($record) && !empty($record)) { ?>
                                                @foreach ($feature as $feature)
                                                    <label
                                                        style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('feature[]', $feature->id, in_array($feature->id, $features_property) ? true : false, ['class' => 'name']) }}
                                                        {{ $feature->name }}</label>
                                                @endforeach
                                                <?php
                                            } else { ?>
                                                @foreach ($feature as $feature)
                                                    <label
                                                        style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('feature[]', $feature->id, false, ['class' => 'seting']) }}
                                                        {{ $feature->name }}</label>
                                                @endforeach
                                                <?php
                                            }

                                            ?>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="divrow div_features" style="display:none">
                                            <label class="label l font_s">&nbsp;<span class="feature_label">Features:</span></label>
                                            <a class="l orng_smore popup_features">Add Features</a>
                                        </div>
                                    </div> -->

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
                                        </div> -->

                    <!-- <div id="rental_prices" style="display:block">
                                            <div class="subhead font_s ros subhead3">Rental Price Details</div>
                                            <div class="divrow" style="display:block">
                                                <label class="label l font_s">Minimum Contract Period:</label>
                                                <span id='txt_contract_period_sel_box' class='sb_combo sel_box ' style='width:150px'><select name='txt_contract_period' id='txt_contract_period' style='width:151px;' autocomplete='off'>
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
                                                </span><span id='sel_contract_period_sel_box' class='sb_combo sel_box ' style='width:150px'><select name='sel_contract_period' id='sel_contract_period' style='width:151px;' autocomplete='off'>
                                                        <option value='' selected>Please Select</option>
                                                        <option value='year'>Year</option>
                                                        <option value='month'>Month</option>
                                                    </select><span id='sel_contract_period_txt' class='txt'>Please Select</span>
                                                    <span class='bgc sb_combo_arrow r'>&nbsp;</span>
                                                </span>
                                            </div>
                                            <div class="divrow" style="display:block">
                                                <label class="label l font_s">Monthly Rent: <img src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                                                <input type='text' name='rental' id='rental' value='' style='width:136px;' class='rfield l ' />
                                            </div>
                                            <div class="divrow">
                                                <label class="label l font_s">&nbsp;</label>
                                                <span class="l price_text">&nbsp;</span>
                                            </div>
                                            <div class="divrow" style="display:block">
                                                <label class="label l font_s">Security Deposit:</label>

                                            <input type='text' name='security_deposit' id='security_deposit' value='' style='width:136px;' onblur='rentalFieldsBlur(this);' class='rfield l ' /> <label class="label_inline l font_s">or</label>
                                            <input type='text' name='security_deposit_perc' id='security_deposit_perc' value='' style='width:85px;' onblur='rentalFieldsBlur(this);' class='rfield l ' /> <label class="label_inline l font_s">number of month's rental amount </label>
                                        </div>

                                        <div class="divrow" style="display:block">
                                            <label class="label l font_s">Advance Rent:</label>
                                            <input type='text' name='advance_rent' id='advance_rent' value='' style='width:136px;' onblur='rentalFieldsBlur(this);' class='rfield l ' /> <label class="label_inline l font_s">or</label>
                                            <input type='text' name='advance_rent_perc' id='advance_rent_perc' value='' style='width:85px;' onblur='rentalFieldsBlur(this);' class='rfield l ' /> <label class="label_inline l font_s">number of month's rental amount </label>
                                        </div>
                                    </div> -->

                <div id="UploadImages" class="uploaderbox uploaderbox_images UploadImages noItems">
                    <div class="subhead font_s ros subhead_img">Images</div>
                    <div class="clr">
                        <div class="filecontrol_images">
                            @if (isset($record->image) && !empty($record->image))
                            <input type="file" name="image[]" class="dropify" data-default-file="{{ asset('assets/images/properties/' . $record->image) }}" data-height="180" />
                            @else
                            <input type="file" name="image[]" class="dropify notrequired" data-default-file="" data-height="180" multiple/>
                            @endif
                        </div>
                    </div>
                    <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                        @if ($errors->has('image'))
                            <div class="error">{{ $errors->first('image') }}</div>
                        @endif
                    </div>
                    <div class="subhead font_s ros subhead3">Contact Details</div>
                    <div class="imz_dialog" id="users_list_dialog" style="display:none">
                    </div>
                    <div class="divrow">
                        @if (Auth::user()->contact)
                            <label class="label l font_s">Contact number: <img
                                    src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </label>
                            <input placeholder="Enter contact number..." type='text' name='contact' id="account-phone"
                                value='{{ Auth::user()->contact }}' style='width:228px;' class='rfield l ' />
                        @else
                            <label class="label l font_s">Contact number: <img
                                    src="{{ asset('userside') }}/images/common/asteriskred.gif" /> </label>
                            <input placeholder="Enter contact number..." type='text' name='contact' id="account-phone"
                                value='+92' style='width:228px;' class='rfield l ' />
                        @endif
                    </div>
                    <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                        @if ($errors->has('contact'))
                            <div class="error">{{ $errors->first('contact') }}</div>
                        @endif
                    </div>
                    <!--
                                                    class put_cell_input_after_this added, the purpose of this class is just to put a new cell field after it through a js function, that is being called on select contact person
                                                    dropdown
                                                    -->
                    <!-- <div class="divrow put_cell_input_after_this">
                                            <label class="label l font_s">Landline Phone #: </label>
                                            <span class="ph_input_box l">
                                                <input type='text' name='phone0' id='phone0' value='{{ Auth::guard('customeruser')->user()->contact }}' style='width:33px;' maxlength='6' onfocus='overlib_info(this,"Enter your country code.&lt;br /&gt;Example: &lt;b class=red&gt;+92&lt;/b&gt;-51-1234567")' class='rfield l ' /> <label class="separator">-</label>
                                                <input type='text' name='phone1' id='phone1' value='' style='width:33px;' maxlength='6' onfocus='overlib_info(this,"Enter your area code.&lt;br /&gt;Example: +92-&lt;b class=red&gt;51&lt;/b&gt;-1234567")' class='rfield l ' /> <label class="separator">-</label>
                                                <input type='text' name='phone2' id='phone2' value='' style='width:112px;' maxlength='500' onfocus='overlib_info(this,"Enter your phone number.&lt;br /&gt;Example: +92-51-&lt;b class=red&gt;1234567&lt;/b&gt;")' class='rfield l ' /> </span>
                                            <div class="bgc infologo r">
                                                <p>Enter your phone (land line or fixed phone) number along with area and international dialing
                                                    code.<br />Example: +92-51-12345678</p>
                                            </div>
                                        </div> -->




                    <div class="divrow">
                        <label class="label l font_s">Email: <img
                                src="{{ asset('userside') }}/images/common/asteriskred.gif" /></label>
                        <input type='text' name='email' id='email'
                            value='{{ Auth::guard('customeruser')->user()->email }}' style='width:228px;'
                            class='rfield l ' />
                        <div class="divrow zameen-city-box" style="width: 50%;margin: 0 auto;width: 20;">
                            @if ($errors->has('email'))
                                <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="imz_dialog" id="popup_features" style="display:none">
                        <div class="title_div">
                            <span class="dialog_title">Add Features</span>
                            <span onclick="imz_filter.click()" class="dialog_close"></span>
                        </div>
                        <div class="dialog_container"></div>
                    </div>
                    <div class="divrow btn-sec-bottom">
                        <label class="label l font_s"> &nbsp;</label>
                        <button class="btn1 submit_button l bgdgry ros smargin " type="submit">
                            Submit Property </button>
                    </div>
            </div>
            </form>
            <div id='hidden_type_1' class='d-none'>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-switch1').on('change', function() {
                $('#form1').removeClass('d-none');
                var formToShow = '.form1-' + $(this).data('id');
                $(formToShow).addClass('active');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.cat').on('change', function() {
                var cat_id = this.value;
                $.ajax({
                    url: "{{ url('admin/property/fetch-subcat') }}",
                    type: "POST",
                    data: {
                        cat_id: cat_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $.each(result.subcat, function(key, value) {
                            $('.cat_data').html('');
                            $('#cat_class').removeClass('d-none');
                        });
                        $.each(result.subcat, function(key, value) {
                            //  $('.cat_data').append(
                            //     ' <div class="col-lg-4 col-md-12 form1 form1-'+value.category_id+' '+value.category_id+'"></div>'
                            // );
                            $('.cat_data').append(
                                '<div style="margin-bottom:2px;" class="form1-' +
                                value.category_id + ' ' + value.category_id +
                                '" active><input type="radio" class="radio" name="subcat_id" id=' +
                                value.name + ' value=' + value.id + '><label for=' +
                                value.name + ' class="lable1 radio_container">' +
                                value.name + '</label></div>'
                            );
                        });
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.city').on('change', function() {
                var city_id = this.value;
                $.ajax({
                    url: "{{ url('/user/fetch-area') }}",
                    type: "POST",
                    data: {
                        city_id: city_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $.each(result.area, function(key, value) {
                            $('.city_data').html('');
                            $('#city_class').removeClass('d-none');
                        });
                        $.each(result.area, function(key, value) {
                            $('.city_data').append(
                                '<option value="' + value.id + '">' + value
                                .areaname + '</option>'
                            );
                        });
                    }
                });
            });
        });
    </script>
@endsection
@section('js')
    <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    @include('admin.layouts.select2JsFiles')
    @include('admin.layouts.fancy-uploader-js')
    @include('admin.layouts.tinymce-js')
    @include('admin.layouts.templateJquery')
    <script src="{{ URL::asset('front/js/Tellcustom.js') }}"></script>
    <link href="{{ URL::asset('front/css/intlTelInput.css?1613236686837') }}" rel="stylesheet">
    <script src="{{ URL::asset('front/js/Tellprism.js') }}"></script>
    <script src="{{ URL::asset('front/js/intlTelInput.js') }}"></script>
    <script src="{{ URL::asset('front/js/Tellinput.js') }}"></script>
@endsection

