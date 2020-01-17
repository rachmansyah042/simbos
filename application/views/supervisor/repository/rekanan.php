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
              <h3 class="card-title">Daftar Rekanan</h3>
              
              <a href="#">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-tambah">
                Tambah
                </button>
              </a>
              
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Rekanan</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Setatus</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>
                    <i class="far fa-edit" data-toggle="modal" data-target="#modal-edit"></i>
                  </td>
                </tr>
                <tr>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>
                    <i class="far fa-edit" data-toggle="modal" data-target="#modal-edit"></i>
                  </td>
                </tr>
                </tbody>
                
              </table>

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

              <div class="modal fade" id="modal-edit">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Edit Data Rekanan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form role="form">
                      <div class="form-group"  >
                      <label>Nama Rekanan</label>
                      <div class="input-group">
                          <input type="text" class="form-control" autocomplete="off" placeholder="Nama Rekanan" data-date-format="yyyy-mm-dd">
                      </div>
                      <!-- /.input group -->
                      </div>
                      <div class="form-group"  >
                          <label>Nama Kontak</label>
                          <div class="input-group">
                              <input type="text" class="form-control" autocomplete="off" placeholder="Nama Kontak" data-date-format="yyyy-mm-dd">
                          </div>
                          <!-- /.input group -->
                      </div>
                      <div class="form-group"   >
                          <label>NPWP</label>
                          <div class="input-group">
                              <input type="text" class="form-control" >
                          </div>
                      </div>
                      <div class="form-group"   >
                          <label>No Telepon</label>
                          <div class="input-group">
                              <input type="text" class="form-control" >
                          </div>
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
                      <div class="form-group"   >
                          <label>Alamat</label>
                          <textarea class="form-control" rows="3"></textarea>
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

              <div class="modal fade" id="modal-tambah">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Tambah Rekanan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form role="form">
                      <div class="form-group"  >
                      <label>Nama Rekanan</label>
                      <div class="input-group">
                          <input type="text" class="form-control" autocomplete="off" placeholder="Nama Rekanan" data-date-format="yyyy-mm-dd">
                      </div>
                      <!-- /.input group -->
                      </div>
                      <div class="form-group"  >
                          <label>Nama Kontak</label>
                          <div class="input-group">
                              <input type="text" class="form-control" autocomplete="off" placeholder="Nama Kontak" data-date-format="yyyy-mm-dd">
                          </div>
                          <!-- /.input group -->
                      </div>
                      <div class="form-group"   >
                          <label>NPWP</label>
                          <div class="input-group">
                              <input type="text" class="form-control" >
                          </div>
                      </div>
                      <div class="form-group"   >
                          <label>No Telepon</label>
                          <div class="input-group">
                              <input type="text" class="form-control" >
                          </div>
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
                      <div class="form-group"   >
                          <label>Alamat</label>
                          <textarea class="form-control" rows="3"></textarea>
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
