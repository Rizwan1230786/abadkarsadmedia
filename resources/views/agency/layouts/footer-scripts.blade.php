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
      $(document).on("click", ".action_publish", function(event) {
          event.preventDefault();
          var id = $(this).attr('rel');
          var status = $(this).attr('status');
          $.ajax({
              type: 'POST',
              url: "{{ url('admin/update_status_user') }}",
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
      ///////facilities status/////
      $(document).on("click", ".publish", function(event) {
          event.preventDefault();
          var id = $(this).attr('rel');
          var status = $(this).attr('status');
          $.ajax({
              type: 'POST',
              url: "{{ url('admin/update_status_facilities') }}",
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
      ////////status code subpackages///////////////
      $(document).on("click", ".subpakgespublish", function(event) {
          event.preventDefault();
          var id = $(this).attr('rel');
          var status = $(this).attr('status');
          $.ajax({
              type: 'POST',
              url: "{{ url('admin/update_status_subpakges') }}",
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
      /////////realestate category status code////////
      $(document).on("click", ".category_publish", function(event) {
          event.preventDefault();
          var id = $(this).attr('rel');
          var status = $(this).attr('status');
          $.ajax({
              type: 'POST',
              url: "{{ url('admin/update_status_category') }}",
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

      //////status update of category////////
      $(document).on("click", ".property_publish", function(event) {
          event.preventDefault();
          var id = $(this).attr('rel');
          var status = $(this).attr('status');
          $.ajax({
              type: 'POST',
              url: "{{ url('admin/update_property_status') }}",
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
      /////customerstatus/////////
      $(document).on("click", ".customer_publish", function(event) {
          event.preventDefault();
          var id = $(this).attr('rel');
          var status = $(this).attr('status');
          $.ajax({
              type: 'POST',
              url: "{{ url('admin/update_status_customer') }}",
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
      ////////////////////////realstate sub-category status code /////////
      $(document).on("click", ".subcategory_publish", function(event) {
          event.preventDefault();
          var id = $(this).attr('rel');
          var status = $(this).attr('status');
          $.ajax({
              type: 'POST',
              url: "{{ url('admin/update_status_subcategory') }}",
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
      ///////webpages status////////
      $(document).on("click", ".webpages_publish", function(event) {
          event.preventDefault();
          var id = $(this).attr('rel');
          var status = $(this).attr('status');
          $.ajax({
              type: 'POST',
              url: "{{ url('admin/update-status_webpages') }}",
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
      ///end webpages/////
      $(document).on('click', '.delete_user', function(e) {
          e.preventDefault();
          var id = $(this).data('id');
          swal({
                  title: "Are you sure!",
                  text: "You will not be able to recover this User Data!",
                  type: "error",
                  confirmButtonClass: "btn-danger",
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes!",
                  showCancelButton: true,
              },
              function() {
                  $.ajax({
                      type: "POST",
                      url: "{{ url('admin/delete_user') }}/" + id,
                      data: {
                          id: id
                      },
                      success: function(result) {
                          if (result.status === true) {
                              swal("Deleted!", "User has been deleted.", "success");
                              location.reload();
                          } else {
                              swal({
                                  title: "Ops...",
                                  text: "SuperAdmin cannot be removed",
                                  type: "error",
                                  confirmButtonText: "Ok!",

                              });
                          }
                      }
                  });
              });
      });
      ////customer user delete code//////
      $(document).on('click', '.delete_customeruser', function(e) {
          e.preventDefault();
          var id = $(this).data('id');
          swal({
                  title: "Are you sure!",
                  text: "You will not be able to recover this User Data!",
                  type: "error",
                  confirmButtonClass: "btn-danger",
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes!",
                  showCancelButton: true,
              },
              function() {
                  $.ajax({
                      type: "POST",
                      url: "{{ url('admin/delete_customeruser') }}/" + id,
                      data: {
                          id: id
                      },
                      success: function(result) {
                          swal("Deleted!", "User has been deleted.", "success");
                          location.reload();
                      }
                  });
              });
      });
  </script>

  <!--detail modal ajax in inquary table -->
  <script type="text/javascript">
      $(function() {

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $(document).on("click", ".view_details", function(event) {
              event.preventDefault();
              var id = $(this).data('id');
              $.ajax({
                  type: 'POST',
                  url: "{{ url('admin/detail') }}",
                  data: {
                      'id': id
                  },
                  async: false,
                  success: function(data) {
                      $('#modaldetail').modal('show');
                      $("#modaldetail .modal-body").html(data);
                  }
              });
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
