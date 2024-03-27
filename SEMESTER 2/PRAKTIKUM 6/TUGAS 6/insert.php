<?php

include 'conect.php';

$noTelepon = $_POST['noTelepon'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$query = "INSERT INTO pendaftaran (noTelepon, nama, kelamin, alamat, email)
          VALUES ('$noTelepon','$nama', '$kelamin', '$alamat', '$email') ";

if($conn->query($query) === TRUE ){
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>