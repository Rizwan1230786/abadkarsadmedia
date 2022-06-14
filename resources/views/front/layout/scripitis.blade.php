  <!--register form -->

  <!--register form end -->



  <!-- ARCHIVES JS -->

  <script src="{{ asset('/front/js/rangeSlider.js') }}"></script>
  <script src="{{ asset('/front/js/tether.min.js') }}"></script>
  <script src="{{ asset('/front/js/moment.js') }}"></script>
  <script src="{{ asset('/front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/front/js/mmenu.min.js') }}"></script>
  <script src="{{ asset('/front/js/mmenu.js') }}"></script>
  <script src="{{ asset('/front/js/aos.js') }}"></script>
  <script src="{{ asset('/front/js/aos2.js') }}"></script>
  <script src="{{ asset('/front/js/animate.js') }}"></script>
  <script src="{{ asset('/front/js/slick.min.js') }}"></script>
  <script src="{{ asset('/front/js/fitvids.js') }}"></script>
  <script src="{{ asset('/front/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('/front/js/typed.min.js') }}"></script>
  <script src="{{ asset('/front/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('/front/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('/front/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/front/js/smooth-scroll.min.js') }}"></script>
  <script src="{{ asset('/front/js/lightcase.js') }}"></script>
  <script src="{{ asset('/front/js/search.js') }}"></script>
  <script src="{{ asset('/front/js/owl.carousel.js') }}"></script>
  <script src="{{ asset('/front/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('/front/js/ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('/front/js/newsletter.js') }}"></script>
  <script src="{{ asset('/front/js/jquery.form.js') }}"></script>
  <script src="{{ asset('/front/js/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('/front/js/searched.js') }}"></script>
  <script src="{{ asset('/front/js/forms-2.js') }}"></script>
  <script src="{{ asset('/front/js/map-style2.js') }}"></script>
  <script src="{{ asset('/front/js/range.js') }}"></script>
  <script src="{{ asset('/front/js/color-switcher.js') }}"></script>
  <script src="{{ asset('/front/js/popper.min.js') }}"></script>
  {{-- <script src="{{ asset('/front/js/slick4.js') }}"></script> --}}
  <script src="{{ asset('/front/js/light.js') }}"></script>
  <script src="{{ asset('/front/js/popup.js') }}"></script>
  <script src="{{ asset('/front/js/inner.js') }}"></script>
  @yield('js')
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script src="{{ asset('front') }}/js/popper.min.js"></script>
  <script src="{{ asset('front') }}/js/jquery-ui.js"></script>
  <script src="{{ asset('front') }}/js/swiper.min.js"></script>
  <script src="{{ asset('front') }}/js/swiper.js"></script>
  <script src="{{ asset('front') }}/js/slick2.js"></script>
  <script src="{{ asset('front') }}/js/fitvids.js"></script>
  <script src="{{ asset('front') }}/js/dashbord-mobile-menu.js"></script>
  <script src="{{ asset('front') }}/js/forms-2.js"></script>
  <script src="{{ asset('front') }}/js/dropzone.js"></script>



  <script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "Select",
            allowClear: true
        });

    });

</script>

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
    jQuery(document).ready(function($) {
"use strict";
$('#customers-testimonials').owlCarousel( {
		loop: true,
		center: true,
		items: 7,
		margin: 30,
		autoplay: true,
		dots:false,
    nav:true,
		autoplayTimeout: 5000,
		smartSpeed: 1000,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			1170: {
				items:7
			}
		}
	});
});
</script>
  <script>
      $(".dropdown-filter").on('click', function() {

          $(".explore__form-checkbox-list").toggleClass("filter-block");

      });
  </script>
 <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
 var i;

 for (i = 0; i < dropdown.length; i++) {
     dropdown[i].addEventListener("click", function() {
         this.classList.toggle("active");
         var dropdownContent = this.nextElementSibling;
         if (dropdownContent.style.display === "block") {
             dropdownContent.style.display = "none";
         } else {
             dropdownContent.style.display = "block";
         }
     });
 }
</script>
  <!-- MAIN JS -->
  <script src="{{ asset('/front/js/script.js') }}"></script>

  </div>
  <!-- Wrapper / End -->
