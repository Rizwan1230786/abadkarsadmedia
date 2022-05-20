@extends('userside.layout')
@section('main')

<style>
	.d-none {
		display: none;
	}
</style>

<body>

	<div class="box_title">
		<div><b>Inventory Search</b></div>
	</div>
	<div class="box_body" style="width:97.6%">
		<div style="display:none">
			<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='hiddenSquareFeet' name='hiddenSquareFeet' onchange="" style='display:none;'>
					<option value='0'>Any</option>
					<option value='225'>Below 225 Sq Ft</option>
					<option value='225_1125'>225 to 1125 Sq Ft</option>
					<option value='1125_2250'>1125 to 2250 Sq Ft</option>
					<option value='2250_3375'>2250 to 3375 Sq Ft</option>
					<option value='3375_4500'>3375 to 4500 Sq Ft</option>
					<option value='4500_5625'>4500 to 5625 Sq Ft</option>
					<option value='5625_6750'>5625 to 6750 Sq Ft</option>
					<option value='6750_7875'>6750 to 7875 Sq Ft</option>
					<option value='7875_9000'>7875 to 9000 Sq Ft</option>
				</select>
				<div tabindex='0' id='hiddenSquareFeet_combo' onmousedown='toggle_contaier("hiddenSquareFeet_container");' onmouseout='setflag(0);' onblur='hc("hiddenSquareFeet");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '>
					<div id='hiddenSquareFeet_combo_text' class='cm_combo_txt' style='width:80px;' onmouseout='setflag(0);' onblur='hc("hiddenSquareFeet");'>Any</div>
					<div class='cm_combo_img' onmouseout='setflag(0);' onblur='hc("hiddenSquareFeet");'></div>
				</div>
				<div tabindex='0' id='hiddenSquareFeet_container' onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("hiddenSquareFeet"); style='display: none; z-index:1000; ' class='cm_container facebox'>
					<div class='facebox_popup'>
						<table style='width: 251px;'>
							<tr>
								<td class='facebox_tl' />
								<td class='facebox_b' />
								<td class='facebox_tr' />
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!--action="https://profolio.zameen.com/profolio/includes/inventory_search/inventory_results.php"-->
		<form name="frm_inventorysearch" id="form_serializa" class="frm_inventorysearch" method="post" action="?ajax=1&ajax_section=dash_prop_invent&ajax_action=get_inventory_search_list">
			<div id="search">
				<div class="searchbox" style="padding:1%">
					<div class="search_div">
						<label class="search_label">Type</label>
						<span>
							<div class='cm' style='width: 100px;  '>
								<select class="cat cm_combo style-update" width='100' name='category_id' style='width: 100px;'>
									<option value=''>Any</option>
									@foreach($category as $val)
									<option value='{{$val->id}}'>{{$val->name}}</option>
									@endforeach
								</select>
							</div>
						</span>
						<div id="subtype_container"><select id="subtype_select" class="cm_combo style-update d-none" width="100" name="subcat_id" style="margin-left:20px ;">
								<option value="">Any</option>
							</select></div>
					</div>
					<div class="search_div">
						<label class="search_label">Purpose</label>
						<span>
							<div class='cm' style='width: 100px;  '>
								<select class="cm_combo style-update" width='100' id='type_n' name='property_perpose' onchange="" style='width: 100px;'>
									<option value=''>Any</option>
									<option value='for_sale'>Buy</option>
									<option value='for_rent'>Rent</option>
								</select>
							</div>
						</span>
					</div>
					<div class="search_div">
						<label class="search_label">Area</label>
						<span>
							<div class='cm' style='width: 100px;  '>
								<select class="cm_combo style-update" width='100' id='type_n' name='size' onchange="" style='width: 100px;'>
									<option value=''>Any</option>
									<option value='225'>Below 1 Marla</option>
									<option value='225_1125'>1 to 5 Marla</option>
									<option value='1125_2250'>5 to 10 Marla</option>
									<option value='2250_3375'>10 to 15 Marla</option>
									<option value='3375_4500'>15 to 20 Marla</option>
									<option value='4500_5625'>20 to 25 Marla</option>
									<option value='5625_6750'>25 to 30 Marla</option>
									<option value='6750_7875'>30 to 35 Marla</option>
									<option value='7875_9000'>35 to 40 Marla</option>
								</select>
							</div>
						</span>
					</div>
					<div class="search_div">
						<label class="search_label">Price</label>
						<span>
							<div class='cm' style='width: 100px;  '>
								<select class="cm_combo style-update" width='100' name='price' onchange="" style='width: 100px;'>
									<option value=''>Any</option>
									<option value='200000'>Under 200,000</option>
									<option value='200000_500000'>200,000 to 500,000</option>
									<option value='500000_750000'>500,000 to 750,000</option>
									<option value='750000_1000000'>750,000 to 1,000,000</option>
									<option value='1000000_2000000'>1,000,000 to 2,000,000</option>
									<option value='2000000_5000000'>2,000,000 to 5,000,000</option>
									<option value='5000000'>over 5,000,000</option>
								</select>
							</div>
						</span>
					</div>
					<div class="search_div">
						<label class="search_label">Location</label>
						<span>
							<div class='cm' style='width: 100px;  '>
								<select class="location cm_combo style-update" width='100' name='location' style='width: 100px;'>
									<option value=''>Any</option>
									<option value='pakistan'>Pakistan</option>
								</select>
							</div>
						</span>
						<!-- State Picker -->
						<span>
							<div id="State_container"><select id="location_select" class="state cm_combo style-update d-none" width="100" name="state_id" style="margin-left:20px ;">
									<option value="">Any</option>
								</select></div>
						</span>
						<!-- City Picker -->
						<span>
							<div id="City_container"><select id="state_select" class="city cm_combo style-update d-none" width="100" name="city_id" style="margin-left:20px ;">
									<option value="">Any</option>
								</select></div>
						</span>
						<!-- Area Picker -->
						<span>
							<div id="Area_container"><select id="city_select" class="cm_combo style-update d-none" width="100" name="area_id" style="margin-left:40px ;">
									<option value="">Any</option>
								</select></div>
						</span>

					</div>
					<div class="search_div">
						<label class="search_label">Users</label>
						<span>
							<div class='cm' style='width: 100px;  '>
								<select class="cm_combo style-update" width='100' name='user_name' onchange="" style='width: 100px;'>
									<option value=''>Any</option>
									<option value='member'>abadkar.com member</option>
									<option value='user'>{{auth()->user()->firstname}}</option>
								</select>
							</div>
						</span>
					</div>
					<div class="search_div">
						<label class="search_label">Construction Status</label>
						<span>
							<div class='cm' style='width: 100px;  '>
								<select class="cm_combo style-update" width='100' onkeyup='filter_items();' id='type_n' name='bulding_status' onchange="" style='width: 100px;'>
									<option value=''>Any</option>
									<option value='Complete'>Complete</option>
									<option value='Under Construction'>Under Construction</option>
								</select>
							</div>
						</span>
					</div>
					<div class="search_div">
						<label class="search_label">ID or Ref</label>
						<span>
							<input type="text" id="txt_idref" name="id_or_ref" value="" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />
						</span>
						<div id="subtype_container" style="display:none;"></div>
					</div>
					<div class="search_div">
						<label class="search_label">Listed Date</label>
						<span style="width:45%">
							<input type="date" id="txt_listed_date_from" name="date_from" value="" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />&nbsp;&nbsp;To&nbsp;&nbsp;<input type="date" id="txt_listed_date_to" name="date_to" value="" data-value="1" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />
						</span>
						<div id="subtype_container" style="display:none;"></div>
					</div>

					<div class="search_div">
						<label class="search_label">Contact Person</label>
						<span>
							<input type="text" id="txt_person_name" name="contact_person_name" value="" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />
						</span>
						<div id="subtype_container" style="display:none;"></div>
					</div>

					<div class="search_div">
						<label class="search_label">Contact Cell</label>
						<span>
							<input type="text" id="txt_cell" name="contact_phone" value="" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />
						</span>
						<div id="subtype_container" style="display:none;"></div>
					</div>
					<br>
					<div class="search_div">
						<label class="search_label">&nbsp;</label>
						<span>
							<!-- <a href="javascript:void(0)" name="sbsearch" id="sbsearch" onclick="submit_inventoryform();"><img src="/images/search_button1_1.png" border="0" /></a> -->
							<a href="javascript:void(0)" name="sbsearch" id="form_submit" class="search-box" style="background-color: #FF385c ;color: #ffffff;padding: 5px 24px;font-size: 12px;border-radius: 14px;">Search</a>
						</span>
					</div>
					<br>
				</div>
			</div>
			<input type='hidden' name='order_by' id='order_by' value='' />
			<input type="hidden" name="_token" value="768739f3e486beee9dfa0ade40589f68fb0d3f9151fd9d1fb84c4b957272b3ea">
		</form>
	</div>

	<div class="box_title">
        <div><b>Inventory Results</b></div>
    </div>
    <div class="box_body listing-property-profolio" id="Sale_listings" style="padding: 0px; ">
        <div id="Sale_select" class="details-listing-table">
    Show: <select class="show_select radius-4p" style="margin-left:10px; width:60px;margin-right:10px;">
                            <option value="10" selected >10</option></select>  listings per page		<input type="hidden" name="listing_platform" class="listing_platform" value="" id="drp-Sale-input">
        </div>
        <input type="hidden" id="st_1" name="st_1" value="0" />
        <div class="details-listing-table">Sort By:&nbsp;
            <select name="order_Sale" class="radius-4p" id="order_Sale">
                <option value="order_by_selector">ID</option>
                <option value="order_by_type2title">Type</option>
                <option value="order_by_title">Location</option>
                <option value="order_by_price">Price</option>
                <option value="order_by_edate">Expiry</option>
                <option value="order_by_counter">Views</option>
                <option value="order_by_image_count">Listing images count</option>
            </select>&nbsp;in&nbsp;
            <select name="by_Sale" class="radius-4p" id="by_Sale">
                <option value="ASC">Ascending</option>
                <option value="DESC" selected="selected">Descending</option>
            </select>&nbsp;order.&nbsp;
            <img id="go_Sale" class="go_sort" src="https://assets.zameen.com/profolio/images/auto_utilization_go_button1_1.png" border="0" align="absmiddle" style="cursor:pointer;" />
        </div>

        <div class="ant-table" id="data_Sale" style="height:auto">
            <table class="main-table" cellpadding="0" cellspacing="0" style="margin-bottom: 18px;">
                <tbody>
                    <tr>
                        <td class="col-9">
                            <input type="hidden" id="is_new_olx_system" name="is_new_olx_system" value="">
                            <table class="listing_table list-table-left">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="padding:0px 0px 0px 15px;width: 13px;">
                                            <input type="checkbox" name="chkall_Sale" class="margin-0 chk_all" id="chkall_Sale" />
                                        </th>
                                        <th style="padding:0px 0px 0px 15px;">ID</th>
                                        <th>Type</th>
                                        <th>Location</th>
                                        <th>Details</th>
                                        <th>Price (PKR)</th>
                                        <th>Views</th>
                                        <th>Image</th>
                                        <th>Health</th>
                                        <th>Platform</th>
                                        <th>Quota</th>
                                        <th>Listed Date</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody style="float: none;">

                                    <tr id="selector_38486606" class="grid-column-data">
                                        <td style="padding: 0px 15px;" class="checkbox-inventor-table">
                                            <input type="checkbox" name="chk_38486606" class="margin-0" id="chk_38486606" style="position:relative;top:-2px;" />
                                        </td>
                                        <td class="selector-id-table inventory">38486606</td>
                                        <td class="property-type-table">House&nbsp;</td>

                                        <td class="table-location">
                                            <a href="javascript:void(0);" onmouseover="overlib('Punjab &raquo; Rahim Yar Khan &raquo; Manthar Road &raquo; Fahad Garden Housing Scheme',CAPTION,'Location',HEIGHT,40,WIDTH,300);" onmouseout="nd();">
                                                Fahad Garden Housing ... <img src="https://assets.zameen.com/profolio/images/icon-notification.svg" width="12" class="intimation-icon" border="0" />
                                            </a>
                                        </td>

                                        <td class="title-details-table">
                                            For Sale<br>900 sq. ft. </td>
                                        <td class="title-price-table">2,500,000</td>


                                        <!-- <td>Test Name</td> -->
                                        <td class="title-view-table">51</td>
                                        <td class="quota-image">0</td>
                                        <td class="health-toltip">
                                            <a href="javascript:void(0);" class="non-plot-listings-health" age-color-msg="2-green-Freshness score is full!" unique-images-color-msg="0-red-Upload maximum number of unique images!" feature-color-msg="3-green-Feature score is full! ">
                                                <span class="" style="display:block;border-radius:5px;width:18px;background-color:yellow;color: white;;">&nbsp;&nbsp;</span>

                                            </a>
                                        </td>
                                        <td class="table-platform multirow">
                                            <table class="table-inside" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                    <tr class="">
                                                        <td name="Sale">
                                                            <a href="javascript:void(0);" class="platform-logo   show-listing-status " data-status="Active" data-selector="38486606" data-platform='Zameen' data-purpose='1' data-type='9' data-location='13862' data-userid='1001388906'>

                                                                <img src="https://assets.zameen.com/profolio/images/zameen-icon-logo1_1.svg" alt="image" border="0" class="">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class=" olx-hide">

                                                        <td name="Sale" class="olx-border-transparent ">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td class="quota-used multirow">
                                            <table class="table-inside" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                    <tr class="">
                                                        <td>1</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td class="table-listdate multirow">
                                            <table class="table-inside" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                    <tr class="">
                                                        <td class="listed-date z-date">
                                                            <a href="javascript:void(0);" onmouseover="overlib('Expiry: 16 Aug 2022',CAPTION,'Expiry',HEIGHT,25,WIDTH,150);" onmouseout="nd();">
                                                                18 May 2022 <img src="https://assets.zameen.com/profolio/images/icon-notification.svg" width="12" class="intimation-icon dicon" border="0" />
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class=" olx-hide">
                                                        <td class="listed-date olx-date ">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>

                                        <td class="table-listing-action multirow">
                                            <table class="table-inside" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                    <tr class="" style="font-size:0">
                                                        <td class="action_td">
                                                            <ul class="icon-list">
                                                                <li name="Sale">
                                                                    <a href="javascript:void(0);" class="super-hot-icon superhot tooltip-wrapper" data-days="0" data-hrs="0" id="super_h_38486606" name="" user="" rel="">
                                                                    </a>
                                                                </li>
                                                                <li name="Sale"><a href="javascript:void(0);" class="hot-icon tooltip-wrapper mhot" data-days="0" data-hrs="0" id="h_38486606" name="" user="" rel="">
                                                                    </a></li>

                                                                <li name="Sale">
                                                                    <a class="refresh-icon tooltip-wrapper go_refresh_listing go_refresh_listing" href="javascript:void(0);" accesskey="" rel="no_quota" id="refr_38486606" name="1001388906"></a>
                                                                    <input type="hidden" name="credit_util" id="credit_util_38486606" value="1">
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td class="action_btn zbtn">
                                                            <div class="dropdown" onclick="myFunction(this)">
                                                                <button class="dropbtn option_listing_table"></button>
                                                                <div id="myDropdown_38486606" class="dropdown-content">
                                                                    <ul class="dp_list">
                                                                        <li name="Sale">
                                                                            <a href="javascript:void(0);" class="view_detail_new" id="view_38486606">
                                                                                <span><img src="https://assets.zameen.com/profolio/images/list_icon_1.png" alt="image"></span>
                                                                                Listing Detail
                                                                            </a>
                                                                        </li>
                                                                        <li name="Sale">
                                                                            <a href='https://profolio.zameen.com/profolio/index.php?tabs=2&section=edit_property&id=38486606' onmouseover="return overlib('Click to edit listing',CELLPAD, 5, 5,CAPTION,'Edit Listing');" onmouseout="return nd();">
                                                                                <span><img src="https://assets.zameen.com/profolio/images/list_icon_2.png" alt="image"></span>
                                                                                Edit Listing
                                                                            </a>
                                                                        </li>
                                                                        <li name="Sale">
                                                                            <a href="javascript:void(0);" class="hide_listing" data-show="1" id="d_38486606" name="1">
                                                                                <span><img src="https://assets.zameen.com/profolio/images/list_icon_4.png" width="18" alt="image"></span>
                                                                                Hide Listing
                                                                            </a>
                                                                        </li>
                                                                        <li name="Sale" disabled>
                                                                            <a href="javascript:void(0);" class="no_priv_del cta-disabled" data-name='Undeleted' data-hrs="1" data-show="1" id="d_38486606" name="1" disabled>
                                                                                <span><img src="https://assets.zameen.com/profolio/images/delete_icon_disabled.svg" alt="image"></span>
                                                                                Delete Listing
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class=" olx-hide" style="font-size:0">
                                                        <td colspan=2></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="height:30px;overflow:hidden;margin-bottom:0px;;background: #f2f2f2;width: 100%;">
            <div style="float:left;margin-top:7px;width: 20%;margin-left: 10px;font-weight: bold;">
                Total Listings: <span id="total_Sale">0</span>
            </div>
            <div id="Sale" style="text-align:right;width:78%;float:right" class="paginate">
                            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-lg-12">
			<table id="table_container" class="d-none table table-striped" style="width:100% ;">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">First</th>
						<th scope="col">Last</th>
						<th scope="col">Handle</th>
					</tr>
				</thead>
				<tbody id="table_data">
				</tbody>
			</table>
		</div>
	</div>
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
						$('#subtype_select').html('');
						$('#subtype_select').html('<option value="">Any</option');
						$('#subtype_select').removeClass('d-none');
						$.each(result.subcat, function(key, value) {
							$('#subtype_select').append($('<option>', {
								value: value.id,
								text: value.name
							}));
						});
					}
				});
			});
		});
	</script>
	<!-- State picker -->
	<script>
		$(document).ready(function() {
			$('.location').on('change', function() {
				var cat_id = this.value;
				$.ajax({
					url: "{{ url('user/fetch-states') }}",
					type: "POST",
					data: {
						cat_id: cat_id,
						_token: '{{ csrf_token() }}'
					},
					dataType: 'json',
					success: function(result) {
						$('#location_select').html('');
						$('#location_select').html('<option value="">Any</option');
						$('#location_select').removeClass('d-none');
						$.each(result.state, function(key, value) {
							$('#location_select').append($('<option>', {
								value: value.name,
								text: value.name
							}));
						});
					}
				});
			});
		});
	</script>
	<!-- City picker -->
	<script>
		$(document).ready(function() {
			$('.state').on('change', function() {
				var state_id = this.value;
				$.ajax({
					url: "{{ url('user/fetch-city') }}",
					type: "POST",
					data: {
						state_id: state_id,
						_token: '{{ csrf_token() }}'
					},
					dataType: 'json',
					success: function(result) {
						$('#state_select').html('');
						$('#state_select').html('<option value="">Any</option');
						$('#state_select').removeClass('d-none');
						$.each(result.city, function(key, value) {
							$('#state_select').append($('<option>', {
								value: value.id,
								text: value.name
							}));
						});
					}
				});
			});
		});
	</script>
	<!-- Area picker -->
	<script>
		$(document).ready(function() {
			$('.city').on('change', function() {
				var city_id = this.value;
				$.ajax({
					url: "{{ url('user/fetch-area') }}",
					type: "POST",
					data: {
						city_id: city_id,
						_token: '{{ csrf_token() }}'
					},
					dataType: 'json',
					success: function(result) {
						$('#city_select').html('');
						$('#city_select').html('<option value="">Any</option');
						$('#city_select').removeClass('d-none');
						$.each(result.area, function(key, value) {
							$('#city_select').append($('<option>', {
								value: value.id,
								text: value.areaname
							}));
						});
					}
				});
			});
		});
	</script>
	<!-- Form Submit -->
	<script>
		$(document).ready(function() {
			$('#form_submit').on('click', function() {
				var data = $('#form_serializa').serialize();
				$.ajax({
					url: "{{ url('user/fetch-data') }}",
					type: "POST",
					data: {
						data: data,
						_token: '{{ csrf_token() }}',
					},

					dataType: 'json',
					success: function(result) {
						$('#table_data').html('');
						$('#table_container').removeClass('d-none');
						$.each(result, function(key, value) {
							$('#table_data').append('<tr><td scope="col">' + value.id + '</td><td scope="col">' + value.name + '</td></tr>');
						});
					}
				});
			});
		});
	</script>

	@endsection
