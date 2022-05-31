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
            <h4 class="page-title mb-0">Customers orders</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fe fe-layout mr-2 fs-14"></i>Users</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Users Management</a></li>
            </ol>
        </div>
    </div>
    <!--End Page header-->
@endsection
@section('content')
<style>
  table {
    counter-reset: section;
  }

  .count:before {
    counter-increment: section;
    content: counter(section);
  }
</style>
    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Customers Orders Listing</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">ID</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-20p border-bottom-0">Email</th>
                                    <th class="wd-20p border-bottom-0">Address</th>
                                    <th class="wd-20p border-bottom-0">City</th>
                                    <th class="wd-20p border-bottom-0">Contact</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($user)
                                    @foreach ($user as $item)
                                    @php
                                        $status = ($item->status ?? 0);
                                        $user=($item->id);
                                    @endphp
                                <tr>
                                    <td class="count"></td>
                                    <td>{{$item->first_name}} {{$item->last_name}}</td>
                                    <td>{{$item->email}}</td>
                                    @if(isset($item->address) && !empty($item->address))
                                    <td>{{Str::limit($item->address, 10)}}</td>
                                    @else
                                    <td>NO</td>
                                    @endif
                                    <td>{{Str::limit($item->city, 10)}}</td>
                                    <td>{{$item->phone_number}}</td>
                                    <td>
                                        <ul class="icons-list">
                                            <a href="javascript:void(0)">
                                               <li class="icons-list-item view_users" data-toggle="modal" data-target="#modaldetail" rel="{{ $item->id }}" ><i class="fe fe-file-text" data-toggle="tooltip" title="" data-original-title="Detail"></i></li>
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
@endsection
