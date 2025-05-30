<?php 

class buah
{
    public $nama;
    protected $warna;
    private $berat;


public function __construct($nama, $warna, $berat) {
    $this->nama = $nama;
    $this->warna = $warna;
    $this->berat = $berat;
}

    public function getWarna()
    {
    return $this->warna;
    }

    public function getBerat()
    {
        return $this->berat;
    }

}
$mango = new buah("Mangga", "Kuning", "300 gram");

echo "Nama buah: " .$mango->nama. "<br>";
echo "Warna buah: " .$mango->getWarna(). "<br>";
echo "Berat buah: " .$mango->getBerat(). "<br>";
?>