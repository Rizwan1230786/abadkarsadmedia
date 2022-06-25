@extends('front.layout')
@section('css')
@include('admin.layouts.select2CssFiles')
@include('admin.layouts.fancy-uploader-css')
@endsection
@section('body')
<style>
    .radio_container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #cecece;
        height: 28px;
        box-shadow: inset 0.5px 0.5px 2px 0 rgb(0 0 0 / 15%);
    }

    .radio {
        appearance: none !important;
        display: none !important;
    }

    .lable {
        font-size: 14px !important;
        font-weight: 550 !important;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: inherit;
        background-image: linear-gradient(0deg, #a7a1a161, transparent);
        width: 95px;
        text-align: center;
        transition: linear 0.3s;
        color: #6e6e6edd;
    }

    .radio:checked+label {
        background-color: #FF385C;
        color: #f1f3f5;
        font-weight: 900;
        transition: 0.3s;
    }

    .lable1 {
        font-size: 14px !important;
        font-weight: 550 !important;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: inherit;
        background-image: linear-gradient(0deg, #a7a1a161, transparent);
        width: 95%;
        text-align: center;
        transition: linear 0.3s;
        color: #6e6e6edd;
    }

    .padding0 {
        padding-right: 0px;
        padding-left: 0px;
    }

    .lable1 {
        padding-left: 15px;
        text-align: left;
    }
</style>

<body class="homepage-9 hp-6 homepage-1 inner-pages">
    @section('main')
    <section class="user-page section-padding pt-5" style="margin-top: 0px;">
        <div class="container">
            <div class="row">
                <form action="{{ url('add-property/submit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif

                        <div class="single-add-property">
                            <h3>property Location</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                        <label class="form-label">Purpose:<span style="color: red"> *
                                            </span></label>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="radio" name="property_purpose" id="one" value="rent">
                                            <label for="one" class="lable radio_container" style="margin-left: 5px;">For Rent</label>
                                            <input type="radio" class="radio" name="property_purpose" id="two" value="sale">
                                            <label for="two" class="lable radio_container">For Sale</label>
                                        </div>
                                        @if ($errors->has('property_purpose'))
                                        <div class="error">{{ $errors->first('property_purpose') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-lg-8 col-md-12 dropdown faq-drop">
                                        <div class="property-form-group">
                                            <div class="col-12 form-group padding">
                                                <div class="form-check form-check-inline">
                                                    <label style="margin-right: 5px;" class="form-label">Property Type:<span style="color: red"> *
                                                        </span></label>
                                                    @foreach($category as $val)
                                                    <input type="radio" class="form-switch1 radio cat" data-id="{{$val->id}}" name="category_id" id="{{$val->id}}" type="{{$val->id}}" value="{{$val->id}}">
                                                    <label for="{{$val->id}}" class="lable radio_container">{{$val->name}}</label>
                                                    @endforeach
                                                    <!-- <input type="radio" class="form-switch1 radio" data-id="b" name="Homes" id="four">
                                                    <label for="four" class="lable radio_container">Plots</label>
                                                    <input type="radio" class="form-switch1 radio" data-id="c" name="Homes" id="five">
                                                    <label for="five" class="lable radio_container" style="width: 100px;">Commercials</label> -->
                                                    {{-- <select id="cars" class="form-control" name="type">
                                                    <option value="rent">Rent</option>
                                                    <option value="sale">Sale</option>
                                                </select> --}}
                                                </div>
                                                @if ($errors->has('category_id'))
                                                <div class="error">{{ $errors->first('category_id') }}</div>
                                                @endif
                                            </div>
                                            <div class="row cat_data" style="margin-left: 20px;">
                                            </div>
                                            @if ($errors->has('subcat_id'))
                                            <div class="error">{{ $errors->first('subcat_id') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Select City</label>
                                            <select id="country-dd" class="form-control" name="city_name">
                                                <option value="">Select City</option>
                                                @foreach ($city as $value)
                                                <option value="{{ $value->id }}">
                                                    {{ $value->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('city_name'))
                                            <div class="error">{{ $errors->first('city_name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <p class="no-mb first" style="margin-bottom: 4px;">
                                            <label for="location">Location</label>
                                            <input type="text" value="{{ old('location') }}" name="location" step="0.01" placeholder="Enter location here" id="pac-input">
                                        </p>
                                    </div>
                                    <div class="lat col-lg-2 col-md-12 d-none">
                                        <p class="no-mb first" style="margin-bottom: 4px;">
                                            <label for="location">Latitude</label>
                                            <input type="text" value="{{ old('latitude') }}" name="latitude" step="0.01" id="lat">
                                        </p>
                                    </div>
                                    <div class="lat col-lg-2 col-md-12 d-none">
                                        <p class="no-mb first" style="margin-bottom: 4px;">
                                            <label for="location">Longitutde</label>
                                            <input type="text" value="{{ old('longitude') }}" name="longitude" step="0.01" id="long">
                                        </p>
                                    </div>
                                    <div class="showarea col-lg-4 col-md-12 d-none">
                                        <div class="form-group">
                                            <label class="form-label">Select Area</label>
                                            <select id="state-dd" class="form-control" name="area_id">
                                                <option value="">Select from list</option>
                                            </select>
                                            @if ($errors->has('area_id'))
                                            <div class="error">{{ $errors->first('area_id') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-add-property">
                                <h3>Add a Property</h3>
                                <div class="property-form-group">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="margin-bottom: 4px;">
                                                    <label for="title">Property Title</label>
                                                    <input type="text" name="title" value="{{ old('title') }}" id="title" placeholder="Enter your property title">
                                                    <input class="form-control txtPageUrl" placeholder="Url Slug" id="url_slug" name="url_slug" value="{{ $data['record']->url_slug ?? '' }}" type="hidden" readonly>
                                                </p>
                                                @if ($errors->has('title'))
                                                <div class="error" style="position: absolute; right: 10px;">
                                                    {{ $errors->first('title') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="margin-bottom: 3px;">
                                                    <label for="description">Property Description</label>
                                                    <textarea id="description" name="description" placeholder="Describe about your property">{{ old('description') }}</textarea>
                                                </p>
                                                @if ($errors->has('description'))
                                                <div class="error" style="position: absolute; right: 10px;">
                                                    {{ $errors->first('description') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 35px;">
                                            <!-- <div class="col-lg-4 col-md-12">
                                                                            <div class="col-lg-12 form-group padding">
                                                                                <select class="form-control" style="display: block;" name="subcat">
                                                                                </select>
                                                                            </div>
                                                                        </div> -->
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p class="no-mb">
                                                    <label for="price">Front Dimension: (FT)</label>
                                                    <input style="border-radius: 5px;" type="text" value="{{ old('price') }}" class="numonly" oninput="return onlynum()" name="front_dim" placeholder="" id="price f1qs3">
                                                </p>
                                                @if ($errors->has('front_dim'))
                                                <div class="error">{{ $errors->first('front_dim') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p class="no-mb" style="margin-bottom: 4px;">
                                                    <label for="price">Back Dimension: (FT)</label>
                                                    <input type="text" value="{{ old('price') }}" class="numonly" oninput="return onlynum()" name="back_dim" placeholder="" id="back_dim">
                                                </p>
                                                @if ($errors->has('back_dim'))
                                                <div class="error">{{ $errors->first('back_dim') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p class="no-mb" style="margin-bottom: 4px;">
                                                    <label for="price">Land Area:</label>
                                                    <input type="text" class="" value="{{ old('price') }}" name="land_area" placeholder="" id="price">
                                                </p>
                                                @if ($errors->has('land_area'))
                                                <div class="error">{{ $errors->first('land_area') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Unit:</label>
                                                    <select id="cars" class="form-control" name="unit" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                                        <option value="">Select unit</option>
                                                        <option value="square feet">Square feet</option>
                                                        <option value="square yard">Square yard</option>
                                                        <option value="square meter">Square meter</option>
                                                        <option value="marla">Marla</option>
                                                        <option value="kanal">Kanal</option>
                                                    </select>
                                                    @if ($errors->has('unit'))
                                                    <div class="error">{{ $errors->first('unit') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p class="no-mb" style="margin-bottom: 4px;">
                                                    <label for="price">All Inclusive Price: (PKR)</label>
                                                    <input type="text" class="numonly" oninput="return onlynum()" value="{{ old('price') }}" name="price" placeholder="PKR" id="price">
                                                </p>
                                                @if ($errors->has('price'))
                                                <div class="error">{{ $errors->first('price') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Expires After:</label>
                                                    <select id="cars" class="form-control" name="is_expired">
                                                        <option value="1">1 Month</option>
                                                        <option value="3">3 Months</option>
                                                        <option value="6">6 Months</option>
                                                    </select>
                                                    @if ($errors->has('is_expired'))
                                                    <div class="error">{{ $errors->first('is_expired') }}
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 no-mb2">
                                                <p class="no-mb d-none" style="margin-bottom: 4px;">
                                                    <label for="price">Bedrooms:</label>
                                                    <input type="text" class="numonly" oninput="return onlynum()" value="{{ old('number_of_bedrooms') }}" name="number_of_bedrooms" placeholder="Number Of Bedrooms..." id="price">
                                                </p>
                                                @if ($errors->has('number_of_bedrooms'))
                                                <div class="error">{{ $errors->first('number_of_bedrooms') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-12 no-mb2">
                                                <p class="no-mb  d-none" style="margin-bottom: 4px;">
                                                    <label for="price">Bathrooms:</label>
                                                    <input type="text" class="numonly" oninput="return onlynum()" value="{{ old('number_of_bathrooms') }}" name="number_of_bathrooms" placeholder="Number Of Bathrooms..." id="price">
                                                </p>
                                                @if ($errors->has('number_of_bathrooms'))
                                                <div class="error">{{ $errors->first('number_of_bathrooms') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-12 no-mb2">
                                                <p class="no-mb  d-none" style="margin-bottom: 4px;">
                                                    <label for="price">Floors:</label>
                                                    <input type="text" class="numonly" oninput="return onlynum()" value="{{ old('number_of_floors') }}" name="number_of_floors" placeholder="Number Of Floors..." id="price">
                                                </p>
                                                @if ($errors->has('number_of_floors'))
                                                <div class="error">{{ $errors->first('number_of_floors') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="single-add-property">
                                <h3>property Media</h3>
                                <div class="property-form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="file" name="image[]" class="dropify notrequired" data-default-file="" data-height="180" multiple />
                                            @if ($errors->has('image'))
                                            <div class="error">{{ $errors->first('image') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <p class="no-mb" style="margin-bottom: 4px;">
                                                <label for="price">Video Link:</label>
                                                <input type="text" class="" value="{{ old('video_link') }}" name="video_link" placeholder="Youtube video link..." id="price">
                                            </p>
                                            @if ($errors->has('video_link'))
                                            <div class="error">{{ $errors->first('video_link') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-add-property">
                                <h3>Property Features</h3>
                                <div class="property-form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="pro-feature-add pl-0">
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="filter-tags-wrap">
                                                        @foreach ($feature as $feature)
                                                        <label style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('feature[]', $feature->id, false, ['class' => 'seting']) }}
                                                            {{ $feature->name }}</label>
                                                        @endforeach
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-add-property">
                                <h3>Contact Information</h3>
                                <div class="property-form-group">
                                    <div class="col-12 form-group padding">
                                        <label class="form-label">Membership Status: </label>
                                        <input type="radio" class="form-switch" name="colorCheckbox" value="red" data-id="a" checked style="margin-left: 10px;">
                                        <label for="Sale">Existing Member</label>
                                        <input type="radio" class="form-switch" name="colorCheckbox" value="green" data-id="b" style="margin-left: 10px;">
                                        <label for="Rent">New Member (Free)</label>

                                        {{-- <select id="cars" class="form-control" name="type">
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sale</option>
                                    </select> --}}
                                    </div>
                                    <div class="row form form-b">
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="con-name">First Name</label>
                                                <input type="text" value="{{ old('firstname') }}" placeholder="Enter Your Name" id="con-name" name="firstname">
                                                @if ($errors->has('firstname'))
                                            <div class="error">{{ $errors->first('firstname') }}</div>
                                            @endif
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="con-user">Last Name</label>
                                                <input type="text" value="{{ old('lastname') }}" placeholder="Enter Your Username" id="con-user" name="lastname">
                                                @if ($errors->has('lastname'))
                                            <div class="error">{{ $errors->first('lastname') }}</div>
                                            @endif
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb first">
                                                <label for="con-email">Email</label>
                                                <input type="email" placeholder="Enter Your Email" id="con-email" name="email">
                                                @if ($errors->has('email'))
                                            <div class="error">{{ $errors->first('email') }}</div>
                                            @endif
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12 Rent msg">
                                            <p class="no-mb last">
                                                <label for="phone">Phone</label>
                                            <div class="input-group mb-3">
                                                <input type="text" style="border: 1px solid #a9a9a991;height: 48px;" class="numonly form-control" oninput="return onlynum()" value="+92" placeholder="Enter Your Phone Number" id="account-phone" name="contact" aria-label="Phone">
                                            </div>
                                            @if ($errors->has('contact'))
                                            <div class="error">{{ $errors->first('contact') }}</div>
                                            @endif
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12 Rent msg">
                                            <p>
                                                <label for="con-name">Password</label>
                                                <input type="password" placeholder="Enter Your password" id="con-name" name="password">
                                                @if ($errors->has('password'))
                                            <div class="error">{{ $errors->first('password') }}</div>
                                            @endif
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12 Rent msg">
                                            <p>
                                                <label for="con-name">Security Code</label>
                                                <input class="form-control" placeholder="Enter Captcha here!" type="text" id="CaptchaCode" name="CaptchaCode">
                                                @if ($errors->has('CaptchaCode'))
                                            <div class="error">{{ $errors->first('CaptchaCode') }}
                                            </div>
                                            @endif
                                            {!! captcha_image_html('ContactCaptcha') !!}

                                            </p>
                                        </div>
                                    </div>
                                    <div class="row form form-a active">
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="con-user">Email</label>
                                                <input type="email" value="{{ old('email') }}" placeholder="Enter Your Email" id="con-user" name="email1">
                                                @if ($errors->has('email1'))
                                            <div class="error">{{ $errors->first('email1') }}</div>
                                            @endif
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p style="margin-bottom: 4px;">
                                                <label for="con-name">Password</label>
                                                <input type="password" placeholder="Enter Your password" id="con-name" name="password1">
                                                @if ($errors->has('password1'))
                                            <div class="error">{{ $errors->first('password1') }}</div>
                                            @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-property-button pt-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="prperty-submit-button">
                                                <button class="" style="box-shadow: 4px 4px 9px #0f0e0e70;border-radius:8px" type="submit">Submit Property</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </section>
    @endsection

</body>
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&callback=initialize&key=AIzaSyCYMlyYs_qCEHhoOsYq3QhRC_0v69Drnco"></script> -->

<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
<script src="{{asset('')}}js/mapInput.js"></script>
<script>
    $(function() {
        $(".numonly").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
</script>
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
            $('.lat').removeClass('d-none');
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
    function onlynum() {
        var fm = document.getElementById("form2");
        var ip = document.getElementById("num");
        var tag = document.getElementById("value");
        var res = ip.value;

        if (res != '') {
            if (isNaN(res)) {

                // Set input value empty
                ip.value = "";

                // Reset the form
                fm.reset();
                return false;
            } else {
                return true
            }
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.form-switch').on('change', function() {
            $('.form').removeClass('active');
            var formToShow = '.form-' + $(this).data('id');
            $(formToShow).addClass('active');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#country-dd').on('change', function() {
            var idCountry = this.value;
            $("#state-dd").parent().find('.nice-select .list').html('');
            $.ajax({
                url: "{{ url('admin/property/fetch-states') }}",
                type: "POST",
                data: {
                    city_id: idCountry,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('.showarea').removeClass('d-none');
                    $.each(result.areas, function(key, value) {
                        $("#state-dd").append(
                            '<option value="' + value
                            .id + '">' + value.areaname + '</option>'
                        );
                        $("#state-dd").parent().find('.nice-select .list').append(
                            '<li data-value="' + value
                            .id + '" class="option">' + value.areaname + '</li>'
                        );
                    });
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.cat').on('change', function() {
            var cat_id = this.value;
            if (cat_id == 7) {
                $('.no-mb2').removeClass('d-none');
                $('.no-mb').removeClass('d-none');
            } else {
                $('.no-mb2').addClass('d-none');
            }
        })
    })
</script>
<script>
    $(document).ready(function() {
        $('.cat').on('change', function() {
            var cat_id = this.value;
            $.ajax({
                url: "{{ url('admin/property/fetch-subcat') }}",
                type: "POST",
                data: {
                    cat_id: cat_id,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result.subcat, function(key, value) {
                        $('.cat_data').html('');
                    });
                    $.each(result.subcat, function(key, value) {
                        //  $('.cat_data').append(
                        //     ' <div class="col-lg-4 col-md-12 form1 form1-'+value.category_id+' '+value.category_id+'"></div>'
                        // );
                        $('.cat_data').append(
                            '<div class="col-lg-4 col-md-12 padding0 form1-' + value.category_id + ' ' + value.category_id + '" active><input type="radio" class="radio" name="subcat_id" id=' + value.name + ' value=' + value.id + '><label for=' + value.name + ' class="lable1 radio_container">' + value.name + '</label></div>'
                        );
                    });
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.form-switch1').on('change', function() {
            $('.form1').removeClass('active');
            var formToShow = '.form1-' + $(this).data('id');
            $(formToShow).addClass('active');
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
<script src="{{ URL::asset('assets/themeJquery/customeruser/jquery1.js') }}"></script>
<script src="{{ URL::asset('front/js/Tellcustom.js') }}"></script>
<link href="{{ URL::asset('front/css/intlTelInput.css?1613236686837') }}" rel="stylesheet">
<script src="{{ URL::asset('front/js/Tellprism.js') }}"></script>
<script src="{{ URL::asset('front/js/intlTelInput.js') }}"></script>
<script src="{{ URL::asset('front/js/Tellinput.js') }}"></script>
@endsection