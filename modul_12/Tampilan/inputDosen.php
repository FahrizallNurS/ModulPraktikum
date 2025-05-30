<?php
require_once "../Database.php";
require_once "../Query/Dosen.php";

$db = (new Database())->connection();
$dosen = new Dosen($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dosen->idDosen = $_POST['idDosen'] ?? null;
    $dosen->namaDosen = $_POST['namaDosen'];
    $dosen->noHP = $_POST['noHP']; 

    if (!empty($_POST['isEdit'])) {
        $dosen->update();
    } else {
        $dosen->create();
    }

    header("location:viewDosen.php");
    exit;
}

$editData = null;

if (isset($_GET['edit'])) {
    $editData = $dosen->cari($_GET['edit']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $editData ? 'Edit' : 'Tambah' ?> Dosen</title>
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
    <h2><?= $editData ? 'Edit' : 'Tambah' ?> Dosen</h2>

    <form method="POST">
        <?php if ($editData): ?>
            <input type="hidden" name="idDosen" value="<?= htmlspecialchars($editData['idDosen']) ?>">
        <?php endif; ?>

        <label>Nama Dosen:</label>
        <input type="text" name="namaDosen" value="<?= htmlspecialchars($editData['namaDosen'] ?? '') ?>" required>

        <label>No HP:</label>
        <input type="text" name="noHP" value="<?= htmlspecialchars($editData['noHP'] ?? '') ?>" required>

        <?php if ($editData): ?>
            <input type="hidden" name="isEdit" value="1">
        <?php endif; ?>

        <button type="submit"><?= $editData ? 'Update' : 'Simpan' ?></button>
    </form>

    <a href="viewDosen.php">Kembali ke daftar</a>
</body>
</html>
