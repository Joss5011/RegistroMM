<?php
//incluir los archivos de configuracion
require_once '../config/database.php';
require_once '../app/core/Database.php';

// crear una instancia de la clase Database y conectar
$database = new Database($host, $db_name, $username, $password);
$pdo = $database->connect();

if ($pdo){
    echo "Conexion exitosa";
} else {
    echo "Error al conectar";
}
