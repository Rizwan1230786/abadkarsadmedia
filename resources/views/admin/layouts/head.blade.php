      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<!-- Title -->
		<title>Abadkar Admin Panel</title>

		<!--Favicon -->
		<!-- <link rel="icon" href="{{URL::asset('assets/images/brand/fav2.png')}}" type="image/x-icon"/> -->

		<!--Bootstrap css -->
		<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<!-- Style css -->
		<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/dark.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
		
		<!-- Animate css -->
		<link href="{{URL::asset('assets/css/animated.css')}}" rel="stylesheet" />

		<!--Sidemenu css -->
       <link href="{{URL::asset('assets/css/sidemenu.css')}}" rel="stylesheet">

		<!-- P-scroll bar css-->
		<link href="{{URL::asset('assets/plugins/p-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

		<!---Icons css-->
		<link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" />

		@yield('css')

		<!-- Simplebar css -->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/simplebar/css/simplebar.css')}}">
		<!-- sweetalerts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
	    <!-- Color Skin css -->
		<link id="theme" href="{{URL::asset('assets/colors/color1.css')}}" rel="stylesheet" type="text/css"/>
        <!-- toastr css -->
        <link href="{{URL::asset('assets/css/toastr.min.css')}}" rel="stylesheet" />
        <!-- Jquery js-->
		<script src="{{URL::asset('assets/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/toastr.min.js')}}"></script>

<style>
.logo{
    font-size: 1.9rem;
    color:var(--dark-blue);
}

.logo span{
    color:var(--blue);
}
.bounce {
    animation-name: spin;
    animation-duration: 10000ms;
    animation-iteration-count: infinite;
    animation-timing-function: linear; 
}

@keyframes spin {
    from {
        transform:rotate(0deg);
    }
    to {
        transform:rotate(360deg);
    }
}
/* endenimation */
.m-badge--danger{
	background:red;
	color:white;
	border-radius: 3px;
	padding: 4px
}
.m-badge--success{
	background:#38cb89;
	color:white;
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
</style>