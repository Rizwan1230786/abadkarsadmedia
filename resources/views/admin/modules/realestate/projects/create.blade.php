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
                        <?php
                        if (isset($data['record']->id) && $data['record']->id != 0) {
                            $url = route('admin:projects_update', [$data['updateId'] ?? 0]);
                        } else {
                            $url = route('admin:projects_submit');
                        }

                        ?>
                        <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data" method="POST" action="{{$url}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$data['updateId'] ?? 0}}">
                            <div class="card-body pb-2">
                                <div class="row row-sm">
                                    <div class="col-9">
                                        <div class="col-12 form-group padding">
                                            <label class="form-label">Title</label>
                                            <input class="form-control notrequired" placeholder="Name" name="title" value="{{ $data['record']->title ?? '' }}" type="text">
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
                                            <input type="file" name="image" class="dropify notrequired" data-default-file="" data-height="180" multiple />
                                        </div>
                                        <div class="col-lg-12 form-group padding">
                                            <label class="form-label">Select City</label>
                                            <select id="cars" class="form-control" name="city_name">
                                                <option value="">--select--</option>
                                                @foreach($city as $city)
                                                <option value="{{$city->name}}" <?php if (($data['record']->city_name ?? '') == $city->name) {
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
                                                <input class="form-control notrequired" placeholder="Ex: 1.462260" name="latitude" value="{{ $data['record']->latitude ?? '' }}" type="number">
                                                <a class="form-control notrequired" style="background-color: #d9edf7" href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank" rel="nofollow">
                                                    Go here to get Latitude from address. </a>
                                            </div>
                                            <div class="col-6  form-group">
                                                <label class="form-label">Longitude</label>
                                                <input class="form-control notrequired" placeholder="Ex: 103.812530" name="longitude" value="{{ $data['record']->longitude ?? '' }}" type="number">
                                                <a class="form-control notrequired" style="background-color: #d9edf7" href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank" rel="nofollow">
                                                    Go here to get Longitude from address. </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number blocks</label>
                                                <input class="form-control notrequired" placeholder="Number blocks" name="num_of_blocks" value="{{ $data['record']->num_of_blocks ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number floors</label>
                                                <input class="form-control notrequired" placeholder="Number floors" name="num_of_floors" value="{{ $data['record']->num_of_floors ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number flats</label>
                                                <input class="form-control notrequired" placeholder="Number flats" name="num_of_flats" value="{{ $data['record']->num_of_flats ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Lowest price</label>
                                                <input class="form-control notrequired" placeholder="Lowest price" name="lowest_price" value="{{ $data['record']->lowest_price ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Max price</label>
                                                <input class="form-control notrequired" placeholder="Max price" name="max_price" value="{{ $data['record']->max_price ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Currency</label>
                                                <select id="cars" class="form-control" name="currency_name">
                                                    <option value="">--select--</option>
                                                    <option value="pkr">PKR</option>
                                                    <option value="Usa">USA</option>
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <label class="form-label">Commercial Area</label>
                                                <input class="form-control notrequired" placeholder="size in marala (min)" name="commercial_area_min" value="{{ $data['record']->commercial_area_min ?? '' }}" type="number">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label class="form-label">Commercial Area</label>
                                                <input class="form-control notrequired" placeholder="size in marala (max)" name="commercial_area_max" value="{{ $data['record']->commercial_area_max ?? '' }}" type="number">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label class="form-label">Residential Area</label>
                                                <input class="form-control notrequired" placeholder="size in marala (min)" name="residential_area_min" value="{{ $data['record']->residential_area_min ?? '' }}" type="number">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label class="form-label">Residential Area</label>
                                                <input class="form-control notrequired" placeholder="size in marala (max)" name="residential_area_max" value="{{ $data['record']->residential_area_max ?? '' }}" type="number">
                                            </div>
                                        </div>
                                        <div class="col-12 form-group padding">
                                            <label class="form-label">Feature</label>
                                            <?php
                                            if (isset($data['record']) && !empty($data['record'])) { ?>
                                                @foreach($feature as $feature)
                                                <label style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('feature[]', $feature->id, in_array($feature->id, $features_projects) ? true : false, array('class' => 'name')) }}
                                                    {{ $feature->name }}</label>
                                                @endforeach
                                            <?php
                                            } else { ?>
                                                @foreach($feature as $feature)
                                                <label style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('feature[]', $feature->id, false, array('class' => 'seting')) }}
                                                    {{ $feature->name }}</label>
                                                @endforeach
                                            <?php
                                            }

                                            ?>
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
                                        <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
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
                                        </div>
                                        <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                            <div class="col-lg-12 form-group">
                                                <label class="form-label">Investor</label>
                                                <select id="cars" class="form-control" name="investor_name">
                                                    <option value="">--select--</option>
                                                    @foreach($investor as $investor)
                                                    <option value="{{$investor->name}}" <?php if (($data['record']->investor_name ?? '') == $investor->name) {
                                                                                            echo 'selected';
                                                                                        } ?>>{{$investor->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                            <div class="col-lg-12">
                                                <label class="form-label">Status</label>
                                                @if(isset($data['record']->status) && !empty($data['record']->status))
                                                <select id="cars" class="form-control " name="status">
                                                    <option value="{{$data['record']->status}}">{{$data['record']->status}}</option>
                                                    <option value="preparing_selling">Preparing selling</option>
                                                    <option value="selling">Selling</option>
                                                    <option value="sold">Sold</option>
                                                    <option value="building">Building</option>
                                                </select>
                                                @else
                                                <select id="cars" class="form-control " name="status">
                                                    <option value="">Not avalibale</option>
                                                    <option value="preparing_selling">Preparing selling</option>
                                                    <option value="selling">Selling</option>
                                                    <option value="sold">Sold</option>
                                                    <option value="building">Building</option>
                                                </select>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                            <div class="col-lg-12">
                                                <label class="form-label">Finish date</label>
                                                <input class="form-control notrequired" placeholder="Finish date" name="expire_date" value="{{ $data['record']->expire_date ?? '' }}" type="date">
                                            </div>
                                        </div>
                                        <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                            <div class="col-lg-12">
                                                <label class="form-label">Open sell date</label>
                                                <input class="form-control notrequired" placeholder="Open sell date" name="Open_sell_date" value="{{ $data['record']->Open_sell_date ?? '' }}" type="date">
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
