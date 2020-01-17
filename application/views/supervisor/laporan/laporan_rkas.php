<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('template/head_css')?>

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
              <h3 class="card-title">Rencana Kegiatan dan Anggaran Sekolah</h3>             
            </div>

            
            <!-- /.card-header -->
            <div class="card-body">
                
              <div class="instansi">
                <div class="item-instansi">
                    <span style="width:100px;">Nama Sekolah</span>
                    <span style="width: 10px;text-align: center;">:</span>
                    <span>SDN</span>
                </div>
                <div class="item-instansi">
                    <span style="width:100px;">Alamat</span>
                    <span style="width: 10px;text-align: center;">:</span>
                    <span>Banyuwangi</span>
                </div>
                <div class="item-instansi">
                    <span style="width:100px;">Kecamatan</span>
                    <span style="width: 10px;text-align: center;">:</span>
                    <span>Banyuwangi</span>
                </div>
                <div class="item-instansi">
                    <span style="width:100px;">Tahun Anggaran</span>
                    <span style="width: 10px;text-align: center;">:</span>
                    <span>2018</span>
                </div>
              </div>
              <table class="table table-bordered">
                <tr>
                  <th rowspan="2" class="text-center align-middle">No</th>
                  <th rowspan="2" colspan="2" class="text-center align-middle">Program & Kegiatan</th>
                  <th colspan="4" class="text-center">Tribulan</th>
                  <th rowspan="2" class="text-center align-middle">Jumlah</th>
                </tr>
                <tr>
                  <th>Trib. 1</th>
                  <th>Trib. 2</th>
                  <th>Trib. 3</th>
                  <th>Trib. 4</th>
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
                </tr>
                
              </table>

              <div class="modal fade" id="modal-default">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Detail Kas Tunai</h4>
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
                      <h4 class="modal-title">Hapus Kas Tunai</h4>
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
                      <h4 class="modal-title">Fiter</h4>
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

              <div class="modal fade" id="modal-lunasi">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Lunasi</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form role="form">
                      <div class="form-group"   >
                          <label>Status</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>......</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>.....</label>
                        <input type="text" class="form-control">
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
