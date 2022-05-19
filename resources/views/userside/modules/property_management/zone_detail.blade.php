@extends('userside.layout')
@section('main')
    @include('userside.layouts.sidebar')
    <div id="rightcolumn" style="
         width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <div id="mytabs_search" style="margin-top:0px;">
                <form id="frm_tabs_search" name="frm_tabs_search" style="padding:0px; margin:0px;">
                    Edit Property:&nbsp;
                    <input type="text" id="txt_tabs_search" name="txt_tabs_search" value="Enter ID"
                        style="color:#454545; width:80px;" />&nbsp;
                    <input type="image" src="https://assets.zameen.com/profolio/images/auto_utilization_go_button1_1.png"
                        id="btn_search_go" name="btn_search_go" height="14" align="texttop" />
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
                <label class="zone-label">City: <img
                        src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>

                <select name="city" onchange="fetch_locs(0);" id="city">
                    <option value="">Select city from list</option>
                    @foreach ($city as $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
                <label class="zone-label ml-50">Zones: <img
                        src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>


                <select name="zone" onchange="fetch_locs(0);" id="zone">
                    <option value="">Select Zones from list</option>
                    <option value="1">Zone A</option>
                    <option value="2">Zone B</option>
                    <option value="3">Zone C</option>
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


            <div class="zone_locations"></div>

        </div>
    </div>
    </div>
@endsection
