@extends('front.layout')
@section('css')
    @include('admin.layouts.select2CssFiles')
    @include('admin.layouts.fancy-uploader-css')
@endsection
@section('body')

    <body class="homepage-9 hp-6 homepage-1 inner-pages">
    @section('main')
        <section class="user-page section-padding pt-5" style="margin-top: 0px;">
            <div class="container">
                <div class="row">
                    <form action="{{ url('add-property/submit') }}" method="post">
                        @csrf
                        <div class="col-lg-12 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
                            <div class="single-add-property">
                                <h3>property Location</h3>
                                <div class="property-form-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="address">Address</label>
                                                <input type="text" name="address" placeholder="Enter Your Address"
                                                    id="address">
                                            </p>
                                        </div>
                                        <div class="pb-4 mt-5 pt-2">
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Select City</label>
                                                <select id="country-dd" class="form-control" name="city_name">
                                                    <option value="">Select City</option>
                                                    @foreach ($city as $value)
                                                        <option value="{{ $value->id }}">
                                                            {{ $value->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pb-4 mt-5 pt-2">
                                            <div class="col-lg-12 form-group padding">
                                                <label class="form-label">Select Area</label>
                                                <select id="state-dd" class="form-control" name="area_id">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="country">Country</label>
                                                <input type="text" name="country" placeholder="Enter Your Country"
                                                    id="country">
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb first">
                                                <label for="latitude">Google Maps latitude</label>
                                                <input type="number" name="latitude" placeholder="Google Maps latitude"
                                                    id="latitude">
                                                <a class="form-control notrequired" style="background-color: #d9edf7"
                                                    href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                    target="_blank" rel="nofollow">
                                                    Go here to get Latitude from address. </a>
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb last">
                                                <label for="longitude">Google Maps longitude</label>
                                                <input type="number" name="longitude" placeholder="Google Maps longitude"
                                                    id="longitude">
                                                <a class="form-control notrequired" style="background-color: #d9edf7"
                                                    href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                    target="_blank" rel="nofollow">
                                                    Go here to get Longitude from address. </a>
                                            </p>
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
                                                <p>
                                                    <label for="title">Property Title</label>
                                                    <input type="text" name="name" id="title"
                                                        placeholder="Enter your property title">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="description">Property Description</label>
                                                    <textarea id="description" name="descripition" placeholder="Describe about your property"></textarea>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                                <div class="col-lg-12 form-group padding">
                                                    <select class="form-control" style="display: block;" name="type">
                                                        <option value="">Select purpose</option>
                                                        <option value="sale">For Sale</option>
                                                        <option value="rent">Rent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="col-lg-12 form-group padding">
                                                    <select id="country-dd" class="form-control" name="category_id">
                                                        <option value="">Select Category</option>
                                                        @foreach ($category as $value)
                                                            <option value="{{ $value->id }}">
                                                                {{ $value->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="col-lg-12 form-group padding">
                                                    <select id="state-dd" class="form-control" style="display: block;"
                                                        name="subcat">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p class="no-mb">
                                                    <label for="price">All Inclusive Price</label>
                                                    <input type="number" name="price" placeholder="USD" id="price">
                                                </p>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="col-12 form-group">
                                                    <label class="form-label">Unit:</label>
                                                        <select id="cars" class="form-control" name="unit">
                                                            <option value="">Select unit</option>
                                                            <option value="square feet">Square feet</option>
                                                            <option value="square yard">Square yard</option>
                                                            <option value="square meter">Square meter</option>
                                                            <option value="marla">Marala</option>
                                                            <option value="kanal">Kanal</option>
                                                        </select>

                                                </div>

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
                                            <input type="file" name="image" class="dropify notrequired"
                                            data-default-file=""
                                            data-height="180" />
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
                                                            <label
                                                                style="font-size: 16px;font-weight: 100;">{{ Form::checkbox('feature[]', $feature->id, false, ['class' => 'seting']) }}
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
                                        <label class="form-label">Membership Status</label>
                                        <input type="radio" class="member_status" onclick="open_div(this)" checked=""
                                            value="existing_user" name="member_status">
                                        <label for="Sale">Existing Membe</label>
                                        <input type="radio" class="member_status" onclick="open_div(this)" value="new_user"
                                            name="member_status">
                                        <label for="Rent">New Member (Free)</label>

                                        {{-- <select id="cars" class="form-control" name="type">
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sale</option>
                                    </select> --}}
                                    </div>
                                    <div class="row Field_One">
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="con-user">Username</label>
                                                <input type="text" placeholder="Enter Your Username" id="con-user"
                                                    name="name">
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="con-name">Password</label>
                                                <input type="text" placeholder="Enter Your password" id="con-name"
                                                    name="password">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row Field_Two">
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="con-name">First Name</label>
                                                <input type="text" placeholder="Enter Your Name" id="con-name"
                                                    name="firstname">
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="con-user">Last Name</label>
                                                <input type="text" placeholder="Enter Your Username" id="con-user"
                                                    name="lastname">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row Field_Two">
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb first">
                                                <label for="con-email">Email</label>
                                                <input type="email" placeholder="Enter Your Email" id="con-email"
                                                    name="email">
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12 Rent msg">
                                            <p class="no-mb last">
                                                <label for="con-phn">Phone</label>
                                                <input type="text" placeholder="Enter Your Phone Number" id="con-phn"
                                                    name="contact">
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12 Rent msg">
                                            <p>
                                                <label for="con-name">Password</label>
                                                <input type="password" placeholder="Enter Your password" id="con-name"
                                                    name="password">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-property-button pt-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="prperty-submit-button">
                                                <button type="submit">Submit Property</button>
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
<script type="text/javascript">
    $(document).ready(function() {

        $('input[type="radio"]').click(function() {
            if ($(this).attr("value") == "existing_user") {
                $(".Field_One").show();
                $(".Field_Two").hide();
            }
            if ($(this).attr("value") == "new_user") {
                $(".Field_Two").show();
                $(".Field_One").hide();

            }
        });

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
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
@include('admin.layouts.select2JsFiles')
@include('admin.layouts.fancy-uploader-js')
@include('admin.layouts.tinymce-js')
@include('admin.layouts.templateJquery')
<script src="{{ URL::asset('assets/themeJquery/customeruser/jquery1.js') }}"></script>
@endsection
