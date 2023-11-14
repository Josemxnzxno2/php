<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
    exit();
}

include('ruta_actual.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Obtener Ruta actual</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1f7dbd;
            color: #000;
            text-align: center;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
            font-size: 2em;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        a {
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form>
        <h1>Ruta Actual</h1>
        <p>La ruta actual es:</p>
        <br>
        <?php echo getcwd(); ?>
        <br>
        <br>
        <?php
        if ($_SESSION['usuario'] === 'admin') {
            echo '<a href="opcioneslogin.php">Volver a las opciones</a>';
        } elseif ($_SESSION['usuario'] === 'cliente1') {
            echo '<a href="opcionescliente.php">Volver a las opciones</a>';
        }
        ?>
    </form>
</body>
</html>
