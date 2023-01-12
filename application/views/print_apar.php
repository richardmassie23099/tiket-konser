<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agen X | Print Tiket Konser</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/concert.png">
    
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
    <center>
        <table class="table">
            <thead>
                <tr>
                    <td><img src="<?php echo base_url() ?>assets/dist/img/concert.png" alt="" class="brand-image  elevation-0" width="150px" height="150px"></td>
                    <td>
                        <center>
                        <h2>TIKET KONSER</h2>
                        <h5><i>Managed by Agen X</i></h5>
                        </center>
                    </td>
                    <td colspan="5"><hr></td>
                </tr>
            </thead>
        </table>
    </center> <br>
    
    <table class="table text-center table-bordered">  
        <tr>
            <th rowspan="2" style="width: 10px">No.</th>
            <th rowspan="2" >Nama Lengkap</th>
            <th colspan="4" >Jenis Konser</th>
            <th rowspan="2" >Tanggal</th>
            <th rowspan="2" >Keterangan</th>
        </tr>

        <?php
            $no = 1;
            foreach ($apar as $apr) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $apr->nama_lengkap ?></td>
                <td><?php echo $apr->tiket_konser ?></td>
                <td><?php echo $apr->tanggal ?></td>
                <td><?php echo $apr->keterangan ?></td>
            </tr>
        <?php endforeach; ?>
    </table> <br><br><br>
    
    <script type="text/javascript">
        window.print() ;
    </script>

</body>
</html>