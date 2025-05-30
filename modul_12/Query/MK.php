
<?php

class Matakuliah
{
private $con;
private $table = "t_matakuliah";
public $kodeMK, $namaMK,$sks,$jam,$kodeMK_lm;

public function __construct($db)
{
    $this->con = $db;
}

public function create()
{
    $query = "INSERT INTO $this->table (kodeMK,namaMK,sks,jam) VALUES (?,?,?,?)";
    $statement = $this->con->prepare($query);
    return $statement->execute([$this->kodeMK,$this->namaMK,$this->sks,$this->jam]);
}

public function update()
{
 $query ="UPDATE {$this->table} SET kodeMK=?,namaMK =?,sks =?,jam =? WHERE kodeMK= ?";
    $statement = $this->con->prepare($query);
    return $statement->execute([$this->kodeMK,$this->namaMK,$this->sks, $this->jam, $this->kodeMK_lm]);
}

public function tampilkan()
{
    return $this->con->query("SELECT * FROM $this->table");
}

public function delete()
{
 $query ="DELETE FROM $this->table WHERE kodeMK = ?";
    $statement = $this->con->prepare($query);
        return $statement->execute([$this->kodeMK]);
}
public function cari($id)
{
 $statement = $this->con->prepare("SELECT * FROM {$this->table} WHERE kodeMK =?");
    
    $statement->execute([$id]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

}