<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('userside.layouts.head')

    @include('front.layout.head')
</head>

<body>
    @yield('body')
    <div id="wrapper">
        @include('userside.layouts.navbar2')
        @yield('main')
        @include('userside.layouts.footer')
        @include('front.layout.scripitis')
        @include('front.layout.regestertheamjequery')
        @include('front.layout.toaster')
    </div>
</body>

</html>
