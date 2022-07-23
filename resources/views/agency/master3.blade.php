<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Admin Panel" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin panel ui"/>
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

		@include('agency.layouts.custom-head')
	</head>
	<body class="h-100vh page-style1">
		@yield('content')
		@include('agency.layouts.custom-footer-scripts')
        @include('agency.layouts.templateJquery')
	</body>
</html>
