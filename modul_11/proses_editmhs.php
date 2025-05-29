<?php 
//mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {

//buat koneksi dengan database
include("koneksi.php");
//membuat variabel untuk menampung data dari form edit
$npm = $_POST['npm'];
$npm_lama = $_POST['npm_lama'];
$namaMhs = $_POST['namaMhs'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$noHp = $_POST['noHp'];


    //buat dan jalankan query UPDATE
    $query = "UPDATE t_mahasiswa SET npm = '$npm', namaMhs = '$namaMhs', prodi = '$prodi', alamat = '$alamat', noHp = '$noHp' WHERE npm = '$npm_lama' ";

    $result = mysqli_query($link, $query);

    //periksa result atau hasil query apakah ada errpr
    if(!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($link) .
        " - ".mysqli_error($link));
    }
}

header("location:viewmhs.php");
?> 