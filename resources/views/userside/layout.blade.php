<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Welcom To UserPanel</title>
    @include('userside.layouts.head')
</head>

<body>
    <div id="content" class="" style="font-family:Arial,Verdana,Helvetica,sans-serif;line-height:140%;">
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');

            .cart_row {
                margin-top: 2px;
                line-height: 18px;
                overflow: hidden;
                padding: 2px 0;
                float: left;
                width: 100%;
                clear: both;
            }


            .cart_row_child {
                float: left;
                padding-left: 5px;
            }

        </style>
        @include('userside.layouts.navbar')
        @include('userside.layouts.sidebar')
        @yield('main')
        @include('userside.layouts.footer')
        @include('userside.layouts.script')
    </div>
</body>

</html>
