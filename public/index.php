<?php
//incluir los archivos de configuracion
require_once '../config/database.php';
require_once '../app/core/Database.php';
require_once '../app/controllers/UserController.php';

// crear una instancia de la clase Database y conectar
$database = new Database($host, $db_name, $username, $password);
$pdo = $database->connect();

/*
if ($pdo){
    echo "Conexion exitosa";
} else {
    echo "Error al conectar";
}
*/

// $userController = new UserController($pdo);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medalla Milagrosa</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main>
        <!-- Contenido principal de la página -->
    </main>

    <footer>
        <!-- Pie de página -->
    </footer>
</body>

</html>
<?php
// Rutas simples
// if ($_SERVER['REQUEST_URI'] == '/users') {
//     $users = $userController->listUsers();
//     require_once '../app/views/listUsers.php';
// } elseif ($_SERVER['REQUEST_URI'] == '/create_user' && $_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $userController->createUser($username, $password);
//     header('Location: /users');
// } else {
//     echo "Página no encontrada";
// }

?>