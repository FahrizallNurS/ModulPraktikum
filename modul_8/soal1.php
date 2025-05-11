<?php
$gaji_pokok = 3250000;
$tunjangan_jabatan = 1200000;

$gaji_kotor = $gaji_pokok + $tunjangan_jabatan;
$pajak = 0.10 * $gaji_kotor;
$gaji_bersih = $gaji_kotor - $pajak;

echo "Gaji Pokok: Rp " . number_format($gaji_pokok, 0, ',', '.') . "<br>";
echo "Tunjangan Jabatan: Rp " . number_format($tunjangan_jabatan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp " . number_format($gaji_kotor, 0, ',', '.') . "<br>";
echo "Pajak (10%): Rp " . number_format($pajak, 0, ',', '.') . "<br>";
echo "<strong>Gaji Bersih: Rp " . number_format($gaji_bersih, 0, ',', '.') ;
?>
