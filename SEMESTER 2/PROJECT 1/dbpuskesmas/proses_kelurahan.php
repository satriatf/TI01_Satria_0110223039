<?php

require_once 'dbkoneksi.php';

$nama = $_POST['nama'];

$data = [$nama];

$_proses = $_POST['proses'];
if($_proses == "Tambah"){
    $sql ="INSERT INTO kelurahan (nama)
    VALUES(?)";
    $query = $dbh->prepare($sql);
    $query->execute($data);
}else if($_proses == "Ubah"){
    $_idx = $_POST['idx'];
    $data[] = $_idx;
    $sql = "UPDATE kelurahan SET nama=? WHERE id_kelurahan=?";
    $query = $dbh->prepare($sql);
    $query->execute($data);
}else{
    $_idx = $_GET['idx'];
    $sql = "DELETE FROM kelurahan Where id_kelurahan=?";
    $query = $dbh->prepare($sql);
    $query->execute([$_idx]);
}
header('location: data_kelurahan.php');
?>

