@extends('userside.layout')
@section('main')
    @include('userside.layouts.advertise_sidebar')
    <div id="rightcolumn" style="
        width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=13&section=advertise">Advertise</a>
                &raquo; Buy Credits & Cart </span>
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
                                <img src="https://profolio.zameen.com/images/common/infographics.png"
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
                                    src="https://assets.zameen.com/profolio/images/add_to_cart1_1.png" border="0" />
                                <img class="loader" style="display:none; margin-left: 30%;"
                                    src="https://profolio.zameen.com/images/common/loading1.gif" border="0" />
                            </a>
                        </span>
                    </div>
                </div>

                <div id="credits-body">
                    <div class="row" style="font-weight: 700;" id="product_2">
                        <!-- <span id="product_id" style="display: none">2</span> -->
                        <!-- Type -->
                        <span style="width:20%"> &nbsp;Premium Listing &nbsp; <a href="javascript:void(0)"
                                style="vertical-align: middle;">
                                <img src="https://profolio.zameen.com/images/common/infographics.png"
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
                        <span class="product_unit_price" data-product_price="2000" style="width:10%"> &nbsp;2,000 </span>
                        <!-- Total Price -->
                        <span class="product_total_price" data-total_price="0" style="text-align: center; width:30%">
                            0
                        </span>
                        <!-- Controls -->
                        <span style="width:15%">
                            <a href="javascript:void(0);" class="add_insert_to_cart" onclick="add_insert_to_cart(this)"
                                data-product="Premium Listing">
                                <img class="add_to_cart_btn"
                                    src="https://assets.zameen.com/profolio/images/add_to_cart1_1.png" border="0" />
                                <img class="loader" style="display:none; margin-left: 30%;"
                                    src="https://profolio.zameen.com/images/common/loading1.gif" border="0" />
                            </a>
                        </span>
                    </div>
                </div>

                <div id="credits-body">
                    <div class="row" style="font-weight: 700;" id="product_4">
                        <!-- <span id="product_id" style="display: none">4</span> -->
                        <!-- Type -->
                        <span style="width:20%"> &nbsp;Hot Listing &nbsp; <a href="javascript:void(0)"
                                style="vertical-align: middle;">
                                <img src="https://profolio.zameen.com/images/common/infographics.png"
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
                        <span class="product_unit_price" data-product_price="3000" style="width:10%"> &nbsp;3,000 </span>
                        <!-- Total Price -->
                        <span class="product_total_price" data-total_price="0" style="text-align: center; width:30%">
                            0
                        </span>
                        <!-- Controls -->
                        <span style="width:15%">
                            <a href="javascript:void(0);" class="add_insert_to_cart" onclick="add_insert_to_cart(this)"
                                data-product="Hot Listing">
                                <img class="add_to_cart_btn"
                                    src="https://assets.zameen.com/profolio/images/add_to_cart1_1.png" border="0" />
                                <img class="loader" style="display:none; margin-left: 30%;"
                                    src="https://profolio.zameen.com/images/common/loading1.gif" border="0" />
                            </a>
                        </span>
                    </div>
                </div>

                <div id="credits-body">
                    <div class="row" style="font-weight: 700;" id="product_5">
                        <!-- <span id="product_id" style="display: none">5</span> -->
                        <!-- Type -->
                        <span style="width:20%"> &nbsp;Super Hot Listing &nbsp; <a href="javascript:void(0)"
                                style="vertical-align: middle;">
                                <img src="https://profolio.zameen.com/images/common/infographics.png"
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
                        <span class="product_unit_price" data-product_price="12000" style="width:10%"> &nbsp;12,000 </span>
                        <!-- Total Price -->
                        <span class="product_total_price" data-total_price="0" style="text-align: center; width:30%">
                            0
                        </span>
                        <!-- Controls -->
                        <span style="width:15%">
                            <a href="javascript:void(0);" class="add_insert_to_cart" onclick="add_insert_to_cart(this)"
                                data-product="Super Hot Listing">
                                <img class="add_to_cart_btn"
                                    src="https://assets.zameen.com/profolio/images/add_to_cart1_1.png" border="0" />
                                <img class="loader" style="display:none; margin-left: 30%;"
                                    src="https://profolio.zameen.com/images/common/loading1.gif" border="0" />
                            </a>
                        </span>
                    </div>
                </div>

                <hr>

                <div class="row" style="font-weight: 700;" id="gross_total">
                    <!-- <span id="product_id" style="display: none">5</span> -->
                    <!-- Type -->
                    <span style="width:20%"> &nbsp;Total: </span>

                    <span style="width: 35%">&nbsp;</span>

                    <!-- Total Price -->
                    <span class="gross_total" style="text-align: center; width:30%" data-gross_total="0"> 0</span>
                </div>
            </div>
        </div>
        <div style="display: block">
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
                            <img src="https://assets.zameen.com/profolio/images/clear_cart1_2.png" border="0"
                                style="margin-bottom: 5.5px;" />
                        </a>
                        <a href="javascript:void(0)" style="color:green; padding-right: 6px;" class="cart_checkout">
                            <img src="https://assets.zameen.com/profolio/images/checkout1_2.png" border="0" />
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


            </div>

        </div>
     </div>
      <div id="popup_window" class="popup_round">
          <div class="top_part"></div>
          <div class="mid_part"></div>
          <div class="bottom_part"></div>
      </div>
      <div id="backgroundFilter">
      <!--[if lte IE 6]><iframe id="menu4iframe" src="javascript:'';" marginwidth="0" marginheight="0" align="bottom" scrolling="no" frameborder="0" style="position:absolute; left:0; top:0px; display:none; filter:alpha(opacity=0); width:100%" height="800px" width="100%" ></iframe><![endif]-->
      </div>
      <div id="ToolTip" style="visibility: hidden;"></div>
      <div class="popup_round" id="sitewide_ad" style="display: none;">
          <div class="top_part"></div>
          <div class="mid_part"><a onclick="show_sitewide_ad('hide')" class="close_cross_big"></a>
                  </div>
          <div class="bottom_part"></div>
      </div>
      <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-201547-7']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

      </script>
    </div>
@endsection
