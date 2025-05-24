<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST ["nama"];
    $email = $_POST ["email"];
    setcookie("user_nama", $nama, time() + (86400 * 30), "/");
    setcookie("user_email", $email, time() + (86400 * 30), "/");
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        Nama: <input type="text" name="nama"><br>
        email: <input type="email" name="email"><br>
        <input type="submit" value="simpan">
    </form>

    <?php 
      if (isset($_COOKIE["user_nama"]) && isset($_COOKIE["user_email"])) {
        echo "Cookie sudah diset!<br>";
        echo "Nama: " . $_COOKIE["user_nama"] . "<br>";
        echo "Email: " . $_COOKIE["user_email"];
    } else {
        echo "Cookie belum diset atau perlu refresh halaman.";
    }
    ?>
</body>
</html>