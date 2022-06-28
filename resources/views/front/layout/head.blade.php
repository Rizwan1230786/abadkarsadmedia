<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $meta->meta_description ?? ''}}">
    <meta name="meta_keywords" content="{{ $meta->meta_keywords ?? '' }}">
    <title>{{ $meta->meta_title ?? '' }}</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <script src="{{ URL::asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link rel="stylesheet" href="{{ asset('/front/css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">

    <!-- FONT AWESOME -->
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
</head>
<style>
    .error {
        color: #FF385C;
    }

    .form {
        display: none;
    }

    .form.active {
        display: block;
    }

    .form1 {
        display: none;
    }

    .form1.active {
        display: block;
    }

    .btn1 {
        background: #18ba60 !important;
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

    .caruswl-image {
        border: 1px solid;
        padding: 10px;
        width: 100px !important;
        height: 80px !important;
    }
    .mytooltip {
        display: inline;
        position: relative;
        z-index: 999
    }

    .mytooltip .tooltip-item {
        cursor: pointer;
        display: inline-block;
        font-weight: 500;
        padding: 0 10px
    }

    .mytooltip .tooltip-content {
        position: absolute;
        z-index: 9999;
        width: 309px;
        left: 2%;
        /* margin: 0 0 20px -180px; */
        bottom: 100%;
        text-align: left;
        font-size: 14px;
        line-height: 30px;
        -webkit-box-shadow: -5px -5px 15px rgb(48 54 61 / 20%);
        box-shadow: -5px -5px 15px rgb(48 54 61 / 20%);
        background: #2b2b2b;
        opacity: 0;
        cursor: default;
        pointer-events: none;
        height: 119px;
        border-radius: 10px;
        margin-bottom: 10px
    }

    .mytooltip .tooltip-content::after {
        content: '';
        top: 100%;
        left: 12%;
        border: solid transparent;
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: #2a3035 transparent transparent;
        border-width: 10px;
    }

    .mytooltip .tooltip-content img {
        position: relative;
        height: 83px;
        display: block;
        float: left;
        margin-right: 1em;
        margin-left: 10px;
        margin-top: 30px;
        border-radius: 10px;
        width: 82px;
        padding: 10px;
    }

    .mytooltip .tooltip-item::after {
        content: '';
        position: absolute;
        width: 360px;
        height: 20px;
        bottom: 100%;
        left: 50%;
        pointer-events: none;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%)
    }

    .mytooltip:hover .tooltip-item::after {
        pointer-events: auto
    }

    .mytooltip:hover .tooltip-content {
        pointer-events: auto;
        opacity: 0.7;
        -webkit-transform: translate3d(0, 0, 0) rotate3d(0, 0, 0, 0deg);
        transform: translate3d(0, 0, 0) rotate3d(0, 0, 0, 0deg)
    }

    .mytooltip:hover .tooltip-content2 {
        opacity: 1;
        font-size: 18px
    }

    .mytooltip .tooltip-text {
        font-size: 12px;
        line-height: 24px;
        display: block;
        padding: 1.31em 1.21em 1.21em 0;
        color: #fff;
        margin-top: 20px;

    }
    .homepage-9 .slick-dots li.slick-active,
    .homepage-9 .slick-dots li{
        box-shadow: inset 0 0 0 3px rgb(239 45 45 / 50%);
   }
   .header {
    position: relative;
    z-index: 3;
    padding: 3px 0px;
    font-size: 14px;
    background-color: #33A137;
}
   .header .container1 {
    width: 100%;
    float: left;
    padding-right: 30px;
    position: relative;
    background-color: #33A137;
}
.left {
    float: left;
}
.right{
    float: right;
}
.header nav {
    margin-top: 0px;
    height: 34px;
    line-height: 34px;
}
.clearfix {
    clear: both;
}
.header nav ul{
    list-style: none;
}
.header nav li a.link-l {
    position: relative;
    padding: 0px 12px;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 590;
    color: #ffffff;
}
.header nav li a.adpid-wrp {
    padding: 0 10px 0 0;
    background-color: #ffffff;
    border-radius: 5px;
    display: block;
    text-align: right;
    width: 100px;
    text-transform: capitalize;
    font-size: 12px;
    height: 26px;
    line-height: 26px;
    margin-top: 3px;
    color: #000;
}
.header nav li a.adpid-wrp .icon {
    width: 15px;
    height: 10px;
    display: block;
    position: absolute;
    top: 11px;
    font-size: 10px;
}
.icon-home{
    font-size: 18px;
}
.icon-login{
    font-size: 20px;
    color: #ffffff;
}
.header nav.right > ul > li {
    margin-right: 20px;
}
.box > ul {
    max-height: 246px;
    overflow-y: auto;
    padding-right: 1px;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 10px;

}
.box > ul li {
    /* cursor: pointer; */
    margin-bottom: 10px;
    line-height: 34px;
    height: 34px;
    text-align: center;
    border-bottom: none;
}
.box ul li a {
    padding-top: 0px;
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    box-sizing: border-box;
    background-color: #F7F7F7;
    border: 1px solid #E3E3E3;
    display: block;
}
.box ul li a {
    position: relative;
    color: #515151;
    font-size: 12px;
    padding-top: 6px;
}
.dropdon-heading{
    text-align: center;
    width: 100%;
    text-transform: capitalize;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    height: auto;
    display: block;
    font-size: 12px;
    font-weight: 700;
    margin-top: 0;
    margin-bottom: 11px;
}
.range-slider .form-control{
    font-size: 13px;
}
.lable{
    font-size: 13px !important;
}
</style>
