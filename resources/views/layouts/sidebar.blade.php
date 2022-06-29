<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">My Dashboard</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
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

            <p class="menu-header mb-0">Element</p>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-laptop me-2"></i>Elements
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item"><i
                            class="fa-solid fa-chevron-right me-3"></i>Buttons</a>
                    <a href="typography.html" class="dropdown-item"><i class="fa-solid fa-chevron-right me-3"></i>Typography</a>
                    <a href="element.html" class="dropdown-item"><i class="fa-solid fa-chevron-right me-3"></i>Other
                        Elements</a>
                </div>
            </div>

            <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>

            <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>

            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>

            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            <div class="menu-spacer"></div>
            <p class="menu-header mb-0">Auth</p>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">
                        <i class="fa-solid fa-chevron-right me-3"></i>
                        Sign In
                    </a>
                    <a href="signup.html" class="dropdown-item">
                        <i class="fa-solid fa-chevron-right me-3"></i>
                        Sign Up
                    </a>
                    <a href="404.html" class="dropdown-item">
                        <i class="fa-solid fa-chevron-right me-3"></i>
                        404 Error
                    </a>
                    <a href="blank.html" class="dropdown-item">
                        <i class="fa-solid fa-chevron-right me-3"></i>
                        Blank Page
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
