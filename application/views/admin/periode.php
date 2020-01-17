<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/custom_css.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Main content -->
                <section class="content">
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">System Administrator</h3>
                            
                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#tambahuser"> Tambah Baru</button> 
                            
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>Setatus</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                    
                                            <a href="#" class="btn btn-warning btn-xs"><i class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="far fa-trash-alt" data-toggle="modal" data-target="#modal-hapus"></i></a>
                    
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
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

    </div>

    <!-- modal content -->

     <div class="modal fade" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="tambahuser" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body padding-body-modal">

                <div class="row mt-modal">
                    <label class="">Tahun </label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tulis disini ...">    
                    </div>
                </div>

                <div class="row mt-modal">
                    <label class="">Setatus</label>
                    <select class="form-control" >
                        <option selected="selected">Setatus</option>
                        <option>Aktif</option>
                        <option>Tidak Aktif</option>
                    </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
    </div>

</body>
</html>