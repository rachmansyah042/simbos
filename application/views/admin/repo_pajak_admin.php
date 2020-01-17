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
                            <h3 class="card-title">Pajak</h3>
                            
                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#tambahpajak"> Tambah Baru</button> 
                            
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                        <table id="example1" class="table table-bordered table-striped">
                        <form method="post"> 
                            <thead>
                                <tr>
                                    <th>Jenis</th>
                                    <th>Uraian</th>
                                    <th>Presentasi</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php foreach($pajak as $pajak) { ?>
                                <tr>
                                    <td><?= $pajak->jenis->jenispajak ?></td>
                                    <td><?= $pajak->uraian ?></td>
                                    <td><?= $pajak->presentase ?></td>
                                    <td class="text-center">
                                            <a href="#" class="btn btn-warning btn-xs"><i class="far fa-edit"></i></a>
                                            <a href="<?= base_url('Admin/Repo_Pajak_Admin/hapus/').$pajak->_id ;?>" class="btn btn-danger btn-xs"><i class="far fa-trash-alt" data-toggle="modal" data-target="#modal-hapus"></i></a>
                    
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </form>
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

     <div class="modal fade" id="tambahpajak" tabindex="-1" role="dialog" aria-labelledby="tambahpajak" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pajak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('Admin/Repo_Pajak_Admin/tambah');?>">
                    <div class="modal-body padding-body-modal">

                        <div class="row mt-modal">
                            <label class="">Jenis Pajak</label>
                            <div class="input-group">
                                <select class="custom-select" name="jenis">
                                    <option selected disabled >Pilih...</option>
                                    <?php foreach($jenis_pajak as $jenis) { ?>
                                    <option value="<?= $jenis->_id ?>"><?= $jenis->jenispajak ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-modal">
                            <label class="">Uraian </label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="uraian" placeholder="Tulis disini ...">    
                                  </div>
                        </div>

                        <div class="row mt-modal">
                            <label class="">Presentasi </label>
                            <div class="input-group">
                                <input type="text" class="form-control number_valid" name="presentase" placeholder="Tulis disini ...">    
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">%</span>
                                </div>
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