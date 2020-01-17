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
<?php $this->load->view('template/side_navbar_supervisor') ?>

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
              <h3 class="card-title">REKAPITULASI PENGGUNAAN DANA BOS</h3>             
            </div>

            
            <!-- /.card-header -->
            <div class="card-body">
                
              <div class="header">
                <div>REKAPITULASI REALISASI PENGGUNAAN DANA BOS SD NEGERI 1 LATENG</div>
                <div>PERIODE TANGGAL 01 JANUARI S/D 30 MARET 2020 (Triwulan I)</div>
              </div>
              <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2" class="text-center align-middle">No</th>
                        <th rowspan="2" class="text-center align-middle">Jenis Belanja</th>
                        <th colspan="12" class="text-center">PENGGUNAAN DANA BOS TAHUN 2020  (Triwulan I)</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Pengembangan Perpustakaan</th>
                        <th class="text-center align-middle">Penerimaan Peserta Bidik Misi</th>
                        <th class="text-center align-middle">Keg. Pembelajaran dan Ekskul</th>
                        <th class="text-center align-middle">Kegiatan Evaluasi Pembelajaran</th>
                        <th class="text-center align-middle">Pengelolaan Sekolah</th>
                        <th class="text-center align-middle">Pengembangan Profesi Guru</th>
                        <th class="text-center align-middle">Langganan Daya dan Jasa</th>
                        <th class="text-center align-middle">Pemeliharaan Perawatan Sarana & Prasarana Sekolah</th>
                        <th class="text-center align-middle">Pembayaran Honor</th>
                        <th class="text-center align-middle">Pembelian/Perawatan Alat Multimedia</th>
                        <th class="text-center align-middle">Biaya Lainnya</th>
                        <th class="text-center align-middle">Jumlah</th>
                    </tr>
                    <tr>
                        <th>a</th>
                        <th>b</th>
                        <th>c</th>
                        <th>d</th>
                        <th>e</th>
                        <th>f</th>
                        <th>g</th>
                        <th>h</th>
                        <th>i</th>
                        <th>j</th>
                        <th>k</th>
                        <th>l</th>
                        <th>m</th>
                        <th>n</th>
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
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>-</td>
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
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>-</td>
                    </tr>
                    
                </table>

                <div class="footer-data">
                    <div class="mengetahui-kepala">
                        <div>Mengetahui,</div>
                        <div>Kepala Sekolah</div>
                        <div class="identitas">
                            <span class="nama-perwakilan">
                                SRI WAHYUNNGSIH S.Pd
                            </span>
                            <div class="nip-kepala">
                                <span class="txt-nip">NIP</span>
                                <span>:</span>
                                <span>196107161982012015</span>
                            </div>
                        </div>
                    </div>
                    <div class="mengetahui-perwakilan">
                        <div>BANYUWANGI, <span>31 OKTOBER 2019</span></div>
                        <div>Kepala Sekolah</div>
                        <div class="identitas">
                            <span class="nama-perwakilan">
                                SRI WAHYUNNGSIH S.Pd
                            </span>
                            <div class="nip-perwakilan">
                                <span class="txt-nip">NIP</span>
                                <span>:</span>
                                <span>196107161982012015</span>
                            </div>
                        </div>
                    </div>
                </div>

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
