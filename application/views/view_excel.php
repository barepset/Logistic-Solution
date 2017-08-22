<!-- <?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=Laporan.xls");

header("Pragma: no-cache");

header("Expires: 0");

?> -->

<table border="1" width="100%">
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

              <td><?php echo $obj['merk'] ?></td>
              <td><?php echo $obj['seri'] ?></td>
              <td><?php echo $obj['jumlah'] ?></td>
              <td><?php echo $obj['tahun'] ?></td>
              <td><?php echo $obj['asal_barang'] ?></td>
              <td><?php echo $obj['keadaan'] ?></td>

            </tr>
            </tbody>

<?php
}
?>
          </table>
