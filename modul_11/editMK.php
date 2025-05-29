<?php
    include 'koneksi.php';

    if (isset($_GET['kodeMK'])) {

        $kodeMK = ($_GET["kodeMK"]);
        $query = "SELECT * FROM t_matakuliah WHERE kodeMK='$kodeMK'";
        $result = mysqli_query($link, $query);

        if(!$result){
            die ("Query Error: ".mysqli_errno($link) . 
            " - ".mysqli_error($link));
        }

        $data = mysqli_fetch_assoc($result);
        $kodeMK = $data["kodeMK"];
        $namaMK = $data["namaMK"];
        $sks = $data["sks"];
        $jam = $data["jam"];
    } else {
        header("location:viewmk.php");
    }
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
        font-family: Arial, sans-serif;
        background-color: #f4f9f4;
        margin: 0;
        padding: 20px;
        color: #333;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .container {
        width: 400px;
        margin: 0 auto;
        background: white;
        padding: 25px 30px;
        border-radius: 8px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    fieldset {
        border: 1px solid #ccc;
        border-radius: 6px;
        padding: 15px 20px 25px 20px;
    }

    legend {
        font-weight: bold;
        font-size: 1.2rem;
        color: #2c662d; 
        padding: 0 5px;
    }

    p {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid #bbb;
        border-radius: 5px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus {
        border-color: #2c662d;
        outline: none;
    }

    input[type="submit"] {
        background-color: #28a745; 
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
        font-size: 1rem;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #1e7e34; 
    }
</style>
<body>
    <h1>Edit Data</h1>
    <div class="container">
        <form id="form_mk" action="proses_editMK.php" method="post">
            <fieldset>
                <legend>Edit Data Mata Kuliah</legend>
                <input type="hidden" name="kodeMK_lama" value="<?php echo $kodeMK; ?>">
                <p>
                    <label for="kodeMK">NPM : </label>
                    <input type="text" name="kodeMK" value="<?php echo $kodeMK; ?>">
                </p>
                <p>
                    <label for="namaMK">Nama Mata Kuliah : </label>
                    <input type="text" name="namaMK" id="namaMK" value="<?php echo $namaMK?>">
                </p>
                <p>
                    <label for="sks">SKS : </label>
                    <input type="text" name="sks" id="sks" value="<?php echo $sks?>">
                </p>
                <p>
                    <label for="jam">Jam : </label>
                    <input type="text" name="jam" id="jam" value="<?php echo $jam?>">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>
</html>