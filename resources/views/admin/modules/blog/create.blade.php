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
                <a href="{{ route('admin:ourblog') }}" class="btn btn-success"><i class="fe fe-block mr-1"></i> Back </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Our Blog</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data" method="POST"
                                action="{{ route('admin:blog_submit', [$data['updateId'] ?? 0]) }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$data['updateId'] ?? 0}}">
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                       <div class="col-lg-6 form-group">
                                            <label class="form-label">Page Title</label>
                                            <input class="form-control txtPageTitle" id="title" placeholder="" name="page_title"
                                                value="{{ $data['record']->page_title ?? '' }}" type="text">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Url Slug</label>
                                            <input class="form-control txtPageUrl" id="url_slug" placeholder="Url Slug" name="url_slug"
                                                value="{{ $data['record']->url_slug ?? '' }}" type="text" readonly>
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Meta Title</label>
                                            <input class="form-control notrequired" placeholder="Meta Title"
                                                name="meta_title" value="{{ $data['record']->meta_title ?? '' }}" type="text">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Meta Keyword</label>
                                            <input class="form-control notrequired" placeholder="Meta keywords"
                                                name="meta_keywords" value="{{ $data['record']->meta_keywords ?? '' }}"
                                                type="text">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label">Meta Description</label>
                                            <textarea class="form-control notrequired" placeholder="Meta Description"
                                                name="meta_description" rows="3"
                                                spellcheck="false">{{ $data['record']->meta_description ?? '' }}</textarea>
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Tittle</label>
                                            <textarea class="form-control notrequired" placeholder="Title"
                                                name="tittle"  rows="3" type="text">{{ $data['record']->tittle ?? '' }}</textarea>
                                        </div>
                                        <div class="col-6 form-group">
                                            <label class="form-label">Detail</label>
                                            <textarea class="form-control notrequired" placeholder="Desigination"
                                                name="detail"  rows="3" type="text">{{ $data['record']->detail ?? '' }}</textarea>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 form-group">
                                            <label class="form-label">Image</label>
                                            @php
                                                if (isset($data['record']->image) && !empty($data['record']->image) && File::exists(public_path(ORIGNAL_IMAGE_PATH_BLOG.$data['record']->image))) {
                                                    $path = BASE_URL . ORIGNAL_IMAGE_PATH_BLOG.$data['record']->image;
                                                } else {
                                                    $path = NO_IMAGE;
                                                }
                                            @endphp
                                            <input type="file" name="image" class="dropify notrequired"
                                                data-default-file="{{$path}}" data-height="180" name="image" />
                                        </div>
                                        <div class="col-12 form-group">
                                            <label class="form-label">Long Description</label>
                                            <textarea class="tinymce-editor form-control " name="page_detail">{{ $data['record']->page_detail ?? '' }}</textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="btn btn-list" style="text-align:center;width:100%">
                                                <button type="submit" class="btn btn-success user_form submit_button">Save
                                                </button>
                                                <button type="button" href="{{ route('admin:ourteam') }}"
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
    @include('admin.layouts.templateJquery')
    <script src="{{ URL::asset('assets/themeJquery/blog/jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/themeJquery/blogone/jquery.js') }}"></script>
   <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 100,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endsection
