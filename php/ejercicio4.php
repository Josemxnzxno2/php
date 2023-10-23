<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: black;
            text-align: center;
            margin: 50px;
        }

        .contenido {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #c0392b; 
            color: #fff;
        }

        td {
            background-color: #f2c40a; 
        }

        h2 {
            color: #c0392b;
        }

        .snowflake {
            position: absolute;
            color: #ffffff;
            font-size: 15px;
            opacity: 0.5;
            animation: snow 3s linear infinite;
        }

        @keyframes snow {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            100% {
                transform: translateY(300px) rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="contenido">
        <h2>Matriz Exotica</h2>
        <table>
            <?php
            $matriz = array(
                array(3, 1),
                array(2, 0)
            );

            foreach ($matriz as $fila) {
                echo "<tr>";
                foreach ($fila as $valor) {
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <?php
        for ($i = 0; $i < 10; $i++) {
            $top = rand(0, 100);
            $left = rand(0, 100);
            echo "<div class='snowflake' style='top: $top%; left: $left%;'>&#10052;</div>";
        }
        ?>
    </div>
</body>
</html>
