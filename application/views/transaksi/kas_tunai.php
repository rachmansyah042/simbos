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
                
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tgl Trans</th>
                  <th>Nama Item</th>
                  <th>Kuantitas</th>
                  <th>Harga</th>
                  <th>Setatus</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>Lunas</td>
                  <td>
                    <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-info btn-xs"><i class="far fa-eye" data-toggle="modal" data-target="#modal-default"></i></a>
                      <a href="<?php echo base_url()?>transaksi/kastunai/editKasTunai" class="btn btn-warning btn-xs"><i class="far fa-edit"></i></a>
                      <a href="#" class="btn btn-danger btn-xs"><i class="far fa-trash-alt" data-toggle="modal" data-target="#modal-hapus"></i></a>
                    </div>
                  </td>
                  <td>
                    <span type="text" >Batal Lunas</span>
                    <span type="text" >Cetak Kwitansi</span>
                  </td>
                </tr>
                <tr>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>Belom Lunas</td>
                  <td>
                    <i class="far fa-eye"></i>
                    <i class="far fa-edit"></i>
                    <i class="far fa-trash-alt"></i>
                  </td>
                  <td>
                  <span type="text" >Lunasi</span>
                  <span type="text" >Cetak Faktur</span>
                  </td>
                </tr>
                </tbody>
                
              </table>

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

              <div class="modal fade" id="modal-filter">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Default Modal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form role="form">
                    <div class="form-group"  >
                    <label>Tanggal Awal</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="datetimepicker1" name="end_date" autocomplete="off" placeholder="Tanggal Awal" data-date-format="yyyy-mm-dd">
                    </div>
                    <!-- /.input group -->
                    </div>
                    <div class="form-group"  >
                        <label>Tanggal Akhir</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="datetimepicker" name="start_date" autocomplete="off" placeholder="Tanggal Akhir" data-date-format="yyyy-mm-dd">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group"   >
                        <label>Jenis Belanja</label>
                        <select class="form-control" >
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                    <div class="form-group"   >
                        <label>Rekanan</label>
                        <select class="form-control" >
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                    <div class="form-group"   >
                        <label>Status</label>
                        <select class="form-control" >
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                </form>

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
