<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    @include('front.layout.head')
</head>

<body>
    @yield('body')
    <div id="wrapper">
        @include('front.layout.header')
        @yield('main')
        @include('front.layout.footer')
        @include('front.layout.scripitis')
        @include('front.layout.regestertheamjequery')
        @include('front.layout.toaster')
    </div>
</body>

</html>
