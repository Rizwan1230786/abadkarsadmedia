<?php
use App\Models\Subpackges;
?>
@extends('front.layout')
@section('body')
    <link rel="stylesheet" href="{{ asset('front/css/advertise.css') }}">
    <style>
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
                                <p>To date, over 10,000 agencies have signed up with Abadkar.com, and the number is rising
                                    by
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
                                            xlink:href="https://www.zameen.com/Abadkar/images/header_common.svg#advertise-icon">
                                        </use>
                                    </svg>
                                </span>Advertise
                            </div>
                            @foreach ($pakges as $value)
                                <?php
                                $subPakges = Subpackges::where(['packges_id' => $value->id, 'status' => 1])->get();
                                ?>
                                <div class="category <?= isset($subPakges[0]->id) && !empty($subPakges[0]->id) ? 'dropdown-btn' : '' ?>" data-i="packages-advertising">
                                    {{ $value->title }}
                                    <i class="<?= isset($subPakges[0]->id) && !empty($subPakges[0]->id) ? 'fa fa-caret-down' : '' ?>" style="float: right;
                                        margin-top: 5px;"></i>
                                </div>
                                <ul class="packages-advertising dropdown-container" id="myDropdown"
                                    data-nt="packages-advertising">
                                    @foreach ($subPakges as $key => $value)
                                        <li class=""><a
                                                href="/advertise/{{ $value->title }}">{{ $value->title }}</a></li>
                                    @endforeach
                                </ul>
                            @endforeach
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
@endsection
