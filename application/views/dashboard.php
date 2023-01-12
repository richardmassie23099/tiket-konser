<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agen X | Dashboard</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/concert.png">
    </head>
    <body class="hold-transition layout-top-nav">
    <div class="wrapper">
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
        <a href="#" class="navbar-brand">
            <img src="<?php echo base_url() ?>assets/dist/img/concert.png" class="brand-image img-circle elevation-3" style="opacity: .9">
            <span class="brand-text font-weight-light"><b>TIKET KONSER</b></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3 " id="navbarCollapse">
        <div class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
            <!-- <li class="nav-item">
                <a href="<?php echo base_url() ?>dashboard/index" class="nav-link active">Dashboard</a>
            </li> -->

            <li class="nav-item">
                <h4><a href="<?php echo base_url() ?>home/index" class="nav-link">Login as admin</a></h4>
            </li>

            </ul>
     
    </nav>

    <div class="content-wrapper">
    <br><br><center>
        <img src="<?php echo base_url() ?>assets/dist/img/tiket.png" alt="" class="brand-image elevation-0" width="350px" height="335px" >
    <br><br>
        <h1><strong><b>TIKET KONSER</b></strong></h1>
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal"><strong>KLIK DISINI!</strong></button>
        <!-- <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"></i><strong>KLIK DISINI!</strong></button> -->
    <br> </center>
</div>
    <footer class="main-footer text-center">
        <strong>Copyright &copy; 2023</strong> All rights reserved.
    </footer>
    </div>

    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM PEMESANAN TIKET</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <div class="modal-body">
            <?php echo form_open_multipart('apar/tambah_aksi') ; ?>
                
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 float-sm-left pt-0">Nama Lengkap</label>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last name">
                        </div>
                 </div>
                            
                <!-- <div class="form-group row">
                    <label class="col-form-label col-sm-2 float-sm-left pt-0">Jenis Kelamin</label>
                        <div class="form-check form-check-inline col-md-8">
                            <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                </div> -->

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pilih Tiket</label>
                    <div class="col-sm-10">
                        <select name="nama_apar" class="form-control">
                            <option>-- Pilih Konser --</option>
                            <option>KONSER - 01</option>
                            <option>KONSER - 02</option>
                            <option>KONSER - 03</option>
                            <option>KONSER - 04</option>
                            <option>KONSER - 05</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" name="keterangan" class="form-control" placeholder="Tambah Keterangan Jika ada">
                    </div>
                </div>
                <br>
            
            <center>
                <button type="SUBMIT" class="btn btn-primary">PESAN</button>
                <button type="RESET" class="btn btn-danger" data-dismiss="modal">RESET</button>
            </center>
            <?php form_close() ; ?>
        </div>
        </div>
    </div>
