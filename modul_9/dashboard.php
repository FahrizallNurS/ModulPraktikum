<?php 
session_start();

if (!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}
?>

<h2>Selamat Datang, <?php echo $_SESSION["username"]; ?></h2>
<a href="logout.php">Logout</a>
