<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">My Dashboard</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-2">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('image/me.jpg') }}" alt=""
                     style="width: 40px; height: 40px;">
                <div
                    class="bg-primary rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h4 class="mb-0 text-primary">Ko Phyoe</h4>
                <span class="text-light">Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <p class="menu-header mb-0">Main</p>
            <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="menu-spacer"></div>

            <p class="menu-header mb-0">Data</p>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-laptop me-2"></i>Today Sales
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item"><i
                            class="fa-solid fa-chevron-right me-3"></i>Buttons</a>
                    <a href="typography.html" class="dropdown-item"><i class="fa-solid fa-chevron-right me-3"></i>Typography</a>
                    <a href="element.html" class="dropdown-item"><i class="fa-solid fa-chevron-right me-3"></i>Other
                        Elements</a>
                </div>
            </div>

            <a href="widget.html" class="nav-item nav-link"><i class="fa-solid fa-book me-2"></i>Items</a>

            <a href="form.html" class="nav-item nav-link"><i class="fa-solid fa-layer-group me-2"></i>Category</a>

            <a href="table.html" class="nav-item nav-link"><i class="fa-solid fa-earth-asia me-2"></i>Country</a>

            <a href="chart.html" class="nav-item nav-link"><i class="fa-solid fa-users me-2"></i>Users</a>
            <div class="menu-spacer"></div>
            <p class="menu-header mb-0">User Setting</p>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa-solid fa-user-cog me-2"></i>User</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">
                        <i class="fa-solid fa-chevron-right me-3"></i>
                        Notifications
                    </a>
                    <a href="signup.html" class="dropdown-item">
                        <i class="fa-solid fa-chevron-right me-3"></i>
                        Profile
                    </a>
                    <a href="blank.html" class="dropdown-item">
                        <i class="fa-solid fa-chevron-right me-3"></i>
                        Mail
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
