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
            <h4 class="page-title mb-0">Approval</h4>
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
                    <div class="card-title">View Approval</div>
                </div>
                @if ($message = Session::get('message'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong style="color:white;">{{ $message }}</strong>
                    </div>
                @endif
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
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @isset($approve)
                                    @foreach ($approve as $item)
                                        @php
                                            $status = $item->status ?? 1;
                                        @endphp
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td><img src="{{ asset('assets/images/properties/' . $item->image) }}"
                                                    width="50px" height="50px"></td>
                                            <td>{{ Str::limit($item->name, 20) }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td style="text-align: center;"><span
                                                    class="m-badge  m-badge--success">pending</span>
                                            </td>
                                            <td style="text-align: center;"><span
                                                    class="m-badge  m-badge--{{ $status != '1' ? 'danger' : 'success' }} m-badge--wide">{{ $status == '0' ? 'Pending' : 'Approved' }}</span>
                                            </td>
                                            <td>
                                                <ul class="icons-list">
                                                    <a href="{{ route('admin:properties.form', ['id' => $item->id]) }}">
                                                        <li class="icons-list-item"><i class="fe fe-edit-3"
                                                                data-toggle="tooltip" title=""
                                                                data-original-title="Edit"></i>
                                                        </li>
                                                    </a>
                                                    @if ($status == 0)
                                                        <a href="javascript:void(0)">
                                                            <li class="icons-list-item property_publish"
                                                                rel="{{ $item->id }}" status="{{ $status }}"><i
                                                                    class="fe fe-arrow-up" data-toggle="tooltip" title=""
                                                                    data-original-title="Approved"></i></li>
                                                        </a>
                                                    @endif
                                                    <a href="javascript:void(0)">
                                                        <li class="icons-list-item delete_record"
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
@endsection
@section('js')
    <!-- INTERNAL Data tables -->
    @include('admin.layouts.dataTableJsFiles')
    <!-- INTERNAL Select2 js -->
    @include('admin.layouts.select2JsFiles')
    <script src="{{ URL::asset('assets/themeJquery/property/jquery.js') }}"></script>
@endsection
