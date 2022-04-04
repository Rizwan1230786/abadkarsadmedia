@extends('front.layout.layout')
@section('body')
<body class="homepage-9 hp-6 homepage-1">
    @section('main')
    @section('header')
    <header id="header-container" class="header head-tr">
        <!-- Header -->
        <div id="header" class="head-tr bottom">
            <div class="container container-header">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{ route('front.index') }}"><img src="{{ asset('/front/images/abadkar-logo.png') }}"
                                data-sticky-logo="images/logo-red.svg" alt=""></a>
                    </div>
                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">
                            <li><a href="{{ route('front.index') }}">Home</a>

                            </li>
                            <li><a href="{{ route('front.project') }}">Projects</a>
                            </li>
                            <li><a href="{{ route('front.property') }}">Property</a>
                            </li>
                            {{-- <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="{{ route('front.about') }}">About Us</a></li>
                                    <li><a href="{{ route('front.faq') }}">Faq</a></li>
                                    <li><a href="{{ route('front.pricing') }}">Pricing Tables</a></li>
                                    <li><a href="{{ route('front.error') }}">Page 404</a></li>
                                    <li><a href="{{ route('front.soon') }}">Coming Soon</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="#">Agents</a>
                                <ul>
                                    <li><a href="{{ route('front.agent') }}">Agent View</a></li>
                                    <li><a href="{{ route('front.agency') }}">Agencies View</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('front.blog') }}">Blog</a>

                            </li>
                            <li><a href="{{ route('front.contact') }}">Contact</a></li>
                            <li class="d-none d-xl-none  d-block d-lg-block"><a href="login.html">Login</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a
                                    href="add-property.html" class="button border btn-lg btn-block text-center">Add
                                    Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                        </ul>
                    </nav>
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->

                <!-- Right Side Content / End -->
                <div class="right-side d-none d-none d-lg-none d-xl-flex">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <a href="{{ route('front.contact') }}" class="button border">Contact us<i
                                class="fas fa-laptop-house ml-2"></i></a>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

                <!-- Right Side Content / End -->
                <div class="header-user-menu user-menu add">
                    <div class="header-user-name">
                        <span><img src="{{ asset('/front/images/testimonials/ts-1.jpg') }}" alt=""></span>Hi, Mary!
                    </div>
                    <ul>
                        <li><a href="user-profile.html"> Edit profile</a></li>
                        <li><a href="add-property.html"> Add Property</a></li>
                        <li><a href="payment-method.html"> Payments</a></li>
                        <li><a href="change-password.html"> Change Password</a></li>
                        <li><a href="#">Log Out</a></li>
                    </ul>
                </div>
                <!-- Right Side Content / End -->

                <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                    <!-- Header Widget -->
                    <div class="header-widget sign-in">
                        <div class="show-reg-form modal-open"><a href="#">Sign In</a></div>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

                <!-- lang-wrap-->
                <!-- lang-wrap end-->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    @endsection
  <!-- STAR HEADER SEARCH -->
  <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5" >
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
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs_1">
                                        <div class="rld-main-search">
                                            <div class="row">
                                                <div class="rld-single-input">
                                                    <input type="text" placeholder="Enter Keyword...">
                                                </div>
                                                <div class="rld-single-select ml-22">
                                                    <select class="select single-select">
                                                        <option value="1">Property Type</option>
                                                        <option value="2">Family House</option>
                                                        <option value="3">Apartment</option>
                                                        <option value="3">Condo</option>
                                                    </select>
                                                </div>
                                                <div class="rld-single-select">
                                                    <select class="select single-select mr-0">
                                                        <option value="1">Location</option>
                                                        <option value="2">Los Angeles</option>
                                                        <option value="3">Chicago</option>
                                                        <option value="3">Philadelphia</option>
                                                        <option value="3">San Francisco</option>
                                                        <option value="3">Miami</option>
                                                        <option value="3">Houston</option>
                                                    </select>
                                                </div>
                                                <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                    <a class="btn btn-yellow" href="#">Search Now</a>
                                                </div>
                                                <div class="explore__form-checkbox-list full-filter">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                            <!-- Form Property Status -->
                                                            <div class="form-group categories">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">For Sale</li>
                                                                        <li data-value="2" class="option">For Rent</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Property Status -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                            <!-- Form Bedrooms -->
                                                            <div class="form-group beds">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bedrooms -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                            <!-- Form Bathrooms -->
                                                            <div class="form-group bath">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
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
                                                                    <div id="area-range" data-min="0" data-max="1300" data-unit="sq ft"></div>
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
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                <input id="check-2" type="checkbox" name="check">
                                                                <label for="check-2">Air Conditioning</label>
                                                                <input id="check-3" type="checkbox" name="check">
                                                                <label for="check-3">Swimming Pool</label>
                                                                <input id="check-4" type="checkbox" name="check">
                                                                <label for="check-4">Central Heating</label>
                                                                <input id="check-5" type="checkbox" name="check">
                                                                <label for="check-5">Laundry Room</label>
                                                                <input id="check-6" type="checkbox" name="check">
                                                                <label for="check-6">Gym</label>
                                                                <input id="check-7" type="checkbox" name="check">
                                                                <label for="check-7">Alarm</label>
                                                                <input id="check-8" type="checkbox" name="check">
                                                                <label for="check-8">Window Covering</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                <input id="check-9" type="checkbox" name="check">
                                                                <label for="check-9">WiFi</label>
                                                                <input id="check-10" type="checkbox" name="check">
                                                                <label for="check-10">TV Cable</label>
                                                                <input id="check-11" type="checkbox" name="check">
                                                                <label for="check-11">Dryer</label>
                                                                <input id="check-12" type="checkbox" name="check">
                                                                <label for="check-12">Microwave</label>
                                                                <input id="check-13" type="checkbox" name="check">
                                                                <label for="check-13">Washer</label>
                                                                <input id="check-14" type="checkbox" name="check">
                                                                <label for="check-14">Refrigerator</label>
                                                                <input id="check-15" type="checkbox" name="check">
                                                                <label for="check-15">Outdoor Shower</label>
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
                                                <div class="rld-single-input">
                                                    <input type="text" placeholder="Enter Keyword...">
                                                </div>
                                                <div class="rld-single-select ml-22">
                                                    <select class="select single-select">
                                                        <option value="1">Property Type</option>
                                                        <option value="2">Family House</option>
                                                        <option value="3">Apartment</option>
                                                        <option value="3">Condo</option>
                                                    </select>
                                                </div>
                                                <div class="rld-single-select">
                                                    <select class="select single-select mr-0">
                                                        <option value="1">Location</option>
                                                        <option value="2">Los Angeles</option>
                                                        <option value="3">Chicago</option>
                                                        <option value="3">Philadelphia</option>
                                                        <option value="3">San Francisco</option>
                                                        <option value="3">Miami</option>
                                                        <option value="3">Houston</option>
                                                    </select>
                                                </div>
                                                <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                    <a class="btn btn-yellow" href="#">Search Now</a>
                                                </div>
                                                <div class="explore__form-checkbox-list full-filter">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                            <!-- Form Property Status -->
                                                            <div class="form-group categories">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">For Sale</li>
                                                                        <li data-value="2" class="option">For Rent</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Property Status -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                            <!-- Form Bedrooms -->
                                                            <div class="form-group beds">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bedrooms -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                            <!-- Form Bathrooms -->
                                                            <div class="form-group bath">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
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
                                                                    <div id="area-range-rent" data-min="0" data-max="1300" data-unit="sq ft"></div>
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
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                <input id="check-16" type="checkbox" name="check">
                                                                <label for="check-16">Air Conditioning</label>
                                                                <input id="check-17" type="checkbox" name="check">
                                                                <label for="check-17">Swimming Pool</label>
                                                                <input id="check-18" type="checkbox" name="check">
                                                                <label for="check-18">Central Heating</label>
                                                                <input id="check-19" type="checkbox" name="check">
                                                                <label for="check-19">Laundry Room</label>
                                                                <input id="check-20" type="checkbox" name="check">
                                                                <label for="check-20">Gym</label>
                                                                <input id="check-21" type="checkbox" name="check">
                                                                <label for="check-21">Alarm</label>
                                                                <input id="check-22" type="checkbox" name="check">
                                                                <label for="check-22">Window Covering</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                <input id="check-23" type="checkbox" name="check">
                                                                <label for="check-23">WiFi</label>
                                                                <input id="check-24" type="checkbox" name="check">
                                                                <label for="check-24">TV Cable</label>
                                                                <input id="check-25" type="checkbox" name="check">
                                                                <label for="check-25">Dryer</label>
                                                                <input id="check-26" type="checkbox" name="check">
                                                                <label for="check-26">Microwave</label>
                                                                <input id="check-27" type="checkbox" name="check">
                                                                <label for="check-27">Washer</label>
                                                                <input id="check-28" type="checkbox" name="check">
                                                                <label for="check-28">Refrigerator</label>
                                                                <input id="check-29" type="checkbox" name="check">
                                                                <label for="check-29">Outdoor Shower</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
<section class="feature-categories bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Popular </span>Places</h2>
            <p>Properties In Most Popular Places.</p>
        </div>
        <div class="row">
            <!-- Single category -->
           @foreach ( $city as $cities )
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="small-category-2">
                    <div class="small-category-2-thumb img-1">
                        <a href="properties-map.html"><img src="{{asset('assets/images/cities/'.$cities->image)}}" alt=""></a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title"><a href="properties-map.html">{{ $cities->name }}</a></h4>
                        {{-- <span>203 Properties</span> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /row -->
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->

<!-- START SECTION FEATURED PROPERTIES -->
@if(!empty($property))
<section class="featured portfolio bg-white-2 rec-pro full-l">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Featured </span>Properties</h2>
            <p>These are our featured properties</p>
        </div>
        <div class="row portfolio-items">
            @foreach ($property as $properties )
            @if ($properties->moderation_status == 'approved')
            <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                <div class="project-single" data-aos="fade-right">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="{{ route('front.property_detail',$properties->id) }}" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button alt sale">For Sale</div>
                                <img src="{{asset('assets/images/properties/'.$properties->image)}}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="{{ route('front.property_detail',$properties->id) }}" class="btn"><i class="fa fa-link"></i></a>
                            <a href="{{asset($properties->video)}}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="{{ route('front.property_detail',$properties->id) }}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="{{ route('front.property_detail',$properties->id) }}">{{ $properties->name }}</a></h3>
                        <p class="homes-address mb-3">
                            <a href="{{ route('front.property_detail',$properties->id) }}">
                                <i class="fa fa-map-marker"></i><span>{{ $properties->location }}</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>{{ $properties->number_of_bedrooms }}</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>{{ $properties->number_of_bathroom }}</span>
                            </li>
                            @if ($properties->square)
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>{{ $properties->square }} ft</span>
                            </li>
                            @endif
                            @if ($properties->marala)
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>{{ $properties->marala }} marla</span>
                            </li>
                        @endif
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                             <a href="{{ route('front.property_detail',$properties->id) }}">{{ $properties->price }} {{ $properties->currency }}</a>
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
            @endif
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
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
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
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
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
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
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
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
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
                @foreach ($project as $projects )
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                    <div class="landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="{{ route('front.project_detail',$projects->id) }}" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <img src="{{asset('assets/images/projects/'.$projects->image)}}" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="{{ route('front.project_detail',$projects->id) }}" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="{{asset($projects->video)}}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="{{ route('front.project_detail',$projects->id) }}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="{{ route('front.project_detail',$projects->id) }}">{{ $projects->title }}</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="{{ route('front.project_detail',$projects->id) }}">
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
            @foreach ($agents as $agent )
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="150">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="{{asset('assets/images/agent/'.$agent->image)}}" alt=""/></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="{{ route('front.agent_detail',$agent->id) }}">{{ $agent->name }}</a></h3>
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
            <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="150">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="{{ asset('/front/images/testimonials/ts-1.jpg') }}" alt=""/></span>
                    <h5>Lisa Smith</h5>
                    <p>New York</p>
                </div>
            </div>
            <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="250">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="{{ asset('/front/images/testimonials/ts-2.jpg') }}" alt=""/></span>
                    <h5>Jhon Morris</h5>
                    <p>Los Angeles</p>
                </div>
            </div>
            <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="350">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="{{ asset('/front/images/testimonials/ts-3.jpg') }}" alt=""/></span>
                    <h5>Mary Deshaw</h5>
                    <p>Chicago</p>
                </div>
            </div>
            <div class="singleJobClinet">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="{{ asset('/front/images/testimonials/ts-4.jpg') }}" alt=""/></span>
                    <h5>Gary Steven</h5>
                    <p>Philadelphia</p>
                </div>
            </div>
            <div class="singleJobClinet">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="{{ asset('/front/images/testimonials/ts-5.jpg') }}" alt=""/></span>
                    <h5>Cristy Mayer</h5>
                    <p>San Francisco</p>
                </div>
            </div>
            <div class="singleJobClinet">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="{{ asset('/front/images/testimonials/ts-6.jpg') }}" alt=""/></span>
                    <h5>Ichiro Tasaka</h5>
                    <p>Houston</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIALS -->

<!-- STAR SECTION PARTNERS -->
<div class="partners bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Our </span>Partners</h2>
            <p>The Companies That Represent Us.</p>
        </div>
        <div class="owl-carousel style2">
            <div class="owl-item" data-aos="fade-up"><img src="{{ asset('/front/images/partners/11.jpg') }}" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="{{ asset('/front/images/partners/12.jpg') }}" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="{{ asset('/front/images/partners/13.jpg') }}" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="{{ asset('/front/images/partners/14.jpg') }}" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="{{ asset('/front/images/partners/15.jpg') }}" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="{{ asset('/front/images/partners/16.jpg') }}" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="{{ asset('/front/images/partners/17.jpg') }}" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="{{ asset('/front/images/partners/11.jpg') }}" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="{{ asset('/front/images/partners/12.jpg') }}" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="{{ asset('/front/images/partners/13.jpg') }}" alt=""></div>
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->
    @endsection
</body>
@endsection
