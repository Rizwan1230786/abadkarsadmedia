@extends('front.layout.layout')
@section('body')

    <body class="inner-pages agents homepage-4 det ag-de hd-white">
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

                <!-- lang-wrap-->

                <!-- lang-wrap end-->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    @endsection
        <!-- START SECTION AGENTS DETAILS -->
        <section class="blog blog-section portfolio single-proper details mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <section class="headings-2 pt-0 hee">
                                    <div class="pro-wrapper">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <div class="text-heading text-left">
                                                    <p><a href="index.html">Home </a> &nbsp;/&nbsp; <span>Agencies Single</span></p>
                                                </div>
                                                <h3>Agencies Single</h3>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="news-item news-item-sm">
                                    <a href="agencies-details.html" class="news-img-link">
                                        <div class="news-item-img homes">
                                            <div class="homes-tag button alt featured">4 Listings</div>
                                            <img class="resp-img" src="{{ asset('/front') }}/images/partners/ag-6.png" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <a href="agencies-details.html"><h3>Capital Partners</h3></a>
                                        <div class="the-agents">
                                            <ul class="the-agents-details">
                                                <li><a href="#">Office: (234) 0200 17813</a></li>
                                                <li><a href="#">Mobile: (657) 9854 12095</a></li>
                                                <li><a href="#">Fax: 809 123 0951</a></li>
                                                <li><a href="#">Email: info@agent.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="properties-full-grid-2.html" class="news-link">View My Listings</a>
                                            <div class="admin">
                                                <p>Arling Tracy</p>
                                                <img src="{{ asset('/front') }}/images/testimonials/ts-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-pots py-0">
                            <div class="blog-info details mb-30">
                                <h5 class="mb-4">Description</h5>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam.</p>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam.</p>
                            </div>
                            <!-- START LISTING PROPERTIES -->
                            <section class="similar-property featured portfolio bshd p-0 bg-white">
                                <div class="container-px-0">
                                    <h5>Listing</h5>
                                    <div class="row">
                                        <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                            <div class="project-single">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button alt featured">Featured</div>
                                                            <div class="homes-tag button alt sale">For Sale</div>
                                                            <div class="homes-price">$9,000/mo</div>
                                                            <img src="{{ asset('/front') }}/images/blog/b-11.jpg" alt="home-1" class="img-responsive">
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
                                                    <ul class="homes-list clearfix">
                                                        <li>
                                                            <span>6 Beds</span>
                                                        </li>
                                                        <li>
                                                            <span>3 Baths</span>
                                                        </li>
                                                        <li>
                                                            <span>720 sq ft</span>
                                                        </li>
                                                        <li>
                                                            <span>2 Garages</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-lg-6 col-md-6 col-xs-12 people rent">
                                            <div class="project-single">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button sale rent">For Rent</div>
                                                            <div class="homes-price">$3,000/mo</div>
                                                            <img src="{{ asset('/front') }}/images/blog/b-12.jpg" alt="home-1" class="img-responsive">
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
                                                    <ul class="homes-list clearfix">
                                                        <li>
                                                            <span>6 Beds</span>
                                                        </li>
                                                        <li>
                                                            <span>3 Baths</span>
                                                        </li>
                                                        <li>
                                                            <span>720 sq ft</span>
                                                        </li>
                                                        <li>
                                                            <span>2 Garages</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="item col-lg-6 col-md-6 col-xs-12 people sale no-pb">
                                            <div class="project-single no-mb">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button alt sale">For Sale</div>
                                                            <div class="homes-price">$9,000/mo</div>
                                                            <img src="{{ asset('/front') }}/images/feature-properties/fp-11.jpg" alt="home-1" class="img-responsive">
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
                                                    <ul class="homes-list clearfix">
                                                        <li>
                                                            <span>6 Beds</span>
                                                        </li>
                                                        <li>
                                                            <span>3 Baths</span>
                                                        </li>
                                                        <li>
                                                            <span>720 sq ft</span>
                                                        </li>
                                                        <li>
                                                            <span>2 Garages</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-lg-6 col-md-6 it2 col-xs-12 web rent no-pb x2">
                                            <div class="project-single no-mb last">
                                                <div class="project-inner project-head">
                                                    <div class="homes">
                                                        <!-- homes img -->
                                                        <a href="single-property-1.html" class="homes-img">
                                                            <div class="homes-tag button alt featured">Featured</div>
                                                            <div class="homes-tag button sale rent">For Rent</div>
                                                            <div class="homes-price">$3,000/mo</div>
                                                            <img src="{{ asset('/front') }}/images/feature-properties/fp-12.jpg" alt="home-1" class="img-responsive">
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
                                                    <ul class="homes-list clearfix">
                                                        <li>
                                                            <span>6 Beds</span>
                                                        </li>
                                                        <li>
                                                            <span>3 Baths</span>
                                                        </li>
                                                        <li>
                                                            <span>720 sq ft</span>
                                                        </li>
                                                        <li>
                                                            <span>2 Garages</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- END LISTING PROPERTIES -->
                            <!-- START SECTION AGENTS -->
                            <section class="blog blog-section portfolio py-0 age bg-white">
                                <div class="container">
                                    <h5>Agents</h5>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="news-item news-item-sm">
                                                        <a href="agent-details.html" class="news-img-link">
                                                            <div class="news-item-img homes">
                                                                <div class="homes-tag button alt featured">3 Listings</div>
                                                                <img class="resp-img" src="{{ asset('/front') }}/images/team/a-1.png" alt="blog image">
                                                            </div>
                                                        </a>
                                                        <div class="news-item-text">
                                                            <a href="agent-details.html"><h3>Carls Jhons</h3></a>
                                                            <div class="the-agents">
                                                                <ul class="the-agents-details">
                                                                    <li><a href="#">Office: (234) 0200 17813</a></li>
                                                                    <li><a href="#">Mobile: (657) 9854 12095</a></li>
                                                                    <li><a href="#">Fax: 809 123 0951</a></li>
                                                                    <li><a href="#">Email: info@agent.com</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="news-item-bottom">
                                                                <a href="properties-full-grid-2.html" class="news-link">View My Listings</a>
                                                                <div class="admin company">
                                                                    <p>Company Name</p>
                                                                    <img src="{{ asset('/front') }}/images/partners/1.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12 space">
                                                    <div class="news-item news-item-sm">
                                                        <a href="agent-details.html" class="news-img-link">
                                                            <div class="news-item-img homes">
                                                                <div class="homes-tag button alt featured">3 Listings</div>
                                                                <img class="resp-img" src="{{ asset('/front') }}/images/team/a-2.png" alt="blog image">
                                                            </div>
                                                        </a>
                                                        <div class="news-item-text">
                                                            <a href="agent-details.html"><h3>Arling Tracy</h3></a>
                                                            <div class="the-agents">
                                                                <ul class="the-agents-details">
                                                                    <li><a href="#">Office: (234) 0200 17813</a></li>
                                                                    <li><a href="#">Mobile: (657) 9854 12095</a></li>
                                                                    <li><a href="#">Fax: 809 123 0951</a></li>
                                                                    <li><a href="#">Email: info@agent.com</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="news-item-bottom">
                                                                <a href="properties-full-grid-2.html" class="news-link">View My Listings</a>
                                                                <div class="admin company">
                                                                    <p>Company Name</p>
                                                                    <img src="{{ asset('/front') }}/images/partners/2.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="news-item news-item-sm">
                                                        <a href="agent-details.html" class="news-img-link">
                                                            <div class="news-item-img homes">
                                                                <div class="homes-tag button alt featured">3 Listings</div>
                                                                <img class="resp-img" src="{{ asset('/front') }}/images/team/a-3.png" alt="blog image">
                                                            </div>
                                                        </a>
                                                        <div class="news-item-text">
                                                            <a href="agent-details.html"><h3>Mark Web</h3></a>
                                                            <div class="the-agents">
                                                                <ul class="the-agents-details">
                                                                    <li><a href="#">Office: (234) 0200 17813</a></li>
                                                                    <li><a href="#">Mobile: (657) 9854 12095</a></li>
                                                                    <li><a href="#">Fax: 809 123 0951</a></li>
                                                                    <li><a href="#">Email: info@agent.com</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="news-item-bottom">
                                                                <a href="properties-full-grid-2.html" class="news-link">View My Listings</a>
                                                                <div class="admin company">
                                                                    <p>Company Name</p>
                                                                    <img src="{{ asset('/front') }}/images/partners/3.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- END SECTION AGENTS -->
                            <!-- Star Reviews -->
                            <section class="reviews comments">
                                <h3 class="mb-5">3 Reviews</h3>
                                <div class="row mb-5">
                                    <ul class="col-12 commented pl-0">
                                        <li class="comm-inf">
                                            <div class="col-md-2">
                                                <img src="{{ asset('/front') }}/images/testimonials/ts-5.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-10 comments-info">
                                                <div class="conra">
                                                    <h5 class="mb-2">Mary Smith</h5>
                                                    <div class="rating-box">
                                                        <div class="detail-list-rating mr-0">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-4">May 30 2020</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                                <div class="rest"><img src="{{ asset('/front') }}/images/single-property/s-1.jpg" class="img-fluid" alt=""></div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="row">
                                    <ul class="col-12 commented pl-0">
                                        <li class="comm-inf">
                                            <div class="col-md-2">
                                                <img src="{{ asset('/front') }}/images/testimonials/ts-2.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-10 comments-info">
                                                <div class="conra">
                                                    <h5 class="mb-2">Abraham Tyron</h5>
                                                    <div class="rating-box">
                                                        <div class="detail-list-rating mr-0">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-4">june 1 2020</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="row mt-5">
                                    <ul class="col-12 commented mb-0 pl-0">
                                        <li class="comm-inf">
                                            <div class="col-md-2">
                                                <img src="{{ asset('/front') }}/images/testimonials/ts-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-md-10 comments-info">
                                                <div class="conra">
                                                    <h5 class="mb-2">Lisa Williams</h5>
                                                    <div class="rating-box">
                                                        <div class="detail-list-rating mr-0">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-4">jul 12 2020</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                                <div class="resti">
                                                    <div class="rest"><img src="{{ asset('/front') }}/images/single-property/s-2.jpg" class="img-fluid" alt=""></div>
                                                    <div class="rest"><img src="{{ asset('/front') }}/images/single-property/s-3.jpg" class="img-fluid" alt=""></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <!-- End Reviews -->
                            <!-- Star Add Review -->
                            <section class="single reviews leve-comments details">
                                <div id="add-review" class="add-review-box">
                                    <!-- Add Review -->
                                    <h3 class="listing-desc-headline margin-bottom-20 mb-4">Leave A Review</h3>
                                    <span class="leave-rating-title">Your rating for this listing</span>
                                    <!-- Rating / Upload Button -->
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <!-- Leave Rating -->
                                            <div class="clearfix"></div>
                                            <div class="leave-rating margin-bottom-30">
                                                <input type="radio" name="rating" id="rating-1" value="1" />
                                                <label for="rating-1" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-2" value="2" />
                                                <label for="rating-2" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-3" value="3" />
                                                <label for="rating-3" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-4" value="4" />
                                                <label for="rating-4" class="fa fa-star"></label>
                                                <input type="radio" name="rating" id="rating-5" value="5" />
                                                <label for="rating-5" class="fa fa-star"></label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Uplaod Photos -->
                                            <div class="add-review-photos margin-bottom-30">
                                                <div class="photoUpload">
                                                    <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                                    <input type="file" class="upload" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 data">
                                            <form action="#">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="Last Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Review" required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Review</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- End Add Review -->
                        </div>
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <!-- Start: Schedule a Tour -->
                            <div class="schedule widget-boxed mt-33 mt-0">
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
                                    <div class="sidebar-widget author-widget2">
                                        <div class="agent-contact-form-sidebar border-0 pt-0">
                                            <h4>Contact Us</h4>
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
                                <div class="main-search-field-2">
                                    <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>Recent Properties</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="recent-post">
                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="blog-details.html"><img src="{{ asset('/front') }}/images/feature-properties/fp-1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="blog-details.html"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                                <div class="recent-main my-4">
                                                    <div class="recent-img">
                                                        <a href="blog-details.html"><img src="{{ asset('/front') }}/images/feature-properties/fp-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="blog-details.html"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="blog-details.html"><img src="{{ asset('/front') }}/images/feature-properties/fp-3.jpg" alt=""></a>
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
                                                            <img src="{{ asset('/front') }}/images/feature-properties/fp-1.jpg" alt="">
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
                                                            <img src="{{ asset('/front') }}/images/feature-properties/fp-2.jpg" alt="">
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
                                                            <img src="{{ asset('/front') }}/images/feature-properties/fp-3.jpg" alt="">
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
                                                            <img src="{{ asset('/front') }}/images/feature-properties/fp-4.jpg" alt="">
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
                                                            <img src="{{ asset('/front') }}/images/feature-properties/fp-5.jpg" alt="">
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
                                                            <img src="{{ asset('/front') }}/images/feature-properties/fp-6.jpg" alt="">
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
                                            <div class="banner"><img src="{{ asset('/front') }}/images/single-property/banner.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <!-- End: Specials offer -->
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- END SECTION AGENTS DETAILS -->
    @endsection
</body>
@endsection
