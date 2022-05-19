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
							<tr>
								<td class='facebox_b' />
								<td class='facebox_body'>
									<div class='facebox_content'>
										<div>
											<ul>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','0');  ">Any</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','225');  ">Below 225 Sq Ft</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','225_1125');  ">225 to 1125 Sq Ft</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','1125_2250');  ">1125 to 2250 Sq Ft</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','2250_3375');  ">2250 to 3375 Sq Ft</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','3375_4500');  ">3375 to 4500 Sq Ft</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','4500_5625');  ">4500 to 5625 Sq Ft</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','5625_6750');  ">5625 to 6750 Sq Ft</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','6750_7875');  ">6750 to 7875 Sq Ft</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','7875_9000');  ">7875 to 9000 Sq Ft</li>
											</ul>
											<div class='si'><input id='hiddenSquareFeet_input1' onmouseover='setflag(1)' onblur='hc("hiddenSquareFeet"); ' type='text' tabindex='0' /><label> to </label><input id='hiddenSquareFeet_input2' onmouseover='setflag(1)' onblur='hc("hiddenSquareFeet"); ' type='text' tabindex='0' /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif' onmouseover='setflag(1)' onblur='hc("hiddenSquareFeet");' onmousedown='add_select_option("hiddenSquareFeet","hiddenSquareFeet_input1","hiddenSquareFeet_input2","","")' /> </div>
										</div>
									</div>

								</td>
								<td class='facebox_b' />
							</tr>
							<tr>
								<td class='facebox_bl' />
								<td class='facebox_b' />
								<td class='facebox_br' />
							</tr>

						</table>
					</div>
				</div>
			</div>
			<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='hiddenSquareMeters' name='hiddenSquareMeters' onchange="" style='display:none;'>
					<option value='0'>Any</option>
					<option value='225'>Below 21 Sq m</option>
					<option value='225_1125'>21 to 105 Sq m</option>
					<option value='1125_2250'>105 to 209 Sq m</option>
					<option value='2250_3375'>209 to 314 Sq m</option>
					<option value='3375_4500'>314 to 418 Sq m</option>
					<option value='4500_5625'>418 to 523 Sq m</option>
					<option value='5625_6750'>523 to 627 Sq m</option>
					<option value='6750_7875'>627 to 732 Sq m</option>
					<option value='7875_9000'>732 to 836 Sq m</option>
				</select>
				<div tabindex='0' id='hiddenSquareMeters_combo' onmousedown='toggle_contaier("hiddenSquareMeters_container");' onmouseout='setflag(0);' onblur='hc("hiddenSquareMeters");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '>
					<div id='hiddenSquareMeters_combo_text' class='cm_combo_txt' style='width:80px;' onmouseout='setflag(0);' onblur='hc("hiddenSquareMeters");'>Any</div>
					<div class='cm_combo_img' onmouseout='setflag(0);' onblur='hc("hiddenSquareMeters");'></div>
				</div>
				<div tabindex='0' id='hiddenSquareMeters_container' onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("hiddenSquareMeters"); style='display: none; z-index:1000; ' class='cm_container facebox'>
					<div class='facebox_popup'>
						<table style='width: 251px;'>
							<tr>
								<td class='facebox_tl' />
								<td class='facebox_b' />
								<td class='facebox_tr' />
							</tr>
							<tr>
								<td class='facebox_b' />
								<td class='facebox_body'>
									<div class='facebox_content'>
										<div>
											<ul>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','0');  ">Any</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','225');  ">Below 21 Sq m</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','225_1125');  ">21 to 105 Sq m</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','1125_2250');  ">105 to 209 Sq m</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','2250_3375');  ">209 to 314 Sq m</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','3375_4500');  ">314 to 418 Sq m</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','4500_5625');  ">418 to 523 Sq m</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','5625_6750');  ">523 to 627 Sq m</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','6750_7875');  ">627 to 732 Sq m</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','7875_9000');  ">732 to 836 Sq m</li>
											</ul>
											<div class='si'><input id='hiddenSquareMeters_input1' onmouseover='setflag(1)' onblur='hc("hiddenSquareMeters"); ' type='text' tabindex='0' /><label> to </label><input id='hiddenSquareMeters_input2' onmouseover='setflag(1)' onblur='hc("hiddenSquareMeters"); ' type='text' tabindex='0' /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif' onmouseover='setflag(1)' onblur='hc("hiddenSquareMeters");' onmousedown='add_select_option("hiddenSquareMeters","hiddenSquareMeters_input1","hiddenSquareMeters_input2","","")' /> </div>
										</div>
									</div>

								</td>
								<td class='facebox_b' />
							</tr>
							<tr>
								<td class='facebox_bl' />
								<td class='facebox_b' />
								<td class='facebox_br' />
							</tr>

						</table>
					</div>
				</div>
			</div>
			<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='hiddenSquareYards' name='hiddenSquareYards' onchange="" style='display:none;'>
					<option value='0'>Any</option>
					<option value='225'>Below 25 Sq y</option>
					<option value='225_1125'>25 to 125 Sq y</option>
					<option value='1125_2250'>125 to 250 Sq y</option>
					<option value='2250_3375'>250 to 375 Sq y</option>
					<option value='3375_4500'>375 to 500 Sq y</option>
					<option value='4500_5625'>500 to 625 Sq y</option>
					<option value='5625_6750'>625 to 750 Sq y</option>
					<option value='6750_7875'>750 to 875 Sq y</option>
					<option value='7875_9000'>875 to 1000 Sq y</option>
				</select>
				<div tabindex='0' id='hiddenSquareYards_combo' onmousedown='toggle_contaier("hiddenSquareYards_container");' onmouseout='setflag(0);' onblur='hc("hiddenSquareYards");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '>
					<div id='hiddenSquareYards_combo_text' class='cm_combo_txt' style='width:80px;' onmouseout='setflag(0);' onblur='hc("hiddenSquareYards");'>Any</div>
					<div class='cm_combo_img' onmouseout='setflag(0);' onblur='hc("hiddenSquareYards");'></div>
				</div>
				<div tabindex='0' id='hiddenSquareYards_container' onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("hiddenSquareYards"); style='display: none; z-index:1000; ' class='cm_container facebox'>
					<div class='facebox_popup'>
						<table style='width: 251px;'>
							<tr>
								<td class='facebox_tl' />
								<td class='facebox_b' />
								<td class='facebox_tr' />
							</tr>
							<tr>
								<td class='facebox_b' />
								<td class='facebox_body'>
									<div class='facebox_content'>
										<div>
											<ul>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','0');  ">Any</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','225');  ">Below 25 Sq y</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','225_1125');  ">25 to 125 Sq y</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','1125_2250');  ">125 to 250 Sq y</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','2250_3375');  ">250 to 375 Sq y</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','3375_4500');  ">375 to 500 Sq y</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','4500_5625');  ">500 to 625 Sq y</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','5625_6750');  ">625 to 750 Sq y</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','6750_7875');  ">750 to 875 Sq y</li>
												<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','7875_9000');  ">875 to 1000 Sq y</li>
											</ul>
											<div class='si'><input id='hiddenSquareYards_input1' onmouseover='setflag(1)' onblur='hc("hiddenSquareYards"); ' type='text' tabindex='0' /><label> to </label><input id='hiddenSquareYards_input2' onmouseover='setflag(1)' onblur='hc("hiddenSquareYards"); ' type='text' tabindex='0' /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif' onmouseover='setflag(1)' onblur='hc("hiddenSquareYards");' onmousedown='add_select_option("hiddenSquareYards","hiddenSquareYards_input1","hiddenSquareYards_input2","","")' /> </div>
										</div>
									</div>

								</td>
								<td class='facebox_b' />
							</tr>
							<tr>
								<td class='facebox_bl' />
								<td class='facebox_b' />
								<td class='facebox_br' />
							</tr>

						</table>
					</div>
				</div>
			</div>
			<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='hiddenMarla' name='hiddenMarla' onchange="" style='display:none;'>
					<option value='0'>Any</option>
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
			<div style="clear:both;"></div>
		</div>
		<!--action="https://profolio.zameen.com/profolio/includes/inventory_search/inventory_results.php"-->
		<form name="frm_inventorysearch" id="frm_inventorysearch" class="frm_inventorysearch" method="post" action="?ajax=1&ajax_section=dash_prop_invent&ajax_action=get_inventory_search_list">
			<div id="search">
				<div class="searchbox" style="padding:1%">
					<input type="hidden" name="listing_platform" value="" id="dropdown-content-tab-inventory-input">
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
								<select class="cm_combo style-update" width='100' onkeyup='filter_items();' id='type_n' name='type_n' onchange="" style='width: 100px;'>
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
								<select class="cm_combo style-update" width='100' onkeyup='filter_items();' id='type_n' name='type_n' onchange="" style='width: 100px;'>
									<option value='0'>Any</option>
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
								<select class="cm_combo style-update" width='100' onkeyup='filter_items();' id='type_n' name='type_n' onchange="" style='width: 100px;'>
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
								<select class="cm_combo style-update" width='100' onkeyup='filter_items();' id='type_n' name='type_n' onchange="" style='width: 100px;'>
									<option value='0'>Any</option>
									<option value='225'>abadkar.com member</option>
									<option value='225_1125' selected>{{auth()->user()->name}}</option>
								</select>
							</div>
						</span>
					</div>
					<div class="search_div">
						<label class="search_label">Construction Status</label>
						<span>
							<div class='cm' style='width: 100px;  '>
								<select class="cm_combo style-update" width='100' onkeyup='filter_items();' id='type_n' name='type_n' onchange="" style='width: 100px;'>
									<option value='0'>Any</option>
									<option value='Complete'>Complete</option>
									<option value='Under Construction'>Under Construction</option>
								</select>
							</div>
						</span>
					</div>
					<div class="search_div">
						<label class="search_label">ID or Ref</label>
						<span>
							<input type="text" id="txt_idref" name="txt_idref" value="" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />
						</span>
						<div id="subtype_container" style="display:none;"></div>
					</div>
					<div class="search_div">
						<label class="search_label">Listed Date</label>
						<span style="width:45%">
							<input type="date" id="txt_listed_date_from" name="txt_listed_date_from" value="" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />&nbsp;&nbsp;To&nbsp;&nbsp;<input type="date" id="txt_listed_date_to" name="txt_listed_date_to" value="" data-value="1" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />
						</span>
						<div id="subtype_container" style="display:none;"></div>
					</div>

					<div class="search_div">
						<label class="search_label">Contact Person</label>
						<span>
							<input type="text" id="txt_person_name" name="txt_person_name" value="" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />
						</span>
						<div id="subtype_container" style="display:none;"></div>
					</div>

					<div class="search_div">
						<label class="search_label">Contact Cell</label>
						<span>
							<input type="text" id="txt_cell" name="txt_cell" value="" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />
						</span>
						<div id="subtype_container" style="display:none;"></div>
					</div>
					<br>
					<div class="search_div">
						<label class="search_label">&nbsp;</label>
						<span>
							<!-- <a href="javascript:void(0)" name="sbsearch" id="sbsearch" onclick="submit_inventoryform();"><img src="/images/search_button1_1.png" border="0" /></a> -->
							<a href="javascript:void(0)" name="sbsearch" id="sbsearch" class="search-box" onclick="submit_inventoryform();" style="background-color: #FF385c ;color: #ffffff;padding: 5px 24px;font-size: 12px;border-radius: 14px;">Search</a>
						</span>
					</div>
					<br>
				</div>
			</div>
			<input type="hidden" name="h_areaunit" id="h_areaunit" value="Marla" />
			<input type='hidden' name='order_by' id='order_by' value='' />
			<input type="hidden" name="_token" value="768739f3e486beee9dfa0ade40589f68fb0d3f9151fd9d1fb84c4b957272b3ea">
		</form>
		<div id='subtypes_1' style='display:none'><label class='search_label' style='position:relative;top:5px;width:55px;padding-left:45px;'><img src='https://profolio.zameen.com/gmaps/imgs/arrow_0.gif'></label><span id='ajax_subtype1'>
				<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='subtype_n' name='subtype_n' onchange="" style='display:none;'>
						<option value='0'>Any</option>
						<option value='9'>Houses</option>
						<option value='8'>Flats</option>
						<option value='21'>Upper Portions</option>
						<option value='22'>Lower Portions</option>
						<option value='20'>Farm Houses</option>
						<option value='24'>Rooms</option>
						<option value='25'>Penthouse</option>
					</select>
					<div tabindex='0' id='subtype_n_combo' onmousedown='toggle_contaier("subtype_n_container");' onmouseout='setflag(0);' onblur='hc("subtype_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '>
						<div id='subtype_n_combo_text' class='cm_combo_txt' style='width:80px;' onmouseout='setflag(0);' onblur='hc("subtype_n");'>Any</div>
						<div class='cm_combo_img' onmouseout='setflag(0);' onblur='hc("subtype_n");'></div>
					</div>
					<div tabindex='0' id='subtype_n_container' onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("subtype_n"); style='display: none; z-index:1000; ' class='cm_container facebox'>
						<div class='facebox_popup'>
							<table style='width: 217px;'>
								<tr>
									<td class='facebox_tl' />
									<td class='facebox_b' />
									<td class='facebox_tr' />
								</tr>
								<tr>
									<td class='facebox_b' />
									<td class='facebox_body'>
										<div class='facebox_content'>
											<div>
												<ul>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','0');  ">Any</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','9');  ">Houses</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','8');  ">Flats</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','21');  ">Upper Portions</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','22');  ">Lower Portions</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','20');  ">Farm Houses</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','24');  ">Rooms</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','25');  ">Penthouse</li>
												</ul>
											</div>
										</div>

									</td>
									<td class='facebox_b' />
								</tr>
								<tr>
									<td class='facebox_bl' />
									<td class='facebox_b' />
									<td class='facebox_br' />
								</tr>

							</table>
						</div>
					</div>
				</div>
			</span></div>
		<div id='subtypes_2' style='display:none'><label class='search_label' style='position:relative;top:5px;width:55px;padding-left:45px;'><img src='https://profolio.zameen.com/gmaps/imgs/arrow_0.gif'></label><span id='ajax_subtype1'>
				<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='subtype_n' name='subtype_n' onchange="" style='display:none;'>
						<option value='0'>Any</option>
						<option value='12'>Residential Plots</option>
						<option value='11'>Commercial Plots</option>
						<option value='19'>Agricultural Land</option>
						<option value='27'>Industrial Land</option>
						<option value='23'>Plot Files</option>
						<option value='26'>Plot Forms</option>
					</select>
					<div tabindex='0' id='subtype_n_combo' onmousedown='toggle_contaier("subtype_n_container");' onmouseout='setflag(0);' onblur='hc("subtype_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '>
						<div id='subtype_n_combo_text' class='cm_combo_txt' style='width:80px;' onmouseout='setflag(0);' onblur='hc("subtype_n");'>Any</div>
						<div class='cm_combo_img' onmouseout='setflag(0);' onblur='hc("subtype_n");'></div>
					</div>
					<div tabindex='0' id='subtype_n_container' onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("subtype_n"); style='display: none; z-index:1000; ' class='cm_container facebox'>
						<div class='facebox_popup'>
							<table style='width: 217px;'>
								<tr>
									<td class='facebox_tl' />
									<td class='facebox_b' />
									<td class='facebox_tr' />
								</tr>
								<tr>
									<td class='facebox_b' />
									<td class='facebox_body'>
										<div class='facebox_content'>
											<div>
												<ul>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','0');  ">Any</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','12');  ">Residential Plots</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','11');  ">Commercial Plots</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','19');  ">Agricultural Land</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','27');  ">Industrial Land</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','23');  ">Plot Files</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','26');  ">Plot Forms</li>
												</ul>
											</div>
										</div>

									</td>
									<td class='facebox_b' />
								</tr>
								<tr>
									<td class='facebox_bl' />
									<td class='facebox_b' />
									<td class='facebox_br' />
								</tr>

							</table>
						</div>
					</div>
				</div>
			</span></div>
		<div id='subtypes_3' style='display:none'><label class='search_label' style='position:relative;top:5px;width:55px;padding-left:45px;'><img src='https://profolio.zameen.com/gmaps/imgs/arrow_0.gif'></label><span id='ajax_subtype1'>
				<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='subtype_n' name='subtype_n' onchange="" style='display:none;'>
						<option value='0'>Any</option>
						<option value='13'>Offices</option>
						<option value='15'>Shops</option>
						<option value='17'>Warehouses</option>
						<option value='14'>Factories</option>
						<option value='16'>Buildings</option>
						<option value='18'>Other</option>
					</select>
					<div tabindex='0' id='subtype_n_combo' onmousedown='toggle_contaier("subtype_n_container");' onmouseout='setflag(0);' onblur='hc("subtype_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '>
						<div id='subtype_n_combo_text' class='cm_combo_txt' style='width:80px;' onmouseout='setflag(0);' onblur='hc("subtype_n");'>Any</div>
						<div class='cm_combo_img' onmouseout='setflag(0);' onblur='hc("subtype_n");'></div>
					</div>
					<div tabindex='0' id='subtype_n_container' onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("subtype_n"); style='display: none; z-index:1000; ' class='cm_container facebox'>
						<div class='facebox_popup'>
							<table style='width: 217px;'>
								<tr>
									<td class='facebox_tl' />
									<td class='facebox_b' />
									<td class='facebox_tr' />
								</tr>
								<tr>
									<td class='facebox_b' />
									<td class='facebox_body'>
										<div class='facebox_content'>
											<div>
												<ul>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','0');  ">Any</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','13');  ">Offices</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','15');  ">Shops</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','17');  ">Warehouses</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','14');  ">Factories</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','16');  ">Buildings</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','18');  ">Other</li>
												</ul>
											</div>
										</div>

									</td>
									<td class='facebox_b' />
								</tr>
								<tr>
									<td class='facebox_bl' />
									<td class='facebox_b' />
									<td class='facebox_br' />
								</tr>

							</table>
						</div>
					</div>
				</div>
			</span></div>
		<div id="beds_area" style="display:none;"> <label class="search_label" style='width:70px;margin-left:30px;'>Bed(s)</label>
			<span>
				<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='beds_n' name='beds_n' onchange="" style='display:none;'>
						<option value='0'>Any</option>
						<option value='-1'>Studio</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
					</select>
					<div tabindex='0' id='beds_n_combo' onmousedown='toggle_contaier("beds_n_container");' onmouseout='setflag(0);' onblur='hc("beds_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '>
						<div id='beds_n_combo_text' class='cm_combo_txt' style='width:80px;' onmouseout='setflag(0);' onblur='hc("beds_n");'>Any</div>
						<div class='cm_combo_img' onmouseout='setflag(0);' onblur='hc("beds_n");'></div>
					</div>
					<div tabindex='0' id='beds_n_container' onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("beds_n"); style='display: none; z-index:1000; ' class='cm_container facebox'>
						<div class='facebox_popup'>
							<table style='width: 251px;'>
								<tr>
									<td class='facebox_tl' />
									<td class='facebox_b' />
									<td class='facebox_tr' />
								</tr>
								<tr>
									<td class='facebox_b' />
									<td class='facebox_body'>
										<div class='facebox_content'>
											<div>
												<ul>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'beds_n','0');  ">Any</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'beds_n','-1');  ">Studio</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'beds_n','1');  ">1</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'beds_n','2');  ">2</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'beds_n','3');  ">3</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'beds_n','4');  ">4</li>
												</ul>
												<div class='si'><input id='beds_n_input1' onmouseover='setflag(1)' onblur='hc("beds_n"); ' type='text' tabindex='0' maxlength='2' /><label> to </label><input id='beds_n_input2' onmouseover='setflag(1)' onblur='hc("beds_n"); ' type='text' tabindex='0' maxlength='2' /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif' onmouseover='setflag(1)' onblur='hc("beds_n");' onmousedown='add_select_option("beds_n","beds_n_input1","beds_n_input2","1","Beds should be in hundareds")' /> </div>
											</div>
										</div>

									</td>
									<td class='facebox_b' />
								</tr>
								<tr>
									<td class='facebox_bl' />
									<td class='facebox_b' />
									<td class='facebox_br' />
								</tr>

							</table>
						</div>
					</div>
				</div>
			</span>
		</div>

		<div id="baths_area" style="display:none;"> <label class="search_label" style='width:70px;margin-left:30px;'>Bath(s)</label>
			<span>
				<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='baths_n' name='baths_n' onchange="" style='display:none;'>
						<option value='0'>Any</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
					</select>
					<div tabindex='0' id='baths_n_combo' onmousedown='toggle_contaier("baths_n_container");' onmouseout='setflag(0);' onblur='hc("baths_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '>
						<div id='baths_n_combo_text' class='cm_combo_txt' style='width:80px;' onmouseout='setflag(0);' onblur='hc("baths_n");'>Any</div>
						<div class='cm_combo_img' onmouseout='setflag(0);' onblur='hc("baths_n");'></div>
					</div>
					<div tabindex='0' id='baths_n_container' onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("baths_n"); style='display: none; z-index:1000; ' class='cm_container facebox'>
						<div class='facebox_popup'>
							<table style='width: 251px;'>
								<tr>
									<td class='facebox_tl' />
									<td class='facebox_b' />
									<td class='facebox_tr' />
								</tr>
								<tr>
									<td class='facebox_b' />
									<td class='facebox_body'>
										<div class='facebox_content'>
											<div>
												<ul>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'baths_n','0');  ">Any</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'baths_n','1');  ">1</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'baths_n','2');  ">2</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'baths_n','3');  ">3</li>
													<li class='cli' id='c_li' onmouseover='lib(this)' onmouseout='liw(this)' onmousedown="liv(this,'baths_n','4');  ">4</li>
												</ul>
												<div class='si'><input id='baths_n_input1' onmouseover='setflag(1)' onblur='hc("baths_n"); ' type='text' tabindex='0' maxlength='2' /><label> to </label><input id='baths_n_input2' onmouseover='setflag(1)' onblur='hc("baths_n"); ' type='text' tabindex='0' maxlength='2' /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif' onmouseover='setflag(1)' onblur='hc("baths_n");' onmousedown='add_select_option("baths_n","baths_n_input1","baths_n_input2","1","Baths should be in hundareds")' /> </div>
											</div>
										</div>

									</td>
									<td class='facebox_b' />
								</tr>
								<tr>
									<td class='facebox_bl' />
									<td class='facebox_b' />
									<td class='facebox_br' />
								</tr>

							</table>
						</div>
					</div>
				</div>
			</span>
		</div>
		<div id='price_buy' style="display:none;">
			<div class='cm' style='width: 160px;  '><select width='160' onkeyup='filter_items();' id='price_n' name='price_n' onchange="" style='display:none;'>
					<option value='0'>Any</option>
					<option value='200000'>Under 200,000</option>
					<option value='200000_500000'>200,000 to 500,000</option>
					<option value='500000_750000'>500,000 to 750,000</option>
					<option value='750000_1000000'>750,000 to 1,000,000</option>
					<option value='1000000_2000000'>1,000,000 to 2,000,000</option>
					<option value='2000000_5000000'>2,000,000 to 5,000,000</option>
					<option value='5000000'>over 5,000,000</option>
				</select>
			</div>
		</div>
		<div id='price_rent' style="display:none;">
			<div class='cm' style='width: 160px;  '><select width='160' onkeyup='filter_items();' id='price_n' name='price_n' onchange="" style='display:none;'>
					<option value='0'>Any</option>
					<option value='50000'>Under 50,000</option>
					<option value='50000_100000'>50,000 to 100,000</option>
					<option value='100000_150000'>100,000 to 150,000</option>
					<option value='150000_200000'>150,000 to 200,000</option>
					<option value='200000_300000'>200,000 to 300,000</option>
					<option value='300000_500000'>300,000 to 500,000</option>
					<option value='500000'>Over 500,000</option>
				</select>
			</div>
		</div>
		<div id='price_wanted' style="display:none;">
			<div class='cm' style='width: 160px;  '><select width='160' onkeyup='filter_items();' id='price_n' name='price_n' onchange="" style='display:none;'>
					<option value='0'>Any</option>
					<option value='50000'>Under 50,000</option>
					<option value='50000_100000'>50,000 to 100,000</option>
					<option value='100000_200000'>100,000 to 200,000</option>
					<option value='200000_500000'>200,000 to 500,000</option>
					<option value='500000_1000000'>500,000 to 1,000,000</option>
					<option value='1000000_2000000'>1,000,000 to 2,000,000</option>
					<option value='2000000'>Over 2,000,000</option>
				</select>
			</div>
		</div>
	</div>
	<input type="hidden" id="h_lbl_value" name="h_lbl_value" value="" />
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
							$('#subtype_select').append('<option value="' + value.id + '">' + value.name + '<option>');
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
							$('#location_select').append('<option value="' + value.name + '">' + value.name + '<option>');
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
							$('#state_select').append('<option value="' + value.id + '">' + value.name + '<option>');
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
							$('#city_select').append('<option value="' + value.id + '">' + value.areaname + '<option>');
						});
					}
				});
			});
		});
	</script>

	@endsection