<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Barang
      <small>PEMINJAMAN BARANG</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-table"></i> Data Barang</a></li>
      <li class="active">Peminjaman Barang</li>
    </ol>
</section>

<section class="content">
<div class="row">
<div class="col-xs-12">
  <div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">Data Peminjaman Barang</h3>
      </div>
        <div class="box-body">
          <?= $this->session->flashdata('success_msg')?>
          <?= $this->session->flashdata('delete_msg')?>
          <?= $this->session->flashdata('info_msg')?>
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
                  <div class="col-sm-6">
                    <!-- <label>Search&nbsp;:&nbsp;<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label> -->
                  </div>
<div class="col-sm-6">
<div id="example1_filter" class="dataTables_filter">
  <div class="btn-group">
    <!-- <button type="button" class="btn btn-warning btn-flat">Cetak</button>
    <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
       <span class="caret"></span>
       <span class="sr-only">Toggle Dropdown</span>
       <br>
     </button>
  <ul class="dropdown-menu" role="menu">
  <li><a href="#">EXCEL</a></li>
  <li><a href="#">PDF</a></li>
  <li><a href="#">PRINT</a></li>
 </ul> -->
</div>
   <!-- <a class='btn btn-flat btn-primary disabled' href="<?=base_url()?>index.php/pinjam_laboran/add">Tambah Barang</a> -->
  </div>
</div>       </div>
                <div class="row col-md-12">
                          <div class="content table table-responsive table-full-width col-sm-12">
            <table class="table table-bordered table-hover">
                        <thead>
                        <tr role="row">
                          <!-- <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 214px;">No</th> -->
                          <th>Id Pinjam</th>
						  <th>Kode Barang</th>
                          <th>Nama Barang</th>
                          <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Lokasi: activate to sort column ascending" style="width: 186px;">Lokasi</th> -->
                          <th>Waktu Pinjam</th>
                          <th>Nama Peminjam</th>
						  <th>status</th>
                          <th>Aksi</th>
                        </tr>
        <?php
          $no=0;
          foreach ($sql as $obj) {
            $no++;
        ?>
                        </thead>

                        <tbody>
                        <tr role="row" class="odd">
                          <!-- <td class="sorting_1"><?php echo $no; ?></td> -->
                          <td><?php echo $obj['id_pinjam'] ?></td>
                          <td><?php echo $obj['kode_barang'] ?></td>
                          <td><?php echo $obj['nama_barang'] ?></td>
                          <td><?php echo $obj['waktu_pinjam'] ?></td>
                          <td><?php echo $obj['nama'] ?></td>
						  <td><?php echo $obj['status'] ?></td>
                          <td>
                            <a href="<?=base_url(); ?>index.php/pinjam_teknisi/ubah/<?php echo $obj['id_pinjam']; ?>"class='btn btn-xs btn-flat btn-info'>Ubah</a>
          					
                          </td>
                        </tr>
                        </tbody>

        <?php
          }
        ?>
                      </table>
                    </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
</div>
