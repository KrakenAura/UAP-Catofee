<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="/dashboard/cats" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-cat"></i>
                        <p>Cats</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/customers" class="nav-link">
                        <i class="nav-icon far fas fa-users"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/orders" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Orders</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>