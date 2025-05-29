<?php
include 'koneksi.php'; // memanggil file koneksi.php untuk melakukan koneksi database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tabel Dosen</h1>

    <form method="GET" >
        <input type="text" name="keyword" placeholder="Cari nama" value="<?= $_GET['keyword'] ?? '' ?>">
        <input type="submit" value="cari">
    </form>

     <div class="center-btn">
        <a href="input.php">+ Tambah Dosen</a>
    </div>

    <br/>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Dosen</th>
            <th>No. HP</th>
            <th>Pilihan</th>
        </tr>
        <?php
        // jalankan query untuk menampilkan data diurutkan ascending berdasarkan idDosen 
        $keyword = $_GET['keyword'] ?? '';
        $query = "SELECT * FROM t_dosen WHERE namaDosen LIKE '%$keyword%' ORDER BY idDosen ASC";
        $result = mysqli_query($link, $query);

        // mengecek apakah error ketika menjalankan query
        if(!$result){
            die ("Query Error: ".mysqli_errno($link) . 
            " - ".mysqli_error($link));
        }

        // hasil query alam disimpan dalam variabel $data dalam bentukk array
        //kemudian dicetak dengan perulangan while
        while ($data = mysqli_fetch_assoc($result))
        {
            // mencetak / menampilkan data
            echo "<tr>";
            echo "<td>$data[idDosen]</td>"; //menampilkan data iddosen
            echo "<td>$data[namaDosen]</td>"; //menampilkan dara namaDosen
            echo "<td>$data[noHP]</td>"; //menampilkan data noHP

            //membuat link untuk mengedit dan menghapus data
            echo '<td>
                    <a href="editdosen.php?idDosen='.$data['idDosen'].'">Edit</a> /
                    <a href="hapusdosen.php?idDosen='.$data['idDosen'].'"
                        onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
                 </td>';
                 echo "</tr>";
        }
        ?>
    </table>
</body>
</html>