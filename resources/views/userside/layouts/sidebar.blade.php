<div id="maincontent">
    <div id="leftcolumn">
        <div id="mybayut_menu">
            <span class="leftcolumheadings">Tools</span>
            <a href="{{ url('/user/inventory_search') }}" class="leftcolumnlink">Inventory Search</a>
            <a href="{{ url('/user/post-listing') }}" class="leftcolumnlink">Post New Listing</a>
            <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=zone_details"
                class="leftcolumnlink">Zone
                Details</a>
            <a href="/user/listing_policy"
                class="leftcolumnlink">Listing
                Policy</a>

            <span class="leftcolumheadings">
                <!--Listings-->
                <a id="a_alldiv" class="a_allclose" href="javascript: void(0);"
                    onclick="menu_alldiv('a_alldiv')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                Listings
            </span>
            <!--     Active listings Menu     -->
            <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_active"
                onclick="menu_divtoggle('a_active','d_active');">Active <label>(0)</label></a>
            <div class="listing_class" style="display:none;" id="d_active">
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&status=on"
                    class="leftcolumnlink">All Listings</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=on"
                    class="leftcolumnlink">For Sale (0)</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=on"
                    class="leftcolumnlink">For Rent (0)</a>
                <!--		<a href="-->
                <!--/index.php?tabs=2&section=listings&subsection=Wanted&status=-->
                <!--" class="leftcolumnlink">-->
                <!--</a>-->
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Super_Hot_Listing&status=on"
                    class="leftcolumnlink">Super Hot Listings (0)</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Hot_Listing&status=on"
                    class="leftcolumnlink">Hot Listings (0)</a>
            </div>
            <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_edited"
                onclick="menu_divtoggle('a_edited','d_edited');">Edited <label>(0)</label></a>
            <div class="listing_class" style="display:none;" id="d_edited">
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&status=edited"
                    class="leftcolumnlink">All Listings</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=edited"
                    class="leftcolumnlink">For Sale (0)</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=edited"
                    class="leftcolumnlink">For Rent (0)</a>
                <!--		<a href="-->
                <!--/index.php?tabs=2&section=listings&subsection=Wanted&status=-->
                <!--" class="leftcolumnlink">-->
                <!--</a>-->
            </div>
            <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_pending"
                onclick="menu_divtoggle('a_pending','d_pending');">Pending <label>(0)</label></a>
            <div class="listing_class" style="display:none;" id="d_pending">
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&status=Pending"
                    class="leftcolumnlink">All Listings</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=Pending"
                    class="leftcolumnlink">For Sale (0)</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=Pending"
                    class="leftcolumnlink">For Rent (0)</a>
                <!--		<a href="-->
                <!--/index.php?tabs=2&section=listings&subsection=Wanted&status=-->
                <!--" class="leftcolumnlink">-->
                <!--</a>-->
            </div>
            <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_expired"
                onclick="menu_divtoggle('a_expired','d_expired');">Expired <label>(0)</label></a>
            <div class="listing_class" style="display:none;" id="d_expired">
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&status=expired"
                    class="leftcolumnlink">All Listings</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=expired"
                    class="leftcolumnlink">For Sale (0)</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=expired"
                    class="leftcolumnlink">For Rent (0)</a>
                <!--		<a href="-->
                <!--/index.php?tabs=2&section=listings&subsection=Wanted&status=-->
                <!--" class="leftcolumnlink">-->
                <!--</a>-->
            </div>
            <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_uploaded"
                onclick="menu_divtoggle('a_uploaded','d_uploaded');">Uploaded <label>(0)</label></a>
            <div class="listing_class" style="display:none;" id="d_uploaded">
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&status=u"
                    class="leftcolumnlink">All Listings</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=u"
                    class="leftcolumnlink">For Sale (0)</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=u"
                    class="leftcolumnlink">For Rent (0)</a>
                <!--		<a href="-->
                <!--/index.php?tabs=2&section=listings&subsection=Wanted&status=-->
                <!--" class="leftcolumnlink">-->
                <!--</a>-->
            </div>
            <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_hidden"
                onclick="menu_divtoggle('a_hidden','d_hidden');">Hidden <label>(0)</label></a>
            <div class="listing_class" style="display:none;" id="d_hidden">
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&status=hidden_listings"
                    class="leftcolumnlink">All Listings</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=hidden_listings"
                    class="leftcolumnlink">For Sale (0)</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=hidden_listings"
                    class="leftcolumnlink">For Rent (0)</a>
                <!--		<a href="-->
                <!--/index.php?tabs=2&section=listings&subsection=Wanted&status=-->
                <!--" class="leftcolumnlink">-->
                <!--</a>-->
            </div>
            <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_deleted"
                onclick="menu_divtoggle('a_deleted','d_deleted');">Deleted <label>(0)</label></a>
            <div class="listing_class" style="display:none;" id="d_deleted">
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&status=Deleted"
                    class="leftcolumnlink">All Listings</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=Deleted"
                    class="leftcolumnlink">For Sale (0)</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=Deleted"
                    class="leftcolumnlink">For Rent (0)</a>
                <!--		<a href="-->
                <!--/index.php?tabs=2&section=listings&subsection=Wanted&status=-->
                <!--" class="leftcolumnlink">-->
                <!--</a>-->
            </div>
            <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_rejected"
                onclick="menu_divtoggle('a_rejected','d_rejected');">Rejected <label>(0)</label></a>
            <div class="listing_class" style="display:none;" id="d_rejected">
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&status=Rejected"
                    class="leftcolumnlink">All Listings</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=Rejected"
                    class="leftcolumnlink">For Sale (0)</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=Rejected"
                    class="leftcolumnlink">For Rent (0)</a>
                <!--		<a href="-->
                <!--/index.php?tabs=2&section=listings&subsection=Wanted&status=-->
                <!--" class="leftcolumnlink">-->
                <!--</a>-->
            </div>
            <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_downgraded"
                onclick="menu_divtoggle('a_downgraded','d_downgraded');">Downgraded <label>(0)</label></a>
            <div class="listing_class" style="display:none;" id="d_downgraded">
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&status=downgraded"
                    class="leftcolumnlink">All Listings</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=downgraded"
                    class="leftcolumnlink">For Sale (0)</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=downgraded"
                    class="leftcolumnlink">For Rent (0)</a>
                <!--		<a href="-->
                <!--/index.php?tabs=2&section=listings&subsection=Wanted&status=-->
                <!--" class="leftcolumnlink">-->
                <!--</a>-->
            </div>
            <a href="javascript:void(0);" class="leftcolumnlink_sub" id="rejected_images_head"
                onclick="menu_divtoggle('rejected_images_head','rejected_images_body');">
                Rejected Images
                <!-- <label><img style="margin-top: -10px;position: absolute;" src="{{ asset('userside') }}/images/common/new_img_small.png"></label> -->
            </a>
            <div class="listing_class" style="display:none;" id="rejected_images_body">
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=rejected_images"
                    class="leftcolumnlink">All Images</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=rejected_images&purpose=sale"
                    class="leftcolumnlink">Sales </a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=rejected_images&purpose=rent"
                    class="leftcolumnlink">For Rent</a>
                <!--	<a href="-->
                <!--/index.php?tabs=2&section=rejected_images&purpose=wanted" class="leftcolumnlink">Wanted</a>-->
            </div>


            <a href="javascript:void(0);" class="leftcolumnlink_sub" id="rejected_videos_head"
                onclick="menu_divtoggle('rejected_videos_head','rejected_videos_body');">
                Rejected Videos
                <!-- <label><img style="margin-top: -10px;position: absolute;" src="{{ asset('userside') }}/images/common/new_img_small.png"></label> -->
            </a>
            <div class="listing_class" style="display:none;" id="rejected_videos_body">
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=rejected_videos"
                    class="leftcolumnlink">All Videos</a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=rejected_videos&purpose=sale"
                    class="leftcolumnlink">Sales </a>
                <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=rejected_videos&purpose=rent"
                    class="leftcolumnlink">For Rent</a>
                <!--	<a href="-->
                <!--/index.php?tabs=2&section=rejected_videos&purpose=wanted" class="leftcolumnlink">Wanted</a>-->
            </div>
            <span class="leftcolumheadings">Credit Expiry Log</span>
            <a href="{{ asset('userside') }}/profolio/index.php?tabs=2&section=expiry_log"
                class="leftcolumnlink">View
                Log</a>

            <input type="hidden" name="active_sale_listing_count" value="0" id="active_sale_listing_count" />
            <br />
            <form name="frm_ref" id="frm_ref" action="?tabs=2&section=inventory_search" method="post">
                Search:&nbsp;
                <input type="text" id="txt_idref" class="auto_textbox empty" name="txt_idref" defvalue="ID or Ref"
                    value="ID or Ref" style="width:93px" />&nbsp;<img
                    src="https://assets.zameen.com/profolio/images/auto_utilization_go_button1_1.png"
                    style="cursor:pointer;" align="absmiddle" onclick="document.frm_ref.submit();" />
            </form>
            <!-- Google Ads display -->
            <div id='div-gpt-ad-sidebar' style='width:1px; height: 1px; margin-top: 20px;'>
                <script type='text/javascript'>
                    googletag.cmd.push(function() {
                        googletag.defineSlot('Profolio_Propmanagment_Side', [183, 400], 'div-gpt-ad-sidebar').addService(
                            googletag.pubads());
                        googletag.enableServices();
                        googletag.display('div-gpt-ad-sidebar');
                    });
                </script>
            </div>



        </div>

        <input type=hidden name=client_ownerlist id=client_ownerlist value=(1001393654)>
    </div>
