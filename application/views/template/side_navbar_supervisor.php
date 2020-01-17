<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4" style="box-shadow:none !important; border: solid 1px #ddd;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color:#1dcdde;">
      <img src="<?php echo base_url() ?>assets/logo_img_bwi.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="color:white;">Supervisor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
          <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="font-size: 13px;">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url()?>Supervisi/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Content Repository
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>Supervisi/Repository/saldo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Saldo Awal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Supervisi/Repository/rekanan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekanan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>Supervisi/Transaksi/Transaksi_rkas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RKAS</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>Supervisi/Laporan/rkas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Realisasi RKAS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku Bantuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Supervisi/Laporan/matrik" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Matrik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Supervisi/Laporan/bpk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Format BPK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Supervisi/Laporan/K8" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>K8</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Supervisi/Laporan/Form_1a" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>From A1</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>