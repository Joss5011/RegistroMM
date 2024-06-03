<?php
// Asume que $users es un array de usuarios pasado a la vista
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo htmlspecialchars($user['usuario']); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
