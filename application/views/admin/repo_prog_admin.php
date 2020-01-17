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
                            <h3 class="card-title">Program dan Kegiatan </h3>
                            
                                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#tambahprog"> Tambah Baru</button> 
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            
                                <tr>
                                    <th>Kode</th>
                                    <th>Program</th>
                                    <th>Kegiatan</th>
                                    <th>Aksi</th> 
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php foreach($program as $program)  {?>
                                <?php foreach($program->kegiatan as $kegiatan) { ?>
                                    
                                <tr>
                                    <td><?= $program->Program_id ?></td>
                                    <td><?= $program->nama_program ?></td>
                                    
                                        <td><?= $kegiatan->nama_kegiatan ?></td>

                                    <td>
                                    
                                            <a href="#" class="btn btn-warning btn-xs"><i class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="far fa-trash-alt" data-toggle="modal" data-target="#modal-hapus"></i></a>
                    
                                    </td>
                                </tr>
                                
                                <?php } ?>
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

     <div class="modal fade" id="tambahprog" tabindex="-1" role="dialog" aria-labelledby="tambahprog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Program dan Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body padding-body-modal">
                <form method="post" action="<?= base_url('Admin/Repo_Prog_Admin/tambah') ?>"> 
                    <div class="row mt-modal">
                        <label class="">Program (Pilih Program Hanya Jika Akan Menambahkan Kegiatan)</label>
                        <div class="input-group">
                            <input type="text" name="nama_program" class="form-control" placeholder="Tulis disini ...">    
                        </div>
                    </div>

                    <div class="row mt-modal">
                        <label class="">Kode</label>
                        <div class="input-group">
                            <input type="text" name="kode" class="form-control" placeholder="Tulis disini ...">    
                        </div>
                    </div>

                    <div class="row mt-modal">
                        <label class="">Tahun</label>
                        <div class="input-group">
                            <input type="text" name="tahun" class="form-control" placeholder="Tulis disini ...">    
                        </div>
                    </div>

                    <div class="row mt-modal">
                        <label class="">Kegiatan</label>
                        
                        <div class="input-group wrap-form-kegiatan-admin mb-3"> 
                            <input type="text" name="nama_kegiatan[]" class="form-control" placeholder="Tulis disini ...">    
                        </div>

                        <a href="javascript:void(0);" class="add_kegiatan_admin btn btn-primary btn-sm" title="Add field"> Tambah Kegiatan </a> 
                        
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