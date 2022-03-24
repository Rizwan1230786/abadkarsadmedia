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
            <h4 class="page-title mb-0">Testimonial</h4>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="{{ route('admin:create_testimonial')}}" class="btn btn-success"><i class="fe fe-user mr-1"></i> Add
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
                    <div class="card-title">Specialities Listing</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">ID</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">CompanyName</th>
                                    <th class="wd-25p border-bottom-0">Designation</th>
                                    <th class="wd-25p border-bottom-0">image</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($record)
                                    @foreach ($record as $item)
                                        @php
                                            $status = $item->is_publish ?? 0;
                                        @endphp
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->company_name }}</td>
                                            <td>{{ $item->designation }}</td>
                                            <td><img src="{{ asset('uploads/testimonial/orignal_images/'.$item->image) }}" width="80px"></td>
                                            <td>
                                                <ul class="icons-list">
                                                    <a href="{{ route('admin:create_testimonial', ['id'=>$item->id]) }}"><li class="icons-list-item"><i class="fe fe-edit-3" data-toggle="tooltip" title="" data-original-title="Edit"></i></li></a>
                                                    @if($status == 1)
                                                    <a href="javascript:void(0)">
                                                      <li class="icons-list-item action_publish" rel="{{ $item->id }}" status="{{ $status }}"><i class="fe fe-arrow-up" data-toggle="tooltip" title="" data-original-title="Publish"></i></li>
                                                    </a>
                                                    @else
                                                    <a href="javascript:void(0)">
                                                       <li class="icons-list-item action_publish" rel="{{ $item->id }}"  status="{{ $status }}"><i class="fe fe-arrow-down" data-toggle="tooltip" title="" data-original-title="Un Publish"></i></li>
                                                    </a>
                                                    @endif
                                                    <a href="javascript:void(0)">
                                                      <li class="icons-list-item delete_record1" data-id="{{ $item->id }}"><i class="fa fa-trash-o"  data-toggle="tooltip" title="" data-original-title="Delete"></i></li>
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
    <script src="{{ URL::asset('assets/themeJquery/testimonial/jquery.js') }}"></script>
@endsection
