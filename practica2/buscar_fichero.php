<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Fichero</title>
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

        form, .archivos-encontrados {
            margin-top: 20px;
        }

        input {
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

        .archivos-encontrados ul {
            list-style-type: none;
            padding: 0;
        }

        .archivos-encontrados li {
            font-size: 18px;
            margin-bottom: 10px;
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

        $ruta_directorio = "/directorio/interno/";

        $archivos_encontrados = glob($ruta_directorio . "*" . $nombre_fichero . "*");
        ?>

        <div class="contenedor">
            <form action="buscar_fichero.php" method="post">
                <h1>Buscar Fichero</h1>
                Nombre del fichero: <input type="text" name="nombre_fichero"><br>
                <input type="submit" value="Buscar">
            </form>

            <div class="archivos-encontrados">
                <?php
                if ($archivos_encontrados) {
                    echo "<h2>Archivos encontrados:</h2>";
                    echo "<ul>";
                    foreach ($archivos_encontrados as $archivo) {
                        echo "<li>$archivo</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>No se encontraron archivos con ese nombre.</p>";
                }
                ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="contenedor">
            <form action="buscar_fichero.php" method="post">
                <h1>Buscar Fichero</h1>
                Nombre del fichero: <input type="text" name="nombre_fichero"><br>
                <input type="submit" value="Buscar">
            </form>
        </div>
    <?php } ?>

    <div class="boton-volver">
        <a href="opciones.php">Volver a Opciones</a>
    </div>
</body>
</html>
