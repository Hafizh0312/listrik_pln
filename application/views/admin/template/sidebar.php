        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PLN Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manajemen Data
            </div>

            <!-- Nav Item - Pelanggan -->
            <li class="nav-item <?= $this->uri->segment(2) == 'pelanggan' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/pelanggan') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Kelola Pelanggan</span>
                </a>
            </li>

            <!-- Nav Item - Penggunaan -->
            <li class="nav-item <?= $this->uri->segment(2) == 'penggunaan' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/penggunaan') ?>">
                    <i class="fas fa-fw fa-bolt"></i>
                    <span>Kelola Penggunaan</span>
                </a>
            </li>

            <!-- Nav Item - Tagihan -->
            <li class="nav-item <?= $this->uri->segment(2) == 'tagihan' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/tagihan') ?>">
                    <i class="fas fa-fw fa-file-invoice-dollar"></i>
                    <span>Kelola Tagihan</span>
                </a>
            </li>

            <!-- Nav Item - Level/Tarif -->
            <li class="nav-item <?= $this->uri->segment(2) == 'level' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/level') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Tarif</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Akun
            </div>

            <!-- Nav Item - Profile -->
            <li class="nav-item <?= $this->uri->segment(3) == 'profile' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/dashboard/profile') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profil</span>
                </a>
            </li>

            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout') ?>" onclick="return confirm('Yakin ingin logout?')">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar --> 