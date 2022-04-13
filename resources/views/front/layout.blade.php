<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('front.layout.head')
</head>

<body class="inner-pages sin-1 agents hp-6 full hd-white ui-elements det ag-de">
    <div id="wrapper">

        {{-- @yield('header') --}}
    @include('front.layout.header')
    <div class="clearfix"></div>

    @yield('main')

    @include('front.layout.footer')
    @include('front.layout.scripitis')
    </div>

</body>

</html>
