<header class="navbar navbar-custom  flex-md-nowrap header ">
    {{-- Logo Assalisa --}}
    <div class="d-flex align-items-center justify-content-between">
        <a href="welcome.blade.php" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block"> Assalisa Beauty Clinic</span>
        </a>

        <i class="bi bi-list toggle-sidebar-btn"></i>
       
    </div>

    <span id="date_time" ></span>

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            {{-- Profil --}}
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
                    <span class="d-none d-md-block dropdown-toggle ps-2">Emma Watson</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Emma Watson</h6>
                        <span>Owner</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-gear"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </nav>

    <script type="text/javascript" src="js/dashboard.js"></script>
    <script type="text/javascript">
        window.onload = date_time('date_time');
    </script>

</header>
