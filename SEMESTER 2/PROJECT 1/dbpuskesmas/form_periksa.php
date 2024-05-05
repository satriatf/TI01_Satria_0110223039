<?php

require_once 'dbkoneksi.php';

$_idx = null;

if(isset($_GET['id_periksa'])) {
  $_idx = isset($_GET['id_periksa']) ? $_GET['id_periksa'] : '';
}

if($_idx) {
    $sql = "SELECT * FROM periksa WHERE id_periksa=?";
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
    <title>Form Periksa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a href="index.php" class="navbar-brand p-0">
        <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>Puskesmas Harapan</h1>
      </a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a href="index.php" class="nav-link">Home</a>
          <a class="nav-link disabled" aria-disabled="true">Form</a>
        </div>
      </div>
    </div>
  </nav>
  <h3 class="container mt-5" >Form Input Data Periksa</h3>
    <fieldset class="container mt-5 p-3">
      <form action="proses_periksa.php" method="post">
      <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Periksa :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
          <input id="tanggal" name="tanggal" placeholder="Tanggal Periksa" type="date" class="form-control" value="<?= isset($row['tanggal']) ? $row['tanggal'] : '' ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="berat" name="berat" placeholder="Berat Pasien" type="text" class="form-control" value="<?= isset($row['berat']) ? $row['berat'] : '' ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
      <input id="tinggi" name="tinggi" placeholder="Tinggi Pasien" type="text" class="form-control" value="<?= isset($row['tinggi']) ? $row['tinggi'] : '' ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tensi" class="col-4 col-form-label">Tensi :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="tensi" name="tensi" placeholder="Tensi Pasien" type="text" class="form-control" value="<?= isset($row['tensi']) ? $row['tensi'] : '' ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="keterangan" class="col-4 col-form-label">Keterangan :</label> 
    <div class="col-6">
    <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
      <input id="keterangan" name="keterangan" placeholder="Keterangan Periksa" type="text" class="form-control" value="<?= isset($row['keterangan']) ? $row['keterangan'] : '' ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="pasien_id" class="col-4 col-form-label">Pasien :</label> 
    <div class="col-6">
      <select id="pasien_id" name="pasien_id" class="custom-select">
        <option value="1">Anies Bawasepeda</option>
        <option value="2">Jangar Mahfud</option>
        <option value="3">Cristian Rahmad</option>
        <option value="4">Jessica Siska</option>
        <option value="5">Anna Susanti</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="dokter_id" class="col-4 col-form-label">Dokter :</label> 
    <div class="col-6">
      <select id="dokter_id" name="dokter_id" class="custom-select">
        <option value="1">Ahmad Muzakir</option>
        <option value="2">Andi Susanto</option>
        <option value="3">Budi Suseno</option>
        <option value="4">Cinta Wijaya</option>
        <option value="5">Dian Sari</option>
      </select>
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


