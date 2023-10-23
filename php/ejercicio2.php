<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gastos de enviooooo2</title>
    <style>
       body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
        }

        .formulario {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .campo {
            margin-bottom: 10px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div class="formulario">
        <h2>Gastos de envio</h2>
        <form action="#" method="post">
            <div class="campo">
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" required>
            </div>
            <div class="campo">
                <input type="submit" value="Calcular Gastos de Envío">
            </div>
        </form>
        <?php
        if (isset($_POST["precio"])) {
            $precio = $_POST["precio"];
            switch (true) {
                case ($precio < 50):
                    $gastos = 3.95;
                    break;
                case ($precio >= 50 && $precio < 75):
                    $gastos = 2.95;
                    break;
                case ($precio >= 75 && $precio < 100):
                    $gastos = 1.95;
                    break;
                default:
                    $gastos = 0;
            }
            echo "<div class='resultado'>El total de gastos de envío es: $gastos €</div>";
        }
        ?>
    </div>
</body>
</html>
