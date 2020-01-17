<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4" style="box-shadow:none !important; border: solid 1px #ddd;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color:#1dcdde;">
      <img src="<?php echo base_url() ?>assets/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo base_url()?>Admin/Dashboard_Admin" class="nav-link active">
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
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>Admin/Repo_Sekolah_Admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Admin/Repo_Prog_Admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Program & Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Admin/Repo_Pajak_Admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pajak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Admin/Repo_Matriks_Admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Matriks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>Admin/Repo_Belanja_Admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Belanja Sekolah</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                System Administration
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>Admin/Users_Admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
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