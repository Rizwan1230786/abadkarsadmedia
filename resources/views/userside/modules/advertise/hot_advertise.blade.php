@extends('userside.layout')
@section('main')
    @include('userside.layouts.advertise_sidebar')
    <div id="rightcolumn" style="
        width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=13&section=advertise">Advertise</a>
                &raquo; Hot Listing </span>
        </div>
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
                    <li>Hot Properties get top ranks above Premium and Basic listings on search and category pages.</li>
                    <li>Premium placement on Homes, Plots, Commercial, Rentals and Wanted home/front pages.</li>
                    <li>15 x extra traffic and exposure as compared to a basic listing.</li>
                    <li>Hot listings are usually sold within a very short time span.</li>
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
                        <span style="width:40%"> &nbsp;{{ $hot->name ?? ''}} &nbsp; <a href="javascript:void(0)"
                                style="vertical-align: middle;">
                                <img src="{{ asset('userside') }}/images/common/infographics.png"
                                    onclick="show_product_infographics();">
                            </a>
                        </span>
                        <!-- Quantity -->
                        <span style="width:40%">
                        <!-- Price -->
                        <span class="product_unit_price" data-product_price="200" style="width:10%"> &nbsp;{{ $hot->price ?? ''}} </span>
                        <!-- Total Price -->
                        <!-- Controls -->
                        </span>
                        <span style="width:10%">
                            <a href="{{ route('add.to.cart', $hot->id ?? '') }}" class="add_insert_to_cart"
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
                    src="{{ asset('userside') }}/common/adv/hot-listing.jpg">
            </div>
        </div>
    </div>
    </div>
@endsection
