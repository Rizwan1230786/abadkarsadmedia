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
                            if (isset($data['record']->id) && $data['record']->id != 0) {
                                $url = route('admin:properties_update', [$data['updateId'] ?? 0]);
                            } else {
                                $url = route('admin:properties_submit');
                            }

                            ?>
                            <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data"
                                method="POST" action="{{ $url }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data['updateId'] ?? 0 }}">
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                        <div class="col-9">
                                            <div class="col-12 form-group padding">
                                                <label class="form-label">Title</label>
                                                <input class="form-control notrequired" id="title" placeholder="Title"
                                                    name="name" value="{{ $data['record']->name ?? '' }}"
                                                    type="text">
                                            </div>
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Url Slug</label>
                                                <input class="form-control txtPageUrl" placeholder="Url Slug" id="url_slug"
                                                    name="url_slug" value="{{ $data['record']->url_slug ?? '' }}"
                                                    type="text" readonly>
                                            </div>
                                            <div class="col-12 form-group padding">
                                                <label class="form-label">Type</label>
                                                @if (isset($data['record']->type) && $data['record']->type == 'sale')
                                                    <input type="radio" id="hide" checked name="type"
                                                        value="{{ $data['record']->type ?? '' }}">
                                                    <label for="html">Sale</label>
                                                @else
                                                    <input type="radio" name="type" id="hide" value="sale">
                                                    <label for="html">Sale</label>
                                                @endif
                                                @if (isset($data['record']->type) && $data['record']->type == 'rent')
                                                    <input type="radio" id="show" checked name="type"
                                                        value="{{ $data['record']->type ?? '' }}">
                                                    <label for="css">Rent</label>
                                                @else
                                                    <input type="radio" name="type" id="show" value="rent">
                                                    <label for="css">Rent</label>
                                                @endif
                                                {{-- <select id="cars" class="form-control" name="type">
                                                    <option value="rent">Rent</option>
                                                    <option value="sale">Sale</option>
                                                </select> --}}
                                            </div>
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Description (Optional)</label>
                                                <textarea class="form-control notrequired" placeholder="Short Description" name="descripition" rows="5"
                                                    spellcheck="false">{{ $data['record']->descripition ?? '' }}</textarea>
                                            </div>
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Content (Optional)</label>
                                                <textarea class="ckeditor form-control disc_2 notrequired" name="content" id="disc_2">{{ $data['record']->content ?? '' }}</textarea>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group padding">
                                                <label class="form-label">Image</label>
                                                @if (isset($data['record']->image) && !empty($data['record']->image))
                                                    <input type="file" name="image" class="dropify"
                                                        data-default-file="{{ asset('assets/images/properties/' . $data['record']->image) }}"
                                                        data-height="180" />
                                                @else
                                                    <input type="file" name="image" class="dropify notrequired"
                                                        data-default-file="" data-height="180" />
                                                @endif
                                            </div>
                                            <div class="form-group">


                                                <label for="files" class="form-label">Upload Multiple Property
                                                    Images (Optional)</label>
                                                <input type="file" name="images[]" class="form-control dropify"
                                                    accept="image/*" multiple style="padding-bottom: 40px">
                                                @if (isset($data['record']->id) && !empty($data['record']->id))
                                                    @foreach ($multiimages as $multi)
                                                        @if (isset($data['record']->id) && $data['record']->id == $multi->property_id)
                                                            <input type="hidden" name="property_id[]"
                                                                value="{{ $multi->propertiesimagesid }}">
                                                            <img src="{{ asset('assets/images/properties/multipleimages/' . $multi->image) }}"
                                                                alt="" width="60" height="60">
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="col-12 form-group padding">
                                                <label class="form-label">Property Location</label>
                                                <input class="form-control notrequired" placeholder="Property Location"
                                                    name="location" id="pac-input" step="0.01"
                                                    value="{{ $data['record']->location ?? '' }}" type="text">
                                            </div>
                                            <div class="row">
                                                <div class="col-6 form-group">
                                                    <label class="form-label">Latitude (Optional)</label>
                                                    <input class="form-control notrequired" placeholder="Ex: 1.462260"
                                                        name="latitude" step="0.01" id="lat"
                                                        value="{{ $data['record']->latitude ?? '' }}" type="decimal">
                                                    <a class="form-control notrequired" style="background-color: #d9edf7"
                                                        href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                        target="_blank" rel="nofollow">
                                                        Go here to get Latitude from address. </a>
                                                </div>
                                                <div class="col-6  form-group">
                                                    <label class="form-label">Longitude (Optional)</label>
                                                    <input class="form-control notrequired" placeholder="Ex: 103.812530"
                                                        name="longitude" step="0.01" id="long"
                                                        value="{{ $data['record']->longitude ?? '' }}" type="decimal">
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
                                                        value="{{ $data['record']->number_of_bedrooms ?? '' }}"
                                                        name="number_of_bedrooms"
                                                        value="{{ $data['record']->bedrooms ?? '' }}" type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Number bathrooms</label>
                                                    <input class="form-control notrequired" placeholder="Number bathrooms"
                                                        value="{{ $data['record']->number_of_bathrooms ?? '' }}"
                                                        name="number_of_bathrooms"
                                                        value="{{ $data['record']->bathrooms ?? '' }}" type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Number floors</label>
                                                    <input class="form-control notrequired" placeholder="Number floors"
                                                        value="{{ $data['record']->number_of_floors ?? '' }}"
                                                        name="number_of_floors"
                                                        value="{{ $data['record']->floors ?? '' }}" type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Area size</label>
                                                    <input class="form-control notrequired" placeholder=""
                                                        name="land_area" value="{{ $data['record']->land_area ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Unit:</label>
                                                    @if (isset($data['record']->unit) && !empty($data['record']->unit))
                                                        <select id="cars" class="form-control" name="unit">
                                                            <option value="{{ $data['record']->unit }}">
                                                                {{ $data['record']->unit }}</option>
                                                            <option value="square feet">Square feet</option>
                                                            <option value="square yard">Square yard</option>
                                                            <option value="square meter">Square meter</option>
                                                            <option value="marla">Marala</option>
                                                            <option value="kanal">Kanal</option>
                                                        </select>
                                                    @else
                                                        <select id="cars" class="form-control" name="unit">
                                                            <option value="square feet">Square feet</option>
                                                            <option value="square yard">Square yard</option>
                                                            <option value="square meter">Square meter</option>
                                                            <option value="marla">Marala</option>
                                                            <option value="kanal">Kanal</option>
                                                        </select>
                                                    @endif
                                                </div>

                                                <div class="col-4 form-group">
                                                    <label class="form-label">Currency</label>
                                                    @if (isset($data['record']->currency) && !empty($data['record']->currency))
                                                        <select id="cars" class="form-control" name="currency">
                                                            <option value="{{ $data['record']->currency }}">
                                                                {{ $data['record']->currency }}</option>
                                                            <option value="PKR">PKR</option>
                                                            <option value="USA">USA</option>
                                                        </select>
                                                    @else
                                                        <select id="cars" required class="form-control"
                                                            name="currency">
                                                            <option value="PKR">PKR</option>
                                                            <option value="USA">USA</option>
                                                        </select>
                                                    @endif
                                                </div>
                                                <div class="col-4 form-group divtext">
                                                    <label class="form-label">Occupency Status</label>
                                                    @if (isset($data['record']->occupency) && !empty($data['record']->occupency))
                                                        <select id="cars" class="form-control" name="occupency">
                                                            <option value="{{ $data['record']->occupency }}">
                                                                {{ $data['record']->occupency }}</option>
                                                            <option value="Vacant">Vacant </option>
                                                            <option value="Occupied">Occupied</option>
                                                        </select>
                                                    @else
                                                        <select id="cars" class="form-control" name="occupency">
                                                            <option value="">Please Select</option>
                                                            <option value="Vacant">Vacant </option>
                                                            <option value="Occupied">Occupied</option>
                                                        </select>
                                                    @endif
                                                </div>
                                                <div class="form-group mb-3 col-md-4">
                                                    <label for="price" class="form-label">Price</label>
                                                    <input class="form-control notrequired" placeholder="Price"
                                                        name="price" value="{{ $data['record']->price ?? '' }}"
                                                        type="number">
                                                </div>

                                            </div>
                                            <div class="col-12 form-group padding">
                                                <label class="form-label">Feature</label>
                                                <?php
                                            if (isset($data['record']) && !empty($data['record'])) { ?>
                                                @foreach ($feature as $feature)
                                                    <label
                                                        style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('feature[]', $feature->id, in_array($feature->id, $features_property) ? true : false, ['class' => 'name']) }}
                                                        {{ $feature->name }}</label>
                                                @endforeach
                                                <?php
                                            } else { ?>
                                                @foreach ($feature as $feature)
                                                    <label
                                                        style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('feature[]', $feature->id, false, ['class' => 'seting']) }}
                                                        {{ $feature->name }}</label>
                                                @endforeach
                                                <?php
                                            }

                                            ?>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table" id="dynamic_field">
                                                    <p><b>Distance Key between Facilities (Optional)</b></p>
                                                    <tr>
                                                        <td><button type="button" name="add" id="add"
                                                                class="btn btn-success">Add More</button></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group padding">
                                                <label class="form-label">Property Map (Optional)</label>
                                                @if (isset($data['record']->property_map) && !empty($data['record']->property_map))
                                                    <input type="file" name="property_map" class="dropify"
                                                        data-default-file="{{ asset('assets/images/properties/maps/' . $data['record']->property_map) }}"
                                                        data-height="180" />
                                                @else
                                                    <input type="file" name="property_map" class="dropify notrequired"
                                                        data-default-file="" data-height="180" />
                                                @endif
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group padding">
                                                <label class="form-label">Video (Optional)</label>
                                                <input class="form-control" placeholder="Enter Video URL"
                                                    name="video_link" type="url"
                                                    value="{{ $data['record']->video_link ?? '' }}">
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group padding">
                                                <h4 class="text-success">Seo Tags (Optional)</h4>
                                                <div class="row">
                                                    <div class="col-lg-6 form-group">
                                                        <label class="form-label">Meta Title (Optional)</label>
                                                        <input class="form-control notrequired" placeholder="Meta Title"
                                                            name="meta_title"
                                                            value="{{ $data['record']->meta_title ?? '' }}"
                                                            type="text">
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="form-label">Meta Keyword (Optional)</label>
                                                        <input class="form-control notrequired"
                                                            placeholder="Meta keywords" name="meta_keywords"
                                                            value="{{ $data['record']->meta_keywords ?? '' }}"
                                                            type="text">
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="form-label">Head Title (Optional)</label>
                                                        <input class="form-control notrequired" placeholder="Head Title"
                                                            name="head_title" value="{{ $data['record']->head ?? '' }}"
                                                            type="text">
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="form-label">Meta Description (Optional)</label>
                                                        <textarea class="form-control notrequired" placeholder="Meta Description" name="meta_description" rows="3"
                                                            spellcheck="false">{{ $data['record']->meta_description ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="divtext">
                                                {{-- Rent details --}}
                                                <div class="Rent msg"
                                                    style="background-color: #d9edf7;padding-top: 10px;padding-bottom: 2px;padding-left: 10px;">
                                                    <h6>RENTAL PRICE DETAILS</h6>
                                                </div>
                                                <p class="Rent msg form-label mt-2 padding">Minimum Contract Period:</p>
                                                <div class="Rent msg" style="display: flex;">
                                                    @if (isset($data['record']->rental_contact_period_length) && !empty($data['record']->rental_contact_period_length))
                                                        <select id="cars" class=" form-control"
                                                            name="rental_contact_period_length"
                                                            style="margin-right: 10px">
                                                            <option
                                                                value="{{ $data['record']->rental_contact_period_length }}">
                                                                {{ $data['record']->rental_contact_period_length }}
                                                            </option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    @else
                                                        <select id="cars" class=" form-control"
                                                            name="rental_contact_period_length"
                                                            style="margin-right: 10px">
                                                            <option value="">Please Select</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    @endif
                                                    @if (isset($data['record']->rental_contact_period) && !empty($data['record']->rental_contact_period))
                                                        <select id="cars" class="form-control"
                                                            name="rental_contact_period">
                                                            <option
                                                                value="{{ $data['record']->rental_contact_period }}">
                                                                {{ $data['record']->rental_contact_period }}</option>
                                                            <option value="year">Year</option>
                                                            <option value="month">Month</option>
                                                        </select>
                                                    @else
                                                        <select id="cars" class="form-control"
                                                            name="rental_contact_period">
                                                            <option value="">Please Select</option>
                                                            <option value="year">Year</option>
                                                            <option value="month">Month</option>
                                                        </select>
                                                    @endif
                                                </div>
                                                <div class="Rent msg form-group mb-3 col-12 padding">
                                                    <label for="price" class="form-label">Monthly Rent: </label>
                                                    <input class="form-control notrequired" placeholder=""
                                                        name="monthly_rent"
                                                        value="{{ $data['record']->monthly_rent ?? '' }}"
                                                        type="number">
                                                </div>
                                                <p class="Rent msg form-label mt-2 padding">Security Deposit</p>
                                                <div class="Rent msg form-group padding d-flex">
                                                    <input class="Rent msg form-control notrequired" placeholder=""
                                                        name="security_deposit" style="width: 35%"
                                                        value="{{ $data['record']->security_deposit ?? '' }}"
                                                        type="text">

                                                    <span class="Rent msg ml-3 mr-3 pt-2"><b>OR</b></span>
                                                    <input class="Rent msg form-control notrequired" placeholder=""
                                                        name="security_deposit_number_of_month" style="width: 34%"
                                                        value="{{ $data['record']->security_deposit_number_of_month ?? '' }}"
                                                        type="text">
                                                    <p class="Rent msg ml-3 mr-3 pt-2"> <b> number of month's rental
                                                            amount</b>
                                                    </p>
                                                </div>


                                                <p class="Rent msg form-label mt-2 padding">Advance Rent:</p>
                                                <div class="Rent msg form-group padding d-flex">
                                                    <input class="Rent msg form-control notrequired" placeholder=""
                                                        name="advance_rent" style="width: 35%"
                                                        value="{{ $data['record']->advance_rent ?? '' }}"
                                                        type="text">

                                                    <span class="Rent msg ml-3 mr-3 pt-2"><b>OR</b></span>
                                                    <input class="Rent msg form-control notrequired" placeholder=""
                                                        name="advance_rent_number_of_month" style="width: 34%"
                                                        value="{{ $data['record']->advance_rent_number_of_month ?? '' }}"
                                                        type="text">
                                                    <p class="Rent msg ml-3 mr-3 pt-2"> <b> number of month's rental
                                                            amount</b>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="col-lg-12">
                                                <h4 class="card-title"><span>Publish</span></h4>
                                                <div class="btn btn-list">
                                                    <button type="submit"
                                                        class="btn btn-primary user_form submit_button">Save
                                                    </button>
                                                    <button type="button" href="" class="btn btn-warning">Cancel
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12">
                                                    <label class="form-label">Status</label>
                                                    @if (isset($data['record']->property_status) && !empty($data['record']->property_status))
                                                        <select id="cars" class="form-control "
                                                            name="property_status">
                                                            <option value="{{ $data['record']->property_status }}">
                                                                {{ $data['record']->property_status }}</option>
                                                            <option value="preparing_selling">Preparing selling</option>
                                                            <option value="selling">Selling</option>
                                                            <option value="sold">Sold</option>
                                                            <option value="renting">Renting</option>
                                                            <option value="rented">Rented</option>
                                                            <option value="building">Building</option>
                                                        </select>
                                                    @else
                                                        <select id="cars" class="form-control "
                                                            name="property_status">
                                                            <option value="">Not available</option>
                                                            <option value="preparing_selling">Preparing selling</option>
                                                            <option value="selling">Selling</option>
                                                            <option value="sold">Sold</option>
                                                            <option value="renting">Renting</option>
                                                            <option value="rented">Rented</option>
                                                            <option value="building">Building</option>
                                                        </select>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12 form-group divscrole">
                                                    <label class="form-label">Category</label>
                                                    @foreach ($categories as $value)
                                                        <li class="no-border">
                                                            @if (!empty($data['record']->category))
                                                                <input type="radio" name="category"
                                                                    value="{{ $value->id }}"
                                                                    {{ $data['record']->category == $value->id ? 'checked' : '' }}
                                                                    id="{{ $value->id }}">
                                                                <label
                                                                    for="{{ $value->id }}">{{ $value->name }}</label>
                                                            @else
                                                                <input type="radio" name="category"
                                                                    value="{{ $value->id }}"
                                                                    id="{{ $value->id }}">
                                                                <label
                                                                    for="{{ $value->id }}">{{ $value->name }}</label>
                                                            @endif
                                                            <ul style="margin-left: 34px;margin-bottom: 0;">
                                                                @foreach ($value->subCategory as $sub_cat)
                                                                    <li>
                                                                        @if (!empty($data['record']->subcat_id))
                                                                            <input type="radio" name="subcat_id"
                                                                                value="{{ $sub_cat->id }}"
                                                                                {{ $data['record']->subcat_id == $sub_cat->id ? 'checked' : '' }}
                                                                                id="{{ $sub_cat->id }}">
                                                                            <label
                                                                                for="{{ $sub_cat->id }}">{{ $sub_cat->name }}</label>
                                                                        @else
                                                                            <input type="radio" name="subcat_id"
                                                                                value="{{ $sub_cat->id }}"
                                                                                id="{{ $sub_cat->id }}">
                                                                            <label
                                                                                for="{{ $sub_cat->id }}">{{ $sub_cat->name }}</label>
                                                                        @endif
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
                                                        <option value="null">Select a project</option>
                                                        @foreach ($project as $project)
                                                            <option value="{{ $project->id }}" <?php if (($data['record']->project_id ?? '') == $project->id) {
                                                                echo 'selected';
                                                            } ?>>
                                                                {{ $project->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12">
                                                    <label class="form-label">Agency</label>
                                                    <select id="cars" class="form-control" name="agency_id">
                                                        <option value="null">Select a Agency</option>
                                                        @foreach ($agency as $agency)
                                                            <option value="{{ $agency->id }}" <?php if (($data['record']->agency_id ?? '') == $agency->id) {
                                                                echo 'selected';
                                                            } ?>>
                                                                {{ $agency->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12 form-group padding">
                                                    <label class="form-label">Select City</label>
                                                    <select id="country-dd" class="form-control" name="city_name">
                                                        <option value="">Select City</option>
                                                        @foreach ($cities as $value)
                                                            <option value="{{ $value->id }}" <?php if (($data['record']->city_name ?? '') == $value->id) {
                                                                echo 'selected';
                                                            } ?>>
                                                                {{ $value->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12 form-group padding">
                                                    <label class="form-label">Select Area</label>
                                                    <select id="state-dd" class="form-control" name="area_id">
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
    <script type="text/javascript">
        $(document).ready(function() {
            $("#hide").click(function() {
                $(".divtext").hide();
            });
            $("#show").click(function() {
                $(".divtext").show();
            });

            $(".divtext").hide();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#country-dd').on('change', function() {
                var idCountry = this.value;
                $("#state-dd").html('');
                $.ajax({
                    url: "{{ url('admin/property/fetch-states') }}",
                    type: "POST",
                    data: {
                        city_id: idCountry,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#state-dd').html('<option value="">Select Area</option>');
                        $.each(result.areas, function(key, value) {
                            $("#state-dd").append('<option value="' + value
                                .id + '">' + value.areaname + '</option>');
                        });
                    }
                });
            });

        });
    </script>
    <script>
        $(document).ready(function() {
            // var postURL = "<?php echo url('admin/projects'); ?>";
            $.ajax({
                url: "{{ url('admin/get_fecilites') }}",
                type: "GET",
                dataType: 'json',
                success: function(result) {
                    caret(result.record);
                }
            });

            function caret(facilities) {
                var i = 1;
                $('#add').click(function() {
                    i++;
                    var selectfacilites = '<tr id="row' + i +
                        '" class="dynamic-added"><td><select  name="facility[]"  class="form-control name_list">';
                    facilities.map(function(item, index) {
                        selectfacilites += '<option value="' + item.name + '">' + item.name +
                            '</option>';
                    });

                    selectfacilites +=
                        '</select></td><td><input type="text" name="distance[]" placeholder="Distance in (KM)" class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
                        i + '" class="btn btn-danger btn_remove">X</button></td></tr>';
                    $('#dynamic_field').append(selectfacilites);
                });
            }
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
    <script>
        $(document).off("keyup", "#title").on("keyup", "#title", function(event) {
            var page_title = $(this).val();
            $("#url_slug").val(page_title.toLowerCase().replace(/ /g, '_').replace(/[^\w-]+/g, ''));
        });
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize"
        async defer></script>
    <script>
        function initialize() {
            var address = (document.getElementById('pac-input'));
            var autocomplete = new google.maps.places.Autocomplete(address);
            autocomplete.setTypes(['geocode']);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    return;
                }

                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }
                /*********************************************************************/
                /* var address contain your autocomplete address *********************/
                /* place.geometry.location.lat() && place.geometry.location.lat() ****/
                /* will be used for current address latitude and longitude************/
                /*********************************************************************/
                document.getElementById('lat').value = place.geometry.location.lat();
                document.getElementById('long').value = place.geometry.location.lng();
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection
@section('js')
    <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    @include('admin.layouts.select2JsFiles')
    @include('admin.layouts.fancy-uploader-js')
    @include('admin.layouts.tinymce-js')
    @include('admin.layouts.templateJquery')
    <script src="{{ URL::asset('assets/themeJquery/property/jquery.js') }}"></script>
@endsection
