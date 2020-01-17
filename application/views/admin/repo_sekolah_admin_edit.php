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
                                    <h3 class="card-title">Ubah Data Sekolah</h3>
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
                                    
                                    <form role="form" method="post" action="">
                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>NPSN</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="NPSN" value="<?= $data->NPSN ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label>Nama Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="nama_sekolah" value="<?= $data->nama_sekolah ?>">
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
                                                            <option disabled >Pilih...</option>
                                                            <option value="Swasta">Swasta</option>
                                                            <option value="Negeri">Negeri</option>
                                                        </select>
                                                    </div>
                                                </div> 

                                                <div class="col-md offset-md-1">
                                                    <label>Bentuk Pendidikan</label>
                                                    <div class="input-group">
                                                        <select class="custom-select" name="bentuk">
                                                            <option disabled >Pilih...</option>

                                                            <?php foreach ($bentuk_sekolah as $bentuk_sekolah) { ?>
                                                            <option <?= $bentuk_sekolah->bentuk == $data->bentuk ? 'selected' : '' ?> value="<?= $bentuk_sekolah->_id ?>"> <?= $bentuk_sekolah->bentuk ?></option>
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
                                                        <textarea class="form-control" rows="3" name="alamat" ><?= $data->alamat ?></textarea>
                                                    </div>
                                                </div> 

                                                <div class="col-md offset-md-1">
                                                    <label>Desa / Kelurahan</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control" rows="3" name="kecamatan"><?= $data->kecamatan ?></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>Kode Pos</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="kode_pos" value="<?= $data->kode_pos ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label>Kepala Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="nama_kepsek" value="<?= $data->nama_kepsek ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>No. Telp. Kepala Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="telp_kepsek" value="<?= $data->telp_kepsek ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label>Bendahara Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="nama_bendahara" value="<?= $data->nama_bendahara ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>No. Telp. Bendahara Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="telp_bendahara" value="<?= $data->telp_bendahara ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label>Komite Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="nama_komite" value="<?= $data->nama_komite ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="row"> 
                                                <div class="col-md"> 
                                                    <label>No. Telp. Komite Sekolah</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="telp_komite" value="<?= $data->telp_komite ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md offset-md-1">
                                                    <label>Dibawah Supervisi</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <br>

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