<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

            
<!--top navbar-->
<?php $this->load->view('template/top_navbar') ?>

<!--side navbar-->
<?php $this->load->view('template/side_navbar') ?>  

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
                            <h3 class="card-title">Penyetoran Pajak</h3>
                        </div> 

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            <form role="form">
                                <div class="form-group" style="display: inline-block;     margin-right: 10px; width: 17%;">
                                <label>Tanggal Awal</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="datetimepicker1" name="end_date" autocomplete="off" data-date-format="yyyy-mm-dd">
                                </div>
                                <!-- /.input group -->
                                </div>
                                <div class="form-group" style="display: inline-block;     margin-right: 10px; width: 17%;">
                                    <label>Tanggal Akhir</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="datetimepicker" name="start_date" autocomplete="off" data-date-format="yyyy-mm-dd">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group" style="width: 17%; display: inline-block; margin-right: 10px;">
                                    <label>No. Kwitansi</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group" style="width: 17%; display: inline-block; margin-right: 10px;">
                                    <button class="btn btn-primary" type="submit"> 
                                    <i class="fas fa-search"> </i>
                                </div>
                            </form>

                            <div class="container"> 
                                <button class="btn btn-primary" data-toggle="modal" data-target="#setor"> Setor </button>
                            </div><br>
                    
                            <form method="post" action=" <?= base_url('Transaksi/Transaksi_pajak/batal') ?>">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    
                                        <tr>
                                            <th>No</th>
                                            <th>Transaksi Kas Tunai</th>
                                            <th>Tgl. Setor</th>
                                            <th>Jenis</th>
                                            <th>No. Bukti Setor</th> 
                                            <th>Nominal</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php foreach($setoran as $key => $setoran) { ?>
                                        <tr>
                                            <td> <?= $key +1 ?></td>
                                            <td> <?= $setoran->kastunai->uraian ?></td>
                                            <td><?=  date("d-M-Y", strtotime($setoran->tanggal_setor)) ?></td>
                                            <td><?= $setoran->kastunai->pajak->jenis->jenispajak ?></td>
                                            <td><?= $setoran->nomer_bukti ?></td>
                                            <td><?= $setoran->nominal ?></td>
                                            <td class="text-center">

                                            <?php if ( $setoran->kastunai->status_pajak == true ) : ?> 
                                           
                                            <input name="kastunai" value="<?= $setoran->kastunai->_id ?>" hidden>
                                            <button type="submit" class="btn btn-danger"> Batal Setor</button> 

                                            <?php else : ?>
                                            
                                            <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </form>
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

        <!-- setor pajak -->
        <div class="modal fade" id="setor" tabindex="-1" role="dialog" aria-labelledby="setor" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Setor Pajak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action=" <?= base_url('Transaksi/Transaksi_pajak/setor') ?>">
                        <label class="">Nomor Bukti Pajak</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="nomer_bukti" placeholder="Tulis No Bukti ...">    
                        </div>
                        
                        <label class="mt-3">Transaksi Kas Tunai</label>
                        <div class="input-group">
                            <select class="custom-select" name="kastunai" id="kas_tunai">
                                <option selected disabled>Pilih...</option>
                                <?php foreach ($pajak as $pajak) { ?>

                                <option value="<?= $pajak->_id ?>"> <?= $pajak->uraian ?> </option>

                                <?php } ?>
                            </select>
                        </div>

                        <label class="mt-3">Tanggal Setor</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                            </div>
                            <input type="date" class="form-control" name="tanggal_setor" autocomplete="off">
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