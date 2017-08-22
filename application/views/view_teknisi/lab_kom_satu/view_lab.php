<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Barang
      <small>LAB I</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-table"></i> Data Barang</a></li>
      <li class="active">LAB I</li>
    </ol>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">Data Barang LAB I</h3>
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
   <!-- <a class='btn btn-flat btn-primary disabled' href="<?=base_url()?>index.php/lab_komsatu_laboran/add">Tambah Barang</a> -->
  </div>
</div>
              </div>
                <div class="col-xs-18">
                          <div class="content table-responsive table-full-width ">
            <table class="table table-responsive table-bordered ">
                        <thead>
                        <tr role="row">
                          <!-- <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 214px;">No</th> -->
                          <th>Kode Barang</th>
                          <th>Nama Barang</th>
                          <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Lokasi: activate to sort column ascending" style="width: 186px;">Lokasi</th> -->
                          <th>Merk</th>
                          <th>Seri/Type</th>
                          <th>Jumlah</th>
                          <th>Tahun</th>
                          <th>Asal Barang</th>
                          <th>Keadaan</th>
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
                          <td><?php echo $obj['kode_barang'] ?></td>
                          <td><?php echo $obj['nama_barang'] ?></td>
                          <!-- <td><?php echo $obj['lokasi'] ?></td> -->
                          <td><?php echo $obj['merk'] ?></td>
                          <td><?php echo $obj['seri'] ?></td>
                          <td><?php echo $obj['jumlah'] ?></td>
                          <td><?php echo $obj['tahun'] ?></td>
                          <td><?php echo $obj['asal_barang'] ?></td>
                          <td><?php echo $obj['keadaan'] ?></td>
                          <td>
                            <a href="<?=base_url(); ?>index.php/lab_komsatu_teknisi/ubah/<?php echo $obj['kode_barang']; ?>"class='btn btn-xs btn-flat btn-info'>Ubah</a>
          					       <!-- <a href="javascript:if(confirm('Apakah Anda Yakin Menghapus Data ini  ?')){document.location='<?php echo base_url(); ?>index.php/lab_kom_satu/hapus/<?php echo $obj['kode_barang']; ?>';}" class='btn btn-flat btn-xs btn-danger disabled'>Hapus</a> -->
                          </td>
                        </tr>
                        </tbody>

        <?php
          }
        ?>
                      </table>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-5">

                    </div>
                    <!-- <div class="col-sm-7">
                      <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination">
                          <li class="paginate_button previous disabled" id="example1_previous">
                            <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                          </li>
                        <li class="paginate_button active">
                          <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
                        </li>
                        <li class="paginate_button ">
                          <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
                        </li>
                        <li class="paginate_button next" id="example1_next">
                          <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
                        </li>
                      </ul>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
</div>
