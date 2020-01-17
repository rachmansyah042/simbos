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
            </div>
            <!-- /.card-header -->
            <form>
              <div class="row">
                
                  <div class="col-6">
                    <div class="card-body">
                      <div class="from-group">
                          <label>Tanggal Transaksi</label>
                          <input type="date" class="form-control">
                      </div>
                      <div class="from-group">
                          <label>Jenis Transaksi</label>
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
                      <div class="from-group">
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
                      <div class="from-group">
                          <label>Uraian</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="from-group">
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
                      <div class="from-group">
                          <label>No Bukti</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="from-group">
                          <label>Nominal</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="from-group">
                          <label>Status</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="from-group">
                          <label>Nama Barang</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="from-group">
                          <label>Jumlah Barang</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="from-group">
                          <label>Total Harga</label>
                          <input type="text" class="form-control">
                      </div>
                      <div>
                      <button type="button" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-6">
                    <div class="card-body">
                      <div class="from-group">
                          <label>Pajak</label>
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
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Pajak</th>
                            <th>Nominal</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>pph</td>
                            <td>30000</td>
                            <td>Hapus</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
              <!-- /.card-body -->
              
              </div>
            </form>
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
