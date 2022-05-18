<div id="header">
	<div id="headerrightcorner" style="margin-right:5px;">
		<div id="header_body">
			<ul>
				<li class="z-logo-icon-header">
					<a href="https://www.abadkar.com/" rel="nofollow" id="header_home">Go to abadkar.com</a>
				</li>
				<li class="z-email-icon-header">{{ Auth::guard('customeruser')->user()->email }}</li>
				<li class="z-logout-icon-header">
					<a href="{{asset('front')}}/profolio/logout.php" id="" rel="nofollow">
						Logout </a>
				</li>
			</ul>
		</div>
	</div>

	<a href="{{asset('userside')}}/profolio/">
		<div id="headerleftcorner"><img src="{{ asset('front/images/abadkar-logo.png') }}" alt="" width="150" style="margin-top: 1px;"></div>
	</a>
</div>

<div id="mybayut_tabs">
	<li><a href='/user/dashboard'>Dashboard</a></li>
	<li><a href='#'>Property Management</a></li>
	<li><a href='#'>Message Center</a></li>
	<li><a href='#'>My Account & Profiles</a></li>
	<li><a href='#'>Reports</a></li>
	<li><a href='#'>Tools</a></li>
	<li><a href='#'>Agency Staff</a></li>
	<li><a href='#' class='client_n_leads'>Clients & Leads</a></li>
	<li><a href='#'>Agency Website</a></li>
	<li><a href='#'>Advertise</a></li>
	<div class="clearfix"></div>
</div>
<div class="prop-nav left">
	<div class="left">
		<a href="#" class="checkout_cart menu_list cart_icon icon-utl transparent" onclick="return false;">
			cart
			<span id="header_cart_count" style="
						position: absolute;right: -5px;top: -5px;min-height: 8px;min-width: 10px;text-align: center;background: red;border-radius:50%;
					    padding: 3px;color: #fff;font-size: 9px;line-height: 10px;display:none;
					    ">0
			</span>
		</a>
		<span id="new" style="display: none;">0</span>
		<a href="{{asset('userside')}}/profolio/index.php?tabs=13&section=billing" rel="nofollow" class="menu_list transparent billing_icon icon-utl" id="header_billing">Billing</a>
		<a href="{{asset('userside')}}/profolio/index.php?tabs=6&section=edit_advance_alerts" class="menu_list email_alert_icon icon-utl transparent">Email Alert</a>
		<a href="https://www.zameen.com/blog/" rel="nofollow" id="header_blog" class="menu_list transparent blog_icon icon-utl">Blog</a>
		<a href="https://www.zameen.com/advertise/index.html" rel="nofollow" id="header_advertise" class="menu_list transparent advertise-icon icon-utl">Advertise</a>
	</div>
	<div class="right">
		<a href="{{asset('userside')}}/profolio/index.php?tabs=2&section=inventory_search" class="menu_list invent_search_icon icon-utl">Inventory Search</a>
		<a href="index.php?tabs=2&section=add_property" target="_self" class="menu_list post_list_icon icon-utl">Post Listing</a>
	</div>
</div>
