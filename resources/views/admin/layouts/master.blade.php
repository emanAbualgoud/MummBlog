<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}" dir="ltr">
<!--<![endif]-->
<!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | @yield('title')</title>
        <meta name="X-CSRF-TOKEN" content="{{ csrf_token() }}">
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
        <link rel="stylesheet" href="{{ URL::asset('public/admin/css/style.css') }}">

        <link rel="shortcut icon" href="{{ URL::asset('public/web/images/favicon.ico') }}" />

        @yield('styles')

        {!! Charts::assets() !!}
    </head>

    <body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
    <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">

            @include('admin.layouts.header')

            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                <!-- BEGIN: Left Aside -->
                <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                    <i class="la la-close"></i>
                </button>
                <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

                    @include('admin.layouts.sidebar')
                </div>

                <div class="m-grid__item m-grid__item--fluid m-wrapper">

                    @yield('content')
                </div>
            </div>

            <footer class="m-grid__item m-footer ">
                <div class="m-container m-container--fluid m-container--full-height m-page__container">
                    <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                        <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
                                Copyright ©{{ date('Y') }} All rights reserved
								<a href="https://www.getmumm.com" class="m-link">
									Mumm
								</a>
							</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <div id="m_scroll_top" class="m-scroll-top">
            <i class="la la-arrow-up"></i>
        </div>

        <script src="{{ URL::asset('public/admin/js/vendors.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/admin/js/scripts.bundle.js') }}" type="text/javascript"></script>

        @yield('scripts')

    </body>
</html>