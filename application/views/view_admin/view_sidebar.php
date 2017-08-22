<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>admin@admin.com</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>

      <li><a href="<?php echo base_url(); ?>index.php/dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Data Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url(); ?>index.php/pengguna"><i class="fa fa-user"></i>Pengguna</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/pengguna_grup"><i class="fa fa-book"></i>Group Pengguna</a></li>
        </ul>
      </li> -->
      <!-- <li><a href="<?php echo base_url(); ?>index.php/transaksi"><i class="fa fa-refresh"></i> <span>Transaksi</span></a></li> -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Data Barang</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
		  <li><a href="<?php echo base_url(); ?>index.php/pinjam"><i class="fa fa-gears"></i> Peminjaman Barang </a></li>
		  <li><a href="<?php echo base_url(); ?>index.php/stok"><i class="fa fa-gears"></i> Stok Barang </a></li>
          <li><a href="<?php echo base_url(); ?>index.php/lab"><i class="fa fa-gears"></i> LAB I (Satu) </a></li>
          <li><a href="<?php echo base_url(); ?>index.php/lab_dua"><i class="fa fa-server"></i> LAB II (Dua)</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/lab_tiga"><i class="fa fa-upload"></i> LAB III (Tiga)</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/lab_kom_satu"><i class="fa fa-gears"></i> LAB Kom I </a></li>
          <li><a href="<?php echo base_url(); ?>index.php/lab_kom_dua"><i class="fa fa-server"></i> LAB Kom II</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/ruang_admin"><i class="fa fa-upload"></i> Ruang Admin</a></li>
        </ul>
      </li>
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-print"></i> <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url(); ?>index.php/lab"><i class="fa fa-gears"></i>Baik </a></li>
          <li><a href="<?php echo base_url(); ?>index.php/lab_dua"><i class="fa fa-server"></i>Kurang Baik</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/lab_tiga"><i class="fa fa-upload"></i>Rusak</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/lab_kom_satu"><i class="fa fa-gears"></i>Hilang</a></li>
        </ul>
      </li> -->
      <li><a href="<?php echo base_url(); ?>index.php/dokumentasi"><i class="fa fa-book"></i> <span>Dokumentasi</span></a></li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
