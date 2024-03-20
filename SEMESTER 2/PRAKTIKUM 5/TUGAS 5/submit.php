<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$noTelepon = $_POST['noTelepon'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

include_once 'pendaftaran.php';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>GDSC</h1>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link disabled" aria-disabled="true">Home</a>
                    <a class="nav-link disabled" aria-disabled="true">Booking</a>
                </div>
            </div>
        </div>
    </nav>
    <h3 class="container mt-5" >Data Study Jam Frontend Web Development</h3>
    <table class="table-light table mt-5 text-center" style="border:2px solid black;">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">No. Telepon</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Tinggal</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody class="table-dark text-center">
            <tr>
                <th scope="row">1</th>
                <td><?= $noTelepon ?></td>
                <td><?= $nama ?></td>
                <td><?= $kelamin ?></td>
                <td><?= $alamat ?></td>
                <td><?= $email ?></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>


