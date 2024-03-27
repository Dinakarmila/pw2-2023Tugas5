<?php
// Impor file data_kasus.php
require_once 'class_kasus.php';

// Buat objek kelas Baju
$baju1 = new Baju("Merah", "M", "Kaos");
$baju2 = new Baju("hitam", "L",  "Gamis");
$baju3 = new Baju("coklat", "XL", "daster");


// Menampilkan informasi baju
echo "informasi baju 1:<br>";
echo "Warna: " . $baju1->getWarna() . "<br>";
echo "ukuran: " . $baju1->getUkuran() . "<br>";
echo "jenis: " . $baju1->getJenis() . "<br>";
echo "<br>";

echo "informasi baju 2:<br>";
echo "Warna: " . $baju2->getWarna() . "<br>";
echo "ukuran: " . $baju2->getUkuran() . "<br>";
echo "jenis: " . $baju2->getJenis() . "<br>";
echo "<br>";

echo "informasi baju 3:<br>";
echo "warna: " . $baju3->getWarna() . "<br>";
echo "ukuran: " . $baju3->getUkuran() . "<br>";
echo "jenis: " . $baju3->getJenis() . "<br>";

// Lakukan operasi lain dengan objek $baju jika diperlukan
?>

