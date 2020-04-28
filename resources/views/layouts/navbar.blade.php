<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light layout-navbar-fixed navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-sm-inline-block ml-sm-5">
            <div class="input-group input-group-sm mt-1">
                <select class="input-group-prepend bg-dark border-secondary text-center">
                    <option>Products</option>
                    <option>Brands</option>
                    <option>Supplier</option>
                    <option>Offices</option>
                    <option>Team</option>
                </select>

                <!-- /btn-group -->
                <input type="text" class="form-control form-control-navbar">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">Account</span>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button href="#" class="dropdown-item" type="submit">
                        <i class="fas fa-power-off mr-2"></i> Disconnect
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
