<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    Selamat Datang <br><?php echo $_GET["nama"]; ?><br><br>
    NIM : <?php echo $_GET["nim"]; ?><br>
    Nama : <?php echo $_GET["nama"]; ?><br>
    Email : <?php echo $_GET["email"]; ?><br>
    Tempat, Tanggal Lahir : <?php echo $_GET["tempat"]; ?>, <?php echo $_GET["tglLahir"]; ?><br>
    Alamat : <?php echo $_GET["alamat"]; ?><br>
    Jenis Kelamin : <?php echo $_GET["Gender"]; ?><br>
</body>
</html>
