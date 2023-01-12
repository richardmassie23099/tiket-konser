<div class="content-wrapper">
    <section class="content">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12">
        <br><center>
            <h2><u><strong>EDIT TIKET KONSER</strong></u></h2>
        <br><br> </center>
        <?php foreach ($apar as $apr)  { ?>
            <form action="<?php echo base_url().'apar/update' ; ?>" method="post">
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $apr->id ?>">
                        <input type="date" name="tanggal" value="<?php echo $apr->nama_lengkap ?>"  class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Konser</label>
                    <div class="col-sm-10">
                        <select name="nama_apar" class="form-control">
                            <option value="APAR - 01"<?php echo ($apr->tiket_konser == "KONSER - 01")? "selected=\"on\"" : "" ?>>KONSER - 01</option>
                            <option value="APAR - 02"<?php echo ($apr->tiket_konser == "KONSER - 02")? "selected=\"on\"" : "" ?>>KONSER - 02</option>
                            <option value="APAR - 03"<?php echo ($apr->tiket_konser == "KONSER - 03")? "selected=\"on\"" : "" ?>>KONSER - 03</option>
                            <option value="APAR - 04"<?php echo ($apr->tiket_konser == "KONSER - 04")? "selected=\"on\"" : "" ?>>KONSER - 04</option>
                            <option value="APAR - 05"<?php echo ($apr->tiket_konser == "KONSER - 05")? "selected=\"on\"" : "" ?>>KONSER - 05</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Pengisian</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $apr->id ?>">
                        <input type="date" name="tanggal" value="<?php echo $apr->tanggal ?>"  class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" name="keterangan" value="<?php echo $apr->keterangan ?>" class="form-control">
                    </div>
                </div> <br>
                
            <center>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>
                <a href="<?php echo base_url('apar/index') ?>" class="btn btn-warning">KEMBALI</i></a></center>
            </form>
        <?php } ?>
    </section><br>
</div>