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
                            <h3 class="card-title">System Administrator</h3>
                            
                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#tambahuser"> Tambah Baru</button> 
                            
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php foreach($users as $users) {?>
                                <tr>
                                    <td><?= $users->username ?></td>
                                    <td><?= $users->fullname ?></td>
                                    <td>

                                    <?php if ($users->role=='1'): ?>
                                        Admin
                                    <?php elseif ($users->role=='2'): ?>
                                        Supervisor
                                    <?php else : ?>
                                        Operator
                                    <?php endif; ?>
                                    </td>
                                    <td>
                                    
                                            <a href="#" class="btn btn-warning btn-xs"><i class="far fa-edit"></i></a>
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

    <!-- modal content -->

     <div class="modal fade" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="tambahuser" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('Admin/Users_Admin/tambah');?>">
                    <div class="modal-body padding-body-modal">

                        <div class="row mt-modal">
                            <label class="">Nama Lengkap</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="fullname" placeholder="Tulis disini ...">    
                            </div>
                        </div>

                        <div class="row mt-modal">
                            <label class="">Username </label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" placeholder="Tulis disini ...">    
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="row mt-modal">
                            <label class="">Email </label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Tulis disini ...">    
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="row mt-modal">
                            <label class="">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password">    
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="row mt-modal">
                            <label class="">Role</label>
                            <div class="input-group">
                                <select class="custom-select" name="role">
                                    <option selected disabled >Pilih...</option>
                                    <option value="1">Administrator</option>
                                    <option value="2">Supervisor</option>
                                </select>
                            </div>
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