<?php 
$ar_prodi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "BD" => "Bisnis Digital"
];
$ar_skill = [
    "HTML" => 10,
    "CSS" => 10,
    "Java Script" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "JAVA" => 50
];

$ar_domisili = [
    "Jakarta","Bogor","Depok","Tanggerang","Bekasi","Lainnya"
];

$skill_pilihan = $_POST['skills'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];

$total_poin = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['skills']) && is_array($_POST['skills'])) {

        foreach ($_POST['skills'] as $selected_skill) {
            if(isset($ar_skill[$selected_skill])) {
                $total_poin += $ar_skill[$selected_skill];
            }
        }
    }
}
//kategori skill
$kategori_skill = '';
if ($total_poin >100) {
    $kategori_skill = "Sangat Baik";
}elseif ($total_poin > 60) {
    $kategori_skill = 'Baik';
}elseif ($total_poin > 40) {
    $kategori_skill = 'cukup';
}elseif ($total_poin > 0) {
    $kategori_skill = 'kurang';
}else{
    $kategori_skill = 'Tidak Memadai';
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="p-3" style="border:2px solid black;width:50vw;margin:3rem auto;font-size:1.5rem;font-weight:600">
        <p>NIM : <?php echo $nim ?></p>
        <p>Nama  : <?php echo $nama ?> </p>
        <p>Jenis Kelamin : <?php echo $kelamin ?></p>
        <p>Program Studi : <?php echo $prodi ?></p>
        <p>Skill :
            <?php  foreach ($skill_pilihan as $k => $v) {
                echo "$v, ";
            }; ?>
        </p>
        <p>Skor Skill : <?php echo $total_poin ?></p>
        <p>Kategori Skill : <?php echo $kategori_skill ?></p>
        <p>Email : <?php echo $email ?> </p>
    </div>
</body>
</html>