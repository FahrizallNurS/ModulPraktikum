<?php
require_once('kelas/Mahasiswa.php');

$mhs1=new mahasiswa("Fahrizal Nur Syaifudin");
$mhs1->setNIM("243307073");
$mhs1->setKelas("TI-2C");
$mhs1->setJurusan("Teknologi Informasi");

echo "Nama: ".$mhs1->getNama(). "<br>";
echo "NIM: ".$mhs1->getNIM(). "<br>";
echo "Kelas: ".$mhs1->getKelas(). "<br>";
echo "jurusan: ".$mhs1->getJurusan(). "<br>";
?>