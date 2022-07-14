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
                <a href="{{ route('admin:tools') }}" class="btn btn-primary"><i class="fe fe-block mr-1"></i> Back </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tools</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data"
                                method="POST" action="{{ route('admin:tools_submit', [$data['updateId'] ?? 0]) }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data['updateId'] ?? 0 }}">
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                        <div class="col-6 form-group">
                                            <label class="form-label">Tool Name</label>
                                            <input class="form-control notrequired" id="title" placeholder="Name"
                                                name="name" value="{{ $data['record']->name ?? '' }}" type="text">
                                        </div>
                                        <input class="form-control txtPageUrl" placeholder="Url Slug" id="url_slug"
                                            name="url_slug" value="{{ $data['record']->url_slug ?? '' }}" type="hidden"
                                            readonly>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Detail</label>
                                            <input class="form-control notrequired" placeholder="Detail" name="detail"
                                                value="{{ $data['record']->detail ?? '' }}" type="text">
                                        </div>
                                        <div class="col-lg-12 col-sm-12 form-group ">
                                            <label class="form-label">Image</label>
                                            @if (isset($data['record']->image) && !empty($data['record']->image))
                                                <input type="file" name="image" class="dropify notrequired"
                                                    data-default-file="{{ asset('assets/images/tools/' . $data['record']->image) }}"
                                                    data-height="180" />
                                            @else
                                                <input type="file" name="image" required class="dropify notrequired"
                                                    data-default-file="" data-height="180" />
                                            @endif
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="btn btn-list" style="text-align:center;width:100%">
                                                <button type="submit" class="btn btn-primary user_form submit_button">Save
                                                </button>
                                                <button type="button" href="{{ route('admin:tools') }}"
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
    <script>
        $(document).off("keyup", "#title").on("keyup", "#title", function(event) {
            var page_title = $(this).val();
            $("#url_slug").val(page_title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, ''));
        });
    </script>
@endsection
@section('js')
    <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    @include('admin.layouts.select2JsFiles')
    @include('admin.layouts.fancy-uploader-js')
    @include('admin.layouts.tinymce-js')
    @include('admin.layouts.templateJquery')
    <script src="{{ URL::asset('assets/themeJquery/abadtools/jquery.js') }}"></script>
@endsection
