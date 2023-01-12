
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        
        <a href="<?php echo base_url() ?>home/index" class="brand-link">
            <img src="<?php echo base_url() ?>assets/dist/img/concert.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light" a href="#" >TIKET KONSER</span>
        </a>

        <div class="sidebar">

        <?php if ($_SESSION['hak_akses'] == 'P' ) { ?>
            <br>
        <?php } ?>

        <?php if ($_SESSION['hak_akses'] == 'A' or $_SESSION['hak_akses'] == 'O' ) { ?>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo base_url() ?>assets/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Administrator</a>
                </div>
            </div>
        <?php } ?>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>home/index" class="nav-link <?= activate_menu('home') ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() ?>apar/index" class="nav-link <?= activate_menu('apar') ?>">
                    <i class="nav-icon fas fa-image"></i>
                    <p>
                        Daftar Pemesan Tiket
                    </p>
                    </a>
                </li>   

                <li class="nav-item">
                    <a href="<?php echo site_url() ?>login/logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Keluar
                    </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>