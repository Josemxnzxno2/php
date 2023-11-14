<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Fichero</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1f7dbd;
            color: #4c87af;
            text-align: center;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contenedor {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            text-align: left;
        }

        form {
            margin-top: 20px;
        }

        input, textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4c87af;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #1f7dbd;
        }

        input[type="submit"]:focus {
            outline: none;
        }

        .boton-volver {
            margin-top: 20px;
        }

        .boton-volver a {
            background-color: #4c87af;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .boton-volver a:hover {
            background-color: #1f7dbd;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('Location: login.html');
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre_fichero = $_POST['nombre_fichero'];
        $permisos = $_POST['permisos'];
        $contenido = $_POST['contenido'];

        $ruta_directorio = "/directorio/interno/";
        if (!file_exists($ruta_directorio)) {
            mkdir($ruta_directorio, 0755, true);
        }

        $ruta_fichero = $ruta_directorio . $nombre_fichero;

        file_put_contents($ruta_fichero, $contenido);
    }
    ?>

    <div class="contenedor">
        <form action="crear_fichero.php" method="post">
            <h1>Crear Nuevo Fichero</h1>
            Nombre del fichero: <input type="text" name="nombre_fichero"><br>
            Permisos: <input type="text" name="permisos"><br>
            Contenido: <textarea name="contenido"></textarea><br>
            <input type="submit" value="Crear Fichero">
        </form>
    </div>

    <div class="boton-volver">
        <a href="opciones.php">Volver a Opciones</a>
    </div>
</body>
</html>
