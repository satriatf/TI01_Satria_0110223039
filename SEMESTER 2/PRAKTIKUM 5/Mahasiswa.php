<?php

class Mahasiswa {
    public $nama;
    public $nilai;

    public function __construct($nama , $nilai) {
        $this->nama = $nama;
        $this->nilai = $nilai;
    }
    public function getNama ($nama) {
        $this->nama = $nama;
    }
    public function getNilai ($nilai) {
        $this->nilai = $nilai;
    }
    public function hasilLulus () {
        return $this->nilai >= 60 ? 'lulus' : 'tidak lulus';
    }
    public function predikat () {
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 70) {
            return 'B';
        } elseif ($this->nilai >= 60) {
            return 'C';
        } else {
            return'D';
        }
    }
}


?>