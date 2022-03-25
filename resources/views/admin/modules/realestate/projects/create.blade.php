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
            <a href="{{ route('admin:projects') }}" class="btn btn-primary"><i class="fe fe-block mr-1"></i> Back </a>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Our Projects</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data" method="POST" action="{{ route('admin:projects_submit', [$data['updateId'] ?? 0]) }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$data['updateId'] ?? 0}}">
                            <div class="card-body pb-2">
                                <div class="row row-sm">
                                    <div class="col-9">
                                        <div class="col-12 form-group padding">
                                            <label class="form-label">Name</label>
                                            <input class="form-control notrequired" placeholder="Name" name="name" value="{{ $data['record']->name ?? '' }}" type="text">
                                        </div>
                                        <div class="col-lg-12 form-group padding">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control notrequired" placeholder="Meta Description" name="detail" rows="3" spellcheck="false">{{ $data['record']->detail ?? '' }}</textarea>
                                        </div>
                                        <div class="col-lg-12 form-group padding">
                                            <label class="form-label">Content</label>
                                            <textarea class="ckeditor form-control disc_2 notrequired" name="page_content" id="disc_2">{{ $data['record']->page_content ?? '' }}</textarea>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 form-group padding">
                                            <label class="form-label">Image</label>
                                            <input type="file" name="image" class="dropify notrequired" data-default-file="" data-height="180" name="image" />
                                        </div>
                                        <div class="col-lg-12 form-group padding">
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
                                        <div class="col-12 form-group padding">
                                            <label class="form-label">Location</label>
                                            <input class="form-control notrequired" placeholder="Location" name="location" value="{{ $data['record']->location ?? '' }}" type="text">
                                        </div>
                                        <div class="row">
                                            <div class="col-6 form-group">
                                                <label class="form-label">Latitude</label>
                                                <input class="form-control notrequired" placeholder="Ex: 1.462260" name="latitude" value="{{ $data['record']->name ?? '' }}" type="text">
                                            </div>
                                            <div class="col-6  form-group">
                                                <label class="form-label">Longitude</label>
                                                <input class="form-control notrequired" placeholder="Ex: 103.812530" name="longitude" value="{{ $data['record']->name ?? '' }}" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number blocks</label>
                                                <input class="form-control notrequired" placeholder="Number blocks" name="blocks" value="{{ $data['record']->name ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number floors</label>
                                                <input class="form-control notrequired" placeholder="Number floors" name="floors" value="{{ $data['record']->name ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number flats</label>
                                                <input class="form-control notrequired" placeholder="Number flats" name="flats" value="{{ $data['record']->name ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Lowest price</label>
                                                <input class="form-control notrequired" placeholder="Lowest price" name="lowest_price" value="{{ $data['record']->name ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Max price</label>
                                                <input class="form-control notrequired" placeholder="Max price" name="max_price" value="{{ $data['record']->name ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Currency</label>
                                                <select id="cars" class="form-control" name="city_id">
                                                    <option value="">--select--</option>
                                                    <option value="pkr">PKR</option>
                                                    <option value="Usa">USA</option>
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <label class="form-label">Commercial Area</label>
                                                <input class="form-control notrequired" placeholder="size in marala (min)" name="commercial_area_min" value="{{ $data['record']->name ?? '' }}" type="number">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label class="form-label">Commercial Area</label>
                                                <input class="form-control notrequired" placeholder="size in marala (max)" name="commercial_area_max" value="{{ $data['record']->name ?? '' }}" type="number">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label class="form-label">Residential Area</label>
                                                <input class="form-control notrequired" placeholder="size in marala (min)" name="residential_area_min" value="{{ $data['record']->name ?? '' }}" type="number">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label class="form-label">Residential Area</label>
                                                <input class="form-control notrequired" placeholder="size in marala (max)" name="residential_area_max" value="{{ $data['record']->name ?? '' }}" type="number">
                                            </div>
                                        </div>
                                        <div class="col-12 form-group padding">
                                            <label class="form-label">Feature</label>
                                            @foreach($feature as $feature)
                                            <label style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('feature[]', $feature->id, false, array('class' => 'seting')) }}
                                                {{ $feature->name }}</label>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="col-lg-12">
                                            <h4 class="card-title"><span>Publish</span></h4>
                                            <div class="btn btn-list">
                                                <button type="submit" class="btn btn-primary user_form submit_button">Save
                                                </button>
                                                <button type="button" href="{{ route('admin:facilities') }}" class="btn btn-warning">Cancel </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <label class="form-label">Category</label>
                                            @foreach ($categories as $category)
                                            <li class="no-border">
                                                <input type="checkbox" name="category[]" value="{{ $category->id }}" id="{{ $category->id }}">
                                                <label for="{{ $category->id }}">{{ $category->name}}</label>
                                                <ul style="margin-left: 34px;margin-bottom: 0;">
                                                    @foreach($category->subCategory as $sub_cat)
                                                    <li>
                                                        <input type="checkbox" name="category[]" value="{{ $sub_cat->id }}" id="{{ $sub_cat->id }}">
                                                        <label for="{{ $sub_cat->id }}">{{ $sub_cat->name}}</label>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </div>
                                        <div class="widget meta-boxes" data-select2-id="select2-data-10-x9c6">
                                            <div class="widget-title">
                                                <h4><label for="investor_id" class="control-label">Investor</label></h4>
                                            </div>
                                            <div class="widget-body" data-select2-id="select2-data-9-ar47">
                                                <select id="cars" class="form-control" name="investor_id">
                                                    <option value="">--select--</option>
                                                    @foreach($investor as $investor)
                                                    <option value="{{$investor->id}}" <?php if (($data['record']->investor_id ?? '') == $investor->id) {
                                                                                        echo 'selected';
                                                                                    } ?>>{{$investor->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
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
<script src="{{ URL::asset('assets/themeJquery/projects/jquery.js') }}"></script>
@endsection