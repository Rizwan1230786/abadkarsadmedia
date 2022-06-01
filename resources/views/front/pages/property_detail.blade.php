<?php

use App\Models\Category;
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="{{ $properties->meta_keywords }}">
    <meta name="description" content="{{ $properties->meta_description }}">
    <title>{{ $properties->meta_title }}</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:500,600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('/front') }}/font/flaticon.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/font-awesome.min.css">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{ asset('/front') }}/css/leaflet.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/leaflet.markercluster.default.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('/front') }}/css/timedropper.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/datedropper.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/lightcase.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/menu.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('/front') }}/css/styles.css">
    <link rel="stylesheet" id="color" href="{{ asset('/front') }}/css/default.css">
</head>

<body class="inner-pages sin-1 homepage-4 hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <?php

        use App\Models\subpages;
        ?>
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
                            @foreach ($data as $val)
                            <?php
                            $subPage = subpages::where(['parent_id' => $val->id, 'is_publish' => 1])
                                ->orderBy('page_rank', 'asc')
                                ->get(); ?>
                            <li class="nav-item <?= isset($subPage[0]->id) && !empty($subPage[0]->id) ? 'dropdown' : '' ?>">
                                <a href="{{ url($val->url_slug) }}" role="button">
                                    {{ $val->page_title }}
                                </a>
                                <ul>
                                    <?php
                                    foreach ($subPage as $key => $value) {
                                    ?>
                                        <li><a href="/{{ $value->url_slug }}">{{ $value->page_title }} </a></li>


                                    <?php }
                                    ?>
                                </ul>
                            </li>
                            @endforeach
                            @guest
                            <li><a href="{{ url('/add-property') }}">Add Property</a>
                                @endguest
                                <!-- <li><a href="{{ route('front.index') }}">Home</a>

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
                    <li><a href="{{ route('front.contact') }}">Contact</a></li> -->
                            <li class="d-none d-xl-none  d-block d-lg-block"><a href="login.html">Login</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Add
                                    Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                        </ul>
                    </nav>
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->

                <!-- Right Side Content / End -->
                <div class="right-side d-none d-none d-lg-none d-xl-flex" style="width:150px ;">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <a href="{{ route('front.contact') }}" class="button border">Contact us<i class="fas fa-laptop-house ml-2"></i></a>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

                <!-- Right Side Content / End -->

                <!-- Right Side Content / End -->
                @if (Auth::guard('customeruser')->user())
                <div class="header-user-menu user-menu add">
                    <div class="header-user-name">
                        <span>
                            @if (Auth::guard('customeruser')->user()->image != null)
                            <img src="{{ URL::asset('assets/images/userphoto/' . Auth::guard('customeruser')->user()->image ?? '') }}" alt="">@else<img src="{{ URL::asset('/default/nodp.jpg') }}" alt="">
                            @endif
                        </span>Hi, {{ Auth::guard('customeruser')->user()->firstname }}!
                    </div>
                    <ul>
                        <li><a href="{{ url('user/dashboard') }}"> Dashboard</a></li>
                        <li><a href="{{ url('user/logout') }}">Log Out</a></li>
                    </ul>
                </div>
                @else
                <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                    <!-- Header Widget -->
                    <div class="header-widget sign-in">
                        <div class="show-reg-form "><a href="{{ url('user/signin') }}">Sign In</a></div>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                @endif
                <!-- Right Side Content / End -->

                <!-- lang-wrap-->

                <!-- lang-wrap end-->
            </div>
        </div>
        <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($property_images as $image)
                @if ($image->property_id == $properties->id)
                <div class="swiper-slide {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ is_null($image->file) ? asset('assets/images/properties/' . $image->image) : asset('assets/images/properties/' . $image->image) }}" class="d-block" alt="..." style="height: 300px;width: 400px;">
                </div>
                @endif
                @endforeach
            </div>

            <div class="swiper-pagination swiper-pagination-white"></div>

            <div class="swiper-button-next swiper-button-white mr-3"></div>
            <div class="swiper-button-prev swiper-button-white ml-3"></div>
        </div>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="single-proper blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="headings-2 pt-0">
                                    <div class="pro-wrapper">
                                        <div class="col-md-7">
                                            <div class="detail-wrapper-body">
                                                <div class="listing-title-bar">

                                                    <h3>{{ $properties->name }} <span class="mrg-l-5 category-tag">For
                                                            {{ $properties->type }}</span></h3>
                                                    <div class="mt-0">
                                                        <a href="#listing-location" class="listing-address">
                                                            <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>
                                                            {{ $properties->location }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">

                                            <div class="detail-wrapper-body">
                                                <div class="listing-title-bar">
                                                    <h4>(PKR) {{ number_format($properties->price, 0)}}</h4>
                                                    {{-- <div class="mt-0">
                                                            <a href="#listing-location" class="listing-address">
                                                                <p>$ 1,200 / sq ft</p>
                                                            </a>
                                                        </div> --}}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                                <!-- Star Description -->
                                <div class="blog-info details mb-30">
                                    <h5 class="mb-4">Description</h5>
                                    <p class="mb-3">{!! $properties->descripition !!}
                                    </p>
                                </div>
                                <!-- End Description -->
                            </div>
                        </div>
                        <!-- Star Property Details -->
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4">Property Details</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">Property ID:</span>
                                    <span class="det">{{ $properties->id }}</span>
                                </li>
                                <?php
                                $category = Category::where(['id' => $properties->category])->first();
                                ?>
                                <li>
                                    <span class="font-weight-bold mr-1">Property Type:</span>
                                    <span class="det">{{ $category->name }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property status:</span>
                                    <span class="det">For {{ $properties->type }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property Price (PKR):</span>
                                    <span class="det">{{ number_format($properties->price, 0)}}</span>
                                </li>
                                @if ($properties->number_of_floors)
                                <li>
                                    <span class="font-weight-bold mr-1">Floors:</span>
                                    <span class="det">{{ $properties->number_of_floors }}</span>
                                </li>
                                @endif
                                @if ($properties->number_of_bedrooms)
                                <li>
                                    <span class="font-weight-bold mr-1">Bedrooms:</span>
                                    <span class="det">{{ $properties->number_of_bedrooms }}</span>
                                </li>
                                @endif
                                @if ($properties->number_of_bathrooms)
                                <li>
                                    <span class="font-weight-bold mr-1">Bath:</span>
                                    <span class="det">{{ $properties->number_of_bathrooms }}</span>
                                </li>
                                @endif
                                <li>
                                    <span class="font-weight-bold mr-1">Area:</span>
                                    <span class="det">{{ number_format($properties->land_area, 1) }} {{ $properties->unit }}</span>
                                </li>
                            </ul>
                            <!-- title -->
                            <h5 class="mt-5">Features</h5>
                            <!-- cars List -->
                            <ul class="homes-list clearfix">

                                @foreach ($assign as $assigns)
                                @if ($assigns->propertiesID == $properties->id)
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>{{ $assigns->FeaturesName }}</span>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                            <!-- title -->
                            <h5 class="mt-5">Video</h5>
                            <!-- cars List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <span><a style="text-decoration: none;color: black;" href="{{ $properties->video_link }}">Click Here!</a></span>
                                </li>
                            </ul>
                        </div>
                        @if (isset($properties->property_map) && !empty($properties->property_map))
                        <div class="floor-plan property wprt-image-video w50 pro">
                            <h5>Property Map</h5>
                            <img width="100%" alt="Not Found" src="{{ asset('assets/images/properties/maps/' . $properties->property_map) }}">
                        </div>
                        @endif
                        @if (isset($properties->video) && !empty($properties->video))
                        <div class="property wprt-image-video w50 pro vid-si2">
                            <h5>Property Video</h5>
                            <img width="100%" alt="image" src="{{ asset('assets/images/properties/' . $properties->image) }}">
                            <a class="icon-wrap popup-video popup-youtube" href="{{ asset($properties->video) }}">
                                <i class="fa fa-play"></i>
                            </a>
                            {{-- <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div> --}}
                        </div>
                        @endif
                        {{-- <div class="property-location map">
                            <h5>Location</h5>
                            <div class="divider-fade"></div>
                            <div id="map-contact" class="contact-map"></div>
                        </div> --}}

                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <!-- Start: Schedule a Tour -->
                            <div class="schedule widget-boxed mt-0">
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
                                    <a href="#" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit
                                        Request</a>
                                </div>
                            </div>
                            <!-- End: Schedule a Tour -->
                            <!-- end author-verified-badge -->
                            <div class="sidebar">
                                @if ($agent != null)
                                <div class="widget-boxed mt-33 mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Agent Information</h4>
                                    </div>
                                    @foreach ($agent as $agent)
                                    @if ($agent->id == $properties->agent_id)
                                    <div class="widget-boxed-body">
                                        <div class="sidebar-widget author-widget2">
                                            <div class="author-box clearfix">
                                                <img src="{{ asset('assets/images/agent/' . $agent->image) }}" alt="author-image" class="author__img">
                                                <h4 class="author__title">{{ $agent->name }}</h4>
                                                <p class="author__meta">Agent of Property</p>
                                            </div>
                                            <ul class="author__contact">
                                                <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>{{ $agent->office_address }}
                                                </li>
                                                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">{{ $agent->office_number }}</a></li>
                                                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">{{ $agent->email }}</a></li>
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
                                    @endif
                                    @endforeach
                                </div>
                                @endif
                                {{-- @if ($agencies != null)
                                <div class="widget-boxed mt-33 mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Agency Information</h4>
                                    </div>
                                    @foreach ($agencies as $agencies)
                                    @if ($agencies->id == $properties->agency_id)
                                    <div class="widget-boxed-body">
                                        <div class="sidebar-widget author-widget2">
                                            <div class="author-box clearfix">
                                                <img src="{{asset('assets/images/agency/'.$agencies->image)}}" alt="author-image" class="author__img">
                                <h4 class="author__title">{{ $agencies->name }}</h4>
                                <p class="author__meta">Agent of Property</p>
                            </div>
                            <ul class="author__contact">
                                <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>{{ $agencies->office_address }}</li>
                                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">{{ $agencies->office_number }}</a></li>
                                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">{{ $agencies->email }}</a></li>
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
                @endif
                @endforeach
            </div>
            @endif --}}
            <div class="main-search-field-2">
                <!-- Start: Specials offer -->
                <div class="widget-boxed popular mt-5">
                    <div class="widget-boxed-header">
                        <h4>Specials of the day</h4>
                    </div>
                    <div class="widget-boxed-body">
                        <div class="banner"><img src="{{ asset('/front') }}/images/single-property/banner.jpg" alt="">
                        </div>
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
                                <span><a href="#" class="btn btn-outline-primary">Real
                                        Home</a></span>
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
                                <span><a href="#" class="btn btn-outline-primary">Real
                                        Estates</a></span>
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

    <!-- START FOOTER -->
    <!-- START FOOTER -->
    <footer class="first-footer rec-pro">
        <div class="top-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="netabout">
                            <a href="index.html" class="logo">
                                <img src="{{ asset('/front/images/abadkar-logo.png') }}" alt="netcom">
                            </a>
                            <p>Abadkar, Leading Property Portal in Pakistan - Property Buyers Sellers Landlords, and
                                Real Estate Agents in Karachi, Lahore, Islamabad, and all over Pakistan. We are
                                providing standard property - Commercial Plots, Lands & Markets - Villas -
                                Apartments - Bungalows - Home Buying & Renting Villas.</p>
                        </div>
                        <div class="contactus">
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">Rahim Yar Khan Abasiya Town, Pakistan</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">+923009264940</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">support@abadkar.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="navigation">
                            <h3>Navigation</h3>
                            <div class="nav-footer" style="padding: 0px">
                                <ul>
                                    <li><a href="{{ route('front.index') }}">Home One</a></li>
                                    <li><a href="#">Properties Right</a></li>
                                    <li><a href="{{ route('front.property') }}">Properties List</a></li>
                                    <li><a href="{{ route('front.property') }}">Property Details</a></li>
                                    <li class="no-mgb"><a href="{{ route('front.agent') }}">Agents
                                            Listing</a></li>
                                </ul>
                                <ul class="nav-right">
                                    <li><a href="#">Agents Details</a></li>
                                    <li><a href="{{ route('front.about') }}">About Us</a></li>
                                    <li><a href="#">Blog Default</a></li>
                                    <li><a href="#">Blog Details</a></li>
                                    <li class="no-mgb"><a href="{{ route('front.contact') }}">Contact
                                            Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="newsletters">
                            <h3>Newsletters</h3>
                            <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive
                                news in your inbox.</p>
                        </div>
                        <form class="bloq-email mailchimp form-inline" method="post">
                            <label for="subscribeEmail" class="error"></label>
                            <div class="email">
                                <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                <input type="submit" value="Subscribe">
                                <p class="subscription-success"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer rec-pro">
            <div class="container-fluid sd-f">
                <p style="text-align: center">2022 © Copyright <a href="{{ url('https://abadkar.com//') }}">Abadkar</a> - All Rights Reserved.</p>
                <ul class="netsocials" style="justify-content: center">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->

    <!--register form -->
    <div class="login-and-register-form modal">
        <div class="main-overlay"></div>
        <div class="main-register-holder">
            <div class="main-register fl-wrap">
                <div class="close-reg"><i class="fa fa-times"></i></div>
                <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                <div class="soc-log fl-wrap">
                    <p>Login</p>
                    <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with
                        Facebook</a>
                    <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                </div>
                <div class="log-separator fl-wrap"><span>Or</span></div>
                <div id="tabs-container">
                    <ul class="tabs-menu">
                        <li class="current"><a href="#tab-1">Login</a></li>
                        <li><a href="#tab-2">Register</a></li>
                    </ul>
                    <div class="tab">
                        <div id="tab-1" class="tab-contents">
                            <div class="custom-form">
                                <form method="post" name="registerform">
                                    <label>Username or Email Address * </label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <label>Password * </label>
                                    <input name="password" type="password" onClick="this.select()" value="">
                                    <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                    <div class="clearfix"></div>
                                    <div class="filter-tags">
                                        <input id="check-a" type="checkbox" name="check">
                                        <label for="check-a">Remember me</label>
                                    </div>
                                </form>
                                <div class="lost_password">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div id="tab-2" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                        <label>First Name * </label>
                                        <input name="name" type="text" onClick="this.select()" value="">
                                        <label>Second Name *</label>
                                        <input name="name2" type="text" onClick="this.select()" value="">
                                        <label>Email Address *</label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password *</label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->

    <!-- ARCHIVES JS -->
    <script src="{{ asset('/front') }}/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('/front') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('/front') }}/js/range-slider.js"></script>
    <script src="{{ asset('/front') }}/js/tether.min.js"></script>
    <script src="{{ asset('/front') }}/js/popper.min.js"></script>
    <script src="{{ asset('/front') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('/front') }}/js/mmenu.min.js"></script>
    <script src="{{ asset('/front') }}/js/mmenu.js"></script>
    <script src="{{ asset('/front') }}/js/slick.min.js"></script>
    <script src="{{ asset('/front') }}/js/slick4.js"></script>
    <script src="{{ asset('/front') }}/js/fitvids.js"></script>
    <script src="{{ asset('/front') }}/js/smooth-scroll.min.js"></script>
    <script src="{{ asset('/front') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('/front') }}/js/popup.js"></script>
    <script src="{{ asset('/front') }}/js/ajaxchimp.min.js"></script>
    <script src="{{ asset('/front') }}/js/newsletter.js"></script>
    <script src="{{ asset('/front') }}/js/timedropper.js"></script>
    <script src="{{ asset('/front') }}/js/datedropper.js"></script>
    <script src="{{ asset('/front') }}/js/leaflet.js"></script>
    <script src="{{ asset('/front') }}/js/leaflet-gesture-handling.min.js"></script>
    <script src="{{ asset('/front') }}/js/leaflet-providers.js"></script>
    <script src="{{ asset('/front') }}/js/leaflet.markercluster.js"></script>
    <script src="{{ asset('/front') }}/js/map-single.js"></script>
    <script src="{{ asset('/front') }}/js/color-switcher.js"></script>
    <script src="{{ asset('/front') }}/js/swiper.min.js"></script>
    <script src="{{ asset('/front') }}/js/inner.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            }
        });
    </script>

    <!-- Date Dropper Script-->
    <script>
        $('#reservation-date').dateDropper();
    </script>
    <!-- Time Dropper Script-->
    <script>
        this.$('#reservation-time').timeDropper({
            setCurrentTime: false,
            meridians: true,
            primaryColor: "#e8212a",
            borderColor: "#e8212a",
            minutesInterval: '15'
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
    </script>

    <script>
        $('.slick-carousel').each(function() {
            var slider = $(this);
            $(this).slick({
                infinite: true,
                dots: false,
                arrows: false,
                centerMode: true,
                centerPadding: '0'
            });

            $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                slider.slick('slickPrev');
            });
            $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                slider.slick('slickNext');
            });
        });
    </script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>