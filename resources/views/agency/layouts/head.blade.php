      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <!-- Title -->
      <title>Abadkar Agency Portal</title>

      <!--Favicon -->
      <!-- <link rel="icon" href="{{ URL::asset('assets/images/brand/fav2.png') }}" type="image/x-icon"/> -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
      <!--Bootstrap css -->
      <script src="{{ URL::asset('assets/js/jquery-3.5.1.min.js') }}"></script>
      <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
      <!-- Style css -->
      <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" />
      <link href="{{ URL::asset('assets/css/dark.css') }}" rel="stylesheet" />
      <link href="{{ URL::asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

      <!-- Animate css -->
      <link href="{{ URL::asset('assets/css/animated.css') }}" rel="stylesheet" />

      <!--Sidemenu css -->
      <link href="{{ URL::asset('assets/css/sidemenu.css') }}" rel="stylesheet">

      <!-- P-scroll bar css-->
      <link href="{{ URL::asset('assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

      <!---Icons css-->
      <link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet" />

      @yield('css')

      <!-- Simplebar css -->
      <link rel="stylesheet" href="{{ URL::asset('assets/plugins/simplebar/css/simplebar.css') }}">
      <!-- sweetalerts -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
      <!-- Color Skin css -->
      <link id="theme" href="{{ URL::asset('assets/colors/color1.css') }}" rel="stylesheet" type="text/css" />
      <!-- toastr css -->
      <link href="{{ URL::asset('assets/css/toastr.min.css') }}" rel="stylesheet" />

      <!-- Jquery js-->
      <script src="{{ URL::asset('assets/js/toastr.min.js') }}"></script>

      <style>
          /* endenimation */
          .m-badge--danger {
              background: #705ec8;
              color: white;
              border-color: #705ec8;
              border-radius: 3px;
              padding: 4px
          }

          .m-badge--success {
              background: #38cb89;
              color: white;
              border-radius: 3px;
              padding: 4px
          }

          /* Main content */
          /* Add an active class to the active dropdown button */


          /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
          .dropdown-container {
              display: none;
              font-size: 14px;
              font-weight: 400;
              opacity: 1;
              padding-left: 8px;
          }

          /* Optional: Style the caret down icon */
          .fa-caret-down {
              float: right;
              padding-right: 8px;
          }

          .custom {
              font-size: 17px !important;
              padding: 3px !important;
          }

          .padding {
              padding: 0px;
          }

          .seting {
              position: relative;
              top: 2px
          }

          .meta-boxes {
              margin-top: 20px;
          }

          .widget {
              background: #fff;
              clear: both;
              margin-bottom: 20px;
          }

          .meta-boxes .widget-title {
              background: none;
              border-bottom: 1px solid #eee;
              cursor: move;
              height: 35px;
              overflow: hidden;
              padding: 0 5px;
          }

          .widget-title>h4 .control-label {
              padding-left: 10px;
          }

          .meta-boxes .widget-body {
              min-height: 0;
          }

          .divscrole {
              Overflow-y: scroll;
              height: 250px;
              width: 200px;
          }
      </style>
