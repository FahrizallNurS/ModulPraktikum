<?php
require_once "../Database.php";
require_once "../Query/MK.php";

$db = (new Database())->connection();
$matakuliah = new Matakuliah($db);


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $matakuliah->kodeMK =$_POST['kodeMK'] ?? null;
    $matakuliah->namaMK = $_POST['namaMK'];
    $matakuliah->sks = $_POST['sks'];
    $matakuliah->jam = $_POST['jam'] ;


    if(!empty($_POST['isEdit'])){
           $matakuliah->kodeMK_lm = $_POST['kodeMK_lm'];
        $matakuliah->update();
    }else{
        $matakuliah->create();
    }
    header("location:viewMK.php");
    exit;
}

$editData = null;

if (isset($_GET['edit'])){
    $editData = $matakuliah->cari($_GET['edit']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            margin: 30px;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            background-color: #2ecc71;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #27ae60;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            text-align: center;
            display: block;
        }

        a:hover {
            text-decoration: underline;
        } 
    </style>
</head>
<body>
     <h2><?= $editData ? 'Edit' : 'Tambah' ?> Mata Kuliah</h2>
    <form method="POST">
        
       <?php if ($editData): ?>
        <input type="hidden" name="kodeMK_lm" value="<?= $editData['kodeMK'] ?>">
    <?php endif; ?>

    <label>kodeMK:</label>
    <input type="text" name="kodeMK" value="<?= $editData['kodeMK'] ?? '' ?>" required>


        <label>Nama Matakuliah:</label>
        <input type="text" name="namaMK" value="<?php echo $editData['namaMK'] ?? '' ?>" required>
        <label>SKS:</label>
        <input type="text" name="sks" value="<?php echo $editData['sks'] ?? '' ?>" required>
        <label>JAM:</label>
        <input type="text" name="jam" value="<?php echo $editData['jam'] ?? '' ?>" required>
    

        <?php if ($editData): ?>
            <input type="hidden" name="isEdit" value="1">
        <?php endif; ?>

        <button type="submit"><?= $editData ? 'Update' : 'Simpan' ?></button>
    </form>

    <a href="viewMK.php"> Kembali ke daftar</a>
</body>
</html>