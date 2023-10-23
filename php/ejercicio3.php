<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mayor de Cinco Números</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        ::placeholder {
            color: #999;
        }
    </style>
</head>
<body>
    <h1>Mayor de Cinco Números</h1>
    <form action="" method="post">
        Número 1: <input type="text" name="num1" placeholder="Ingresa un número"><br>
        Número 2: <input type="text" name="num2" placeholder="Ingresa un número"><br>
        Número 3: <input type="text" name="num3" placeholder="Ingresa un número"><br>
        Número 4: <input type="text" name="num4" placeholder="Ingresa un número"><br>
        Número 5: <input type="text" name="num5" placeholder="Ingresa un número"><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = array(
            $_POST["num1"],
            $_POST["num2"],
            $_POST["num3"],
            $_POST["num4"],
            $_POST["num5"]
        );
        $mayor = $numeros[0];
        foreach ($numeros as $numero) {
            if ($numero > $mayor) {
                $mayor = $numero;
            }
        }
        echo "<div style='color: #333; font-size: 24px; margin-top: 20px;'>El número mayor es: $mayor</div>";
    }
    ?>
</body>
</html>
