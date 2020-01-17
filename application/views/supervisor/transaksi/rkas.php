<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
    <div class="wrapper">
<!--top navbar-->
<?php $this->load->view('template/top_navbar') ?>

<!--side navbar-->
<?php $this->load->view('template/side_navbar_supervisor') ?>
        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
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
                            <h3 class="card-title">Rencana Anggaran</h3>
                            <a href="<?= base_url('Supervisi/Transaksi/Transaksi_rkas/tambah'); ?>"> 
                                <button type="button" class="btn btn-primary btn-sm float-right"> Tambah Baru</button> 
                            </a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            
                                <tr>
                                    <th>Periode</th>
                                    <th>Tribulan</th>
                                    <th>Sekolah</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Status</th>
                                    <th>Aksi</th> 
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td>
                                    
                                            
                                            <a href="<?= base_url('Transaksi/Transaksi_rkas/lihat'); ?>" class="btn btn-info btn-xs"><i class="far fa-eye"></i></a>
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
</body>
</html>