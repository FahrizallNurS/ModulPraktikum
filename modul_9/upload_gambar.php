<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{243307073}">
    <meta name="author" content="{Fahrizal Nur Syaifudin}">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
     <p><label>Pilih gambar yang akan di upload : </label><br>
        <input type="file" name="gambar" value="Pilih Gambar" id="gambar1"></p>
        <input type="submit" value="Upload Image" name="submit">  
    </form>

   <?php
$uploadOk = 1;
$target_dir = "gambar/";
$target_file = "";
$tipeGambar = "";

if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] == 0) {
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file berupa gambar
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        echo "File berupa gambar - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.<br>";
        $uploadOk = 0;
    }

    // Cek apakah file sudah ada
    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.<br>";
        $uploadOk = 0;
    }

    // Cek ukuran file
    if ($_FILES["gambar"]["size"] > 5000000) {
        echo "Maaf, file terlalu besar.<br>";
        $uploadOk = 0;
    }

    // Validasi ekstensi file
    if (!in_array($tipeGambar, ["jpg", "jpeg", "png", "gif"])) {
        echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.<br>";
        $uploadOk = 0;
    }

    // Upload file jika semua validasi lolos
    if ($uploadOk == 0) {
        echo "Maaf, file gagal diupload.<br>";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil diupload.<br>";
        } else {
            echo "Maaf, terjadi kesalahan saat mengupload file.<br>";
        }
    }
}
?>


</body>
</html>