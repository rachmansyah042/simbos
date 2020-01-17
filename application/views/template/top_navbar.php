<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>

        <div class="image">
          <div class="dropdown">
            <img src="<?php echo base_url() ?>assets/template/dist/img/user2-160x160.jpg" class="img-head img-circle elevation-2 dropdown-toggle" alt="User Image" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:31px;">
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?= base_url() ?>Auth/logout">Logout</a>
              </div>
          </div>
        </div>
    </ul>
  </nav>
  <!-- /.navbar -->