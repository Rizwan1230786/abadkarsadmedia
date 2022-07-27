<?php
use App\Models\Property;

?>
@extends('agency.master')
@section('css')
    <!-- INTERNAL Data tables -->
    @include('agency.layouts.dataTableCssFiles');
    <!-- INTERNAL Select2 js -->
    @include('agency.layouts.select2CssFiles');
@endsection
@section('page-header')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Agents Properties</h4>
        </div>
        @if (Auth()->user()->type == 'agent')
            <div class="page-rightheader">
                <div class="btn btn-list">
                    <a href="{{ route('agency:agentproperties.form') }}" class="btn btn-primary"><i
                            class="fe fe-user mr-1"></i>
                        Add
                        New</a>

                </div>
            </div>
        @endif
    </div>
    <!--End Page header-->
@endsection
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Properties Listing</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">ID</th>
                                    <th class="wd-15p border-bottom-0">image</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Created At</th>
                                    <th class="wd-10p border-bottom-0">Status</th>
                                    <th class="wd-10p border-bottom-0">Moderation Status</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            @if (Auth()->user()->type == 'agency')
                                <tbody>
                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($agent as $value)
                                        <?php
                                        $record = Property::where(['agent_id' => $value->id, 'agency_id' => $value->agency])
                                            ->orderBy('id', 'DESC')
                                            ->get();
                                        ?>
                                        @isset($record)
                                            @foreach ($record as $item)
                                                @php
                                                    $status = $item->status ?? 0;
                                                @endphp
                                                <tr>
                                                    <td>{{ $count++ }}</td>
                                                    <td><img src="{{ asset('assets/images/properties/' . $item->image) }}"
                                                            width="50px" height="50px"></td>
                                                    <td>{{ Str::limit($item->name, 20) }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td style="text-align: center;"><span
                                                            class="m-badge  m-badge--success">{{ $item->property_status }}</span>
                                                    </td>
                                                    <td style="text-align: center;"><span
                                                            class="m-badge  m-badge--{{ $status != '1' ? 'danger' : 'success' }} m-badge--wide">{{ $status != '1' ? 'Pendding' : 'Approved' }}</span>
                                                    </td>
                                                    <td>
                                                        <ul class="icons-list">
                                                            <a
                                                                href="{{ route('agency:agentproperties.form', ['id' => $item->id]) }}">
                                                                <li class="icons-list-item"><i class="fe fe-edit-3"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Edit"></i>
                                                                </li>
                                                            </a>
                                                            @if ($status == 1)
                                                                <a href="javascript:void(0)">
                                                                    <li class="icons-list-item agency_property_publish"
                                                                        rel="{{ $item->id }}" status="{{ $status }}">
                                                                        <i class="fe fe-arrow-up" data-toggle="tooltip"
                                                                            title="" data-original-title="Publish"></i>
                                                                    </li>
                                                                </a>
                                                            @else
                                                                <a href="javascript:void(0)">
                                                                    <li class="icons-list-item agency_property_publish"
                                                                        rel="{{ $item->id }}"
                                                                        status="{{ $status }}"><i
                                                                            class="fe fe-arrow-down" data-toggle="tooltip"
                                                                            title="" data-original-title="Un Publish"></i>
                                                                    </li>
                                                                </a>
                                                            @endif
                                                            <a href="javascript:void(0)">
                                                                <li class="icons-list-item delete_record_agency"
                                                                    data-id="{{ $item->id }}"><i class="fa fa-trash-o"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Delete"></i>
                                                                </li>
                                                            </a>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                    @endforeach

                                </tbody>
                            @else
                                <tbody>
                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($agent as $value)
                                        <?php
                                        $record = Property::where(['agent_id' => $value->id, 'agency_id' => $value->agency])
                                            ->orderBy('id', 'DESC')
                                            ->get();
                                        ?>
                                        @isset($record)
                                            @foreach ($record as $item)
                                                @php
                                                    $status = $item->status ?? 0;
                                                @endphp
                                                <tr>
                                                    <td>{{ $count++ }}</td>
                                                    <td><img src="{{ asset('assets/images/properties/' . $item->image) }}"
                                                            width="50px" height="50px"></td>
                                                    <td>{{ Str::limit($item->name, 20) }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td style="text-align: center;"><span
                                                            class="m-badge  m-badge--success">{{ $item->property_status }}</span>
                                                    </td>
                                                    <td style="text-align: center;"><span
                                                            class="m-badge  m-badge--{{ $status != '1' ? 'danger' : 'success' }} m-badge--wide">{{ $status != '1' ? 'Pendding' : 'Approved' }}</span>
                                                    </td>
                                                    <td>
                                                        <ul class="icons-list">
                                                            <a
                                                                href="{{ route('agency:agentproperties.form', ['id' => $item->id]) }}">
                                                                <li class="icons-list-item"><i class="fe fe-edit-3"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Edit"></i>
                                                                </li>
                                                            </a>
                                                            @if ($status == 1)
                                                                <a href="javascript:void(0)">
                                                                    <li class="icons-list-item agency_property_publish"
                                                                        rel="{{ $item->id }}"
                                                                        status="{{ $status }}"><i class="fe fe-arrow-up"
                                                                            data-toggle="tooltip" title=""
                                                                            data-original-title="Publish"></i></li>
                                                                </a>
                                                            @else
                                                                <a href="javascript:void(0)">
                                                                    <li class="icons-list-item agency_property_publish"
                                                                        rel="{{ $item->id }}"
                                                                        status="{{ $status }}"><i
                                                                            class="fe fe-arrow-down" data-toggle="tooltip"
                                                                            title="" data-original-title="Un Publish"></i>
                                                                    </li>
                                                                </a>
                                                            @endif
                                                            <a href="javascript:void(0)">
                                                                <li class="icons-list-item delete_record_agency"
                                                                    data-id="{{ $item->id }}"><i class="fa fa-trash-o"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Delete"></i>
                                                                </li>
                                                            </a>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                    @endforeach

                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
    </div>
    </div><!-- end app-content-->
    </div>
@endsection
@section('js')
    <!-- INTERNAL Data tables -->
    @include('agency.layouts.dataTableJsFiles')
    <!-- INTERNAL Select2 js -->
    @include('agency.layouts.select2JsFiles')
    <script src="{{ URL::asset('assets/themeJquery/property/jquery.js') }}"></script>
@endsection
