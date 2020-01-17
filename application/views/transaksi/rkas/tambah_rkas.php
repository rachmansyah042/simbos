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
                                    <h3 class="card-title">Tambah Rencana Anggaran</h3>
                                </div>
                            </div>
                        <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>

                <div class="card-body">
                    <form role="form" method="post" action="<?= base_url('Transaksi/Transaksi_rkas/doTambah') ?>">
                        <div class="form-group">
                            <div class="row"> 
                                <div class="col-md"> 
                                <label>Periode</label>
                                    <div class="input-group">
                                        <select class="custom-select" name="tahun">
                                            <option selected disabled>Pilih...</option>
                                            <?php foreach ($tahun as $tahun) { ?>

                                            <option value="<?= $tahun->_id ?>"> <?= $tahun->tahun ?> </option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md offset-md-1">
                                    <label>Tribulan</label>
                                    <div class="input-group">
                                        <select class="custom-select" name="tribulan">
                                            <option selected disabled>Pilih...</option>
                                            <?php foreach ($tribulan as $tribulan) { ?>

                                            <option value="<?= $tribulan->_id ?>"> <?= $tribulan->tribulan ?> </option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        </div> 

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md">
                                    <label>Anggaran Kegiatan</label>
                                    <div class="input-group">
                                        <input type="text" name="amount" class="form-control number_valid" placeholder="Tulis Harga Anggaran Kegiatan ...">               
                                    </div>
                                </div> 

                                <div class="col-md offset-md-1">
                                    
                                 </div> 
                            </div>
                        </div>

                        <br>

                        <h5>Tambah Program dan Kegiatan <h5>

                        <div class="form-group"> 
                            
                            <div class="field_wrapper">
                                <div class="new">
                                    <div class="row new_field_wrapper">
                                        <div class="col-md"> 
                                            <label class="label-form-program">Program</label>
                                            <div class="input-group">
                                                <select class="custom-select" name="program" id="program">
                                                    <option disabled selected>Pilih...</option>
                                                    <?php foreach ($program->data as $key => $program ) { ?>

                                                    <option value="<?= $program->_id ?>" id="<?= $key ?>"> <?= $program->nama_program ?> </option>
                                                    
                                                    <?php } ?>
                                                    
                                                </select>
                                            </div>

                                            <div class="wrap-form-kegiatan offset-1"> 
                                                <label class="label-form-program">Kegiatan</label>  
                                                <div class="input-group ">
                                                    <select class="custom-select kegiatan" name="kegiatan">
                                                        <option selected disabled>Pilih...</option>
                                                        
                                                    </select>
                                                </div>

                                                <div class="wrap-form-sub-kegiatan offset-1"> 
                                                    <label class="label-form-program">Sub-Kegiatan</label>  
                                                    <div class="input-group">
                                                        <input type="text" name="sub_kegiatan[]" class="form-control" placeholder="Tulis Sub Kegiatan ...">    
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="javascript:void(0);" class="add_kegiatan btn btn-primary btn-sm btn-add-sub-program" title="Add field"> Tambah Sub-Kegiatan </a> 
                        
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        
                            <!-- <a href="javascript:void(0);" class="add_row btn btn-primary btn-sm btn-add-program" title="Add field"> Tambah Program </a>  -->
                        
                        <div class="float-right">
                            <button type="button" class="btn btn-light">Kembali</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

                <!-- /.content -->
            </div>

    </div>
</body>
</html>