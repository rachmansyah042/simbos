<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 2</title>

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/custom_css.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/daterangepicker/daterangepicker.css">
   <!-- Tempusdominus Bbootstrap 4 -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">


  <style>
      .table td, .table th{
        padding: .35rem;
        font-weight: normal;
      }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
<div class="wrapper">
    
<!--top navbar-->
<?php $this->load->view('template/top_navbar') ?>

<!--side navbar-->
<?php $this->load->view('template/side_navbar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">LAPORAN PENERIMAAN BARANG PERSEDIAAN</h3>             
            </div>

            
            <!-- /.card-header -->
            <div class="card-body">

            <form role="form">
                <div class="form-group" style="display: inline-block;     margin-right: 10px; width: 17%;">
                <label>Tanggal Awal</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="datetimepicker1" name="end_date" autocomplete="off" data-date-format="yyyy-mm-dd">
                </div>
                <!-- /.input group -->
                </div>
                <div class="form-group" style="display: inline-block;     margin-right: 10px; width: 17%;">
                    <label>Tanggal Akhir</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="datetimepicker" name="start_date" autocomplete="off" data-date-format="yyyy-mm-dd">
                    </div>
                    <!-- /.input group -->
                </div>

                <div class="form-group" style="width: 17%; display: inline-block; margin-right: 10px;">
                    <button class="btn btn-primary" type="submit"> 
                    <i class="fas fa-search"> </i>
                </div>
            </form>
                
              <div class="header">
                LAPORAN PENERIMAAN BARANG PERSEDIAAN SD NEGERI 1 LATENG 2020
              </div>
              <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2" class="text-center align-middle">No</th>
                        <th rowspan="2" class="text-center align-middle">Uraian</th>
                        <th colspan="5" class="text-center">Penerimaan</th>
                        <th rowspan="2" class="text-center align-middle">Nama Toko</th>
                        <th rowspan="2" class="text-center align-middle">Nama Orang</th>
                        <th rowspan="2" class="text-center align-middle">Alamat Toko</th>

                    </tr>
                    <tr>
                        <th class="text-center align-middle">Volume</th>
                        <th class="text-center align-middle">Satuan</th>
                        <th class="text-center align-middle">Harga Satuan</th>
                        <th class="text-center align-middle">Jumlah</th>
                        <th class="text-center align-middle">Tangga Penerimaan</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>-</td>
                        <td>-</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>-</td>
                        <td>-</td>
                        <td>1</td>
                    </tr>
                    
                </table>

              </div>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

 <?php $this->load->view('template/js_footer') ?>


</body>
</html>
