<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Lotus Hotel</title>
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="Lotus/images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet'
          type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="Lotus/css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Lotus/css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="Lotus/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Lotus/css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="Lotus/css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="Lotus/css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="Lotus/css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="Lotus/css/lib/bootstrap-select.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="Lotus/css/style.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]>
<body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10"> <![endif]-->
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
    <header id="header">

        <!-- HEADER TOP -->
        <div class="header_top">
            <div class="container">
                <div class="header_left float-left">
                    <span><i class="lotus-icon-location"></i> 92 Quang Trung, TP. Đà Nẵng</span>
                    <span><i class="lotus-icon-phone"></i> 1-548-854-8898</span>
                </div>
                <div class="header_right float-right">

                        <span class="login-register">
                            <a href="login.html">Login</a>
                            <a href="register.html">register</a>
                        </span>
                </div>
            </div>
        </div>
        <!-- END / HEADER TOP -->

        <!-- HEADER LOGO & MENU -->
        <div class="header_content" id="header_content">

            <div class="container">
                <!-- HEADER LOGO -->
                <div class="header_logo">
                    <a href="#"><img src="Lotus/images/logo-header.png" alt=""></a>
                </div>
                <!-- END / HEADER LOGO -->

                <!-- HEADER MENU -->
                <nav class="header_menu">
                    <ul class="menu">
                        <li><a href="about.html">Home</a></li>
                        <li>
                            <a href="#">Room <span class="fa fa-caret-down"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{route('seachroom.seachroomfor2people')}}">Room For 2 People</a></li>
                                <li><a href="{{route('seachroom.seachroomfor4people')}}">Room For 4 People</a></li>
                                <li><a href="{{route('seachroom.seachroomfor6people')}}">Room For 6 People</a></li>
                                <li><a href="{{route('seachroom.detailallroom')}}">Room Detail ALL</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Gallery <span class="fa fa-caret-down"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{route('seachroom.seachroomtypevip')}}">Gallery Style Vip</a></li>
                                <li><a href="{{route('seachroom.seachroomtypedeluxe')}}">Gallery Style Deluxe</a></li>
                                <li><a href="{{route('seachroom.seachroomtypefamily')}}">Gallery Style Family</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- END / HEADER MENU -->

                <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                <!-- END / MENU BAR -->

            </div>
        </div>
        <!-- END / HEADER LOGO & MENU -->

    </header>
    <!-- END / HEADER -->
    <!-- BANNER SLIDER -->
@include('hotel.layouts.bannerslider')
<!-- END / BANNER SLIDER -->
    <!-- CHECK AVAILABILITY -->
    @include('hotel.layouts.checkavailability')
    <div id="page-wrapper">
        <section class="content-header">
            @yield('content')
        </section>
    </div>
    <!-- END / CHECK AVAILABILITY -->
    <!-- FOOTER -->
    <footer id="footer">

        <!-- FOOTER TOP -->
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <!-- WIDGET SOCIAL -->
                    <div class="col-lg-3">
                        <div class="social">
                            <div class="social-content">
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET SOCIAL -->
                </div>
            </div>
        </div>
        <!-- END / FOOTER TOP -->

        <!-- FOOTER CENTER -->
        <div class="footer_center">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-lg-5">
                        <div class="widget widget_logo">
                            <div class="widget-logo">
                                <div class="img">
                                    <a href="#"><img src="Lotus/images/logo-footer.png" alt=""></a>
                                </div>
                                <div class="text">
                                    <p><i class="lotus-icon-location"></i> 92 Quang Trung, TP. Đà Nẵng</p>
                                    <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                    <p><i class="fa fa-envelope-o"></i> <a
                                                href="mailto:hello@thelotushotel.com">hello@thelotushotel.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END / FOOTER CENTER -->

        <!-- FOOTER BOTTOM -->
        <div class="footer_bottom">
            <div class="container">
                <p>&copy; 2017 Lotus Hotel All rights reserved.</p>
            </div>
        </div>
        <!-- END / FOOTER BOTTOM -->

    </footer>
    <!-- END / FOOTER -->

</div>
<!-- END / PAGE WRAP -->


<!-- LOAD JQUERY -->
<script type="text/javascript" src="Lotus/js/lib/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="Lotus/js/lib/jquery-ui.min.js"></script>
<script type="text/javascript" src="Lotus/js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="Lotus/js/lib/bootstrap-select.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
<script type="text/javascript" src="Lotus/js/lib/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="Lotus/js/lib/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="Lotus/js/lib/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="Lotus/js/lib/owl.carousel.js"></script>
<script type="text/javascript" src="Lotus/js/lib/jquery.appear.min.js"></script>
<script type="text/javascript" src="Lotus/js/lib/jquery.countTo.js"></script>
<script type="text/javascript" src="Lotus/js/lib/jquery.countdown.min.js"></script>
<script type="text/javascript" src="Lotus/js/lib/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="Lotus/js/lib/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="Lotus/js/lib/SmoothScroll.js"></script>
<!-- validate -->
<script type="text/javascript" src="Lotus/js/lib/jquery.form.min.js"></script>
<script type="text/javascript" src="Lotus/js/lib/jquery.validate.min.js"></script>
<!-- Custom jQuery -->
<script type="text/javascript" src="Lotus/js/scripts.js"></script>
</body>
</html>