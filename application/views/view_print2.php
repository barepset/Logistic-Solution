<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Barang Politeknik Harapan Bersama Tegal | Lab Elektro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Politeknik Tegal
          <small class="pull-right">
          <p id="demo"></p>
          <script>
            document.getElementById("demo").innerHTML = Date();
          </script>
          </small>
          <small>Jalan Dewi Sartika No. 02 Tegal</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        Laporan oleh
        <address>
          <strong>Admin Lab Elektro.</strong><br>
          Kampus Dua Poltek Tegal
          Tegal, 52133
          Phone: (0283) 123-5432<br>
          Email: info@poltektegal.ac.id
        </address>
      </div>
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-18">
                <div class="content table-responsive table-full-width ">
  <table class="table table-responsive table-bordered ">
              <thead>
              <tr role="row">
                  <!-- <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 214px;">No</th> -->
              <th>Id Pinjam</th>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Lokasi: activate to sort column ascending" style="width: 186px;">Lokasi</th> -->
              <th>Waktu Pinjam</th>
              <th>Nama</th>

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

              </tr>
              </tbody>

<?php
}
?>
            </table>
          </div>
        </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        <p class="lead">Penting :</p>

        <p class="text-muted well well-sm no-shadow" style="margin-top: 8px;">
          Laporan ini hanya bisa dicetak oleh Admin Utama.
        </p>
      </div>
      <!-- /.col -->

      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
