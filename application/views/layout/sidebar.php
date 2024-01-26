<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="<?= base_url('assets/images/user_icon.png') ?>" alt="profile">
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2"><?= $admin['name'] ?></span>
                        <span class="text-secondary text-small"><?= $admin['username'] ?></span>
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home') ?>">
                    <span class="menu-title">Pemetaan</span>
                    <i class="mdi mdi-map-marker menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('input_villa') ?>">
                    <span class="menu-title">Input Villa</span>
                    <i class="mdi mdi-plus-box menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('villa') ?>">
                    <span class="menu-title">Data Villa</span>
                    <i class="mdi mdi-file menu-icon"></i>
                </a>
            </li>
        </ul>
    </nav>

    <!-- partial -->