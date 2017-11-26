<header id="header" class="header-v2">

    <!-- HEADER TOP -->
    <div class="header_top">
        <div class="container">
            <div class="header_left float-left">
                <span><i class="lotus-icon-location"></i> 92 Quang Trung, TP Đà Nẵng</span>
            </div>
            <div class="header_right float-right">
                <span class="login-register">
                <!-- Authentication Links -->
                @guest
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">register</a>
                @else
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
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
                <a href="#"><img src="{{ asset('Lotus/images/logo-header.png') }}" alt=""></a>
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