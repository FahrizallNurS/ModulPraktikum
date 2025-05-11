<?php
$jumlah_uang = 1387500; 
$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

$hasil = [];
foreach ($pecahan as $uang){
    $jumlah_lembar = intdiv($jumlah_uang, $uang); 
    $hasil[$uang] = $jumlah_lembar;
    $jumlah_uang %= $uang; 
}

echo "<h3>Rincian Pecahan Uang yang Diterima Ani:</h3>";
foreach ($hasil as $pecah => $jumlah){
    echo "Rp " . number_format($pecah, 0, ',', '.') . " x " . $jumlah . " lembar<br>";
}
?>
