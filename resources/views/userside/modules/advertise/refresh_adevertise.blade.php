@extends('userside.layout')
@section('main')
    @include('userside.layouts.advertise_sidebar')
    <div id="rightcolumn" style="
    width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=13&section=advertise">Advertise</a>
                &raquo; Refresh Listing </span>
        </div>
        <script type="text/javascript" src="https://profolio.zameen.com/javascript/opg.js"></script>



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
                    <li>Refresh Credits Properties get ranked above Basic, Premium, and Hot listings, putting them at the
                        top in searches.</li>
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
                    <span style="width:20%">&nbsp;&nbsp;Type</span>
                    <span style="width:25%">&nbsp;&nbsp;Quantity</span>
                    <span style="width:10%">Price (PKR)</span>
                    <span style="width:30%;text-align: center;">Total Price (PKR)</span>
                    <span style="width:15%;">&nbsp;</span>
                </div>

                <div id="credits-body">
                    <div class="row" style="font-weight: 700;" id="product_1">
                        <!-- <span id="product_id" style="display: none">1</span> -->
                        <!-- Type -->
                        <span style="width:20%"> &nbsp;Refresh Listing &nbsp; <a href="javascript:void(0)"
                                style="vertical-align: middle;">
                                <img src="{{ asset('userside') }}/images/common/infographics.png"
                                    onclick="show_product_infographics();">
                            </a>
                        </span>
                        <!-- Quantity -->
                        <span style="width:25%">
                            <a href="javascript:void(0)" style="color:green; padding-right: 7px; font-size: 14px;"
                                class="minus_count">
                                <!-- <img src="https://profolio.zameen.com/images/common/-.jpg" border="0" /> --> -
                            </a>
                            <!-- <span style="float:none; border: 0.25px solid #eee;box-shadow: 0.5px 1px #ccc;padding: 2px;">1</span> -->
                            <!-- <span class="product_quantity" style="float:none; border-bottom: 1.5px solid #eee;padding: 2px;">
                0
                </span>
               -->
                            <input type="text" class="product_quantity" onblur="cal_product_quantity(this);" style="display: inline;
               font-family: inherit;
               font-size: inherit;
               padding: 0px !important;
               margin: 0 !important;
               border-top: none !important;
               border-right: none !important;
               border-left: none !important;
               border-bottom: 1.5px solid #eee;
               text-align: center;
               width: 30px;" value="0">
                            <a href="javascript:void(0)" style="color:green; padding-left: 6px; font-size: 14px;"
                                class="plus_count">
                                <!-- <img src="https://profolio.zameen.com/images/common/+.jpg" border="0" /> -->+
                            </a>
                            <a href="javascript:void(0)" class="reset_count"> Reset</a>
                        </span>
                        <!-- Price -->
                        <span class="product_unit_price" data-product_price="200" style="width:10%"> &nbsp;200 </span>
                        <!-- Total Price -->
                        <span class="product_total_price" data-total_price="0" style="text-align: center; width:30%">
                            0
                        </span>
                        <!-- Controls -->
                        <span style="width:15%">
                            <a href="javascript:void(0);" class="add_insert_to_cart" onclick="add_insert_to_cart(this)"
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
                            <img src="{{ asset('userside') }}/images/clear_cart1_2.png" border="0"
                                style="margin-bottom: 5.5px;" />
                        </a>
                        <a href="javascript:void(0)" style="color:green; padding-right: 6px;" class="cart_checkout">
                            <img src="{{ asset('userside') }}/images/checkout1_2.png" border="0" />
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
@endsection
