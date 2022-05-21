@extends('userside.layout')
@section('main')
    @include('userside.layouts.sidebar')
    <div id="rightcolumn" style="
        width:79% " class="rightcolumn_div post_story_margin">
        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=2&section=listings">Property
                    Management</a> &raquo;  For Rent Listing </span>
        </div>
        <span id="table_container" class="d-none">
            <div class="box_title">
                <div><b>Active Listing For Rent</b></div>
            </div>
            <div class="box_body listing-property-profolio" id="Sale_listings" style="padding: 0px; ">
                <div class="ant-table" id="data_Sale" style="height:auto">

                    <table id="myTable2" class="table table-responsive listing_table table-bordered text-nowrap">
                        <thead class="thead-light" id="table_head">
                            <tr>
                                <th style="padding:0px 0px 0px 15px;">ID</th>
                                <th>Type</th>
                                <th>Location</th>
                                <th>Detail</th>
                                <th>Price(PKR)</th>
                                <th>Platform</th>
                                <th>Quota</th>
                                <th>Listed Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table_data" style="float: none;">
                            @isset($property)
                                @foreach ($property as $value)
                                    @if (isset($value['type']) && $value['type'] == 'rent')
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->category }}</td>
                                        <td>{{Str::limit($value->location, 20)}}</td>
                                        <td>{{Str::limit($value->descripition, 20)}}</td>
                                        <td>{{$value->price}}</td>
                                        <td>abadkar.com</td>
                                        <td>1</td>
                                        <td>{{ $value->listed_date }}</td>
                                        <td><span class="textcoloractive">Active</span></td>
                                        <td>
                                            <ul class="icons-list">
                                                <a href="{{ route('admin:properties.form', ['id' => $value->id]) }}">
                                                    <li class="icons-list-item"><i class="fe fe-edit"
                                                            data-toggle="tooltip" title="" data-original-title="Edit"></i>
                                                    </li>
                                                </a>
                                            </ul>
                                        </td>
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
    <script>
        $(document).ready(function() {
            $('#myTable2').DataTable();
        });
    </script>
@endsection
