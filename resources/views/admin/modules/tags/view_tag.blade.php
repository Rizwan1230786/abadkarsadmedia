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
        <h4 class="page-title mb-0">Developer</h4>
    </div>
    <div class="page-rightheader">
        <div class="btn btn-list">
            <a href="{{route('admin:tags')}}" class="btn btn-primary"><i class="fe fe-user mr-1"></i> Add
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
                <div class="card-title">Projects Listing</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">ID</th>
                                <th class="wd-15p border-bottom-0">Tags</th>
                                <th class="wd-10p border-bottom-0">Created at</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($tag as $tag)

                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{Str::limit($tag->name, 20)}}</td>
                                <td style="text-align: center;"><span class="m-badge  m-badge--wide">{{$tag->created_at}}</span>
                                </td>
                                <td>
                                    <ul class="icons-list">

                                        <a href="/admin/update/form/tag/{{$tag->id}}">
                                            <li class="icons-list-item"><i class="fe fe-edit-3" data-toggle="tooltip" title="" data-original-title="Edit"></i></li>
                                        </a>

                                        <a href="#">
                                            <li class="icons-list-item view_details" rel=""><i class="fe fe-file-text" data-toggle="tooltip" title="" data-original-title="Detail"></i></li>
                                        </a>

                                        <a href="/admin/delete/tag/{{$tag->id}}">
                                            <li class="icons-list-item delete_record" data-id=""><i class="fa fa-trash-o" data-toggle="tooltip" title="" data-original-title="Delete"></i></li>
                                        </a>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach

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
<script src="{{ URL::asset('assets/themeJquery/projects/jquery.js') }}"></script>
@endsection