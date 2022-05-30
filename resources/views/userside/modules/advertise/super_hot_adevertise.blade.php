@extends('userside.layout')
@section('main')
    @include('userside.layouts.advertise_sidebar')
    <div id="rightcolumn" style="width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=13&section=advertise">Advertise</a>
                &raquo; Super Hot Listing </span>
        </div>
        <script type="text/javascript" src="{{ asset('userside') }}/javascript/opg.js"></script>



        <style type="text/css">
            .reset_count {
                color: orange;
                padding-left: 10px;
                font-size: 10px;
            }

        </style>


        <div class="imz_dialog" id="common_popup" style="display:none">
            <div class="title_div">
                <span class="dialog_title"></span>
                <span onclick="imz_filter.click()" class="dialog_close"></span>
            </div>
            <div class="dialog_container"></div>
        </div>



        <!-- <input type="hidden" id="session_order_id" value="0" />
    <input type="hidden" id="session_user_id" value="1001388906" /> -->
        <div class="box_title">
            <div><b>Benefits</b></div>
        </div>
        <div class="box_body">
            <div id="" style="height:auto;margin-left: 25px;">
                <ul style="list-style-type: disc;margin: 5px;padding: 7px;line-height: 2;">
                    <li>Super Hot Properties get ranked above Basic, Premium, and Hot listings, putting them at the top in
                        searches.</li>
                    <li>Get prime placement on Homes, Plots, Commercial, Rentals, and Wanted homepages.</li>
                    <li>Get videos and pictures taken of your property by experts from Zameen.com.</li>
                    <li>Super Hot Properties are sold and rented out significantly faster than other listings.</li>
                    <li>Up to 20x extra exposure compared to premium listings.</li>
                    <li>Guaranteed lead generation.</li>
                </ul>
            </div>
        </div>

        <div class="box_title">
            <div><b>Buy Credits</b></div>
        </div>
        <div class="box_body">
            <div id="data_data" style="height:auto">
                <div class="titlebar" style="padding:0;margin-bottom: 5px;">
                    <span style="width:40%">&nbsp;&nbsp;Type</span>
                    <span style="width:40%">Price (PKR)</span>
                    <span style="width:10%">Control</span>
                </div>
                <div id="credits-body">
                    <div class="row" style="font-weight: 700;" id="product_1">
                        <!-- <span id="product_id" style="display: none">1</span> -->
                        <!-- Type -->
                        <span style="width:40%"> &nbsp;{{ $superhot->name }} &nbsp; <a href="javascript:void(0)"
                                style="vertical-align: middle;">
                                <img src="{{ asset('userside') }}/images/common/infographics.png"
                                    onclick="show_product_infographics();">
                            </a>
                        </span>
                        <!-- Quantity -->
                        <span style="width:40%">
                        <!-- Price -->
                        <span class="product_unit_price" data-product_price="200" style="width:10%"> &nbsp;{{ $superhot->price }} </span>
                        <!-- Total Price -->
                        <!-- Controls -->
                        </span>
                        <span style="width:10%">
                            <a href="{{ route('add.to.cart', $superhot->id) }}" class="add_insert_to_cart"
                                data-product="Refresh Listing">
                                <img class="add_to_cart_btn"
                                    src="{{ asset('userside') }}/profolio/images/add_to_cart1_1.png" border="0" />
                                <img class="loader" style="display:none; margin-left: 30%;"
                                    src="{{ asset('userside') }}/images/common/loading1.gif" border="0" />
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="" style="float:left; height:auto; width: 100%; margin-bottom: 4%;">
            <div style="/*text-align: center;*/ width: 80%; margin-left: 10%">
                <img width="100%"
                    src="{{ asset('userside') }}/common/adv/superhot-listing.jpg">
            </div>
        </div>
        <div style="display: none">
            <div class="box_title">
                <div><b>Cart</b></div>
            </div>
            <div class="box_body">
                <!-- <div id="data_data" style="height:auto"> -->

                <div class="row">
                    <div style="float: left; font-size:14px; font-weight: 700; padding: 2px;">
                        Total : PKR <span class="total_amount" style="float: right; padding-left: 4px;"></span>
                    </div>
                    <div style="float: right; margin-right: 26px;">
                        <a href="#" class="remove_cart_item" data-bulk="1" style="color:green; padding-right: 6px;"
                            onclick="return false;">
                            <img src="{{ asset('userside') }}/profolio/images/clear_cart1_2.png" border="0"
                                style="margin-bottom: 5.5px;" />
                        </a>
                        <a href="javascript:void(0)" style="color:green; padding-right: 6px;" class="cart_checkout">
                            <img src="{{ asset('userside') }}/profolio/images/checkout1_2.png" border="0" />
                        </a>
                    </div>
                </div>

                <div class="titlebar" style="padding:0;">
                    <span style="width:45%">&nbsp;&nbsp;Item</span>
                    <span style="width:30%">Price (PKR)</span>
                    <span style="width:20%">&nbsp;</span>
                    <!-- <span style="width:15%;text-align: center;">Total Price (PKR)</span>	 -->
                </div>

                <div id="cart-body" style="float: left;margin-top: 5px; width: 100%;">
                    <!-- 								<div class="row" style="font-weight: 700;">
             No products added into cart.
            </div>
              -->
                </div>

                <!-- </div> -->
            </div>



        </div>
    </div>
    </div>
@endsection
