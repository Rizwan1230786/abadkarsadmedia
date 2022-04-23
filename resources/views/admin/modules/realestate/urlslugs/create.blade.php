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
            <a href="{{ route('admin:slugs') }}" class="btn btn-primary"><i class="fe fe-block mr-1"></i> Back </a>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Genrate Slugs</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data" method="POST" action="{{ route('admin:area_submit', [$data['updateId'] ?? 0]) }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$data['updateId'] ?? 0}}">
                            <div class="card-body pb-2">
                                <div class="row row-sm">
                                    <div class="col-12 form-group">
                                        <label class="form-label">Title</label>
                                        <input class="form-control notrequired" id="title" placeholder="Name" name="title" value="{{ $data['record']->title ?? '' }}" type="text">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label class="form-label">Url Slug</label>
                                        <input class="form-control txtPageUrl" placeholder="Url Slug" id="url_slug"
                                            name="url_slug" value="{{ $data['record']->url_slug ?? '' }}"
                                            type="text" readonly>
                                    </div>
                                    <div class="col-lg-12 form-group ">
                                        <label class="form-label">Select Category</label>
                                        <select id="cars" class="form-control" name="category_id">
                                            <option value="">--select--</option>
                                            @foreach($category as $category)
                                            <option value="{{$category->id}}" <?php if (($data['record']->category_id ?? '') == $category->id) {
                                                                                echo 'selected';
                                                                            } ?>>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-12 form-group ">
                                        <label class="form-label">Select City</label>
                                        <select id="cars" class="form-control" name="city_id">
                                            <option value="">--select--</option>
                                            @foreach($city as $city)
                                            <option value="{{$city->id}}" <?php if (($data['record']->city_id ?? '') == $city->id) {
                                                                                echo 'selected';
                                                                            } ?>>{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="btn btn-list" style="text-align:center;width:100%">
                                            <button type="submit" class="btn btn-primary user_form submit_button">Save
                                            </button>
                                            <button type="button" href="{{ route('admin:area') }}" class="btn btn-warning">Cancel </button>
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
<script src="{{ URL::asset('assets/themeJquery/slugs/jquery.js') }}"></script>
@endsection
