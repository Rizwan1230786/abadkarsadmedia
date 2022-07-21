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
                            <form class="validationForm formSubmited" id="myForm" enctype="multipart/form-data"
                                method="POST" action="{{ $url }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data['updateId'] ?? 0 }}">
                                <div class="card-body pb-2">
                                    <div class="row row-sm">
                                        <div class="col-9">
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Title</label>
                                                <input class="form-control txtPageTitle" id="title" placeholder="Title"
                                                    name="title" value="{{ $data['record']->title ?? '' }}">
                                            </div>
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Url Slug</label>
                                                <input class="form-control txtPageUrl" placeholder="Url Slug" id="url_slug"
                                                    name="url_slug" value="{{ $data['record']->url_slug ?? '' }}"
                                                    type="text" readonly>
                                            </div>
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control notrequired" placeholder="Meta Description" name="detail" rows="3"
                                                    spellcheck="false">{{ $data['record']->detail ?? '' }}</textarea>
                                            </div>
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Content</label>
                                                <textarea class="ckeditor form-control disc_2 notrequired" name="page_content" id="disc_2">{{ $data['record']->page_content ?? '' }}</textarea>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group padding">
                                                <label class="form-label">Image</label>
                                                @if (isset($data['record']->image) && !empty($data['record']->image))
                                                    <input type="file" name="image" class="dropify"
                                                        data-default-file="{{ asset('assets/images/projects/' . $data['record']->image) }}"
                                                        data-height="180" />
                                                @else
                                                    <input type="file" name="image" class="dropify notrequired"
                                                        data-default-file="" data-height="180" />
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="files" class="form-label">Upload Multiple Project
                                                    Images:</label>
                                                <input type="file" name="images[]" class="form-control" accept="image/*"
                                                    multiple style="padding-bottom: 40px">
                                                @if (isset($data['record']->id) && !empty($data['record']->id))
                                                    @foreach ($multiimages as $multi)
                                                        @if (isset($data['record']->id) && $data['record']->id == $multi->projects_id)
                                                            <input type="hidden" name="project_id[]"
                                                                value="{{ $multi->projectsimagesid }}">
                                                            <img src="{{ asset('assets/images/projects/multipleimages/' . $multi->image) }}"
                                                                alt="" width="60">
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>



                                            <div class="col-12 form-group padding">
                                                <label class="form-label">Location</label>
                                                <input class="form-control notrequired" placeholder="Location"
                                                    name="location" id="pac-input" step="0.01" type="text"
                                                    value="{{ $data['record']->title ?? '' }}">
                                            </div>
                                            <div class="row">
                                                <div class="col-6 form-group">
                                                    <label class="form-label">Latitude</label>
                                                    <input class="form-control notrequired" placeholder="Ex: 1.462260"
                                                        name="latitude" step="0.01" id="lat"
                                                        value="{{ $data['record']->latitude ?? '' }}" type="decmial">
                                                    <a class="form-control notrequired" style="background-color: #d9edf7"
                                                        href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                        target="_blank" rel="nofollow">
                                                        Go here to get Latitude from address. </a>
                                                </div>
                                                <div class="col-6  form-group">
                                                    <label class="form-label">Longitude</label>
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
                                                    <label class="form-label">Number blocks</label>
                                                    <input class="form-control notrequired" placeholder="Number blocks"
                                                        name="num_of_blocks"
                                                        value="{{ $data['record']->num_of_blocks ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Number floors</label>
                                                    <input class="form-control notrequired" placeholder="Number floors"
                                                        name="num_of_floors"
                                                        value="{{ $data['record']->num_of_floors ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Number flats</label>
                                                    <input class="form-control notrequired" placeholder="Number flats"
                                                        name="num_of_flats"
                                                        value="{{ $data['record']->num_of_flats ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Lowest price</label>
                                                    <input class="form-control notrequired" placeholder="Lowest price"
                                                        name="lowest_price"
                                                        value="{{ $data['record']->lowest_price ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Max price</label>
                                                    <input class="form-control notrequired" placeholder="Max price"
                                                        name="max_price" value="{{ $data['record']->max_price ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-4 form-group">
                                                    <label class="form-label">Currency</label>
                                                    @if (isset($data['record']->currrncy_name) && !empty($data['record']->currrncy_name))
                                                        <select id="cars" class="form-control" name="currency_name">
                                                            <option value="{{ $data['record']->currrncy_name }}">
                                                                {{ $data['record']->currrncy_name }}</option>
                                                            <option value="">--select--</option>
                                                            <option value="Rs">PKR</option>
                                                            <option value="$">USA</option>
                                                        </select>
                                                    @else
                                                        <select id="cars" required class="form-control"
                                                            name="currency_name">
                                                            <option value="Rs">PKR</option>
                                                            <option value="$">USA</option>
                                                        </select>
                                                    @endif
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label class="form-label">Commercial Area</label>
                                                    <input class="form-control notrequired"
                                                        placeholder="size in marla (min)" name="commercial_area_min"
                                                        value="{{ $data['record']->commercial_area_min ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label class="form-label">Commercial Area</label>
                                                    <input class="form-control notrequired"
                                                        placeholder="size in marla (max)" name="commercial_area_max"
                                                        value="{{ $data['record']->commercial_area_max ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label class="form-label">Residential Area</label>
                                                    <input class="form-control notrequired"
                                                        placeholder="size in marla (min)" name="residential_area_min"
                                                        value="{{ $data['record']->residential_area_min ?? '' }}"
                                                        type="number">
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label class="form-label">Residential Area</label>
                                                    <input class="form-control notrequired"
                                                        placeholder="size in marla (max)" name="residential_area_max"
                                                        value="{{ $data['record']->residential_area_max ?? '' }}"
                                                        type="number">
                                                </div>
                                            </div>
                                            <div class="col-12 form-group padding">
                                                <label class="form-label">Feature</label>
                                                <?php
                                            if (isset($data['record']) && !empty($data['record'])) { ?>
                                                @foreach ($feature as $feature)
                                                    <label
                                                        style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('feature[]', $feature->id, in_array($feature->id, $features_projects) ? true : false, ['class' => 'name']) }}
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

                                            <div class="col-lg-12 col-sm-12 form-group padding">
                                                <label class="form-label">Project Map</label>
                                                @if (isset($data['record']->project_map) && !empty($data['record']->project_map))
                                                    <input type="file" name="project_map" class="dropify"
                                                        data-default-file="{{ asset('assets/images/projects/maps/' . $data['record']->project_map) }}"
                                                        data-height="180" />
                                                @else
                                                    <input type="file" name="project_map" class="dropify notrequired"
                                                        data-default-file="" data-height="180" />
                                                @endif
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group padding">
                                                <label class="form-label">Price Plan</label>
                                                @if (isset($data['record']->price_plan) && !empty($data['record']->price_plan))
                                                    <input type="file" name="price_plan" class="dropify"
                                                        data-default-file="{{ asset('assets/images/projects/price/' . $data['record']->price_plan) }}"
                                                        data-height="180" />
                                                @else
                                                    <input type="file" name="price_plan" class="dropify notrequired"
                                                        data-default-file="" data-height="180" />
                                                @endif
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group padding">
                                                <label class="form-label">Video</label>
                                                <input class="form-control" placeholder="Enter Video URL" name="video"
                                                    type="url" value="{{ $data['record']->video ?? '' }}">
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group padding">
                                                <h4 class="text-success">Seo Tags</h4>
                                                <div class="row">
                                                    <div class="col-lg-6 form-group">
                                                        <label class="form-label">Meta Title</label>
                                                        <input class="form-control notrequired" placeholder="Meta Title"
                                                            name="meta_title"
                                                            value="{{ $data['record']->meta_title ?? '' }}"
                                                            type="text">
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="form-label">Meta Keyword</label>
                                                        <input class="form-control notrequired"
                                                            placeholder="Meta keywords" name="meta_keywords"
                                                            value="{{ $data['record']->meta_keywords ?? '' }}"
                                                            type="text">
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="form-label">Head Title</label>
                                                        <input class="form-control notrequired" placeholder="Head Title"
                                                            name="head_title" value="{{ $data['record']->head ?? '' }}"
                                                            type="text">
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="form-label">Meta Description</label>
                                                        <textarea class="form-control notrequired" placeholder="Meta Description" name="meta_description" rows="3"
                                                            spellcheck="false">{{ $data['record']->meta_description ?? '' }}</textarea>
                                                    </div>
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
                                                    <button type="button" href="{{ route('admin:facilities') }}"
                                                        class="btn btn-warning">Cancel </button>
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
                                                                                {{ $data['record']->subcat_id == $value->id ? 'checked' : '' }}
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
                                                <div class="col-lg-12 form-group">
                                                    <label class="form-label">Investor</label>
                                                    <select id="cars" class="form-control" name="investor_name">
                                                        <option value="">--select--</option>
                                                        @foreach ($investor as $investor)
                                                            <option value="{{ $investor->name }}" <?php if (($data['record']->investor_name ?? '') == $investor->name) {
                                                                echo 'selected';
                                                            } ?>>
                                                                {{ $investor->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12">
                                                    <label class="form-label">Status</label>
                                                    @if (isset($data['record']->status) && !empty($data['record']->status))
                                                        <select id="cars" class="form-control " name="status">
                                                            <option value="{{ $data['record']->status }}">
                                                                {{ $data['record']->status }}</option>
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
                                                    <input class="form-control notrequired" placeholder="Finish date"
                                                        name="expire_date"
                                                        value="{{ $data['record']->expire_date ?? '' }}"
                                                        type="date">
                                                </div>
                                            </div>
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12">
                                                    <label class="form-label">Open sell date</label>
                                                    <input class="form-control notrequired" placeholder="Open sell date"
                                                        name="Open_sell_date"
                                                        value="{{ $data['record']->Open_sell_date ?? '' }}"
                                                        type="date">
                                                </div>
                                            </div>
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
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
                                                        @foreach ($cities as $data)
                                                            <option value="{{ $data->id }}">
                                                                {{ $data->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="pb-4 mt-5 pt-2" style="background-color: #d9edf7">
                                                <div class="col-lg-12 form-group padding">
                                                    <label class="form-label">Select Area</label>
                                                    <select id="state-dd" class="form-control" name="area">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding: 5px;">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Search Tags</label>
                                                        <ul class="pro-feature-add pl-0">
                                                            <li class="fl-wrap filter-tags clearfix">
                                                                <div class="filter-tags-wrap">
                                                                    @if (isset($data['record']) && !empty($data['record']))
                                                                        @foreach ($tag as $value)
                                                                            <label
                                                                                style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('tags[]', $value->id, in_array($value->id, $tag_project) ? true : false, ['class' => 'name']) }}
                                                                                {{ $value->name }}</label>
                                                                        @endforeach
                                                                    @else
                                                                        @foreach ($tag as $value)
                                                                            <label
                                                                                style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('tags[]', $value->id, false, ['class' => 'seting']) }}
                                                                                {{ $value->name }}</label>
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                            </li>

                                                        </ul>
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
        $(document).ready(function() {
            $('#country-dd').on('change', function() {
                var idCountry = this.value;
                $("#state-dd").html('');
                $.ajax({
                    url: "{{ url('admin/fetch-states') }}",
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
    <script src="{{ URL::asset('assets/themeJquery/projects/jquery.js') }}"></script>
@endsection
