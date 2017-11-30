<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('Lotus/images/favicon.png') }}"/>
    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700">
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Lotus/css/lib/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Lotus/css/lib/font-lotusicon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Lotus/css/lib/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Lotus/css/lib/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Lotus/css/lib/jquery-ui.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Lotus/css/lib/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Lotus/css/lib/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Lotus/css/lib/bootstrap-select.min.css') }}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Lotus/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<body> <!--<![endif]-->


<!-- PRELOADER -->
<div id="preloader">
    <span class="preloader-dot"></span>
</div>
<!-- END / PRELOADER -->

<!-- PAGE WRAP -->
<div id="page-wrap">

    <!-- HEADER -->
    @include('hotel.layouts.header')
    <!-- END / HEADER -->

    <!-- SUB BANNER -->
    @yield('subBanner')
    <!-- END / SUB BANNER -->

    @yield('content')
    <!-- FOOTER -->
    @include('hotel.layouts.footer')
    <!-- END / FOOTER -->

</div>
<!-- END / PAGE WRAP -->


<!-- LOAD JQUERY -->
<script type="text/javascript" src="{{ asset('Lotus/js/lib/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/bootstrap-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/jquery.appear.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/jquery.countTo.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/jquery.parallax-1.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/lib/SmoothScroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('Lotus/js/scripts.js') }}"></script>
</body>
</html>