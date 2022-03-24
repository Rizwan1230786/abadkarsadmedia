@extends('admin.master')
@section('css')
    @include('admin.layouts.select2CssFiles')
    @include('admin.layouts.fancy-uploader-css')
@endsection
@section('page-header')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Edit Proflie</h4>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="{{ route('admin:users') }}" class="btn btn-success"><i class="fe fe-block mr-1"></i> Back </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Proflie</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                        <form action="{{url('admin/update_profile/'.Auth::user()->id)}}" class="formSubmit" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Name</label>
                                            <input class="form-control txtPageTitle" placeholder="Name" name="name"
                                                value="{{ Auth::user()->name ?? '' }}" type="text">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" placeholder="Email" name="email"
                                                value="{{ Auth::user()->email ?? '' }}" type="email" >
                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-group">
                                            <label class="form-label">Image</label>
                                            <input type="file" name="image" class="dropify notrequired"
                                            data-default-file="{{ asset('assets/images/userphoto/'.Auth::user()->image) ?? ''}}" data-height="180" name="image" />
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="btn btn-list" style="text-align:center;width:100%">
                                                <button type="submit" class="btn btn-success user_form submit_button">Save
                                                </button>
                                                <button type="button" href="{{url('admin/users')}}"
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
    <script src="{{ URL::asset('assets/themeJquery/users/jquery.js') }}"></script>
@endsection
