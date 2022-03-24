@extends('admin.master')
@section('css')
    @include('admin.layouts.select2CssFiles')
    @include('admin.layouts.fancy-uploader-css')
@endsection
@section('page-header')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Create</h4>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="{{ route('admin:testimonial') }}" class="btn btn-success"><i class="fe fe-block mr-1"></i> Back </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Testimonial</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data" method="POST"
                                action="{{ route('admin:testimonial_submit', [$data['updateId'] ?? 0]) }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$data['updateId'] ?? 0}}">
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                       <div class="col-6 form-group">
                                            <label class="form-label">Name</label>
                                            <input class="form-control notrequired" placeholder="Title"
                                                name="name" value="{{ $data['record']->name ?? '' }}"  type="text">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">CompanyName</label>
                                            <input class="form-control notrequired" placeholder="Title"
                                                name="companyname" value="{{ $data['record']->company_name ?? '' }}"  type="text">
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Designaition</label>
                                            <input class="form-control notrequired" placeholder="Url Slug"
                                                name="designation" value="{{ $data['record']->designation ?? '' }}"  type="text">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label class="form-label">Timespending Description</label>
                                            <textarea class="form-control disc_2 notrequired" name="timespending"
                                                id="disc_2">{{ $data['record']->timespending ?? '' }}</textarea>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-group">
                                            <label class="form-label">Image</label>
                                            @php
                                                if (isset($data['record']->image) && !empty($data['record']->image) && File::exists(public_path(ORIGNAL_IMAGE_PATH_TESTIMONIAL.$data['record']->image))) {
                                                    $path = BASE_URL . ORIGNAL_IMAGE_PATH_TESTIMONIAL.$data['record']->image;
                                                } else {
                                                    $path = NO_IMAGE;
                                                }
                                            @endphp
                                            <input type="file" name="image" class="dropify notrequired"
                                                data-default-file="{{$path}}" data-height="180" name="image" />
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="btn btn-list" style="text-align:center;width:100%">
                                                <button type="submit" class="btn btn-success user_form submit_button">Save
                                                </button>
                                                <button type="button" href="{{ route('admin:testimonial') }}"
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
    <script src="{{ URL::asset('assets/themeJquery/testimonial/jquery.js') }}"></script>
@endsection
