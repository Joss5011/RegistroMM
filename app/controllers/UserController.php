<?php

require_once __DIR__ . '/../models/User.php';

class UserController {

    private $user;

    public function __construct($pdo){
        $this->user = new User($pdo);
    }

    public function createUser($nombre, $apellido, $usuario, $llave){
        return $this->user->create($nombre, $apellido, $usuario, $llave);
    }

};