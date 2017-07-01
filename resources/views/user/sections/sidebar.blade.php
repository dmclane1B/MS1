@section('left-sidebar')
<nav id="main-side-menu" class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header text-center">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="/danny/public/assets/images/users/avatar-1.jpg" width="48px" height="auto" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">John Smith</strong> &nbsp;<b class="caret"></b>
                    <ul class="dropdown-menu animated m-t-xs">
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
            </li>
            <li class="active">
                <a href="db_user-index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="#">My Property</a></li>
                    <li><a href="#">Add Property</a></li>
                </ul>
            </li>
            <li>
                <a href="db_user-index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Account</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="/logout">Sign Out</a></li>
                </ul>
            </li>
            <li>
                <a href="db_user-index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Support</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Call Us</a></li>
                    <li><a href="#">Send A Message</a></li>
                    <li><a href="#">Live Chat</a></li>
                    <li><a href="#">Support Center</a></li>						
                </ul>
            </li>
        </ul>
    </div>
</nav>
@endsection