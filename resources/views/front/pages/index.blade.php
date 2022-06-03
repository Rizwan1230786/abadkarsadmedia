@extends('front.layout')
@section('body')

<body class="homepage-9 hp-6 homepage-1">
    @section('main')
    <!-- STAR HEADER SEARCH -->
    <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">
        <div class="hero-main">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-12-xl">
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
                            <div class="col-12">
                                <div class="banner-search-wrap">
                                    <ul class="nav nav-tabs rld-banner-tab">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                                        </li>
                                    </ul>
                                    @foreach ($property as $properties)
                                    <form action="{{ url('/search_property')}}" method="get">
                                        @endforeach
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs_1">
                                                <div class="rld-main-search">
                                                    <div class="row">
                                                        <div class="rld-single-select ml-22">
                                                            <select class="form-control single-select" name="category1">
                                                                <option value="">Property Type</option>
                                                                @foreach ($category as $value)
                                                                <option value="{{ $value->name }}">
                                                                    {{ $value->name }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="rld-single-select ml-22">
                                                            <select id="country-dd" class="form-control single-select" name="city_name1">
                                                                <option value="">Select City</option>
                                                                @foreach ($city as $value)
                                                                <option value="{{ $value->slug }}">
                                                                    {{ $value->name }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                            @if ($errors->has('city_name'))
                                                            <div class="error">{{ $errors->first('city_name') }}</div>
                                                            @endif

                                                        </div>
                                                        <div class="rld-single-select">
                                                            <select id="state-dd" class="form-control single-select" name="area_id">
                                                                <option value="">Select Area</option>
                                                            </select>
                                                        </div>
                                                        <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                            <button class="btn btn-yellow" type="submit">Search
                                                                Now</button>
                                                        </div>
                                                        <div class="explore__form-checkbox-list full-filter">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                    <!-- Form Property Status -->
                                                                    <div class="form-group categories">
                                                                        <select id="country-dd" class="form-control single-select" name="type1">
                                                                            <option value="">Select purpose</option>
                                                                            <option value="sale">For Sale</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--/ End Form Property Status -->
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                    <!-- Form Bedrooms -->
                                                                    <div class="form-group beds">
                                                                        <div class="form-group categories">
                                                                            <select id="country-dd" class="form-control single-select" name="number_of_bedrooms1">
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
                                                                    <div class="form-group bath">
                                                                        <div class="form-group categories">
                                                                            <select id="country-dd" class="form-control single-select" name="number_of_bathrooms1">
                                                                                <option value="">Bathrooms</option>
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
                                                                <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                    <!-- Price Fields -->
                                                                    <div class="main-search-field-2">
                                                                        <!-- Area Range -->
                                                                        <div class="range-slider">
                                                                            <label>Area Size</label>
                                                                            <div id="area-range" data-min="0" data-max="1300" data-unit="sqft"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <br>
                                                                        <!-- Price Range -->
                                                                        <div class="range-slider">
                                                                            <label>Price Range</label>
                                                                            <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div class="row">
                                                                        @foreach ($feature as $value )
                                                                        <div class="col-lg-6">

                                                                            <input style="position:absolute;left: 20px;top: 7px;" id="check-2" type="checkbox" name="check1">
                                                                            <label for="check-2">{{ $value->name }}</label>



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
                                                            <select class="form-control single-select" name="category">
                                                                <option value="">Property Type</option>
                                                                @foreach ($category as $value)
                                                                <option value="{{ $value->name }}">
                                                                    {{ $value->name }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="rld-single-select ml-22">
                                                            <select id="country-dd" class="form-control single-select" name="city_name">
                                                                <option value="">Select City</option>
                                                                @foreach ($city as $value)
                                                                <option value="{{ $value->slug }}">
                                                                    {{ $value->name }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                            @if ($errors->has('city_name'))
                                                            <div class="error">{{ $errors->first('city_name') }}</div>
                                                            @endif

                                                        </div>
                                                        <div class="rld-single-select">
                                                            <select id="state-dd" class="form-control single-select" name="area_id">
                                                                <option value="">Select Area</option>
                                                            </select>
                                                        </div>
                                                        <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                            <button class="btn btn-yellow" type="submit">Search
                                                                Now</button>
                                                        </div>
                                                        <div class="explore__form-checkbox-list full-filter">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                    <!-- Form Property Status -->
                                                                    <div class="form-group categories">
                                                                        <select id="country-dd" class="form-control single-select" name="type">
                                                                            <option value="">Select purpose</option>

                                                                            <option value="rent">Rent</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--/ End Form Property Status -->
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                    <!-- Form Bedrooms -->
                                                                    <div class="form-group beds">
                                                                        <div class="form-group categories">
                                                                            <select id="country-dd" class="form-control single-select" name="number_of_bedrooms">
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
                                                                    <div class="form-group bath">
                                                                        <div class="form-group categories">
                                                                            <select id="country-dd" class="form-control single-select" name="number_of_bathrooms">
                                                                                <option value="">Bathrooms</option>
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
                                                                <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                    <!-- Price Fields -->
                                                                    <div class="main-search-field-2">
                                                                        <!-- Area Range -->
                                                                        <div class="range-slider">
                                                                            <label>Area Size</label>
                                                                            <div id="area-range-rent" data-min="0" data-max="1300" data-unit="sqft"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <br>
                                                                        <!-- Price Range -->
                                                                        <div class="range-slider">
                                                                            <label>Price Range</label>
                                                                            <div id="price-range-rent" data-min="0" data-max="600000" data-unit="$"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div class="row">
                                                                        @foreach ($feature as $value )
                                                                        <div class="col-lg-6">

                                                                            <input style="position:absolute;left: 20px;top: 7px;" id="check-2" type="checkbox" name="check">
                                                                            <label for="check-2">{{ $value->name }}</label>



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
    </section>
    <!-- END HEADER SEARCH -->

    <!-- START SECTION POPULAR PLACES -->
    <section class="feature-categories bg-white rec-pro mt-5">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Popular </span>Places</h2>
                <p>Properties In Most Popular Places.</p>
            </div>
            <div class="row mt-5">
                <!-- Single category -->
                @foreach ($search_city as $city)
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="small-category-2">
                        <a href="{{ url('/city' . '/' . $city->slug) }}" class="homes-img">
                            <div class="small-category-2-thumb img-1">
                                <img src="{{ asset('assets/images/cities/' . $city->image) }}" alt="">
                            </div>
                        </a>
                        <a href="{{ url('/city' . '/' . $city->slug) }}">
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title">{{ $city->name }}</h4>

                                <h4 class="sc-jb-title"><a href="#">{{ $city->state }}</a></h4>
                                {{-- <span>203 Properties</span> --}}
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /row -->
        </div>
    </section>
    <!-- END SECTION POPULAR PLACES -->
    <!-- START SECTION FEATURED PROPERTIES -->
    @if (!empty($property))
    <section class="featured portfolio bg-white-2 rec-pro full-l">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Featured </span>Properties</h2>
                <p>These are our featured properties</p>
            </div>
            <div class="row portfolio-items">
                @foreach ($property as $properties)
                <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                    <div class="project-single" data-aos="fade-right">
                        <div class="project-inner " style="background-image: url('{{ asset('assets/images/properties/' . $properties->image) }}'); display: block; background-size: cover;background-position: center;background-repeat: no-repeat;width: 70%; ">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="{{ url('/property', $properties->url_slug) }}" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="{{ url('/property', $properties->url_slug) }}" class="btn"><i class="fa fa-link"></i></a>
                                @if (isset($properties->video) && !empty($properties->video))
                                <a href="{{ asset($properties->video) }}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                @endif

                                <a href="{{ url('/property', $properties->url_slug) }}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="{{ url('/property', $properties->url_slug) }}">{{ $properties->name }}</a></h3>
                            <p class="homes-address mb-3">
                                <a href="{{ url('/property', $properties->url_slug) }}">
                                    <i class="fa fa-map-marker"></i><span>{{ $properties->location }}</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                @if ($properties->number_of_bedrooms)
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>{{ $properties->number_of_bedrooms }}</span>
                                </li>
                                @endif
                                @if ($properties->number_of_bathroom)
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>{{ $properties->number_of_bathroom }}</span>
                                </li>
                                @endif
                                @if ($properties->land_area)
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>{{ number_format($properties->land_area, 1) }} {{$properties->unit}}</span>
                                </li>
                                @endif
                            </ul>
                            <div class="price-properties footer pt-3 pb-0">
                                <h3 class="title mt-3">
                                    <a href="{{ url('/property', $properties->url_slug) }}">(PKR)
                                        {{ number_format($properties->price, 0) }}</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="flaticon-compare"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="bg-all">
                <a href="{{ route('front.property') }}" class="btn btn-outline-light">View More</a>
            </div>
        </div>
    </section>
    @endif
    <!-- END SECTION FEATURED PROPERTIES -->

    <!-- START SECTION WHY CHOOSE US -->
    <section class="how-it-works bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Why </span>Choose Us</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="row service-1">
                <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <img src="{{ asset('/front/images/icons/icon-4.svg') }}" alt="">
                            <h3>Wide Renge Of Properties</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="{{ asset('/front/images/icons/icon-5.svg') }}" alt="">
                            <h3>Trusted by thousands</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                    <div class="serv-flex arrow">
                        <div class="art-1 img-15">
                            <img src="{{ asset('/front/images/icons/icon-6.svg') }}" alt="">
                            <h3>Financing made easy</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up" data-aos-delay="450">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="{{ asset('/front/images/icons/icon-15.svg') }}" alt="">
                            <h3>We are here near you</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- END SECTION WHY CHOOSE US -->

    <!-- START SECTION RECENTLY PROPERTIES -->
    <section class="featured portfolio rec-pro disc">
        <div class="container-fluid">
            <div class="sec-title discover">
                <h2><span></span>Popular Projects</h2>
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
                                            <img src="{{ asset('assets/images/projects/' . $projects->image) }}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="{{ url('/project', $projects->url_slug) }}" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="{{ asset($projects->video) }}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="{{ url('/project', $projects->url_slug) }}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{ url('/project', $projects->url_slug) }}">{{ $projects->title }}</a>
                                    </h3>
                                    <p class="homes-address mb-3">
                                        <a href="{{ route('front.project_detail', $projects->id) }}">
                                            <i class="fa fa-map-marker"></i><span>{{ $projects->location }}</span>
                                        </a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="agents-grid" data-aos="fade-up" data-aos-delay="250">
                    <div class="people">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button sale rent">For Rent</div>
                                        <img src="{{ asset('/front/images/blog/b-12.jpg') }}" alt="home-1" class="img-responsive">
                    </a>
                </div>
                <div class="button-effect">
                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                </div>
            </div>
            <!-- homes content -->
            <div class="homes-content">
                <!-- homes address -->
                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                <p class="homes-address mb-3">
                    <a href="single-property-1.html">
                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                    </a>
                </p>
                <!-- homes List -->
                <ul class="homes-list clearfix pb-3">
                    <li class="the-icons">
                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                        <span>6 Bedrooms</span>
                    </li>
                    <li class="the-icons">
                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                        <span>3 Bathrooms</span>
                    </li>
                    <li class="the-icons">
                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                        <span>720 sq ft</span>
                    </li>
                    <li class="the-icons">
                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                        <span>2 Garages</span>
                    </li>
                </ul>
                <div class="price-properties footer pt-3 pb-0">
                    <h3 class="title mt-3">
                        <a href="single-property-1.html">$ 150,000</a>
                    </h3>
                    <div class="compare">
                        <a href="#" title="Compare">
                            <i class="flaticon-compare"></i>
                        </a>
                        <a href="#" title="Share">
                            <i class="flaticon-share"></i>
                        </a>
                        <a href="#" title="Favorites">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="agents-grid" data-aos="fade-up" data-aos-delay="350">
            <div class="people landscapes no-pb pbp-3">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button alt sale">For Sale</div>
                                <img src="{{ asset('/front/images/blog/b-1.jpg') }}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="single-property-1.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                                <a href="single-property-1.html">$ 350,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="agents-grid" data-aos="fade-up" data-aos-delay="450">
            <div class="landscapes">
                <div class="project-single no-mb">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button sale rent">For Rent</div>
                                <img src="{{ asset('/front/images/feature-properties/fp-10.jpg') }}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                                <a href="single-property-1.html">$ 150,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="agents-grid" data-aos="fade-up">
            <div class="people">
                <div class="project-single no-mb">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button alt sale">For Sale</div>
                                <img src="{{ asset('/front/images/feature-properties/fp-11.jpg') }}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="single-property-1.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                                <a href="single-property-1.html">$ 350,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="agents-grid" data-aos="fade-up">
            <div class="people landscapes no-pb pbp-3">
                <div class="project-single no-mb last">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button sale rent">For Rent</div>
                                <img src="{{ asset('/front/images/feature-properties/fp-12.jpg') }}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="single-property-1.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                                <a href="single-property-1.html">$ 150,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="agents-grid" data-aos="fade-up">
            <div class="landscapes">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button alt sale">For Sale</div>
                                <img src="{{ asset('/front/images/blog/b-11.jpg') }}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="single-property-1.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                                <a href="single-property-1.html">$ 350,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="agents-grid" data-aos="fade-up">
            <div class="people">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button sale rent">For Rent</div>
                                <img src="{{ asset('/front/images/blog/b-12.jpg') }}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="single-property-1.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                                <a href="single-property-1.html">$ 150,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
        </div>
        </div>
    </section>
    <!-- END SECTION RECENTLY PROPERTIES -->

    <!-- START SECTION AGENTS -->
    <section class="team bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Meet Our </span>Agents</h2>
                <p>Our Agents are here to help you</p>
            </div>
            <div class="row team-all">
                <!--Team Block-->
                @foreach ($agents as $agent)
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="150">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="{{ asset('assets/images/agent/' . $agent->image) }}" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="{{ route('front.agent_detail', $agent->id) }}">{{ $agent->name }}</a>
                            </h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END SECTION AGENTS -->

    <!-- START SECTION TESTIMONIALS -->
    <section class="testimonials bg-white-2 rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Clients </span>Testimonials</h2>
                <p>We collect reviews from our customers.</p>
            </div>
            <div class="owl-carousel job_clientSlide">
                @foreach ($testimonials as $value )
                <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="150">
                    <i class="fas fa-quote-left" style="font-size:40px; opacity: 0.8;"></i>
                    <div class="mt-3">
                        <h3 class="mb-0 h4 fw-semi-bold" style="opacity: 0.7; font-size:18px;">{{ $value->companyname }}</h3>
                        <ul class="review-rate mb-0 list-unstyled list-inline">
                            <li class="list-inline-item" style="font-size: 10px;"><i class="fas fa-star text-warning"></i>
                            </li>
                            <li class="list-inline-item" style="font-size: 10px;"><i class="fas fa-star text-warning"></i>
                            </li>
                            <li class="list-inline-item" style="font-size: 10px;"><i class="fas fa-star text-warning"></i>
                            </li>
                            <li class="list-inline-item" style="font-size: 10px;"><i class="fas fa-star text-warning"></i>
                            </li>
                            <li class="list-inline-item" style="font-size: 10px;"><i class="fas fa-star text-warning"></i>
                            </li>
                        </ul>
                    </div>
                    <p class="mt-3">
                        {{ $value->detail }}
                    </p>
                    <h6 class="mb-0 custom-white">{{ $value->name }}</h6>
                    <span style="color: #338be7">{{ $value->designation }} of {{ $value->companyname }}</span>
                    <div class="detailJC"  style="margin-top: 10px">
                        <span><a href="{{ asset('assets/images/testimonials/'.$value->image) }}" target="_blanck"><img src="{{ asset('assets/images/testimonials/'.$value->image) }}" alt="" /></a></span>
                        <h5>{{ $value->name }}</h5>
                        <p>{{ $value->city_name }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END SECTION TESTIMONIALS -->
    @if (isset($category) && !empty($category))
    <section>
        <div class="partners bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Papular </span>Locations</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p style="font-weight: bold">Popular Cities to Buy Properties</p>
                        <hr style="width: 1200px; ">
                        <div class="row">
                            <div class="col-md-4">
                                <p style="font-weight: bold; margin-left:24px;">Houses</p>
                                <hr style="width: 309px; ">
                                @foreach ($category as $category)
                                @if (isset($category->name) && $category->name == 'Homes')
                                @foreach ($category->url_slugs->take(5) as $urlslugs)
                                <ul>
                                    <li style="list-style: square;">
                                        <a style="color: black;" href="{{ url('/property' . '/' . $category->name . '/' . $urlslugs->url_slug) }}">{{ $urlslugs->title }}
                                        </a>
                                    </li>
                                </ul>
                                @endforeach

                                @if (isset($category) && !empty($category))
                                <a style="color: #338be7; margin-left: 38px;" href="{{ url('/' . $category->name) }}">view all
                                    cities
                                </a>
                                @endif
                                @endif
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <p style="font-weight: bold; margin-left:24px;">Flats</p>
                                <hr style="width: 309px; ">
                                @foreach ($flats as $flat)
                                @if (isset($flat->name) && $flat->name == 'Plots')
                                @foreach ($flat->url_slugs->take(5) as $urlslugs)
                                <ul>
                                    <li style="list-style: square;">
                                        <a style="color: black;" href="{{ url('/property' . '/' . $flat->name . '/' . $urlslugs->url_slug) }}">{{ $urlslugs->title }}
                                        </a>
                                    </li>
                                </ul>
                                @endforeach
                                <a style="color: #338be7; margin-left: 38px;" href="{{ url('/' . $flat->name) }}">view all
                                    cities
                                </a>
                                @endif
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <p style="font-weight: bold; margin-left:24px;">Commercial</p>
                                <hr style="width: 309px; ">
                                @foreach ($flats as $flat)
                                @if (isset($flat->name) && $flat->name == 'Commercial')
                                @foreach ($flat->url_slugs->take(5) as $urlslugs)
                                <ul>
                                    <li style="list-style: square;">
                                        <a style="color: black;" href="{{ url('/property' . '/' . $flat->name . '/' . $urlslugs->url_slug) }}">{{ $urlslugs->title }}
                                        </a>
                                    </li>
                                </ul>
                                @endforeach
                                <a style="color: #338be7; margin-left: 38px;" href="{{ url('/' . $flat->name) }}">view all
                                    cities
                                </a>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <p style="font-weight: bold">Most Popular Locations for Homes</p>
                        <hr style="width: 1200px; ">
                        <div class="row">
                            <div class="col-md-4">
                                <p style="font-weight: bold; margin-left:24px;">Lahore</p>
                                <hr style="width: 309px; ">
                                @foreach ($search_city as $search_cityies)
                                @if (isset($search_cityies->name) && $search_cityies->name == 'Lahore')
                                @foreach ($search_cityies->areas->take(8) as $area)
                                <ul>
                                    <li style="list-style: square;">
                                        <a style="color: black;" href="{{ url('/House_Property' . '/' . $search_cityies->name . '/' . $area->slug) }}">House
                                            for sale in {{ $area->areaname }}
                                        </a>
                                    </li>
                                </ul>
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <p style="font-weight: bold; margin-left:24px;">Karachi</p>
                                <hr style="width: 309px; ">
                                @foreach ($search_city as $search_cityies)
                                @foreach ($search_cityies->properties as $property)
                                @if (isset($search_cityies->name) && $search_cityies->name == 'karachi')
                                @if ($search_cityies->id == $property->city_name)
                                @foreach ($search_cityies->areas->take(8) as $area)
                                <ul>
                                    <li style="list-style: square;">
                                        <a style="color: black;" href="{{ url('/House_Property' . '/' . $search_cityies->name . '/' . $area->slug) }}">House
                                            for sale in {{ $area->areaname }}
                                        </a>
                                    </li>
                                </ul>
                                @endforeach
                                @endif
                                @endif
                                @endforeach
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <p style="font-weight: bold; margin-left:24px;">Rahim Yar Khan</p>
                                <hr style="width: 309px; ">
                                @foreach ($search_city as $search_cityies)
                                @foreach ($search_cityies->areas->take(8) as $area)
                                @if (isset($search_cityies->name) && $search_cityies->name == 'rahim yar khan')
                                <ul>
                                    <li style="list-style: square;">
                                        <a style="color: black;" href="{{ url('/House_Property' . '/' . $search_cityies->name . '/' . $area->slug) }}">House
                                            for sale in {{ $area->areaname }}
                                        </a>
                                    </li>
                                </ul>
                                @endif
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- END SECTION PARTNERS -->
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
        @endsection
</body>
@endsection
