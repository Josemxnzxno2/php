<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'admin') {
    header('Location: login.html');
    exit();
}

include('ruta_actual.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
<style>
body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            background-color: #1f7dbd;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
        }

        a:hover {
            background-color: #4c87af;
        }
</style>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>Fecha y hora de acceso: <?php echo $_SESSION['hora_acceso']; ?></p>
    <ul>
        <li><a href="obtener_ruta_actual.php">Obtener Ruta Actual</a></li>
        <li><a href="buscar_fichero.php">Buscar Fichero</a></li>
        <li><a href="crear_fichero.php">Crear Nuevo Fichero</a></li>
    </ul>
</body>
</html>
