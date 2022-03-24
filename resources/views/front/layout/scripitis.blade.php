  <!--register form -->
  <div class="login-and-register-form modal">
    <div class="main-overlay"></div>
    <div class="main-register-holder">
        <div class="main-register fl-wrap">
            <div class="close-reg"><i class="fa fa-times"></i></div>
            <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
            <div class="soc-log fl-wrap">
                <p>Login</p>
                <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
            </div>
            <div class="log-separator fl-wrap"><span>Or</span></div>
            <div id="tabs-container">
                <ul class="tabs-menu">
                    <li class="current"><a href="#tab-1">Login</a></li>
                    <li><a href="#tab-2">Register</a></li>
                </ul>
                <div class="tab">
                    <div id="tab-1" class="tab-contents">
                        <div class="custom-form">
                            <form method="post" name="registerform">
                                <label>Username or Email Address * </label>
                                <input name="email" type="text" onClick="this.select()" value="">
                                <label>Password * </label>
                                <input name="password" type="password" onClick="this.select()" value="">
                                <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                <div class="clearfix"></div>
                                <div class="filter-tags">
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Remember me</label>
                                </div>
                            </form>
                            <div class="lost_password">
                                <a href="#">Lost Your Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <div id="tab-2" class="tab-contents">
                            <div class="custom-form">
                                <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                    <label>First Name * </label>
                                    <input name="name" type="text" onClick="this.select()" value="">
                                    <label>Second Name *</label>
                                    <input name="name2" type="text" onClick="this.select()" value="">
                                    <label>Email Address *</label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <label>Password *</label>
                                    <input name="password" type="password" onClick="this.select()" value="">
                                    <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--register form end -->

<!-- START PRELOADER -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- END PRELOADER -->{}

<!-- ARCHIVES JS -->
<script src="{{asset('/front/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('/front/js/rangeSlider.js')}}"></script>
<script src="{{asset('/front/js/tether.min.js')}}"></script>
<script src="{{asset('/front/js/moment.js')}}"></script>
<script src="{{asset('/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/front/js/mmenu.min.js')}}"></script>
<script src="{{asset('/front/js/mmenu.js')}}"></script>
<script src="{{asset('/front/js/aos.js')}}"></script>
<script src="{{asset('/front/js/aos2.js')}}"></script>
<script src="{{asset('/front/js/animate.js')}}"></script>
<script src="{{asset('/front/js/slick.min.js')}}"></script>
<script src="{{asset('/front/js/fitvids.js')}}"></script>
<script src="{{asset('/front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('/front/js/typed.min.js')}}"></script>
<script src="{{asset('/front/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/front/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('/front/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/front/js/smooth-scroll.min.js')}}"></script>
<script src="{{asset('/front/js/lightcase.js')}}"></script>
<script src="{{asset('/front/js/search.js')}}"></script>
<script src="{{asset('/front/js/owl.carousel.js')}}"></script>
<script src="{{asset('/front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('/front/js/ajaxchimp.min.js')}}"></script>
<script src="{{asset('/front/js/newsletter.js')}}"></script>
<script src="{{asset('/front/js/jquery.form.js')}}"></script>
<script src="{{asset('/front/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('/front/js/searched.js')}}"></script>
<script src="{{asset('/front/js/forms-2.js')}}"></script>
<script src="{{asset('/front/js/map-style2.js')}}"></script>
<script src="{{asset('/front/js/range.js')}}"></script>
<script src="{{asset('/front/js/color-switcher.js')}}"></script>
<script src="{{ asset('/front/js/popper.min.js') }}"></script>
{{-- <script src="{{ asset('/front/js/slick4.js') }}"></script> --}}
<script src="{{ asset('/front/js/light.js') }}"></script>
<script src="{{ asset('/front/js/popup.js') }}"></script>
<script src="{{ asset('/front/js/inner.js') }}"></script>
<script>
    $(window).on('scroll load', function() {
        $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
    });

</script>

<!-- Slider Revolution scripts -->
<script src="{{ asset('/front/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('/front/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<script>
    var typed = new Typed('.typed', {
        strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
        smartBackspace: false,
        loop: true,
        showCursor: true,
        cursorChar: "|",
        typeSpeed: 50,
        backSpeed: 30,
        startDelay: 800
    });

</script>

<script>
    $('.slick-lancers').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 1292,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 993,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 769,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            }
        }]
    });

</script>

<script>
    $('.job_clientSlide').owlCarousel({
        items: 2,
        loop: true,
        margin: 30,
        autoplay: false,
        nav: true,
        smartSpeed: 1000,
        slideSpeed: 1000,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            991: {
                items: 3
            }
        }
    });

</script>

<script>
    $('.style2').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        autoWidth: false,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 2,
                margin: 20
            },
            400: {
                items: 2,
                margin: 20
            },
            500: {
                items: 3,
                margin: 20
            },
            768: {
                items: 4,
                margin: 20
            },
            992: {
                items: 5,
                margin: 20
            },
            1000: {
                items: 7,
                margin: 20
            }
        }
    });

</script>

<script>
    $(".dropdown-filter").on('click', function() {

        $(".explore__form-checkbox-list").toggleClass("filter-block");

    });

</script>

<!-- MAIN JS -->
<script src="{{asset('/front/js/script.js')}}"></script>

</div>
<!-- Wrapper / End -->
