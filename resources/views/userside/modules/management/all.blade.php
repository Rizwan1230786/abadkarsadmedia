@extends('userside.layout')
@section('main')



	<div id="rightcolumn" style="
width:79%;margin-left:0px; " class="rightcolumn_div post_story_margin">

			<div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
				
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=newlead&int_type=lead">
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
<script language="javascript">
/* 	$(function()
	{
		
		$('.date-pick-start').datePicker({clickInput:true,startDate:'01/01/2007',endDate:'30/06/2022'});
		$('.date-pick-end').datePicker({clickInput:true,startDate:'01/01/2007',endDate:'30/06/2022'});
	});	 */
</script>
<script type="text/javascript" src="https://profolio.zameen.com/javascript/combo1_19.js"></script> 
</div>
<link rel="stylesheet" type="text/css" href="https://profolio.zameen.com/css/jtool_datepicker_css1_1.css"/>
<script language="javascript">
$(function()
{
	$('.date-pick-start').dateinput({format: 'dd/mm/yyyy',speed: 'fast',firstDay: 1,offset: [10, -50]});
	$('.date-pick-end').dateinput({format: 'dd/mm/yyyy',speed: 'fast',firstDay: 1,offset: [10, -50]});
	
});

$(".paginate a").livequery('click', function(event)
 {
	a = this.id;
	var mng_date_range = "";
	mng_date_range = $("#mng_date_range_filter").val();
	sub_value = $("#inq_subrecord").val();
 	var inq_sDate = $("#dateStart").val();
	var inq_eDate = $("#dateEnd").val();
	var shared = $("#shared_check").val();
	var inq_combo_type = $("#inq_type").val();
	var userids = $("#userids").val();
	var superAdmin = $("#superAdmin_val").val();
	var sort_by = $("#sort_by").val();
	var asc_desc = $("#asc_desc").val();
	var unallocated_admin = $("#unallocated_admin").val();
	var ag_id = $("#ag_id").val();
	var allocatedTo = $("#allocatedTo").val();
	var project_id = $("#projects").val();
	var cat_id = $('#cat_id').val();
	clients_users_id = 0;
	var phone_call_source = '';
	var clf = 'all';
	if(I("ag_clientsusers") != null)
		clients_users_id = I("ag_clientsusers").value;
	var load_image = "<span style=display:block;float:left;><img src='" + this_domain + "/images/common/loading1.gif' /></span>";
	$("#pgInt_div").html(load_image);
	var timeline_status = $("#timeline_status").val();
	
	var close_val = 0;
	
	//$.get(this_domain_mybayut + '/includes/inquiries/pg_int.php',{startDate:inq_sDate,endDate:inq_eDate,inqType:inq_combo_type,page: a, one_pg: sub_value,userids:userids,superAdmin:superAdmin,sort_by:sort_by,asc_desc:asc_desc,unallocated_admin:unallocated_admin,ag_id:ag_id,allocatedTo:allocatedTo, ag_userid: clients_users_id,close_val:close_val,classification:clf,mng_date_range:mng_date_range,cat_id:cat_id,phone_call_source:phone_call_source,timeline_status:timeline_status,shared:shared,project_id:project_id}
	$.get(this_domain_mybayut+ '/index.php',{ajax:1,ajax_section:'clients_leads',ajax_action:'load_leads',startDate:inq_sDate,endDate:inq_eDate,inqType:inq_combo_type,page: a, one_pg: sub_value,userids:userids,superAdmin:superAdmin,sort_by:sort_by,asc_desc:asc_desc,unallocated_admin:unallocated_admin,ag_id:ag_id,allocatedTo:allocatedTo, ag_userid: clients_users_id,close_val:close_val,classification:clf,mng_date_range:mng_date_range,cat_id:cat_id,phone_call_source:phone_call_source,timeline_status:timeline_status,shared:shared,project_id:project_id}
	,function(str) 
	{
		$("#pgInt_div").html(str);
	});		
	return false;
});

$(".for_pagination span a").live('click', function(event)
 {
	a = this.id;
	var mng_date_range = "";
	mng_date_range = $("#mng_date_range_filter").val();
	sub_value = $("#inq_subrecord").val();
 	var inq_sDate = $("#dateStart").val();
	var inq_eDate = $("#dateEnd").val();
	var inq_combo_type = $("#inq_type").val();
	var shared = $("#shared_check").val();
	var userids = $("#userids").val();
	var superAdmin = $("#superAdmin_val").val();
	var sort_by = $("#sort_by").val();
	var asc_desc = $("#asc_desc").val();
	var unallocated_admin = $("#unallocated_admin").val();
	var ag_id = $("#ag_id").val();
	var allocatedTo = $("#allocatedTo").val();
	var project_id = $("#projects").val();
	var cat_id = $('#cat_id').val();
	var phone_call_source = '';
	clients_users_id = 0;
	if(I("ag_clientsusers") != null)
		clients_users_id = I("ag_clientsusers").value;
	var load_image = "<span style=display:block;float:left;><img src='" + this_domain + "/images/common/loading1.gif' /></span>";
	$("#pgInt_div").html(load_image);
	var clf = 'all';
	
		var close_val = 0;
	//$.get(this_domain_mybayut + '/includes/inquiries/pg_int.php',{startDate:inq_sDate,endDate:inq_eDate,inqType:inq_combo_type,page: a, one_pg: sub_value,userids:userids,superAdmin:superAdmin,sort_by:sort_by,asc_desc:asc_desc,unallocated_admin:unallocated_admin,ag_id:ag_id,allocatedTo:allocatedTo, ag_userid: clients_users_id,classification:clf,subsection:'listings',close_val:close_val,mng_date_range:mng_date_range,cat_id:cat_id,phone_call_source:phone_call_source,shared:shared,project_id:project_id}
	$.get(this_domain_mybayut+ '/index.php',{ajax:1,ajax_section:'clients_leads',ajax_action:'load_leads',startDate:inq_sDate,endDate:inq_eDate,inqType:inq_combo_type,page: a, one_pg: sub_value,userids:userids,superAdmin:superAdmin,sort_by:sort_by,asc_desc:asc_desc,unallocated_admin:unallocated_admin,ag_id:ag_id,allocatedTo:allocatedTo, ag_userid: clients_users_id,classification:clf,subsection:'listings',close_val:close_val,mng_date_range:mng_date_range,cat_id:cat_id,phone_call_source:phone_call_source,shared:shared,project_id:project_id}
	,function(str) 
	{
		$("#pgInt_div").html(str);
	});		
	return false;
});

$(".go_sort_lead").click(function(event)
 {
	a = 1;
	var mng_date_range = "";
	mng_date_range = $("#mng_date_range_filter").val();
	sub_value = $("#inq_subrecord").val();
 	var inq_sDate = $("#dateStart").val();
	var inq_eDate = $("#dateEnd").val();
	var inq_combo_type = $("#inq_type").val();
	var userids = $("#userids").val();
	var superAdmin = $("#superAdmin_val").val();
	var shared = $("#shared_check").val();
	var sort_by = $("#sort_by").val();
	var asc_desc = $("#asc_desc").val();
	var unallocated_admin = $("#unallocated_admin").val();
	var ag_id = $("#ag_id").val();
	var allocatedTo = $("#allocatedTo").val();
	var project_id = $("#projects").val();
	var cat_id = $('#cat_id').val();
	clients_users_id = 0;
	var phone_call_source = '';
	var inquiry_source = $("#inquiry_source").val();
	var inquiry_source_value = $("#inquiry_source_value").val();
	var clf = 'all';
	var timeline_status = $("#timeline_status").val();
	if(I("ag_clientsusers") != null)
		clients_users_id = I("ag_clientsusers").value;
	var load_image = "<span style=display:block;float:left;><img src='" + this_domain + "/images/common/loading1.gif' /></span>";
	$("#pgInt_div").html(load_image);
	
	var close_val = 0;
	
	//$.get(this_domain_mybayut + '/includes/inquiries/pg_int.php',{startDate:inq_sDate,endDate:inq_eDate,inqType:inq_combo_type,page: a, one_pg: sub_value,userids:userids,superAdmin:superAdmin,sort_by:sort_by,asc_desc:asc_desc,unallocated_admin:unallocated_admin,ag_id:ag_id,allocatedTo:allocatedTo, ag_userid: clients_users_id,classification:clf,subsection:'listings',close_val:close_val,mng_date_range:mng_date_range,cat_id:cat_id,inquiry_source:inquiry_source,inquiry_source_value:inquiry_source_value,phone_call_source:phone_call_source,timeline_status:timeline_status,shared:shared,project_id:project_id}
	$.get(this_domain_mybayut+ '/index.php',{ajax:1,ajax_section:'clients_leads',ajax_action:'load_leads',startDate:inq_sDate,endDate:inq_eDate,inqType:inq_combo_type,page: a, one_pg: sub_value,userids:userids,superAdmin:superAdmin,sort_by:sort_by,asc_desc:asc_desc,unallocated_admin:unallocated_admin,ag_id:ag_id,allocatedTo:allocatedTo, ag_userid: clients_users_id,classification:clf,subsection:'listings',close_val:close_val,mng_date_range:mng_date_range,cat_id:cat_id,inquiry_source:inquiry_source,inquiry_source_value:inquiry_source_value,phone_call_source:phone_call_source,timeline_status:timeline_status,shared:shared,project_id:project_id}
	,function(str) 
	{
		$("#pgInt_div").html(str);
	});		
	return false;
});

function get_sort_leads()
{
	a = 1;
	var mng_date_range = "";
	mng_date_range = $("#mng_date_range_filter").val();
	sub_value = $("#inq_subrecord").val();
 	var inq_sDate = $("#dateStart").val();
	var inq_eDate = $("#dateEnd").val();
	var inq_combo_type = $("#inq_type").val();
	var userids = $("#userids").val();
	var superAdmin = $("#superAdmin_val").val();
	var shared = $("#shared_check").val();
	var sort_by = $("#sort_by").val();
	var asc_desc = $("#asc_desc").val();
	var unallocated_admin = $("#unallocated_admin").val();
	var ag_id = $("#ag_id").val();
	var allocatedTo = $("#allocatedTo").val();
	var project_id = $("#projects").val();
	var cat_id = $('#cat_id').val();
	clients_users_id = 0;
	var clf = 'all';
	var phone_call_source = '';
	if(I("ag_clientsusers") != null)
		clients_users_id = I("ag_clientsusers").value;
	var load_image = "<span style=display:block;float:left;><img src='" + this_domain + "/images/common/loading1.gif' /></span>";
	$("#pgInt_div").html(load_image);
	
	var close_val = 0;
	
	//$.get(this_domain_mybayut + '/includes/inquiries/pg_int.php',{startDate:inq_sDate,endDate:inq_eDate,inqType:inq_combo_type,page: a, one_pg: sub_value,userids:userids,superAdmin:superAdmin,sort_by:sort_by,asc_desc:asc_desc,unallocated_admin:unallocated_admin,ag_id:ag_id,allocatedTo:allocatedTo, ag_userid: clients_users_id,classification:clf,subsection:'listings',close_val:close_val,mng_date_range:mng_date_range,cat_id:cat_id,phone_call_source:phone_call_source,shared:shared,project_id:project_id}
	$.get(this_domain_mybayut+ '/index.php',{ajax:1,ajax_section:'clients_leads',ajax_action:'load_leads',startDate:inq_sDate,endDate:inq_eDate,inqType:inq_combo_type,page: a, one_pg: sub_value,userids:userids,superAdmin:superAdmin,sort_by:sort_by,asc_desc:asc_desc,unallocated_admin:unallocated_admin,ag_id:ag_id,allocatedTo:allocatedTo, ag_userid: clients_users_id,classification:clf,subsection:'listings',close_val:close_val,mng_date_range:mng_date_range,cat_id:cat_id,phone_call_source:phone_call_source,shared:shared,project_id:project_id}	
	,function(str) 
	{
		$("#pgInt_div").html(str);
	});
}
	
	/////Ajax load lead
	sub_value = $("#inq_subrecord").val();
 	var inq_sDate = $("#dateStart").val();
	var inq_eDate = $("#dateEnd").val();
				var inq_combo_type = $("#inq_type").val();
		
	var userids = $("#userids").val();
	var superAdmin = $("#superAdmin_val").val();
	var shared = $("#shared_check").val();
	var sort_by = $("#sort_by").val();
	var asc_desc = $("#asc_desc").val();
	var unallocated_admin = $("#unallocated_admin").val();
	var ag_id = $("#ag_id").val();
	var allocatedTo = $("#allocatedTo").val();
	var project_id = $("#projects").val();
	var clf = 'all';
	clients_users_id = 0;
	if(I("ag_clientsusers") != null)
		clients_users_id = I("ag_clientsusers").value;
	var close_val = 0;
	
	var phone_call_source = '';
	
	var mng_date_range = "";
	mng_date_range = $("#mng_date_range_filter").val();
	var load_image = "<span style=display:block;float:left;><img src='" + this_domain + "/images/common/loading1.gif' /></span>";
	$("#pgInt_div").html(load_image);
	//$.get(this_domain_mybayut + '/includes/inquiries/pg_int.php',{startDate:inq_sDate,endDate:inq_eDate,inqType:inq_combo_type,page: 1, one_pg: sub_value,userids:userids,superAdmin:superAdmin,sort_by:sort_by,asc_desc:asc_desc,unallocated_admin:unallocated_admin,ag_id:ag_id,allocatedTo:allocatedTo, ag_userid: clients_users_id,classification:clf,lead_status:status,subsection:'listings',close_val:close_val,mng_date_range:mng_date_range,phone_call_source:phone_call_source,shared:shared,project_id:project_id}
	$.get(this_domain_mybayut+ '/index.php',{ajax:1,ajax_section:'clients_leads',ajax_action:'load_leads',startDate:inq_sDate,endDate:inq_eDate,inqType:inq_combo_type,page: 1, one_pg: sub_value,userids:userids,superAdmin:superAdmin,sort_by:sort_by,asc_desc:asc_desc,unallocated_admin:unallocated_admin,ag_id:ag_id,allocatedTo:allocatedTo, ag_userid: clients_users_id,classification:clf,lead_status:status,subsection:'listings',close_val:close_val,mng_date_range:mng_date_range,phone_call_source:phone_call_source,shared:shared,project_id:project_id}
	,function(str) 
	{
		$("#pgInt_div").html(str);
	});
</script>
<script type="text/javascript" src="https://profolio.zameen.com/javascript/mybayut/qm_java.js"></script>		</div>
		</div>
	</div>
</div>

<div id="footer_top"></div>
<div id="footer">
	<div>
		<a rel="nofollow" href="https://www.zameen.com">Home</a> |  
		<a rel="nofollow" href="https://www.zameen.com/blog">Blog</a> |  
		<a rel="nofollow" href="https://www.zameen.com/contactus.html">Contact Us</a> | 
		<a rel="nofollow" href="https://www.zameen.com/help/index.html">Help</a> | 
		<a rel="nofollow" href="https://www.zameen.com/news.php">News</a> |
		<a rel="nofollow" href="https://www.zameen.com/advertise/index.html">Advertise</a> | 	
		<a  href="https://www.zameen.com/about/aboutus.html">About Us</a> | 

		<a rel="nofollow" href="https://www.zameen.com/privacy.html">Privacy Policy</a> | 
		<a rel="nofollow" href="https://www.zameen.com/terms.html">Terms of Use</a>
	</div>
	<div>
		&copy; 2007 - 2022 Zameen.com. All rights reserved.
	</div>
	<div>
				<a href="https://www.zameen.com/Homes/Lahore-1-1.html">Lahore Property</a> | 
		<a href="https://www.zameen.com/Homes/Karachi-2-1.html">Karachi Property</a> | 
		<a href="https://www.zameen.com/Homes/Islamabad-3-1.html">Islamabad Property</a> | 
		<a href="https://www.bayut.com">Dubai Property</a>  | 
		<a href="https://www.zameen.com/HomeFinance/Pakistan-Mortgages.php">Home Finance</a> 
	</div>   	
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
	//show_sitewide_ad();
	loadfunc();
</script>
<div class="facebox" id="stext_facebox" style="display:none; position:absolute; z-index:5000">
  <div class="facebox_popup">
	<table style="width:251px;"> 
	   <tr><td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/></tr>
	   <tr><td class='facebox_b'/>
			<td class='facebox_body'>
				<div class='facebox_content'>
					<div name="stext" id="stext"> 0 </div> 				</div>
			</td>
			<td class='facebox_b'/>
		</tr>
		<tr><td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/></tr>
	</table>
  </div>
</div>
<div id="new_inq_res" style="display:none; border:5px solid #00FFCC;"></div>
<div id="inquiry_update_rec" style="display:none; border:5px solid #00FFCC;"></div>
<div id="new_loading_div" style="display:none;"></div>

<script type="text/javascript" src="https://profolio.zameen.com/javascript/listings_java1_23.js?v=12"></script>
<script type="text/javascript" src="https://profolio.zameen.com/javascript/mybayut/mybayut_java3_19.js?v=13"></script>

		<script src="https://profolio.zameen.com/javascript/mybayut/clients_java7_12.js" type="text/javascript"></script>
		<script src="https://profolio.zameen.com/javascript/mybayut/commonlisting_java3_35.js?v=11" type="text/javascript"></script>
		<script type="text/javascript" src="https://profolio.zameen.com/javascript/mybayut/mylisting_java3_30.js?v=15.3"></script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"4d0861c972","applicationID":"1086318949","transactionName":"Y1dQYRYAXxJRARBaXVodZ0cNTkETXwQLX1tbHVtbAARJT0AKFA==","queueTime":0,"applicationTime":2199,"atts":"TxBTF14aTBw=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
@endsection