<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $meta->meta_description }}">
    <meta name="meta_keywords" content="{{ $meta->meta_keywords }}">
    <title>{{ $meta->meta_title }}</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <script src="{{ URL::asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/front/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('/front/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/aos2.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/maps.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('/front/css/colors/pink.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/front/css/timedropper.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/datedropper.css') }}"> --}}
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{ asset('/front/css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/leaflet-gesture-handling.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/leaflet.markercluster.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/leaflet.markercluster.default.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/toastr.min.css') }}" rel="stylesheet" />
    <!-- Jquery js-->
    <script src="{{ URL::asset('assets/js/toastr.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('front') }}/css/dashbord-mobile-menu.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/owl-carousel.css">
    <link rel="stylesheet" id="color" href="{{ asset('front') }}/css/default.css">
    {{-- <link rel="stylesheet" href="{{ asset('front/css/advertise.css') }}"> --}}
    {{-- <link href="{{ asset('front/css') }}8966c3ccbe385acd9417e11ccc72a0349925460532.css" rel="stylesheet"> --}}

</head>
<style>
    .error {
        color: #FF385C;
    }

    .form {
        display: none;
    }

    .form.active {
        display: block
    }

    .form1 {
        display: none;
    }

    .form1.active {
        display: block
    }

    .btn1 {
        background: #18ba60 !important
    }

    .nav {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .nav-tabs>li {
        float: left;
        margin-bottom: -1px;
    }

    .nav>li {
        position: relative;
        display: block;
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
        text-decoration: none;
    }

    .nav-tabs>li>a {
        margin-right: 2px;
        line-height: 1.42857143;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0;
    }

    .nav>li>a {
        position: relative;
        display: block;
        padding: 10px 15px;
    }

    a {
        color: #337ab7;
        text-decoration: none;
    }

    .tab-pane ul li a {
        color: black;
        text-decoration: none;
        background-color: transparent;
    }

    .tab-pane ul li a:hover {
        color: #337ab7;
        text-decoration: underline;
        background-color: transparent;
    }

    .seting {
        position: relative;
        top: 2px;
        left: 7px;
    }

    .left-side {
        display: inline-block;
    }

    .single-add-property .row input {
        border-radius: 5px;
    }

    .scroller {
        width: 300px;
        height: 100px;
        overflow-y: scroll;
        scrollbar-color: rebeccapurple green;
        scrollbar-width: thin;
    }

    .header-user-menu ul li a:hover {
        color: #FF385C;
    }

    @media (max-width: 1366px) .e1055059 {
        max-width: calc(950px + 20rem);
        min-width: 72rem;
    }

    .e1055059 {
        /* min-width: 140rem;
        max-width: 140rem; */
        margin-bottom: 4rem;
        margin-left: auto;
        margin-right: auto;
        /* -webkit-transition: all .25s ease-in; */
        transition: all .25s ease-in;
    }

    .dc62c1ea {
        padding: 0 85px;
        position: relative;
        height: -webkit-fit-content;
        height: -moz-fit-content;
        height: fit-content;
    }

 ._9dd6c0c3 {
        left: 0;
        height: 2rem;
        background-image: url('http://www.w3.org/2000/svg' class='svg-icon-sprite' viewBox='0 0 32 32' fill='%23222'%3E%3Cpath d='M24.337 28.65c.8.8.7 2.1-.1 2.8-.8.7-2 .7-2.7 0l-14-14c-.8-.8-.8-2 0-2.8l14-14c.8-.8 2-.8 2.8-.1.8.8.8 2 .1 2.8l-.1.1-12.6 12.5 12.6 12.7z'/%3E%3C/svg%3E) 50%/contain no-repeat;
    }

    html[dir] .a871e3e8 {
        right: 0;
        height: 2rem;
        background: url('http://www.w3.org/2000/svg' class='svg-icon-sprite' viewBox='0 0 32 32' fill='%23222'%3E%3Cpath d='M7.55 3.363c-.8-.8-.7-2.1.1-2.8.8-.7 2-.7 2.7 0l14 14c.8.8.8 2 0 2.8l-14 14c-.8.8-2 .8-2.8.1-.8-.8-.8-2-.1-2.8l.1-.1 12.6-12.5-12.6-12.7z'/%3E%3C/svg%3E) 50%/contain no-repeat;
    }

    ._9687c3ac {
        min-height: 100px;
        color: #fff;
        text-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .b93fdef3 {
        display: inline-block;
        height: 100%;
        vertical-align: middle;
    }

    ._84f112e7 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-left: 0.3rem;
    }
    .ea29241f {
    position: relative;
}
._2af66cb5 {
    width: 4rem;
    height: 4.1rem;
    /* -o-object-fit: none; */
    object-fit: none;
    display: block;
    border: 0.1rem solid #000;
    /* -webkit-box-sizing: border-box; */
    box-sizing: border-box;
    margin-top: 0.8rem;
}
.caruswl-image{
    border: 1px solid;
    padding: 10px;
    width: 140px !important;
    height: 110px !important;
}

</style>
