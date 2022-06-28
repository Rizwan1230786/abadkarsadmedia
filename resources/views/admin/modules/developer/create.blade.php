@extends('admin.master')
@section('css')
    @include('admin.layouts.select2CssFiles')
    @include('admin.layouts.fancy-uploader-css')
@endsection
@section('page-header')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Create Developer</h4>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="" class="btn btn-primary"><i class="fe fe-block mr-1"></i> Back </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Developer</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                        <form  action="{{route('admin:create_developer')}}"  enctype="multipart/form-data" method="Post">
                                @csrf
                                <div class="card-body pb-2">
                                   @if ($message = Session::get('message'))
                                        <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <div class="row row-sm">
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Name</label>
                                            <input class="form-control " placeholder="Name" name="name" type="text" >

                                         </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" placeholder="Address" name="address"
                                                 type="text" >

                                        </div>


                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input class="form-control" placeholder="Phone Number" name="phone_no"
                                                 type="text" >

                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-group">
                                            <label class="form-label">Image</label>
                                            <input type="file" name="image" class="dropify notrequired"
                                            data-height="180"/>

                                        </div>
                                        <div class="col-lg-12">
                                            <div class="btn btn-list" style="text-align:center;width:100%">
                                                <button type="submit" class="btn btn-primary user_form submit_button">Save
                                                </button>
                                                <button type="button" href=""
                                                    class="btn btn-warning">Cancel </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
@section('js')
    <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    @include('admin.layouts.select2JsFiles')
    @include('admin.layouts.fancy-uploader-js')
    @include('admin.layouts.tinymce-js')
    @include('admin.layouts.templateJquery')
    <script src="{{ URL::asset('assets/themeJquery/users/jquery1.js') }}"></script>
@endsection
