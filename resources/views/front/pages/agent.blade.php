@extends('front.layout')
@section('body')

    <body class="inner-pages agents homepage-4 hd-white">
    @section('main')
        <section class="blog blog-section portfolio pt-5">
            <div class="container">
                <section class="headings-2 pt-0 pb-55">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p class="pb-2"><a href="{{ url('/') }}">Home </a> &nbsp;/&nbsp;
                                        <span>Listings</span></p>
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
                                            <p class="font-weight-bold mb-0 mt-3">Total (
                                                {{ number_format($agent_count, 0) }} ) Agents</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center grid">
                                    <div class="input-group border rounded input-group-lg w-auto mr-4">
                                        <label
                                            class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                                            for="inputGroupSelect01"><i
                                                class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                                        <select
                                            class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                                            data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3"
                                            id="inputGroupSelect01" name="sortby">
                                            <option selected>Alphabet</option>
                                            <option value="1">Random</option>
                                            <option value="1">Rating</option>
                                            <option value="1">Number of property</option>
                                        </select>
                                    </div>
                                    <div class="sorting-options">
                                        <a href="#" class="change-view-btn active-view-btn"><i
                                                class="fa fa-th-list"></i></a>
                                        <a href="#" class="change-view-btn lde"><i class="fa fa-th-large"></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="row">
                            @foreach ($agents as $agent)
                                <div class="col-md-12 col-xs-12 mb-3">
                                    <div class="news-item news-item-sm">
                                        <a href="{{ route('front.agent_detail', $agent->id) }}" class="news-img-link">
                                            <div class="news-item-img homes">
                                                {{-- <div class="homes-tag button alt featured">3 Listings</div> --}}
                                                <img class="resp-img" style="padding: 30px;"
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
                                                    @if (!empty($agent->fax_number))
                                                        <li><a href="#">Fax: {{ $agent->fax_number }}</a></li>
                                                    @endif
                                                    <li><a href="#">Email: {{ $agent->email }}</a></li>
                                                    <li><a href="#">City: {{ $agent->city_name }}</a></li>
                                                </ul>
                                            </div>
                                            <div class="news-item-bottom">
                                                {{-- <a href="properties-full-grid-2.html" class="news-link">View My Listings</a> --}}
                                                @if (!empty($agent->agency))
                                                    <div class="admin">
                                                        <p>Company : {{ $agent->agency }}</p>
                                                    </div>
                                                    <div class="admin">
                                                        <p>Desgination : {{ $agent->desgination }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <!-- end author-verified-badge -->
                            <div class="sidebar">
                                <div class="main-search-field-2">
                                    <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>Recent Properties</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="recent-post">
                                                @foreach ($property as $val)
                                                    <div class="recent-main my-4">
                                                        <div class="recent-img">
                                                            <a href="{{ url('/property', $val->url_slug) }}"><img
                                                                    src="{{ asset('assets/images/properties/' . $val->image) }}"
                                                                    alt="No Image"></a>
                                                        </div>
                                                        <div class="info-img">
                                                            <a href="{{ url('/property', $val->url_slug) }}"
                                                                title="{{ $val->name }}">
                                                                <h6>{{ Str::limit($val->name, 20) }}</h6>
                                                            </a>
                                                            <p style="margin-bottom: 0px;">For {{ $val->type }}</p>
                                                            <p>(PKR): {{ number_format($val->price, 0) }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
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
                                                                <span class="listing-compact-title">House Luxury <i>New
                                                                        York</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="{{ asset('/front/images/feature-properties/fp-1.jpg') }}"
                                                                alt="">
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
                                                                <span class="listing-compact-title">House Luxury <i>Los
                                                                        Angles</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="{{ asset('/front/images/feature-properties/fp-2.jpg') }}"
                                                                alt="">
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
                                                                <span class="listing-compact-title">House Luxury <i>San
                                                                        Francisco</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="{{ asset('/front/images/feature-properties/fp-3.jpg') }}"
                                                                alt="">
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
                                                                <span class="listing-compact-title">House Luxury <i>Miami
                                                                        FL</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="{{ asset('/front/images/feature-properties/fp-4.jpg') }}"
                                                                alt="">
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
                                                                <span class="listing-compact-title">House Luxury <i>Chicago
                                                                        IL</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="{{ asset('/front/images/feature-properties/fp-5.jpg') }}"
                                                                alt="">
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
                                                                <span class="listing-compact-title">House Luxury <i>Toronto
                                                                        CA</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="{{ asset('/front/images/feature-properties/fp-6.jpg') }}"
                                                                alt="">
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
                {{-- <nav aria-label="..." class="pt-55">
                <ul class="pagination disabled">
                    <li class="page-item active">
                        <li>{!! $property->links() !!}</li>
                    </li>
                </ul>
            </nav> --}}

            </div>
        </section>
    @endsection
</body>
@endsection
