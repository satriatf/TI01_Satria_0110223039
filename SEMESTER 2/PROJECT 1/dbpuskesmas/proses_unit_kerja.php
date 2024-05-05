<?php

require_once 'dbkoneksi.php';

$nama = $_POST['nama'];

$data = [$nama];

$_proses = $_POST['proses'];
if($_proses == "Tambah"){
    $sql ="INSERT INTO unit_kerja (nama)
    VALUES(?)";
    $query = $dbh->prepare($sql);
    $query->execute($data);
}else if($_proses == "Ubah"){
    $_idx = $_POST['idx'];
    $data[] = $_idx;
    $sql = "UPDATE unit_kerja SET nama=? WHERE id_unit_kerja=?";
    $query = $dbh->prepare($sql);
    $query->execute($data);
}else{
    $_idx = $_GET['idx'];
    $sql = "DELETE FROM unit_kerja Where id_unit_kerja=?";
    $query = $dbh->prepare($sql);
    $query->execute([$_idx]);
}
header('location: data_unit_kerja.php');
?>

