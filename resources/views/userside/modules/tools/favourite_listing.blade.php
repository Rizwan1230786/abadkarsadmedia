@extends('userside.layout')
@section('main')
    @include('userside.layouts.tools_sidebar')
    <div id="rightcolumn" style="
        width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=6&section=favourites">Tools</a>
                &raquo; Favourite </span>
        </div>
        <div class="box_title">
            <div><b>Favourite Listings</b></div>
        </div>
        <div class="box_body">
            <span id="table_container" class="d-none">

                    <div class="ant-table" id="data_Sale" style="height:auto">

                        <table id="myTable" class="table table-responsive listing_table table-bordered text-nowrap">
                            <thead class="thead-light" id="table_head">
                                <tr>
                                    <th style="padding:0px 0px 0px 15px;">ID</th>
                                    <th>Type</th>
                                    <th>Location</th>
                                    <th>Purpise</th>
                                    <th>Price(PKR)</th>
                                    <th>Controller</th>
                                </tr>
                            </thead>
                            <tbody id="table_data" style="float: none;">
                                @isset($property)
                                    @foreach ($property as $value)
                                        @php
                                            $status = $value->status ?? 0;
                                        @endphp

                                            <tr>
                                                <td>{{ $value->Type }}</td>
                                                <td>{{ Str::limit($value->location, 20) }}</td>
                                                @if (isset($value) && !empty($value->location))
                                                    <td>{{ Str::limit($value->location, 20) }}</td>
                                                @else
                                                    <td>No Add</td>
                                                @endif
                                                @if (isset($value) && !empty($value->descripition))
                                                    <td>{{ Str::limit($value->descripition, 20) }}</td>
                                                @else
                                                    <td>No Add</td>
                                                @endif
                                                <td>{{ $value->price }}</td>
                                                <td>abadkar.com</td>
                                                <td>1</td>
                                                @if (isset($value) && !empty($value->listed_date))
                                                    <td>{{ $value->listed_date }}</td>
                                                @else
                                                    <td>Null</td>
                                                @endif
                                                <td><span class="textcoloractive">Active</span></td>
                                                <td>
                                                    <ul class="icons-list">
                                                        <a href="{{ url('user/edit-listing-for-sale/' . $value->id) }}">
                                                            <li class="icons-list-item"><i class="fe fe-edit"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="Edit"></i>
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </td>
                                            </tr>

                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>

            </span>
        </div>
        <div>
            <span style="padding-bottom:40px;" class="paginate">
            </span>
        </div>

        <div class="box_title">
            <div><b>Favourite Agents</b></div>
        </div>
        <div class="box_body">
            <div class="ant-table" id="data_Sale" style="height:auto">

                <table id="myTable2" class="table table-responsive listing_table table-bordered text-nowrap">
                    <thead class="thead-light" id="table_head">
                        <tr>
                            <th>Agent Title</th>
                            <th>Location</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody id="table_data" style="float: none;">
                        @isset($property)
                            @foreach ($property as $value)
                                @php
                                    $status = $value->status ?? 0;
                                @endphp
                                <?php
                                $category = Category::where(['id' => $value->category])->get();
                                ?>
                                @foreach ($category as $item)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        @if (isset($value) && !empty($value->location))
                                            <td>{{ Str::limit($value->location, 20) }}</td>
                                        @else
                                            <td>No Add</td>
                                        @endif
                                        @if (isset($value) && !empty($value->descripition))
                                            <td>{{ Str::limit($value->descripition, 20) }}</td>
                                        @else
                                            <td>No Add</td>
                                        @endif
                                        <td>{{ $value->price }}</td>
                                        <td>abadkar.com</td>
                                        <td>1</td>
                                        @if (isset($value) && !empty($value->listed_date))
                                            <td>{{ $value->listed_date }}</td>
                                        @else
                                            <td>Null</td>
                                        @endif
                                        <td><span class="textcoloractive">Active</span></td>
                                        <td>
                                            <ul class="icons-list">
                                                <a href="{{ url('user/edit-listing-for-sale/' . $value->id) }}">
                                                    <li class="icons-list-item"><i class="fe fe-edit"
                                                            data-toggle="tooltip" title=""
                                                            data-original-title="Edit"></i>
                                                    </li>
                                                </a>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <span style="padding-bottom:40px;" class="paginate">
            </span>
        </div>


    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        $(document).ready(function() {
            $('#myTable2').DataTable();
        });
    </script>
@endsection
