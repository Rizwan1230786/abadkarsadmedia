@extends('front.layout')
<style>
    .small-category-2 {
    background: #fff;
    border-radius: 8px;
    border: 1px solid #ebebeb;
    overflow: hidden;
    margin-bottom: 30px;
    padding: 0px;
    align-items: center;
    display: flex;
}
.small-category-2-thumb {
    width: 170px;
    float: left;
    display: table;
    height: 150px;
    background: #fff;
    padding: 0px;
    border-radius: 50%;
}
.homepage-4 .small-category-2-thumb img {
    width: 170px;
    height: 150px;
}
.sc-2-detail {
    display: table;
    margin-left: 25px;
    float: left;
}
.sc-2-detail .sc-jb-title {
    margin-bottom: 4px;
}
.homepage-4 .sec-title h2 span {
    position: relative;
    color: #33a137;
    font-weight: 500;
}
</style>
@section('body')
    <body class="inner-pages sin-1 homepage-4 hd-white">
    @section('main')
        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>All Cities Of Pakistan </h1>
                </div>
            </div>
        </section>
        <section class="feature-categories bg-white rec-pro">
            <div class="container">
                <div class="sec-title" style="text-align: center;">
                    <h2><span>Popular </span>Places</h2>
                    <p>Properties In Most Popular Places.</p>
                </div>
                <div class="row mt-5">
                    <!-- Single category -->
                    @foreach ($search_city as $city)
                        <div class="col-xl-4 col-lg-6 col-sm-12" data-aos="fade-up" data-aos-delay="150">
                            <div class="small-category-2">
                                <a href="{{ url('/city' . '/' . $city->slug) }}" class="homes-img">
                                    <div class="small-category-2-thumb img-1">
                                        <img src="{{ asset('assets/images/cities/' . $city->image) }}" alt="">
                                    </div>
                                </a>
                                <a href="{{ url('/city' . '/' . $city->slug) }}">
                                    <div class="sc-2-detail">
                                        <h4 class="sc-jb-title">{{ $city->name }}</h4>

                                        <h4 class="sc-jb-title"><a href="#">{{ $city->state }}</a></h4>
                                        {{-- <span>203 Properties</span> --}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- /row -->
            </div>
            <div class="pagination-sm">
                {{ $search_city->links() }}
            </div>
        </section>
    @endsection
</body>
@endsection
