<aside class="main-sidebar elevation-4 sidebar-light-olive">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link navbar-light">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('static/logo.jpg') }}" class="img-circle elevation-2"
                    alt="{{ config('app.name') }}">
            </div>
            <div class="info">
                MENU
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @foreach (config('custom.menu') as $menu)
                    <li class="nav-item has-treeviewn">
                        <a href="javascript:void(0)" class="nav-link">
                            <i class="nav-icon fa {{ $menu['icon'] }}"></i>
                            <p>
                                {{ $menu['name'] }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if (!in_array($menu['name'], config('custom.add-exclude')))
                                <li class="nav-item">
                                    <a href="{{ route('admin.' . $menu['slug'] . '.create') }}" class="nav-link">
                                        <i class="fas fa-plus nav-icon"></i>
                                        <p>Add</p>
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a href="{{ route('admin.' . $menu['slug'] . '.index') }}" class="nav-link">
                                    <i class="fas fa-table nav-icon"></i>
                                    <p>List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
