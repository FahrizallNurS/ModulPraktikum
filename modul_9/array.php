<?php
$data = array(
    array("nama" => "Gojo", "umur" => 20),
    array("nama" => "Satoru", "umur" => 22),
    array("nama" => "Itachi", "umur" => 19),
    array("nama" => "Kisame", "umur" => 21),
    array("nama" => "Minato", "umur" => 23),
    array("nama" => "Grock", "umur" => 18),
    array("nama" => "Noel", "umur" => 20),
    array("nama" => "Liam", "umur" => 22),
    array("nama" => "Meidiana", "umur" => 24),
    array("nama" => "Neymar", "umur" => 25),
    array("nama" => "Messi", "umur" => 19),
    array("nama" => "Ole", "umur" => 21),
    array("nama" => "Justin", "umur" => 23),
    array("nama" => "Jay", "umur" => 22),
    array("nama" => "Baskara", "umur" => 20)
);

$json_data = json_encode($data, JSON_PRETTY_PRINT);
echo "<pre>$json_data</pre>";
?>
