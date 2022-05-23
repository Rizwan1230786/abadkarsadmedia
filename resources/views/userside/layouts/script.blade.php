<script type="text/javascript" src="{{asset('userside')}}/javascript/mapbox-gl.js"></script>
<script src="{{asset('userside')}}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{asset('userside')}}/css/zone_details.css" type="text/css">
<script type="text/javascript" src="{{asset('userside')}}/javascript/zone_details.js"></script>
<script src="{{asset('userside')}}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{asset('userside')}}/css/jquery.cluetip.css" type="text/css">
<script src="{{asset('userside')}}/javascript/overlib/overlib1_2.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/mapbox-gl.js"></script>
<script src="{{ asset('userside') }}/javascript/jquery/jquery_new3_11.js" type="text/javascript"></script>
<script src="{{ asset('userside') }}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{ asset('userside') }}/css/zone_details.css" type="text/css">
<script type="text/javascript" src="{{ asset('userside') }}/javascript/zone_details.js"></script>
<script src="{{ asset('userside') }}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{ asset('userside') }}/css/jquery.cluetip.css" type="text/css">
<script src="{{ asset('userside') }}/javascript/overlib/overlib1_2.js" type="text/javascript"></script>
@yield('js')
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
    $("#cell").live('focusin', function() {
        replace_place_holder_input($(this));
    });
    $("#cell").live('blur', function() {
        refill_place_holder($(this));
    });
    $("#cell1").live('focusin', function() {
        replace_place_holder_input($(this));
    });
    $("#cell1").live('blur', function() {
        refill_place_holder($(this));
    });
    $("#cell2").live('focusin', function() {
        replace_place_holder_input($(this));
    });
    $("#cell2").live('blur', function() {
        refill_place_holder($(this));
    });
</script>
<script>
    $(document).ready(function() {
        $(".a_active_hide").click(function() {
            $(".a_active_show").toggle();
        });
    });
    $(document).ready(function() {
        $(".a_edited_hide").click(function() {
            $(".a_active_show").removeClass('active');
            $(".a_edited_show").toggleClass("active");
        });
    });
    $(document).ready(function() {
        $(".a_pending_hide").click(function() {
            $(".a_pending_show").toggleClass("active");
        });
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
    $jQuery_1_12_4(function() {

        $jQuery_1_12_4("#city").selectmenu({
            appendTo: ".dropdown-ui",
        });

        $jQuery_1_12_4("#city").on('selectmenuchange', function() {
            onchange_city(this);
        });

    });
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
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/stats1_5.js?v=11"></script>
<script type='text/javascript'>
    function bar_charts_data() {
        return [{
            "cols": [{
                "id": "",
                "label": "Location",
                "pattern": "",
                "type": "string"
            }, {
                "id": "",
                "label": "For Sale",
                "pattern": "",
                "type": "number"
            }, {
                "id": "",
                "label": "To Rent",
                "pattern": "",
                "type": "number"
            }],
            "rows": [{
                "c": [{
                    "v": "Manthar Road Rahim Yar Khan",
                    "f": null
                }, {
                    "v": 1,
                    "f": null
                }, {
                    "v": 0,
                    "f": null
                }]
            }]
        }];
    }

    function charts_data_trafic() {
        return [{
            "cols": [{
                "id": "",
                "label": "Location",
                "pattern": "",
                "type": "string"
            }, {
                "id": "",
                "label": "For Sale",
                "pattern": "",
                "type": "number"
            }, {
                "id": "",
                "label": "To Rent",
                "pattern": "",
                "type": "number"
            }],
            "rows": [{
                "c": [{
                    "v": "Manthar Road",
                    "f": null
                }, {
                    "v": 92,
                    "f": null
                }, {
                    "v": 0,
                    "f": null
                }]
            }]
        }];
    }

    function charts_data_leads() {
        return [{
            "cols": [{
                "id": "",
                "label": "Location",
                "pattern": "",
                "type": "string"
            }, {
                "id": "",
                "label": "Sale Leads",
                "pattern": "",
                "type": "number"
            }, {
                "id": "",
                "label": "Rental Leads",
                "pattern": "",
                "type": "number"
            }],
            "rows": [{
                "c": [{
                    "v": "Manthar Road",
                    "f": null
                }, {
                    "v": 3,
                    "f": null
                }, {
                    "v": 0,
                    "f": null
                }]
            }]
        }];
    }

    function charts_data2() {
        return [{
            "cols": [{
                "id": "",
                "label": "Phone",
                "pattern": "",
                "type": "string"
            }, {
                "id": "",
                "label": "Phone Views",
                "pattern": "",
                "type": "number"
            }],
            "rows": [{
                "c": [{
                    "v": "Others",
                    "f": null
                }, {
                    "v": 1,
                    "f": null
                }]
            }, {
                "c": [{
                    "v": "Pakistan",
                    "f": null
                }, {
                    "v": 1,
                    "f": null
                }]
            }]
        }];
    }

    function charts_data() {
        return [{
            "cols": [{
                "id": "",
                "label": "SMS",
                "pattern": "",
                "type": "string"
            }, {
                "id": "",
                "label": "SMS Clicks",
                "pattern": "",
                "type": "number"
            }],
            "rows": [{
                "c": [{
                    "v": "Others",
                    "f": null
                }, {
                    "v": 1,
                    "f": null
                }]
            }]
        }];
    }
    draw_multiple_charts({
        'data_function': 'bar_charts_data()',
        'div': 'chart_5',
        'chart_type': 'bar',
        'buttons': 'stat_button_bar',
        opts: [{
            vAxis: {
                title: 'Location',
                textStyle: {
                    fontSize: 10
                },
                viewWindow: {
                    min: 0
                }
            },
            width: 800,
            height: 150,
            hAxis: {
                title: 'Total',
                viewWindow: {
                    min: 0
                }
            },
            legend: 'top',
            chartArea: {
                width: '50%',
                height: '30%'
            },
            colors: ['#DC3912', '#109618'],
            isStacked: true
        }]
    });
    draw_multiple_charts({
        'data_function': 'charts_data_trafic()',
        'div': 'chart_trafic',
        'chart_type': 'bar',
        'buttons': 'stat_button_trafic',
        opts: [{
            vAxis: {
                title: 'Location',
                textStyle: {
                    fontSize: 10
                },
                viewWindow: {
                    min: 0
                }
            },
            width: 800,
            height: 150,
            hAxis: {
                title: 'Property Views',
                viewWindow: {
                    min: 0
                }
            },
            legend: 'top',
            chartArea: {
                width: '60%',
                height: '30%'
            },
            colors: ['#DC3912', '#109618'],
            isStacked: true
        }]
    });
    draw_multiple_charts({
        'data_function': 'charts_data_leads()',
        'div': 'chart_leads',
        'chart_type': 'bar',
        'buttons': 'stat_button_leads',
        opts: [{
            vAxis: {
                title: 'Location',
                textStyle: {
                    fontSize: 10
                },
                viewWindow: {
                    min: 0
                }
            },
            width: 800,
            height: 150,
            hAxis: {
                title: 'Total Leads',
                viewWindow: {
                    min: 0
                }
            },
            legend: 'top',
            chartArea: {
                width: '60%',
                height: '30%'
            },
            colors: ['#DC3912', '#109618'],
            isStacked: true
        }]
    });
    draw_multiple_charts({
        'data_function': 'charts_data()',
        'div': 'chart_4',
        'chart_type': 'pie',
        'buttons': 'stat_button',
        opts: [{
            vAxis: {
                title: ''
            },
            width: 350,
            height: 250,
            legend: {
                position: 'right'
            },
            is3D: true
        }, ]
    });
</script>
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
<div id="new_inq_res" style="display:none; border:5px solid #00FFCC;"></div>
<div id="inquiry_update_rec" style="display:none; border:5px solid #00FFCC;"></div>
<div id="new_loading_div" style="display:none;"></div>

<script type="text/javascript" src="{{ asset('userside') }}/javascript/listings_java1_23.js?v=12"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/mybayut/mybayut_java3_19.js?v=13"></script>

<script type="text/javascript">
    window.NREUM || (NREUM = {});
    NREUM.info = {
        "beacon": "bam.nr-data.net",
        "licenseKey": "4d0861c972",
        "applicationID": "1086318949",
        "transactionName": "Y1dQYRYAXxJRARBaXVodZ0cNTkETXwQLX1tbHVtbAARJT0AKFA==",
        "queueTime": 0,
        "applicationTime": 276,
        "atts": "TxBTF14aTBw=",
        "errorBeacon": "bam.nr-data.net",
        "agent": ""
    }
</script>
<script>
    $(document).ready(function() {
        $(".date_pick").dateinput({
            format: 'dd/mm/yyyy',
            speed: 'fast',
            firstDay: 1,
            offset: [10, 0]
        });

        $('.cm_combo_img').live("click", function() {
            $(this).siblings(".cm_combo_txt").children(".date_f").trigger('click');
        });
        $(".dr_goto").live("click", function() {
            $("#dr_form").submit();
        });

    });
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
