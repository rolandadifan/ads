<aside class="sbg main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ADS</span>
    </a>

    <!-- Sidebar -->
    <div class="sbg sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin.index')}}" class="d-block font-weight-bold">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Ads
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('pending.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pending Ads</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('active.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Ads</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('ads.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ads List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('adminlist.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('about.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('message.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Message
                        </p>
                    </a>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="{{route('setting.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="nav-icon fas fa-sign-out-alt"></i>
                        Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>