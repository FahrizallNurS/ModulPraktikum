<?php 
//mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {

//buat koneksi dengan database
include("koneksi.php");

//membuat variabel untuk menampung data dari form edit
$id = $_POST['idDosen'];
$namaDosen = $_POST['namaDosen'];
$noHP = $_POST['noHP'];

    //buat dan jalankan query UPDATE
    $query = "UPDATE t_dosen SET namaDosen = '$namaDosen', noHP = '$noHP' WHERE idDosen = '$id' ";

    $result = mysqli_query($link, $query);

    //periksa result atau hasil query apakah ada errpr
    if(!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($link) .
        " - ".mysqli_error($link));
    }
}

//lakukan redirect ke halaman viewdosen.php
header("location:viewdosen.php");
?> 