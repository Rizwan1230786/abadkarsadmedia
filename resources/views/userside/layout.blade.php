<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    @include('userside.layouts.head')
</head>

<body>
    <div id="content" class="content_1200" style="font-family:Arial,Verdana,Helvetica,sans-serif;line-height:140%;">
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
        @yield('main')
        @include('userside.layouts.footer')
        @include('userside.layouts.script')
        @include('front.layout.toaster')

    </div>
</body>

</html>
