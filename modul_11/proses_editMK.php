<?php 
//mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {

//buat koneksi dengan database
include("koneksi.php");
//membuat variabel untuk menampung data dari form edit
$kodeMK = $_POST['kodeMK'];
$kodeMK_lama = $_POST['kodeMK_lama'];
$namaMK= $_POST['namaMK'];
$sks = $_POST['sks'];
$jam = $_POST['jam'];



    //buat dan jalankan query UPDATE
    $query = "UPDATE t_matakuliah SET kodeMK = '$kodeMK', namaMK = '$namaMK', sks = '$sks', jam = '$jam' WHERE kodeMK = '$kodeMK_lama' ";

    $result = mysqli_query($link, $query);

    //periksa result atau hasil query apakah ada errpr
    if(!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($link) .
        " - ".mysqli_error($link));
    }
}

header("location:viewmk.php");
?> 