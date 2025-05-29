<?php 
//memanggil koneksi php
include 'koneksi.php';

//mengecek apakah tombol inout dari form telah di klik
if (isset($_POST['input'])) {

    //membuat variabel untuk menampung data form
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHp = $_POST['noHp'];

    //jalankan query insert untuk menambah data ke database
    $query = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHp) VALUES ('$npm', '$namaMhs', '$prodi', '$alamat', '$noHp' )";
    $result = mysqli_query($link, $query);

    // periksa apakah query ada error
    if(!$result){
        die ("Query gagal dijalankan : ".mysqli_errno($link) .
        " - ".mysqli_error($link));
    }
}

//melakukan pengalihan ke halaman viewmhs.php
header("location:viewmhs.php");
?>