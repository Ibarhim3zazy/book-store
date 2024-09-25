<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper">
            <a href="{{ route('admin.dashboard.index') }}">
                <h6 class="f-14 text-white">Admin Dashboard</h6>
                <img class="d-none d-lg-block blur-up lazyloaded"
                    src="{{ asset('assets-dashboard') }}/images/dashboard/multikart-logo.png" alt="">
            </a>
        </div>
    </div>
    <div class="sidebar custom-scrollbar">
        <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                aria-hidden="true"></i></a>
        <div class="sidebar-user">
            <img class="img-60" src="{{ asset('assets-dashboard') }}/images/dashboard/user3.jpg" alt="#">
            <div>
                <h6 class="f-14">JOHN</h6>
                <p>general manager.</p>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a class="sidebar-header" href="{{ route('admin.dashboard.index') }}">
                    <i data-feather="home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="user-plus"></i>
                    <span>Admins</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.dashboard.admins.index') }}">
                            <i class="fa fa-circle"></i>Admin List
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.dashboard.admins.create') }}">
                            <i class="fa fa-circle"></i>Create Admin
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="user-plus"></i>
                    <span>Merchants</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.dashboard.merchants.index') }}">
                            <i class="fa fa-circle"></i>Merchant List
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.dashboard.merchants.create') }}">
                            <i class="fa fa-circle"></i>Create Merchant
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="user-plus"></i>
                    <span>Users</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.dashboard.users.index') }}">
                            <i class="fa fa-circle"></i>User List
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.dashboard.users.create') }}">
                            <i class="fa fa-circle"></i>Create User
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>Products</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="product-page.html">
                            <i class="fa fa-circle"></i>
                            <span>product-page</span>
                        </a>
                    </li>

                    <li>
                        <a href="product-review.html">
                            <i class="fa fa-circle"></i>
                            <span>product Review</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="settings"></i>
                    <span>settings</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.dashboard.roles.index') }}">
                            <i class="fa fa-circle"></i>Roles List
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.dashboard.roles.create') }}">
                            <i class="fa fa-circle"></i>Create New role
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="login.html">
                    <i data-feather="log-in"></i>
                    <span>Login</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->