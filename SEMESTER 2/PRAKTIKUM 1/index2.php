<?php 
    $title = 'Data Mahasiswa';
    $nama = 'Sastria Tri Ferdiansyah';
    $jurusan = 'Teknik Informatika';
    $rombel = 'TI01';
    $mahasiswa = array(
        array(
            'nama' => 'John Doe',
            'jurusan' => 'Teknik Informatika',
            'rombel' => 'TI01'
        ),
        array(
            'nama' => 'Jane Doe',
            'jurusan' => 'Sistem Informasi',
            'rombel' => 'SI02'
        ),
        array(
            'nama' => 'Alice Smith',
            'jurusan' => 'Teknik Komputer',
            'rombel' => 'TK03'
        ),
        array(
            'nama' => 'Bob Johnson',
            'jurusan' => 'Manajemen Informatika',
            'rombel' => 'MI04'
        ),
        array(
            'nama' => 'Eva Green',
            'jurusan' => 'Sistem Informasi',
            'rombel' => 'SI05'
        )
    );
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<h1> <?=  $title?> </h1>
   <table style="width: 80%; border:white;" border="2">
   <tbody>
    <tr>
        <td>Nama Mahasiswa</td>
        <td>Jurusan</td>
        <td>Rombel</td>
    </tr>
    <tr>
        <td><?=  $nama ?></td>
        <td><?=  $jurusan ?></td>
        <td><?=  $rombel ?></td>
    </tr>
    <?php  foreach ($mahasiswa as $mhs):?>
    <tr>
        <td><?= $mhs['nama'] ?></td>
        <td><?= $mhs['jurusan'] ?></td>
        <td><?= $mhs['rombel'] ?></td>
    </tr>
    <?php  endforeach?>
   </tbody>
   </table>
</div>
  
</body>
</html>