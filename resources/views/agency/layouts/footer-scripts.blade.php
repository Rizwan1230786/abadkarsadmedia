  <!-- Back to top -->
  <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

  <!-- Bootstrap4 js-->
  <script src="{{ URL::asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

  <!--Othercharts js-->
  <script src="{{ URL::asset('assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

  <!-- Circle-progress js-->
  <script src="{{ URL::asset('assets/js/circle-progress.min.js') }}"></script>

  <!-- Jquery-rating js-->
  <script src="{{ URL::asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

  <!--Sidemenu js-->
  <script src="{{ URL::asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

  <!-- P-scroll js-->
  <script src="{{ URL::asset('assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/p-scrollbar/p-scroll.js') }}"></script>

  @yield('js')
  <!-- Simplebar JS -->
  <script src="{{ URL::asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <!-- Custom js-->
  <script src="{{ URL::asset('assets/js/custom.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': "{{ csrf_token() }}"
          }
      });

      //////status update of category////////
      $(document).on("click", ".agency_property_publish", function(event) {
          event.preventDefault();
          var id = $(this).attr('rel');
          var status = $(this).attr('status');
          $.ajax({
              type: 'POST',
              url: "{{ url('agency/update_property_status') }}",
              data: {
                  'id': id,
                  'status': status
              },
              async: false,
              success: function(result) {
                  var message = (_.hasIn(result, "message") ? result.message : "");
                  var type = (_.hasIn(result, "type") ? result.type : 'success');
                  if (_.isEqual(type, 'success')) {
                      toastr['success'](message, {
                          showMethod: 'slideDown',
                          hideMethod: 'slideUp',
                          timeOut: 2000
                      });
                      location.reload();
                  }
              }
          });
      });
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
  <!-- end -->
