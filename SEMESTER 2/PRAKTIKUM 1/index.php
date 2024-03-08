<?php
    $title ='Latihan Praktikum1 php';
    $nama ='Satria';
    $umur = 80;

    echo 'Welcome: '. $nama.' dengan Umur: '.$umur;

    define('phi',3.14);
    $jari = 8;
    $keliling = 2 * phi * $jari;
    $luas = phi * $jari * $jari;

    echo ' keliling lingkaran: ' .$keliling;
    echo ' <br/>luas lingkaran: ' .$luas;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <h3><?php echo 'keliling lingkaran: ' .$keliling;?></h3>
    <h3><?php echo 'luas lingkaran: ' .$luas; ?></h3>
</body>
</html>
