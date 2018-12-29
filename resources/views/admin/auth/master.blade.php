<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | @yield('title')</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <link rel="stylesheet" href="{{ URL::asset('public/admin/css/vendors.bundle.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('public/admin/css/style.bundle.css') }}">

        <link rel="shortcut icon" href="{{ URL::asset('public/web/images/favicon.ico') }}" />
    </head>

    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url('{{ URL::asset('public/admin/img/bg-3.jpg') }}');">
                <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">

                    @yield('content')
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!--begin::Base Scripts -->
        <script src="{{ URL::asset('public/admin/js/vendors.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/admin/js/scripts.bundle.js') }}" type="text/javascript"></script>
        <!--end::Base Scripts -->
        <!--begin::Page Snippets -->
        <script src="{{ URL::asset('public/admin/js/login.js') }}" type="text/javascript"></script>
        <!--end::Page Snippets -->
    </body>
</html>


