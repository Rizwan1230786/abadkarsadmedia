@extends('front.layout')
@section('body')

    <body class="inner-pages agents homepage-4 det ag-de hd-white">
    @section('main')
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
                                                    <p><a href="/">Home </a> &nbsp;/&nbsp; <span>Agencies
                                                            detail</span></p>
                                                </div>
                                                <h3>Agencies Detail</h3>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="news-item news-item-sm">
                                    <a href="{{ asset('assets/images/agency/' . $agency->image) }}" target="_blanck" class="news-img-link">
                                        <div class="news-item-img homes">
                                            {{-- <div class="homes-tag button alt featured">4 Listings</div> --}}
                                            <img class="resp-img" style="padding: 20px;"
                                                src="{{ asset('assets/images/agency/' . $agency->image) }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <h3>{{ $agency->name }}</h3>
                                        <div class="the-agents">
                                            <ul class="the-agents-details">
                                                <li><a href="#">Office: {{ $agency->office_number }}</a></li>
                                                <li><a href="#">Mobile:{{ $agency->mobile_number }}</a></li>
                                                @if (!empty($agency->fax_number))
                                                    <li><a href="#">Fax: {{ $agency->fax_number }}</a></li>
                                                @endif
                                                <li><a href="#">Email: {{ $agency->email }}</a></li>
                                                <li><a href="#">City: {{ $agency->city_name }}</a></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-bottom">
                                            {{-- <a href="properties-full-grid-2.html" class="news-link">View My Listings</a> --}}
                                            <div class="admin">
                                                <p>Company : {{ $agency->name }}</p>
                                                <img src="{{ asset('assets/images/agency/' . $agency->image) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-pots py-0">
                            <div class="blog-info details mb-30">
                                <h5 class="mb-4">Description</h5>
                                <p class="mb-3">{{ $agency->descripition }}</p>

                            </div>
                            <!-- START LISTING PROPERTIES -->
                            @if (!empty($projects))
                                <section class="similar-property featured portfolio bshd p-0 bg-white">
                                    <div class="container-px-0">
                                        <h5>Agency Projects</h5>
                                        <div class="row">
                                            @foreach ($projects as $project)
                                                <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                                    <div class="project-single">
                                                        <div class="project-inner project-head">
                                                            <div class="homes">
                                                                <!-- homes img -->
                                                                <a href="single-property-1.html" class="homes-img">
                                                                    <div class="homes-tag button alt featured">Featured
                                                                    </div>
                                                                    <div class="homes-tag button alt sale">For Sale</div>
                                                                    <img src="{{ asset('assets/images/projects/' . $project->image) }}"
                                                                        alt="home-1" class="img-responsive">
                                                                </a>
                                                            </div>
                                                            <div class="button-effect">
                                                                <a href="{{ route('front.project_detail', $project->id) }}"
                                                                    class="btn"><i class="fa fa-link"></i></a>
                                                                <a href="{{ asset($project->video) }}"
                                                                    class="btn popup-video popup-youtube"><i
                                                                        class="fas fa-video"></i></a>
                                                                <a href="{{ route('front.project_detail', $project->id) }}"
                                                                    class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                                            </div>
                                                        </div>
                                                        <!-- homes content -->
                                                        <div class="homes-content">
                                                            <!-- homes address -->
                                                            <h3><a href="single-property-1.html">{{ $project->name }}</a>
                                                            </h3>
                                                            <p class="homes-address mb-3">
                                                                <a href="single-property-1.html">
                                                                    <i
                                                                        class="fa fa-map-marker"></i><span>{{ $project->location }}</span>
                                                                </a>
                                                            </p>
                                                            <!-- homes List -->
                                                            <ul class="homes-list clearfix">
                                                                <li>
                                                                    <span>{{ $project->num_of_blocks }} Blocks</span>
                                                                </li>
                                                                <li>
                                                                    <span>{{ $project->num_of_floors }} Floors</span>
                                                                </li>
                                                                <li>
                                                                    <span>{{ $project->num_of_flats }} Flats</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                            @endif
                            <!-- END LISTING PROPERTIES -->
                            <!-- START SECTION AGENTS -->
                            <section class="blog blog-section portfolio py-0 age bg-white">
                                <div class="container">
                                    <h5>Agency Agents</h5>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12">
                                            <div class="row">
                                                @foreach ($agents as $agent)
                                                    <div class="col-md-12 col-xs-12 space">
                                                        <div class="news-item news-item-sm">
                                                            <a href="{{ route('front.agent_detail', $agent->id) }}"
                                                                class="news-img-link">
                                                                <div class="news-item-img homes">
                                                                    {{-- <div class="homes-tag button alt featured">3 Listings</div> --}}
                                                                    <img class="resp-img" style="padding: 20px;"
                                                                        src="{{ asset('assets/images/agent/' . $agent->image) }}"
                                                                        alt="blog image">
                                                                </div>
                                                            </a>
                                                            <div class="news-item-text">
                                                                <a href="{{ route('front.agent_detail', $agent->id) }}">
                                                                    <h3>{{ $agent->name }}</h3>
                                                                </a>
                                                                <div class="the-agents">
                                                                    <ul class="the-agents-details">
                                                                        <li><a href="#">Office:
                                                                                {{ $agent->office_number }}</a></li>
                                                                        <li><a href="#">Mobile:
                                                                                {{ $agent->mobile_number }}</a></li>
                                                                        @if(!empty($agent->fax_number))
                                                                        <li><a href="#">Fax:
                                                                                {{ $agent->fax_number }}</a></li>
                                                                        @endif
                                                                        <li><a href="#">Email:
                                                                                {{ $agent->email }}</a></li>
                                                                        <li><a href="#">City: {{ $agent->city_name }}</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="news-item-bottom">
                                                                    {{-- <a href="properties-full-grid-2.html" class="news-link">View My Listings</a> --}}
                                                                    @if ($agent->agency)
                                                                        <div class="admin">
                                                                            <p>Company : {{ $agency->name }}</p>
                                                                        </div>
                                                                        <div class="admin">
                                                                            <p>Desgination : {{ $agent->desgination }}
                                                                            </p>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- END SECTION AGENTS -->
                        </div>
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <!-- end author-verified-badge -->
                            <div class="sidebar">
                                <div class="widget-boxed mt-33 mt-5">
                                    <div class="sidebar-widget author-widget2">
                                        <div class="agent-contact-form-sidebar border-0 pt-0">
                                            <h4>Contact Us</h4>
                                            <form name="contact_form" method="post" action="/user/agency_inquiry">
                                                @csrf
                                                <input type="text" id="fname" name="full_name"
                                                    placeholder="Full Name" required />
                                                <input type="number" id="pnumber" name="phone_number"
                                                    placeholder="Phone Number" required />
                                                <input type="email" id="emailid" name="email_address"
                                                    placeholder="Email Address" required />
                                                    <input type="hidden" id="emailid" name="email"
                                                    value="{{ $agency->email }}"/>
                                                <textarea placeholder="Message" name="message" required></textarea>
                                                <input type="submit" name="sendmessage" class="multiple-send-message"
                                                    value="Submit Request" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-search-field-2">
                                </div>
                                <!-- Start: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Specials of the day</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="banner"><img
                                                src="{{ asset('/front') }}/images/single-property/banner.jpg"
                                                alt=""></div>
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
