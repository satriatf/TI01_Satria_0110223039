<?php

require_once 'dbkoneksi.php';
// show data
$sql = "SELECT *, 
pasien.nama AS nama_pasien, dokter.nama AS nama_dokter FROM pasien JOIN periksa ON (periksa.pasien_id = pasien.id_pasien) JOIN paramedik AS dokter ON (periksa.dokter_id = dokter.id_paramedik)";

$query = $dbh->query($sql);
?>

<?php
session_start();
if(!$_SESSION['email']) {
    header('Location: index.html');
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Puskesmas Harapan</title>
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
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item">
        <a class="nav-link" id="navbar" href="#" role="button" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?php
          echo $_SESSION['nama'];
        ?></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="img/puskesmas.jpg" alt="puskesmas Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Puskesmas Harapan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
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
            <a href="form_periksa.php" class="nav-link">
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
            <h1>Data Pemeriksaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Pemeriksaan</li>
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
                <h3 class="card-title">Data Pemeriksaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Periksa</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Tensi</th>
                    <th>Pasien</th>
                    <th>Dokter</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $nomor = 1;
                  foreach($query as $row){
                    ?>
                  <tr>
                    <td><?=$row["id_periksa"]?></td>
                    <td><?=$row["tanggal"]?></td>
                    <td><?=$row["berat"]?></td>
                    <td><?=$row["tinggi"]?></td>
                    <td><?=$row["tensi"]?></td>
                    <td><?=$row["nama_pasien"]?></td>
                    <td><?=$row["nama_dokter"]?></td>
                    <td><?=$row["keterangan"]?></td>
                    <td>
                      <a href="form_periksa.php?id_periksa=<?php echo $row['id_periksa']; ?> "><i class="fas fa-pencil-alt"></i>Update I</a>
                      <a href="proses_periksa.php?idx=<?php echo $row['id_periksa']; ?>&proses=Hapus"><i class="far fa-trash-alt"></i>Delete</a>
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
    <div class="footer-info">
      <p>
        &copy; <span>2024</span> Hak Cipta Dilindungi Oleh Puskesmas Harapan
      </p>
    </div>
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
