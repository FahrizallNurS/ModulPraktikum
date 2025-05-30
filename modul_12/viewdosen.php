<?php
$con = new mysqli("localhost","root","","db_akademik",3307);
//check koneksi
if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}

//filter input 
$input=$con->escape_string($_GET['id']);

//membuat query
$statement= $con->prepare("Select * from t_dosen where idDosen=?");

//merubah ?sesuai dengan tipe data input
//i = integer, s = string , d= double, b = blob
$statement->bind_param("i",$input);

//mengeksekusi query kebasis data
$statement->execute();

//mendapatkan hasil dari eksekusi query
$hasil=$statement->get_result();

while($baris = $hasil->fetch_assoc()){
    //filter data tampilan tanpa kode htmnl
    echo(htmlspecialchars($baris['namaDosen'])."<br>");
}

$con->close();
?>