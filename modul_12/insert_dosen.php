<?php 

$con = new mysqli("localhost", "root", "", "db_akademik", 3307);

//check koneksi
if($con->connect_error){
    die("Connection failed:" .$con->connect_error);
}

$sql = "INSERT INTO t_dosen(idDosen, namaDosen, noHP) VALUES (10, 'Rahmat dwi Prasetiya', '089678900099')";
$hasil=$con->query($sql);

if($hasil === TRUE){
    echo "Mengisi Database";
} else {
    echo "error" .$con->error;
}

$con->close();
?>
