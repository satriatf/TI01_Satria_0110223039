<?php

require_once 'dbkoneksi.php';

$_idx = null;

if(isset($_GET['id_unit_kerja'])) {
  $_idx = isset($_GET['id_unit_kerja']) ? $_GET['id_unit_kerja'] : '';
}

if($_idx) {
    $sql = "SELECT * FROM unit_kerja WHERE id_unit_kerja=?";
    $query = $dbh->prepare($sql);
    $query->execute([$_idx]);
    $row = $query->fetch();
    $tombol = "Ubah";
} else {
    $tombol = "Tambah";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Unit Kerja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a href="index.php" class="navbar-brand p-0">
        <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>Puskesmas</h1>
      </a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a href="index.php" class="nav-link">Home</a>
          <a class="nav-link disabled" aria-disabled="true">Form</a>
        </div>
      </div>
    </div>
  </nav>
  <h3 class="container mt-5" >Form Input Data Unit Kerja</h3>
    <fieldset class="container mt-5 p-3">
      <form action="proses_unit_kerja.php" method="post">
      <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Nama Unit Kerja" type="text" class="form-control" value="<?= isset($row['nama']) ? $row['nama'] : '' ?>"> 
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" class="btn btn-primary" value="<?=$tombol?>" name="proses"/>
    <input type="submit" class="btn btn-danger" value="Batal" name="proses"/>
    </div>
  </div>
  <?php
  if($_idx){
    echo "<input type='hidden' name='idx' value='".$_idx."'>";
  }
  ?>
  </form>
</fieldset>
</body>
</html>


