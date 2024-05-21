<?php 

class Database {
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $pdo;

    public function __construct($host, $db_name, $username, $password)
    {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect (){
        $this->pdo = null;

        try{
            $this->pdo =new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexion: " . $e->getMessage();
        }

        return $this->pdo;
    }

}