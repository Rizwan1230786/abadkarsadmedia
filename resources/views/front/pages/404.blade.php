@extends('front.layout.layout')
@section('body')

    <body class="inner-pages hd-white">
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
                        <a href="{{ route('front.index') }}"><img src="{{ asset('/front/images/logo-red.svg') }}" alt=""></a>
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
                        <a href="add-property.html" class="button border">Add Listing<i
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
    <!-- END SECTION HEADINGS -->
   <!-- START SECTION 404 -->
   <section class="notfound pt-0">
    <div class="container">
        <div class="top-headings text-center">
            <img src="{{ asset('/front') }}/images/bg/error-404.jpg" alt="Page 404">
            <h3 class="text-center">Page Not Found!</h3>
            <p class="text-center">Oops! Looks Like Something Going Rong We can’t seem to find the page you’re looking for make sure that you have typed the currect URL</p>
        </div>
        <div class="port-info">
            <a href="{{ route('front.index') }}" class="btn btn-primary btn-lg">Go To Home</a>
        </div>
    </div>
</section>
    @endsection
</body>
@endsection
