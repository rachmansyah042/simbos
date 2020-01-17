<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
<style>

        thead tr.wd td:nth-child(1) {
            width : 5%;
        }

        thead tr.wd td:nth-child(2) {
            width : 60%;
        }

        tbody.sp tr td:nth-child(2) {
            width : 5%;
        }

        .table-wd {
            width:100%;
            border: 1px solid black;
            padding: 5px;
        }

        .border-line {
            border: 1px solid black;
            padding: 5px;
        }
        
    </style>
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
                            <h3 class="card-title">Rencana Kegiatan dan Anggaran Sekolah</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            <table> 
                                <tr>
                                    <td>Nama Sekolah </td>
                                    <td style="border-spacing:5px">: </td>
                                    <td> <?= $detail_rkas->sekolah->nama_sekolah ?></td>
                                <tr/>
                                
                                <tr>
                                    <td>Alamat  </td>
                                    <td>: </td>
                                    <td> <?= $detail_rkas->sekolah->alamat ?></td>
                                <tr/>
                                
                                <tr>
                                    <td>Kecamatan </td>
                                    <td>: </td>
                                    <td> <?= $detail_rkas->sekolah->kecamatan ?> </td>
                                <tr/>
                                
                                <tr>
                                    <td>Tahun Anggaran  </td>
                                    <td>: </td>
                                    <td> <?= $detail_rkas->tahun->tahun ?></td>
                                <tr/>
                            </table>
                           
                           <br>

                            <div class="row">
                                <table class="table-bordered table-wd text-center">
                                    <thead class="text-center border-line">
                                        <tr class="border-line wd">
                                            <td class="border-line" rowspan="2">No</td>
                                            <td class="border-line" rowspan="2" colspan="2">Program & Kegiatan</td>
                                            <td class="border-line" colspan="4">Tribulan</td>
                                            <td class="border-line" rowspan="3">Jumlah</td>
                                        </tr>
                                        <tr class="border-line">
                                            <td class="border-line">Trib. 1</td> 
                                            <td class="border-line">Trib. 2</td>
                                            <td class="border-line">Trib. 3</td>
                                            <td class="border-line">Trib. 4</td>
                                        </tr>
                                    </thead>
                                    <tbody class="border-line sp">
                                        <tr class="border-line">
                                            <td>1</td>
                                            <td class="border-line text-left" colspan="2">Program</td>
                                            <td class="border-line" > 1</td>
                                            <td class="border-line" > 2</td>
                                            <td class="border-line" > 3</td>
                                            <td class="border-line" > 3</td>
                                            <td class="border-line" > 3</td>
                                        </tr>
                                        <tr class="border-line">
                                            <td class="border-line"></td>
                                            <td class="border-line">1</td>
                                            <td class="border-line text-left"> Kegiatan</td>
                                            <td class="border-line"> 2</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                        </tr>
                                        <tr class="border-line">
                                            <td class="border-line"></td>
                                            <td class="border-line">1</td>
                                            <td class="border-line text-left"> Kegiatan</td>
                                            <td class="border-line"> 2</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                        </tr>
                                        <tr class="border-line">
                                            <td class="border-line"></td>
                                            <td class="border-line">1</td>
                                            <td class="border-line text-left"> Kegiatan</td>
                                            <td class="border-line"> 2</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <br>

                            <div class="row"> 
                                <table style=" width: 100%; border:none; ">
                                    <tbody class="text-center">
                                        <tr>
                                            <td colspan="2"> Mengetahui, </td>
                                            <td> Banyuwangi ..., ..., .... </td>
                                        </tr>

                                        <tr>
                                            <td> Komite Sekolah </td>
                                            <td> Kepala Sekolah</td>
                                            <td> Bendahara </td>
                                        </tr>

                                        <tr style="height: 100px;"> </tr>

                                        <tr>
                                            <td> BIBIB PRAYOGO WAGIONO </td>
                                            <td> SRI WAHYUNINGSIH, S.PD</td>
                                            <td> SRI WAHYUNINGSIH, S.PD </td>
                                        </tr>
                                    </tbody>
                                </table>
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