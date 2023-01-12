<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kUTh Apps | Print Laporan Kondisi APAR</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/UT.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.css">

</head>
<body>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Cetak Laporan Kondisi APAR</li>
                        </ol>
                    </div>
                </div><br>
            </div>
        </section>

        <div class="container">
            <h2 align="center"><b>LAPORAN KONDISI ALAT PEMADAM API RINGAN (APAR)</b></h2>
            <h3 align="center">PT. United Tractors, Tbk - Cabang Makassar</h3>
            <br>
            <section class="content">
        </div>    

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">By Tanggal</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                <div class="card-body">
            <form action="<?php echo base_url(); ?>apar/filter" method="post" target="_blank">
                
                <input type="hidden" name="nilaifilter" class="form-control" value="1">
                    
                <div class="form-group">
                    <label>Dari Tanggal </label>
                    <input type="date" name="tanggalawal" value=""  class="form-control">
                </div>

                <div class="form-group">
                    <label>Sampai pada Tanggal </label>
                    <input type="date" name="tanggalakhir" value=""  class="form-control">
                </div><br>

                <button type="submit" class="btn btn-danger"><i class="fas fa-print"> <b>Print</b></i></button>
            </form>
                </div>
                </div>
            </div>

    <!-- BERDASARKAN BULAN -->
    <div class="col-md-4">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">By Bulan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url(); ?>apar/filter" method="post" target="_blank">

                <input type="hidden" name="nilaifilter" class="form-control" value="2">
                    <div class="form-group">
                        <label>Pilih Tahun</label>
                            <select name="tahun1" class="form-control" value="" required="">
                                <option> </option>
                                <?php foreach ($tahun as $thn): ?>
                                    <option value="<?php echo $thn->tahun ?>"><?php echo $thn->tahun ?></option>
                                <?php endforeach ?>
                            </select>
                    </div>

                <div class="form-group">
                        <label>Bulan Awal</label>
                            <select name="bulanawal" class="form-control" value="" required="">
                                <option value=""></option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label>Bulan Bulan</label>
                            <select name="bulanakhir" class="form-control" value="" required="">
                                <option value=""></option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                    </div>

                <button type="submit" class="btn btn-danger"><i class="fas fa-print"> <b>Print</b></i></button>
                </form>
            </div>
        </div>
        </div>

    <!-- BERDASARKAN TAHUN -->
            <div class="col-md-4">
            <div class="card card-warning">
                <div class="card-header">
                <h3 class="card-title">By Tahun</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url(); ?>apar/filter" method="post" target="_blank">
                            
                        <input type="hidden" name="nilaifilter" class="form-control" value="3">
                            <div class="form-group">
                                <label>Pilih Tahun</label>
                                    <select name="tahun2" class="form-control" value="" required="">
                                        <option> </option>
                                        <?php foreach ($tahun as $thn): ?>
                                            <option value="<?php echo $thn->tahun ?>"><?php echo $thn->tahun ?></option>                                        <?php endforeach ?>
                                    </select>
                            </div>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-print"> <b> Print</b></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>