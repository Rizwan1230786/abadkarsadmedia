@extends('front.layout')
@section('body')

    <body class="inner-pages agents homepage-4 hd-white">
    @section('main')
        <div id='page_wrapper' class="page_wrapper">
            <div id="topContents" class="topContents">
                <section class="advertise-header">
                    <h1 class="heading" style="background-color: white">Advertise</h1>
                </section>
            </div>
            <!-- listings section wrapper -->
            <div class="container">
                <main class="left">
                    <section class="mt20">
                        <div class="advertise-maps">
                            <div class="heading">
                                Abadkar.com at a Glance
                            </div>
                            <div class="adv-glance">
                                <div class="left">
                                    <ul class="adv-glance-content">
                                        <li>Over 3.5 million monthly visits</li>
                                        <li>More than 15 million monthly page views</li>
                                        <li>Registered members exceeding 700,000</li>
                                        <li>More than 200,000 new properties added every month</li>
                                        <li>Over 10,000 registered estate agents</li>
                                    </ul>
                                </div>
                                <div class="right maps">
                                    <img src="{{ asset('front/images/zameen_advertise_map.png') }}" alt="">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="adv-discription mt20">
                            <div class="heading">
                                Why Advertise With Abadkar?
                            </div>
                            <div class="adv-clients">
                                <p>
                                    Abadkar.com provides real estate professionals with the best, most comprehensive
                                    advertising and marketing solutions anywhere in the country, offering unparalleled
                                    exposure on multiple platforms. Here&rsquo;s a look at our main advertising options.
                                </p>
                                <div class="mt40 title"> AGENCIES</div>
                                <p>To date, over 10,000 agencies have signed up with Abadkar.com, and the number is rising by
                                    the minute. By providing targeted leads &ndash; from Pakistan and abroad &ndash; to
                                    these agencies through a range of advertising
                                    options, we make sure that they always stay one step ahead of the pack. And with offices
                                    in Lahore, Karachi, Islamabad, Rawalpindi, Peshawar, Gujranwala, Faisalabad, Bahawalpur
                                    and Multan, and a field presence in 30
                                    major cities, Abadkar.com provides its clients unmatched, personalised service.
                                </p>
                                <div class="mt40 title">DEVELOPERS</div>
                                <p>The top national and international developers on board with us get to enjoy an entirely
                                    separate, dedicated section where new projects are advertised to a massive audience of
                                    Pakistanis around the globe. Our competent team
                                    firmly keeps a finger on the pulse of the real estate market at all times and offers
                                    advertising packages that are perfectly tailored to developers&rsquo; needs. All of our
                                    products are intelligent, dynamic and highly
                                    targeted, resulting in a significant boost to your sales.
                                </p>
                                <p class="mt40">To learn more about our products and to advertise with us, get in
                                    touch today</p>
                                <div class="mt40 tel">0800-Abadkar (92633)</div>
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
                            <div class="category dropbtn" onclick="myFunction()" data-i="packages-advertising">
                                Packages
                                <i class="fa-solid fa-circle-chevron-down dropbtn"></i>

                            </div>
                            {{-- <div class="category dropbtn" onclick="myFunction()" data-i="packages-advertising">
                                    Packages
                                    <div id="myDropdown" class="dropdown-content">
                                        <a href="#home">Home</a>
                                        <a href="#about">About</a>
                                        <a href="#contact">Contact</a>
                                    </div>
                                </div> --}}
                            <ul class="packages-advertising dropdown-content" id="myDropdown" data-nt="packages-advertising">
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/packages-titanium_plus.html">Titanium
                                        Plus Package</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/packages-middle_titaniums.html">Titanium
                                        Package</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/packages-middle_business.html">Business
                                        Package</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/packages-middle_Developer.html">Developer
                                        Package</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/packages-middle_starter.html">Starter
                                        &amp; Response Package</a></li>
                                <li class=" "><a
                                        href="https://www.Abadkar.com/advertise/packages-super_hot.html">Super Hot
                                        Package</a></li>
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
@endsection
