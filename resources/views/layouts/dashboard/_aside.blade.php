<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href=""><i
                        class="zmdi zmdi-home m-r-5"></i>Films</a></li>
        <li class="nav-item"><a class="nav-link active" href="{{route('dashboard.admins.edit', auth()->guard('admin')->user())}}"><i class="zmdi zmdi-account-box m-r-5"></i>Profile</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href=""><img
                                            src="{{auth()->guard('admin')->user()->avatar}}"
                                            alt="User"></a></div>
                            <div class="detail">
                                <h4>{{auth()->guard('admin')->user()->name}}</h4>
                                <small>Neurologist</small>
                            </div>
                        </div>
                    </li>
                    <li class="header">MAIN</li>
                    <li class="active open">
                        <a href="{{route('dashboard.home')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account"></i><span>Admins</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('dashboard.admins.index')}}">All Admins</a></li>
                            <li><a href="{{route('dashboard.admins.create')}}">Add Admins</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-circle"></i><span>Clients</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('dashboard.clients.index')}}">All Clients</a></li>
                            <li><a href="{{route('dashboard.clients.create')}}">Add Clients</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>