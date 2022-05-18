@extends('userside.layout')
@section('main')
<body>

<div class="box_title">
	<div><b>Inventory Search</b></div>
</div>
<div class="box_body" style="width:97.6%">
	<div style="display:none">
		<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='hiddenSquareFeet'  name='hiddenSquareFeet' onchange="" style='display:none;'><option value='0'  >Any</option><option value='225'  >Below 225 Sq Ft</option><option value='225_1125'  >225 to 1125 Sq Ft</option><option value='1125_2250'  >1125 to 2250 Sq Ft</option><option value='2250_3375'  >2250 to 3375 Sq Ft</option><option value='3375_4500'  >3375 to 4500 Sq Ft</option><option value='4500_5625'  >4500 to 5625 Sq Ft</option><option value='5625_6750'  >5625 to 6750 Sq Ft</option><option value='6750_7875'  >6750 to 7875 Sq Ft</option><option value='7875_9000'  >7875 to 9000 Sq Ft</option></select> <div tabindex='0' id='hiddenSquareFeet_combo'onmousedown	='toggle_contaier("hiddenSquareFeet_container");'   onmouseout='setflag(0);' onblur='hc("hiddenSquareFeet");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='hiddenSquareFeet_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("hiddenSquareFeet");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("hiddenSquareFeet");'></div></div> <div tabindex='0' id='hiddenSquareFeet_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("hiddenSquareFeet");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 251px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','225');  ">Below 225 Sq Ft</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','225_1125');  ">225 to 1125 Sq Ft</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','1125_2250');  ">1125 to 2250 Sq Ft</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','2250_3375');  ">2250 to 3375 Sq Ft</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','3375_4500');  ">3375 to 4500 Sq Ft</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','4500_5625');  ">4500 to 5625 Sq Ft</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','5625_6750');  ">5625 to 6750 Sq Ft</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','6750_7875');  ">6750 to 7875 Sq Ft</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareFeet','7875_9000');  ">7875 to 9000 Sq Ft</li></ul><div class='si'><input  id='hiddenSquareFeet_input1' onmouseover='setflag(1)'onblur= 'hc("hiddenSquareFeet"); ' type='text' tabindex='0'  /><label> to </label><input  id='hiddenSquareFeet_input2' onmouseover='setflag(1)'onblur= 'hc("hiddenSquareFeet"); ' type='text' tabindex='0' /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif'onmouseover='setflag(1)'onblur= 'hc("hiddenSquareFeet");' onmousedown='add_select_option("hiddenSquareFeet","hiddenSquareFeet_input1","hiddenSquareFeet_input2","","")'/> </div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div><div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='hiddenSquareMeters'  name='hiddenSquareMeters' onchange="" style='display:none;'><option value='0'  >Any</option><option value='225'  >Below 21 Sq m</option><option value='225_1125'  >21 to 105 Sq m</option><option value='1125_2250'  >105 to 209 Sq m</option><option value='2250_3375'  >209 to 314 Sq m</option><option value='3375_4500'  >314 to 418 Sq m</option><option value='4500_5625'  >418 to 523 Sq m</option><option value='5625_6750'  >523 to 627 Sq m</option><option value='6750_7875'  >627 to 732 Sq m</option><option value='7875_9000'  >732 to 836 Sq m</option></select> <div tabindex='0' id='hiddenSquareMeters_combo'onmousedown	='toggle_contaier("hiddenSquareMeters_container");'   onmouseout='setflag(0);' onblur='hc("hiddenSquareMeters");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='hiddenSquareMeters_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("hiddenSquareMeters");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("hiddenSquareMeters");'></div></div> <div tabindex='0' id='hiddenSquareMeters_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("hiddenSquareMeters");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 251px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','225');  ">Below 21 Sq m</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','225_1125');  ">21 to 105 Sq m</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','1125_2250');  ">105 to 209 Sq m</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','2250_3375');  ">209 to 314 Sq m</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','3375_4500');  ">314 to 418 Sq m</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','4500_5625');  ">418 to 523 Sq m</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','5625_6750');  ">523 to 627 Sq m</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','6750_7875');  ">627 to 732 Sq m</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareMeters','7875_9000');  ">732 to 836 Sq m</li></ul><div class='si'><input  id='hiddenSquareMeters_input1' onmouseover='setflag(1)'onblur= 'hc("hiddenSquareMeters"); ' type='text' tabindex='0'  /><label> to </label><input  id='hiddenSquareMeters_input2' onmouseover='setflag(1)'onblur= 'hc("hiddenSquareMeters"); ' type='text' tabindex='0' /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif'onmouseover='setflag(1)'onblur= 'hc("hiddenSquareMeters");' onmousedown='add_select_option("hiddenSquareMeters","hiddenSquareMeters_input1","hiddenSquareMeters_input2","","")'/> </div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div><div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='hiddenSquareYards'  name='hiddenSquareYards' onchange="" style='display:none;'><option value='0'  >Any</option><option value='225'  >Below 25 Sq y</option><option value='225_1125'  >25 to 125 Sq y</option><option value='1125_2250'  >125 to 250 Sq y</option><option value='2250_3375'  >250 to 375 Sq y</option><option value='3375_4500'  >375 to 500 Sq y</option><option value='4500_5625'  >500 to 625 Sq y</option><option value='5625_6750'  >625 to 750 Sq y</option><option value='6750_7875'  >750 to 875 Sq y</option><option value='7875_9000'  >875 to 1000 Sq y</option></select> <div tabindex='0' id='hiddenSquareYards_combo'onmousedown	='toggle_contaier("hiddenSquareYards_container");'   onmouseout='setflag(0);' onblur='hc("hiddenSquareYards");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='hiddenSquareYards_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("hiddenSquareYards");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("hiddenSquareYards");'></div></div> <div tabindex='0' id='hiddenSquareYards_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("hiddenSquareYards");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 251px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','225');  ">Below 25 Sq y</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','225_1125');  ">25 to 125 Sq y</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','1125_2250');  ">125 to 250 Sq y</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','2250_3375');  ">250 to 375 Sq y</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','3375_4500');  ">375 to 500 Sq y</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','4500_5625');  ">500 to 625 Sq y</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','5625_6750');  ">625 to 750 Sq y</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','6750_7875');  ">750 to 875 Sq y</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenSquareYards','7875_9000');  ">875 to 1000 Sq y</li></ul><div class='si'><input  id='hiddenSquareYards_input1' onmouseover='setflag(1)'onblur= 'hc("hiddenSquareYards"); ' type='text' tabindex='0'  /><label> to </label><input  id='hiddenSquareYards_input2' onmouseover='setflag(1)'onblur= 'hc("hiddenSquareYards"); ' type='text' tabindex='0' /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif'onmouseover='setflag(1)'onblur= 'hc("hiddenSquareYards");' onmousedown='add_select_option("hiddenSquareYards","hiddenSquareYards_input1","hiddenSquareYards_input2","","")'/> </div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div><div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='hiddenMarla'  name='hiddenMarla' onchange="" style='display:none;'><option value='0'  >Any</option><option value='225'  >Below 1 Marla</option><option value='225_1125'  >1 to 5 Marla</option><option value='1125_2250'  >5 to 10 Marla</option><option value='2250_3375'  >10 to 15 Marla</option><option value='3375_4500'  >15 to 20 Marla</option><option value='4500_5625'  >20 to 25 Marla</option><option value='5625_6750'  >25 to 30 Marla</option><option value='6750_7875'  >30 to 35 Marla</option><option value='7875_9000'  >35 to 40 Marla</option></select> <div tabindex='0' id='hiddenMarla_combo'onmousedown	='toggle_contaier("hiddenMarla_container");'   onmouseout='setflag(0);' onblur='hc("hiddenMarla");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='hiddenMarla_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("hiddenMarla");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("hiddenMarla");'></div></div> <div tabindex='0' id='hiddenMarla_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("hiddenMarla");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 251px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenMarla','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenMarla','225');  ">Below 1 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenMarla','225_1125');  ">1 to 5 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenMarla','1125_2250');  ">5 to 10 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenMarla','2250_3375');  ">10 to 15 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenMarla','3375_4500');  ">15 to 20 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenMarla','4500_5625');  ">20 to 25 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenMarla','5625_6750');  ">25 to 30 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenMarla','6750_7875');  ">30 to 35 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'hiddenMarla','7875_9000');  ">35 to 40 Marla</li></ul><div class='si'><input  id='hiddenMarla_input1' onmouseover='setflag(1)'onblur= 'hc("hiddenMarla"); ' type='text' tabindex='0'  /><label> to </label><input  id='hiddenMarla_input2' onmouseover='setflag(1)'onblur= 'hc("hiddenMarla"); ' type='text' tabindex='0' /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif'onmouseover='setflag(1)'onblur= 'hc("hiddenMarla");' onmousedown='add_select_option("hiddenMarla","hiddenMarla_input1","hiddenMarla_input2","","")'/> </div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>		<div style="clear:both;"></div>
	</div>
	<!--action="https://profolio.zameen.com/profolio/includes/inventory_search/inventory_results.php"-->
	<form name="frm_inventorysearch" id="frm_inventorysearch"  class="frm_inventorysearch" method="post" action="?ajax=1&ajax_section=dash_prop_invent&ajax_action=get_inventory_search_list">
		<div id="search">
						<div class="searchbox" style="padding:1%">
					<input type="hidden" name="listing_platform" value="" id="dropdown-content-tab-inventory-input">
				<div class="search_div">
					<label class="search_label">Type</label>
					<span>
						<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='type_n'  name='type_n' onchange="" style='display:none;'><option value='0'  >Any</option><option value='1'  >Homes</option><option value='2'  >Plots</option><option value='3'  >Commercial</option></select> <div tabindex='0' id='type_n_combo'onmousedown	='toggle_contaier("type_n_container");'   onmouseout='setflag(0);' onblur='hc("type_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='type_n_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("type_n");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("type_n");'></div></div> <div tabindex='0' id='type_n_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("type_n");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 190px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'type_n','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'type_n','1');  ">Homes</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'type_n','2');  ">Plots</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'type_n','3');  ">Commercial</li></ul></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>					</span>

									<div id="subtype_container" style="display:none;"></div>
			</div>
			<div class="search_div">
				<label class="search_label">Purpose</label>
				<span>
					<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='purpose_n'  name='purpose_n' onchange="" style='display:none;'><option value='0'  >Any</option><option value='1'  >Buy</option><option value='2'  >Rent</option></select> <div tabindex='0' id='purpose_n_combo'onmousedown	='toggle_contaier("purpose_n_container");'   onmouseout='setflag(0);' onblur='hc("purpose_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='purpose_n_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("purpose_n");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("purpose_n");'></div></div> <div tabindex='0' id='purpose_n_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("purpose_n");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 190px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'purpose_n','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'purpose_n','1');  ">Buy</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'purpose_n','2');  ">Rent</li></ul></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>				</span>

							<div id="beds_container" style="display:none;"></div>
		</div>

		<div class="search_div">
			<label class="search_label">Area</label>
			<span>
				<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='sqft'  name='sqft' onchange="" style='display:none;'><option value='0'  >Any</option><option value='225'  >Below 1 Marla</option><option value='225_1125'  >1 to 5 Marla</option><option value='1125_2250'  >5 to 10 Marla</option><option value='2250_3375'  >10 to 15 Marla</option><option value='3375_4500'  >15 to 20 Marla</option><option value='4500_5625'  >20 to 25 Marla</option><option value='5625_6750'  >25 to 30 Marla</option><option value='6750_7875'  >30 to 35 Marla</option><option value='7875_9000'  >35 to 40 Marla</option></select> <div tabindex='0' id='sqft_combo'onmousedown	='toggle_contaier("sqft_container");'   onmouseout='setflag(0);' onblur='hc("sqft");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='sqft_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("sqft");'>Area</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("sqft");'></div></div> <div tabindex='0' id='sqft_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("sqft");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 251px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sqft','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sqft','225');  ">Below 1 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sqft','225_1125');  ">1 to 5 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sqft','1125_2250');  ">5 to 10 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sqft','2250_3375');  ">10 to 15 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sqft','3375_4500');  ">15 to 20 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sqft','4500_5625');  ">20 to 25 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sqft','5625_6750');  ">25 to 30 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sqft','6750_7875');  ">30 to 35 Marla</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sqft','7875_9000');  ">35 to 40 Marla</li></ul><div class='si'><input style='width:40px' id='sqft_input1' onmouseover='setflag(1)'onblur= 'hc("sqft"); ' type='text' tabindex='0'  /><label> to </label><input style='width:40px' id='sqft_input2' onmouseover='setflag(1)'onblur= 'hc("sqft"); ' type='text' tabindex='0' />&nbsp;&nbsp;<select name="sqft_mk_select" id="sqft_mk_select"
										onblur="hide_contaier('sqft_container');"
										onchange="$('\#sqft_container').focus();"
										>
										<option value='M'  >Marla</option><option value='K'   >Kanal</option></select><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif'onmouseover='setflag(1)'onblur= 'hc("sqft");' onmousedown='add_select_option("sqft","sqft_input1","sqft_input2","0","Area should greater then 0")'/><div style='margin: 5px 0px 0px 3px;'><div><font color="#F27E31"><b>Change Unit To:</b></font>&nbsp;&nbsp;<select name="sl_change_area_unit" id="sl_change_area_unit" onChange="change_area_unit(this.value,'sqft');"><option value=""  ></option></select></div></div> </div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>			</span>
						<div id="baths_container" style="display:none;"></div>
		</div>

		<div class="search_div">
			<label class="search_label">Price</label>
			<span id='price_main'>
				<div class='cm' style='width: 160px;  '><select width='160' onkeyup='filter_items();' id='price_n'  name='price_n' onchange="" style='display:none;'><option value='0'  >Any</option><option value='200000'  >Under 200,000</option><option value='200000_500000'  >200,000 to 500,000</option><option value='500000_750000'  >500,000 to 750,000</option><option value='750000_1000000'  >750,000 to 1,000,000</option><option value='1000000_2000000'  >1,000,000 to 2,000,000</option><option value='2000000_5000000'  >2,000,000 to 5,000,000</option><option value='5000000'  >over 5,000,000</option></select> <div tabindex='0' id='price_n_combo'onmousedown	='toggle_contaier("price_n_container");'   onmouseout='setflag(0);' onblur='hc("price_n");' class='cm_combo style-update' style='width: 160px;  background-color:#FFFFFF; '><div id='price_n_combo_text' class='cm_combo_txt'style='width:140px;'  onmouseout='setflag(0);' onblur='hc("price_n");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("price_n");'></div></div> <div tabindex='0' id='price_n_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("price_n");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 251px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','200000');  ">Under 200,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','200000_500000');  ">200,000 to 500,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','500000_750000');  ">500,000 to 750,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','750000_1000000');  ">750,000 to 1,000,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','1000000_2000000');  ">1,000,000 to 2,000,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','2000000_5000000');  ">2,000,000 to 5,000,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','5000000');  ">over 5,000,000</li></ul><div class='si'><input  id='price_n_input1' onmouseover='setflag(1)'onblur= 'hc("price_n"); ' type='text' tabindex='0' onkeyup ="showPriceText(this);" onmousedown = "showPriceText(this);display_stext('price_n'); "  /><label> to </label><input  id='price_n_input2' onmouseover='setflag(1)'onblur= 'hc("price_n"); ' type='text' tabindex='0' onkeyup ="showPriceText(this);" onmousedown = "showPriceText(this);display_stext('price_n'); " /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif'onmouseover='setflag(1)'onblur= 'hc("price_n");' onmousedown='add_select_option("price_n","price_n_input1","price_n_input2","1000","Price should be in Thousands")'/><div style='margin: 5px 0px 0px 3px;'>Price unit: PKR</div> </div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>			</span>
		</div>

		<div class="search_div">
			<label class="search_label">Location</label>
			<span class="cat_opt" style="width:73px; display:none;">
				<div class='cm' style='width: 60px;  '><select width='60' onkeyup='filter_items();' id='cat_opt'  name='cat_opt' onchange="" style='display:none;'><option value='0'  ></option><option value='in' selected='selected' >In</option><option value='near'  >Near</option></select> <div tabindex='0' id='cat_opt_combo'onmousedown	='toggle_contaier("cat_opt_container");'   onmouseout='setflag(0);' onblur='hc("cat_opt");' class='cm_combo style-update' style='width: 60px;  background-color:#E5ECF9; '><div id='cat_opt_combo_text' class='cm_combo_txt'style='width:40px;'  onmouseout='setflag(0);' onblur='hc("cat_opt");'>In</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("cat_opt");'></div></div> <div tabindex='0' id='cat_opt_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("cat_opt");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 80px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_opt','in');  ">In</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_opt','near');  ">Near</li></ul></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>				<script> $(document).ready(function(){ setTimeout(function(){enable_disable_cat_search_input(0,"cat_opt"); },1000);});</script>
			</span>
			<span style="width:171px;">
				<div class='cm' style='width: 150px;  '><input type='hidden' id='cat_id' value='' name='cat_id'> <div tabindex='0' id='cat_id_combo'onmousedown	='toggle_contaier("cat_id_container");'    onmouseout='setadvflag(0);'   onblur="hide_adv_contaier('cat_id_container');"  class='cm_combo style-update' style='width: 150px;  background-color:#FFFFFF; '><div id='cat_id_combo_text' class='cm_combo_txt'style='width:130px;'   onmouseout='setadvflag(0);'   onblur="hide_adv_contaier('cat_id_container');" >Any</div><div class='cm_combo_img'   onmouseout='setadvflag(0);'   onblur="hide_adv_contaier('cat_id_container');" ></div></div> <div tabindex='0' id='cat_id_container'
				onmouseover='setadvflag(1);' onmouseout='setadvflag(0);' onblur=hide_adv_contaier('cat_id_container');
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 303px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><!--[if IE 6]><iframe style="position:absolute;filter:alpha(opacity=0);-moz-opacity: 0; z-index:50"  scrolling="no" FRAMEBORDER="0"  width="282"; height="140px";  src=""></iframe><![endif]--><div class='category_box' style='height: 100px;z-index:105;position:relative;' onmouseout='setadvflag(0);'  onmouseover='setadvflag(1);' onblur="hide_adv_contaier('cat_id_container');"  ><div style='padding: 5px 0px 8px 5px;'>Please select your location</div><div id='category_cat_id_0'><div style='float:left; margin-left:5px !important; margin-left:5px;'><div class='cm' style='width: 110px;  '><select width='110' onkeyup='filter_items();' id='cat_id_0' class = '' name='cat_id_0' onchange='get_child_cat(this);' style='display:none;'><option value='0'  >Any</option><option value='1521'  >Pakistan</option></select> <div tabindex='0' id='cat_id_0_combo'onmousedown	='toggle_contaier("cat_id_0_container");'  onmouseover='setadvflag(1);' onmouseout='setflag(0); setadvflag(0);' onblur='hc("cat_id_0"); hide_adv_contaier("cat_id_container");' class='cm_combo style-update' style='width: 110px;  background-color:#FFFFFF; '><div id='cat_id_0_combo_text' class='cm_combo_txt'style='width:90px;' onmouseover='setadvflag(1);' onmouseout='setflag(0); setadvflag(0);' onblur='hc("cat_id_0"); hide_adv_contaier("cat_id_container");'>Any</div><div class='cm_combo_img' onmouseover='setadvflag(1);' onmouseout='setflag(0); setadvflag(0);' onblur='hc("cat_id_0"); hide_adv_contaier("cat_id_container");'></div></div> <div tabindex='0' id='cat_id_0_container'
				onmouseover='setflag(1); setadvflag(1);' onmouseout='setflag(0);  setadvflag(1);' onblur=hc("cat_id_0");
				style='width: 180px;height:153px; display: none; z-index:1000; overflow:hidden;'
				class='cm_container cm_child_container'><ul><li class='cli_s' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_id_0','0'); FocusAdvContainer('cat_id'); ">Any</li><li class='cli_s' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_id_0','1521'); FocusAdvContainer('cat_id'); ">Pakistan</li></ul></div></div></div><div style='' id='category_cat_id_1'></div></div></div><div style='height: 40px; padding-left: 5px;position:relative;z-index:100;'  onmouseout='setadvflag(0);'  onmouseover='setadvflag(1);' onblur="hide_adv_contaier('cat_id_container');"  ><div style="clear:both;margin-top:10px;font-weight:bold;">OR</div><div style='margin-bottom: 0px;'><span style='display: block; margin: 7px 0 0 0; float: left; width: 250px;' id='auto_complete'><div id='cat_id_auto_c'><input onmouseout='setadvflag(0); set_ac_flag(0);'  onmouseover='setadvflag(1); set_ac_flag(1);' onblur="hide_adv_contaier('cat_id_container');input_blur(this,'cat_id');" size='45' onmousedown="input_mousedown(this);" id='input' class='complete' style='margin: 0 0 0 0; color: rgb(128, 128, 128); border: 1px solid #7F9DB9;' value='Type Your Location Here...'/></div></span><span style='width:28px; margin:8px 0 0 0; float:left;'><img src='https://profolio.zameen.com/gmaps/imgs/ok.gif' onmouseover='setadvflag(1);' onmouseout='setadvflag(0);' onblur="hide_adv_contaier('cat_id_container');" onmousedown="set_adv_confirm('cat_id','Any');" style='margin-top: 5px 0 0 0;' id='cat_id_cat_button'/></span></div><div style='border: 1px solid rgb(187, 187, 187); font-size: 10px; padding-left: 10px; padding-top: 5px; height: 100px; background-color: white; width: 250px; position: absolute; left: 150px; top: 0px; display: none;' id='cat_id_confirm_box'><div style='padding-bottom: 15px;'><b>Please confirm your location</b></div><div style='padding-bottom: 3px;'><label><input type='radio' checked='checked' id='cat_id_confirm_opt1' name='cat_id_confirm_opt' value='5385'/><span id='cat_id_confirm_label1' style='float:none;display:inline;'></span></label></div><div><label><input type='radio' id='cat_id_confirm_opt2' name='cat_id_confirm_opt' value='7118'/><span id='cat_id_confirm_label2' style='float:none;display:inline; '></span></label></div><div><img src='https://profolio.zameen.com/gmaps/imgs/ok.gif' onmousedown="set_adv_value('cat_id')" style='float: right; position: relative; top: 5px; left: -20px;' id='confirm_button'/></div></div></div><div id='combo_auto_fill_bottom'></div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>			</span>
			<span class="cat_km" id = "cat_km" style="display:none; margin-left:0px;">
				<label>
					<label style="float:left;margin-top:2px;">within </label>
					<div style="float:left; margin:0 8px 0 6px"><div class='cm' style='width: 40px;  '><select width='40' onkeyup='filter_items();' id='cat_distance'  name='cat_distance' onchange="" style='display:none;'><option value='0'  ></option><option value='1'  >1</option><option value='2'  >2</option><option value='3'  >3</option><option value='4'  >4</option><option value='5' selected='selected' >5</option><option value='6'  >6</option><option value='7'  >7</option><option value='8'  >8</option><option value='9'  >9</option><option value='10'  >10</option><option value='15'  >15</option><option value='20'  >20</option><option value='25'  >25</option><option value='50'  >50</option></select> <div tabindex='0' id='cat_distance_combo'onmousedown	='toggle_contaier("cat_distance_container");'   onmouseout='setflag(0);' onblur='hc("cat_distance");' class='cm_combo style-update' style='width: 40px;  background-color:#E5ECF9; '><div id='cat_distance_combo_text' class='cm_combo_txt'style='width:20px;'  onmouseout='setflag(0);' onblur='hc("cat_distance");'>5</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("cat_distance");'></div></div> <div tabindex='0' id='cat_distance_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("cat_distance");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 40px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','1');  ">1</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','2');  ">2</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','3');  ">3</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','4');  ">4</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','5');  ">5</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','6');  ">6</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','7');  ">7</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','8');  ">8</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','9');  ">9</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','10');  ">10</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','15');  ">15</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','20');  ">20</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','25');  ">25</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'cat_distance','50');  ">50</li></ul></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div> </div><label style="display:block;margin-top:2px;">km</label>
				</label>
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
			<label class="search_label">Users</label>
			<span>
				<div class='cm' style='width: 161px;  '><input type='hidden' id='sl_agusers' value='1001393654:' name='sl_agusers'> <div tabindex='0' id='sl_agusers_combo'onmousedown	='toggle_contaier("sl_agusers_container");'   onmouseout='setflag(0);' onblur='multi_hide_container("sl_agusers");' class='cm_combo style-update' style='width: 161px;  background-color:#E5ECF9; '><div id='sl_agusers_combo_text' class='cm_combo_txt'style='width:141px;'  onmouseout='setflag(0);' onblur='multi_hide_container("sl_agusers");'>1 Item(s) Selected</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='multi_hide_container("sl_agusers");'></div></div> <div tabindex='0' id='sl_agusers_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=multi_hide_container('sl_agusers');
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 250px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><div><div class='ml' onmouseover='change_bg_color(this,"#E5ECF9")'onmouseout='change_bg_color(this,"#FFFFFF");'> <input type='checkbox' id='sl_agusers_opt_1'onmouseover='setflag(1)'onblur="multi_hide_container('sl_agusers');"onclick="multi_fill_combo('sl_agusers','all_members');"value='all_members' ></input><span onmouseover='setflag(1)'onblur="multi_hide_container('sl_agusers');"onmousedown="select_option('sl_agusers_opt_1');" >Zameen.com Members</span></div><div style='padding-left:6px;clear:both;'>----------------------------------</div><div class='ml' onmouseover='change_bg_color(this,"#E5ECF9")'onmouseout='change_bg_color(this,"#FFFFFF");'> <input type='checkbox' id='sl_agusers_opt_2'onmouseover='setflag(1)'onblur="multi_hide_container('sl_agusers');"onclick="multi_fill_combo('sl_agusers','1001393654');" checked = 'checked' value='1001393654' ></input><span onmouseover='setflag(1)'onblur="multi_hide_container('sl_agusers');"onmousedown="select_option('sl_agusers_opt_2');" >Jahanzaib Shakeel</span></div><div><img src='https://profolio.zameen.com/gmaps/imgs/ok.gif' onmousedown="multi_combo_btn('sl_agusers'); setflag(0);  multi_hide_container('sl_agusers');" class="multi_btn" /></div></div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>			</span>
			<div id="subtype_container" style="display:none;"></div>
		</div>
		<div class="search_div">
			<label class="search_label">Construction Status</label>
			<span>
				<div class='cm' style='width: 161px;  '><select width='161' onkeyup='filter_items();' id='sl_construction'  name='sl_construction' onchange="" style='display:none;'><option value='0'  >Any</option><option value='Complete'  >Complete</option><option value='Under Construction'  >Under Construction</option></select> <div tabindex='0' id='sl_construction_combo'onmousedown	='toggle_contaier("sl_construction_container");'   onmouseout='setflag(0);' onblur='hc("sl_construction");' class='cm_combo style-update' style='width: 161px;  background-color:#FFFFFF; '><div id='sl_construction_combo_text' class='cm_combo_txt'style='width:141px;'  onmouseout='setflag(0);' onblur='hc("sl_construction");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("sl_construction");'></div></div> <div tabindex='0' id='sl_construction_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("sl_construction");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 250px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sl_construction','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sl_construction','Complete');  ">Complete</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'sl_construction','Under Construction');  ">Under Construction</li></ul></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>			</span>
			<div id="subtype_container" style="display:none;"></div>
		</div>
		<div class="search_div">
			<label class="search_label">Listed Date</label>
			<span style="width:45%">
				<input type="text" id="txt_listed_date_from" name="txt_listed_date_from" value="" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />&nbsp;&nbsp;To&nbsp;&nbsp;<input type="text" id="txt_listed_date_to" name="txt_listed_date_to" value="" data-value="1" style="width:160px; border:1px solid #BBBBBB; height:16px; padding:2px 0px 0px 2px;" />
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
		<div class="search_div">
			<label class="search_label">Add on</label>
			<span>
				<div class='cm' style='width: 161px;  '><select width='161' onkeyup='filter_items();' id='add_on'  name='add_on' onchange="" style='display:none;'><option value='0'  >Any</option><option value='B'  >Hot</option><option value='A'  >Supper Hot</option></select> <div tabindex='0' id='add_on_combo'onmousedown	='toggle_contaier("add_on_container");'   onmouseout='setflag(0);' onblur='hc("add_on");' class='cm_combo style-update' style='width: 161px;  background-color:#FFFFFF; '><div id='add_on_combo_text' class='cm_combo_txt'style='width:141px;'  onmouseout='setflag(0);' onblur='hc("add_on");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("add_on");'></div></div> <div tabindex='0' id='add_on_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("add_on");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 250px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'add_on','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'add_on','B');  ">Hot</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'add_on','A');  ">Supper Hot</li></ul></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>			</span>

		</div>

		<div class="search_div">
			<label class="search_label">Listing Images</label>
			<span>
				<div class='cm' style='width: 161px;  '><select width='161' onkeyup='filter_items();' id='listing_images'  name='listing_images' onchange="" style='display:none;'><option value='0'  >Both</option><option value='true'  >Listings with image(s)</option><option value='false'  >Listings without image(s)</option></select> <div tabindex='0' id='listing_images_combo'onmousedown	='toggle_contaier("listing_images_container");'   onmouseout='setflag(0);' onblur='hc("listing_images");' class='cm_combo style-update' style='width: 161px;  background-color:#FFFFFF; '><div id='listing_images_combo_text' class='cm_combo_txt'style='width:141px;'  onmouseout='setflag(0);' onblur='hc("listing_images");'>Both</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("listing_images");'></div></div> <div tabindex='0' id='listing_images_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("listing_images");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 250px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'listing_images','0');  ">Both</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'listing_images','true');  ">Listings with image(s)</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'listing_images','false');  ">Listings without image(s)</li></ul></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>			</span>

		</div>

		<br>
		<div class="search_div">
			<label class="search_label">&nbsp;</label>
			<span>
				<!-- <a href="javascript:void(0)" name="sbsearch" id="sbsearch" onclick="submit_inventoryform();"><img src="/images/search_button1_1.png" border="0" /></a> -->
				<a href="javascript:void(0)" name="sbsearch" id="sbsearch" class="search-box"onclick="submit_inventoryform();" style="background-color: #00a651;color: #ffffff;padding: 5px 24px;font-size: 12px;border-radius: 14px;">Search</a>
			</span>
		</div>
		<br>
	</div>
</div>
<input type="hidden" name="h_areaunit" id="h_areaunit" value="Marla" />
<input type='hidden' name='order_by' id='order_by' value='' />
<input type="hidden" name="_token" value="768739f3e486beee9dfa0ade40589f68fb0d3f9151fd9d1fb84c4b957272b3ea">
</form>
<div id='subtypes_1' style='display:none'><label class='search_label' style='position:relative;top:5px;width:55px;padding-left:45px;'><img src='https://profolio.zameen.com/gmaps/imgs/arrow_0.gif'></label><span id='ajax_subtype1'><div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='subtype_n'  name='subtype_n' onchange="" style='display:none;'><option value='0'  >Any</option><option value='9'  >Houses</option><option value='8'  >Flats</option><option value='21'  >Upper Portions</option><option value='22'  >Lower Portions</option><option value='20'  >Farm Houses</option><option value='24'  >Rooms</option><option value='25'  >Penthouse</option></select> <div tabindex='0' id='subtype_n_combo'onmousedown	='toggle_contaier("subtype_n_container");'   onmouseout='setflag(0);' onblur='hc("subtype_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='subtype_n_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("subtype_n");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("subtype_n");'></div></div> <div tabindex='0' id='subtype_n_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("subtype_n");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 217px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','9');  ">Houses</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','8');  ">Flats</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','21');  ">Upper Portions</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','22');  ">Lower Portions</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','20');  ">Farm Houses</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','24');  ">Rooms</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','25');  ">Penthouse</li></ul></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div></span></div><div id='subtypes_2' style='display:none'><label class='search_label' style='position:relative;top:5px;width:55px;padding-left:45px;'><img src='https://profolio.zameen.com/gmaps/imgs/arrow_0.gif'></label><span id='ajax_subtype1'><div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='subtype_n'  name='subtype_n' onchange="" style='display:none;'><option value='0'  >Any</option><option value='12'  >Residential Plots</option><option value='11'  >Commercial Plots</option><option value='19'  >Agricultural Land</option><option value='27'  >Industrial Land</option><option value='23'  >Plot Files</option><option value='26'  >Plot Forms</option></select> <div tabindex='0' id='subtype_n_combo'onmousedown	='toggle_contaier("subtype_n_container");'   onmouseout='setflag(0);' onblur='hc("subtype_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='subtype_n_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("subtype_n");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("subtype_n");'></div></div> <div tabindex='0' id='subtype_n_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("subtype_n");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 217px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','12');  ">Residential Plots</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','11');  ">Commercial Plots</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','19');  ">Agricultural Land</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','27');  ">Industrial Land</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','23');  ">Plot Files</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','26');  ">Plot Forms</li></ul></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div></span></div><div id='subtypes_3' style='display:none'><label class='search_label' style='position:relative;top:5px;width:55px;padding-left:45px;'><img src='https://profolio.zameen.com/gmaps/imgs/arrow_0.gif'></label><span id='ajax_subtype1'><div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='subtype_n'  name='subtype_n' onchange="" style='display:none;'><option value='0'  >Any</option><option value='13'  >Offices</option><option value='15'  >Shops</option><option value='17'  >Warehouses</option><option value='14'  >Factories</option><option value='16'  >Buildings</option><option value='18'  >Other</option></select> <div tabindex='0' id='subtype_n_combo'onmousedown	='toggle_contaier("subtype_n_container");'   onmouseout='setflag(0);' onblur='hc("subtype_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='subtype_n_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("subtype_n");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("subtype_n");'></div></div> <div tabindex='0' id='subtype_n_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("subtype_n");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 217px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','13');  ">Offices</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','15');  ">Shops</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','17');  ">Warehouses</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','14');  ">Factories</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','16');  ">Buildings</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'subtype_n','18');  ">Other</li></ul></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div></span></div><div id="beds_area"  style="display:none;"> 							<label class="search_label" style='width:70px;margin-left:30px;' >Bed(s)</label>
	<span>
		<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='beds_n'  name='beds_n' onchange="" style='display:none;'><option value='0'  >Any</option><option value='-1'  >Studio</option><option value='1'  >1</option><option value='2'  >2</option><option value='3'  >3</option><option value='4'  >4</option></select> <div tabindex='0' id='beds_n_combo'onmousedown	='toggle_contaier("beds_n_container");'   onmouseout='setflag(0);' onblur='hc("beds_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='beds_n_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("beds_n");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("beds_n");'></div></div> <div tabindex='0' id='beds_n_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("beds_n");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 251px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'beds_n','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'beds_n','-1');  ">Studio</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'beds_n','1');  ">1</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'beds_n','2');  ">2</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'beds_n','3');  ">3</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'beds_n','4');  ">4</li></ul><div class='si'><input  id='beds_n_input1' onmouseover='setflag(1)'onblur= 'hc("beds_n"); ' type='text' tabindex='0' maxlength='2'   /><label> to </label><input  id='beds_n_input2' onmouseover='setflag(1)'onblur= 'hc("beds_n"); ' type='text' tabindex='0' maxlength='2'  /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif'onmouseover='setflag(1)'onblur= 'hc("beds_n");' onmousedown='add_select_option("beds_n","beds_n_input1","beds_n_input2","1","Beds should be in hundareds")'/> </div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>	</span>
</div>

<div id="baths_area" style="display:none;"> 							<label class="search_label" style='width:70px;margin-left:30px;'>Bath(s)</label>
	<span>
		<div class='cm' style='width: 100px;  '><select width='100' onkeyup='filter_items();' id='baths_n'  name='baths_n' onchange="" style='display:none;'><option value='0'  >Any</option><option value='1'  >1</option><option value='2'  >2</option><option value='3'  >3</option><option value='4'  >4</option></select> <div tabindex='0' id='baths_n_combo'onmousedown	='toggle_contaier("baths_n_container");'   onmouseout='setflag(0);' onblur='hc("baths_n");' class='cm_combo style-update' style='width: 100px;  background-color:#FFFFFF; '><div id='baths_n_combo_text' class='cm_combo_txt'style='width:80px;'  onmouseout='setflag(0);' onblur='hc("baths_n");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("baths_n");'></div></div> <div tabindex='0' id='baths_n_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("baths_n");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 251px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'baths_n','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'baths_n','1');  ">1</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'baths_n','2');  ">2</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'baths_n','3');  ">3</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'baths_n','4');  ">4</li></ul><div class='si'><input  id='baths_n_input1' onmouseover='setflag(1)'onblur= 'hc("baths_n"); ' type='text' tabindex='0' maxlength='2'   /><label> to </label><input  id='baths_n_input2' onmouseover='setflag(1)'onblur= 'hc("baths_n"); ' type='text' tabindex='0' maxlength='2'  /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif'onmouseover='setflag(1)'onblur= 'hc("baths_n");' onmousedown='add_select_option("baths_n","baths_n_input1","baths_n_input2","1","Baths should be in hundareds")'/> </div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div>	</span>
</div>
<div id='price_buy' style="display:none;"><div class='cm' style='width: 160px;  '><select width='160' onkeyup='filter_items();' id='price_n'  name='price_n' onchange="" style='display:none;'><option value='0'  >Any</option><option value='200000'  >Under 200,000</option><option value='200000_500000'  >200,000 to 500,000</option><option value='500000_750000'  >500,000 to 750,000</option><option value='750000_1000000'  >750,000 to 1,000,000</option><option value='1000000_2000000'  >1,000,000 to 2,000,000</option><option value='2000000_5000000'  >2,000,000 to 5,000,000</option><option value='5000000'  >over 5,000,000</option></select> <div tabindex='0' id='price_n_combo'onmousedown	='toggle_contaier("price_n_container");'   onmouseout='setflag(0);' onblur='hc("price_n");' class='cm_combo style-update' style='width: 160px;  background-color:#FFFFFF; '><div id='price_n_combo_text' class='cm_combo_txt'style='width:140px;'  onmouseout='setflag(0);' onblur='hc("price_n");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("price_n");'></div></div> <div tabindex='0' id='price_n_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("price_n");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 251px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','200000');  ">Under 200,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','200000_500000');  ">200,000 to 500,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','500000_750000');  ">500,000 to 750,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','750000_1000000');  ">750,000 to 1,000,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','1000000_2000000');  ">1,000,000 to 2,000,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','2000000_5000000');  ">2,000,000 to 5,000,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','5000000');  ">over 5,000,000</li></ul><div class='si'><input  id='price_n_input1' onmouseover='setflag(1)'onblur= 'hc("price_n"); ' type='text' tabindex='0' onkeyup ="showPriceText(this);" onmousedown = "showPriceText(this);display_stext('price_n'); "  /><label> to </label><input  id='price_n_input2' onmouseover='setflag(1)'onblur= 'hc("price_n"); ' type='text' tabindex='0' onkeyup ="showPriceText(this);" onmousedown = "showPriceText(this);display_stext('price_n'); " /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif'onmouseover='setflag(1)'onblur= 'hc("price_n");' onmousedown='add_select_option("price_n","price_n_input1","price_n_input2","1000","Price should be in Thousands")'/><div style='margin: 5px 0px 0px 3px;'>Price unit: PKR</div> </div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div></div><div id='price_rent' style="display:none;"><div class='cm' style='width: 160px;  '><select width='160' onkeyup='filter_items();' id='price_n'  name='price_n' onchange="" style='display:none;'><option value='0'  >Any</option><option value='50000'  >Under 50,000</option><option value='50000_100000'  >50,000 to 100,000</option><option value='100000_150000'  >100,000 to 150,000</option><option value='150000_200000'  >150,000 to 200,000</option><option value='200000_300000'  >200,000 to 300,000</option><option value='300000_500000'  >300,000 to 500,000</option><option value='500000'  >Over 500,000</option></select> <div tabindex='0' id='price_n_combo'onmousedown	='toggle_contaier("price_n_container");'   onmouseout='setflag(0);' onblur='hc("price_n");' class='cm_combo style-update' style='width: 160px;  background-color:#FFFFFF; '><div id='price_n_combo_text' class='cm_combo_txt'style='width:140px;'  onmouseout='setflag(0);' onblur='hc("price_n");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("price_n");'></div></div> <div tabindex='0' id='price_n_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("price_n");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 251px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','50000');  ">Under 50,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','50000_100000');  ">50,000 to 100,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','100000_150000');  ">100,000 to 150,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','150000_200000');  ">150,000 to 200,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','200000_300000');  ">200,000 to 300,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','300000_500000');  ">300,000 to 500,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','500000');  ">Over 500,000</li></ul><div class='si'><input  id='price_n_input1' onmouseover='setflag(1)'onblur= 'hc("price_n"); ' type='text' tabindex='0' onkeyup ="showPriceText(this);" onmousedown = "showPriceText(this);display_stext('price_n'); "  /><label> to </label><input  id='price_n_input2' onmouseover='setflag(1)'onblur= 'hc("price_n"); ' type='text' tabindex='0' onkeyup ="showPriceText(this);" onmousedown = "showPriceText(this);display_stext('price_n'); " /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif'onmouseover='setflag(1)'onblur= 'hc("price_n");' onmousedown='add_select_option("price_n","price_n_input1","price_n_input2","1000","Price should be in Thousands")'/><div style='margin: 5px 0px 0px 3px;'>Price unit: PKR</div> </div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div></div><div id='price_wanted' style="display:none;"><div class='cm' style='width: 160px;  '><select width='160' onkeyup='filter_items();' id='price_n'  name='price_n' onchange="" style='display:none;'><option value='0'  >Any</option><option value='50000'  >Under 50,000</option><option value='50000_100000'  >50,000 to 100,000</option><option value='100000_200000'  >100,000 to 200,000</option><option value='200000_500000'  >200,000 to 500,000</option><option value='500000_1000000'  >500,000 to 1,000,000</option><option value='1000000_2000000'  >1,000,000 to 2,000,000</option><option value='2000000'  >Over 2,000,000</option></select> <div tabindex='0' id='price_n_combo'onmousedown	='toggle_contaier("price_n_container");'   onmouseout='setflag(0);' onblur='hc("price_n");' class='cm_combo style-update' style='width: 160px;  background-color:#FFFFFF; '><div id='price_n_combo_text' class='cm_combo_txt'style='width:140px;'  onmouseout='setflag(0);' onblur='hc("price_n");'>Any</div><div class='cm_combo_img'  onmouseout='setflag(0);' onblur='hc("price_n");'></div></div> <div tabindex='0' id='price_n_container'
				onmouseover='setflag(1);' onmouseout='setflag(0);' onblur=hc("price_n");
				style='display: none; z-index:1000; '
				class='cm_container facebox'>
			      <div class='facebox_popup'>
			        <table style='width: 251px;'>
			           <tr>
              				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			           </tr>
            		   <tr>
         	     			<td class='facebox_b'/>
              				<td class='facebox_body'>
                				<div class='facebox_content'><div><ul><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','0');  ">Any</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','50000');  ">Under 50,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','50000_100000');  ">50,000 to 100,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','100000_200000');  ">100,000 to 200,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','200000_500000');  ">200,000 to 500,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','500000_1000000');  ">500,000 to 1,000,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','1000000_2000000');  ">1,000,000 to 2,000,000</li><li class='cli' id='c_li'  onmouseover='lib(this)'  onmouseout='liw(this)' onmousedown="liv(this,'price_n','2000000');  ">Over 2,000,000</li></ul><div class='si'><input  id='price_n_input1' onmouseover='setflag(1)'onblur= 'hc("price_n"); ' type='text' tabindex='0' onkeyup ="showPriceText(this);" onmousedown = "showPriceText(this);display_stext('price_n'); "  /><label> to </label><input  id='price_n_input2' onmouseover='setflag(1)'onblur= 'hc("price_n"); ' type='text' tabindex='0' onkeyup ="showPriceText(this);" onmousedown = "showPriceText(this);display_stext('price_n'); " /><img tabindex='0' border='0' src='https://profolio.zameen.com/gmaps/imgs/ok.gif'onmouseover='setflag(1)'onblur= 'hc("price_n");' onmousedown='add_select_option("price_n","price_n_input1","price_n_input2","1000","Price should be in Thousands")'/><div style='margin: 5px 0px 0px 3px;'>Price unit: PKR</div> </div></div></div>

								</td>
								<td class='facebox_b'/>
							</tr>
							<tr>
								<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
							</tr>

			</table>
		  </div>
		</div></div></div>
<div class="facebox" id="stext_facebox" style="display:none; position:absolute; z-index:1">
	<div class="facebox_popup">
		<table style="width:251px;">
			<tr>
				<td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/>
			</tr>
			<tr>
				<td class='facebox_b'/>
				<td class='facebox_body'>
					<div class='facebox_content' style="height:18px;">
						<div name="stext" id="stext"></div>
					</div>
				</td>
				<td class='facebox_b'/>
			</tr>
			<tr>
				<td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/>
			</tr>
		</table>
	</div>
</div>
</div>
<input type="hidden" id="h_lbl_value" name="h_lbl_value" value="" />


<script>
	$('#txt_listed_date_from').dateinput({format: 'dd/mm/yyyy',speed: 'fast',firstDay: 1,offset: [5,0]});
	$('#txt_listed_date_to').dateinput({format: 'dd/mm/yyyy',speed: 'fast',firstDay: 1,offset: [5,0]});
	if($(".cbox").html())
	{
		var category = 'UAE';
		category = '';
		if(category =='')
		{
			category = ''
		}
		var price = '';
		var sqft  = '';
		var beds  = '';
		var baths = '';


		ChangeComboBox(category,price,sqft,beds,baths);

	}
last_events('new_combo');//------------------------------------------------- SET DYNAMIC EVENTS FOR CUSTOM COMBO---------------------------------------------------------------------------------
</script><style type="text/css">
	.inventory-div-table{padding: 1% 0px !important;}
</style>
<div id="inventory_area">
<div class="box_title">
	<div><b>Inventory Results</b></div>
</div>
	<div id="inventory_div" class="inventory-div-table" >
		<div id="main_inventory" style="overflow:unset; ">
			<div id="paginate_inventory" class="paginate_inventory">
				<div><b>Total Listings Found: <span id="total_inventory"></span></b></div>
			</div>
			<div id="inventory_sort" class="inventory_sort">
				<div style="width:85px; float:left;">
				Show <select id="sl_numrow" class="sl_numrow">
						<!-- <option value="10">10</option> -->
						<option value="15">15</option>
						<option value="30">30</option>
						<option value="50">50</option>
						<option value="100">100</option>
						<option value="200">200</option>
					</select>
				</div>
			   <div style="width:273px !important; width:260px; float:left;">
				&nbsp;listings with status&nbsp;
				<input type="text" name="txt_status_option" id="txt_status_option" class="radius-4p" value="All" onclick="display_status_option();" readonly="readonly" />
				<div id="div_status_option" style="display:none;">
									<div>
					<input class="role_input" type="checkbox" value="on" id="Active" checked />
					<label style="position:relative; top:-2px;">Active</label>
					</div>
										<div>
					<input class="role_input" type="checkbox" value="edited" id="Edited" checked />
					<label style="position:relative; top:-2px;">Edited</label>
					</div>
										<div>
					<input class="role_input" type="checkbox" value="expired" id="Expired"  />
					<label style="position:relative; top:-2px;">Expired</label>
					</div>
										<div>
					<input class="role_input" type="checkbox" value="Pending" id="Pending" checked />
					<label style="position:relative; top:-2px;">Pending</label>
					</div>
										<div>
					<input class="role_input" type="checkbox" value="Deleted" id="Deleted"  />
					<label style="position:relative; top:-2px;">Deleted</label>
					</div>
										<div>
					<input class="role_input" type="checkbox" value="Rejected" id="Rejected"  />
					<label style="position:relative; top:-2px;">Rejected</label>
					</div>
										<div>
					<input class="role_input" type="checkbox" value="u" id="Uploaded"  />
					<label style="position:relative; top:-2px;">Uploaded</label>
					</div>
										<div>
					<input class="role_input" type="checkbox" value="u_e" id=" Uploaded-Error"  />
					<label style="position:relative; top:-2px;"> Uploaded-Error</label>
					</div>
										<div>
					<input class="role_input" type="checkbox" value="downgraded" id="Downgraded"  />
					<label style="position:relative; top:-2px;">Downgraded</label>
					</div>

				</div>
			</div>

				<div id="div_userselect">
					<img class="go_filter" src="https://assets.zameen.com/profolio/images/auto_utilization_go_button1_1.png" border="0" align="absmiddle" style="cursor:pointer;" />
				</div>
			</div>

			<div style="margin:15px 0px 3px 10px;">

				<!-- <label style="float:right;"><input type="checkbox" name="chk_moreinfo" id="chk_moreinfo" style="padding:0px;margin:0px;position:relative;top:2px;" onclick="show_more_info('inventory_info');"  />&nbsp;Show more information</label> -->
				Sort By&nbsp;
				<select name="inventory_order" id="inventory_order" class="radius-4p" style="width:135px;">
					<option value="order_by_selector">ID</option>
					<option value="order_by_type2title">Type</option>
					<option value="order_by_purpose">Purpose</option>
					<option value="order_by_title">Location</option>
					<option value="order_by_price">Price</option>
					<option value="order_by_land">Area</option>
					<option value="order_by_cbeds">Beds</option>
					<option value="order_by_cstate">Status</option>
					<option value="order_by_date">Listed Date</option>
					<option value="0" disabled="disabled">------------</option>
					<option value="order_by_cl.name">Landlord</option>
					<option value="order_by_persq">Price per area</option>
					<option value="order_by_distance">Distance</option>
					<option value="order_by_conststatus">Construction Status</option>
					<option value="order_by_edate">Expiry</option>
					<option value="order_by_image_count">Listing images count</option>
				</select>&nbsp;in&nbsp;
				<select name="sl_by" id="sl_by" class="radius-4p">
					<option value="ASC">Ascending</option>
					<option value="DESC" selected="selected">Descending</option>
				</select>&nbsp;order.&nbsp;
				<img class="go_filter"
					src="https://assets.zameen.com/profolio/images/auto_utilization_go_button1_1.png" border="0" align="absmiddle" style="cursor:pointer;" />
			</div>
			<div id="inventory_result">
				<a name="invertory"></a>
				<div id="inventory_data" class="table" style="overflow: unset !important;"></div>
				<br>

			</div>
		 </div>
		 <div class="clear clearfix"></div>
	</div>
<div id="div_show_breakdown" style="display:none;"><table align="center"><tr><td align="center"><img src="https://profolio.zameen.com/images/common/loading.gif" border="0" /></td></tr></table></div>
<div class="clear clearfix"></div>
</div>
<script type="text/javascript">
	/* When the user clicks on the button,
		toggle between hiding and showing the dropdown content */
	function myFunction(obj) {
		var id = $(obj).children('.dropdown-content').attr("id");
		if( !$('#'+id).hasClass('show'))
		{
			$('.dropdown-content').removeClass('show');
  			document.getElementById(id).classList.toggle("show");
		}
  		else
			$('.dropdown-content').removeClass('show');
	}

	// Close the dropdown menu if the user clicks outside of it
	window.onclick = function(event) {
		if (!event.target.matches('.dropbtn'))
		{
			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			for (i = 0; i < dropdowns.length; i++)
			{
		  		var openDropdown = dropdowns[i];
				if (openDropdown.classList.contains('show'))
				{
					openDropdown.classList.remove('show');
				}
			}
		}
	}
</script>		</div>
		</div>
	</div>
</div>

@endsection
