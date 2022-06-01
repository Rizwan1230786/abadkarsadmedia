<?php

use App\Models\Category;
?>
@extends('userside.layout')
@section('main')
@include('userside.layouts.sidebar')
<div id="rightcolumn" style="
                        width:79% " class="rightcolumn_div post_story_margin">
    <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
        <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=2&section=listings">Property
                Management</a> &raquo; All Listing </span>
    </div>
    <div id='div-gpt-ad-dashboard' style='width:1px; height: 1px;'>
        <script type='text/javascript'>
            googletag.cmd.push(function() {
                googletag.defineSlot('Profolio_Desktop_Main', [1000, 160], 'div-gpt-ad-dashboard').addService(googletag
                    .pubads());
                googletag.enableServices();
                googletag.display('div-gpt-ad-dashboard');
            });
        </script>
    </div>
    <div id="main_quotadiv_heading" style="display:block;">
        <div class="tab_menu" style="margin-top: 11.5px !important;">
            <div class="selected" id="a_quotalisting">
                <!-- I('a_marketing_quota').className=''; I('quotamarketingdiv_heading').style.display='none'; -->
                <a onclick="I('a_storyadcredits').className='';I('quotastoryaddiv_heading').style.display='none';I('a_superhotcredits').className='';I('quotasuperhotdiv_heading').style.display='none';I('a_hotcredits').className='';/*I('a_mgzcredits').className='';*/I('quotahotdiv_heading').style.display='none';I('a_quotalisting').className='selected';I('quotadiv_heading').style.display='block';/*I('quotamgzdiv_heading').style.display='none';*/ I('a_refreshlisting').className='';I('quotarefreshdiv_heading').style.display='none';/*I('a_interlisting').className='';I('quotainterdiv_heading').style.display='none';*/" href="javascript: void(0);">Premium Listings <span class="heading_tab_small">(5)</span></a>
            </div>
            <div class="" id="a_superhotcredits">
                <a onclick="I('a_storyadcredits').className='';I('quotastoryaddiv_heading').style.display='none';I('a_superhotcredits').className='selected';
        I('quotasuperhotdiv_heading').style.display='block';
        I('a_quotalisting').className='';
        /*I('a_mgzcredits').className='';*/
        I('quotadiv_heading').style.display='none';
        I('a_hotcredits').className='';I('quotahotdiv_heading').style.display='none';
        I('quotamgzdiv_heading').style.display='none';
        I('a_refreshlisting').className='';I('quotarefreshdiv_heading').style.display='none';
        // I('a_interlisting').className='';
        //I('quotainterdiv_heading').style.display='none';
        " href="javascript: void(0);">&nbsp;Super Hot CR <span class="heading_tab_small">(0)</span>&nbsp;</a>
            </div>
            <div class="" id="a_hotcredits">
                <a onclick="I('a_storyadcredits').className='';I('quotastoryaddiv_heading').style.display='none';I('a_superhotcredits').className='';I('quotasuperhotdiv_heading').style.display='none';I('a_quotalisting').className='';/*I('a_mgzcredits').className='';*/I('quotadiv_heading').style.display='none';I('a_hotcredits').className='selected';I('quotahotdiv_heading').style.display='block';/*I('quotamgzdiv_heading').style.display='none';*/I('a_refreshlisting').className='';I('quotarefreshdiv_heading').style.display='none';/*I('a_interlisting').className='';I('quotainterdiv_heading').style.display='none';*/" href="javascript: void(0);">&nbsp;Hot CR <span class="heading_tab_small">(0)</span>&nbsp;</a>
            </div>
            <!-- <div class=""  id="a_interlisting">
        <a onclick="I('a_superhotcredits').className='';I('quotasuperhotdiv_heading').style.display='none';I('a_interlisting').className='selected';I('quotainterdiv_heading').style.display='block';I('a_refreshlisting').className='';I('quotarefreshdiv_heading').style.display='none';I('a_hotcredits').className='';/*I('a_mgzcredits').className='';*/I('quotahotdiv_heading').style.display='none';I('a_quotalisting').className='';I('quotadiv_heading').style.display='none';/*I('quotamgzdiv_heading').style.display='none';*/" href="javascript: void(0);">&nbsp;International CR <span class="heading_tab_small">()</span>&nbsp;</a>
    </div> -->
            <!-- <div class="" id="a_mgzcredits">
        <a onclick="I('a_superhotcredits').className='';I('quotasuperhotdiv_heading').style.display='none';I('a_hotcredits').className='';I('a_quotalisting').className='';I('quotadiv_heading').style.display='none';I('a_mgzcredits').className='selected';I('quotahotdiv_heading').style.display='none';I('quotamgzdiv_heading').style.display='block';I('a_refreshlisting').className='';I('quotarefreshdiv_heading').style.display='none';I('a_interlisting').className='';I('quotainterdiv_heading').style.display='none';" href="javascript: void(0);">&nbsp;Magazine CR <span class="heading_tab_small">(0)</span>&nbsp;</a>
    </div> -->

            <div class="" id="a_storyadcredits" style="display: none">
                <a onclick="I('a_superhotcredits').className='';
                I('quotasuperhotdiv_heading').style.display='none';
                I('a_storyadcredits').className='selected';
                I('quotastoryaddiv_heading').style.display='block';
                I('a_refreshlisting').className='';
                I('quotarefreshdiv_heading').style.display='none';
                I('a_hotcredits').className='';
                I('quotahotdiv_heading').style.display='none';
                I('a_quotalisting').className='';
                I('quotadiv_heading').style.display='none';" href="javascript: void(0);">&nbsp;Story Ad CR <span class="heading_tab_small">(0)</span>&nbsp;</a>
            </div>

            <div class="" id="a_refreshlisting">
                <a onclick="I('a_storyadcredits').className='';I('quotastoryaddiv_heading').style.display='none'; I('a_superhotcredits').className='';I('quotasuperhotdiv_heading').style.display='none';I('a_refreshlisting').className='selected';I('quotarefreshdiv_heading').style.display='block';I('a_hotcredits').className='';/*I('a_mgzcredits').className='';*/I('quotahotdiv_heading').style.display='none';I('a_quotalisting').className='';I('quotadiv_heading').style.display='none';/*I('quotamgzdiv_heading').style.display='none';*//*I('a_interlisting').className='';I('quotainterdiv_heading').style.display='none';*/" href="javascript: void(0);">&nbsp;Refresh CR <span class="heading_tab_small">(0)</span>&nbsp;</a>



            </div>

            <!--<div class=""  id="a_marketing_quota">
        <a onclick="I('a_marketing_quota').className='selected'; I('quotamarketingdiv_heading').style.display='block';  I('a_superhotcredits').className='';I('quotasuperhotdiv_heading').style.display='none';I('a_refreshlisting').className='';I('quotarefreshdiv_heading').style.display='none';I('a_hotcredits').className='';I('a_mgzcredits').className='';I('quotahotdiv_heading').style.display='none';I('a_quotalisting').className='';I('quotadiv_heading').style.display='none';I('quotamgzdiv_heading').style.display='none';I('a_interlisting').className='';I('quotainterdiv_heading').style.display='none';" href="javascript: void(0);">Marketing<span class="heading_tab_small"> (0)</span></a>
    </div> -->

        </div>



        <div id="quotahotdiv_heading" style="height:auto;display:none;">

            <div style="float:right; width:155px;padding:0px 10px;">
                <div class="subquotaheading">
                    <span style="width:155px;font-weight:bold;padding-bottom:15px;text-align:right;"><a href='https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise&product=4' target="_blank">
                            <font class="orangeTxt">Buy Hot Listings</font>
                        </a>&nbsp;<a href="javascript:void(0);" class="propinfo_link" onmouseover="return overlib('1. Please contact us via e-mail or call us on 0800-ZAMEEN (92633), +92 42 32560445 (9:am to 6:00pm working days) to purchase Hot Listings<br /><br />2. After you have purchased Hot Property Listings, you can turn any basic listing into a Hot listing by simply clicking the Chilli [ <img src=https://profolio.zameen.com/images/common/grey_chilli.png border=0> ] button in your property controls. The image will turn red [ <img src=https://profolio.zameen.com/images/common/hot_icon.png border=0> ] if the listing is successfully updated.<br ><br />3. A single hot listing credit will be deducted from your quota and your listing will remain hot for a period of <b>30 days</b> after which the status will automatically change to a basic listing.<br /><br />4. Just a word of advice: Once a credit has been utilized, it cannot be re-used, so select your basic listing carefully and make sure that you want to turn it Hot.',CAPTION,'How to use Hot Property Listing Credits',WIDTH,550,LEFT,ABOVE,CELLPAD, 7);" onmouseout="return nd();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span> <span style="width:155px; font-weight:bold;padding-bottom:15px;text-align:right;"><a href='https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise&product=2' target="_blank">
                            <font class="active_txt">Buy Listings Package</font>
                        </a>&nbsp;<a href="javascript:void(0);" class="propinfo_link" onmouseover="return overlib('All accounts come with a limited quota of <b>5 free basic listing</b> credits which means you can have 5 active listings at any given time.<br /><br />If you wish to<strong> increase your listings quota </strong>then please purchase one of our listing packages.<br /><br />For further information please visit our advertise page or contact us via e-mail or call us on <strong>+92 42 3256 0445</strong> (9:am to 5:00pm working days) <br /><br /><b>Note:</b> Each listing credit acts as a listing slot. When you delete a listing, the credit is redeemed and becomes available to be used for a new listing.',CAPTION,'Increase Listing Quota',WIDTH,550,LEFT,ABOVE,CELLPAD, 7);" onmouseout="return nd();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                </div>
            </div>

            <div style="float:left;width:605px;padding:5px;">
                <div class="quota_div_block" style="width:110px;">
                    <div class="quota_div_block_title">Total Credits</div>
                    <div class="quota_number_text">0</div>
                    <div>Hot Credits</div>
                    <div style="width:500px;padding:24px 0px 5px;">Click <a href="" style='color:#0E77B0;' target="_blank">here</a> to purchase more hot listing credits
                    </div>
                </div>

                <div class="quota_div_block">
                    <div class="quota_div_block_title">
                        Currently Hot </div>
                    <div>0</div>
                </div>
            </div>
            <div class="clr">
                <div style="width: 100%">
                    <div style="width: 100%; float: left; margin-left: 7px; margin-bottom: 10px;">
                        <span>
                            <span class="showCreditCounts">

                            </span>
                        </span>
                        <span class="showMoreDiv 0" style="padding-left: 17px; cursor: pointer;">
                            <img class="showMoreImg" src="https://profolio.zameen.com/images/common/+.jpg">
                            <span>
                                <a class="showMoreText" href="javascript:;" style="font-size: 10px; color:#0E77B0;;">Show Details</a>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="show_credits_details" style="width: 100%; display: none;">
                    <div style="float:left; margin-left:7px;margin-top: 5px; margin-bottom: 10px;">
                        <script>
                            $(".showCreditCounts").html(
                                "<b>Refresh Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;<b>Hot Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;<b>Super Hot Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;"
                            );
                        </script>
                        <table style='width:895px;'>
                            <tbody>
                                <tr>
                                    <td colspan='4' style='text-align:center;padding-bottom:7px;'>
                                        <span><strong>Upcoming Expiry (within 30 days)</strong></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='4'>
                                        <div class='titlebar'><span style='width:22%; text-align: left;padding-left:5px;'>Expiry
                                                Date</span><span style='width:32%; text-align: left;'>Allocated
                                                To</span><span style='width:28%; text-align: left;'>Product</span>
                                            <span style='width:15%; text-align: center;'>Quantity</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='4' style='text-align:center;'><i style='font-size: smaller;'>No
                                            Data Found</i></td>
                                </tr>
                                <tr>
                                    <td colspan='4' style='text-align:center;'><i style='font-size: smaller;'>No
                                            Data Found</i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="quotarefreshdiv_heading" style="height:auto;display:none;">

            <div style="float:right; width:155px;padding:0px 10px;">
                <div class="subquotaheading">
                    <span style="width:155px;font-weight:bold;padding-bottom:15px;text-align:right;"><a href='https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise&product=4' target="_blank">
                            <font class="orangeTxt">Buy Hot Listings</font>
                        </a>&nbsp;<a href="javascript:void(0);" class="propinfo_link" onmouseover="return overlib('1. Please contact us via e-mail or call us on 0800-ZAMEEN (92633), +92 42 32560445 (9:am to 6:00pm working days) to purchase Hot Listings<br /><br />2. After you have purchased Hot Property Listings, you can turn any basic listing into a Hot listing by simply clicking the Chilli [ <img src=https://profolio.zameen.com/images/common/grey_chilli.png border=0> ] button in your property controls. The image will turn red [ <img src=https://profolio.zameen.com/images/common/hot_icon.png border=0> ] if the listing is successfully updated.<br ><br />3. A single hot listing credit will be deducted from your quota and your listing will remain hot for a period of <b>30 days</b> after which the status will automatically change to a basic listing.<br /><br />4. Just a word of advice: Once a credit has been utilized, it cannot be re-used, so select your basic listing carefully and make sure that you want to turn it Hot.',CAPTION,'How to use Hot Property Listing Credits',WIDTH,550,LEFT,ABOVE,CELLPAD, 7);" onmouseout="return nd();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span> <span style="width:155px; font-weight:bold;padding-bottom:15px;text-align:right;"><a href='https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise&product=2' target="_blank">
                            <font class="active_txt">Buy Listings Package</font>
                        </a>&nbsp;<a href="javascript:void(0);" class="propinfo_link" onmouseover="return overlib('All accounts come with a limited quota of <b>5 free basic listing</b> credits which means you can have 5 active listings at any given time.<br /><br />If you wish to<strong> increase your listings quota </strong>then please purchase one of our listing packages.<br /><br />For further information please visit our advertise page or contact us via e-mail or call us on <strong>+92 42 3256 0445</strong> (9:am to 5:00pm working days) <br /><br /><b>Note:</b> Each listing credit acts as a listing slot. When you delete a listing, the credit is redeemed and becomes available to be used for a new listing.',CAPTION,'Increase Listing Quota',WIDTH,550,LEFT,ABOVE,CELLPAD, 7);" onmouseout="return nd();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                </div>
            </div>

            <div style="float:left;width:605px;padding:5px 0px 5px 5px;">
                <div class="quota_div_block" style="width: 150px;">
                    <div class="quota_div_block_title">Total Credits</div>
                    <div class="quota_number_text">0</div>
                    <div style="width:500px;padding:25px 0px 5px;">Click <a href="#" style='color:#0E77B0;' target="_blank">here</a> to purchase more Refresh listing credits
                    </div>
                    <div style="width:633px">You can Refresh your listings by spending your Refresh Listing credits.
                        If you Refresh a regular listing, <b>one</b> credit will be deducted from your Refresh
                        Listing credits. If you Refresh a Hot Listing, <b>5</b> credits
                        will be deducted from your Refresh Listing credits. If you Refresh a Super Hot Listing,
                        <b>40</b> credits will be deducted from your Refresh Listing credits. Please note that you
                        will not be able to Refresh the same
                        listing<b> with in a day</b>.
                    </div>
                    <!-- <div style="width:500px">If you Refresh your listing, one credit will be deducted from your Refresh Listing credits. Please note that you will not be able to Refresh the same listing  <b> with in a day</b>.Hot Listings cannot be Refreshed, so please only attempt to Refresh your Premium Listings. </div> -->

                </div>
            </div>
            <div class="clr">
                <div style="width: 100%">
                    <div style="width: 100%; float: left; margin-left: 7px; margin-bottom: 10px;">
                        <span>
                            <span class="showCreditCounts">

                            </span>
                        </span>
                        <span class="showMoreDiv 0" style="padding-left: 17px; cursor: pointer;">
                            <img class="showMoreImg" src="https://profolio.zameen.com/images/common/+.jpg">
                            <span>
                                <a class="showMoreText" href="javascript:;" style="font-size: 10px; color:#0E77B0;;">Show Details</a>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="show_credits_details" style="width: 100%; display: none;">
                    <div style="float:left; margin-left:7px;margin-top: 5px; margin-bottom: 10px;">
                        <script>
                            $(".showCreditCounts").html(
                                "<b>Refresh Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;<b>Hot Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;<b>Super Hot Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;"
                            );
                        </script>
                        <table style='width:895px;'>
                            <tbody>
                                <tr>
                                    <td colspan='4' style='text-align:center;padding-bottom:7px;'>
                                        <span><strong>Upcoming Expiry (within 30 days)</strong></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='4'>
                                        <div class='titlebar'><span style='width:22%; text-align: left;padding-left:5px;'>Expiry
                                                Date</span><span style='width:32%; text-align: left;'>Allocated
                                                To</span><span style='width:28%; text-align: left;'>Product</span>
                                            <span style='width:15%; text-align: center;'>Quantity</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='4' style='text-align:center;'><i style='font-size: smaller;'>No
                                            Data Found</i></td>
                                </tr>
                                <tr>
                                    <td colspan='4' style='text-align:center;'><i style='font-size: smaller;'>No
                                            Data Found</i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="quotasuperhotdiv_heading" style="height:auto;display:none;">

            <div style="float:right; width:155px;padding:0px 10px;">
                <div class="subquotaheading">
                    <span style="width:155px;font-weight:bold;padding-bottom:15px;text-align:right;"><a href='https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise&product=4' target="_blank">
                            <font class="orangeTxt">Buy Hot Listings</font>
                        </a>&nbsp;<a href="javascript:void(0);" class="propinfo_link" onmouseover="return overlib('1. Please contact us via e-mail or call us on 0800-ZAMEEN (92633), +92 42 32560445 (9:am to 6:00pm working days) to purchase Hot Listings<br /><br />2. After you have purchased Hot Property Listings, you can turn any basic listing into a Hot listing by simply clicking the Chilli [ <img src=https://profolio.zameen.com/images/common/grey_chilli.png border=0> ] button in your property controls. The image will turn red [ <img src=https://profolio.zameen.com/images/common/hot_icon.png border=0> ] if the listing is successfully updated.<br ><br />3. A single hot listing credit will be deducted from your quota and your listing will remain hot for a period of <b>30 days</b> after which the status will automatically change to a basic listing.<br /><br />4. Just a word of advice: Once a credit has been utilized, it cannot be re-used, so select your basic listing carefully and make sure that you want to turn it Hot.',CAPTION,'How to use Hot Property Listing Credits',WIDTH,550,LEFT,ABOVE,CELLPAD, 7);" onmouseout="return nd();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span> <span style="width:155px; font-weight:bold;padding-bottom:15px;text-align:right;"><a href='https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise&product=2' target="_blank">
                            <font class="active_txt">Buy Listings Package</font>
                        </a>&nbsp;<a href="javascript:void(0);" class="propinfo_link" onmouseover="return overlib('All accounts come with a limited quota of <b>5 free basic listing</b> credits which means you can have 5 active listings at any given time.<br /><br />If you wish to<strong> increase your listings quota </strong>then please purchase one of our listing packages.<br /><br />For further information please visit our advertise page or contact us via e-mail or call us on <strong>+92 42 3256 0445</strong> (9:am to 5:00pm working days) <br /><br /><b>Note:</b> Each listing credit acts as a listing slot. When you delete a listing, the credit is redeemed and becomes available to be used for a new listing.',CAPTION,'Increase Listing Quota',WIDTH,550,LEFT,ABOVE,CELLPAD, 7);" onmouseout="return nd();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                </div>
            </div>

            <div style="float:left;width:605px;padding:5px;">
                <div class="quota_div_block" style="width:110px;">
                    <div class="quota_div_block_title">Total Credits</div>
                    <div class="quota_number_text">0</div>
                    <div>Super Hot Credits</div>
                    <div style="width:500px;padding:24px 0px 5px;">Super Hot Listings generate <b>400 %</b> more
                        exposure and response as compared to basic listings. Displayed on <b>home page </b> as
                        featured properties with <b>top ranks</b> and positions in their respective categories.
                        Please Click <a href="#" style='color:#0E77B0;' target="_blank">here</a> to purchase more
                        Super hot listing
                        credits. </div>

                </div>

                <div class="quota_div_block">
                    <div class="quota_div_block_title">
                        Currently Super Hot </div>
                    <div>0</div>
                </div>
            </div>
            <div class="clr">
                <div style="width: 100%">
                    <div style="width: 100%; float: left; margin-left: 7px; margin-bottom: 10px;">
                        <span>
                            <span class="showCreditCounts">

                            </span>
                        </span>
                        <span class="showMoreDiv 0" style="padding-left: 17px; cursor: pointer;">
                            <img class="showMoreImg" src="https://profolio.zameen.com/images/common/+.jpg">
                            <span>
                                <a class="showMoreText" href="javascript:;" style="font-size: 10px; color:#0E77B0;;">Show Details</a>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="show_credits_details" style="width: 100%; display: none;">
                    <div style="float:left; margin-left:7px;margin-top: 5px; margin-bottom: 10px;">
                        <script>
                            $(".showCreditCounts").html(
                                "<b>Refresh Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;<b>Hot Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;<b>Super Hot Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;"
                            );
                        </script>
                        <table style='width:895px;'>
                            <tbody>
                                <tr>
                                    <td colspan='4' style='text-align:center;padding-bottom:7px;'>
                                        <span><strong>Upcoming Expiry (within 30 days)</strong></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='4'>
                                        <div class='titlebar'><span style='width:22%; text-align: left;padding-left:5px;'>Expiry
                                                Date</span><span style='width:32%; text-align: left;'>Allocated
                                                To</span><span style='width:28%; text-align: left;'>Product</span>
                                            <span style='width:15%; text-align: center;'>Quantity</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='4' style='text-align:center;'><i style='font-size: smaller;'>No
                                            Data Found</i></td>
                                </tr>
                                <tr>
                                    <td colspan='4' style='text-align:center;'><i style='font-size: smaller;'>No
                                            Data Found</i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="quotastoryaddiv_heading" style="height:auto;display:none;">
            <div style="float:right; width:155px;padding:0px 10px;">
                <div class="subquotaheading">
                    <span style="width:155px;font-weight:bold;padding-bottom:15px;text-align:right;"><a href='https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise&product=4' target="_blank">
                            <font class="orangeTxt">Buy Hot Listings</font>
                        </a>&nbsp;<a href="javascript:void(0);" class="propinfo_link" onmouseover="return overlib('1. Please contact us via e-mail or call us on 0800-ZAMEEN (92633), +92 42 32560445 (9:am to 6:00pm working days) to purchase Hot Listings<br /><br />2. After you have purchased Hot Property Listings, you can turn any basic listing into a Hot listing by simply clicking the Chilli [ <img src=https://profolio.zameen.com/images/common/grey_chilli.png border=0> ] button in your property controls. The image will turn red [ <img src=https://profolio.zameen.com/images/common/hot_icon.png border=0> ] if the listing is successfully updated.<br ><br />3. A single hot listing credit will be deducted from your quota and your listing will remain hot for a period of <b>30 days</b> after which the status will automatically change to a basic listing.<br /><br />4. Just a word of advice: Once a credit has been utilized, it cannot be re-used, so select your basic listing carefully and make sure that you want to turn it Hot.',CAPTION,'How to use Hot Property Listing Credits',WIDTH,550,LEFT,ABOVE,CELLPAD, 7);" onmouseout="return nd();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span> <span style="width:155px; font-weight:bold;padding-bottom:15px;text-align:right;"><a href='https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise&product=2' target="_blank">
                            <font class="active_txt">Buy Listings Package</font>
                        </a>&nbsp;<a href="javascript:void(0);" class="propinfo_link" onmouseover="return overlib('All accounts come with a limited quota of <b>5 free basic listing</b> credits which means you can have 5 active listings at any given time.<br /><br />If you wish to<strong> increase your listings quota </strong>then please purchase one of our listing packages.<br /><br />For further information please visit our advertise page or contact us via e-mail or call us on <strong>+92 42 3256 0445</strong> (9:am to 5:00pm working days) <br /><br /><b>Note:</b> Each listing credit acts as a listing slot. When you delete a listing, the credit is redeemed and becomes available to be used for a new listing.',CAPTION,'Increase Listing Quota',WIDTH,550,LEFT,ABOVE,CELLPAD, 7);" onmouseout="return nd();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                </div>
            </div>
            <div style="float:left;width:605px;padding:5px 0px 5px 5px;">
                <div class="quota_div_block" style="width: 150px;">
                    <div class="quota_div_block_title">Total Credits</div>
                    <div class="quota_number_text">0</div>
                    <!--            <div style="width:500px;padding:25px 0px 5px;">Click <a href="-->
                    <!--/profolio/index.php?tabs=13&section=advertise&product=12" style='color:#0E77B0;' target="_blank">here</a> to purchase more Story Ad credits</div>-->
                </div>
                <div class="quota_div_block">
                </div>
            </div>

            <div class="clr">
                <p>some add here </p>
            </div>
        </div>

        <style type="text/css">
            .task_table_data {
                border: 1px solid #4AA02C !important;
            }

            .transition_cls {
                transition: all .2s ease-in-out;
            }
        </style>


        <div id="quotadiv_heading" style="height::autooverflow:hidden;display:block;">

            <div style="float:right; width:151px;padding:0px 10px;">
                <div class="subquotaheading">
                    <span style="width:155px;font-weight:bold;padding-bottom:15px;text-align:right;"><a href='https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise&product=4' target="_blank">
                            <font class="orangeTxt">Buy Hot Listings</font>
                        </a>&nbsp;<a href="javascript:void(0);" class="propinfo_link" onmouseover="return overlib('1. Please contact us via e-mail or call us on 0800-ZAMEEN (92633), +92 42 32560445 (9:am to 6:00pm working days) to purchase Hot Listings<br /><br />2. After you have purchased Hot Property Listings, you can turn any basic listing into a Hot listing by simply clicking the Chilli [ <img src=https://profolio.zameen.com/images/common/grey_chilli.png border=0> ] button in your property controls. The image will turn red [ <img src=https://profolio.zameen.com/images/common/hot_icon.png border=0> ] if the listing is successfully updated.<br ><br />3. A single hot listing credit will be deducted from your quota and your listing will remain hot for a period of <b>30 days</b> after which the status will automatically change to a basic listing.<br /><br />4. Just a word of advice: Once a credit has been utilized, it cannot be re-used, so select your basic listing carefully and make sure that you want to turn it Hot.',CAPTION,'How to use Hot Property Listing Credits',WIDTH,550,LEFT,ABOVE,CELLPAD, 7);" onmouseout="return nd();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span> <span style="width:155px; font-weight:bold;padding-bottom:15px;text-align:right;"><a href='https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise&product=2' target="_blank">
                            <font class="active_txt">Buy Listings Package</font>
                        </a>&nbsp;<a href="javascript:void(0);" class="propinfo_link" onmouseover="return overlib('All accounts come with a limited quota of <b>5 free basic listing</b> credits which means you can have 5 active listings at any given time.<br /><br />If you wish to<strong> increase your listings quota </strong>then please purchase one of our listing packages.<br /><br />For further information please visit our advertise page or contact us via e-mail or call us on <strong>+92 42 3256 0445</strong> (9:am to 5:00pm working days) <br /><br /><b>Note:</b> Each listing credit acts as a listing slot. When you delete a listing, the credit is redeemed and becomes available to be used for a new listing.',CAPTION,'Increase Listing Quota',WIDTH,550,LEFT,ABOVE,CELLPAD, 7);" onmouseout="return nd();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                </div>
            </div>


            <div style="float:left;width:605px;padding:5px;">


                <div class="quota_div_block" style="width:110px;">
                    <div class="quota_div_block_title">Total Quota</div>
                    <div class="quota_number_text">{{ $total_qouta }}</div>
                    <!-- <div>Basic Listings</div> -->

                    <div style="width:500px;padding:5px 0px;padding-top: 60px !important;">To increase listing quota
                        please <a href="#" target="_blank">contact us</a> or purchase a <a href="#" style='color:#0E77B0;' target="_blank">premium listing</a>.</div>
                </div>


                <div class="quota_div_block" style="width:150px;">
                    <div class="quota_div_block_title">Quota Used: </div>
                    <div>
                        {{ $qouta_used }}
                        <br> Active Listing(s): {{ $qouta_used }}
                    </div>
                </div>
                <div class="quota_div_block" style="width:110px;">
                    <div class="quota_div_block_title">Available</div>
                    <div>
                        {{ $avilable }}
                    </div>
                </div>



                <!-- <div style="clear:both; padding:10px 3px;">
                Zameen OutBurst :

                <span class="cross_icon" style="margin-right:20px;"></span>
                Featured Agency :
                                    <span class="cross_icon"></span>
            </div>	 -->
            </div>

            <div class="clr">
                <div style="width: 100%">
                    <div style="width: 100%; float: left; margin-left: 7px; margin-bottom: 10px;">
                        <span>
                            <span class="showCreditCounts">

                            </span>
                        </span>
                        <span class="showMoreDiv 0" style="padding-left: 17px; cursor: pointer;">
                            <img class="showMoreImg" src="https://profolio.zameen.com/images/common/+.jpg">
                            <span>
                                <a class="showMoreText" href="javascript:;" style="font-size: 10px; color:#0E77B0;;">Show Details</a>
                            </span>
                        </span>
                    </div>
                </div>

                <div class="show_credits_details" style="width: 100%; display: none;">
                    <div style="float:left; margin-left:7px;margin-top: 5px; margin-bottom: 10px;">
                        <script>
                            $(".showCreditCounts").html(
                                "<b>Refresh Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;<b>Hot Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;<b>Super Hot Listing : </b><span style='color:red;' >0</span>&nbsp;&nbsp;&nbsp;"
                            );
                        </script>
                        <table style='width:895px;'>
                            <tbody>
                                <tr>
                                    <td colspan='4' style='text-align:center;padding-bottom:7px;'>
                                        <span><strong>Upcoming Expiry (within 30 days)</strong></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='4'>
                                        <div class='titlebar'><span style='width:22%; text-align: left;padding-left:5px;'>Expiry
                                                Date</span><span style='width:32%; text-align: left;'>Allocated
                                                To</span><span style='width:28%; text-align: left;'>Product</span>
                                            <span style='width:15%; text-align: center;'>Quantity</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='4' style='text-align:center;'><i style='font-size: smaller;'>No
                                            Data Found</i></td>
                                </tr>
                                <tr>
                                    <td colspan='4' style='text-align:center;'><i style='font-size: smaller;'>No
                                            Data Found</i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <span id="table_container" class="d-none">
        <div class="box_title">
            <div><b>Active Listing For Sale</b></div>
        </div>
        <div class="box_body listing-property-profolio" id="Sale_listings" style="padding: 0px; ">
            <div class="ant-table" id="data_Sale" style="height:auto">

                <table id="myTable" class="table table-responsive listing_table table-bordered text-nowrap">
                    <thead class="thead-light" id="table_head">
                        <tr>
                            <th style="padding:0px 0px 0px 15px;">ID</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Detail</th>
                            <th>Price(PKR)</th>
                            <th>Platform</th>
                            <th>Quota</th>
                            <th>Listed Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="table_data" style="float: none;">
                        @isset($property)
                        @foreach ($property as $value)
                        @php
                        $status = $value->status ?? 0;
                        @endphp
                        <?php
                        $category = Category::where(['id' => $value->category])->get();
                        ?>
                        @foreach ($category as $item)
                        @if (isset($value['type']) && $value['type'] == 'sale')
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $item->name }}</td>
                            @if (isset($value) && !empty($value->location))
                            <td>{{ Str::limit($value->location, 20) }}</td>
                            @else
                            <td>Not Added</td>
                            @endif
                            @if (isset($value) && !empty($value->descripition))
                            <td>{{ Str::limit($value->descripition, 20) }}</td>
                            @else
                            <td>Not Added</td>
                            @endif
                            <td>{{ number_format($value->price,0) }}</td>
                            <td>abadkar.com</td>
                            <td>1</td>
                            @if (isset($value) && !empty($value->listed_date))

                            <td>{{ $value->listed_date }}</td>

                            @else
                            <td>Null</td>
                            @endif
                            <td><span class="textcoloractive">Active</span></td>
                            <td>
                                <ul class="icons-list">
                                    <a href="{{ url('user/edit-listing-for-sale/' . $value->id) }}">
                                        <li class="icons-list-item"><i class="fe fe-edit" data-toggle="tooltip" title="" data-original-title="Edit"></i>
                                        </li>
                                    </a>
                                </ul>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </span>
    <br>
    <br>
    <span id="table_container" class="d-none">
        <div class="box_title">
            <div><b>Active Listing For Rent</b></div>
        </div>
        <div class="box_body listing-property-profolio" id="Sale_listings" style="padding: 0px; ">
            <div class="ant-table" id="data_Sale" style="height:auto">

                <table id="myTable2" class="table table-responsive listing_table table-bordered text-nowrap">
                    <thead class="thead-light" id="table_head">
                        <tr>
                            <th style="padding:0px 0px 0px 15px;">ID</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Detail</th>
                            <th>Price(PKR)</th>
                            <th>Platform</th>
                            <th>Quota</th>
                            <th>Listed Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="table_data" style="float: none;">
                        @isset($property)
                        @foreach ($property as $value)
                        <?php
                        $category = Category::where(['id' => $value->category])->get();
                        ?>
                        @foreach ($category as $item)
                        @if (isset($value['type']) && $value['type'] == 'rent')
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ Str::limit($value->location, 20 )  ?? 'Not Added'}}</td>
                            @if (isset($value) && !empty($value->descripition))
                            <td>{{ Str::limit($value->descripition, 20) }}</td>
                            @else
                            <td>Not Added</td>
                            @endif
                            <td>{{ number_format($value->price,0) }}</td>
                            <td>abadkar.com</td>
                            <td>1</td>
                            @if (isset($value) && !empty($value->listed_date))
                            <td>{{ $value->listed_date }}</td>
                            @else
                            <td>Null</td>
                            @endif
                            <td><span class="textcoloractive">Active</span></td>
                            <td>
                                <ul class="icons-list">
                                    <a href="{{ url('user/edit-listing-for-rent/' . $value->id) }}">
                                        <li class="icons-list-item"><i class="fe fe-edit" data-toggle="tooltip" title="" data-original-title="Edit"></i>
                                        </li>
                                    </a>
                                </ul>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </span>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    $(document).ready(function() {
        $('#myTable2').DataTable();
    });
</script>
@endsection