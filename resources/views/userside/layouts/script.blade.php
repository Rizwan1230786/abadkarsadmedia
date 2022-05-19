<script type="text/javascript" src="{{ asset('userside') }}/javascript/mapbox-gl.js"></script>

<script language="javascript">
    var this_domain = document.domain;
    var this_domain_property = "http://" + this_domain;
    if (this_domain.indexOf("192.168.1.14") > -1) this_domain = this_domain + "/zameen";
    else if (this_domain.indexOf("192.") > -1) this_domain = this_domain + "/zameen_new";
    this_domain = "{{ asset('userside') }}";
    this_domain_property = this_domain;
    //this_domain = "http://"+this_domain + "";
    this_domain_mybayut = this_domain + "/profolio";
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
    var google_map_api_key_new =
        "https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDMtaxOHki-JJfYKIrQOwqFByQtJWzhp9c";
    var google_map_api_key_val = "AIzaSyDMtaxOHki-JJfYKIrQOwqFByQtJWzhp9c";
    var hidden_listing_bk_color = "#c3c2c2";
    var qty_upper_limit = "10000";
    var qty_lower_limit = "0";
    var product_list = {
        "1": {
            "product_id": "1",
            "0": "1",
            "product_usage_type": "credit",
            "1": "credit",
            "product_title": "Refresh Listing",
            "2": "Refresh Listing"
        },
        "2": {
            "product_id": "2",
            "0": "2",
            "product_usage_type": "quota",
            "1": "quota",
            "product_title": "Premium Listing",
            "2": "Premium Listing"
        },
        "4": {
            "product_id": "4",
            "0": "4",
            "product_usage_type": "credit",
            "1": "credit",
            "product_title": "Hot Listing",
            "2": "Hot Listing"
        },
        "5": {
            "product_id": "5",
            "0": "5",
            "product_usage_type": "credit",
            "1": "credit",
            "product_title": "Super Hot Listing",
            "2": "Super Hot Listing"
        },
        "9": {
            "product_id": "9",
            "0": "9",
            "product_usage_type": "quota",
            "1": "quota",
            "product_title": "Listing",
            "2": "Listing"
        },
        "10": {
            "product_id": "10",
            "0": "10",
            "product_usage_type": "credit",
            "1": "credit",
            "product_title": "Boost",
            "2": "Boost"
        },
        "11": {
            "product_id": "11",
            "0": "11",
            "product_usage_type": "credit",
            "1": "credit",
            "product_title": "Feature",
            "2": "Feature"
        },
        "12": {
            "product_id": "12",
            "0": "12",
            "product_usage_type": "credit",
            "1": "credit",
            "product_title": "Story Ad",
            "2": "Story Ad"
        }
    };
    var system_products_list = {
        "refresh_listing": "1",
        "premium_listing": "2",
        "magazine_listing": "3",
        "hot_listing": "4",
        "shot_listing": "5",
        "int_listing": "6",
        "dotw_listing": "7",
        "le_listing": "8",
        "olx_premium_listing": "9",
        "olx_refresh_listing": "10",
        "olx_feature": "11",
        "story_ad": "12"
    };
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
<script type='text/javascript' src='{{ asset('userside') }}/javascript/m_jquery-ui-1_2.js'></script>
<script src="{{ asset('userside') }}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>

<script src="{{ asset('userside') }}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{ asset('userside') }}//css/jquery.cluetip.css" type="text/css">
<script src="{{ asset('userside') }}/javascript/overlib/overlib1_2.js" type="text/javascript"></script>

<script src="{{ asset('userside') }}/javascript/overlib/overlib_exclusive.js" type="text/javascript"></script>
<script src="{{ asset('userside') }}/javascript/overlib/overlib_centerpopup.js"></script>

<script src="{{ asset('userside') }}/javascript/jquery.tools.min.js"></script>
<script src="{{ asset('userside') }}/javascript/jquery/jquery.tools.min1_1.js"></script>
<script type='text/javascript' src='{{ asset('userside') }}/javascript/m_jquery-ui-1_2.js'></script>

<script type="text/javascript" src="{{ asset('userside') }}/javascript/jquery.mask_smp.js"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/intlTelInput_lib_smp.js?v=1"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/intl_phone_unification.js?v=3"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/autofill1_1.js"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/gmap_api1_13.js?v=1"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/add_property_single1_27.js?v=39"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/plupload.full.min.js"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/date_time_picker1_1.js"></script>

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
<script type="text/javascript" src="{{ asset('userside') }}/javascript/jquery-1.12.4.js"></script>

<script type="text/javascript">
    var $jQuery_1_12_4 = jQuery.noConflict();
    $jQuery_1_12_4(function() {

        $jQuery_1_12_4("#city").selectmenu({
            appendTo: ".dropdown-ui",
        });

        $jQuery_1_12_4("#city").on('selectmenuchange', function() {
            onchange_city(this);
        });

    });
</script>

<script type="text/javascript" src="{{ asset('userside') }}/javascript/jquery-ui-1.12.1.js"></script>

<script>
    var dataLayer = [];
    dataLayer.push({
        'website_section': 'profolio'
    });
    dataLayer.push({
        'user_ip': '111.119.187.1'
    });
</script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W6GGGJ" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    '//www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-W6GGGJ');
        </script>
<!-- End Google Tag Manager -->
<!--[if IE]><script type="text/javascript" src="{{ asset('userside') }}/javascript/calendar/bgiframe.js"></script><![endif]-->
<!-- ==================================== -->
<script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 2464465,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
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
<script type="text/javascript">
    var city_combo_dropdown1 =
        "<option value='' selected>Select City</option><option value='3'   >Islamabad</option><option value='2'   >Karachi</option><option value='1'   >Lahore</option><option value='41'   >Rawalpindi</option><option value='385'   >Abbottabad</option><option value='10594'   >Abdul Hakim</option><option value='12360'   >Ahmedpur East</option><option value='18624'   >Ali Masjid</option><option value='10242'   >Alipur</option><option value='9517'   >Arifwala</option><option value='1763'   >Astore</option><option value='1233'   >Attock</option><option value='1761'   >Awaran</option><option value='8857'   >Badin</option><option value='966'   >Bagh</option><option value='557'   >Bahawalnagar</option><option value='23'   >Bahawalpur</option><option value='14226'   >Balakot</option><option value='1735'   >Bannu</option><option value='13977'   >Barnala</option><option value='13808'   >Batkhela</option><option value='17727'   >Battagram</option><option value='1720'   >Bhakkar</option><option value='11142'   >Bhalwal</option><option value='1749'   >Bhimber</option><option value='11286'   >Buner</option><option value='1059'   >Burewala</option><option value='1747'   >Chaghi</option><option value='751'   >Chakwal</option><option value='11420'   >Charsadda</option><option value='8860'   >Chichawatni</option><option value='17728'   >Chilas</option><option value='1469'   >Chiniot</option><option value='17729'   >Chishtian</option><option value='10512'   >Chishtian Sharif</option><option value='1731'   >Chitral</option><option value='14284'   >Choa Saidan Shah</option><option value='1061'   >Chunian</option><option value='1727'   >Dadu</option><option value='11967'   >Daharki</option><option value='1509'   >Daska</option><option value='13599'   >Daur</option><option value='9178'   >Depalpur</option><option value='26'   >Dera Ghazi Khan</option><option value='8244'   >Dera Ismail Khan</option><option value='10645'   >Dijkot</option><option value='12718'   >Dina</option><option value='14195'   >Dobian</option><option value='8474'   >Duniya Pur</option><option value='1737'   >FATA</option><option value='16'   >Faisalabad</option><option value='1293'   >Fateh Jang</option><option value='10894'   >Gaarho</option><option value='19047'   >Gaddani</option><option value='11915'   >Gadoon</option><option value='8119'   >Galyat</option><option value='18016'   >Gambat</option><option value='13272'   >Ghakhar</option><option value='17730'   >Ghanche</option><option value='636'   >Gharo</option><option value='17768'   >Ghizar</option><option value='8810'   >Ghotki</option><option value='1753'   >Gilgit</option><option value='10281'   >Gojra</option><option value='8338'   >Gujar Khan</option><option value='327'   >Gujranwala</option><option value='20'   >Gujrat</option><option value='389'   >Gwadar</option><option value='1714'   >Hafizabad</option><option value='13607'   >Hala</option><option value='11739'   >Hangu</option><option value='11634'   >Harappa</option><option value='1048'   >Haripur</option><option value='1152'   >Haroonabad</option><option value='9687'   >Hasilpur</option><option value='399'   >Hassan Abdal</option><option value='10402'   >Haveli Lakha</option><option value='12823'   >Hazro</option><option value='9844'   >Hub Chowki</option><option value='13569'   >Hujra Shah Muqeem</option><option value='1546'   >Hunza</option><option value='30'   >Hyderabad</option><option value='3'   >Islamabad</option><option value='32'   >Jacobabad</option><option value='11126'   >Jahanian</option><option value='11026'   >Jalalpur Jattan</option><option value='10484'   >Jampur</option><option value='1178'   >Jamshoro</option><option value='17731'   >Jandola</option><option value='13706'   >Jatoi</option><option value='8511'   >Jauharabad</option><option value='1142'   >Jhang</option><option value='19'   >Jhelum</option><option value='9873'   >Kabirwala</option><option value='9202'   >Kaghan</option><option value='10279'   >Kahror Pakka</option><option value='1750'   >Kalat</option><option value='10416'   >Kamalia</option><option value='10346'   >Kamoki</option><option value='13611'   >Kandiaro</option><option value='2'   >Karachi</option><option value='9484'   >Karak</option><option value='544'   >Kasur</option><option value='8806'   >Khairpur</option><option value='1685'   >Khanewal</option><option value='10168'   >Khanpur</option><option value='17732'   >Khaplu</option><option value='1305'   >Kharian</option><option value='12390'   >Khipro</option><option value='8510'   >Khushab</option><option value='1757'   >Khuzdar</option><option value='1430'   >Kohat</option><option value='17733'   >Kohistan</option><option value='9749'   >Kot Addu</option><option value='968'   >Kotli</option><option value='8591'   >Kotri</option><option value='1'   >Lahore</option><option value='10205'   >Lakki Marwat</option><option value='9837'   >Lalamusa</option><option value='17734'   >Landi Kotal</option><option value='586'   >Larkana</option><option value='548'   >Lasbela</option><option value='1661'   >Layyah</option><option value='11406'   >Liaquatpur</option><option value='9872'   >Lodhran</option><option value='1742'   >Loralai</option><option value='10482'   >Lower Dir</option><option value='9422'   >Mailsi</option><option value='1767'   >Makran</option><option value='1384'   >Malakand</option><option value='1496'   >Mandi Bahauddin</option><option value='14350'   >Mangla</option><option value='771'   >Mansehra</option><option value='440'   >Mardan</option><option value='8606'   >Matiari</option><option value='14120'   >Matli</option><option value='9636'   >Mian Channu</option><option value='8310'   >Mianwali</option><option value='13476'   >Mingora</option><option value='17735'   >Miran Shah</option><option value='1349'   >Mirpur</option><option value='1558'   >Mirpur Khas</option><option value='10893'   >Mirpur Sakro</option><option value='13421'   >Mitha Tiwana</option><option value='13603'   >Moro</option><option value='15'   >Multan</option><option value='8116'   >Muridke</option><option value='36'   >Murree</option><option value='977'   >Muzaffarabad</option><option value='1722'   >Muzaffargarh</option><option value='1687'   >Nankana Sahib</option><option value='1258'   >Naran</option><option value='541'   >Narowal</option><option value='14962'   >Nasar Ullah Khan Town</option><option value='1752'   >Nasirabad</option><option value='8801'   >Naushahro Feroze</option><option value='1704'   >Nawabshah</option><option value='1741'   >Neelum</option><option value='1424'   >Nowshera</option><option value='470'   >Okara</option><option value='1716'   >Pakpattan</option><option value='17736'   >Pallandri</option><option value='17737'   >Parachinar</option><option value='17168'   >Pasrur</option><option value='8197'   >Pattoki</option><option value='17'   >Peshawar</option><option value='10678'   >Pind Dadan Khan</option><option value='975'   >Pindi Bhattian</option><option value='9508'   >Pir Mahal</option><option value='17711'   >Poonch</option><option value='13617'   >Qazi Ahmed</option><option value='18'   >Quetta</option><option value='40'   >Rahim Yar Khan</option><option value='17707'   >Raiwind</option><option value='14271'   >Rajana</option><option value='9645'   >Rajanpur</option><option value='17738'   >Rato Dero</option><option value='9027'   >Ratwal</option><option value='976'   >Rawalkot</option><option value='41'   >Rawalpindi</option><option value='8151'   >Renala Khurd</option><option value='1725'   >Rohri</option><option value='9538'   >Sadiqabad</option><option value='782'   >Sahiwal</option><option value='13438'   >Sakrand</option><option value='10632'   >Samundri</option><option value='8609'   >Sanghar</option><option value='8563'   >Sangla Hill</option><option value='1034'   >Sarai Alamgir</option><option value='778'   >Sargodha</option><option value='8607'   >Sehwan</option><option value='13211'   >Shabqadar</option><option value='9029'   >Shahdadpur</option><option value='8552'   >Shahkot</option><option value='13614'   >Shahpur Chakar</option><option value='12170'   >Shakargarh</option><option value='17739'   >Shangla</option><option value='13703'   >Shehr Sultan</option><option value='44'   >Sheikhupura</option><option value='13570'   >Sher Garh</option><option value='8808'   >Shikarpur</option><option value='10334'   >Shorkot</option><option value='480'   >Sialkot</option><option value='1744'   >Sibi</option><option value='1545'   >Skardu</option><option value='1745'   >Sudhnoti</option><option value='14329'   >Sujawal</option><option value='45'   >Sukkur</option><option value='3094'   >Swabi</option><option value='1506'   >Swat</option><option value='12137'   >Talagang</option><option value='9028'   >Tando Adam</option><option value='11315'   >Tando Allahyar</option><option value='11700'   >Tando Bago</option><option value='13166'   >Tando Muhammad Khan</option><option value='17740'   >Tank</option><option value='464'   >Taxila</option><option value='12439'   >Tharparkar</option><option value='1729'   >Thatta</option><option value='1658'   >Toba Tek Singh</option><option value='17741'   >Torkham</option><option value='12271'   >Turbat</option><option value='17742'   >Umarkot</option><option value='17743'   >Upper Dir</option><option value='1432'   >Vehari</option><option value='459'   >Wah</option><option value='17744'   >Wana</option><option value='1395'   >Wazirabad</option><option value='1765'   >Waziristan</option><option value='12504'   >Yazman</option><option value='1739'   >Zhob</option>";
    var city_combo_dropdown2 = '';
</script>
<script type="text/javascript">
    olx_listing_posted = "";
    platform_olx = "false";
    if (edit_property_page) {
        $('.submit_button').css('pointer-events', 'none');
        edit_page_redirect_url =
            "{{ asset('userside') }}/profolio/index.php?section=add_property&tabs=2&step=5&id=0&property_user_id=1001388906";
        $(function() {
            $(document).ajaxStop(function() {
                $(this).unbind("ajaxStop"); // Prevent function from calling again
                $('.submit_button').css('pointer-events', 'auto');
                edit_page_form_str = $('.add_property_form').serialize();
            });
        });
    }
</script>
