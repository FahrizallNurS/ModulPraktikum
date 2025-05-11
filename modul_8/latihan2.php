<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x6"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="243307085">
    <meta name="author" content="Fahrizal Nur S">
</head>
<body>
<h1>Halaman PHP saya</h1>
<?php
//variable dalam php
$txt = "Selamat datang";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;
echo "<p> isi variable txt adalah : $txt</p>";
echo "<p> isi variable x : $x</p>";
echo "<p> isi variable y adalah : $y</p>";
echo " Belajar PHP di ". $txt2. "<br>";
echo $x + $y;

//PHP konstanta

define("nama_konstanta", " Fahrizal Nur S ");
echo "<br>".nama_konstanta;
?>
</html>