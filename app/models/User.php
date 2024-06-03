<?php

class User {

    private $pdo;

    public function __construct($pdo){

        $this->pdo = $pdo;
    }

    public function create($nombre, $apellido, $usuario, $llave) {

        $sql = "INSERT INTO usuarios (nombre, apellido, usuario, llave) VALUES (:nombre, :apellido, :usuario, :llave)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':llave', $llave);
        return $stmt->execute(); 

    }

}