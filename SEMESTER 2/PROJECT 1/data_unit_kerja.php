<?php

require_once 'dbkoneksi.php';
// show data
$sql = "SELECT * FROM unit_kerja";
$query = $dbh->query($sql);
?>

<!DOCTYPE html> 
<html lang="en">
<head> 
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Puskesmas</title>
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="assets/plugin/fontawesome-free/css/all.min.css">
	<!-- IonIcons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<!-- Theme style -->
	<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-footer-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="img/puskesmas.jpg" alt="puskesmas Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Puskesmas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Satria Tri Ferdiansyah</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_pasien.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pasien
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_periksa.php" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Periksa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_paramedik.php" class="nav-link">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Paramedik
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_unit_kerja.php" class="nav-link">
              <i class="nav-icon fas fa-map-marker-alt"></i>
              <p>
                Unit Kerja
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_kelurahan.php" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Kelurahan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="form_unit_kerja.php" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Tambah
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Unit Kerja</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Unit Kerja</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Unit Kerja</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Unit Kerja</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $nomor = 1;
                  foreach($query as $row){
                    ?>
                  <tr>
                    <td><?=$row["id_unit_kerja"]?></td>
                    <td><?=$row["nama"]?></td>
                    <td>
                      <a href="form_unit_kerja.php?id_unit_kerja=<?php echo $row['id_unit_kerja']; ?> "><i class="fas fa-pencil-alt"></i>Update I</a>
                      <a href="proses_unit_kerja.php?idx=<?php echo $row['id_unit_kerja']; ?>&proses=Hapus"><i class="far fa-trash-alt"></i>Delete</a>
                    </td>
                  </tr>
                  <?php
                  $nomor++;
                  }
                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="#">Puskesmas</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->
	<!-- jQuery -->
	<script src="assets/plugin/jquery/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE -->
	<script src="assets/dist/js/adminlte.js"></script>
	<!-- OPTIONAL SCRIPTS -->
	<script src="assets/plugin/chart.js/Chart.min.css"></script>
</body>
</html>
