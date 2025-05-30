<?php 

$con = new mysqli ("localhost", "root", "", "db_akademik","3307");

//check koneksi
if ($con->connect_error) {
    die("Connection failed: " .$con->connect_error);
}
?>