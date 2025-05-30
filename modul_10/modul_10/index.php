<?php 

require_once ("kelas/manusia.php");

$andi = new Manusia();
$andi->setNama("Andi Pratama");

$budi = new Manusia();
$budi->setNama("Budi Santoso");

$rzl = new Manusia();
$rzl->setNIK("1232121322434243");
$rzl->setNama("Fahrizal Nur Syaifudin");
$rzl->setUmur("20");

echo($andi->getNama());
echo("</br>");
echo($budi->getNama());
echo("</br>");
echo($rzl->getNama());
echo("</br>");
echo($rzl->getNIK());
echo("</br>");
echo($rzl->getUmur());
?>