<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">LIST PEMESAN TIKET</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>home/index">Beranda</a></li>
                        <li class="breadcrumb-item active">Daftar Pemesan Tiket</li>
                    </ol>
                </div>
            </div>
        </div>  
    </div>


    <section class = "content"><center>
        <?php echo $this->session->flashdata('message'); ?>
    
        <div class="dropdown btn-group">
            <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-print"></i>  Print Laporan
                    <span class="caret"></span>
                </button>
                    <ul class="dropdown-menu inline" type="button" aria-labelledby="dropdownMenu1">
                        <li class="dropdown-item"><a href="<?php echo base_url('apar/print_apar') ?>"><i class="fas fa-file-pdf"></i> Print Semua Data</a></li>
                        <li class="dropdown-item"><a href="<?php echo base_url('apar/cetak_apar') ?>"><i class="fas fa-file-pdf"></i> Pilihan Lain</a></li>
                    </ul>
            <?php } ?>
        </div><br><br>
    
            <div class="row">
                <div class="col-md">
                    <form action="<?php echo base_url('apar/index') ; ?>" method="POST">
                        <div class="input-group mb-3">
                        <input class="form-control" type="search" name="keyword" placeholder="Search. . ." aria-label="Search" autocomplete="off">
                            <div class="input-group-append">
                                <input class="btn btn-dark" type="submit" name="submit"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </center><br>
    
        <div class="table-responsive">
            <table class="table table-striped text-center">  
                <tr class="table-secondary">
                    <th rowspan="2" style="width: 10px">No.</th>
                    <th rowspan="2" >Nama Lengkap</th>
                    <th rowspan="2" >Jenis Konser</th>
                    <th rowspan="2" >Tanggal</th>
                    <th rowspan="2" >Keterangan</th>
                <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                    <th rowspan="2" colspan="8" >Action</th>
                <?php } ?>
                </tr>

                <?php foreach ($apar as $apr) : ?>
                <tr>
                    <td><?php echo ++$start ?>.</td>
                    <td><?php echo $apr['nama_lengkap'] ?></td>
                    <td><?php echo $apr['tiket_konser'] ?></td>
                    <td><?php echo $apr['tanggal'] ?></td>
                    <td><?php echo $apr['keterangan'] ?></td>
                    <td><?php echo anchor('apar/detail_apar/'.$apr['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                <?php if ($_SESSION['hak_akses'] == 'O' or $_SESSION['hak_akses'] == 'A' ) { ?>
                    <td><?php echo anchor('apar/edit_apar/'.$apr['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                    <td onclick="javascript: return confirm('Anda Yakin Untuk Meng - HAPUS Data Ini ?')"><?php echo anchor('apar/hapus/'.$apr['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <?php } ?>
                </tr>
                <?php endforeach; ?>

            <?php if (empty($apar)) : ?>
                <tr>
                    <td colspan="10">
                        <div class="alert alert-danger" role="alert"><center>
                            <h4>Maaf Data Tidak ditemukan!</h4></center>
                        </div>
                    </td>
                </tr>
            <?php endif ; ?>
            </table>
        </div> <br>
        
            <table class="table text-center">  
                <tr>
                    <th class="h5 right">Jumlah Data :  <span class="badge badge-warning center"><b> <?php echo $total_rows ; ?></b></span></th>
                </tr>
            </table>
            
                <div class="row">
                    <div class="col">
                        <?php echo $this->pagination->create_links() ; ?>
                    </div>
                </div>
            
                <a id="back-to-top" href="#" class="btn btn-dark back-to-top" role="button" aria-label="Scroll to top">
                    <i class="fas fa-chevron-up"></i>
                </a>
    </section>

    
    </div>
</div>