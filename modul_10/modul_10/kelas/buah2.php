<?php 

class buah2 {
    public $nama;
    public $warna;
    public $bobot;


    public function set_name($n){
        $this->nama = $n;
    }

    public function set_color($n)
    {
        $this->warna = $n;
    }

    public function set_weight($n)
    {
        $this->bobot = $n;
    }

    public function getWarna()
    {
        return $this->warna;
    }

    public function getBobot()
    {
        return $this->bobot;
    }
}

    $mango = new buah2();
    $mango->set_name('Mango');
    $mango->set_color('Yellow');
    $mango->set_weight('300');

    echo "Nama buah: ".$mango->nama. "<br>";
    echo "Warna buah: ".$mango->getWarna(). "<br>";
    echo "Bobot buah: ".$mango->getBobot(). "<br>";

?>