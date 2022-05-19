<script type="text/javascript" src="{{asset('userside')}}/javascript/mapbox-gl.js"></script>
<script src="{{asset('userside')}}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{asset('userside')}}/css/zone_details.css" type="text/css">
<script type="text/javascript" src="{{asset('userside')}}/javascript/zone_details.js"></script>
<script src="{{asset('userside')}}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{asset('userside')}}/css/jquery.cluetip.css" type="text/css">
<script src="{{asset('userside')}}/javascript/overlib/overlib1_2.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/mapbox-gl.js"></script>

<script language="javascript">
	var this_domain = document.domain;
	var this_domain_property = "http://"+this_domain;
	if (this_domain.indexOf("192.168.1.14") > -1) this_domain = this_domain + "/abad";
	else if (this_domain.indexOf("192.") > -1) this_domain = this_domain + "/abad_new";
	this_domain = "https://abadkar.com";
	this_domain_property = this_domain;
	//this_domain = "http://"+this_domain + "";
	this_domain_mybayut = this_domain+"/profolio";
	var paths = {};
	paths['images'] = "";
	paths['skins'] = this_domain_property + '/skins';
	paths['project'] = paths['skins'] + '/abad';
	paths['media_cdn'] = paths['project'] + '/media_cdn';
	paths['images_css'] = paths['media_cdn'] + '/images_css';
	var this_domain_main = this_domain;
	var this_domain_fe = "https://abadkar.com";
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
<script src="{{ asset('userside') }}/javascript/jquery/jquery_new3_11.js" type="text/javascript"></script>
<script src="{{ asset('userside') }}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{ asset('userside') }}/css/zone_details.css" type="text/css">
<script type="text/javascript" src="{{ asset('userside') }}/javascript/zone_details.js"></script>
<script src="{{ asset('userside') }}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{ asset('userside') }}/css/jquery.cluetip.css" type="text/css">
<script src="{{ asset('userside') }}/javascript/overlib/overlib1_2.js" type="text/javascript"></script>

<script src="{{ asset('userside') }}/javascript/overlib/overlib_exclusive.js" type="text/javascript"></script>
<script src="{{ asset('userside') }}/javascript/overlib/overlib_centerpopup.js"></script>

<script src="{{ asset('userside') }}/javascript/jquery.tools.min.js"></script>
<script src="{{ asset('userside') }}/javascript/jquery/jquery.tools.min1_1.js"></script>
<script type='text/javascript' src="{{ asset('userside') }}/javascript/m_jquery-ui-1_2.js"></script>
<script src="{{ asset('userside') }}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>

<script src="{{ asset('userside') }}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{ asset('userside') }}//css/jquery.cluetip.css" type="text/css">
<script src="{{ asset('userside') }}/javascript/overlib/overlib1_2.js" type="text/javascript"></script>

<script type="text/javascript" src="{{ asset('userside') }}/javascript/jquery_min.js"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/jquery.mask_smp.js"></script>
<script type="text/javascript" src="{{ asset('userside') }}//javascript/intlTelInput_lib_smp.js?v=1"></script>
<script type="text/javascript" src="{{ asset('userside') }}//javascript/intl_phone_unification.js?v=3"></script>
<script>
    $("#cell").live('focusin',function(){
        replace_place_holder_input($(this));
    });
    $("#cell").live('blur',function(){
        refill_place_holder($(this));
    });
    $("#cell1").live('focusin',function(){
        replace_place_holder_input($(this));
    });
    $("#cell1").live('blur',function(){
        refill_place_holder($(this));
    });
    $("#cell2").live('focusin',function(){
        replace_place_holder_input($(this));
    });
    $("#cell2").live('blur',function(){
        refill_place_holder($(this));
    });
</script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/autofill1_1.js"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/gmap_api1_13.js?v=1"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/add_property_single1_27.js?v=39"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/plupload.full.min.js"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/date_time_picker1_1.js"></script>
<link rel="stylesheet" href="{{ asset('userside') }}/css/jquery-ui-1_5.css" type="text/css">
<!-- Added by labeeb -->
<script type="text/javascript" src="{{ asset('userside') }}/javascript/jquery-1.12.4.js"></script>

<script type="text/javascript">
    var $jQuery_1_12_4 = jQuery.noConflict();
</script>

<script type="text/javascript" src="{{ asset('userside') }}/javascript/jquery-ui-1.12.1.js"></script>

<script type="text/javascript">

    $jQuery_1_12_4( function() {

      $jQuery_1_12_4("#city").selectmenu({
        appendTo: ".dropdown-ui",
      });

      $jQuery_1_12_4("#city").on('selectmenuchange',function(){
          onchange_city(this);
      });

    } );
</script>
<!-- Added by labeeb -->

<script type="text/javascript" src="{{ asset('userside') }}/javascript/jquery-ui-1.12.1.js"></script>

<script src="{{asset('userside')}}/javascript/jquery.tools.min.js"></script>
<script src="{{asset('userside')}}/javascript/jquery/jquery.tools.min1_1.js"></script>
<script type='text/javascript' src="{{asset('userside')}}/javascript/m_jquery-ui-1_2.js"></script>
<script type='text/javascript' src="{{asset('userside')}}/javascript/overlib/combo_19.js"></script>
<script type='text/javascript' src="{{asset('userside')}}/javascript/mybayut/commonlisting_java3_35"></script>
<script type='text/javascript' src="{{asset('userside')}}/javascript/mybayut/inventory_java4_17"></script>
<script type='text/javascript' src="{{asset('userside')}}/javascript/lib/combo/combo_tm1_19"></script>
