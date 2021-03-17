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
            <li>
                <a class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}" href="{{ route('admin.home') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>

            <li>
                <a class="{{ Request::is('admin/users*') ? 'active' : '' }}" href="{{ route('admin.users') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Users</span>
                </a>
            </li>

            <li>
                <a class="{{ Request::is('admin/notification*') ? 'active' : '' }}" href="{{ route('admin.notification') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Notification</span>
                </a>
            </li>
        </ul>
    </div>
</nav>