@extends('admin.master')
@section('css')
<!-- INTERNAL Data tables -->
@include('admin.layouts.dataTableCssFiles');
<!-- INTERNAL Select2 js -->
@include('admin.layouts.select2CssFiles');
<style>
  table {
    counter-reset: section;
  }

  .count:before {
    counter-increment: section;
    content: counter(section);
  }
</style>
@endsection
@section('page-header')
<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">Let's Inquery</h4>
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
                <div class="card-title">Inquery's Listing</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">ID</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-20p border-bottom-0">Email</th>
                                <th class="wd-20p border-bottom-0">Time</th>
                                <th class="wd-20p border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($record)
                            @foreach ($record as $item)
                            @php
                            $status = $item->is_publish ?? 0;
                            @endphp
                            <tr>
                                <td class="count"></td>
                                <td>{{ $item->firstname . ' ' .$item->lastname}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->created_at}}</td>
                                <td>
                                    <ul class="icons-list">
                                        <a href="javascript:void(0)">
                                            <li class="icons-list-item view_details" data-toggle="modal" data-target="#modaldetail" data-id="{{$item->id ??''}}"><i class="fe fe-file-text" data-toggle="tooltip" title="" data-original-title="Detail"></i></li>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <li class="icons-list-item delete_qoute" data-id="{{ $item->id }}"><i class="fa fa-trash-o" data-toggle="tooltip" title="" data-original-title="Delete"></i></li>
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
<!-- detail modal -->
<div class="modal fade" id="modaldetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Patient Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end -->
@endsection
@section('js')
<!-- INTERNAL Data tables -->
@include('admin.layouts.dataTableJsFiles')
<!-- INTERNAL Select2 js -->
@include('admin.layouts.select2JsFiles')
@endsection