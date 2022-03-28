@extends('front.layout.layout')
@section('body')
<body class="inner-pages agents homepage-4 hd-white">
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
    <section class="blog blog-section portfolio pt-5">
        <div class="container">
           <section class="headings-2 pt-0 pb-55">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p class="pb-2"><a href="{{ route('front.index') }}">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                            </div>
                            <h3>All Agents</h3>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                   <section class="headings-2 pt-0">
                        <div class="pro-wrapper">
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <div class="text-heading text-left">
                                        <p class="font-weight-bold mb-0 mt-3">7 Search results</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center grid">
                                <div class="input-group border rounded input-group-lg w-auto mr-4">
                                    <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                                    <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                                        <option selected>Alphabet</option>
                                        <option value="1">Random</option>
                                        <option value="1">Rating</option>
                                        <option value="1">Number of property</option>
                                    </select>
                                </div>
                                <div class="sorting-options">
                                    <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                    <a href="agents-listing-grid.html" class="change-view-btn lde"><i class="fa fa-th-large"></i></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="news-item news-item-sm">
                                <a href="agent-details.html" class="news-img-link">
                                    <div class="news-item-img homes">
                                        <div class="homes-tag button alt featured">3 Listings</div>
                                        <img class="resp-img" src="{{ asset('/front/images/team/a-1.png') }}" alt="blog image">
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
                                        <div class="admin">
                                            <p>Company Name</p>
                                            <img src="{{ asset('/front/images/partners/1.png') }}" alt="">
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
                                        <img class="resp-img" src="{{ asset('/front/images/team/a-2.png') }}" alt="blog image">
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
                                        <div class="admin">
                                            <p>Company Name</p>
                                            <img src="{{ asset('/front/images/partners/2.png') }}" alt="">
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
                                        <img class="resp-img" src="{{ asset('/front/images/team/a-3.png') }}" alt="blog image">
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
                                        <div class="admin">
                                            <p>Company Name</p>
                                            <img src="{{ asset('/front/images/partners/3.png') }}" alt="">
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
                                        <img class="resp-img" src="{{ asset('/front/images/team/a-4.png') }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="agent-details.html"><h3>Katy Grace</h3></a>
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
                                            <p>Company Name</p>
                                            <img src="{{ asset('/front/images/partners/4.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 space2">
                            <div class="news-item news-item-sm">
                                <a href="agent-details.html" class="news-img-link">
                                    <div class="news-item-img homes">
                                        <div class="homes-tag button alt featured">3 Listings</div>
                                        <img class="resp-img" src="{{ asset('/front/images/team/a-5.png') }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="agent-details.html"><h3>Chris Melo</h3></a>
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
                                            <p>Company Name</p>
                                            <img src="{{ asset('/front/images/partners/5.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 space2">
                            <div class="news-item news-item-sm">
                                <a href="agent-details.html" class="news-img-link">
                                    <div class="news-item-img homes">
                                        <div class="homes-tag button alt featured">3 Listings</div>
                                        <img class="resp-img" src="{{ asset('/front/images/team/a-6.png') }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="agent-details.html"><h3>Nina Thomas</h3></a>
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
                                            <p>Company Name</p>
                                            <img src="{{ asset('/front/images/partners/7.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 no-pb2 icho">
                            <div class="news-item news-item-sm">
                                <a href="agent-details.html" class="news-img-link">
                                    <div class="news-item-img homes">
                                        <div class="homes-tag button alt featured">3 Listings</div>
                                        <img class="resp-img" src="{{ asset('/front/images/team/a-7.png') }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="agent-details.html"><h3>Ichiro Lee</h3></a>
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
                                            <p>Company Name</p>
                                            <img src="{{ asset('/front/images/partners/2.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <nav aria-label="..." class="pt-0">
                <ul class="pagination disabled">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    @endsection
</body>
@endsection
