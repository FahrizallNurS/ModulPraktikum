<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Komentar</title>
</head>
<body>
    <?php
    $nama = $email = $komen = "";
    $namaErr = $emailErr = "";

    function bersihkan_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $namaErr = "Masukkan nama";
        } else {
            $nama = bersihkan_input($_POST["nama"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Masukkan email";
        } else {
            $email = bersihkan_input($_POST["email"]);
        }

        $komen = bersihkan_input($_POST["komen"]);

        if ($namaErr == "" && $emailErr == "") {
            echo "<hr>";
            echo "Nama: $nama<br>";
            echo "Email: $email<br>";
            echo "Komentar: $komen<br>";
            echo "<hr>";
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama : <br>
        <input type="text" name="nama" value="<?php echo $nama; ?>">
        <span style="color:red; font-size: 12px;"><?php echo $namaErr; ?></span>
        <br>

        E-mail : <br>
        <input type="email" name="email" value="<?php echo $email; ?>">
        <span style="color:red; font-size: 12px;"><?php echo $emailErr; ?></span>
        <br>

        Komentar : <br>
        <textarea name="komen" rows="5" cols="40"><?php echo $komen; ?></textarea><br>

        <input type="submit" value="Simpan">
        <input type="reset" value="Bersihkan">
    </form>
</body>
</html>
