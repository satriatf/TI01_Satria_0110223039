<?php
// Include file koneksi ke database
include_once('dbkoneksi.php');

// Tangkap input dari form
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = md5($_POST['password']);

// Persiapkan query SQL menggunakan parameter terikat
$query_sql = "INSERT INTO users (nama, email, password) VALUES (?, ?, ?)";
$statement = $dbh->prepare($query_sql);
$statement->execute([$nama, $email, $password]);

// Redirect ke halaman index.html setelah pendaftaran berhasil
header("Location: login.html");
?>
