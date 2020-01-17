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
                            <h3 class="card-title">Data Sekolah</h3>
                            <a href="<?= base_url('Admin/Repo_Sekolah_Admin/tambah'); ?>"> 
                                <button type="button" class="btn btn-primary btn-sm float-right"> Tambah Baru</button> 
                            </a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            
                                <tr>
                                    <th>NPSN</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Aksi</th> 
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php foreach ($sekolah as $sekolah) { ?>
                                <tr>
                                    <td><?= $sekolah->NPSN ?></td>
                                    <td><?= $sekolah->nama_sekolah ?></td>
                                    <td><?= $sekolah->status ?></td>
                                    <td><?= $sekolah->alamat ?></td>
                                    <td><?= $sekolah->kecamatan ?></td>
                                    <td>
                                    
                                            <a href="<?= base_url('Admin/Repo_Sekolah_Admin/edit/'.$sekolah->_id)?>" class="btn btn-warning btn-xs"><i class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="far fa-trash-alt" data-toggle="modal" data-target="#modal-hapus"></i></a>
                    
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
</body>
</html>