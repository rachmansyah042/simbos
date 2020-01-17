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
                    <form role="form">
                        <div class="form-group">
                            <div class="row"> 
                                <div class="col-md"> 
                                    <label>Tanggal Perencanaan</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="datetimepicker1" name="end_date" autocomplete="off" data-date-format="yyyy-mm-dd">
                                    </div>
                                </div>

                                <div class="col-md offset-md-1">
                                    <label>Periode</label>
                                    <div class="input-group">
                                        <select class="custom-select">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        </div> 

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md">
                                    <label>Tribulan</label>
                                    <div class="input-group">
                                        <select class="custom-select">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div> 

                                <div class="col-md offset-md-1">
                                    <label>Sekolah</label>
                                    <div class="input-group">
                                        <select class="custom-select">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
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
                                                <select class="custom-select">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <div class="wrap-form-kegiatan offset-1"> 
                                                <label class="label-form-program">Kegiatan</label>  
                                                <div class="input-group">
                                                    <select class="custom-select">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>

                                                <div class="wrap-form-sub-kegiatan offset-1"> 
                                                    <label class="label-form-program">Sub-Kegiatan</label>  
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Tulis Sub Kegiatan ...">    
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="javascript:void(0);" class="add_kegiatan btn btn-primary btn-sm btn-add-sub-program" title="Add field"> Tambah Sub-Kegiatan </a> 
                        
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        
                            <a href="javascript:void(0);" class="add_row btn btn-primary btn-sm btn-add-program" title="Add field"> Tambah Program </a> 
                        
                        <div class="float-right">
                            <button type="button" class="btn btn-light">Kembali</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

                <!-- /.content -->
            </div>

    </div>
</body>
</html>