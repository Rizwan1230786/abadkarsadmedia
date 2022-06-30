@extends('userside.layout')
@section('main')
<div id="maincontent"  >
		
		<div id="leftcolumn">
<div id='left_lead_menu' style='width:165px;position:absolute;left:0px;top:136px;background-color:#ffffff;display:none;'><div id="mybayut_menu" >
		
		<span class="leftcolumheadings">Leads <img id="show_abs_menu" class="nav-menu-img-bg" src="https://profolio.zameen.com/images/common/front_icon.png" onclick="show_leads_menu();" style='float:right;' />
		</span>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=lead_summary" class="leftcolumnlink">Summary</a>
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="manage_leads_menu1" onclick="menu_divtoggle('manage_leads_menu1','manage_leads_con1');">Manage Leads</a>
				<div class="listing_class" style="display:none;" id="manage_leads_con1">
			<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=all">All</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=1" class="leftcolumnlink">Very hot (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=2" class="leftcolumnlink">Hot (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=3" class="leftcolumnlink">Moderate (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=4" class="leftcolumnlink">Cold (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=5" class="leftcolumnlink">Very cold (0)</a>
						<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=neutral" class="leftcolumnlink">Unclassified (0)</a>
		</div>
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="todo_lead_menu1" onclick="menu_divtoggle('todo_lead_menu1','todo_leads_con1');">Todo List</a>
		
		<div class="listing_class" style=";display:none;" id="todo_leads_con1" >
		
			<a href="javascript:void(0);" class="leftcolumnlink_sub" id="todo_lead_menu_all1" onclick="menu_divtoggle('todo_lead_menu_all1','todo_leads_con_all1');">&ensp;All List (0)</a>
		<div class="listing_class" style="border-left: none;border-right: none;display:none;" id="todo_leads_con_all1" >
			<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all" class="leftcolumnlink">&ensp;All (0)</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all&todo_status=2" class="leftcolumnlink">&ensp;
								Contact Client(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all&todo_status=7" class="leftcolumnlink">&ensp;
								Send Availability List(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all&todo_status=3" class="leftcolumnlink">&ensp;
								Follow Up(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all&todo_status=4" class="leftcolumnlink">&ensp;
								Arrange Meeting(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all&todo_status=5" class="leftcolumnlink">&ensp;
								Meet Client(0)							</a>
					</div>
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="todo_lead_menu_my1" onclick="menu_divtoggle('todo_lead_menu_my1','todo_leads_con_my1');">&ensp;My List (0)</a>
		<div class="listing_class" style="border-left: none;border-right: none;display:none;" id="todo_leads_con_my1" >
			<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my" class="leftcolumnlink">&ensp;All (0)</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my&todo_status=2" class="leftcolumnlink">&ensp;
								Contact Client(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my&todo_status=7" class="leftcolumnlink">&ensp;
								Send Availability List(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my&todo_status=3" class="leftcolumnlink">&ensp;
								Follow Up(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my&todo_status=4" class="leftcolumnlink">&ensp;
								Arrange Meeting(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my&todo_status=5" class="leftcolumnlink">&ensp;
								Meet Client(0)							</a>
					</div>
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="todo_lead_menu_shared1" onclick="menu_divtoggle('todo_lead_menu_shared1','todo_leads_con_shared1');">&ensp;Shared List (0)</a>
		
		<div class="listing_class" style="border-left: none;border-right: none;display:none;" id="todo_leads_con_shared1" >
			<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared" class="leftcolumnlink">&ensp;All (0)</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared&todo_status=2" class="leftcolumnlink">&ensp;
								Contact Client(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared&todo_status=7" class="leftcolumnlink">&ensp;
								Send Availability List(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared&todo_status=3" class="leftcolumnlink">&ensp;
								Follow Up(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared&todo_status=4" class="leftcolumnlink">&ensp;
								Arrange Meeting(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared&todo_status=5" class="leftcolumnlink">&ensp;
								Meet Client(0)							</a>
					</div>
		
		
		</div>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=lead_search" class="leftcolumnlink">Search Leads</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=newlead&int_type=lead" class="leftcolumnlink">Add New Lead</a>
		
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="close_lead_menu1" onclick="menu_divtoggle('close_lead_menu1','close_leads_con1');">Closed Leads</a>
		<div class="listing_class" style="display:none;" id="close_leads_con1">
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&status=Closed&close_val=6"  class="leftcolumnlink">Closed (Won) (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&status=Closed&close_val=8"  class="leftcolumnlink">Closed (Lost) (0)</a>
		</div>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&status=Open" class="leftcolumnlink">Open Leads</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=deleted" class="leftcolumnlink">Deleted Leads</a>
		<a  class="leftcolumnlink" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=token_received" class="leftcolumnlink">Token Received (0)</a>
		<a class="leftcolumnlink" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=notification" class="leftcolumnlink" style="padding-bottom: 2px;">Notifications
		
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&status=Open&shared=1" class="leftcolumnlink">Shared Leads (0)</a>
			

		<!-- <div id="Mydiv" 
				style="border-color: red;/* width: 19px; */text-align: center;border-radius: 100%;display: inline-block;padding: 0px;color: white;background-color: red;margin-left: 54%; /* margin-top: -21px; */height: 16px;width: 15px;"><span style="display:table-cell;vertical-align:middle;padding-left: 4px;">0</span></div> -->
				
		</a>
					<br/>
		<span class="leftcolumheadings">Reports</span>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=activity_report" class="leftcolumnlink">Activity Report</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=kpi" class="leftcolumnlink">KPI Report</a>
		
		 
					<br/>
		<span class="leftcolumheadings">Clients</span>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_summary" class="leftcolumnlink">Summary</a>
		
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="manage_clients_menu1" onclick="menu_divtoggle('manage_clients_menu1','manage_clients_con1');">Manage Clients</a>
		
		<div class="listing_class" style="display:none;" id="manage_clients_con1">
			<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings" class="leftcolumnlink">All (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&client_rating=1" class="leftcolumnlink">Very Rich (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&client_rating=2" class="leftcolumnlink">Rich (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&client_rating=3" class="leftcolumnlink">Middle Class (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&client_rating=4" class="leftcolumnlink">Lower Middle (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&client_rating=5" class="leftcolumnlink">Poor (0)</a>
		</div>
		
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=search_main" class="leftcolumnlink">Search Clients</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=add_client" class="leftcolumnlink">Add New Client</a>
		 
		
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&status=1" class="leftcolumnlink">Deleted Clients</a>
		<br/>
		<span class="leftcolumheadings">Call Center</span>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=lead_summary&phone_call_source=call_center" class="leftcolumnlink">Summary</a>
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="manage_leads_menu21" onclick="menu_divtoggle('manage_leads_menu21','manage_leads_con21');">Manage Leads</a>
		
		
		<div class="listing_class" style="display:none;" id="manage_leads_con21">
		
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=all&phone_call_source=call_center">All</a>
								<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=1&phone_call_source=call_center" class="leftcolumnlink">Very hot (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=2&phone_call_source=call_center" class="leftcolumnlink">Hot (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=3&phone_call_source=call_center" class="leftcolumnlink">Moderate (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=4&phone_call_source=call_center" class="leftcolumnlink">Cold (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=5&phone_call_source=call_center" class="leftcolumnlink">Very cold (0)</a>
						<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=neutral" class="leftcolumnlink">Unclassified (0)</a>
		</div>
		
		
		
	
</div>

</div><div id="mybayut_menu" style='display:block;' class='leads_menu_con'>
		
		<span class="leftcolumheadings">Leads <img id="show_abs_menu" class="nav-menu-img-bg" src="https://profolio.zameen.com/images/common/back_icon.png" onclick="hide_leads_menu();" style='float:right;' />
			<img id="show_abs_menu" class="nav-menu-img-bg" src="https://profolio.zameen.com/images/common/back_icon_.png" style='padding:4px 6px;' onclick="collapse_lead_menu();" style='float:right;' />
		</span>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=lead_summary" class="leftcolumnlink">Summary</a>
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="manage_leads_menu0" onclick="menu_divtoggle('manage_leads_menu0','manage_leads_con0');">Manage Leads</a>
				<div class="listing_class" style="display:none;" id="manage_leads_con0">
			<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=all">All</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=1" class="leftcolumnlink">Very hot (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=2" class="leftcolumnlink">Hot (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=3" class="leftcolumnlink">Moderate (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=4" class="leftcolumnlink">Cold (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=5" class="leftcolumnlink">Very cold (0)</a>
						<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=neutral" class="leftcolumnlink">Unclassified (0)</a>
		</div>
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="todo_lead_menu0" onclick="menu_divtoggle('todo_lead_menu0','todo_leads_con0');">Todo List</a>
		
		<div class="listing_class" style=";display:none;" id="todo_leads_con0" >
		
			<a href="javascript:void(0);" class="leftcolumnlink_sub" id="todo_lead_menu_all0" onclick="menu_divtoggle('todo_lead_menu_all0','todo_leads_con_all0');">&ensp;All List (0)</a>
		<div class="listing_class" style="border-left: none;border-right: none;display:none;" id="todo_leads_con_all0" >
			<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all" class="leftcolumnlink">&ensp;All (0)</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all&todo_status=2" class="leftcolumnlink">&ensp;
								Contact Client(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all&todo_status=7" class="leftcolumnlink">&ensp;
								Send Availability List(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all&todo_status=3" class="leftcolumnlink">&ensp;
								Follow Up(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all&todo_status=4" class="leftcolumnlink">&ensp;
								Arrange Meeting(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_all&todo_status=5" class="leftcolumnlink">&ensp;
								Meet Client(0)							</a>
					</div>
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="todo_lead_menu_my0" onclick="menu_divtoggle('todo_lead_menu_my0','todo_leads_con_my0');">&ensp;My List (0)</a>
		<div class="listing_class" style="border-left: none;border-right: none;display:none;" id="todo_leads_con_my0" >
			<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my" class="leftcolumnlink">&ensp;All (0)</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my&todo_status=2" class="leftcolumnlink">&ensp;
								Contact Client(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my&todo_status=7" class="leftcolumnlink">&ensp;
								Send Availability List(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my&todo_status=3" class="leftcolumnlink">&ensp;
								Follow Up(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my&todo_status=4" class="leftcolumnlink">&ensp;
								Arrange Meeting(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_my&todo_status=5" class="leftcolumnlink">&ensp;
								Meet Client(0)							</a>
					</div>
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="todo_lead_menu_shared0" onclick="menu_divtoggle('todo_lead_menu_shared0','todo_leads_con_shared0');">&ensp;Shared List (0)</a>
		
		<div class="listing_class" style="border-left: none;border-right: none;display:none;" id="todo_leads_con_shared0" >
			<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared" class="leftcolumnlink">&ensp;All (0)</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared&todo_status=2" class="leftcolumnlink">&ensp;
								Contact Client(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared&todo_status=7" class="leftcolumnlink">&ensp;
								Send Availability List(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared&todo_status=3" class="leftcolumnlink">&ensp;
								Follow Up(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared&todo_status=4" class="leftcolumnlink">&ensp;
								Arrange Meeting(0)							</a>
										<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=todo&todo_list=todo_shared&todo_status=5" class="leftcolumnlink">&ensp;
								Meet Client(0)							</a>
					</div>
		
		
		</div>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=lead_search" class="leftcolumnlink">Search Leads</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=newlead&int_type=lead" class="leftcolumnlink">Add New Lead</a>
		
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="close_lead_menu0" onclick="menu_divtoggle('close_lead_menu0','close_leads_con0');">Closed Leads</a>
		<div class="listing_class" style="display:none;" id="close_leads_con0">
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&status=Closed&close_val=6"  class="leftcolumnlink">Closed (Won) (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&status=Closed&close_val=8"  class="leftcolumnlink">Closed (Lost) (0)</a>
		</div>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&status=Open" class="leftcolumnlink">Open Leads</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=deleted" class="leftcolumnlink">Deleted Leads</a>
		<a  class="leftcolumnlink" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=token_received" class="leftcolumnlink">Token Received (0)</a>
		<a class="leftcolumnlink" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=notification" class="leftcolumnlink" style="padding-bottom: 2px;">Notifications
		
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&status=Open&shared=1" class="leftcolumnlink">Shared Leads (0)</a>
			

		<!-- <div id="Mydiv" 
				style="border-color: red;/* width: 19px; */text-align: center;border-radius: 100%;display: inline-block;padding: 0px;color: white;background-color: red;margin-left: 54%; /* margin-top: -21px; */height: 16px;width: 15px;"><span style="display:table-cell;vertical-align:middle;padding-left: 4px;">0</span></div> -->
				
		</a>
					<br/>
		<span class="leftcolumheadings">Reports</span>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=activity_report" class="leftcolumnlink">Activity Report</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=kpi" class="leftcolumnlink">KPI Report</a>
		
		 
					<br/>
		<span class="leftcolumheadings">Clients</span>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_summary" class="leftcolumnlink">Summary</a>
		
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="manage_clients_menu0" onclick="menu_divtoggle('manage_clients_menu0','manage_clients_con0');">Manage Clients</a>
		
		<div class="listing_class" style="display:none;" id="manage_clients_con0">
			<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings" class="leftcolumnlink">All (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&client_rating=1" class="leftcolumnlink">Very Rich (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&client_rating=2" class="leftcolumnlink">Rich (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&client_rating=3" class="leftcolumnlink">Middle Class (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&client_rating=4" class="leftcolumnlink">Lower Middle (0)</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&client_rating=5" class="leftcolumnlink">Poor (0)</a>
		</div>
		
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=search_main" class="leftcolumnlink">Search Clients</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=add_client" class="leftcolumnlink">Add New Client</a>
		 
		
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=clients&subsection=client_listings&status=1" class="leftcolumnlink">Deleted Clients</a>
		<br/>
		<span class="leftcolumheadings">Call Center</span>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=lead_summary&phone_call_source=call_center" class="leftcolumnlink">Summary</a>
		<a href="javascript:void(0);" class="leftcolumnlink_sub" id="manage_leads_menu20" onclick="menu_divtoggle('manage_leads_menu20','manage_leads_con20');">Manage Leads</a>
		
		
		<div class="listing_class" style="display:none;" id="manage_leads_con20">
		
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=all&phone_call_source=call_center">All</a>
								<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=1&phone_call_source=call_center" class="leftcolumnlink">Very hot (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=2&phone_call_source=call_center" class="leftcolumnlink">Hot (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=3&phone_call_source=call_center" class="leftcolumnlink">Moderate (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=4&phone_call_source=call_center" class="leftcolumnlink">Cold (0)</a>
							<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=5&phone_call_source=call_center" class="leftcolumnlink">Very cold (0)</a>
						<a class="" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=listings&show_leads=neutral" class="leftcolumnlink">Unclassified (0)</a>
		</div>
		
		
		
	
</div>

<input type=hidden name=client_ownerlist id=client_ownerlist value=(1001457763)>     	</div>
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
					<span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=8&section=clients&subsection=client_listings">Clients & Leads</a> &raquo; Leads </span>
			</div>
<div class="menu-controls" style="clear:both;padding:5px 0px;height:20px;display:none;">
	<img id="list_navi_icon" src="https://profolio.zameen.com/images/common/res_nav_icon.png" onclick="restore_leads_menu();" onmouseover="overlib('<center>Show Menu</center>',CAPTION,'',LEFT,CENTER,WIDTH, 100);" onmouseout='cClick();' style="padding:2px;height:15px;float:left;display:none;" />
</div>
<h3>Lead Summary</h3> 
        <div class="summary_half_box" style="width:49%;float:left;margin-bottom:20px;">
        <div class="box_title">
			<div>
				<b>Locations</b>
			</div>
		</div>
		<div class="box_body">
			<table cellpadding="5" cellspacing="0" width="100%" class="lead_client_summary">
                <tr>
					<td colspan='2'>
                		Sorry no lead found.<br /><br />
						<a class="add_lead_client_btns" target="_blank" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=newlead" style='text-decoration:none;float:left;margin-left:0px;padding-top:3px;'>
						Add New Lead </a>
					</td>
				</tr>
        </div>
        </div>
				</table>
		</div>
	</div>
	
	       <div class="summary_half_box" style="margin-left: 13px;width:49%;float:left;margin-bottom:20px;">
        <div class="box_title">
					<div>
						<b>Staff</b>
					</div>
		</div>
        <div class="box_body">
			<table cellpadding="5" cellspacing="0" width="100%" class="lead_client_summary">
                <tr>
					<td colspan='2'>
                		Sorry no lead found.<br /><br />
						<a class="add_lead_client_btns" target="_blank" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=newlead" style='text-decoration:none;float:left;margin-left:0px;padding-top:3px;'>
						Add New Lead </a>
					</td>
				</tr>
        </div>     
				</table>
		</div>
	</div>
	<div style='clear:both;'></div> 
        <div class="summary_half_box" style="width:49%;float:left;margin-bottom:20px;">
				<div class="box_title">
					<div>
						<b>Classification</b>
					</div>
				</div>
                <div class="box_body">
					<table cellpadding="5" cellspacing="0" width="100%" class="lead_client_summary">
       					<tr>
							<td colspan='2'>
               					Sorry no lead found.<br /><br />
								<a class="add_lead_client_btns" target="_blank" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=newlead" style='text-decoration:none;float:left;margin-left:0px;padding-top:3px;'>
								Add New Lead </a>
							</td>
						</tr>
								</table>
		</div>
	</div>
	        <div class="summary_half_box" style="margin-left: 13px;width:49%;float:left;margin-bottom:20px;">
				<div class="box_title">
					<div>
						<b>Stage</b>
					</div>
				</div>
				<div class="box_body">
					<table cellpadding="5" cellspacing="0" width="100%" class="lead_client_summary">
        				<tr>
							<td colspan='2'>
                				Sorry no lead found.<br /><br />
								<a class="add_lead_client_btns" target="_blank" href="https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=newlead" style='text-decoration:none;float:left;margin-left:0px;padding-top:3px;'>
								Add New Lead </a>
							</td>
						</tr>
								</table>
		</div>
	</div>
	
					</table>
		</div>
	</div>
	
	<div style='clear:both;'></div>		</div>
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
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"4d0861c972","applicationID":"1086318949","transactionName":"Y1dQYRYAXxJRARBaXVodZ0cNTkETXwQLX1tbHVtbAARJT0AKFA==","queueTime":0,"applicationTime":5759,"atts":"TxBTF14aTBw=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
@endsection
