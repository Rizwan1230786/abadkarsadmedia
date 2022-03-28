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

                <!-- lang-wrap-->
                <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                    <div class="lang-wrap">
                        <div class="show-lang"><span><i
                                    class="fas fa-globe-americas"></i><strong>ENG</strong></span><i
                                class="fa fa-caret-down arrlan"></i></div>
                        <ul class="lang-tooltip lang-action no-list-style">
                            <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                            <li><a href="#" data-lantext="Fr">Francais</a></li>
                            <li><a href="#" data-lantext="Es">Espanol</a></li>
                            <li><a href="#" data-lantext="De">Deutsch</a></li>
                        </ul>
                    </div>
                </div>
                <!-- lang-wrap end-->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    @endsection
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Blog Details</h1>
                <h2><a href="{{ route('front.index') }}">Home </a> &nbsp;/&nbsp; Blog Details</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION BLOG -->
    <section class="blog blog-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="news-item details no-mb2">
                                <a href="{{ route('front.blog_detail') }}" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="{{ asset('/front/images/blog/b-1.jpg') }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text details pb-0">
                                    <a href="{{ route('front.blog_detail') }}"><h3>Real Estate News</h3></a>
                                    <div class="dates">
                                        <span class="date">April 11, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news details visib mb-0">
                                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore vel enim repellendus excepturi autem. Eligendi cum laboriosam exercitationem illum repudiandae quasi sint dicta consectetur porro fuga ea, perspiciatis aut!</p>

                                        <p class="d-none d-sm-none d-lg-block d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore vel enim repellendus excepturi autem. Eligendi cum laboriosam exercitationem illum repudiandae quasi sint dicta consectetur porro fuga ea, perspiciatis aut!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="comments">
                        <h3 class="mb-5">5 Comments</h3>
                        <div class="row mb-4">
                            <ul class="col-12 commented">
                                <li class="comm-inf">
                                    <div class="col-md-2">
                                        <img src="{{ asset('/front/images/testimonials/ts-4.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-10 comments-info">
                                        <h5 class="mb-1">Mario Smith</h5>
                                        <p class="mb-4">Jun 23, 2020</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="row ml-5">
                            <ul class="col-12 commented">
                                <li class="comm-inf">
                                    <div class="col-md-2">
                                        <img src="{{ asset('/front/images/testimonials/ts-5.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-10 comments-info">
                                        <h5 class="mb-1">Mary Tyron</h5>
                                        <p class="mb-4">Jun 23, 2020</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="row my-4">
                            <ul class="col-12 commented">
                                <li class="comm-inf">
                                    <div class="col-md-2">
                                        <img src="{{ asset('/front/images/testimonials/ts-6.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-10 comments-info no-mb">
                                        <h5 class="mb-1">Leo Williams</h5>
                                        <p class="mb-4">Jun 23, 2020</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="leve-comments wpb">
                        <h3 class="mb-5">Leave a Comment</h3>
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
                                        <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Message" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                <aside class="col-lg-3 col-md-12">
                    <div class="widget">
                        <h5 class="font-weight-bold mb-4">Search</h5>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </span>
                        </div>
                        <div class="recent-post py-5">
                            <h5 class="font-weight-bold">Category</h5>
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>House</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Garages</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Estate</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Home</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bath</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Beds</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h5 class="font-weight-bold mb-4">Popular Tags</h5>
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
                            <div class="tags">
                                <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                            </div>
                        </div>
                        <div class="recent-post pt-5">
                            <h5 class="font-weight-bold mb-4">Recent Posts</h5>
                            <div class="recent-main">
                                <div class="recent-img">
                                    <a href="{{ route('front.blog_detail') }}"><img src="{{ asset('/front/images/blog/b-1.jpg') }}" alt=""></a>
                                </div>
                                <div class="info-img">
                                    <a href="{{ route('front.blog_detail') }}"><h6>Real Estate</h6></a>
                                    <p>May 10, 2020</p>
                                </div>
                            </div>
                            <div class="recent-main my-4">
                                <div class="recent-img">
                                    <a href="{{ route('front.blog_detail') }}"><img src="{{ asset('/front/images/blog/b-2.jpg') }}" alt=""></a>
                                </div>
                                <div class="info-img">
                                    <a href="{{ route('front.blog_detail') }}"><h6>Real Estate</h6></a>
                                    <p>May 10, 2020</p>
                                </div>
                            </div>
                            <div class="recent-main no-mb">
                                <div class="recent-img">
                                    <a href="{{ route('front.blog_detail') }}"><img src="{{ asset('/front/images/blog/b-3.jpg') }}" alt=""></a>
                                </div>
                                <div class="info-img">
                                    <a href="{{ route('front.blog_detail') }}"><h6>Real Estate</h6></a>
                                    <p>May 10, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->
    @endsection
</body>
@endsection
