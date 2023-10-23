<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos de Envío</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label, input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .resultado {
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Calculadora de Gastos de Envío</h1>

<form action="" method="post">
    <label for="precio">Precio del Producto:</label>
    <input type="number" step="0.01" name="precio" id="precio" required><br><br>
    <input type="submit" value="Calcular">
</form>

<div class="resultado">
    <?php
    if (isset($_POST["precio"])) {
        $precio = $_POST["precio"];
        if ($precio < 50) {
            $gastos = 3.95;
        } elseif ($precio >= 50 && $precio < 75) {
            $gastos = 2.95;
        } elseif ($precio >= 75 && $precio < 100) {
            $gastos = 1.95;
        } else {
            $gastos = 0;
        }
        echo "El total de gastos de envío es: $gastos €";
    }
    ?>
</div>

</body>
</html>
