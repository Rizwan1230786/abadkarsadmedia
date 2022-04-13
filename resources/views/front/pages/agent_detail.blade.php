@extends('front.layout')
@section('main')
    <!-- START SECTION AGENTS DETAILS -->
    <section class="blog blog-section portfolio single-proper details mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="row">
                        @foreach ($agents as $agent)
                            <div class="col-md-12 col-xs-12">
                                <section class="headings-2 pt-0 hee">
                                    <div class="pro-wrapper">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <div class="text-heading text-left">
                                                    <p><a href="index.html">Home </a> &nbsp;/&nbsp; <span>Agent
                                                            Details</span></p>
                                                </div>
                                                <h3>{{ $agent->name }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="news-item news-item-sm">
                                    <a href="agent-details.html" class="news-img-link">
                                        <div class="news-item-img homes">
                                            {{-- <div class="homes-tag button alt featured">4 Listings</div> --}}
                                            <img class="resp-img"
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
                                                <li><a href="#">Office: {{ $agent->office_number }}</a></li>
                                                <li><a href="#">Mobile: {{ $agent->mobile_number }}</a></li>
                                                <li><a href="#">Fax: {{ $agent->fax_number }}</a></li>
                                                <li><a href="#">Email: {{ $agent->email }}</a></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="properties-full-grid-2.html" class="news-link">View My
                                                Listings</a>
                                            <div class="admin">
                                                <p>{{ $agent->agency }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="blog-pots py-0">
                        <div class="blog-info details mb-30">
                            <h5 class="mb-4">Description</h5>
                            <p class="mb-3">{{ $agent->descripition }}</p>
                        </div>
                        @endforeach
                        <!-- START SIMILAR PROPERTIES -->
                        <section class="similar-property featured portfolio bshd p-0 bg-white">
                            <div class="container">
                                <h5>Listing By {{ $agent->name }}</h5>
                                <div class="row">
                                    @foreach ($property as $property)
                                        @if ($property->agent_id == $agent->id)
                                            <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                                <div class="project-single">
                                                    <div class="project-inner project-head">
                                                        <div class="homes">
                                                            <!-- homes img -->
                                                            <a href="{{ route('front.property_detail', $property->id) }}"
                                                                class="homes-img">
                                                                <div class="homes-tag button alt featured">Featured
                                                                </div>
                                                                <div class="homes-tag button alt sale">For Sale</div>
                                                                <div class="homes-price">{{ $property->priice }}
                                                                </div>
                                                                <img src="{{ asset('assets/images/properties/' . $property->image) }}"
                                                                    alt="home-1" class="img-responsive">
                                                            </a>
                                                        </div>
                                                        <div class="button-effect">
                                                            <a href="{{ route('front.property_detail', $property->id) }}"
                                                                class="btn"><i class="fa fa-link"></i></a>
                                                            @if ($property->video)
                                                                <a href="{{ asset($property->video) }}"
                                                                    class="btn popup-video popup-youtube"><i
                                                                        class="fas fa-video"></i></a>
                                                            @endif

                                                            <a href="{{ route('front.property_detail', $property->id) }}"
                                                                class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- homes content -->
                                                    <div class="homes-content">
                                                        <!-- homes address -->
                                                        <h3><a
                                                                href="{{ route('front.property_detail', $property->id) }}">{{ $property->name }}</a>
                                                        </h3>
                                                        <p class="homes-address mb-3">
                                                            <a href="single-property-1.html">
                                                                <i class="fa fa-map-marker"></i><span>
                                                                    {{ $property->location }}</span>
                                                            </a>
                                                        </p>
                                                        <!-- homes List -->
                                                        <ul class="homes-list clearfix">
                                                            <li>
                                                                <span>{{ $property->number_of_bedrooms }} Beds</span>
                                                            </li>
                                                            <li>
                                                                <span>{{ $property->number_of_bathrooms }}
                                                                    Baths</span>
                                                            </li>
                                                            @if ($property->marala)
                                                                <li>
                                                                    <span>{{ $property->marala }} marala </span>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <span>{{ $property->square }} sq ft</span>
                                                                </li>
                                                            @endif
                                                            <li>
                                                                <span>{{ $property->number_of_floors }} Floors</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>

                            </div>
                        </section>
                        <!-- END SIMILAR PROPERTIES -->
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
                                        <input type="text" id="reservation-date" data-lang="en" data-large-mode="true"
                                            data-min-year="2017" data-max-year="2020"
                                            data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0"
                                            data-theme="my-style" class="form-control" readonly="">
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
                                                <button type="button" class="btn counter-btn theme-cl btn-number"
                                                    disabled="disabled" data-type="minus" data-field="quant[1]">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quant[1]"
                                                class="border-0 text-center form-control input-number" data-min="0"
                                                data-max="10" value="0">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn counter-btn theme-cl btn-number"
                                                    data-type="plus" data-field="quant[1]">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mt-4">
                                        <label class="mb-4">Children</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn counter-btn theme-cl btn-number"
                                                    disabled="disabled" data-type="minus" data-field="quant[2]">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quant[2]"
                                                class="border-0 text-center form-control input-number" data-min="0"
                                                data-max="10" value="0">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn counter-btn theme-cl btn-number"
                                                    data-type="plus" data-field="quant[2]">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="payment-method.html"
                                    class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit
                                    Request</a>
                            </div>
                        </div>
                        <!-- End: Schedule a Tour -->
                        <!-- end author-verified-badge -->
                        <div class="sidebar">
                            <div class="widget-boxed mt-33 mt-5">
                                <div class="sidebar-widget author-widget2">
                                    <div class="agent-contact-form-sidebar border-0 pt-0">
                                        <h4>{{ $agent->name }}</h4>
                                        <form name="contact_form" method="post" action="functions.php">
                                            <input type="text" id="fname" name="full_name" placeholder="Full Name"
                                                required />
                                            <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number"
                                                required />
                                            <input type="email" id="emailid" name="email_address"
                                                placeholder="Email Address" required />
                                            <textarea placeholder="Message" name="message" required></textarea>
                                            <input type="submit" name="sendmessage" class="multiple-send-message"
                                                value="Submit Request" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="main-search-field-2">
                                <!-- Start: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Specials of the day</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="banner"><img
                                                src="{{ asset('/front/images/single-property/banner.jpg') }}" alt="">
                                        </div>
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
