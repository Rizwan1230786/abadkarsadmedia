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
                            $url = route('admin:properties_update', [$data['updateId'] ?? 0],);
                        } else {
                            $url = route('admin:properties_submit');
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
                                            <input class="form-control notrequired" id="title" placeholder="Title" name="name" value="{{ $data['record']->name ?? '' }}" type="text">
                                        </div>
                                        <div class="col-lg-12 form-group padding">
                                            <label class="form-label">Url Slug</label>
                                            <input class="form-control txtPageUrl" placeholder="Url Slug" id="url_slug" name="url_slug" value="{{ $data['record']->url_slug ?? '' }}" type="text" readonly>
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
                                            <textarea class="form-control notrequired" placeholder="Short Description" name="descripition" rows="5" spellcheck="false">{{ $data['record']->descripition ?? '' }}</textarea>
                                        </div>
                                        <div class="col-lg-12 form-group padding">
                                            <label class="form-label">Content</label>
                                            <textarea class="ckeditor form-control disc_2 notrequired" name="content" id="disc_2">{{ $data['record']->content ?? '' }}</textarea>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 form-group padding">
                                            <label class="form-label">Image</label>
                                            @if(isset($data['record']->image) && !empty($data['record']->image))
                                            <input type="file" name="image" class="dropify" data-default-file="{{asset('assets/images/properties/'.$data['record']->image)}}" data-height="180" />
                                            @else
                                            <input type="file" name="image" class="dropify notrequired" data-default-file="" data-height="180" />
                                            @endif
                                        </div>
                                        <div class="form-group">

                                            <label for="files" class="form-label">Upload Multiple Property Images:</label>
                                            <input type="file" name="images[]" class="form-control dropify" accept="image/*" multiple style="padding-bottom: 40px">
                                            @if(isset($data['record']->id) && !empty($data['record']->id))
                                            @foreach($multiimages as $multi)
                                            @if(isset($data['record']->id) && $data['record']->id == $multi->property_id)
                                            <input type="hidden" name="property_id[]" value="{{$multi->propertiesimagesid}}">
                                            <img src="{{asset('assets/images/properties/multipleimages/'.$multi->image)}}" alt="" width="60" height="60">
                                            @endif
                                            @endforeach
                                            @endif
                                        </div>
                                        {{-- <div class="col-lg-12 form-group padding">
                                            <label class="form-label">Select City</label>
                                            <select id="cars" class="form-control" name="city_name">
                                                <option value="">--select--</option>
                                                @foreach($city as $city)
                                                <option value="{{$city->name}}" <?php if (($data['record']->city_name ?? '') == $city->name) {
                                                                                    echo 'selected';
                                                                                } ?>>{{$city->name}}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                        <div class="col-lg-12 form-group padding">
                                            <label class="form-label">Select City</label>
                                            <select  id="country-dd" class="form-control" name="city_name">
                                                <option value="">Select City</option>
                                                @foreach ($cities as $data)
                                                <option value="{{$data->id}}"<?php if (($data['record']->city_name ?? '') == $data->name) {
                                                        echo 'selected';
                                                    } ?>>
                                                    {{$data->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-12 form-group padding">
                                            <label class="form-label">Select Area</label>
                                            <select id="state-dd" class="form-control" name="area">
                                            </select>
                                        </div>
                                        <div class="col-12 form-group padding">
                                            <label class="form-label">Property Location</label>
                                            <input class="form-control notrequired" placeholder="Property Location" name="location" value="{{ $data['record']->property_location ?? '' }}" type="text">
                                        </div>
                                        <div class="row">
                                            <div class="col-6 form-group">
                                                <label class="form-label">Latitude</label>
                                                <input class="form-control notrequired" placeholder="Ex: 1.462260" name="latitude" value="{{ $data['record']->latitude ?? '' }}" type="decimal">
                                                <a class="form-control notrequired" style="background-color: #d9edf7" href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank" rel="nofollow">
                                                    Go here to get Latitude from address. </a>
                                            </div>
                                            <div class="col-6  form-group">
                                                <label class="form-label">Longitude</label>
                                                <input class="form-control notrequired" placeholder="Ex: 103.812530" name="longitude" value="{{ $data['record']->longitude ?? '' }}" type="decimal">
                                                <a class="form-control notrequired" style="background-color: #d9edf7" href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank" rel="nofollow">
                                                    Go here to get Longitude from address. </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number bedrooms</label>
                                                <input class="form-control notrequired" placeholder="Number bedrooms" value="{{ $data['record']->number_of_bedrooms ?? '' }}" name="number_of_bedrooms" value="{{ $data['record']->bedrooms ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number bathrooms</label>
                                                <input class="form-control notrequired" placeholder="Number bathrooms" value="{{ $data['record']->number_of_bathrooms ?? '' }}" name="number_of_bathrooms" value="{{ $data['record']->bathrooms ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Number floors</label>
                                                <input class="form-control notrequired" placeholder="Number floors" value="{{ $data['record']->number_of_floors ?? '' }}" name="number_of_floors" value="{{ $data['record']->floors ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Square (m²)</label>
                                                <input class="form-control notrequired" placeholder="Square :unit" name="square" value="{{ $data['record']->square ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Marala</label>
                                                <input class="form-control notrequired" placeholder="Marala" name="marala" value="{{ $data['record']->marala ?? '' }}" type="number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="form-label">Currency</label>
                                                @if(isset($data['record']->currency) && !empty($data['record']->currency))
                                                <select id="cars" class="form-control" name="currency">
                                                    <option value="{{$data['record']->currency}}">{{$data['record']->currency}}</option>
                                                    <option value="">--select--</option>
                                                    <option value="Rs">PKR</option>
                                                    <option value="$">USA</option>
                                                </select>
                                                @else
                                                <select id="cars" required class="form-control" name="currency">
                                                    <option value="Rs">PKR</option>
                                                    <option value="$">USA</option>
                                                </select>
                                                @endif
                                            </div>
                                            <div class="form-group mb-3 col-md-4">
                                                <label for="price" class="form-label">Price</label>
                                                <input class="form-control notrequired" placeholder="Price" name="price" value="{{ $data['record']->price ?? '' }}" type="number">
                                            </div>

                                        </div>
                                        <div class="col-12 form-group padding">
                                            <label class="form-label">Feature</label>
                                            <?php
                                            if (isset($data['record']) && !empty($data['record'])) { ?>
                                                @foreach($feature as $feature)
                                                <label style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('feature[]', $feature->id, in_array($feature->id, $features_property) ? true : false, array('class' => 'name')) }}
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
                                        <div class="col-lg-12 col-sm-12 form-group padding">
                                            <label class="form-label">Project Map</label>
                                            @if(isset($data['record']->property_map) && !empty($data['record']->property_map))
                                            <input type="file" name="property_map" class="dropify" data-default-file="{{asset('assets/images/properties/maps/'.$data['record']->property_map)}}" data-height="180" />
                                            @else
                                            <input type="file" name="property_map" class="dropify notrequired" data-default-file="" data-height="180" />
                                            @endif
                                        </div>
                                        <div class="col-lg-12 col-sm-12 form-group padding">
                                            <label class="form-label">Video</label>
                                            <input class="form-control" placeholder="Enter Video URL" name="video" type="url" value="{{ $data['record']->video ?? '' }}">

                                            {{-- @if(isset($data['record']->video) && !empty($data['record']->video))
                                            <input type="file" name="video" class="dropify" data-default-file="{{asset('videos/projects'.$data['record']->video)}}" data-height="180" />
                                            @else
                                            <input type="file" name="video" class="dropify notrequired" data-default-file="" data-height="180" />
                                            @endif --}}
                                        </div>
                                        <div class="col-lg-12 col-sm-12 form-group padding">
                                            <h4 class="text-success">Seo Tags</h4>
                                            <div class="row">
                                                <div class="col-lg-6 form-group">
                                                    <label class="form-label">Meta Title</label>
                                                    <input class="form-control notrequired" placeholder="Meta Title" name="meta_title" value="{{ $data['record']->meta_title ?? '' }}" type="text">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label class="form-label">Meta Keyword</label>
                                                    <input class="form-control notrequired" placeholder="Meta keywords" name="meta_keywords" value="{{ $data['record']->meta_keywords ?? '' }}" type="text">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label class="form-label">Head Title</label>
                                                    <input class="form-control notrequired" placeholder="Head Title" name="head_title" value="{{ $data['record']->head ?? '' }}" type="text">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label class="form-label">Meta Description</label>
                                                    <textarea class="form-control notrequired" placeholder="Meta Description" name="meta_description" rows="3" spellcheck="false">{{ $data['record']->meta_description ?? '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="col-lg-12">
                                            <h4 class="card-title"><span>Publish</span></h4>
                                            <div class="btn btn-list">
                                                <button type="submit" class="btn btn-primary user_form submit_button">Save
                                                </button>
                                                <button type="button" href="" class="btn btn-warning">Cancel </button>
                                            </div>
                                        </div>
                                        <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                            <div class="col-lg-12">
                                                <label class="form-label">Status</label>
                                                @if(isset($data['record']->property_status) && !empty($data['record']->property_status))
                                                <select id="cars" class="form-control " name="property_status">
                                                    <option value="{{$data['record']->property_status}}">{{$data['record']->property_status}}</option>
                                                    <option value="preparing_selling">Preparing selling</option>
                                                    <option value="selling">Selling</option>
                                                    <option value="sold">Sold</option>
                                                    <option value="renting">Renting</option>
                                                    <option value="rented">Rented</option>
                                                    <option value="building">Building</option>
                                                </select>
                                                @else
                                                <select id="cars" class="form-control " name="property_status">
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
                                            <div class="col-lg-12">
                                                <label class="form-label">Moderation status</label>
                                                <select id="cars" class="form-control " name="moderation_status">
                                                    <option value="approved">Approved</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="rejected">Rejected</option>
                                                </select>
                                            </div>
                                        </div>
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
                                        {{-- <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                            <div class="col-lg-12">
                                                <label class="form-label">Agent</label>
                                                <select id="cars" class="form-control" name="agent_id">
                                                    <option value="null">Select a Agent</option>
                                                    @foreach ($agent as $agent)
                                                    <option value="{{ $agent->id }}" <?php if (($data['record']->agent_id ?? '') == $agent->id) {
                                                                                            echo 'selected';
                                                                                        } ?>>
                                        {{ $agent->name }}
                                        </option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div> --}}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
            $('#country-dd').on('change', function () {
                var idCountry = this.value;
                $("#state-dd").html('');
                $.ajax({
                    url: "{{url('admin/property/fetch-states')}}",
                    type: "POST",
                    data: {
                        city_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state-dd').html('<option value="">Select Area</option>');
                        $.each(result.areas, function (key, value) {
                            $("#state-dd").append('<option value="' + value
                                .areaname + '">' + value.areaname + '</option>');
                        });
                    }
                });
            });

        });
</script>
<script>
    $(document).off("keyup", "#title").on("keyup", "#title", function(event) {
        var page_title = $(this).val();
        $("#url_slug").val(page_title.toLowerCase().replace(/ /g, '_').replace(/[^\w-]+/g, ''));
    });
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
