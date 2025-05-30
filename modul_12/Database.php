<?php

class Database
{
    private $host = 'localhost';
    private $name = 'db_akademik';
    private $username = 'root';
    private $password = '';
    private $port = 3307;
    private $con;

    public function connection()
    { 
        $this->con = null;
    try{
        $this->con = new PDO(
            $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->name",
           $this->username,
            $this->password,
        );
        $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $exception){
        echo "koneksi error ". $exception->getMessage();
    }
    return $this->con;
    }
}
?>