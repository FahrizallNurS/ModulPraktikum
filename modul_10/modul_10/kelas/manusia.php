<?php 
class Manusia
{
    protected $name; 
    protected $nik = "1232121322434243";
    protected $umur = "20";

    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    public function getNIK()
    {
        return " nik ($this->nik) ";
    }

     public function setNIK($nik)
     {
        $this->nik = $nik;
     }

     public function getUmur()
     {
        return " umur ($this->umur) ";
     }

     public function setUmur($umur)
     {
        $this->umur = $umur;
     }
}
?>