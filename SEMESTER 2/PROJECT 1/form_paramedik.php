<?php

require_once 'dbkoneksi.php';

$_idx = null;

if(isset($_GET['id_paramedik'])) {
  $_idx = isset($_GET['id_paramedik']) ? $_GET['id_paramedik'] : '';
}

if($_idx) {
    $sql = "SELECT * FROM paramedik WHERE id_paramedik=?";
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
    <title>Form Paramedik</title>
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
  <h3 class="container mt-5" >Form Input Data Paramedik</h3>
    <fieldset class="container mt-5 p-3">
      <form action="proses.paramedik.php" method="post">
      <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" value="<?= isset($row['nama']) ? $row['nama'] : '' ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin :</label> 
    <div class="col-6">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" <?php if(isset($row['gender']) && $row['gender'] == 'L') echo "checked"; ?>>
        <label for="gender_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" <?php if(isset($row['gender']) && $row['gender'] == 'P') echo "checked"; ?>>
        <label for="gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-building"></i>
          </div>
        </div> 
        <input id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir" type="text" class="form-control" value="<?= isset($row['tmp_lahir']) ? $row['tmp_lahir'] : '' ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" type="date" class="form-control" value="<?= isset($row['tgl_lahir']) ? $row['tgl_lahir'] : '' ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kategori" class="col-4 col-form-label">Kategori :</label> 
    <div class="col-6">
      <select id="kategori" name="kategori" class="custom-select">
        <option value="1" selected>Anak</option>
        <option value="2">Umum</option>
        <option value="3">Gigi</option>
        <option value="4">kandungan</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="telpon" class="col-4 col-form-label">Telpon :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="telpon" name="telpon" placeholder="000000000" type="text" class="form-control" value="<?= isset($row['telpon']) ? $row['telpon'] : '' ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat :</label> 
    <div class="col-6">
    <input id="alamat" name="alamat" placeholder="Alamat" type="text" class="form-control" value="<?= isset($row['alamat']) ? $row['alamat'] : '' ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="unit_kerja_id" class="col-4 col-form-label">Unit Kerja :</label> 
    <div class="col-6">
      <select id="unit_kerja_id" name="unit_kerja_id" class="custom-select">
        <option value="1" selected>Puskesmas Melati</option>
        <option value="2">Puskesmas Mawar</option>
        <option value="3">Puskesmas Dahlia</option>
        <option value="4">Puskesmas Cempaka</option>
        <option value="5">Puskesmas Sakura</option>
        <option value="2">Puskesmas Jati</option>
        <option value="3">Puskesmas Bunga</option>
        <option value="4">Puskesmas Anggrek</option>
        <option value="5">Puskesmas Kenanga</option>
        <option value="5">Puskesmas Flamboyan</option>
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


