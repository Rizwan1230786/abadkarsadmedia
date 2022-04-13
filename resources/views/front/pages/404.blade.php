@extends('front.layout')
@section('body')

    <body class="inner-pages hd-white">
    @section('main')
    <!-- END SECTION HEADINGS -->
   <!-- START SECTION 404 -->
   <section class="notfound pt-0">
    <div class="container">
        <div class="top-headings text-center">
            <img src="{{ asset('/front') }}/images/bg/error-404.jpg" alt="Page 404">
            <h3 class="text-center">Page Not Found!</h3>
            <p class="text-center">Oops! Looks Like Something Going Rong We can’t seem to find the page you’re looking for make sure that you have typed the currect URL</p>
        </div>
        <div class="port-info">
            <a href="{{ route('front.index') }}" class="btn btn-primary btn-lg">Go To Home</a>
        </div>
    </div>
</section>
    @endsection
</body>
@endsection
