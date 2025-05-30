<?php 

$con = new mysqli("localhost", "root", "", "db_akademik", 3307);

//check koneksi
if($con->connect_error){
    die("Connection failed:" .$con->connect_error);
}

//buat query yang akan dikirim ke database
$q="CREATE TABLE t_login (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_regristrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    //kirim query ke serber database
    $hasil=$con->query($q);
    //periksa hasil
    if ($hasil === TRUE){
        echo "Tabel t_login berhasil dibuat";
    }else{
        echo "tabel gagal dibuat " .$con->error;
    }

    //menutup koneksi
    $con->close();
?>