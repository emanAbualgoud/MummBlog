<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>

        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Mumm Blog</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{ URL::asset('public/web/css/base.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('public/web/css/vendor.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('public/web/css/main.css') }}">

        <!-- script
        ================================================== -->
        <script src="{{ URL::asset('public/web/js/modernizr.js') }}"></script>

        <!-- favicons
        ================================================== -->
        <link rel="shortcut icon" href="{{ URL::asset('public/web/images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ URL::asset('public/web/images/favicon.ico') }}" type="image/x-icon">

        @yield('styles')
    </head>
    <body id="top">
        <!-- preloader
        ================================================== -->
        <div id="preloader">
            <div id="loader" class="dots-fade">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        @include('web.layouts.header')

        @yield('content')

        @include('web.layouts.footer')

        <script src="{{ URL::asset('public/web/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ URL::asset('public/web/js/plugins.js') }}"></script>
        <script src="{{ URL::asset('public/web/js/main.js') }}"></script>

        @yield('scripts')
    </body>
</html>