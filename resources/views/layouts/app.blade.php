<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="tm-gray-bg">
<!-- Header -->
@include('layouts.header')

<!-- Banner -->
@yield('banner')

<!-- gray bg -->
<section class="container tm-home-section-1" id="more">
    <div class="row">
        @yield('content')
    </div>
</section>

<!-- Footer -->
@include('layouts.footer')
<!-- jQuery -->
<script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<!-- moment.js -->
<script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>
<!-- bootstrap js -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/templatemo-script.js') }}"></script>
<!-- Templatemo Script -->
<script>
    // HTML document is loaded. DOM is ready.
    $(function() {

        $('#hotelCarTabs a').click(function (e) {
            e.preventDefault();
            $(this).tab('show')
        });

        $('.date').datetimepicker({
            format: 'MM/DD/YYYY'
        });
        $('.date-time').datetimepicker();

        // https://css-tricks.com/snippets/jquery/smooth-scrolling/
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    // Load Flexslider when everything is loaded.
    $(window).load(function() {
        //	For images only
        $('.flexslider').flexslider({
            controlNav: false
        });
    });
</script>
</body>
</html>