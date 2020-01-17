<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
<style>
        .table-wd {
            width:100%;
            border: 1px solid black;
            padding: 5px;
            font-size: 14px;
        }

        .border-line {
            border: 1px solid black;
            padding: 5px;
        }
        
    </style>
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
                            <h3 class="card-title">Laporan Form 1A </h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#lembar1" role="tab" aria-controls="home" aria-selected="true">Lembar 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#lembar2" role="tab" aria-controls="profile" aria-selected="false">Lembar 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#lembar3" role="tab" aria-controls="contact" aria-selected="false">Lembar 3</a>
                            </li>
                        </ul>

                            <div class="tab-content" id="myTabContent">
                                
                                <div class="tab-pane fade show active" id="lembar1" role="tabpanel" aria-labelledby="home-tab">
                                    
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table-bordered table-wd text-center">
                                            <thead class="text-center border-line">
                                                <tr class="border-line wd">
                                                    <td class="border-line" rowspan="2">No</td>
                                                    <td class="border-line" rowspan="2">Kecamatan</td>
                                                    <td class="border-line" rowspan="2">Nama Sekolah</td>
                                                    <td class="border-line" colspan="4">Saldo Awal 1 Januari xxxx </td>
                                                    <td class="border-line" colspan="5">Penerimaan Dana BOS dari Pusat/Provinsi Tahun xxxx</td>
                                                </tr>
                                                <tr class="border-line">
                                                    <td class="border-line">Buku Kas Umum </td> 
                                                    <td class="border-line">Kas Tunai</td>
                                                    <td class="border-line">Saldo Rekening Bank</td>
                                                    <td class="border-line">Jumlah</td>

                                                    
                                                    <td class="border-line">Triwulan I </td> 
                                                    <td class="border-line">Triwulan II</td>
                                                    <td class="border-line">Triwulan III</td>
                                                    <td class="border-line">Triwulan IV</td>
                                                    <td class="border-line">Jumlah</td>
                                                </tr>
                                            </thead>
                                            <tbody class="border-line sp">
                                                <tr class="border-line">
                                                    <td>a</td>
                                                    <td class="border-line text-left">b</td>
                                                    <td class="border-line text-left"> c</td>
                                                    <td class="border-line" > d</td>
                                                    <td class="border-line" > e</td>
                                                    <td class="border-line" > f </td>
                                                    <td class="border-line" > g (e+f)</td>
                                                    <td class="border-line" > h</td>
                                                    <td class="border-line" > i</td>
                                                    <td class="border-line" > j</td>
                                                    <td class="border-line" > k</td>
                                                    <td class="border-line" > l (h+i+j+k)</td>
                                                </tr>

                                                <tr class="border-line">
                                                    <td>1</td>
                                                    <td class="border-line text-left">Banyuwangi</td>
                                                    <td class="border-line text-left"> SDN 1 PURWOREO</td>
                                                    <td class="border-line" > 2</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 2</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                
                                <div class="tab-pane fade" id="lembar2" role="tabpanel" aria-labelledby="profile-tab">
                                    
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table-bordered table-wd text-center">
                                            <thead class="text-center border-line">
                                                <tr class="border-line wd">
                                                    <td class="border-line" colspan="4">PENERIMAAN SELAIN TRANSFER  PUSAT/PROVINSI UNTUK BOS TAHUN XXXX</td>
                                                    <td class="border-line" colspan="2">PENERIMAAN SELAIN BOS DIREKENING</td>
                                                    <td class="border-line" rowspan="2">JUMLAH PENERIMAAN TAHUN XXXX</td>
                                                    <td class="border-line" colspan="8">PENGUNAAN (BELANJA) BOS TAHUN XXXX </td>
                                                </tr>
                                                <tr class="border-line">
                                                    <td class="border-line">BUNGA REKENING </td> 
                                                    <td class="border-line">LAINNYA</td>
                                                    <td class="border-line">KETERANGAN</td>
                                                    <td class="border-line">JUMLAH</td>
                                                    
                                                    <td class="border-line">NILAI</td>
                                                    <td class="border-line">KETERANGAN</td>

                                                    
                                                    <td class="border-line">BEBAN PEGAWAI</td> 
                                                    <td class="border-line">BEBAN PERSEDIAAN </td>
                                                    <td class="border-line">BEBAN JASA </td>
                                                    <td class="border-line">BEBAN PEMELIHARAAN</td>
                                                    <td class="border-line">BEBAN PERJALANAN DINAS</td>
                                                    <td class="border-line">BEBAN ASET</td>
                                                    <td class="border-line">BEBAN LAINNYA</td>
                                                    <td class="border-line">JUMLAH</td>
                                                </tr>
                                            </thead>
                                            <tbody class="border-line sp">
                                                <tr class="border-line">
                                                    <td>m</td>
                                                    <td class="border-line text-left">n</td>
                                                    <td class="border-line text-left"> o</td>
                                                    <td class="border-line" > p (m+n)</td>
                                                    <td class="border-line" > q</td>
                                                    <td class="border-line" > r </td>
                                                    <td class="border-line" > s (l+p+q)</td>
                                                    <td class="border-line" > t</td>
                                                    <td class="border-line" > u</td>
                                                    <td class="border-line" > v</td>
                                                    <td class="border-line" > w</td>
                                                    <td class="border-line" > x </td>
                                                    <td class="border-line" > y </td>
                                                    <td class="border-line" > z </td>
                                                    <td class="border-line" > aa </td>
                                                </tr>

                                                <tr class="border-line">
                                                    <td>1</td>
                                                    <td class="border-line text-left">0</td>
                                                    <td class="border-line text-left"> 0</td>
                                                    <td class="border-line" > 2</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 2</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                
                                <div class="tab-pane fade" id="lembar3" role="tabpanel" aria-labelledby="contact-tab">

                                    <br>
                                    <div class="table-responsive">
                                        <table class="table-bordered table-wd text-center">
                                            <thead class="text-center border-line">
                                                <tr class="border-line wd">
                                                    <td class="border-line" colspan="2">PENGEMBALIAN KELEBIHAN/SISA DANA BOS TAHUN XXXX </td>
                                                    <td class="border-line" colspan="2">PENGELUARAN DANA SELAIN DANA BOS </td>
                                                    <td class="border-line" rowspan="2">SALDO AKHIR XXXX</td>
                                                    <td class="border-line" colspan="2">SALDO AKHIR TAHUN XXXX TERDIRI DARI </td>
                                                 </tr>
                                                <tr class="border-line">
                                                    <td class="border-line">DANA BOS TAHUN SEBELUMNYA </td> 
                                                    <td class="border-line">DANA BOS TAHUN XXXX</td>
                                                    <td class="border-line">NILAI</td>
                                                    <td class="border-line">KETERANGAN</td>

                                                    
                                                    <td class="border-line">KAS TUNAI </td> 
                                                    <td class="border-line">SALDO REK BANK</td>
                                                </tr>
                                            </thead>
                                            <tbody class="border-line sp">
                                                <tr class="border-line">
                                                    <td>ab</td>
                                                    <td class="border-line text-left">ac</td>
                                                    <td class="border-line text-left">ad</td>
                                                    <td class="border-line" > ae</td>
                                                    <td class="border-line" > af (g+s-aa-ab-ac-ad)</td>
                                                    <td class="border-line" > ag </td>
                                                    <td class="border-line" > ah </td>
                                                </tr>

                                                <tr class="border-line">
                                                    <td>1</td>
                                                    <td class="border-line text-left">0</td>
                                                    <td class="border-line text-left"> 0</td>
                                                    <td class="border-line" > 2</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                    <td class="border-line" > 3</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            
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