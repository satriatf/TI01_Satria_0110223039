<?php

require_once 'dbkoneksi.php';

$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$unit_kerja_id = $_POST['unit_kerja_id'];


$data = [$nama, $gender, $tmp_lahir, $tgl_lahir, $kategori, $telpon, $alamat, $unit_kerja_id];

$_proses = $_POST['proses'];
if($_proses == "Tambah"){
    $sql ="INSERT INTO paramedik (nama,gender,tmp_lahir,tgl_lahir,kategori,telpon,alamat,unit_kerja_id)
    VALUES(? , ? , ? , ? , ? , ? , ? , ?)";
    $query = $dbh->prepare($sql);
    $query->execute($data);
}else if($_proses == "Ubah"){
    $_idx = $_POST['idx'];
    $data[] = $_idx;
    $sql = "UPDATE paramedik SET nama=?,gender=?,tmp_lahir=?,tgl_lahir=?,
    kategori=?,telpon=?,alamat=?,unit_kerja_id=? WHERE id_paramedik=?";
    $query = $dbh->prepare($sql);
    $query->execute($data);
}else{
    $_idx = $_GET['idx'];
    $sql = "DELETE FROM paramedik Where id_paramedik=?";
    $query = $dbh->prepare($sql);
    $query->execute([$_idx]);
}
header('location: data_paramedik.php');
?>

