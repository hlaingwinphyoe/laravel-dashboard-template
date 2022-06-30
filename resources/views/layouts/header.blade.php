<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa-solid fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0 text-decoration-none">
        <i class="fa-solid fa-bars"></i>
    </a>

    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="fa-solid fa-envelope"></i>
                <span class="badge bg-primary notification">99+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <h6 class="fw-normal mb-0 text-center text-primary">Messages</h6>
                <hr class="my-2 border-bottom border-light">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="{{ asset('image/myat_noe(6).jpg') }}" alt=""
                             style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="fw-normal mb-0">Aye Aye send you a message</h6>
                            <small style="font-size: 10.5px">15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="my-2 border-bottom border-light">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="{{ asset('image/myat_noe_potrait(2).jpg') }}" alt=""
                             style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="fw-normal mb-0">Zaw Zaw send you a message</h6>
                            <small style="font-size: 10.5px">15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="my-2 border-bottom border-light">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="{{ asset('image/myat_noe_potrait(3).jpg') }}" alt=""
                             style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="fw-normal mb-0">Kyaw Kyaw send you a message</h6>
                            <small style="font-size: 10.5px">15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="my-2 border-bottom border-light">
                <a href="#" class="dropdown-item text-center text-capitalize text-primary">See all messages</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <i class="fa-solid fa-bell"></i>
                <span class="badge bg-primary notification">6</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0"
                 style="width: 250px">
                <h6 class="fw-normal mb-0 text-center text-primary">Notifications</h6>
                <hr class="my-2 border-bottom border-light">
                <a href="#" class="dropdown-item">
                    <h6 class="fw-normal mb-0">Profile updated</h6>
                    <small style="font-size: 10.5px">15 minutes ago</small>
                </a>
                <hr class="my-2 border-bottom border-light">
                <a href="#" class="dropdown-item">
                    <h6 class="fw-normal mb-0">New user added</h6>
                    <small style="font-size: 10.5px">15 minutes ago</small>
                </a>
                <hr class="my-2 border-bottom border-light">
                <a href="#" class="dropdown-item">
                    <h6 class="fw-normal mb-0">Password changed</h6>
                    <small style="font-size: 10.5px">15 minutes ago</small>
                </a>
                <hr class="my-2 border-bottom border-light">
                <a href="#" class="dropdown-item text-center text-primary text-capitalize">See all notifications</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-1" src="{{ asset('image/me.jpg') }}" alt=""
                     style="width: 30px; height: 30px;">
                <span class="d-none d-lg-inline-flex">Ko Phyoe</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">
                    <i class="fa-solid fa-user-cog me-1"></i>
                    My Profile
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fa-solid fa-cogs me-1"></i>
                    Setting
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fa-solid fa-sign-out-alt me-1"></i>
                    Log Out
                </a>
            </div>
        </div>
    </div>
</nav>
