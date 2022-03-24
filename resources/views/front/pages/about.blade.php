@extends('front.layout.layout')
@section('body')

    <body class="inner-pages hd-white about">
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
                            <li><a href="#">Listing</a>
                                <ul>
                                    <li><a href="{{ route('front.list') }}">Listing Grid</a>
                                    </li>
                                    <li><a href="#">Agent View</a>
                                        <ul>
                                            <li><a href="{{ route('front.agent') }}">Agent View</a></li>
                                            <li><a href="{{ route('front.agent_detail') }}">Agent Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Agencies View</a>
                                        <ul>
                                            <li><a href="{{ route('front.agency') }}">Agencies View</a></li>
                                            <li><a href="{{ route('front.agency_detail') }}">Agencies Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('front.property') }}">Property</a>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="{{ route('front.about') }}">About Us</a></li>
                                    <li><a href="{{ route('front.faq') }}">Faq</a></li>
                                    <li><a href="{{ route('front.pricing') }}">Pricing Tables</a></li>
                                    <li><a href="{{ route('front.error') }}">Page 404</a></li>
                                    <li><a href="{{ route('front.soon') }}">Coming Soon</a></li>
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
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>About Our Company</h1>
                <h2><a href="{{ route('front.index') }}">Home </a> &nbsp;/&nbsp; About Us</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION ABOUT -->
    <section class="about-us fh">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 who-1">
                    <div>
                        <h2 class="text-left mb-4">About <span>Find Houses</span></h2>
                    </div>
                    <div class="pftext">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>
                    </div>
                    <div class="box bg-2">
                        <a href="about.html" class="text-center button button--moema button--text-thick button--text-upper button--size-s">read More</a>
                        <img src="{{ asset('/front') }}/images/signature.png" class="ml-5" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="wprt-image-video w50">
                        <img alt="image" src="{{ asset('/front') }}/images/bg/bg-video.jpg">
                        <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=2xHQqYRcrx4">
                            <i class="fa fa-play"></i>
                        </a>
                        <div class="iq-waves">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION ABOUT -->
    @endsection
</body>
@endsection
