<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Admin Panel" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin panel ui"/>
		<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

        @include('agency.layouts.head')
	</head>

	<body class="app sidebar-mini">
		<!---Global-loader-->
		<!-- <div id="global-loader" >
			<img src="{{URL::asset('assets/images/svgs/loader.svg')}}" alt="loader">
		</div> -->
		<!--- End Global-loader-->
		<!-- Page -->
		<div class="page">
			<div class="page-main">
				@include('agency.layouts.aside-menu')
				<!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">
						@include('agency.layouts.header')
						@yield('page-header')
						@yield('content')
						@include('agency.layouts.footer')
		</div><!-- End Page -->
			@include('agency.layouts.footer-scripts')
            @include('agency.layouts.templateJquery')
	</body>
</html>
