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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <fieldset class="container mt-5 p-3" style="background-color: #F5F5DC; border:2px solid black">
        <legend>Form Registrasi IT Club Data Science</legend>
        <form action="hasil_registrasi.php" method="post">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-adn"></i>
                </div>
                </div> 
                <input id="nim" name="nim" type="text" class="form-control" required>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-book"></i>
                </div>
                </div> 
                <input id="nama" name="nama" type="text" class="form-control" required>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="kelamin" id="kelamin_0" type="radio" class="custom-control-input" value="L"> 
                <label for="kelamin_0" class="custom-control-label">Laki Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="kelamin" id="kelamin_1" type="radio" class="custom-control-input" value="P"> 
                <label for="kelamin_1" class="custom-control-label">Perempuan</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
            <div class="col-8">
            <select id="prodi" name="prodi" class="custom-select" required>
                <?php 
                    foreach ($ar_prodi as $k => $v) {
                        echo " <option value='$k'>$v</option>";
                    };
                ?>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Skill Web & Programming</label> 
            <div class="col-8">
            <?php 
            foreach ($ar_skill as $k => $v) {
                echo "
                <input type='checkbox' name='skills[]' value= '$k'>$k
                ";
            };
            ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="lokasi" class="col-4 col-form-label">Tempat Domisili</label> 
            <div class="col-8">
            <select id="lokasi" name="lokasi" class="custom-select">
                <option value="Jakarta">Jakarta</option>
                <option value="Depok">Depok</option>
                <option value="Bogor">Bogor</option>
                <option value="Depok">Tanggerang</option>
                <option value="Bogor">Bekasi</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-gg-circle"></i>
                </div>
                </div> 
                <input id="email" name="email" type="text" class="form-control" required>
            </div>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </div>
        </form>
    </fieldset>
</body>
</html>