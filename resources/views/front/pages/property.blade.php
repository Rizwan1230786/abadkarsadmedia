@extends('front.layout')
@section('body')

    <body class="inner-pages agents hp-6 full hd-white">
    @section('main')
        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-list full featured portfolio blog">
            <div class="container">
                <section class="headings-2 pt-0 pb-0">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p><a href="/">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                                </div>
                                <h3>List View</h3>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Search Form -->
                <div class="col-12 px-0 parallax-searchs">
                    <div class="banner-search-wrap">
                        <form action="{{ url('/search_property/redirect') }}" method="get">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs_1">
                                    <div class="rld-main-search">
                                        <div class="row">
                                            <div class="rld-single-select ml-22">
                                                <select class="form-control single-select cat" name="category">
                                                    <option value="">Property Type</option>
                                                    @foreach ($category as $value)
                                                        <option value="{{ $value->id }}">
                                                            {{ $value->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="rld-single-select ml-22">
                                                <select id="country-dd" class="form-control single-select" name="city_name">
                                                    <option value="">Select City</option>
                                                    @foreach ($city as $value)
                                                        <option value="{{ $value->slug }}">
                                                            {{ $value->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('city_name'))
                                                    <div class="error">{{ $errors->first('city_name') }}</div>
                                                @endif

                                            </div>
                                            <div class="rld-single-select">
                                                <select id="state-dd" class="form-control single-select" name="area_id">
                                                    <option value="">Select Area</option>
                                                </select>
                                            </div>
                                            <div class="dropdown-filter"><span>Advanced Search</span></div>
                                            <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                <button class="btn btn-yellow" type="submit">Search
                                                    Now</button>
                                            </div>
                                            <div class="explore__form-checkbox-list full-filter">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                        <!-- Form Property Status -->
                                                        <div class="form-group categories">
                                                            <select id="country-dd" class="form-control single-select"
                                                                name="type">
                                                                <option value="">Select purpose</option>
                                                                <option value="sale">For Sale</option>
                                                                <option value="rent">For Rent</option>
                                                            </select>
                                                        </div>
                                                        <!--/ End Form Property Status -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                        <!-- Form Bedrooms -->
                                                        <div class="form-group beds bed d-none">
                                                            <div class="form-group categories">
                                                                <select id="country-dd" class="form-control single-select"
                                                                    name="number_of_bedrooms">
                                                                    <option value="">Bedrooms</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--/ End Form Bedrooms -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                        <!-- Form Bathrooms -->
                                                        <div class="form-group bath bed d-none">
                                                            <div class="form-group categories">
                                                                <select id="country-dd" class="form-control single-select"
                                                                    name="number_of_bathrooms">
                                                                    <option value="">Bathrooms</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--/ End Form Bathrooms -->
                                                    </div>
                                                    <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                        <!-- Price Fields -->
                                                        <div class="main-search-field-2">
                                                            <div class="range-slider">
                                                                <input class="form-control single-select" type="text"
                                                                    name="land_area" placeholder="Enter area size...">
                                                            </div>
                                                            <br>
                                                            <div class="range-slider">
                                                                <!-- Area Range -->
                                                                <select class="form-control single-select" name="unit">
                                                                    <option value="">Select unit</option>
                                                                    <option value="square feet">Square feet</option>
                                                                    <option value="square yard">Square yard</option>
                                                                    <option value="square meter">Square meter</option>
                                                                    <option value="marla">Marla</option>
                                                                    <option value="kanal">Kanal</option>
                                                                </select>
                                                            </div>
                                                            <br>
                                                            <!-- Price Range -->
                                                            <div class="range-slider" style="display: inline-flex;">
                                                                <input class="form-control single-select" type="text"
                                                                    name="min_price" placeholder="Enter minimum price..."
                                                                    style="margin-right: 10px;">
                                                                <input class="form-control single-select" type="text"
                                                                    name="max_price" placeholder="Enter maximum price...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 py-1 pr-30">
                                                        <!-- Checkboxes -->
                                                        <div class="row">
                                                            @foreach ($feature as $value)
                                                                <div class="col-lg-6">

                                                                    <input style="position:absolute;top: 7px;"
                                                                        id="check-2" type="checkbox" name="check1">
                                                                    <label style="margin-left: 30px;"
                                                                        for="check-2">{{ $value->name }}</label>



                                                                </div>
                                                            @endforeach

                                                        </div>
                                                        <!-- Checkboxes / End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/ End Search Form -->
                <section class="headings-2 pt-0">
                    <div class="pro-wrapper">
                        @if (isset($search_property) && !empty($search_property))
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <div class="text-heading text-left">
                                        <h5 class="font-weight-bold mb-0 mt-3">({{ $count }} Search results of
                                            Property in {{ $name }}) </h5>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                                                                <div class="input-group border rounded input-group-lg w-auto mr-4">
                                                                    <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                                                                    <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                                                                        <option selected>Top Selling</option>
                                                                        <option value="1">Most Viewed</option>
                                                                        <option value="2">Price(low to high)</option>
                                                                        <option value="3">Price(high to low)</option>
                                                                    </select>
                                                                </div>
                                                                <div class="sorting-options">
                                                                    <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                                                    <a href="properties-full-grid-1.html" class="change-view-btn lde"><i class="fa fa-th-large"></i></a>
                                                                </div>
                                                            </div> -->
                    </div>
                </section>
                @if (isset($search_property) && !empty($search_property))
                    @foreach ($search_property as $search_property)
                        <div class="row">
                            <div class="item  mb-5 col-lg-4 col-md-12 col-xs-12 landscapes sale pr-0 pb-0"
                                data-aos="fade-up">
                                <div class="project-single mb-0 bb-0">
                                    <div class="project-inner project-head"
                                        style="background-image: url('{{ asset('assets/images/properties/' . $search_property->image) }}');  background-size: cover;
                                                background-position: center;background-repeat: no-repeat;height:40vh">
                                        <div class="project-bottom">
                                            <h4><a href="{{ url('/property', $search_property->url_slug) }}">View
                                                    Property</a><span class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">

                                            <!-- homes img -->
                                            <a href="{{ url('/property', $search_property->url_slug) }}"
                                                class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">{{ $search_property->type }}
                                                </div>
                                                <div class="homes-price">Family Home</div>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                            @if ($search_property->video)
                                                <a href="{{ $search_property->video }}"
                                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            @endif
                                            <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="col-lg-8 col-md-12 homes-content pb-0  mb-5" data-aos="fade-up">
                                <!-- homes address -->
                                <h3><a
                                        href="{{ url('/property', $search_property->url_slug) }}">{{ $search_property->name }}</a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="{{ url('/property', $search_property->url_slug) }}">
                                        <i class="fa fa-map-marker"></i><span>{{ $search_property->location }}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    @if ($search_property->number_of_bedrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>{{ $search_property->number_of_bedrooms }}</span>
                                        </li>
                                    @endif
                                    @if ($search_property->number_of_bathrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>{{ $search_property->number_of_bathrooms }}</span>
                                        </li>
                                    @endif
                                    @if ($search_property->land_area)
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>{{ number_format($search_property->land_area, 1) }}
                                                {{ $search_property->unit }}</span>
                                        </li>
                                    @endif
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="#">(PKR)
                                            {{ number_format($search_property->price, 0) }}</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif(isset($city_search_property) && !empty($city_search_property))
                    <section class="headings-2 pt-0">
                        <div class="pro-wrapper">
                            @if (isset($city_search_property) && !empty($city_search_property))
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <div class="text-heading text-left">
                                            <h5 class="font-weight-bold mb-0 mt-3">( {{ number_format($count) }}
                                                {{ $url_slug->title }} ) </h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </section>
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach ($category as $item)
                                <li role="presentation"
                                    class="{{ $item->id == $url_slug->category_id ? 'active' : '' }}">
                                    <a href="/#{{ $item->name }}" aria-controls="home" role="tab"
                                        data-toggle="tab">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach ($category as $item)
                                <div role="tabpanel"
                                    class="tab-pane {{ $item->id == $url_slug->category_id ? 'active' : '' }}"
                                    id="{{ $item->name }}" class="active">
                                    <ul class="nav nav-tabs" style="display: table-header-group">
                                        <p class="mt-4 ml-3"><b>{{ $url_slug->title }}</b></p>
                                        @foreach ($city_area as $area)
                                            @if ($url_slug->city_id == $area->city_id)
                                                <li style="list-style: square; width: 200px;">
                                                    <a style="font-size: 13px;"
                                                        href="{{ url('/property' . '/' . $item->name . '/' . $get_city_name->slug . '/' . $area->slug) }}">{{ $area->areaname }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    @foreach ($city_search_property as $city_search_property)
                        <div class="row">
                            <div class="item  mb-5 col-lg-4 col-md-12 col-xs-12 landscapes sale pr-0 pb-0"
                                data-aos="fade-up">
                                <div class="project-single mb-0 bb-0">
                                    <div class="project-inner project-head"
                                        style="background-image: url('{{ asset('assets/images/properties/' . $city_search_property->image) }}');  background-size: cover;
                                                background-position: center;background-repeat: no-repeat;height:40vh">
                                        <div class="project-bottom">
                                            <h4><a href="{{ url('/property', $city_search_property->url_slug) }}">View
                                                    Property</a><span class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ url('/property', $city_search_property->url_slug) }}"
                                                class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">{{ $city_search_property->type }}
                                                </div>
                                                <div class="homes-price">Family Home</div>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                            @if ($city_search_property->video)
                                                <a href="{{ $city_search_property->video }}"
                                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            @endif
                                            <a href="#" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="col-lg-8 col-md-12 homes-content pb-0  mb-5" data-aos="fade-up">
                                <!-- homes address -->
                                <h3><a
                                        href="{{ url('/property' . '/' . $city_search_property->url_slug) }}">{{ $city_search_property->name }}</a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="{{ url('/property', $city_search_property->url_slug) }}">
                                        <i
                                            class="fa fa-map-marker"></i><span>{{ $city_search_property->location }}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    @if ($city_search_property->number_of_bedrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>{{ $city_search_property->number_of_bedrooms }}</span>
                                        </li>
                                    @endif
                                    @if ($city_search_property->number_of_bathrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>{{ $city_search_property->number_of_bathrooms }}</span>
                                        </li>
                                    @endif
                                    @if ($city_search_property->land_area)
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>{{ number_format($city_search_property->land_area, 1) }}
                                                {{ $city_search_property->unit }}</span>
                                        </li>
                                    @endif
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="{{ url('/property', $city_search_property->id) }}">(PKR)
                                            {{ number_format($city_search_property->price, 0) }}</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif(isset($area_search_property) && !empty($area_search_property))
                    <section class="headings-2 pt-0">
                        <div class="pro-wrapper">
                            @if (isset($area_search_property) && !empty($area_search_property))
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <div class="text-heading text-left">
                                            <h5 class="font-weight-bold mb-0 mt-3">( {{ number_format($count) }} House
                                                for sale in
                                                {{ $area->areaname }} city {{ $city_slug->name }} ) </h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </section>
                    @foreach ($area_search_property as $area_search_propertys)
                        <div class="row">
                            <div class="item mb-5 col-lg-4 col-md-12 col-xs-12 landscapes sale pr-0 pb-0"
                                data-aos="fade-up">
                                <div class="project-single mb-0 bb-0">
                                    <div class="project-inner project-head"
                                        style="background-image: url('{{ asset('assets/images/properties/' . $area_search_propertys->image) }}');  background-size: cover;
                                                    background-position: center;background-repeat: no-repeat;height:40vh">
                                        >
                                        <div class="project-bottom">
                                            <h4><a href="{{ url('/property', $area_search_propertys->url_slug) }}">View
                                                    Property</a><span class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ url('/property', $area_search_propertys->url_slug) }}"
                                                class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">
                                                    {{ $area_search_propertys->type }}
                                                </div>
                                                <div class="homes-price">Family Home</div>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                            @if ($area_search_propertys->video)
                                                <a href="{{ $area_search_propertys->video }}"
                                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            @endif
                                            <a href="$" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="col-lg-8 col-md-12 homes-content pb-0 mb-5" data-aos="fade-up">
                                <!-- homes address -->
                                <h3><a
                                        href="{{ url('/property', $area_search_propertys->url_slug) }}">{{ $area_search_propertys->name }}</a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="{{ url('/property', $area_search_propertys->url_slug) }}">
                                        <i
                                            class="fa fa-map-marker"></i><span>{{ $area_search_propertys->location }}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    @if ($area_search_propertys->number_of_bedrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>{{ $area_search_propertys->number_of_bedrooms }}</span>
                                        </li>
                                    @endif
                                    @if ($area_search_propertys->number_of_bathrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>{{ $area_search_propertys->number_of_bathrooms }}</span>
                                        </li>
                                    @endif
                                    @if ($area_search_propertys->land_area)
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>{{ number_format($area_search_propertys->land_area, 1) }}
                                                {{ $area_search_propertys->unit }}</span>
                                        </li>
                                    @endif
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="#">(PKR)
                                            {{ number_format($area_search_propertys->price, 0) }}</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif(isset($agency_search_property) && !empty($agency_search_property))
                    <section class="headings-2 pt-0">
                        <div class="pro-wrapper">
                            @if (isset($agency_search_property) && !empty($agency_search_property))
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <div class="text-heading text-left">
                                            <h5 class="font-weight-bold mb-0 mt-3">( {{ number_format($count) }}
                                                Property
                                                for search in {{ $get_agency_id->name }} agency ) </h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </section>
                    @foreach ($agency_search_property as $value)
                        <div class="row">
                            <div class="item mb-5 col-lg-4 col-md-12 col-xs-12 landscapes sale pr-0 pb-0"
                                data-aos="fade-up">
                                <div class="project-single mb-0 bb-0">
                                    <div class="project-inner project-head"
                                        style="background-image: url('{{ asset('assets/images/properties/' . $value->image) }}');  background-size: cover;
                                                    background-position: center;background-repeat: no-repeat;height:40vh">
                                        >
                                        <div class="project-bottom">
                                            <h4><a href="{{ url('/property', $value->url_slug) }}">View
                                                    Property</a><span class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ url('/property', $value->url_slug) }}" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">
                                                    {{ $value->type }}
                                                </div>
                                                <div class="homes-price">Family Home</div>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                            @if ($value->video)
                                                <a href="{{ $value->video }}" class="btn popup-video popup-youtube"><i
                                                        class="fas fa-video"></i></a>
                                            @endif
                                            <a href="$" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="col-lg-8 col-md-12 homes-content pb-0 mb-5" data-aos="fade-up">
                                <!-- homes address -->
                                <h3><a href="{{ url('/property', $value->url_slug) }}">{{ $value->name }}</a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="{{ url('/property', $value->url_slug) }}">
                                        <i class="fa fa-map-marker"></i><span>{{ $value->location }}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    @if ($value->number_of_bedrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>{{ $value->number_of_bedrooms }}</span>
                                        </li>
                                    @endif
                                    @if ($value->number_of_bathrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>{{ $value->number_of_bathrooms }}</span>
                                        </li>
                                    @endif
                                    @if ($value->land_area)
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>{{ number_format($value->land_area, 1) }}
                                                {{ $value->unit }}</span>
                                        </li>
                                    @endif
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="#">(PKR)
                                            {{ number_format($value->price, 0) }}</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif(isset($tag_property) && !empty($tag_property))
                    <section class="headings-2 pt-0">
                        <div class="pro-wrapper">
                            @if (isset($tag_property) && !empty($tag_property))
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <div class="text-heading text-left">
                                            <h5 class="font-weight-bold mb-0 mt-3">( {{ number_format($count) }}
                                                Property
                                                for search )</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </section>
                    @forelse ($tag_property as $value)
                        <div class="row">
                            <div class="item mb-5 col-lg-4 col-md-12 col-xs-12 landscapes sale pr-0 pb-0"
                                data-aos="fade-up">
                                <div class="project-single mb-0 bb-0">
                                    <div class="project-inner project-head"
                                        style="background-image: url('{{ asset('assets/images/properties/' . $value->image) }}');  background-size: cover;
                                                    background-position: center;background-repeat: no-repeat;height:40vh">
                                        >
                                        <div class="project-bottom">
                                            <h4><a href="{{ url('/property', $value->url_slug) }}">View
                                                    Property</a><span class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ url('/property', $value->url_slug) }}" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">
                                                    {{ $value->type }}
                                                </div>
                                                <div class="homes-price">Family Home</div>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                            @if ($value->video)
                                                <a href="{{ $value->video }}" class="btn popup-video popup-youtube"><i
                                                        class="fas fa-video"></i></a>
                                            @endif
                                            <a href="$" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="col-lg-8 col-md-12 homes-content pb-0 mb-5" data-aos="fade-up">
                                <!-- homes address -->
                                <h3><a href="{{ url('/property', $value->url_slug) }}">{{ $value->name }}</a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="{{ url('/property', $value->url_slug) }}">
                                        <i class="fa fa-map-marker"></i><span>{{ $value->location }}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    @if ($value->number_of_bedrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>{{ $value->number_of_bedrooms }}</span>
                                        </li>
                                    @endif
                                    @if ($value->number_of_bathrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>{{ $value->number_of_bathrooms }}</span>
                                        </li>
                                    @endif
                                    @if ($value->land_area)
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>{{ number_format($value->land_area, 1) }}
                                                {{ $value->unit }}</span>
                                        </li>
                                    @endif
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="#">(PKR)
                                            {{ number_format($value->price, 0) }}</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3>No any properties in this tag!</h3>
                    @endforelse
                @else
                    <section class="headings-2 pt-0">
                        <div class="pro-wrapper">
                            @if (isset($property) && !empty($property))
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <div class="text-heading text-left">
                                            <h5 class="font-weight-bold mb-0 mt-3">Total (
                                                {{ number_format($count), 0 }} )
                                                @if (!empty($name))
                                                    {{ $name ?? '' }} for sale.<br><br>
                                                @else
                                                    Properties Available.<br><br>
                                                @endif
                                                @if (!empty($city_name))
                                                    <span style="font-size:15px;">
                                                        Properties for sale in
                                                        {{ $city_name }}
                                                        @if (isset($area_name) && !empty($area_name))
                                                            Area {{ $area_name ?? '' }}
                                                        @endif
                                                    </span>
                                                @endif
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </section>
                    @foreach ($property as $properties)
                        <div class="row">
                            <div class="item mb-5 col-lg-4 col-md-12 col-xs-12   landscapes sale pr-0 pb-0"
                                data-aos="fade-up">
                                <div class="project-single mb-0 bb-0">
                                    <div class="project-inner project-head"
                                        style="background-image: url('{{ asset('assets/images/properties/' . $properties->image) }}');  background-size: cover;
                                                    background-position: center;background-repeat: no-repeat;height:40vh">
                                        <div class="project-bottom">
                                            <h4><a href="{{ url('/property', $properties->url_slug) }}">View
                                                    Property</a><span class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ url('/property', $properties->url_slug) }}" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">{{ $properties->type }}</div>
                                                <div class="homes-price">Family Home</div>
                                                {{-- <img src="{{ asset('assets/images/properties/' . $properties->image) }}"
                                    alt="home-1" class="img-responsive"> --}}
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="#" class="btn"><i class="fa fa-link"></i></a>
                                            @if ($properties->video)
                                                <a href="{{ $properties->video }}"
                                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            @endif
                                            <a href="$" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="col-lg-8 col-md-12 homes-content pb-0 mb-5" data-aos="fade-up">
                                <!-- homes address -->
                                <h3><a
                                        href="{{ url('/property', $properties->url_slug) }}">{{ $properties->name }}</a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="{{ url('/property', $properties->url_slug) }}">
                                        <i class="fa fa-map-marker"></i><span>{{ $properties->location }}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    @if ($properties->number_of_bedrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>{{ $properties->number_of_bedrooms }}</span>
                                        </li>
                                    @endif
                                    @if ($properties->number_of_bathrooms)
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>{{ $properties->number_of_bathrooms }}</span>
                                        </li>
                                    @endif
                                    @if (!empty($properties->land_area))
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>{{ $properties->land_area }}
                                                {{ $properties->unit }}</span>
                                        </li>
                                    @endif
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="#">(PKR)
                                            {{ number_format($properties->price, 0) }}</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="fas fa-exchange-alt"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="pagination-sm">
                    {{ $property->links() }}
                </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->
    @endsection
</body>
<script>
    $(document).ready(function() {
        $(".nav-tabs a").click(function() {
            $(this).tab('show');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#country-dd').on('change', function() {
            var idCountry = this.value;
            $("#state-dd").html('');
            $("#state-dd").parent().find('.nice-select .list').html('');
            $.ajax({
                url: "{{ url('/search_property/fetch-states') }}",
                type: "POST",
                data: {
                    city_slug: idCountry,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    // $('#state-dd').html('<select value=""">Select Area</select>');
                    $("#state-dd").append('<option value="">Select Area</option>');
                    $.each(result.areas, function(key, value) {
                        $("#state-dd").append(
                            '<option value="' + value.id + '">' + value
                            .areaname + '</option>');
                        $("#state-dd").parent().find('.nice-select .list').append(
                            '<li data-value="' + value
                            .id + '" class="option">' + value.areaname + '</li>'
                        );
                    });
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.cat').on('change', function() {
            var cat_id = this.value;
            if (cat_id == 7) {
                $('.bed').removeClass('d-none');
            } else {
                $('.bed').addClass('d-none');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.cat2').on('change', function() {
            var cat_id = this.value;
            if (cat_id == 7) {
                $('.bed2').removeClass('d-none');
            } else {
                $('.bed2').addClass('d-none');
            }
        });
    });
</script>
@endsection
