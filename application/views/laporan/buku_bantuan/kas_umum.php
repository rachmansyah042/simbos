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
                            <h3 class="card-title">Kas Umum</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>No. Bukti</th>
                                    <th>Uraian</th>
                                    <th>Pengeluaran</th>
                                    <th>Penerimaan</th>
                                    <th>Saldo</th> 
                                </tr>
                            </thead>
                            
                            <tbody>
                            <!-- <?php foreach ($rkas as $rkas) { ?> -->
                                <tr>
                                    <!-- <td><?= $rkas->tahun->tahun ?></td>
                                    <td><?= $rkas->tribulan->tribulan ?></td>
                                    <td><?= $rkas->sekolah->nama_sekolah ?></td>
                                    <td><?= $rkas->sekolah->alamat ?></td>
                                    <td><?= $rkas->sekolah->kecamatan ?></td>
                                    <td><?= $rkas->status ?></td>
                                    <td>
                                    
                                            
                                            <a href="<?= base_url('Transaksi/Transaksi_rkas/lihat/'.$rkas->_id); ?>" class="btn btn-info btn-xs"><i class="far fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning btn-xs"><i class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="far fa-trash-alt" data-toggle="modal" data-target="#modal-hapus"></i></a>
                    
                                    </td> -->
                                </tr>
                            <!-- <?php } ?> -->
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