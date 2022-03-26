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
                <a href="{{ route('admin:properties') }}" class="btn btn-primary"><i class="fe fe-block mr-1"></i> Back </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Our Properties</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <?php
                            if(isset($data['record']->id) && $data['record']->id !=0){
                                $url=route('admin:properties_update', [$data['updateId'] ?? 0]);
                            }else{
                                $url=route('admin:properties_submit');
                            }

                          ?>
                            <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data"
                                method="POST" action="{{ route('admin:properties_submit', [$data['updateId'] ?? 0]) }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data['updateId'] ?? 0 }}">
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                        <div class="col-9">
                                            <div class="col-12 form-group padding">
                                                <label class="form-label">Name</label>
                                                <input class="form-control notrequired" placeholder="Name" name="name"
                                                    value="{{ $data['record']->name ?? '' }}" type="text">
                                            </div>
                                            <div class="col-12 form-group padding">
                                                <label class="form-label">Type</label>
                                                <select id="cars" class="form-control" name="type">
                                                    <option value="rent">Rent</option>
                                                    <option value="sale">Sale</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control notrequired" placeholder="Short Description" name="descripition" rows="5"
                                                    spellcheck="false">{{ $data['record']->descripition ?? '' }}</textarea>
                                            </div>
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Content</label>
                                                <textarea class="ckeditor form-control disc_2 notrequired" name="content"
                                                    id="disc_2">{{ $data['record']->content ?? '' }}</textarea>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group padding">
                                                <label class="form-label">Image</label>
                                                <input type="file" name="image" class="dropify notrequired"
                                                    data-default-file="" data-height="180" name="image" />
                                            </div>
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Select City</label>
                                                <select id="cars" class="form-control" name="city_name">
                                                    <option value="">--select--</option>
                                                    @foreach ($city as $city)
                                                        <option value="{{ $city->name }}" <?php if (($data['record']->city_id ?? '') == $city->id) {
    echo 'selected';
} ?>>
                                                            {{ $city->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12 form-group padding">
                                                <label class="form-label">Property Location</label>
                                                <input class="form-control notrequired" placeholder="Property Location"
                                                    name="location"
                                                    value="{{ $data['record']->property_location ?? '' }}" type="text">
                                            </div>
                                            <div class="row">
                                                <div class="col-6 form-group">
                                                    <label class="form-label">Latitude</label>
                                                    <input class="form-control notrequired" placeholder="Ex: 1.462260"
                                                        name="latitude" value="{{ $data['record']->latitude ?? '' }}"
                                                        type="text">
                                                    <a class="form-control notrequired" style="background-color: #d9edf7"
                                                        href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                        target="_blank" rel="nofollow">
                                                        Go here to get Latitude from address. </a>
                                                </div>
                                                <div class="col-6  form-group">
                                                    <label class="form-label">Longitude</label>
                                                    <input class="form-control notrequired" placeholder="Ex: 103.812530"
                                                        name="longitude" value="{{ $data['record']->longitude ?? '' }}"
                                                        type="text">
                                                    <a class="form-control notrequired" style="background-color: #d9edf7"
                                                        href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                        target="_blank" rel="nofollow">
                                                        Go here to get Longitude from address. </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Number bedrooms</label>
                                                    <input class="form-control notrequired" placeholder="Number bedrooms"
                                                        name="number_of_bedrooms" value="{{ $data['record']->bedrooms ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Number bathrooms</label>
                                                    <input class="form-control notrequired" placeholder="Number bathrooms"
                                                        name="number_of_bathrooms" value="{{ $data['record']->bathrooms ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Number floors</label>
                                                    <input class="form-control notrequired" placeholder="Number floors"
                                                        name="number_of_floors" value="{{ $data['record']->floors ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Square (m²)</label>
                                                    <input class="form-control notrequired" placeholder="Square :unit"
                                                        name="square" value="{{ $data['record']->square ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Marala</label>
                                                    <input class="form-control notrequired" placeholder="Marala"
                                                        name="marala" value="{{ $data['record']->marala ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Currency</label>
                                                    <select id="cars" class="form-control" name="currency">
                                                        <option value="">--select--</option>
                                                        <option value="pkr">PKR</option>
                                                        <option value="Usa">USA</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-3 col-md-4">
                                                    <label for="price" class="form-label">Price</label>
                                                    <input class="form-control notrequired" placeholder="Price" name="price"
                                                        value="{{ $data['record']->price ?? '' }}" type="number">
                                                </div>

                                            </div>
                                            <div class="col-12 form-group padding">
                                                <label class="form-label">Feature</label>
                                                @foreach ($feature as $feature)
                                                    <label>{{ Form::checkbox('feature[]', $feature->id, false, ['class' => 'name']) }}
                                                        {{ $feature->name }}</label>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="col-lg-12">
                                                <h4 class="card-title"><span>Publish</span></h4>
                                                <div class="btn btn-list">
                                                    <button type="submit"
                                                        class="btn btn-primary user_form submit_button">Save
                                                    </button>
                                                    <button type="button" href="" class="btn btn-warning">Cancel </button>
                                                </div>
                                            </div>
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12">
                                                    <label class="form-label">Status</label>
                                                    <select id="cars" class="form-control " name="property_status">
                                                        <option value="">Not available</option>
                                                        <option value="preparing_selling">Preparing selling</option>
                                                        <option value="selling">Selling</option>
                                                        <option value="sold">Sold</option>
                                                        <option value="renting">Renting</option>
                                                        <option value="rented">Rented</option>
                                                        <option value="building">Building</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12">
                                                    <label class="form-label">Moderation status</label>
                                                    <select id="cars" class="form-control " name="moderation_status">
                                                        <option value="pending">Pending</option>
                                                        <option value="approved">Approved</option>
                                                        <option value="rejected">Rejected</option>
                                                        \
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12 form-group">
                                                    <label class="form-label">Category</label>
                                                    @foreach ($categories as $category)
                                                    <li class="no-border">
                                                        <input type="radio" name="category" value="{{ $category->name }}" id="{{ $category->id }}">
                                                        <label for="{{ $category->id }}">{{ $category->name}}</label>
                                                        <ul style="margin-left: 34px;margin-bottom: 0;">
                                                            @foreach($category->subCategory as $sub_cat)
                                                            <li>
                                                                <input type="radio" name="category" value="{{ $sub_cat->name }}" id="{{ $sub_cat->id }}">
                                                                <label for="{{ $sub_cat->id }}">{{ $sub_cat->name}}</label>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @endforeach
                                                </div>

                                            </div>





                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12">
                                                    <label class="form-label">Project</label>
                                                    <select id="cars" class="form-control" name="project_id">
                                                        <option value="">Select a project</option>
                                                        @foreach ($project as $project)
                                                            <option value="{{ $project->id }}" <?php if (($data['record']->project_id ?? '') == $project->id) {
        echo 'selected';
    } ?>>
                                                                {{ $project->title }}</option>
                                                        @endforeach
                                                    </select>
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
    <script src="{{ URL::asset('assets/themeJquery/property/jquery.js') }}"></script>
@endsection
