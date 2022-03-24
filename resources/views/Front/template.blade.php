<!DOCTYPE html>
<html lang="en">
    <head>
        <!--required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--twitter og-->
        <meta name="twitter:site" content="@themetags">
        <meta name="twitter:creator" content="@themetags">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
        <meta name="twitter:description" content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
        <meta name="twitter:image" content="#">
        <!--facebook og-->
        <meta property="og:url" content="#">
        <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
        <meta property="og:description" content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
        <meta property="og:image" content="#">
        <meta property="og:image:secure_url" content="#">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="600">
        <!--meta-->
        <meta name="description" content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
        <meta name="author" content="ThemeTags">
        <!--favicons-->
        <link rel="icon" type="image/png" href="{{asset('Front')}}/images/fav2.png" class="img-fluid">
        <!--title-->
        <title>Covid-19</title>
        @include('Front.Layouts.css')
    </head>
    <body>
        <div class="main-wrapper">
            @include('Front.Layouts.mobilemenu')
            @include('Front.Layouts.header')
            @yield('content')
            @include('Front.Layouts.footer')
            @include('Front.Layouts.scripts')
            @include('admin.layouts.templateJquery')
        </div>
</body>
</html>
