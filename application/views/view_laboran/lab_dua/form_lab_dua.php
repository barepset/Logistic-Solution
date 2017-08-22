<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Barang
      <small>LAB II (Dua)</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-table"></i> Data Barang</a></li>
      <li class="active">LAB II (Dua)</li>
    </ol>
  </section>
  <?php
   $kode_barang  = "";
   $nama_barang  = "";

   $merk         = "";
   $seri         = "";
   $jumlah       = "";
   $tahun        = "";
   $asal_barang  = "";
   $keadaan      = "";

   if ($ed =="update") {
     foreach ($sql->result() as $obj) {
       $kode_barang = $obj->kode_barang;
       $nama_barang = $obj->nama_barang;

       $merk        = $obj->merk;
       $seri        = $obj->seri;
       $jumlah      = $obj->jumlah;
       $tahun       = $obj->tahun;
       $asal_barang = $obj->asal_barang;
       $keadaan     = $obj->keadaan;
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
            <form role="form" action="<?= base_url('index.php/lab_dua_laboran')."/$ed"?>" method="POST" >
              <div class="box-body">
                <div class=" form-group col-md-4">
                  <label>Kode Barang</label>
                  <input type="text" name="kode_barang" value="<?php echo $kode_barang; ?>" class=" form-control" placeholder="DT001">
                </div>

                <div class="form-group col-md-8 ">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" value="<?php echo $nama_barang; ?>" class="form-control" placeholder="Lemari Kayu">
                </div>

                <div class="form-group col-md-4  ">
                  <label>Merk Barang</label>
                  <input type="text" name="merk" value="<?php echo $merk; ?>" class="form-control" placeholder="Xiaomi">
                </div>
                <div class="form-group col-md-4 ">
                  <label>Seri/Type Barang</label>
                  <input type="text" name="seri" value="<?php echo $seri; ?>" class="form-control" placeholder="X-450">
                </div>
                <div class="form-group col-md-3 ">
                  <label>Jumlah Barang</label>
                    <input type="text" name="jumlah" value="<?php echo $jumlah; ?>" class="form-control" placeholder="100">
                    <input type="button" class="btn btn-success" value="+" onclick="javascript:this.form.jumlah.value++" disabled="">
                    <input type="button" class="btn btn-warning" value="-" onclick="javascript:this.form.jumlah.value--">
                </div>
                <div class="form-group col-md-4 ">
                  <label>Tahun Masuk</label>
                  <input type="text" name="tahun" value="<?php echo $tahun; ?>" class="form-control" placeholder="2017">
                </div>
                <div class="form-group col-md-4 ">
                  <label>Asal Barang</label>
                  <input type="text" name="asal_barang" value="<?php echo $asal_barang; ?>" class="form-control" placeholder="Pengadaan">
                </div>


                <div class="form-group col-md-4 ">
                <label>Keadaan</label>
                <select type="text" name="keadaan" value="<?php echo $keadaan; ?>" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">

                  <option>Baik</option>
                  <option>Kurang Baik</option>
                  <option>Rusak</option>
                  <option>Hilang</option>
                </select>

              </div>
            </div>

              <div class="box-footer">
                &nbsp;&nbsp;&nbsp;
                <!-- <button href="<?php echo base_url(); ?>index.php/lab" class="btn btn-flat btn-danger"  >BATAL</button> -->
                <button type="submit" class="btn btn-flat btn-primary">SIMPAN</button>
              </div>
            </form>
          </div>
        </div>
    </div>
  </section>
</div>
