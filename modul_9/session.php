<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "1922"){
        $_SESSION["username"] = $username;
        header("location: dashboard.php");
        exit;
    }else{
        $error = "username atau password salah";
    }
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
        username: <input type="text" name="username"><br>
        password: <input type="password" name="password"><br>
        <input type="submit" value="login">
    </form>
    <?php 
    if(isset($error)){
    echo "<p style='color:red; font-size:14px;'>$error</p>";
    }
    ?>
</body>
</html>