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
                            <h3 class="card-title">Belanja Sekolah</h3>
                            
                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#tambahbelanja"> Tambah Matriks</button> 
                            
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Jenis Belanja</th>
                                    <th>Kategori Belanja</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php foreach($belanja as $key=>$belanja) { ?>
                                <tr>
                                    <td class="text-center"><?= $key + 1 ?></td>
                                    <td><?= $belanja->jenis_belanja->jenisbelanja ?></td>
                                    <td>
                                     <?php foreach($belanja->kategori_belanja as $kategori) { ?>
                                   
                                     <?= $kategori ?> ,

                                     <?php } ?>
                                    </td>
                                    
                                    <td class="text-center">
                                    
                                            <a href="#" class="btn btn-warning btn-xs"><i class="far fa-edit"></i></a>
                                            <a href="<?= base_url('Admin/Repo_Matriks_Admin/hapus/') ;?>" class="btn btn-danger btn-xs"><i class="far fa-trash-alt" data-toggle="modal" data-target="#modal-hapus"></i></a>
                    
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

    <div class="modal fade" id="tambahbelanja" tabindex="-1" role="dialog" aria-labelledby="tambahbelanja" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Jenis Belanja</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('Admin/Repo_Belanja_Admin/tambah');?>">
                    <div class="modal-body padding-body-modal">
                        <div class="row mt-modal">
                            <label class="">Jenis Belanja </label>
                            <div class="input-group">
                                <select class="custom-select" name="jenis">
                                    <option selected disabled >Pilih...</option>
                                    <?php foreach($jenis_belanja as $jenis) { ?>
                                    <option value="<?= $jenis->_id ?>"><?= $jenis->jenisbelanja ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-modal">
                            <label class="">Kategori </label>
                            <div class="input-group wrap-kategori-belanja_admin mb-3">
                                <input type="text" class="form-control" name="kategori_belanja[]" placeholder="Tulis disini ...">    
                            </div>

                            <a href="javascript:void(0);" class="add_belanja_admin btn btn-primary btn-sm" title="Add field"> Tambah Kegiatan </a> 
                        
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