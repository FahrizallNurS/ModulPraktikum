<?php

class Mahasiswa
{
private $con;
private $table = "t_mahasiswa";
public $npm, $namaMhs, $prodi, $noHp, $alamat, $npmlm;

public function __construct($db)
{
    $this->con = $db;
}

public function create()
{
    $query = "INSERT INTO {$this->table} (npm,namaMhs,prodi,alamat,noHp) VALUES (?,?,?,?,?)";
    $statement = $this->con->prepare($query);
    return $statement->execute([$this->npm,$this->namaMHS,$this->prodi,$this->alamat,$this->noHp]);
}

public function update()
{
 $query ="UPDATE {$this->table} SET npm =?, namaMHS =?,prodi=?,alamat=?, noHp =?  WHERE npm = ?";
    $statement = $this->con->prepare($query);
    return $statement->execute([$this->npm,$this->namaMHS,$this->prodi, $this->alamat, $this->noHP, $this->oldnpm]);
}
public function tampilkan()
{
    return $this->con->query("SELECT * FROM {$this->table}");
}
public function delete()
{
 $query ="DELETE FROM $this->table WHERE npm = ?";
    $stmt = $this->con->prepare($query);
        return $stmt->execute([$this->npm]);
}
public function cari($id)
{
 $statement = $this->con->prepare("SELECT * FROM {$this->table} WHERE npm =?");
    
    $statement->execute([$id]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}
}