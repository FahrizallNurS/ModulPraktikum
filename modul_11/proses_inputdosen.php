<?php 
    //memanggil file koneksi.php untuk melakukan koneksi database
    include 'koneksi.php';

    //mengecek apakah tombol input dari form telah diklik
    if (isset($_POST['input'])) {

        //membuat variabel untuk menampung data dari form
        $namaDosen = $_POST['namaDosen'];
        $noHp = $_POST['noHp'];

        //jalankan query insert untuk menambah data ke database
        $query = "INSERT INTO t_dosen VALUES (NULL, '$namaDosen', '$noHp' )";
        $result = mysqli_query($link, $query);

        //periksa query apakah ada error
        if(!$result) {
            die ("Query gagal dijalankan: ".mysqli_errno($link) .
            " - ".mysqli_error($link));
        }
    }

    //melakukan redirect (mengalihkan) ke halaman viewdosen.php
    header("location:viewdosen.php")
?>