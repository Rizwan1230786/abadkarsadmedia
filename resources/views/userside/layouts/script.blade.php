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
<script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="{{{ URL::asset('js/jquery.dataTables.min.js')}}}"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/mybayut/mylisting_java3_30.js?v=15.3"></script>
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
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
function myFunction(obj) {
			var id = $(obj).children('.dropdown-content').attr("id");
			if (!$('#' + id).hasClass('show')) {
				$('.dropdown-content').removeClass('show');
				document.getElementById(id).classList.toggle("show");
			} else
				$('.dropdown-content').removeClass('show');
		}

		// Close the dropdown menu if the user clicks outside of it
		window.onclick = function(event) {
			if (!event.target.matches('.dropbtn')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				}
			}
		}
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
<script type="text/javascript">
    request_url = "{{ asset('userside') }}/profolio/includes/add_edit_property_single.php?ajax=1&id=0";
    request_url_image = "{{ asset('userside') }}/profolio/includes/add_edit_property_single_image.php?ajax=1&id=0";
    cat_combo_width = 210;
    validate_fields = ["purpose", "wanted_for", "type", "city", "last_location", "name", "email", "title",
        "description", "price", "area"
    ];
    config_options_data = {
        "1": {
            "8": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 1,
                "show_plot": 0,
                "label": "Flat #",
                "show_finance": 1
            },
            "9": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #",
                "show_finance": 1
            },
            "11": {
                "beds": 0,
                "baths": 0,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 1,
                "label": "",
                "show_finance": 1
            },
            "12": {
                "beds": 0,
                "baths": 0,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 1,
                "label": "",
                "show_finance": 1
            },
            "13": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 1,
                "show_plot": 0,
                "label": "Office #",
                "show_finance": 1
            },
            "14": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "Factory #",
                "show_finance": 1
            },
            "15": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 1,
                "show_plot": 0,
                "label": "Shop #",
                "show_finance": 1
            },
            "17": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 1,
                "show_plot": 0,
                "label": "Warehouse #",
                "show_finance": 1
            },
            "18": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "Unit #",
                "show_finance": 1
            },
            "16": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "Building #",
                "show_finance": 1
            },
            "19": {
                "beds": 0,
                "baths": 0,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 1,
                "label": "",
                "show_finance": 1
            },
            "20": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #",
                "show_finance": 1
            },
            "21": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #",
                "show_finance": 1
            },
            "22": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #",
                "show_finance": 1
            },
            "23": {
                "beds": 0,
                "baths": 0,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 0,
                "show_floor": 0,
                "show_plot": 0,
                "label": "",
                "show_finance": 1
            },
            "24": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #",
                "show_finance": 1
            },
            "25": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #",
                "show_finance": 1
            },
            "26": {
                "beds": 0,
                "baths": 0,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 0,
                "show_floor": 0,
                "show_plot": 0,
                "label": "",
                "show_finance": 1
            },
            "27": {
                "beds": 0,
                "baths": 0,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 1,
                "label": "",
                "show_finance": 1
            },
            "": {
                "beds": 1,
                "baths": 1,
                "ow_status": 1,
                "oc_status": 1,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 1,
                "show_plot": 1,
                "label": "House #",
                "show_finance": 1
            }
        },
        "2": {
            "all": {
                "rental": 1000
            },
            "8": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 1,
                "show_plot": 0,
                "label": "Flat #"
            },
            "9": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #"
            },
            "11": {
                "beds": 0,
                "baths": 0,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 1,
                "label": ""
            },
            "12": {
                "beds": 0,
                "baths": 0,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 1,
                "label": ""
            },
            "13": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 1,
                "show_plot": 0,
                "label": "Office #"
            },
            "14": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "Factory #"
            },
            "15": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 1,
                "show_plot": 0,
                "label": "Shop #"
            },
            "17": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 1,
                "show_plot": 0,
                "label": "Warehouse #"
            },
            "18": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "Unit #"
            },
            "16": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "Building #"
            },
            "19": {
                "beds": 0,
                "baths": 0,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 1,
                "label": ""
            },
            "20": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #"
            },
            "21": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #"
            },
            "22": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #"
            },
            "23": {
                "beds": 0,
                "baths": 0,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 0,
                "show_floor": 0,
                "show_plot": 0,
                "label": ""
            },
            "24": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #"
            },
            "25": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 0,
                "label": "House #"
            },
            "26": {
                "beds": 0,
                "baths": 0,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 0,
                "show_floor": 0,
                "show_plot": 0,
                "label": ""
            },
            "27": {
                "beds": 0,
                "baths": 0,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 0,
                "show_street": 1,
                "show_floor": 0,
                "show_plot": 1,
                "label": ""
            },
            "": {
                "beds": 1,
                "baths": 1,
                "oc_status": 0,
                "min_price": 10000,
                "show_unit": 1,
                "show_street": 1,
                "show_floor": 1,
                "show_plot": 1,
                "label": "House #"
            }
        },
        "3": {
            "8": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            },
            "9": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            },
            "11": {
                "beds": 0,
                "baths": 0,
                "min_price": 10000
            },
            "12": {
                "beds": 0,
                "baths": 0,
                "min_price": 10000
            },
            "13": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            },
            "14": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            },
            "15": {
                "beds": 0,
                "baths": 1,
                "min_price": 10000
            },
            "17": {
                "beds": 0,
                "baths": 0,
                "min_price": 10000
            },
            "18": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            },
            "16": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            },
            "19": {
                "beds": 0,
                "baths": 0,
                "min_price": 10000
            },
            "20": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            },
            "21": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            },
            "22": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            },
            "23": {
                "beds": 0,
                "baths": 0,
                "min_price": 10000
            },
            "24": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            },
            "25": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            },
            "26": {
                "beds": 0,
                "baths": 0,
                "min_price": 10000
            },
            "27": {
                "beds": 0,
                "baths": 0,
                "min_price": 10000
            },
            "": {
                "beds": 1,
                "baths": 1,
                "min_price": 10000
            }
        }
    };
    city_area_unit = {
        "default": "Sq. Ft.",
        "1": "Marla",
        "2": "Square Yards",
        "4": "Square Meters"
    };
    var agency_user_quota = {};
    agency_user_quota[1001388906] = {
        "name": "Muhammad Rizwan Akhtar",
        "userid": "1001388906",
        "unlimited_rent_listings": 0,
        "premium_user": 0,
        "auto_approve_listing": 0,
        "hot_quota": 0,
        "used_hot": 0,
        "remaining_hot": 0,
        "remaining_super_hot": 0,
        "total_sale": 1,
        "total_rent": 0,
        "total_used": 1,
        "quota_standard": 5,
        "extended_basic": 5,
        "remaining_total_qouta": 4,
        "remaining_basic_1": 0,
        "remaining_basic_2": 4,
        "remaining_basic_3": 9999999
    };
    quota_array = {
        "premium_user": 0,
        "1": false,
        "2": true,
        "3": true
    };
    ajax_location_url = "{{ asset('userside') }}/v3/cache/js/locations";
    ajax_cache_ver = "1652932691";
    step_value = "1";
    paths.images_css = this_domain + "/images/common";
    mapbox_api = "pk.eyJ1IjoiZGV2emFtZWVuIiwiYSI6ImNrMXEzYWVzeDEwaTEzb3RpNGN3dm5xZWoifQ.8uE-PyKCVPtoyeMmNJsPWg";
    default_area_unit = "Sq. Ft.";
    var cuipplf = 0;
    var is_new_olx_system = 0;
    zone_city_id = "";
    zn_cross_city_restriction = 0;
    olx_cross_city_restriction = 0;
    zn_quota_checkbox_enabled = 1;
    olx_quota_checkbox_enabled = 1;
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
<script>
	$(function() {
		var current = location.pathname;
		$("li a").each(function() {
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
