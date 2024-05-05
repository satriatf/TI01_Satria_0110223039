<?php

require_once 'dbkoneksi.php';

$_idx = null;

if(isset($_GET['id_pasien'])) {
  $_idx = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : '';
}

if($_idx) {
    $sql = "SELECT * FROM pasien WHERE id_pasien=?";
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
    <title>Form Pasien</title>
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
  <h3 class="container mt-5" >Form Input Data Pasien</h3>
    <fieldset class="container mt-5 p-3">
      <form action="proses_pasien.php" method="post">
      <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="kode" name="kode" placeholder="00000" type="text" class="form-control" value="<?= isset($row['kode']) ? $row['kode'] : '' ?>">
      </div>
    </div>
  </div>
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
    <label for="email" class="col-4 col-form-label">Email :</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="example@example.com" type="email" class="form-control" value="<?= isset($row['email']) ? $row['email'] : '' ?>">
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
    <label for="kelurahan_id" class="col-4 col-form-label">Kelurahan :</label> 
    <div class="col-6">
      <select id="kelurahan_id" name="kelurahan_id" class="custom-select">
        <option value="1" selected>Kemayoran</option>
        <option value="2">Senen</option>
        <option value="3">Cikini</option>
        <option value="4">Cilandak</option>
        <option value="5">Lebak Bulus</option>
        <option value="2">Kemang</option>
        <option value="3">Kebayoran</option>
        <option value="4">Tanah Abang</option>
        <option value="5">Palmerah</option>
        <option value="5">Tanjung Duren</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" class="btn btn-primary" value="<?=$tombol?>" name="proses"/>
      <input type="button" class="btn btn-danger" value="Batal" name="proses"/>
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


