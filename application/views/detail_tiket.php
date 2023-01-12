<div class="content-wrapper">
    <section class="content">

        <br><br><center>
            <h2><strong>DETAIL TIKET</strong></h2>
        <br><br> 

        <table class=" col-11 table table-striped">  
            <tr>
                <th>Nama Lengkap</th>
                    <td><?php echo $detail_apar->nama_apar ?></td>
            </tr>

            <tr>
                <th>Tiket Konser</th>
                    <td><?php echo $detail_apar->tiket_konser ?></td>
            </tr>

            <tr>
                <th>Tanggal Pengecekan</th>
                <td><?php echo $detail_apar->tanggal ?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                    <td><?php echo $detail_apar->keterangan ?></td>
            </tr>

        </table><br>
        </center>
            <center>
                <a href="<?php echo base_url('apar/index') ?>" class="btn btn-primary">KEMBALI</i></a>
            </center>
            <br>
    </section>
</div>