@extends('admin.master')
@section('css')
    <!-- INTERNAL Data tables -->
    @include('admin.layouts.dataTableCssFiles');
    <!-- INTERNAL Select2 js -->
    @include('admin.layouts.select2CssFiles');
@endsection
@section('page-header')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Agency</h4>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="{{ route('admin:agency.form') }}" class="btn btn-primary"><i class="fe fe-user mr-1"></i> Add
                    New</a>

            </div>
        </div>
    </div>
    <!--End Page header-->
@endsection
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Agencies Listing</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">ID</th>
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    {{-- <th class="wd-10p border-bottom-0">Status</th> --}}
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($record)
                                    @foreach ($record as $item)
                                        @php
                                            $status = $item->status ?? 0;
                                        @endphp
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td><img src="{{ asset('assets/images/agency/' . $item->image) }}" width="50px"
                                                    height="50px"></td>
                                            <td>{{ $item->name }}</td>
                                            {{-- <td style="text-align: center;"><span
                                                    class="m-badge  m-badge--{{ $status != '1' ? 'danger' : 'success' }} m-badge--wide">{{ $status != '1' ? 'UnPublish' : 'Publish' }}</span>
                                            </td> --}}
                                            <td>
                                                <ul class="icons-list">
                                                    <a href="{{ route('admin:agency.form', ['id' => $item->id]) }}">
                                                        <li class="icons-list-item"><i class="fe fe-edit-3"
                                                                data-toggle="tooltip" title=""
                                                                data-original-title="Edit"></i></li>
                                                    </a>
                                                    <a href="#">
                                                        <li class="icons-list-item view_details" rel="{{ $item->id }}"><i
                                                                class="fe fe-file-text" data-toggle="tooltip" title=""
                                                                data-original-title="Detail"></i></li>
                                                    </a>
                                                    {{-- @if ($status == 1)
                                                    <a href="javascript:void(0)">
                                                      <li class="icons-list-item publish" rel="{{ $item->id }}" status="{{ $status }}"><i class="fe fe-arrow-up" data-toggle="tooltip" title="" data-original-title="Publish"></i></li>
                                                    </a>
                                                    @else
                                                    <a href="javascript:void(0)">
                                                    <li class="icons-list-item publish" rel="{{ $item->id }}"  status="{{ $status }}"><i class="fe fe-arrow-down" data-toggle="tooltip" title="" data-original-title="Un Publish"></i></li>
                                                    </a>
                                                    @endif --}}
                                                    <a href="javascript:void(0)">
                                                        <li class="icons-list-item delete_record" data-id="{{ $item->id }}">
                                                            <i class="fa fa-trash-o" data-toggle="tooltip" title=""
                                                                data-original-title="Delete"></i></li>
                                                    </a>
                                                   @if($item->is_verify == 0)
                                                    <a href="{{ route('admin:agency.resend', ['id' => $item->id]) }}" 
                                                        class="btn btn-success btn-sm style">Resend email</a>
                                                       @endif
                                                      
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>
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
    <style>
        .style {
            line-height: 18px;
            height: 32px;
            margin-top: 9px;
            margin-left: 10px;
        }
    </style>
@endsection
@section('js')
    <!-- INTERNAL Data tables -->
    @include('admin.layouts.dataTableJsFiles')
    <!-- INTERNAL Select2 js -->
    @include('admin.layouts.select2JsFiles')
    <script src="{{ URL::asset('assets/themeJquery/agency/jquery.js') }}"></script>
@endsection
