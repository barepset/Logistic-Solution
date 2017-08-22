<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Barang
      <small>LAB I</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Data Barang</a></li>
      <li class="active">LAB I</li>
    </ol>
  </section>
  <?php
   $kode_barang  = "";
   $nama_barang  = "";
   $merk         = "";
   $seri         = "";
   $max          = "";
  //  $kerusakan=$max-$jumlah;
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
       $max         = $obj->max;
        // $kerusakan = $obj->kerusakan;
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
            <!-- Button trigger modal -->

            <form role="form" action="<?= base_url('index.php/lab')."/$ed"?>" method="POST" >
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
                <div class="form-group col-md-4 ">
                  <label>Kebutuhan Max.</label>
                  <input type="text" name="max" value="<?php echo $max; ?>" class="form-control" placeholder="30">
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
                <div class="form-group col-md-4 ">
                  <label>Jumlah Barang</label>
                    <input type="text" name="jumlah" value="<?php echo $jumlah; ?>" class="form-control" placeholder="100">
                    <input type="button" class="btn btn-success btn-flat" value="+" onclick="javascript:this.form.jumlah.value++">
                    <input type="button" class="btn btn-warning btn-flat"  value="-"
                    onclick="javascript:this.form.jumlah.value--" data-toggle="modal" data-target="#myModal">
                </div>
            </div>

              <div class="box-footer">
                &nbsp;&nbsp;&nbsp;
                <!-- <button href="<?php base_url(); ?>index.php/lab" class="btn btn-flat btn-danger"  >BATAL</button> -->
                <button type="submit" class="btn btn-flat btn-primary">SIMPAN</button>
              </div>
            </form>
          </div>
        </div>
    </div>
  </section>
</div>


<div class="form-group col-md-6">
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Pindah Barang</button> -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">


      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Pemindahan Barang</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="<?= base_url('index.php/lab_rusak')."/$ed"?>" method="POST" >

              <div class=" form-group col-md-4">
                <label>Kode Barang</label>
                <input type="text" name="kode_barang" class=" form-control" placeholder="DT001">
              </div>

              <div class="form-group col-md-8 ">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" placeholder="Lemari Kayu">
              </div>

              <div class="form-group col-md-4  ">
                <label>Merk Barang</label>
                <input type="text" name="merk" class="form-control" placeholder="Xiaomi">
              </div>
              <div class="form-group col-md-4 ">
                <label>Seri/Type Barang</label>
                <input type="text" name="seri" class="form-control" placeholder="X-450">
              </div>

              <div class="form-group col-md-4 ">
                <label>Tahun Masuk</label>
                <input type="text" name="tahun" class="form-control" placeholder="2017">
              </div>


              <div class="form-group col-md-4 ">
                <label>Asal Barang</label>
                <input type="text" name="asal_barang" class="form-control" placeholder="Pengadaan">
              </div>

              <div class="form-group col-md-4 ">
              <label>Keadaan</label>
              <select type="text" name="keadaan" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">

                <option>Baik</option>
                <option>Kurang Baik</option>
                <option>Rusak</option>
                <option>Hilang</option>
              </select>

            </div>

              <div class="form-group col-md-4 ">
                <label>Jumlah Barang</label>
                  <input type="text" name="jumlah_barang" class="form-control" placeholder="100">
              </div>

          <!-- </div> -->

            <div class="box-footer">
              &nbsp;&nbsp;&nbsp;
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
