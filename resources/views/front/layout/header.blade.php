<?php
use App\Models\subpages;
?>

    <style>
        .dropdown-container {
            display: none;
            font-size: 14px;
            font-weight: 400;
            opacity: 1;
            padding-left: 8px;
        }

    </style>
<!-- START PRELOADER -->
<!-- <div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div> -->
{{-- </div> --}}
<!-- END PRELOADER -->
<section class="header">
    <div class="container1">
        <nav class="left">
            <ul class="clearfix" id="responsive">
                <li class="left"><a class="link-l" href="{{ url('/') }}"><i class="fas fa-home icon-home"></i></a>
                </li>
                <li class="left"><a class="link-l" href="/user/plot_finder">PlotFinder</a></li>
                <li class="left"><a class="link-l" href="#">Area Guides</a></li>
                <li class="left"><a class="link-l" href="/user/our/partner">Partners</a></li>
                <li class="left"><a class="link-l" href="{{ url('/blog') }}">Blogs</a></li>
                <li class="left"><a class="link-l" href="#">Tools</a></li>
                <li class="left dropdown-btn"><a class="link-l" href="#" role="button">More<i class="fa fa-caret-right" style="margin-left: 6px;"></i></a>

                </li>
                <ul class="dropdown-container left" id="myDropdown">
                    <li class="left"><a class="link-l" style="padding: 0px;" href="/forum">Forum</a></li>
                    <li class="left"><a class="link-l" href="#">Maps</a></li>
                    <li class="left"><a class="link-l" href="/index-page1">Index</a></li>
                </ul>
            </ul>
        </nav>
        <nav class="right">
            <ul class="clearfix">
                <li class="left"><a class="adpid-wrp" title="Contact us" href="{{ route('front.contact') }}"><i
                            class="fas fa-laptop-house ml-2 icon"></i>Contact us</a></li>
                @guest
                    <li class="left"><a class="adpid-wrp" title="Add Property" href="{{ url('/add-property') }}"><i
                                class="fas fa-plus icon"></i>Add Property</a></li>
                @endguest
                <li class="left"><a href="#"><i class="fas fa-cog icon-login" title="Setting"></i></a></li>
                @guest
                    <li class="left"><a href="{{ url('user/signin') }}"><i class="fas fa-user icon-login"
                                title="Login"></i></a></li>
                @endguest

                <li class="left"><a href="#"><i class="flag-icon flag-icon-pk h1" id="pk"
                            title="pk"></i></a></li>

            </ul>
        </nav>
    </div>
</section>
<header id="header-container" style="margin-top: 20px">
    <!-- Header -->
    <div id="header">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="{{ route('front.index') }}" style="width: 135px;
                    height: 27px;"><img
                            src="{{ asset('/front/images/abadkar-logo.png') }}" alt=""></a>
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
                            <li
                                class="nav-item <?= isset($subPage[0]->id) && !empty($subPage[0]->id) ? 'dropdown' : '' ?>">
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
                        {{-- @guest
                        <li><a href="{{ url('/add-property') }}">Add Property</a>
                            @endguest --}}
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
                        <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a
                                href="add-property.html" class="button border btn-lg btn-block text-center">Add
                                Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
            {{-- <div class="right-side d-none d-none d-lg-none d-xl-flex" style="width:150px ;">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="{{ route('front.contact') }}" class="button border">Contact us<i class="fas fa-laptop-house ml-2"></i></a>
                </div>
                <!-- Header Widget / End -->
            </div> --}}
            <!-- Right Side Content / End -->

            <!-- Right Side Content / End -->

            <!-- Right Side Content / End -->
            @if (Auth::guard('customeruser')->user())
                <div class="header-user-menu user-menu add box">
                    <div class="header-user-name">
                        <span>
                            @if (Auth::guard('customeruser')->user()->image != null)
                                <img src="{{ URL::asset('assets/images/userphoto/' . Auth::guard('customeruser')->user()->image ?? '') }}"
                                alt="">@else<img src="{{ URL::asset('/default/nodp.jpg') }}"
                                    alt="">
                            @endif
                        </span>Hi, {{ Auth::guard('customeruser')->user()->firstname }}!
                    </div>
                    <ul>
                        <li class="dropdon-heading">Hi, {{ Auth::guard('customeruser')->user()->firstname }}!</li>
                        <li><a title="My Acount" href="{{ url('user/dashboard') }}">My Acount</a></li>
                        <li><a title="Logout" href="{{ url('user/logout') }}">Logout</a></li>
                    </ul>
                </div>
                {{-- @else
            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                <!-- Header Widget -->
                <div class="header-widget sign-in">
                    <div class="show-reg-form "><a href="{{ url('user/signin') }}">Sign In</a></div>
                </div>
                <!-- Header Widget / End -->
            </div> --}}
            @endif
            <!-- Right Side Content / End -->

            <!-- lang-wrap-->

            <!-- lang-wrap end-->
        </div>
    </div>
    <!-- Header / End -->

</header>
