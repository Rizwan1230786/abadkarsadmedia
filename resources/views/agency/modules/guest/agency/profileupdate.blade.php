@extends('agency.master')
@section('css')
    @include('admin.layouts.select2CssFiles')
    @include('admin.layouts.fancy-uploader-css')
@endsection
@section('page-header')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Update profile</h4>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Profile</h4>
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
                                action="{{ url('agency/update_user_profile') }}">
                                @csrf
                                <input type="hidden" value="{{ $data->id }}" name="id">
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                        <div class="col-6 form-group">
                                            <label class="form-label">Company Name</label>
                                            <input class="form-control notrequired" placeholder="Company Name"
                                                name="name" value="{{ $data->name ?? '' }}" type="text">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Office Address</label>
                                            <input class="form-control notrequired" placeholder="Office Adress "
                                                name="office_address" value="{{ $data->office_address ?? '' }}"
                                                type="text">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Office No.</label>
                                            <input class="form-control notrequired" placeholder="Office.no"
                                                name="office_number" value="{{ $data->office_number ?? '' }}"
                                                type="number">
                                        </div>

                                        <div class="col-6 form-group">
                                            <label class="form-label">Mobile No.</label>
                                            <input class="form-control notrequired" placeholder="Mobile.no"
                                                name="mobile_number" value="{{ $data->mobile_number ?? '' }}"
                                                type="number">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Fax No.</label>
                                            <input class="form-control notrequired" placeholder="Fax.no" name="fax_number"
                                                value="{{ $data->fax_number ?? '' }}" type="number">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Select City</label>
                                            <select id="cars" class="form-control" name="city_name">
                                                <option value="">--select--</option>
                                                @foreach ($city as $city)
                                                    <option value="{{ $city->name }}" <?php if (($data->city_name ?? '') == $city->name) {
                                                        echo 'selected';
                                                    } ?>>
                                                        {{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Image</label>
                                            @if (isset($data->image) && !empty($data->image))
                                                <input type="file" name="image" class="dropify"
                                                    data-default-file="{{ asset('assets/images/agency/' . $data->image) }}"
                                                    data-height="180" />
                                            @else
                                                <input type="file" name="image" class="dropify notrequired"
                                                    data-default-file="{{ asset('assets/images/photos/bcstart_right_image.jpg') }}"
                                                    data-height="180" />
                                            @endif
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="btn btn-list" style="text-align:center;width:100%">
                                                <button type="submit" class="btn btn-primary user_form submit_button">Save
                                                </button>
                                                <button type="button" href="{{ route('admin:agency') }}"
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
    <script src="{{ URL::asset('assets/themeJquery/agency/jquery.js') }}"></script>
@endsection
