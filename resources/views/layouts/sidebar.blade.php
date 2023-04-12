<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 100vh;overflow: hidden">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://avatars.githubusercontent.com/u/90756740?v=4" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">MaulaCar</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2"
            style="height: 70vh;  justify-content: space-between; display: flex; flex-direction: column">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false" style="justify-content: space-between">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item" style="margin-top: auto">
                    <a href="/home" class="nav-link {{ $title == 'home' ? 'active' : '' }}"">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item" style="margin-top: auto">
                    <a href="/mobil" class="nav-link {{ $title == 'mobil' ? 'active' : '' }}"">
                        <i class="nav-icon fas fa-car-side"></i>
                        <p>
                            Mobil
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item" >
                    <a href="/motor" class="nav-link {{ $title == 'motor' ? 'active' : '' }}"">
                        <i class="nav-icon fas fa-motorcycle"></i>
                        <p>
                            Motor
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column mb-3" data-widget="treeview" role="menu"
                data-accordion="false" style="justify-content: space-between">
                <li class="nav-item">
                    <a href="/logout" class="nav-link" style="color: white; background-color: #DC3545">
                        <i class="nav-icon 	fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
