<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('template/head_css')?>

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
              <h3 class="card-title">Transaksi Kas Tunai</h3>
              
              <a href="<?php echo base_url()?>transaksi/kastunai/tambahKasTunai">
                <button type="button" class="btn btn-primary float-right">
                Tambah
                </button>
              </a>
              
            </div>

            <div style="padding:0 20px;">
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-filter">
                Filter
              </button>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                
             

              <div class="modal fade" id="modal-default">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Default Modal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Jenis Transaksi</th>
                            <th>Jenis Belanja</th>
                            <th>Uraian</th>
                            <th>Rekanan</th>
                            <th>No Bukti</th>
                            <th>Pajak</th>    
                            <th>Tgl Lunas</th> 
                          </tr>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </thead>
                      
                      </table>
                      <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Pajak</th>
                            <th>Nominal</th>
                          </tr>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </thead>
                      
                      </table>

                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

              <div class="modal fade" id="modal-hapus">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Default Modal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Apakah Anda yakin mengapus data ini?</p>

                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

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
