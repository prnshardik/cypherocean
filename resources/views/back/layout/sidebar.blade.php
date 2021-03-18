<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{ url('back/uploads/users').'/'.auth()->user()->image }}" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</div><small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <a href="{{ route('admin.home') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
                <a class="{{ Request::is('admin/users*') ? 'active' : '' }}" href="{{ route('admin.users') }}"><i class="sidebar-item-icon fa fa-users"></i>
                    <span class="nav-label">Users</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/notification*') ? 'active' : '' }}">
                <a class="{{ Request::is('admin/notification*') ? 'active' : '' }}" href="{{ route('admin.notification') }}"><i class="sidebar-item-icon fa fa-bell"></i>
                    <span class="nav-label">Notification</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/review*') ? 'active' : '' }}">
                <a class="{{ Request::is('admin/review*') ? 'active' : '' }}" href="{{ route('admin.review') }}"><i class="sidebar-item-icon fa fa-star"></i>
                    <span class="nav-label">Review</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/portfolio*') ? 'active' : '' }}">
                <a class="{{ Request::is('admin/portfolio*') ? 'active' : '' }}" href="{{ route('admin.portfolio') }}"><i class="sidebar-item-icon fa fa-briefcase"></i>
                    <span class="nav-label">Portfolio</span>
                </a>
            </li>
        </ul>
    </div>
</nav>