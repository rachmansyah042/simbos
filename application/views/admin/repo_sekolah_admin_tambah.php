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
                <?= $this->session->flashdata('message400'); ?>
                <?= $this->session->flashdata('message500'); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Tambah Data Sekolah</h3>
                                </div>

                                <div class="card-body">
                                    <table> 
                                        <tr>
                                            <th>Kabupaten </th>
                                            <td style="border-spacing:5px">: </td>
                                            <th> Kab. Banyuwangi</th>
                                        <tr/>
                                        
                                        <tr>
                                            <th>Provinsi  </th>
                                            <td>: </td>
                                            <th> Jawa Timur</th>
                                        <tr/>
                                    </table>

                                    <br>
                                    
                                    <form role="form" method="post" action="<?= base_url('Admin/Repo_Sekolah_Admin/doTambah'); ?>">
                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>NPSN</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="NPSN">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label>Nama Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="nama_sekolah">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md">
                                                    <label>Status</label>
                                                    <div class="input-group">
                                                        <select class="custom-select" name="status">
                                                            <option selected disabled >Pilih...</option>
                                                            <option value="Swasta">Swasta</option>
                                                            <option value="Negeri">Negeri</option>
                                                        </select>
                                                    </div>
                                                </div> 

                                                <div class="col-md offset-md-1">
                                                    <label>Bentuk Pendidikan</label>
                                                    <div class="input-group">
                                                        <select class="custom-select" name="bentuk">
                                                            <option selected disabled >Pilih...</option>

                                                            <?php foreach ($bentuk_sekolah as $bentuk_sekolah) { ?>
                                                            <option value="<?= $bentuk_sekolah->_id ?>"> <?= $bentuk_sekolah->bentuk ?></option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md">
                                                    <label>Alamat</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control" rows="3" name="alamat"></textarea>
                                                    </div>
                                                </div> 

                                                <div class="col-md offset-md-1">
                                                    <label>Desa / Kelurahan</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control" rows="3" name="kecamatan"></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>Kode Pos</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control number_valid" name="kode_pos">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label>Kepala Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="nama_kepsek">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>No. Telp. Kepala Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control number_valid" name="telp_kepsek">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label>Email Kepala Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="email_kepsek">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>NIP Kepala Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control number_valid" name="nip_kepsek">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label>NIP Bendahara Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control number_valid" name="nip_bendahara">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>Nama Bendahara Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="nama_bendahara">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1"> 
                                                    <label>No. Telp. Bendahara Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control number_valid" name="telp_bendahara">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>Email Bendahara Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="email_bendahara">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label>Nama Komite Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="nama_komite">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>No. Telp. Komite Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control number_valid" name="telp_komite">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label>Email Komite Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="email_komite">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>Dibawah Supervisi</label>
                                                    <div class="input-group">
                                                        <select class="custom-select" name="supervisor">
                                                            <option selected disabled >Pilih...</option>

                                                            <?php foreach ($supervisi as $supervisi) { ?>
                                                            <option value="<?= $supervisi->_id ?>"> <?= $supervisi->user_id->fullname ?></option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label> Operator Sekolah</label>
                                                    <div class="input-group">
                                                        <button type="button" id="btn-toggle" class="btn btn-primary"> Daftarkan Operator </button> 
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <br>

                                        
                                        <div id="toggle-operator">
                                            
                                            <br>
                                            <div class="form-group">
                                                <div class="row"> 
                                                    <div class="col-md"> 
                                                        <label>Username Operator</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="username">
                                                        </div>
                                                    </div>

                                                    <div class="col-md offset-md-1">
                                                        <label>Email Operator</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="email">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md"> 
                                                        <label>Nama Operator</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="fullname">
                                                        </div>
                                                    </div>

                                                    <div class="col-md offset-md-1"> 
                                                        <label>Password Operator</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" name="password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group"> 
                                                
                                            <div class="float-right">
                                                <button type="button" class="btn btn-light">Kembali</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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