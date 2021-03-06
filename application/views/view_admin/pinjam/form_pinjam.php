<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Barang
      <small>PEMINJAMAN</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-table"></i> Data Barang</a></li>
      <li class="active">Peminjaman Barang</li>
    </ol>
  </section>
  <?php
   $id_pinjam    = "";
   $kode_barang  = "";
   $nama_barang  = "";
   $waktu_pinjam = "";
   $nama       = "";
   $stok       = "";
   $jumlah_pinjam       = "";
   $sisa       = "";
   $status       = "";

   if ($ed =="update") {
     foreach ($sql->result() as $obj) {
	   $id_pinjam	= $obj->id_pinjam;
       $kode_barang = $obj->kode_barang;
       $nama_barang = $obj->nama_barang;
       $waktu_pinjam = $obj->waktu_pinjam;
       $nama        = $obj->nama;
	   $stok        = $obj->stok;
	   $jumlah_pinjam        = $obj->nama;
	   $sisa        = $obj->sisa;
	   $status        = $obj->status;
     }
   }

    ?>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
            <div class="box-body">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Barang</h3>
            </div>
            <form role="form" action="<?= base_url('index.php/pinjam')."/$ed"?>" method="POST" >
              <div class="box-body">
			  
                <div class=" form-group col-md-4">
				<label>id pinjam</label>
                  <input type="text" name="id_pinjam" value="<?php echo $id_pinjam; ?>" class=" form-control" placeholder="No. Id">
                </div>
				
				<div class=" form-group col-md-4">
                  <label>Kode Barang</label>
                  <input type="text" name="kode_barang" value="<?php echo $kode_barang; ?>" class=" form-control" placeholder="Kode Barang">
                </div>

                <div class="form-group col-md-8 ">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" value="<?php echo $nama_barang; ?>" class="form-control" placeholder="Nama Barang">
                </div>
               
			   <div class="form-group col-md-4  ">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control" placeholder="Nama Peminjam">
                </div>
				
				<div class="form-group col-md-4  ">
                  <label>Stok</label>
                  <input type="text" name="stok" value="<?php echo $stok; ?>" class="form-control" placeholder="Stok Barang">
                </div>

				<div class="form-group col-md-4  ">
                  <label>Jumlah Pinjam</label>
                  <input type="text" name="jumlah_pinjam" value="<?php echo $jumlah_pinjam; ?>" class="form-control" placeholder="Jumlah Pinjam">
                </div>
				
				<div class="form-group col-md-4  ">
                  <label>Sisa</label>
                  <input type="text" name="sisa" value="<?php echo $sisa; ?>" class="form-control" placeholder="Sisa Barang">
                </div>
				
				<div class="form-group col-md-4 ">
                <label>Status</label>
                <select type="text" name="status" value="<?php echo $status; ?>" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">

                  <option>Sedang Dipinjam</option>
                  <option>Sudah Dikembalikan</option>
                  </select>

              </div>
              </div>
            </div>

              <div class="box-footer">
                &nbsp;&nbsp;&nbsp;
                <!-- <button href="<?php echo base_url(); ?>index.php/pinjam" class="btn btn-flat btn-danger"  >BATAL</button> -->
                <button type="submit" class="btn btn-flat btn-primary">SIMPAN</button>
              </div>
            </form>
          </div>
        </div>
    </div>
  </section>
</div>
