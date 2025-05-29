<?php
include'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fbfc;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #2c3e50;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        form input[type="text"] {
            width: 250px;
            padding: 8px 12px;
            border: 1px solid #bbb;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        form input[type="text"]:focus {
            border-color: #28a745;
            outline: none;
        }
        form input[type="submit"] {
            padding: 8px 18px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1rem;
            margin-left: 8px;
            transition: background-color 0.3s ease;
        }
        form input[type="submit"]:hover {
            background-color: #1e7e34;
        }

        .center-btn {
            text-align: center;
            margin-bottom: 20px;
        }

        .center-btn a {
            display: inline-block;
            background-color:rgb(8, 128, 176);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .center-btn a:hover {
            background-color: #1b4f72;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #28a745;
            color: white;
            font-weight: 600;
        }

        tr:hover {
            background-color: #f1f9f1;
        }

        a {
            color: #28a745;
            text-decoration: none;
            font-weight: 600;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
</head>
<body>
    <h1>Tabel Mahasiswa</h1>

    <form method="GET">
    <input type="text" name="keyword" placeholder="cari nama mahasiswa" value="<?= $_GET['keyword'] ?? '' ?>">
    <input type="submit" value="cari">
    <link rel="stylesheet" href="style.css">
    </form>

    <div class="center-btn">
        <a href="input.php">+ Tambah Mahasiswa</a>
    </div>

    <table>
        <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>No. HP</th>
        <th>Pilihan</th>
        </tr>

        <?php 
        $keyword = $_GET['keyword'] ?? '';
        $query = "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE '%$keyword%' ORDER BY npm ASC";
        $result = mysqli_query($link, $query);

        if (!$result){
            die("query error:" .mysqli_errno($link) . " - " .mysqli_error($link));
        }

        while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$data['npm']}</td>";
        echo "<td>{$data['namaMhs']}</td>";
        echo "<td>{$data['prodi']}</td>";
        echo "<td>{$data['alamat']}</td>";
        echo "<td>{$data['noHp']}</td>";

        echo "<td>
         <a href='editMhs.php?npm={$data['npm']}'>Edit</a> /
         <a href='hapus_mhs.php?npm={$data['npm']}'
            onclick=\"return confirm('Anda yakin ingin menghapus data?')\">Hapus</a>
         </td>";
        echo "</tr>";

        }
        ?>

    </table>
</body>
</html> 