<?php
// class_kasus.php

class Baju {
    private $warna;
    private $ukuran;
    private $jenis;

    public function __construct($warna, $ukuran, $jenis) {
        $this->warna = $warna;
        $this->ukuran = $ukuran;
        $this->jenis = $jenis;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getUkuran() {
        return $this->ukuran;
    }

    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    public function displayInfo() {
        echo "Warna: " . $this->warna . ", Ukuran: " . $this->ukuran . ", Jenis: " . $this->jenis;
    }
}
?>
