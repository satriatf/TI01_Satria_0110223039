<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$submit = $_POST['submit'];

if (!isset($submit)) {
    header("Location: login.php");
};

if ($username === 'satria' &&  $password === "123" ) {
    echo "<script>alert('Selamat Datang!')</script>";
}else{
    header("Location: login.php");
};

include_once 'top.php';
include_once 'menu.php';
include_once 'bottom.php';

?> 