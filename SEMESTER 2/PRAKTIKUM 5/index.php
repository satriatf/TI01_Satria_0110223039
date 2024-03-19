<?php
 class manusia{
    public $nama;
    public $umur;
    // protected
    // private

    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setUmur($umur){
        $this->umur = $umur;
    }
    public function getinfo(){
        return "nama: " . $this ->nama . " umur: ". $this->umur;
    }
}

// membuat objek
$satria = new manusia();
$satria->setNama("satria");
$satria->setUmur("18");
echo $satria->getinfo();

echo '<br>';

$satria = new manusia();
$satria->setNama("satria");
$satria->setUmur("18");
echo $satria->getinfo();


?>
