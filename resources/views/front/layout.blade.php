<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('front.layout.head')
</head>

<body>
    @yield('body')
    <div id="wrapper">


    @include('front.layout.header')
    <div class="clearfix"></div>

    @yield('main')

    @include('front.layout.footer')
    @include('front.layout.scripitis')
    </div>

</body>

</html>
