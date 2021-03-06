<div id="header">
	<div id="headerrightcorner" style="margin-right:5px;">
		<div id="header_body">
			<ul>
				<li class="">
					<a href="https://abadkar.com/" rel="nofollow" id="header_home"><img src="{{ asset('userside/profolio/images/auto_utilization_go_button1_1.png') }}" style="position: absolute; right:85px" alt=""> to abadkar.com</a>
				</li>
				<li class="z-email-icon-header">{{ Auth::guard('customeruser')->user()->email }}</li>
				<li class="z-logout-icon-header">
					<a href="{{ url('user/logout') }}" id="" rel="nofollow">
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
	<li><a id="navigation" href='/user/dashboard'>Dashboard</a></li>
	<li><a id="navigation" href='/user/all-listing'>Property Management</a></li>
	<li><a id="navigation" href='#'>Message Center</a></li>
	<li><a id="navigation" href='/user/user-profile'>My Account & Profiles</a></li>
	<li><a id="navigation" href='/user/all-reports'>Reports</a></li>
	<li><a id="navigation" href='/user/favourite-listing'>Tools</a></li>
	<li><a id="navigation" href="{{ url('user/mange-user') }}">Agency Staff</a></li>
	<li><a id="navigation" href="{{url('user/client&lead')}}" class='client_n_leads'>Clients & Leads</a></li>
	<li><a id="navigation" href='#'>Agency Website</a></li>
	<li><a id="navigation" href='/user/advertise'>Advertise</a></li>
	<div class="clearfix"></div>
</div>
<div class="prop-nav left">
	<div class="left">
        @if(session('cart'))
		<a href="{{ route('cart') }}" class="menu_list cart_icon icon-utl transparent">
            cart
                <span id="header_cart_count" style="
                position: absolute;right: -5px;top: -5px;min-height: 8px;min-width: 10px;text-align: center;background: red;border-radius:50%;
                padding: 3px;color: #fff;font-size: 9px;line-height: 10px;
                ">{{ count((array) session('cart')) }}</span>
        </a>
        @else
        <a href="#" class="menu_list cart_icon icon-utl transparent">
            cart
        </a>
        @endif
		<span id="new" style="display: none;">0</span>
		<a href="#" rel="nofollow" class="menu_list transparent billing_icon icon-utl" id="header_billing">Billing</a>
		<a href="#" class="menu_list email_alert_icon icon-utl transparent">Email Alert</a>
		<a href="#" rel="nofollow" id="header_blog" class="menu_list transparent blog_icon icon-utl">Blog</a>
		<a href="/user/advertise" rel="nofollow" id="header_advertise" class="menu_list transparent advertise-icon icon-utl">Advertise</a>
	</div>
	<div class="right">
		<a href="/user/inventory_search" class="menu_list invent_search_icon icon-utl">Inventory Search</a>
		<a href="/user/post-listing" target="_self" class="menu_list post_list_icon icon-utl">Post Listing</a>
	</div>
</div>
<script>
	$(function() {
		var current = location.pathname;
		$("#navigation").each(function() {
			var $this = $(this);
			// if the current path is like this link, make it active
			if ($this.attr('href').indexOf(current) !== -1) {
				$this.parent().attr('id', 'current');
				$this.addClass('active');
			}
		})
	})
	// $(document).ready(function() {
	// 	$("li a").click(function() {
	// 		$("li a").parent().attr('id', '');
	// 		$(this).parent().attr('id', 'current');
	// 	});
	// });
</script>
