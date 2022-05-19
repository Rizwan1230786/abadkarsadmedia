// MAPBOX IMPLEMENTATION

var enlarged_map_html = '<div id="enlarged_map_div" style="background-color:#FFFFFF;border:6px solid #FFFFFF;border-radius:5px;display:none;font:12px Arial,Helvetica,sans-serif;position:fixed;width:700px;z-index:100"><div id="TB_title" style="background-color:#FFFFFF;height: 27px;"><div id="enlarged_map_title" style="float: left; padding: 3px 7px; font-weight: bold;"></div><div id="TB_close" style="float: right; padding: 5px 8px; cursor: pointer; font-weight: bold;" onclick="__close_map(1)" > [ X ] </div></div><div id="TB_Content" style="height:500px;position:relative;width:700px"><div id="enlarged_map" style="height:500px;left:0;overflow:hidden;position:absolute;top:0;width:700px"></div></div></div>';
var filter_html = '<div id="backgroundFilter" style="background-color:#000000;display:none;left:0;top: 0;opacity:0.5;overflow:hidden;position:absolute;width:100%;z-index:99"></div>';
var confirm_html = "<form action='' style='width: 220px;'>" +
    "<fieldset>" +
    "<legend style='margin-left:5px'><label style='margin-right:2px; margin-left:2px;'>Please confirm your location</label></legend>" +
    "<div>" +
    "<input type='button' id='_confirm_btn' class='_confirm_btn' value='Confirm' onclick='confirm_btn()' style='margin: 8px;' />" +
    "<input type='button' id='_cancel_btn' class='_cancel_btn' onclick='cancel_btn()' value='Cancel' style='margin: 8px;' />" +
    "</div>" +
    "</fieldset>" +
    "</form>";
var map_messages = {
    'default': "<div class='map_message' style='line-height: 19px;padding: 6px;'>This is the default location. <br />Please click on map to choose a new location</div>",
    'user': "<div class='map_message' style='line-height: 19px;padding: 6px;'>This is your last selected location. <br />Please click on map to choose a new location</div>",
    'default_cat': "<div class='map_message' style='line-height: 19px;padding: 6px;'>This is the standard location for <b>@cat_title@</b>. <br /><br />Please click on map to choose a new location</div>"
};
var map_message_user = "Location selected on map <a onclick='__remove_mylatlng();'>(Remove selected map location)</a>";
var map_message_default_cat = "Please click on the map to select your location in @cat_title@";

var icon1 = 'http%3A%2F%2Ficons.iconarchive.com%2Ficons%2Ficons-land%2Fvista-map-markers%2F48%2FMap-Marker-Marker-Outside-Chartreuse-icon.png';
var icon2 = 'http://icons.iconarchive.com/icons/icons-land/vista-map-markers/48/Map-Marker-Marker-Outside-Chartreuse-icon.png';

var default_map_options = {
    zoom: 7,
    zoom1: 14,
    latitude: 31.5457713949363,
    longitude: 74.3413281440735,
    map_title: 'Select Location:'
};


// Mapbox variables
var current_Latlong;
var mapbox_popup;
var map;
var el;
var cat_title;
var params;



/* language */
/* helper functions */
function __parse_to_json(str, chr1, chr2) {
    var obj = {};
    if (str == "") return obj;
    chr1 = chr1 || '&';
    chr2 = chr2 || '=';
    var arr = str.split(chr1);
    for (var i = 0; i < arr.length; i++) {
        parts = arr[i].split(chr2);
        val = decodeURIComponent(parts[1].replace(/\+/g, " "));
        if (!isNaN(val)) val = parseFloat(val);
        if (parts[0]) obj[parts[0]] = val;
    }
    return obj;
}

function update_query_field(field_id, json_obj) {
    var field = $(field_id);
    var js_object = __parse_to_json(field.val());
    for (key in json_obj) js_object[key] = json_obj[key];
    var new_query = decodeURIComponent($.param(js_object));
    field.val(new_query);
}

function __show_bg_filter() {
    enlarged_map_div = $("#enlarged_map_div");
    ww = $(window).width(), wh = $(window).height(), bh = $("body").height(), mw = enlarged_map_div.width(), mh = enlarged_map_div.height();
    if (parseFloat($.prototype.jquery) == 1.2) //jquery 1.2 bug
        wh = document.body.clientHeight;
    h = (bh > wh) ? bh : wh;
    backgroundFilter = $("#backgroundFilter").height(h).show();
    position = enlarged_map_div.css("position")
    x = (ww - mw) / 2, y = $(window).scrollTop();
    if (position == "fixed") y = 0;
    y = y + (wh - mh) / 2;
    enlarged_map_div.css({
        top: y,
        left: x
    }).show();
}
/* helper functions */

var params_image = [];

function google_image(div_id, _param) {
    if (map_params.small_map == undefined)
        map_params.small_map = div_id;
    var map_div = $(div_id);
    _param = $.extend({}, params_image[div_id], _param);
    p = params_image[div_id] = _param;
    if (map_div.length == 0) return -1;
    if (_param.latitude == '0' || _param.longitude == '0' || _param.latitude == '' || _param.longitude == '') {
        _param.latitude = default_map_options.latitude;
        _param.longitude = default_map_options.longitude;
    }
    var static_map_hieght = Math.round($(map_div).height());
    var static_map_width = Math.round($(map_div).width());

    var url = 'https://api.mapbox.com/styles/v1/mapbox/light-v10/static/' + p.longitude + ',' + p.latitude + ',' + p.zoom + '/' + static_map_width + 'x' + static_map_hieght + '?access_token=' + mapbox_api;
    map_div.attr("src", url);
}


map = 0;
marker = 0;
infowindow = 0;
confirm_marker = 0;
confirm_infowindow = 0;
enlarged_map_div = 0;
backgroundFilter = 0;
map_params = [];
map_params_new = [];

function show_map_inline(_param_) {
    map_obj = document.getElementById(_param_.map_div); //map_div
    if (map_obj == null || window.mapboxgl == undefined) {
        if (window.mapboxgl == undefined)
            $(map_obj).html("<span style='text-align: center; padding-top: 30%; display: block;'>Mapboxgl api not loaded!</span>");
        return;
    }
    if (!_param_.latitude || !_param_.longitude) {
        delete _param_.latitude;
        delete _param_.longitude;
    }
    params = _param_;
    map_params_new.map_div = _param_.map_div; //map_div;
    _param_ = $.extend({}, default_map_options, _param_);
    cat_title = _param_.cat_title;

    $("#enlarged_map_title").html(_param_.map_title);


    //////////////////////// MAPBOX IMPLEMENTATION START //////////////////////////////////

    mapboxgl.accessToken = mapbox_api;
    map = new mapboxgl.Map({
        container: map_obj,
        style: 'mapbox://styles/mapbox/streets-v9',
        center: [_param_.longitude, _param_.latitude], // starting position [lng, lat]
        zoom: _param_.zoom
    });

    // Add zoom and rotation controls to the map.
    map.addControl(new mapboxgl.NavigationControl(), 'bottom-right');

    // Add Full screen controls to the map.
    map.addControl(new mapboxgl.FullscreenControl({
        position: 'top-right'
    }));

    // Default marker option
    // var marker = new mapboxgl.Marker({color: rgb(129, 169, 54)})
    //   .setLngLat([-74.50, 40])
    //   .addTo(map);

    // Custom Marker from url
    el = document.createElement('div');
    el.className = 'marker';
    el.style.backgroundImage = 'url(' + icon2 + ')';
    el.style.width = '40px';
    el.style.height = '50px';


    e2 = document.createElement('div');
    e2.className = 'marker-option';
    e2.style.backgroundImage = 'url(' + icon2 + ')';
    e2.style.width = '40px';
    e2.style.height = '50px';

    // el.addEventListener('click', function() {
    // window.alert("****");
    // });

    // add marker to map
    new mapboxgl.Marker(el)
        .setLngLat([_param_.longitude, _param_.latitude])
        .addTo(map);

    // Popup/tooltip right after opening the map
    var popup = new mapboxgl.Popup({
        closeButton: true,
        closeOnClick: false,
        offset: 25
    });


    msg_index = (_param_.msg_index == undefined) ? 'default' : _param_.msg_index;
    var tooltip_message = map_messages[msg_index].replace("@cat_title@", _param_.cat_title);

    popup.setLngLat([_param_.longitude, _param_.latitude])
        .setHTML(tooltip_message)
        .addTo(map);


    // On click map display confirm cancel btn
    map.on('click', function(e) {

        new mapboxgl.Marker(e2)
            .setLngLat(e.lngLat)
            .addTo(map);

        current_Latlong = e.lngLat;
        // console.log(e.lngLat);
        // console.log("Marker functionality popup here"); 
        // map.getCanvas().style.cursor = 'pointer';
        mapbox_popup = new mapboxgl.Popup({
                offset: 25
            })
            .setLngLat(e.lngLat)
            .setHTML(confirm_html)
            .addTo(map);
        // map.append(confirm_html);
    });


    //////////////////////// MAPBOX IMPLEMENTATION END //////////////////////////////////

}

function __close_map() {
    if (map_params.map_enlarged) {
        backgroundFilter.hide();
        enlarged_map_div.hide();
    }
}

function __remove_mylatlng() {
    $('#mylatitude').val("");
    $('#mylongitude').val("");
    parms = __parse_to_json($('#default_params').val());
    $("#map_msg_inline").html(map_message_default_cat.replace("@cat_title@", parms.cat_title));
    // update small static map here
    google_image(parms.small_map, {
        latitude: parms.latitude,
        longitude: parms.longitude,
        zoom: parms.zoom
    });
    $("#map_field").val('zoom=' + parms.zoom + '&call_back=' + parms.call_back + '&small_map=' + parms.small_map + '&latitude=' + parms.latitude + '&longitude=' + parms.longitude + '&cat_title=' + parms.cat_title + '&msg_index=' + parms.msg_index);
}

function __get_cat_info(cat_value) {
    if (cat_value == "" || cat_value == 0) return;
    mylatitude = $('#mylatitude').attr("autocomplete", "off").val();
    mylongitude = $('#mylongitude').attr("autocomplete", "off").val();
    url = this_domain + '/profolio/index.php?ajax=1&ajax_section=dash_prop_invent&ajax_action=get_cat_info';
    //url_path = this_domain + '/profolio/includes/get_cat_info.php?cat_id='+cat_value+'&mylatitude='+mylatitude+'&mylongitude='+mylongitude+"&bc_from=3";
    //url_path = url_path + "&v="+window["ajax_cache_ver"];
    ajax_cache_ver = window["ajax_cache_ver"];
    $.get(url, {
        cat_id: cat_value,
        mylatitude: mylatitude,
        mylongitude: mylongitude,
        bc_from: 3,
        v: ajax_cache_ver
    }, function(str) {
        cat_info = eval('(' + str + ')');
        clatitude = parseFloat(cat_info.latitude);
        clongitude = parseFloat(cat_info.longitude);
        _lat_long = (clatitude > 0 && clongitude > 0);
        $("#span_breadcrumb").html(cat_info.bc_html);
        if (!_lat_long) return;
        if (cat_info.custom_coards == 1) {
            $("#map_msg_inline").html(map_message_user);
            clatitude = mylatitude;
            clongitude = mylongitude;
            msg_index = 'user';
        } else {
            $("#map_msg_inline").html(map_message_default_cat.replace("@cat_title@", cat_info.title));
            $('#mylatitude').val("");
            $('#mylongitude').val("");
            msg_index = 'default_cat';
        }
        update_query_field("#map_field", {
            latitude: clatitude,
            longitude: clongitude,
            cat_title: cat_info.title,
            msg_index: msg_index,
            zoom: 14
        });
        update_query_field("#default_params", {
            latitude: cat_info.latitude,
            longitude: cat_info.longitude,
            cat_title: cat_info.title,
            msg_index: 'default_cat',
            zoom: 14
        });
        google_image(map_params.small_map, {
            latitude: clatitude,
            longitude: clongitude
        });
    }, 0);
}

function show_map_enlarged(_params) {
    map_field = $("#" + _params.map_field_id);
    if (map_field.length) {
        _params = __parse_to_json(map_field.val());
        map_params_new.map_field = map_field;
    }
    _params.map_enlarged = 1;
    _params.map_div = "enlarged_map";
    map_params = _params;
    __show_bg_filter();
    backgroundFilter.click(__close_map)
    show_map_inline(_params);
}

$(document).ready(function() {
    $("body").append(enlarged_map_html).append(filter_html);
});


function confirm_btn() {
    // Mapbox implementation
    new mapboxgl.Marker(el)
        .setLngLat(current_Latlong)
        .addTo(map);

    // update small static map here
    // params.small_map => dynamic id according to page 
    google_image(params.small_map, {
        latitude: current_Latlong.lat,
        longitude: current_Latlong.lng,
        zoom: 17
    });

    // Updating #map_field input value to use new coordinates on map
    var update_orig_map = "zoom=16&call_back=map_select_default&small_map=" + params.small_map + "&longitude=" + current_Latlong.lng + "&latitude=" + current_Latlong.lat + "&cat_title=" + cat_title + "&msg_index=user";
    $("#map_field").val(update_orig_map)

    // remove popup once confirm clicked
    mapbox_popup.remove();

    $("#mylatitude").val(current_Latlong.lat);
    $("#mylongitude").val(current_Latlong.lng);

    __close_map(1);

}

function cancel_btn() {
    // Removing popup
    mapbox_popup.remove();

    // Removing pin marker
    $(".marker-option").remove();

}

imzee_live(".mapboxgl-popup-close-button", "click", function(event) {
    $(".marker-option").remove();
});