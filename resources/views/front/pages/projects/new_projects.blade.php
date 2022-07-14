@extends('front.layout')
@section('body')

    <body class="homepage-9 hp-6 homepage-1">
    @section('main')
        <!-- STAR HEADER SEARCH -->
        <section id="hero-area" class="parallax-searchs home16 overlay thome-11" data-stellar-background-ratio="0.5">
            <div id="hero-area" class="main-search-inner search-2 vid">
                <div class="hero-main">
                    <div class="container" data-aos="zoom-in">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="hero-inner">
                                    <!-- Welcome Text -->
                                    <div class="welcome-text">
                                        <h1 class="h1">Find Your Dream
                                            <br class="d-md-none">
                                            <span class="typed border-bottom"></span>
                                        </h1>
                                        <p class="mt-4">We Have Over Million Properties For You.</p>
                                    </div>
                                    <!--/ End Welcome Text -->
                                    <!-- Search Form -->
                                    <div class="offset-md-2 offset-lg-2 col-8">
                                        <div class="banner-search-wrap">
                                            <ul class="nav nav-tabs rld-banner-tab">
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabs_1">For Sale</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tabs_3">Project</a>
                                                </li>
                                            </ul>
                                            @foreach ($property as $properties)
                                                <form action="{{ url('/search_property') }}" method="get">
                                            @endforeach

                                            <div class="tab-content">
                                                <div class="tab-pane fade" id="tabs_1">
                                                    <div class="rld-main-search">
                                                        <div class="row">
                                                            <div class="rld-single-select ml-22">
                                                                <select class="form-control single-select cat"
                                                                    name="category1">
                                                                    <option value="">Property Type</option>
                                                                    @foreach ($category as $value)
                                                                        <option value="{{ $value->name }}">
                                                                            {{ $value->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="rld-single-select ml-22">
                                                                <select id="country-dd" class="form-control single-select"
                                                                    name="city_name1">
                                                                    <option value="">Select City</option>
                                                                    @foreach ($city as $value)
                                                                        <option value="{{ $value->slug }}">
                                                                            {{ $value->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                @if ($errors->has('city_name'))
                                                                    <div class="error">
                                                                        {{ $errors->first('city_name') }}
                                                                    </div>
                                                                @endif

                                                            </div>
                                                            <div class="rld-single-select ml-22">
                                                                <select id="state-dd" class="form-control single-select"
                                                                    name="area_id">
                                                                    <option value="">Select Area</option>
                                                                </select>
                                                            </div>
                                                            <div class="dropdown-filter"><span>Advanced Search</span>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                                <button class="btn btn-yellow" type="submit">Search
                                                                    Now</button>
                                                            </div>
                                                            <div class="explore__form-checkbox-list full-filter">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                        <!-- Form Property Status -->
                                                                        <div class="form-group categories">
                                                                            <select id="country-dd"
                                                                                class="form-control single-select"
                                                                                name="type1">
                                                                                <option value="">Select purpose
                                                                                </option>
                                                                                <option value="sale">For Sale</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--/ End Form Property Status -->
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                        <!-- Form Bedrooms -->
                                                                        <div class="form-group beds bed d-none">
                                                                            <div class="form-group categories">
                                                                                <select id="country-dd"
                                                                                    class="form-control single-select"
                                                                                    name="number_of_bedrooms1">
                                                                                    <option value="">Bedrooms</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/ End Form Bedrooms -->
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                                        <!-- Form Bathrooms -->
                                                                        <div class="form-group bath bed d-none">
                                                                            <div class="form-group categories">
                                                                                <select id="country-dd"
                                                                                    class="form-control single-select"
                                                                                    name="number_of_bathrooms1">
                                                                                    <option value="">Bathrooms
                                                                                    </option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/ End Form Bathrooms -->
                                                                    </div>
                                                                    <div
                                                                        class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                        <!-- Price Fields -->
                                                                        <div class="main-search-field-2">
                                                                            <div class="range-slider">
                                                                                <input class="form-control single-select"
                                                                                    type="text" name="land_area"
                                                                                    placeholder="Enter area size...">
                                                                            </div>
                                                                            <br>
                                                                            <div class="range-slider">
                                                                                <!-- Area Range -->
                                                                                <select class="form-control single-select"
                                                                                    name="unit">
                                                                                    <option value="">Select unit
                                                                                    </option>
                                                                                    <option value="square feet">Square feet
                                                                                    </option>
                                                                                    <option value="square yard">Square yard
                                                                                    </option>
                                                                                    <option value="square meter">Square
                                                                                        meter</option>
                                                                                    <option value="marla">Marla</option>
                                                                                    <option value="kanal">Kanal</option>
                                                                                </select>
                                                                            </div>
                                                                            <br>
                                                                            <!-- Price Range -->
                                                                            <div class="range-slider"
                                                                                style="display: inline-flex;">
                                                                                <input class="form-control single-select"
                                                                                    type="text" name="min_price"
                                                                                    placeholder="Enter minimum price..."
                                                                                    style="margin-right: 10px;">
                                                                                <input class="form-control single-select"
                                                                                    type="text" name="max_price"
                                                                                    placeholder="Enter maximum price...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 py-1 pr-30">
                                                                        <!-- Checkboxes -->
                                                                        <div class="row">
                                                                            @foreach ($feature as $value)
                                                                                <div class="col-lg-6">

                                                                                    <input
                                                                                        style="position:absolute;left: 20px;top: 7px;"
                                                                                        id="check-2" type="checkbox"
                                                                                        name="check1">
                                                                                    <label
                                                                                        for="check-2">{{ $value->name }}</label>



                                                                                </div>
                                                                            @endforeach

                                                                        </div>
                                                                        <!-- Checkboxes / End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tabs_2">
                                                    <div class="rld-main-search">
                                                        <div class="row">
                                                            <div class="rld-single-select ml-22">
                                                                <select class="form-control single-select cat2"
                                                                    name="category">
                                                                    <option value="">Property Type</option>
                                                                    @foreach ($category as $value)
                                                                        <option value="{{ $value->name }}">
                                                                            {{ $value->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="rld-single-select ml-22">
                                                                <select id="country-dd" class="form-control single-select"
                                                                    name="city_name">
                                                                    <option value="">Select City</option>
                                                                    @foreach ($city as $value)
                                                                        <option value="{{ $value->slug }}">
                                                                            {{ $value->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                @if ($errors->has('city_name'))
                                                                    <div class="error">
                                                                        {{ $errors->first('city_name') }}
                                                                    </div>
                                                                @endif

                                                            </div>
                                                            <div class="rld-single-select">
                                                                <select id="state-dd" class="form-control single-select"
                                                                    name="area_id">
                                                                    <option value="">Select Area</option>
                                                                </select>
                                                            </div>
                                                            <div class="dropdown-filter"><span>Advanced Search</span>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                                <button class="btn btn-yellow" type="submit">Search
                                                                    Now</button>
                                                            </div>
                                                            <div class="explore__form-checkbox-list full-filter">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                        <!-- Form Property Status -->
                                                                        <div class="form-group categories">
                                                                            <select id="country-dd"
                                                                                class="form-control single-select"
                                                                                name="type">
                                                                                <option value="">Select purpose
                                                                                </option>

                                                                                <option value="rent">Rent</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--/ End Form Property Status -->
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                        <!-- Form Bedrooms -->
                                                                        <div class="form-group beds bed2 d-none">
                                                                            <div class="form-group categories ">
                                                                                <select id="country-dd"
                                                                                    class="form-control single-select"
                                                                                    name="number_of_bedrooms">
                                                                                    <option value="">Bedrooms
                                                                                    </option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/ End Form Bedrooms -->
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                                        <!-- Form Bathrooms -->
                                                                        <div class="form-group bath bed2 d-none">
                                                                            <div class="form-group categories">
                                                                                <select id="country-dd"
                                                                                    class="form-control single-select"
                                                                                    name="number_of_bathrooms">
                                                                                    <option value="">Bathrooms
                                                                                    </option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/ End Form Bathrooms -->
                                                                    </div>
                                                                    <div
                                                                        class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                        <!-- Price Fields -->
                                                                        <div class="main-search-field-2">
                                                                            <div class="range-slider">
                                                                                <input class="form-control single-select"
                                                                                    type="text" name="land_area2"
                                                                                    placeholder="Enter area size...">
                                                                            </div>
                                                                            <br>
                                                                            <div class="range-slider">
                                                                                <!-- Area Range -->
                                                                                <select class="form-control single-select"
                                                                                    name="unit2">
                                                                                    <option value="">Select unit
                                                                                    </option>
                                                                                    <option value="square feet">Square feet
                                                                                    </option>
                                                                                    <option value="square yard">Square yard
                                                                                    </option>
                                                                                    <option value="square meter">Square
                                                                                        meter</option>
                                                                                    <option value="marla">Marla</option>
                                                                                    <option value="kanal">Kanal</option>
                                                                                </select>
                                                                            </div>
                                                                            <br>
                                                                            <!-- Price Range -->
                                                                            <div class="range-slider"
                                                                                style="display: inline-flex;">
                                                                                <input class="form-control single-select"
                                                                                    type="text" name="min_price"
                                                                                    placeholder="Enter minimum price..."
                                                                                    style="margin-right: 10px;">
                                                                                <input class="form-control single-select"
                                                                                    type="text" name="max_price"
                                                                                    placeholder="Enter maximum price...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 py-1 pr-30">
                                                                        <!-- Checkboxes -->
                                                                        <div class="row">
                                                                            @foreach ($feature as $value)
                                                                                <div class="col-lg-6">

                                                                                    <input
                                                                                        style="position:absolute;left: 20px;top: 7px;"
                                                                                        id="check-2" type="checkbox"
                                                                                        name="check">
                                                                                    <label
                                                                                        for="check-2">{{ $value->name }}</label>



                                                                                </div>
                                                                            @endforeach

                                                                        </div>
                                                                        <!-- Checkboxes / End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade show active" id="tabs_3">
                                                    <div class="rld-main-search">
                                                        <div class="row">
                                                            <div class="rld-single-select ml-22">
                                                                <select id="country-dd" class="form-control single-select"
                                                                    name="city_name">
                                                                    <option value="">Select City</option>
                                                                    @foreach ($city as $value)
                                                                        <option value="{{ $value->slug }}">
                                                                            {{ $value->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                @if ($errors->has('city_name'))
                                                                    <div class="error">
                                                                        {{ $errors->first('city_name') }}
                                                                    </div>
                                                                @endif

                                                            </div>
                                                            <div class="rld-single-select">
                                                                <input class="form-control single-select" type="text"
                                                                    name="project_title" placeholder="Project Title">
                                                            </div>
                                                            <div class="dropdown-filter"><span>Advanced Search</span>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                                <button class="btn btn-yellow" type="submit">Search
                                                                    Now</button>
                                                            </div>
                                                            <div class="explore__form-checkbox-list full-filter">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                        <!-- Form Property Status -->
                                                                        <div class="rld-single-select ml-22">
                                                                            <select class="form-control single-select cat2"
                                                                                name="category">
                                                                                <option value="">Property Type
                                                                                </option>
                                                                                @foreach ($category as $value)
                                                                                    <option value="{{ $value->name }}">
                                                                                        {{ $value->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <!--/ End Form Property Status -->
                                                                    </div>
                                                                    <div class="rld-single-select">
                                                                        <input class="form-control single-select"
                                                                            type="text" name="developer_title"
                                                                            placeholder="Developer Title">
                                                                    </div>
                                                                    <div class="rld-single-select">
                                                                        <input class="form-control single-select"
                                                                            type="text" name="land_area2"
                                                                            placeholder="Enter area size...">
                                                                    </div>
                                                                    <div class="rld-single-select">
                                                                        <!-- Area Range -->
                                                                        <select class="form-control single-select"
                                                                            name="unit2">
                                                                            <option value="">Select unit</option>
                                                                            <option value="square feet">Square feet
                                                                            </option>
                                                                            <option value="square yard">Square yard
                                                                            </option>
                                                                            <option value="square meter">Square meter
                                                                            </option>
                                                                            <option value="marla">Marla</option>
                                                                            <option value="kanal">Kanal</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="rld-single-select"
                                                                        style="display: inline-flex;">
                                                                        <input class="form-control single-select"
                                                                            type="text" name="min_price"
                                                                            placeholder="Enter minimum price..."
                                                                            style="margin-right: 10px;">
                                                                        <input class="form-control single-select"
                                                                            type="text" name="max_price"
                                                                            placeholder="Enter maximum price...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--/ End Search Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- END HEADER SEARCH -->

        <div class="partners bg-white-1 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Our </span>Developers</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                    <!--start foreach  -->
                    @foreach ($developer as $value)
                        <div class="owl-item" data-aos="fade-up">
                            <img src="{{ asset('assets/images/developers/multipleimages/webp' . $value->image) }}"
                                alt="">
                        </div>
                    @endforeach
                    <!-- end foreach -->
                </div>
            </div>
        </div>

        <!-- END SECTION FEATURED PROPERTIES -->

        <!-- START SECTION WHY CHOOSE US -->

        <!-- END SECTION WHY CHOOSE US -->

        <!-- START SECTION RECENTLY PROPERTIES -->
        <section class="featured portfolio rec-pro disc">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Popular</span> Projects</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                        @foreach ($project as $projects)
                            <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                                <div class="landscapes">
                                    <div class="project-single">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="{{ url('/project', $projects->url_slug) }}" class="homes-img">
                                                    <div class="homes-tag button alt featured">Featured</div>
                                                    <div class="homes-tag button alt sale">For Sale</div>
                                                    <img style="height: 165px;"
                                                        src="{{ asset('assets/images/projects/' . $projects->image) }}"
                                                        alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="{{ url('/project', $projects->url_slug) }}" class="btn"><i
                                                        class="fa fa-link"></i></a>
                                                <a href="{{ asset($projects->video) }}"
                                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="{{ url('/project', $projects->url_slug) }}"
                                                    class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <p style="font-size: 14px;">
                                                <a style="color: black;"
                                                    href="{{ url('/project', $projects->url_slug) }}">{{ $projects->title }}</a>
                                            </p>
                                            <p class="homes-address mb-3">
                                                <a href="{{ url('/project', $projects->url_slug) }}">
                                                    <i
                                                        class="fa fa-map-marker"></i><span>{{ Str::limit($projects->location, 40) }}</span>
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- STAR SECTION PARTNERS -->
        <div class="partners bg-white-1 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Our </span>Partners</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                    @foreach ($partners as $val)
                        <div class="owl-item seeting" data-aos="fade-up">
                            <img class="img" title="{{ $val->name }}" src="{{ asset('assets/images/partners/' . $val->image) }}"
                                alt="">
                        </div>
                    @endforeach
                </div>
                <!-- END SECTION PARTNERS -->
                <!-- END SECTION PARTNERS -->
            </div>
        </div>
        <style>
            .seeting {
                padding: 14px 15px 10px;
                /* text-align: center; */
                background: #EBEBEB 0% 0% no-repeat padding-box;
                border-radius: 6px;
                margin-left: 10px;
                margin-bottom: 16px;
            }

            .img {
                height: 40px;
                max-width: 124px;
                opacity: 1.8 !important;
            }

        </style>
        <section>
            <script>
                $(document).ready(function() {
                    $('#country-dd').on('change', function() {
                        var idCountry = this.value;
                        $("#state-dd").html('');
                        $("#state-dd").parent().find('.nice-select .list').html('');
                        $.ajax({
                            url: "{{ url('/search_property/fetch-states') }}",
                            type: "POST",
                            data: {
                                city_slug: idCountry,
                                _token: '{{ csrf_token() }}'
                            },
                            dataType: 'json',
                            success: function(result) {
                                // $('#state-dd').html('<select value=""">Select Area</select>');
                                $.each(result.areas, function(key, value) {
                                    $("#state-dd").append('<option value="' + value
                                        .id + '">' + value.areaname + '</option>');
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
                        if (cat_id == "Homes") {
                            $('.bed').removeClass('d-none');
                        } else {
                            $('.bed').addClass('d-none');
                        }
                    });
                });
            </script>
            <script>
                $(document).ready(function() {
                    $('.cat2').on('change', function() {
                        var cat_id = this.value;
                        if (cat_id == "Homes") {
                            $('.bed2').removeClass('d-none');
                        } else {
                            $('.bed2').addClass('d-none');
                        }
                    });
                });
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
            <script>
                $("img").lazyload({
                    effect: "fadeIn"
                });
            </script>
        @endsection
</body>
@endsection
