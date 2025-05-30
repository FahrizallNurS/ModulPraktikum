<?php 
require_once ('kelas/akunBank.php');

$data1 = new akunBank("001", 10000);
$data1 = new akunBank("002", 20000);
$data1->setNama("Fahrizal Nur S");

$data1->tambahUang(4000);
$data1->kurangiUang(1000);

echo "Nama akun: " .$data1->getNama(). "<br>";
echo "Saldo: " .$data1->liatSaldo(). "<br>";
echo "hitung pajak: " .$data1->hitungPajak(). "<br>";


?>