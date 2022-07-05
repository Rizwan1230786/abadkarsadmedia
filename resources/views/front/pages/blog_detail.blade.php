@extends('front.layout')
@section('body')

    <body class="inner-pages sin-1 homepage-4 hd-white">
    @section('main')
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
                                <a href="" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="{{ asset('storage/' . $blog->image) }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text details pb-0">
                                    <a href="#"><h3>{{ $blog->title }}</h3></a>
                                    <div class="dates">
                                        <span class="date">{{ $blog->created_at->format('d-m-y') }} &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="blog-info details mb-30">
                                        <h5 class="mb-4">Details</h5>
                                        <p class="mb-3">{!! $blog->content !!}
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <section class="comments">
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
                    </section> --}}
                    {{-- <section class="leve-comments wpb">
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
                    </section> --}}
                </div>
                <aside class="col-lg-3 col-md-12">
                    <div class="widget">
                        <h5 class="font-weight-bold mb-4">Search</h5>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </span>
                        </div>
                        <div class="recent-post py-5">
                            <h5 class="font-weight-bold">Category</h5>
                            <ul>
                                @foreach ($category as $value)
                                    <li><a href="#"><i class="fa fa-caret-right"
                                                aria-hidden="true"></i>{{ $value->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h5 class="font-weight-bold mb-4">Popular Tags</h5>
                            <div class="row">
                                @foreach ($tags as $value)
                                <div class="col-md-6 col-lg-6 tags">
                                      <span><a href="{{ url('blog/'.$value->name.'-base-blogs') }}" class="btn btn-outline-primary">{{ $value->name }}</a></span>

                                </div>
                                @endforeach
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
    </section>
    <!-- END SECTION BLOG -->
    @endsection
</body>
@endsection
