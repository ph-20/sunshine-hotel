<div class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bars"></i>&nbsp; Room<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('rooms.index') }}" class="fa fa-list">&nbsp; All Room</a>
                    </li>
                    <li>
                        <a href="{{ route('rooms.create') }}" class="fa fa-plus-square">&nbsp; Add Room</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bars"></i>&nbsp; Room Type<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('roomtypes.index') }}" class="fa fa-list">&nbsp; All Room Type</a>
                    </li>
                    <li>
                        <a href="{{ route('roomtypes.create') }}" class="fa fa-plus-square">&nbsp; Add Room Type</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bars"></i>&nbsp; Service<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('services.index') }}" class="fa fa-list">&nbsp; All Service</a>
                    </li>
                    <li>
                        <a href="{{ route('services.create') }}" class="fa fa-plus-square">&nbsp; Add Service</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bars"></i>&nbsp; Manager Booking<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('bookings.index') }}" class="fa fa-list">&nbsp; Booking
                            Room</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</div>