<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="{{route('dashboard')}}" class="brand-link">
    <span class="brand-text font-weight-light d-flex justify-content-center">RENTCAR.ID</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
    <div class="image">
        <img src="https://ui-avatars.com/api/?name=User" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="#" class="nav-link">
            {{-- active class --}}
            <i class="nav-icon fas fa-home"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>
        <li class="nav-header">Database Test</li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
            Mailbox
            <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="pages/mailbox/mailbox.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inbox</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pages/mailbox/compose.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Compose</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="pages/mailbox/read-mail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Read</p>
            </a>
            </li>
        </ul>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            {{-- active class --}}
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
            Sign Out
            </p>
        </a>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>