@extends('userside.layout')
@section('main')
    @include('userside.layouts.sidebar')
    <div id="rightcolumn" style="
    width:79% " class="rightcolumn_div post_story_margin">
    <span id="table_container" class="d-none">
        <div class="box_title">
            <div><b>Active Listing For Sale</b></div>
        </div>
        <div class="box_body listing-property-profolio" id="Sale_listings" style="padding: 0px; ">
            <div class="ant-table" id="data_Sale" style="height:auto">

                <table id="myTable" class="table table-responsive listing_table table-bordered text-nowrap">
                    <thead class="thead-light" id="table_head">
                        <tr>
                            <th style="padding:0px 0px 0px 15px;">ID</th>
                            <th>Type</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody id="table_data" style="float: none;">
                        @isset($property)
                        @foreach ($property as $value )
                        @if(isset($value['type']) && $value['type'] == 'sale')
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->category }}</td>
                            <td>{{ $value->location }}</td>
                        </tr>
                        @endif
                        @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </span>
    </div>
</div>
@endsection
