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
        <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
                {{-- active class --}}
                <i class="nav-icon fas fa-home"></i>
                <p>
                Dashboard
                </p>
            </a>
        </li>
        @if (Auth::user()->is_admin) 
            <li class="nav-item">
                <a href="{{route('admin.kendaraan.lihat')}}" class="nav-link">
                    {{-- active class --}}
                    <i class="nav-icon fas fa-car-alt"></i>
                    <p>
                    Kendaraan
                    </p>
                </a>
            </li>
        @else
            <li class="nav-item">
                <a href="#" class="nav-link">
                    {{-- active class --}}
                    <i class="nav-icon fas fa-monument"></i>
                    <p>
                    Penitipan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    {{-- active class --}}
                    <i class="nav-icon fas fa-key"></i>
                    <p>
                    Penyewaan
                    </p>
                </a>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link">
                {{-- active class --}}
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p onclick="event.preventDefault(); document.getElementById('logout-form').submit()" style="cursor: pointer">Signout</p>
                <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </a>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>