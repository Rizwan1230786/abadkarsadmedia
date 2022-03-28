@extends('front.layout.layout')
@section('body')

    <body class="inner-pages sin-1 homepage-4 hd-white">
    @section('main')
    @section('header')
    <header id="header-container">
        <!-- Header -->
        <div id="header">
            <div class="container container-header">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{ route('front.index') }}"><img src="{{ asset('/front/images/abadkar-logo.png') }}" alt=""></a>
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



            </div>
        </div>
        <!-- Header / End -->

    </header>
    @endsection
    <!-- START SECTION PROPERTIES LISTING -->
    <section class="single-proper blog details">
        <div class="container">
            <div class="row">
                @foreach ($project as $properties)
                <div class="col-lg-8 col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="headings-2 pt-0">
                                <div class="pro-wrapper">
                                    <div class="detail-wrapper-body">
                                        <div class="listing-title-bar">
                                            <h3>{{ $properties->title }}<span class="mrg-l-5 category-tag">For Sale</span></h3>
                                            <div class="mt-0">
                                                <a href="#listing-location" class="listing-address">
                                                    <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{ $properties->location }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single detail-wrapper mr-2">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h4>{{ $properties->currency_name  }} {{ $properties->max_price  }}</h4>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <p>$ 1,200 / sq ft</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- main slider carousel items -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner carus" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="{{asset('assets/images/projects/'.$properties->image)}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="{{ asset('/front/images/slider/home-slider-2.jpg') }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="{{ asset('/front/images/slider/home-slider-3.jpg') }}" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="{{ asset('/front/images/slider/home-slider-4.jpg') }}" alt="Second slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- cars content -->
                            <div class="homes-content details-2 mb-4">
                                <!-- cars List -->
                                {{-- <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                        <span>Beds {{ $properties->number_of_bedrooms }}</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                        <span>Baths {{ $properties->number_of_bathrooms }}</span>
                                    </li>
                                    @if ($properties->square)
                                    <li>
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span>{{ $properties->square }} sq ft</span>
                                    </li>
                                    @endif
                                    @if ($properties->marala)
                                    <li>
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span>{{ $properties->marala }} marala</span>
                                    </li>
                                    @endif
                                    <li>
                                        <i class="fa fa-columns" aria-hidden="true"></i>
                                        <span>{{ $properties->number_of_floors  }}</span>
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="blog-info details mb-30">
                                <h5 class="mb-4">Description</h5>
                                <p class="mb-3"> {!! $properties->page_content !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="single homes-content details mb-30">
                        <!-- title -->
                        <h5 class="mb-4">Property Details</h5>
                        <ul class="homes-list clearfix">
                            <li>
                                <span class="font-weight-bold mr-1">Property ID:</span>
                                <span class="det">{{ $properties->id }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property Type:</span>
                                <span class="det">{{ $properties->category }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property status:</span>
                                <span class="det">{{ $properties->status }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property Price:</span>
                                <span class="det">{{ $properties->currency }} {{ $properties->price }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Floors:</span>
                                <span class="det">{{ $properties->num_of_floors }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">BLocks</span>
                                <span class="det">{{ $properties->num_of_blocks }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Flats</span>
                                <span class="det">{{ $properties->num_of_flats }}</span>
                            </li>
                            @if ($properties->commercial_area_min || $properties->commercial_area_max)
                            <li>
                                <span class="font-weight-bold mr-1">Commercial Area (min)</span>
                                <span class="det">{{ $properties->commercial_area_min }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Commercial Area (max)</span>
                                <span class="det">{{ $properties->commercial_area_max }}</span>
                            </li>
                            @endif
                            @if ($properties->residential_area_min || $properties->residential_area_max)
                            <li>
                                <span class="font-weight-bold mr-1">Residential Area (min)</span>
                                <span class="det">{{ $properties->residential_area_min }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Residential Area (max)</span>
                                <span class="det">{{ $properties->residential_area_max }}</span>
                            </li>
                            @endif




                        </ul>
                        <!-- title -->
                        <h5 class="mt-5">Features</h5>
                        <!-- cars List -->
                        <ul class="homes-list clearfix">

                            @foreach ($assign as $assigns )
                            @if ($assigns->projectID == $properties->id)
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>{{ $assigns->FeaturesName }}</span>
                            </li>

                            @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>Floor Plans</h5>
                        <img alt="image" src="{{ asset('/front/images/bg/floor-plan-1.png') }}">
                    </div>
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>What's Nearby</h5>
                        <div class="property-nearby">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="nearby-info mb-4">
                                        <span class="nearby-title mb-3 d-block text-info">
                                           <i class="fas fa-graduation-cap mr-2"></i><b class="title">Education</b>
                                        </span>
                                        <div class="nearby-list">
                                            <ul class="property-list list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Education Mandarin</h6>
                                                    <span>(15.61 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Marry's Education</h6>
                                                    <span>(15.23 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">The Kaplan</h6>
                                                    <span>(15.16 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nearby-info mb-4">
                                        <span class="nearby-title mb-3 d-block text-success">
                                          <i class="fas fa-user-md mr-2"></i><b class="title">Health & Medical</b>
                                        </span>
                                        <div class="nearby-list">
                                            <ul class="property-list list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Natural Market</h6>
                                                    <span>(13.20 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Food For Health</h6>
                                                    <span>(13.22 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">A Matter of Health</h6>
                                                    <span>(13.34 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nearby-info">
                                        <span class="nearby-title mb-3 d-block text-danger">
                                            <i class="fas fa-car mr-2"></i><b class="title">Transportation</b>
                                        </span>
                                        <div class="nearby-list">
                                            <ul class="property-list list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Airport Transportation</h6>
                                                    <span>(11.36 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">NYC Executive Limo</h6>
                                                    <span>(11.87 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Empire Limousine</h6>
                                                    <span>(11.52 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property wprt-image-video w50 pro vid-si3">
                        <h5>Property Video</h5>
                        <img alt="image" src="{{ asset('/front/images/slider/home-slider-4.jpg') }}">
                        <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=14semTlwyUY">
                            <i class="fa fa-play"></i>
                        </a>
                        <div class="iq-waves">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                    <div class="property-location map">
                        <h5>Location</h5>
                        <div class="divider-fade"></div>
                        <div id="map-contact" class="contact-map"></div>
                    </div>


                </div>
                @endforeach
                <aside class="col-lg-4 col-md-12 car">
                    <div class="single widget">
                        <!-- Start: Schedule a Tour -->
                        <div class="schedule widget-boxed mt-30">
                            <div class="widget-boxed-header">
                                <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Schedule a Tour</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 book">
                                        <input type="text" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 book2">
                                        <input type="text" id="reservation-time" class="form-control" readonly="">
                                    </div>
                                </div>
                                <div class="row mrg-top-15 mb-3">
                                    <div class="col-lg-6 col-md-12 mt-4">
                                        <label class="mb-4">Adult</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                     <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                         <i class="fa fa-minus"></i>
                                     </button>
                                        </span>
                                            <input type="text" name="quant[1]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                            <span class="input-group-btn">
                                         <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[1]">
                                          <i class="fa fa-plus"></i>
                                         </button>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mt-4">
                                        <label class="mb-4">Children</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                     <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                         <i class="fa fa-minus"></i>
                                     </button>
                                        </span>
                                            <input type="text" name="quant[2]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                            <span class="input-group-btn">
                                         <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[2]">
                                          <i class="fa fa-plus"></i>
                                         </button>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="payment-method.html" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit Request</a>
                            </div>
                        </div>
                        <!-- End: Schedule a Tour -->
                        <!-- end author-verified-badge -->
                        <div class="sidebar">
                            <div class="widget-boxed mt-33 mt-5">
                                <div class="widget-boxed-header">
                                    <h4>Agent Information</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="sidebar-widget author-widget2">
                                        <div class="author-box clearfix">
                                            <img src="{{ asset('/front/images/testimonials/ts-1.jpg') }}" alt="author-image" class="author__img">
                                            <h4 class="author__title">Lisa Clark</h4>
                                            <p class="author__meta">Agent of Property</p>
                                        </div>
                                        <ul class="author__contact">
                                            <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>302 Av Park, New York</li>
                                            <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">(234) 0200 17813</a></li>
                                            <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">lisa@gmail.com</a></li>
                                        </ul>
                                        <div class="agent-contact-form-sidebar">
                                            <h4>Request Inquiry</h4>
                                            <form name="contact_form" method="post" action="functions.php">
                                                <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                                <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                                <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                                <textarea placeholder="Message" name="message" required></textarea>
                                                <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-search-field-2">
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Recent Properties</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            <div class="recent-main">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img src="{{ asset('/front/images/feature-properties/fp-1.jpg') }}" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                            <div class="recent-main my-4">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img src="{{ asset('/front/images/feature-properties/fp-2.jpg') }}" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                            <div class="recent-main">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img src="{{ asset('/front/images/feature-properties/fp-3.jpg') }}" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header mb-5">
                                        <h4>Feature Properties</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="slick-lancers">
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>New York</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{ asset('/front/images/feature-properties/fp-1.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Los Angles</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{ asset('/front/images/feature-properties/fp-2.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>San Francisco</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{ asset('/front/images/feature-properties/fp-3.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Miami FL</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{ asset('/front/images/feature-properties/fp-4.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Chicago IL</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{ asset('/front/images/feature-properties/fp-5.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Toronto CA</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{ asset('/front/images/feature-properties/fp-6.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Specials of the day</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="banner"><img src="{{ asset('/front/images/single-property/banner.jpg') }}" alt=""></div>
                                    </div>
                                </div>
                                <!-- End: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Popular Tags</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            <div class="tags">
                                                <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
                                            </div>
                                            <div class="tags">
                                                <span><a href="#" class="btn btn-outline-primary">Baths</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Beds</a></span>
                                            </div>
                                            <div class="tags">
                                                <span><a href="#" class="btn btn-outline-primary">Garages</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Family</a></span>
                                            </div>
                                            <div class="tags">
                                                <span><a href="#" class="btn btn-outline-primary">Real Estates</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                                            </div>
                                            <div class="tags no-mb">
                                                <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- START SIMILAR PROPERTIES -->
            <!-- END SIMILAR PROPERTIES -->
        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->
    @endsection
</body>
@endsection
