@extends('userside.layout')
@section('main')
<div class="imz_dialog" id="common_popup" style="display:none">
	<div class="title_div">
		<span class="dialog_title"></span>
		<span onclick="imz_filter.click()" class="dialog_close"></span>
	</div>
	<div class="dialog_container"></div> 
</div>
<div class="imz_dialog_redefined" id="common_popup_redefined" style="display:none">
	<div class="title_div_redefined">
		<span class="dialog_title_redefined"></span>
		<span onclick="imz_filter.click()" class="dialog_close"></span>
	</div>
	<div class="dialog_container_redefined"></div> 
</div>

	<div id="rightcolumn" style="
width:79%;margin-left:0px; " class="rightcolumn_div post_story_margin">

			<div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
				
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=newlead&int_type=lead" class="add_lead_client_btns">
					Add New Lead
				</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=add_client" class="add_lead_client_btns">
					Add New Client
				</a>				
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all&todo_status=5" class="export_import_xls " style="float: right;margin-right: 35px;margin-top: -4px;">Meetings Pushed <div class="numberCircle" style="-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;width: 10px;font-size: 10px;line-height: 9px;border: 2px solid red;position: relative;background-color: red;color: white;margin-top: -17px;margin-left: 102%;position: absolute;height: 10px;">
					<div class="height_fix" style=" margin-top: 100%;"></div>
					<div class="content" style="margin-top: -9px;margin-left: 2px;">0</div>
					</div></a>
					<span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=8&section=clients&subsection=client_listings">Clients & Leads</a> &raquo; Manage Leads </span>
			</div>
<div class="menu-controls" style="clear:both;padding:5px 0px;height:20px;display:none;">
	<img id="list_navi_icon" src="https://profolio.zameen.com/images/common/res_nav_icon.png" onclick="restore_leads_menu();" onmouseover="overlib('<center>Show Menu</center>',CAPTION,'',LEFT,CENTER,WIDTH, 100);" onmouseout='cClick();' style="padding:2px;height:15px;float:left;display:none;" />
</div>

<div id="inq_result_OuterDiv">
<input type="hidden" name="page" value="listings" />
<input type="hidden" id="userids" name="userids" value="1001457763" />
<input type="hidden" id="superAdmin_val" name="superAdmin_val" value="" />

<link rel="stylesheet" href="https://profolio.zameen.com/lib/combo/combo1_6.css?v=1" type="text/css">
<script type="text/javascript" src="https://profolio.zameen.com/lib/combo/combo_tm1_19.js" ></script>
<script type="text/javascript" src="https://profolio.zameen.com/javascript/mybayut/searchlead_java3_16.js" ></script>
<div class="box_title">
	<div><b>Manage Leads</b></div>
</div>
<div class="box_body">

<form name="frm_inventorysearch" method="post" action="https://profolio.zameen.com/profolio/index.php?ajax=1&ajax_section=clients_leads&ajax_action=export_lead_to_excel">
<input type="hidden" name="h_lower_limit" id="h_lower_limit" value="0" />
<input type="hidden" name="h_upper_limit" id="h_upper_limit" value="50" />
<input type="hidden" name="shared_check" id="shared_check" value="0" />
<input type="hidden" name="h_page" id="h_page" value="2" />
<input type="hidden" name="leadsearch_user_flag" id="leadsearch_user_flag" value="1" />
<input type='hidden' name='classification_id' id='classification_id' value='1' />
<div id="inquiry_listing">
	
		<span style="width:20%; line-height:19px;"><b>Lead Status</b> 
		<br>
			<select id="inq_type">
			<option value=1 >New</option><option value=2 >Contacted Client (Call)</option><option value=10 >Contacted Client (Call Attempt)</option><option value=11 >Contacted Client (Email)</option><option value=7 >Sent Availability List</option><option value=14 >Site Visit</option><option value=3 >Followed Up (Call)</option><option value=12 >Followed Up (Email)</option><option value=4 >Meeting (Arranged)</option><option value=15 >Meeting Pushed</option><option value=5 >Meeting (Done)</option><option value=18 >&ensp;&ensp;Site Office</option><option value=17 >&ensp;&ensp;Out-door</option><option value=16 >&ensp;&ensp;Company Office</option><option value=13 >Meeting (Attempt)</option><option value=9 >Token Received</option>			<option value="All" Selected>All</option>		
						</select>	
		</span>
<input type=hidden name=unallocated_admin id=unallocated_admin value=><input type=hidden name=ag_id id=ag_id value=>		<span style="line-height:19px; padding-right:5px;"><b>Last Updated</b><br>
			<input name="date1" id="dateStart" class="date-pick-start" value="30/06/2021" style="width:80px;"/>
			&nbsp;&nbsp;To: 
			<input name="date2" id="dateEnd" class="date-pick-end" value="30/06/2022" style="width:80px;"/>
			&nbsp;
			<input type="button" id="GetInquiries" value="Apply Range" class="buttonStyle" style="margin:0px; padding:0px;width:90px;display:none;" />
		</span>
			</div>
<div style="clear:both; margin:10px 10px 10px 0px;display:block;">
		<span style='float:left;margin-right:6px;margin-top:3px;'><strong>Location:</strong></span>
	<span style="float:left;margin-bottom:5px;">
	<div class='loc_box round' style='float:left;width:300px' id='cat_id_box' onclick='focus_category_box(this)'>
					<div class='t'><div></div></div>
					<div class='m single' style='height:18px'>
						<input container_id='' value='Enter Location Here' id='cat_id_input' class='categoryfilter' style='display:block' ajax_get='get_ajax_category_for_leads' call_back='select_cat_item' dvalue='Enter Location Here,Enter more locations here' multi='0' divtitle='Please select a location below' />
					</div>
					<div class='b'><div></div></div>
					<input type='hidden' name='cat_id' id='cat_id' value=''  />
				</div>		</span>	
		
			<img src="https://assets.zameen.com/profolio/images/auto_utilization_go_button1_1.png" border="0" align="absmiddle" style="cursor:pointer;margin: 22px 0px 0px 5px;" class="go_sort_lead" />
	<label style="float:right;"><input type="checkbox" name="chk_moreinfo" id="chk_moreinfo" style="padding:0px;margin:0px;position:relative;top:2px;" onclick="show_more_info('lead_info');"  />&nbsp;Show more information</label>
	
	<div style="display:none; width:75%;">
		Sort By:&nbsp;
		<select name="sort_by" id="sort_by" style="width:90px;">
			<option value="inquiry_id">ID</option>
			<option value="name">Allocation</option>
			<option value="nestStatusTitle">Status</option>
			<option value="clientName">Client Name</option>
			<option value="p.purpose_title">Purpose</option>
			<option value="t.type_alternate_title">Type</option>
			<option value="locality">Locality</option>
			<option value="budget">Budget</option>
			<option value="time_updated">Last Updated</option>
			<option value="min_land">Land Area</option>
		</select>&nbsp;in&nbsp;
		<select name="asc_desc" id="asc_desc">
			<option value="ASC">Ascending</option>
			<option value="DESC" selected="selected">Descending</option>
		</select>&nbsp;order
 and show  leads per page.		<img id="go_pg_int_span" class="go_sort_lead" src="https://profolio.zameen.com/images/common/go.jpg" border="0" align="absmiddle" style="cursor:pointer;" />
	</div>	
</div>	
	<div style="width:100%;float:left;clear:both; margin:0; padding:0; line-height:4px;">
		<span style=" float:left;width:100%;"></span>
	</div>
	<div id="pgInt_div"></div>
</form>
<div id="cust-overlib" style='display:none;min-width:250px;background-color:#eeeeee;top:20px;position:absolute;z-index:100;right:0px;border:10px solid rgba(135,135,135,1);border-radius:5px;'>
	<form action="https://profolio.zameen.com/profolio/index.php?ajax=1&ajax_section=clients_leads&ajax_action=import_lead_to_excel" id='form_import_excel' method="post" enctype='multipart/form-data'>
		<table cellpadding="3" cellspacing="4" width='100%;' align='center'>
			<tr style='background-color: #4f4f4f;height:16px;color:#ffffff;'>
				<td colspan="2">Select File
					<a href="javascript:void(0);" onclick="close_this_overlib('cust-overlib');" style='background:url("https://profolio.zameen.com/images/sprite_images/top_menu.gif") no-repeat scroll 0 -273px rgba(0, 0, 0, 0);width:19px;height:15px;float:right;'></a>
				</td>
			</tr>
			<tr>
				<td colspan="2">Select File</td>
			</tr>
			<tr>
				<td colspan="2"><input type='file' name='import_from_excel' id='import_from_excel' /></td>
			</tr>
			<tr>
				<td colspan="2">
				<input type="submit" id="import_from_excel" class="add_lead_client_btns" value="Import" name="submit" style="border:none;padding-top:0px;height:20px;float:left;margin-left:0px;">
				<a href="https://profolio.zameen.com/profolio/downloads/Template.xlsx" class="add_lead_client_btns"style='font-size:9px;'><strong>Download Template</strong></a>
				</td>
			</tr>
		</table>
	</form>
</div>
</div>
@endsection