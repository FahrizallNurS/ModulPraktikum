<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $x = 5;
   $y = 10;

   //Arithmetic operators
   echo "Penambahan ".$x + $y."<br>";
   echo "Pengurangan ".$x - $y."<br>";
   echo "Perkalian ".$x * $y."<br>";
   echo "Pembagian ".$x / $y."<br>";
   echo "Modulus ".$x % $y."<br>";
   echo "Exponsial ".$x ** $y."<br>";
   echo("<br>");

    //Assigment operators
    $x += 2; // $x = $x + 2
    $x *= 2; // $y = $y * 2
    echo "Penambahan x ".$x."<br>";
    echo "Perkalian y ".$y."<br>";
    echo ("<br>");

    //Increment/Decrement operators
    echo "isi ++x = ".++$x."<br>";
    echo "isi x++ = ".$x++."<br>";
    echo "isi x = ".$x."<br>";    
    echo("<br>");
    echo "isi --y = ".--$y."<br>";
    echo "Isi y-- = ".$y--."<br>";
    echo("<br>");

    //conditonal assigment operators
    $user = "Fahrizal Nur Syaifudin";
    // <kondisi> ? <nilai_jika_kondisi_true_> : <nilai_jika_kondisi_false>
    $status = (empty($user)) ? "kosong" : "ada Isi";
    echo $status."<br>";
    //variabel $color diisi dengan "red" jika $color tidak ada atau null
    echo $color = $color ?? "red";
   ?>
</body>
</html>