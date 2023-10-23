<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de Matrices</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2c3e50; 
            text-align: center;
            margin: 50px;
            position: relative; 
        }

        h1 {
            color: #e74c3c; 
        }

        .matriz {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #e74c3c;
            color: #fff;
        }

        td {
            background-color: #e67e22; 
        }

        h2 {
            color: #e74c3c; 
        }

        .resultado {
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            margin-top: 20px;
        }

        .sol {
            position: absolute;
            font-size: 36px;
            color: #f39c12; 
            animation: moverSol 20s linear infinite;
        }

        @keyframes moverSol {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <h1>Suma de Matrices</h1>

    <div class="matriz">
        <h2>Matriz 1</h2>
        <table>
            <?php
            $matriz1 = array(
                array(1, 0),
                array(0, 1)
            );

            foreach ($matriz1 as $fila) {
                echo "<tr>";
                foreach ($fila as $valor) {
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <div class="matriz">
        <h2>Matriz 2</h2>
        <table>
            <?php
            $matriz2 = array(
                array(0, 1),
                array(1, 0)
            );

            foreach ($matriz2 as $fila) {
                echo "<tr>";
                foreach ($fila as $valor) {
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <div class="matriz">
        <h2>Resultado</h2>
        <table>
            <?php
            $resultado = array();

            for ($i = 0; $i < 2; $i++) {
                for ($j = 0; $j < 2; $j++) {
                    $resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
                }
            }

            foreach ($resultado as $fila) {
                echo "<tr>";
                foreach ($fila as $valor) {
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <div class="resultado">
        <?php
        foreach ($resultado as $fila) {
            foreach ($fila as $valor) {
                echo "$valor ";
            }
            echo "<br>";
        }
        ?>
    </div>

    <?php
    for ($i = 0; $i < 10; $i++) {
        $top = rand(0, 100) . "%";
        $left = rand(0, 100) . "%";
        echo "<div class='sol' style='top: $top; left: $left;'>&#9728;</div>";
    }
    ?>
</body>
</html>
