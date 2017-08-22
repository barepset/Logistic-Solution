<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Barang
      <small>STOK BARANG</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-table"></i>Data Barang</a></li>
      <li class="active">Stok Barang</li>
    </ol>
  </section>
  <?php
   $id_pinjam    = "";
   $nama_barang = "";
   $stok = "";

   if ($ed =="update") {
     foreach ($sql->result() as $obj) {
	   $id_pinjam	= $obj->id_stok;
       $stok = $obj->stok;
       $nama_barang = $obj->nama_barang;
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
            <form role="form" action="<?= base_url('index.php/stok')."/$ed"?>" method="POST" >
              <div class="box-body">
			  
                <div class=" form-group col-md-4">
				<label>id Barang</label>
                  <input type="text" name="id_pinjam" value="<?php echo $id_pinjam; ?>" class=" form-control" placeholder="No. stok">
                </div>
				
                <div class="form-group col-md-8 ">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" value="<?php echo $nama_barang; ?>" class="form-control" placeholder="Nama Barang">
                </div>
               
			   <div class="form-group col-md-4  ">
                  <label>Stok</label>
                  <input type="text" name="stok" value="<?php echo $stok; ?>" class="form-control" placeholder="Stok Barang">
                </div>

              </div>
              </div>
            </div>
			
		

              <div class="box-footer">
                &nbsp;&nbsp;&nbsp;
                <!-- <button href="<?php echo base_url(); ?>index.php/stok" class="btn btn-flat btn-danger"  >BATAL</button> -->
                <button type="submit" class="btn btn-flat btn-primary">SIMPAN</button>
              </div>
            </form>
          </div>
        </div>
    </div>
  </section>
</div>
