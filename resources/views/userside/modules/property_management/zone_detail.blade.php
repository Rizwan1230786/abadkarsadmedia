@extends('userside.layout')
@section('main')
@include('userside.layouts.sidebar')
<style>
    .d-none {
        display: none;
    }
</style>
<div id="rightcolumn" style="
         width:79% " class="rightcolumn_div post_story_margin">

    <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
        <div id="mytabs_search" style="margin-top:0px;">
            <form id="frm_tabs_search" name="frm_tabs_search" style="padding:0px; margin:0px;">
                Edit Property:&nbsp;
                <input type="text" id="txt_tabs_search" name="txt_tabs_search" value="Enter ID" style="color:#454545; width:80px;" />&nbsp;
                <input type="image" src="https://assets.zameen.com/profolio/images/auto_utilization_go_button1_1.png" id="btn_search_go" name="btn_search_go" height="14" align="texttop" />
            </form>
        </div>
        <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=2&section=listings">Property
                Management</a> &raquo; Zone Details </span>
    </div>

    <div class="right-section-zone">

        <div>
            <h4>How do Zones Differ?</h4>
            <p>
                Locations within cities have been classified into three zones i.e. Zone A, Zone B and Zone C based on
                various factors such as the volume of premier leads a location receives, property transaction volume and
                property prices in the location etc. Zone A contains the most premium locations and Zone C contains the
                least premium locations, for example DHA Lahore is a premium location allocated to Zone A.
            </p>
        </div>



        <div class="row-filters">
            <label class="zone-label">City: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>
            @csrf
            <select name="city" onchange="fetch_locs(0);" id="city">
                <option value="">Select city from list</option>
                @foreach ($city as $value)
                <option value="{{ $value->id }}">{{ $value->name }}</option>
                @endforeach
            </select>
            <label class="zone-label ml-50">Zones: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>


            <select name="zone" onchange="fetch_locs(0);" id="zone">
                <option value="">Select Zones from list</option>
                <option value="Zone A">Zone A</option>
                <option value="Zone B">Zone B</option>
                <option value="Zone C">Zone C</option>
            </select>
        </div>
        <div id="per_page" style="display:none; float:right; margin-top: 23px;">

            Per Page
            <select class="show_select" style="margin-left:10px; width:60px;">
                <option value="20" selected="">20</option>
                <option value="40">40</option>
                <option value="60">60</option>
                <option value="100">100</option>
            </select>

        </div>
        <div class="zone_locations">

        </div>
        <span id="table_container" class="d-none">
            <div class="box_title">
                <div><b>Area Results</b></div>
            </div>
            <div class="box_body listing-property-profolio" id="Sale_listings" style="padding: 0px; ">
                <div class="ant-table" id="data_Sale" style="height:auto">

                    <table id="demoApi" class="listing_table list-table-left" style="min-width: 0px;">
                        <thead class="thead-light" id="table_head">
                            <tr>
                            </tr>
                        </thead>
                        <tbody id="table_data" style="float: none;">
                        </tbody>
                    </table>

                </div>

            </div>
        </span>
    </div>
</div>
</div>
<script>
    function fetch_locs(page_no = 0, per_page = 20) {

        var city_id = $("#city").val();
        var zone_id = $("#zone").val();
        var _token = $('input[name="_token"]').attr('value');
        $('#table_container').addClass('d-none');
        var city_name = $("#city :selected").text();
        var zone_name = $("#zone :selected").text();

        if (!empty(city) && !empty(zone)) {
            $(".zone_locations").html("Processing...");

            $.ajax({
                url: "/user/fetch-zone-area",
                type: "POST",
                data: {
                    city_id: city_id,
                    zone_id: zone_id,
                    _token: _token
                },
                dataType: 'json',
                success: function(result) {
                    var html_locs = "<h3 style='margin-bottom: 20px; color:#FF385c;letter-spacing: 0.3px;'>Areas in " + city_name + " " + " " + zone_name + " </h3><ul id='zone_area'></ul>";
                    $(".zone_locations").html(html_locs);
                    $.each(result, function(key, value) {
                        // console.log(str);
                        $('#table_data').html('');
                        $('#data_Sale').html('');
                        $('#table_head').html('');
                        $('#data_Sale').html('<table id="demoApi" class="listing_table list-table-left" style="min-width: 0px;"><thead class="thead-light" id="table_head"><tr></tr></thead><tbody id="table_data" style="float: none;"></tbody></table>');
                        $('#table_container').removeClass('d-none');
                        $('#table_head').append('<tr><th style="padding:0px 0px 0px 15px;">Area Name</th><th style="padding:0px 0px 0px 15px;">Zone Name</th> </tr>');
                        $.each(result, function(key, value) {
                            $('#table_data').append('<tr id="selector_38486606" class="grid-column-data"><td class="selector-id-table inventory">' + value.areaname + '&nbsp;</td><td class="selector-id-table inventory">' + value.zone + '&nbsp;</td></tr>');
                        });
                        $('#demoApi').DataTable();
                    });
                }
            });
        }
    }
</script>
@endsection