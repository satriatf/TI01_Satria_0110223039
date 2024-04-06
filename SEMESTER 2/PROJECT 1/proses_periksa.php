<?php

require_once 'dbkoneksi.php';

$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];
$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id'];



$data = [$tanggal, $berat, $tinggi, $tensi, $keterangan, $pasien_id, $dokter_id];

$_proses = $_POST['proses'];
if($_proses == "Tambah"){
    $sql ="INSERT INTO periksa(tanggal,berat,tinggi,tensi,keterangan,pasien_id,dokter_id)
    VALUES(? , ? , ? , ? , ? , ? , ?)";
    $query = $dbh->prepare($sql);
    $query->execute($data);
}else if($_proses == "Ubah"){
    $_idx = $_POST['idx'];
    $data[] = $_idx;
    $sql = "UPDATE periksa SET tanggal=?,berat=?,tinggi=?,tensi=?,
    keterangan=?,pasien_id=?,dokter_id=? WHERE id_periksa=?";
    $query = $dbh->prepare($sql);
    $query->execute($data);
}else{
    $_idx = $_GET['idx'];
    $sql = "DELETE FROM periksa Where id_periksa=?";
    $query = $dbh->prepare($sql);
    $query->execute([$_idx]);
}
header('location: data_periksa.php');
?>

