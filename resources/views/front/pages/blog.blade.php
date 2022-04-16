@extends('front.layout')
@section('body')

    <body class="inner-pages sin-1 homepage-4 hd-white">
    @section('main')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Blog</h1>
                <h2><a href="{{ route('front.index') }}">Home </a> &nbsp;/&nbsp; Blog</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION BLOG -->
    <section class="blog blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-xs-12">
                    <div class="row">
                        @foreach ($blog as $blogs)

                        <div class="col-md-12 col-xs-12 space">
                            <div class="news-item news-item-sm">
                                <a href="{{ route('front.blog_detail',$blogs->title) }}" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="resp-img" src="{{ asset('storage/' . $blogs->image) }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="{{ route('front.blog_detail',$blogs->title) }}"><h3>{{ $blogs->title }}</h3></a>
                                    <div class="dates">
                                        <span class="date">{{ $blogs->created_at->format('d-m-y') }} &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr">
                                        <p>{!! $blogs->content !!}</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="{{ route('front.blog_detail',$blogs->title) }}" class="news-link">Read more...</a>
                                        {{-- <div class="admin">
                                            <p>By, Karl Smith</p>
                                            <img src="{{ asset('/front/images/testimonials/ts-1.jpg') }}" alt="">
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
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
                                <span><a href="#" class="btn btn-outline-primary mb-0">Location</a></span>
                                <span><a href="#" class="btn btn-outline-primary mb-0">Price</a></span>
                            </div>
                        </div>
                        {{-- <div class="recent-post pt-5">
                            <h5 class="font-weight-bold mb-4">Recent Posts</h5>
                            <div class="recent-main">
                                <div class="recent-img">
                                    <a href="{{ route('front.blog_detail',$blogs->id) }}"><img src="{{ asset('/front/images/blog/b-1.jpg') }}" alt=""></a>
                                </div>
                                <div class="info-img">
                                    <a href="{{ route('front.blog_detail',$blogs->id) }}"><h6>Real Estate</h6></a>
                                    <p>May 10, 2020</p>
                                </div>
                            </div>
                            <div class="recent-main my-4">
                                <div class="recent-img">
                                    <a href="{{ route('front.blog_detail',$blogs->id) }}"><img src="{{ asset('/front/images/blog/b-2.jpg') }}" alt=""></a>
                                </div>
                                <div class="info-img">
                                    <a href="{{ route('front.blog_detail',$blogs->id) }}"><h6>Real Estate</h6></a>
                                    <p>May 10, 2020</p>
                                </div>
                            </div>
                            <div class="recent-main">
                                <div class="recent-img">
                                    <a href="{{ route('front.blog_detail',$blogs->id) }}"><img src="{{ asset('/front/images/blog/b-3.jpg') }}" alt=""></a>
                                </div>
                                <div class="info-img">
                                    <a href="{{ route('front.blog_detail',$blogs->id) }}"><h6>Real Estate</h6></a>
                                    <p>May 10, 2020</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </aside>
            </div>
        </div>
        <nav aria-label="..." class="pt-55">
            <ul class="pagination disabled">
                <li class="page-item active">
                    <li>{!! $property->links() !!}</li>
                </li>
            </ul>
        </nav>
    </section>
    <!-- END SECTION BLOG -->
    @endsection
</body>
@endsection
