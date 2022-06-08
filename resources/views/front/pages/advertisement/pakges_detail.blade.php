<?php
use App\Models\Subpackges;
?>
@extends('front.layout')
@section('body')
    <link rel="stylesheet" href="{{ asset('front/css/advertise.css') }}">
    <style>
        .advertise-maps .primary-btn {
            display: block;
            width: 304px;
            height: 55px;
            line-height: 55px;
            text-align: center;
            margin: 0 auto;
            margin-bottom: 70px;
            margin-top: 70px;
            border-radius: 10px;
            font-size: 22px;
            background-color: #FF385C;
            text-transform: capitalize;
        }

        .primary-btn-success {
            width: 120;
            height: 55px;
            line-height: 55px;
            text-align: left;
            margin: 0 auto;
            margin-bottom: 10px;
            margin-left: 20px;
            margin-top: 70px;
            border-radius: 10px;
            font-size: 22px;
            background-color: #FF385C;
            border: 1px solid #FF385C;
            text-transform: capitalize;
            color: #ffffff;
        }

        .primary-btn:hover {
            text-decoration: none;
            color: #ffffff;
        }

        #form1 {
            display: none;
        }

        .button {
            width: 40%;
            border-color: #FF385C !important;
        }

        .btn:hover {
            background-color: #FF385C;
            border-color: #FF385C;
        }

        .breadcrumb {
            background-color: #ffffff !important;
            padding: 5px 0 !important;
        }

        .breadcrumb .links {
            font-size: 12px;
        }

        .breadcrumb .links a {
            color: #444444;
        }

        .dropdown-container {
            display: none;
            font-size: 14px;
            font-weight: 400;
            opacity: 1;
            padding-left: 8px;
        }

        .quantity-wrp {
            border: 1px solid #ededed;
            background-color: #ffffff;
            border-radius: 4px;
            margin-bottom: 30px;
        }

        .quantity-wrp ul.th {
            background-color: #FBFBFB;
        }

        .quantity-wrp ul {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            width: 100%;
            border-radius: 4px;
            width: 100%;
        }

        ul {
            list-style: none;
        }

        body,
        ul,
        li,
        p,
        h1,
        h2,
        h3,
        h4 {
            margin: 0;
            padding: 0;
        }

        .quantity-wrp ul li.type {
            width: 40%;
        }

        .quantity-wrp ul li {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            text-transform: capitalize;
            font-weight: 700;
            padding: 10px 20px;
        }

    </style>

    <body class="inner-pages agents homepage-4 hd-white">
    @section('main')
        <div id='page_wrapper' class="page_wrapper">
            <div id="topContents" class="topContents">
                <section class="advertise-header">
                    <h1 class="heading" style="background-color: white">Advertise</h1>
                </section>
                <!--Property View BreadCrumb & Heading Start-->
                <section class="breadcrumb">
                    <div class="container">
                        <div class="links left">
                            <a class="left" href="{{ url('/') }}" title="Home">Home <i
                                    class="fas fa-angle-right" style="padding:5px"></i></a>
                            <a class="left" href="{{ url('advertise') }}" title="Advertise">Advertise <i
                                    class="fas fa-angle-right" style="padding:5px"></i></a>
                            <span class="left">{{ $detail->title }}</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
                <!--Property View BreadCrumb & Heading End-->
            </div>
            <!-- listings section wrapper -->
            <div class="container">
                <main class="left">
                    <section class="mt20">
                        <div class="advertise-maps">
                            <div class="heading">
                                {{ $detail->title }}
                            </div>
                            <div class="adv-glance mt20" id="advertise-maps">
                                <p>{!! $detail->detail !!}</p>

                                <div class="clearfix"></div>
                                <a href="javascript:void(0);" id="formButton" class="primary-btn">Contact Now To
                                    Advertise</a>
                                <form id="form1" action="/advertise/mail-send" method="post"
                                    class="mb-10 validationForm mailformSubmited">
                                    @csrf
                                    <div class="row" style="padding: 10px">
                                        <div class="form-group col-6">
                                            <label for="exampleInputPassword1">Name:</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                                                placeholder="Name">

                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputEmail1">Email address:</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                                with anyone else.</small>
                                            @if ($errors->has('email'))
                                                <div class="error">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputPassword1">Mobile:</label>
                                            <input type="text" id="account-phone" value="+92" name="contact"
                                                class="numonly form-control" id="exampleInputPassword1" placeholder="">
                                            @if ($errors->has('contact'))
                                                <div class="error">{{ $errors->first('contact') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputPassword1">Subject:</label>
                                            <input type="text" name="subject" value="{{ $detail->title }}"
                                                class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            @if ($errors->has('subject'))
                                                <div class="error">{{ $errors->first('subject') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <label class="form-label">Message:</label>
                                            <textarea class="form-control notrequired" placeholder="Write your message here" name="message" rows="3"
                                                spellcheck="false">{{ $data['record']->meta_description ?? '' }}</textarea>
                                            @if ($errors->has('message'))
                                                <div class="error">{{ $errors->first('message') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12" style="text-align: center">
                                        <button type="submit" class="btn btn-primary user_form submit_button button"
                                            style="margin-bottom: 30px;"><i class="fas fa-envelope"></i> Send Email</button>
                                    </div>
                                </form>
                                {{-- <div class="quantity-wrp">
                                    <ul class="th">
                                        <li class="type">type</li>
                                        <li class="type">price <span>(PKR)</span></li>
                                    </ul>
                                    <ul>
                                        @foreach ($products as $value)
                                            <li class="type">{{ $value->name }}</li>
                                            <li class="type">{{ $value->price }}</li>
                                        @endforeach
                                    </ul>
                                    <button class="primary-btn-success" data-width="400" data-role="popup">BUY NOW</button>
                                </div> --}}
                                @if (isset($detail->vedio) && !empty($detail->vedio))
                                    <div class="adv-glance-video" style="text-align: center">
                                        <iframe width="600" height="400" src="{{ $detail->vedio }}" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                @endif
                                @if (isset($detail->image) && !empty($detail->image))
                                <div class="adv-glance-img mt-5" style="text-align: center">
                                    <img src="{{ asset('assets/images/our_advertisement/pakges/' . $detail->image) }}"
                                        alt="packages-titanium_plus">
                                </div>
                                @endif
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
                                            xlink:href="https://www.Abadkar.com/Abadkar/images/header_common.svg#advertise-icon">
                                        </use>
                                    </svg>
                                </span>Advertise
                            </div>
                            @foreach ($pakges as $value)
                                <?php
                                $subPakges = Subpackges::where(['packges_id' => $value->id, 'status' => 1])->get();
                                ?>
                                <div class="category <?= isset($subPakges[0]->id) && !empty($subPakges[0]->id) ? 'dropdown-btn' : '' ?>"
                                    data-i="packages-advertising">
                                    {{ $value->title }}
                                    <i class="<?= isset($subPakges[0]->id) && !empty($subPakges[0]->id) ? 'fa fa-caret-down' : '' ?>"
                                        style="float: right;
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
    <script>
        < script >
            /* When the user clicks on the button,
            toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    </script>
    <script>
        $(document).ready(function() {
            $("#formButton").click(function() {
                $("#form1").toggle();
            });
        });
    </script>
    <script>
        $(function() {
            $(".numonly").on('input', function(e) {
                $(this).val($(this).val().replace(/[^0-9]/g, ''));
            });
        });
    </script>
@endsection
@section('js')
    <script src="{{ URL::asset('front/js/Tellcustom.js') }}"></script>
    <link href="{{ URL::asset('front/css/intlTelInput.css?1613236686837') }}" rel="stylesheet">
    <script src="{{ URL::asset('front/js/Tellprism.js') }}"></script>
    <script src="{{ URL::asset('front/js/intlTelInput.js') }}"></script>
    <script src="{{ URL::asset('front/js/Tellinput.js') }}"></script>
    <script src="{{ URL::asset('assets/themeJquery/our_advertisement/pakges/jquery.js') }}"></script>
@endsection
