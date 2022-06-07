@extends('front.layout')
@section('body')
    <link rel="stylesheet" href="{{ asset('front/css/advertise.css') }}">
    <style>
        .advertise-maps .primary-btn {
            display: block;
            width: 304px;
            height: 55px;
            line-height: 55px;
            text-align: center;
            margin: 0 auto;
            margin-bottom: 70px;
            margin-top: 70px;
            border-radius: 10px;
            font-size: 22px;
            background-color: #FF385C;
            text-transform: capitalize;
        }

        .primary-btn:hover {
            text-decoration: none;
            color: #ffffff;
        }

        #form1 {
            display: none;
        }

        .button {
            width: 40%;
            border-color: #FF385C !important;
        }

        .btn:hover {
            background-color: #FF385C;
            border-color: #FF385C;
        }

        .breadcrumb {
            background-color: #ffffff !important;
            padding: 5px 0 !important;
        }

        .breadcrumb .links {
            font-size: 12px;
        }

        .breadcrumb .links a {
            color: #444444;
        }
        .dropdown-container {
            display: none;
            font-size: 14px;
            font-weight: 400;
            opacity: 1;
            padding-left: 8px;
        }
    </style>
    <body class="inner-pages agents homepage-4 hd-white">
    @section('main')
        <div id='page_wrapper' class="page_wrapper">
            <div id="topContents" class="topContents">
                <section class="advertise-header">
                    <h1 class="heading" style="background-color: white">Advertise</h1>
                </section>
                <!--Property View BreadCrumb & Heading Start-->
                <section class="breadcrumb">
                    <div class="container">
                        <div class="links left">
                            <a class="left" href="{{ url('/') }}" title="Home">Home <i
                                    class="fas fa-angle-right" style="padding:5px"></i></a>
                            <a class="left" href="{{ url('advertise') }}" title="Advertise">Advertise <i
                                    class="fas fa-angle-right" style="padding:5px"></i></a>
                            <span class="left">{{ $detail->title }}</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
                <!--Property View BreadCrumb & Heading End-->
            </div>
            <!-- listings section wrapper -->
            <div class="container">
                <main class="left">
                    <section class="mt20">
                        <div class="advertise-maps">
                            <div class="heading">
                                {{ $detail->title }}
                            </div>
                            <div class="adv-glance mt20" id="advertise-maps">
                                <p>{!! $detail->detail !!}</p>
                            </div>
                            <div class="clearfix"></div>
                            <a href="javascript:void(0);" id="formButton" class="primary-btn">Contact Now To
                                Advertise</a>
                            <form id="form1" action="/advertise/mail-send" method="post" class="mb-10 validationForm mailformSubmited">
                                @csrf
                                <div class="row" style="padding: 10px">
                                    <div class="form-group col-6">
                                        <label for="exampleInputPassword1">Name:</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                                            placeholder="Name">

                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail1">Email address:</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone else.</small>
                                        @if ($errors->has('email'))
                                            <div class="error">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputPassword1">Mobile:</label>
                                        <input type="text" id="account-phone" value="+92" name="contact"
                                            class="numonly form-control" id="exampleInputPassword1" placeholder="">
                                        @if ($errors->has('contact'))
                                            <div class="error">{{ $errors->first('contact') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputPassword1">Subject:</label>
                                        <input type="text" name="subject" value="{{ $detail->title }}"
                                            class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        @if ($errors->has('subject'))
                                            <div class="error">{{ $errors->first('subject') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label class="form-label">Message:</label>
                                        <textarea class="form-control notrequired" placeholder="Write your message here" name="message" rows="3"
                                            spellcheck="false">{{ $data['record']->meta_description ?? '' }}</textarea>
                                        @if ($errors->has('message'))
                                            <div class="error">{{ $errors->first('message') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12" style="text-align: center">
                                    <button type="submit" class="btn btn-primary user_form submit_button button" style="margin-bottom: 30px;"><i
                                            class="fas fa-envelope"></i> Send Email</button>
                                </div>
                            </form>
                            @if (isset($detail->vedio) && !empty($detail->vedio))
                                <div class="adv-glance-video" style="text-align: center">
                                    <iframe width="600" height="400" src="{{ $detail->vedio }}" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            @endif
                            <div class="adv-glance-img mt-5" style="text-align: center">
                                <img src="{{ asset('assets/images/pakges/' . $detail->image) }}"
                                    alt="packages-titanium_plus">
                            </div>
                        </div>
                    </section>
                </main>
                <aside id="ads_vertical" class="right">
                    <section class="mt20">
                        <div class="aside-links">
                            <div class="heading">
                                <span class="adv-icon">
                                    <svg class="icon">
                                        <use
                                            xlink:href="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise-icon">
                                        </use>
                                    </svg>
                                </span>Advertise
                            </div>
                            <div class="category dropdown-btn" data-i="packages-advertising">
                                Packages
                                <i class="fa fa-caret-down dropbtn" style="float: right;
                                margin-top: 5px;"></i>
                            </div>
                            {{-- <div class="category dropbtn" onclick="myFunction()" data-i="packages-advertising">
                                    Packages
                                    <div id="myDropdown" class="dropdown-content">
                                        <a href="#home">Home</a>
                                        <a href="#about">About</a>
                                        <a href="#contact">Contact</a>
                                    </div>
                                </div> --}}
                            <ul class="packages-advertising dropdown-container" id="myDropdown"
                                data-nt="packages-advertising">
                                @foreach ($pakges as $value)
                                    <li class=""><a
                                            href="/advertise/{{ $value->title }}">{{ $value->title }}</a></li>
                                @endforeach
                            </ul>
                            <div class="zpt-category" data-i="zpt-advertising">
                                <a href="https://www.Abadkar.com/advertise/Abadkar-property_tour.html"
                                    class=" ">Abadkar Property Tours
                                </a>
                            </div>

                            <div class="category" data-i="banner-advertising"
                                data-svg_down="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_downarrow"
                                data-svg_up="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_uparrow">
                                Banner Advertising
                                <svg class="icon">
                                    <use
                                        xlink:href="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_downarrow">
                                    </use>
                                </svg>
                            </div>
                            <ul class="banner-advertising" data-nt="banner-advertising" style=" display:none; ">
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/banners-leaderboard.html">Leaderboard</a>
                                </li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/banners-site_wide_banner.html">Site Wide
                                        Right Banner</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/banners-splash_banner.html">Splash
                                        Banner</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/banners-middle_banner_home.html">Middle
                                        Banner Home</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/banners-middle_banner_search.html">Middle
                                        Banner Search</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/banners-middle_banner_category.html">Middle
                                        Banner Category</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/banners-wallpaper_takeover.html">Wallpaper
                                        Takeover</a></li>
                            </ul>
                            <div class="category" data-i="property-advertising"
                                data-svg_down="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_downarrow"
                                data-svg_up="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_uparrow">
                                Property Advertising
                                <svg class="icon">
                                    <use
                                        xlink:href="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_downarrow">
                                    </use>
                                </svg>
                            </div>
                            <ul class="property-advertising remove" data-nt="property-advertising" style="display:none; ">
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/listings-premium_listings.html">Premium
                                        Listings</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/listings-basic_listings.html">Basic
                                        Listings</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/listings-superhot_property.html">Super
                                        Hot Property</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/listings-hot_property.html">Hot
                                        Property</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/listings-refresh_credits.html">Refresh
                                        Credits</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/listings-agency_logo_within_listings.html">Agency
                                        Logo within Listings</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/listings-featured_agent.html">Featured
                                        Agent</a></li>
                            </ul>

                            <div class="category" data-i="email-advertising"
                                data-svg_down="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_downarrow"
                                data-svg_up="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_uparrow">
                                Email Advertising
                                <svg class="icon">
                                    <use
                                        xlink:href="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_downarrow">
                                    </use>
                                </svg>
                            </div>
                            <ul class="property-advertising" data-nt="email-advertising" style="display:none; ">
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/emails-email_blast.html">E-mail Blast</a>
                                </li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/emails-promotion_in_newsletter.html">Promotion
                                        in Newsletter</a></li>
                            </ul>
                            <div class="category" data-i="developer-advertising"
                                data-svg_down="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_downarrow"
                                data-svg_up="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_uparrow">
                                Developer Advertising
                                <svg class="icon">
                                    <use
                                        xlink:href="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise_downarrow">
                                    </use>
                                </svg>
                            </div>
                            <ul class="property-advertising" data-nt="developer-advertising" style="display:none;">
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/developers-hot_developments.html">Hot
                                        Developments</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/developers-featured_developments.html">Featured
                                        Development &amp; Pages</a></li>
                            </ul>
                        </div>
            </div>
            </section>
            </aside>
            <div class="clearfix"></div>
        </div>
        <div id="bottomContents" class="bottomContents">
        </div>
        </div>
    </body>
    <script>
        < script >
            /* When the user clicks on the button,
            toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    </script>
    <script>
        $(document).ready(function() {
            $("#formButton").click(function() {
                $("#form1").toggle();
            });
        });
    </script>
    <script>
        $(function() {
            $(".numonly").on('input', function(e) {
                $(this).val($(this).val().replace(/[^0-9]/g, ''));
            });
        });
    </script>
@endsection
@section('js')
    <script src="{{ URL::asset('front/js/Tellcustom.js') }}"></script>
    <link href="{{ URL::asset('front/css/intlTelInput.css?1613236686837') }}" rel="stylesheet">
    <script src="{{ URL::asset('front/js/Tellprism.js') }}"></script>
    <script src="{{ URL::asset('front/js/intlTelInput.js') }}"></script>
    <script src="{{ URL::asset('front/js/Tellinput.js') }}"></script>
    <script src="{{ URL::asset('assets/themeJquery/pakges/jquery.js') }}"></script>
@endsection
