<?php

require_once 'dbkoneksi.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kelurahan = $_POST['kelurahan_id'];


$data = [$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $alamat, $kelurahan];

$_proses = $_POST['proses'];
if($_proses == "Tambah"){
    $sql ="INSERT INTO pasien(kode,nama,tmp_lahir,tgl_lahir,gender,email,alamat,kelurahan_id)
    VALUES(? , ? , ? , ? , ? , ? , ? , ?)";
    $query = $dbh->prepare($sql);
    $query->execute($data);
}else if($_proses == "Ubah"){
    $_idx = $_POST['idx'];
    $data[] = $_idx;
    $sql = "UPDATE pasien SET kode=?,nama=?,tmp_lahir=?,tgl_lahir=?,
    gender=?,email=?,alamat=?,kelurahan_id=? WHERE id_pasien=?";
    $query = $dbh->prepare($sql);
    $query->execute($data);
}else{
    $_idx = $_GET['idx'];
    $sql = "DELETE FROM pasien Where id_pasien=?";
    $query = $dbh->prepare($sql);
    $query->execute([$_idx]);
}
header('location: data_pasien.php');
?>

