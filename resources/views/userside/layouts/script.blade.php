<script type="text/javascript" src="{{asset('userside')}}/javascript/mapbox-gl.js"></script>

<script language="javascript">
	var this_domain = document.domain;
	var this_domain_property = "http://"+this_domain;
	if (this_domain.indexOf("192.168.1.14") > -1) this_domain = this_domain + "/zameen";
	else if (this_domain.indexOf("192.") > -1) this_domain = this_domain + "/zameen_new";
	this_domain = "https://profolio.zameen.com";
	this_domain_property = this_domain;
	//this_domain = "http://"+this_domain + "";
	this_domain_mybayut = this_domain+"/profolio";
	var this_domain_ajax = this_domain_property + "/index.php?t=ajax";
	var paths = {};
	paths['images'] = "";
	paths['skins'] = this_domain_property + '/skins';
	paths['project'] = paths['skins'] + '/zameen';
	paths['media_cdn'] = paths['project'] + '/media_cdn';
	paths['images_css'] = paths['media_cdn'] + '/images_css';
	var this_domain_main = this_domain;
	var this_domain_fe = "https://www.zameen.com";
	var property_loading = paths['images'] + "/common/byt_loading.gif";
	var listing_map_enable = "1";
	var google_map_api_key_new = "https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDMtaxOHki-JJfYKIrQOwqFByQtJWzhp9c";
	var google_map_api_key_val = "AIzaSyDMtaxOHki-JJfYKIrQOwqFByQtJWzhp9c";
	var hidden_listing_bk_color = "#c3c2c2";
	var qty_upper_limit = "10000";
	var qty_lower_limit = "0";
	var product_list = {"1":{"product_id":"1","0":"1","product_usage_type":"credit","1":"credit","product_title":"Refresh Listing","2":"Refresh Listing"},"2":{"product_id":"2","0":"2","product_usage_type":"quota","1":"quota","product_title":"Premium Listing","2":"Premium Listing"},"4":{"product_id":"4","0":"4","product_usage_type":"credit","1":"credit","product_title":"Hot Listing","2":"Hot Listing"},"5":{"product_id":"5","0":"5","product_usage_type":"credit","1":"credit","product_title":"Super Hot Listing","2":"Super Hot Listing"},"9":{"product_id":"9","0":"9","product_usage_type":"quota","1":"quota","product_title":"Listing","2":"Listing"},"10":{"product_id":"10","0":"10","product_usage_type":"credit","1":"credit","product_title":"Boost","2":"Boost"},"11":{"product_id":"11","0":"11","product_usage_type":"credit","1":"credit","product_title":"Feature","2":"Feature"},"12":{"product_id":"12","0":"12","product_usage_type":"credit","1":"credit","product_title":"Story Ad","2":"Story Ad"}};
	var system_products_list = {"refresh_listing":"1","premium_listing":"2","magazine_listing":"3","hot_listing":"4","shot_listing":"5","int_listing":"6","dotw_listing":"7","le_listing":"8","olx_premium_listing":"9","olx_refresh_listing":"10","olx_feature":"11","story_ad":"12"};
	var is_new_olx_system = 0;
</script>
		<script src="{{asset('userside')}}/javascript/jquery/jquery_new3_11.js" type="text/javascript" ></script>
<script src="{{asset('userside')}}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
		<link rel="stylesheet" href="{{asset('userside')}}/css/zone_details.css" type="text/css">
		<script type="text/javascript" src="{{asset('userside')}}/javascript/zone_details.js"></script>
		<script src="{{asset('userside')}}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
		<link rel="stylesheet" href="{{asset('userside')}}/css/jquery.cluetip.css" type="text/css">
		<script src="{{asset('userside')}}/javascript/overlib/overlib1_2.js" type="text/javascript"></script>

		<script src="{{asset('userside')}}/javascript/overlib/overlib_exclusive.js" type="text/javascript"></script>
		<script src="{{asset('userside')}}/javascript/overlib/overlib_centerpopup.js"></script>

		<script src="{{asset('userside')}}/javascript/jquery.tools.min.js"></script>
		<script src="{{asset('userside')}}/javascript/jquery/jquery.tools.min1_1.js"></script>
		<script type='text/javascript' src='{{asset('userside')}}/javascript/m_jquery-ui-1_2.js'></script>
		<script>
		var dataLayer = [];
		dataLayer.push({'website_section': 'profolio'});
		dataLayer.push({'user_ip': '103.161.48.255'});
		</script>
		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W6GGGJ"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-W6GGGJ');</script>
		<!-- End Google Tag Manager -->
<!--[if IE]><script type="text/javascript" src="{{asset('userside')}}/javascript/calendar/bgiframe.js"></script><![endif]-->
	<!-- ==================================== -->
	<script>
		(function(h,o,t,j,a,r){
		h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		h._hjSettings={hjid:2464465,hjsv:6};
		a=o.getElementsByTagName('head')[0];
		r=o.createElement('script');r.async=1;
		r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        /*
        * Google Ads
        * */
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];

        (function() {
            var gads = document.createElement('script');
            gads.async = true;
            gads.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(gads, node);
        })();
    </script>
