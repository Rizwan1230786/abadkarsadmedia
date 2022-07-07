@extends('front.layout')
@section('body')

    <body class="inner-pages sin-1 homepage-4 hd-white">
    @section('main')
        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>All Property Of {{ $category->name }} </h1>
                </div>
            </div>
        </section>
        <section class="blog blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-xs-12">
                        <h2 class="mb-5" style="font-size: 1.5rem;">{{ $category->name }} For sale in all cities of
                            Pakistan</h2>
                        <div class="row">
                            @foreach ($check as $check)
                            <div class="col-4 p-1">
                                <ul>
                                    <li style="list-style: square;">
                                        <a style="color: black;font-size:15px;"
                                            href="{{ url('/property' . '/' . $category->name . '/' . $check->url_slug) }}">
                                            {{ $check->title }}</a>
                                    </li>

                                </ul>
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
                                    <button class="btn btn-primary" type="button"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                </span>
                            </div>
                            <div class="widget-boxed popular mt-5">
                                <h5 class="font-weight-bold mb-4">Popular Tags</h5>
                                <div class="widget-boxed-body">
                                    <div class="recent-post">
                                        <div class="row">
                                            @foreach ($tags as $value)
                                            <div class="col-md-6 col-lg-6 tags">
                                                  <span><a href="{{ url('/tags-property'.'/'.$value->name.'_base_property') }}" class="btn btn-outline-primary">{{ $value->name }}</a></span>

                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    @endsection
</body>
@endsection
