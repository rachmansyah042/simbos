<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                            <h3 class="card-title">Matriks</h3>
                            
                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#tambahmatriks"> Tambah Matriks</button> 
                            
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Matriks</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php foreach($matriks as $key=>$matriks) { ?>
                                <tr>
                                    <td class="text-center"><?= $key + 1 ?></td>
                                    <td><?= $matriks->matrik ?></td>
                                    <td class="text-center">
                                    
                                            <a href="#" class="btn btn-warning btn-xs"><i class="far fa-edit"></i></a>
                                            <a href="<?= base_url('Admin/Repo_Matriks_Admin/hapus/').$matriks->_id ;?>" class="btn btn-danger btn-xs"><i class="far fa-trash-alt" data-toggle="modal" data-target="#modal-hapus"></i></a>
                    
                                    </td>
                                </tr>
                            <?php } ?>
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

     <div class="modal fade" id="tambahmatriks" tabindex="-1" role="dialog" aria-labelledby="tambahmatriks" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Matriks</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('Admin/Repo_Matriks_Admin/tambah');?>">
                    <div class="modal-body padding-body-modal">
                        <div class="row mt-modal">
                            <label class="">Matriks </label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="matrik" placeholder="Tulis disini ...">    
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>