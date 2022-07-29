@extends('agency.master')
@section('css')
    @include('agency.layouts.select2CssFiles')
    @include('agency.layouts.fancy-uploader-css')
@endsection
@section('page-header')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Change Password</h4>
        </div>
    </div>
@endsection
<style>
    .error {
        color: red;
        margin-top: 3px;
    }
</style>
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Change Password</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            @if (Session::has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">

                                    {{ Session::get('message') }}

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <form id="myForm" enctype="multipart/form-data" method="POST"
                                action="{{ url('agency/update-password') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ Auth()->user()->id }}">
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                        <div class="col-6 form-group">
                                            <label class="form-label">Current Password</label>
                                            <input class="form-control notrequired" placeholder="Enter old password"
                                                name="current_password" type="password">
                                            @if ($errors->has('current_password'))
                                                <div class="error">{{ $errors->first('current_password') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">New passord</label>
                                            <input class="form-control" placeholder="Enter New password" name="new_password"
                                                type="password">
                                            @if ($errors->has('new_password'))
                                                <div class="error">{{ $errors->first('new_password') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Confrim Password</label>
                                            <input class="form-control" placeholder="Enter confrim password"
                                                name="new_confirm_password" type="password">
                                            @if ($errors->has('new_confirm_password'))
                                                <div class="error">{{ $errors->first('new_confirm_password') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="btn btn-list" style="text-align:center;width:100%">
                                                <button type="submit" class="btn btn-primary user_form submit_button">Save
                                                </button>
                                                <button type="button" href="{{ route('agency:agent') }}"
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
    @include('agency.layouts.select2JsFiles')
    @include('agency.layouts.fancy-uploader-js')
    @include('agency.layouts.tinymce-js')
    @include('agency.layouts.templateJquery')
    <script src="{{ URL::asset('assets/themeJquery/agent/jquery.js') }}"></script>
@endsection
