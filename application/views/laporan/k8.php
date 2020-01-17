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
            font-size: 12px;
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
                            <h3 class="card-title">Rekapitulasi Realisasi Pengunaan Dana BOS (K-8)</h3>
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
                                <button class="btn btn-primary" type="submit"> 
                                <i class="fas fa-search"> </i>
                            </div>
                        </form>
                            
                           
                        <div class="row"> 
                            <table style=" width: 100%; border:none; ">
                                <tbody class="text-center">
                                    <tr>
                                        <td> REKAPITULASI REALISASI PENGGUNAAN DANA BOS</td>
                                    </tr>

                                    <tr>
                                        <td> PERIODE TANGGAL XX XXXX SD XX XXXX 2020 (Triwulan 1)  </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                           <br>

                            <div class="row">
                                <table class="table-bordered table-wd text-center">
                                    <thead class="text-center border-line">
                                        <tr class="border-line wd">
                                            <td class="border-line" rowspan="2">No</td>
                                            <td class="border-line" rowspan="2" colspan="3">Program & Kegiatan</td>
                                            <td class="border-line" colspan="12">Penggunaan Dana BOS Tahun xxxx (Triwulan 1)</td>
                                        </tr>
                                        <tr class="border-line">
                                            <td class="border-line">Penembangan Perpustakaan </td> 
                                            <td class="border-line">Penerimaan Peserta Didik Baru </td>
                                            <td class="border-line">Kegiatan Pembelajaran & Ekskul </td>
                                            <td class="border-line">Kegiatan Evaluasi Pembelajaran  </td>
                                            <td class="border-line">Pengelolaan Sekolah </td>
                                            <td class="border-line">Pengembangan Profesi Guru </td>
                                            <td class="border-line">Langganan Daya dan Jasa </td>
                                            <td class="border-line">Pemeliharaan Perawatan Sarana & Prasarana Sekolah </td>
                                            <td class="border-line">Pembayaran Honor </td>
                                            <td class="border-line">Pembeliaan/Perawatan Alat Multimedia </td>
                                            <td class="border-line">Biaya Lainnya </td>
                                            <td class="border-line">Jumlah </td>
                                        </tr>
                                    </thead>
                                    <tbody class="border-line sp">
                                        <tr class="border-line">
                                            <td>1</td>
                                            <td class="border-line text-left" colspan="3">Program</td>
                                            <td class="border-line" > 1</td>
                                            <td class="border-line" > 2</td>
                                            <td class="border-line" > 3</td>
                                            <td class="border-line" > 3</td>
                                            <td class="border-line" > 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                        </tr>
                                        <tr class="border-line">
                                            <td class="border-line"></td>
                                            <td class="border-line">1.1</td>
                                            <td class="border-line text-left" colspan="2"> Kegiatan</td>
                                            <td class="border-line"> 2</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                        </tr>
                                        <tr class="border-line">
                                            <td class="border-line"></td>
                                            <td class="border-line"> </td>
                                            <td class="border-line">1.1.1</td>
                                            <td class="border-line text-left" colspan="1"> Kegiatan</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
                                            <td class="border-line"> 3</td>
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
                                    <tbody >

                                        <tr>
                                            <td> Kepala Sekolah</td>
                                            <td> Bendahara </td>
                                        </tr>

                                        <tr style="height: 100px;"> </tr>

                                        <tr>
                                            <td> BIBIB PRAYOGO WAGIONO </td>
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