<?php

class PendaftaranMahasiswa {
    public $noTelepon;
    public $nama;
    public $kelamin;
    public $alamat;
    public $email;

    public function __construct($noTelepon , $nama , $kelamin , $alamat , $email) {
        $this->noTelepon = $noTelepon;
        $this->nama = $nama;
        $this->kelamin = $kelamin;
        $this->alamat = $alamat;
        $this->email = $email;
    }
}
?>