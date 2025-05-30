<?php
require_once "../Database.php";
require_once "../Query/MK.php";

$db = (new Database())->connection();
$matakuliah = new Matakuliah ($db);

if (isset($_GET['delete'])) {
    $matakuliah->kodeMK = $_GET['delete'];
    $matakuliah->delete();
    header("location:viewMK.php");
    exit;
}
$data = $matakuliah->tampilkan();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

a {
    text-decoration: none;
    color: #3498db;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

a.button {
    display: inline-block;
    padding: 8px 16px;
    background-color: #2ecc71;
    color: white;
    border-radius: 5px;
    margin-bottom: 20px;
    transition: background-color 0.3s ease;
}

a.button:hover {
    background-color: #27ae60;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    overflow: hidden;
}

th, td {
    padding: 12px 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #3498db;
    color: white;
    text-transform: uppercase;
}

tr:hover {
    background-color: #f2f2f2;
}

td.action a {
    margin: 0 5px;
    color: #e67e22;
}

td.action a:hover {
    color: #d35400;
} 
</style>

<body>

    <h2>Matakuliah</h2>
    <a href="inputMK.php" class="button">Input</a>

    <table border="solid">
        <tr>
            <th>kodeMK</th>
            <th>Nama</th>
            <th>SKS</th>
            <th>JAM</th>
        </tr>
        <?php while ($row = $data->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?php echo $row['kodeMK'] ?></td>
                <td><?php echo  $row['namaMK'] ?></td>
                <td><?php echo $row['sks'] ?></td>
                <td><?php echo $row['jam'] ?></td>
                <td class="action">
                <a href="inputMK.php?edit=<?php echo $row['kodeMK']; ?>">Edit</a>
                <a href="viewMK.php?delete=<?php echo $row['kodeMK']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
            </tr>
        <?php endwhile;
        ?>
    </table>
</body>

</html>