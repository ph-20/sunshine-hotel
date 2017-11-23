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
                        <a href="admin/room/show" class="fa fa-list">&nbsp; All Room</a>
                    </li>
                    <li>
                        <a href="admin/room/create" class="fa fa-plus-square">&nbsp; Add Room</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bars"></i>&nbsp; Room Type<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/roomtype/show" class="fa fa-list">&nbsp; All Room Type</a>
                    </li>
                    <li>
                        <a href="admin/roomtype/create" class="fa fa-plus-square">&nbsp; Add Room Type</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('users.index')}}"><i class="fa fa-address-book-o"></i>&nbsp; Users</a>
            </li>
            <li>
                <a href="{{route('promotions.index')}}"><i class="fa fa-money"></i>&nbsp; Promotions</a>
            </li>
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</div>