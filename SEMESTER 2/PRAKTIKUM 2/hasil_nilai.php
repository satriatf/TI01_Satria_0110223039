<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

//Buat Total
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
$grade;
$predikat;

//Buat Perhitungan IF Untuk Mencari Grade
if ($total_nilai >= 85) { 
    $grade = "A"; 
}
elseif ($total_nilai >= 70) { 
    $grade = "B"; 
}
elseif ($total_nilai >= 50) { 
    $grade = "C"; 
}
elseif ($total_nilai >= 30) { 
    $grade = "D"; 
}
else { 
    $grade = "E"; 
}

//Buat Perhitungan SWITCHCASE Untuk Mencari Predikat
switch ($grade){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;   
    case "C":
        $predikat = "Cukup";
        break;
    default:
    $predikat ="Tidak Ada";
    break;    
}

//Cetak Hasil:
echo "Nama: $nama <br>"; 
echo 'Matkul: ' . $matkul .'<br>'; 
echo 'Nilai UTS: ' . $nilai_uts .'<br>'; 
echo 'Nilai UAS: ' . $nilai_uas .'<br>'; 
echo 'Nilai Tugas: ' . $nilai_tugas .'<br>';
echo 'Grade: ' . $grade .'<br>'; 
echo 'Predikat: ' . $predikat;  
?>