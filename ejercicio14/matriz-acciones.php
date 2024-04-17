<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz acciones</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Matriz acciones</h1><hr>
    </header>
    <?php
        if (isset($_POST['enviar'])) {
            $dimensiones = $_POST["dimensiones"];
            $matriz = array();
            echo "<h2>Matriz Generada:</h2><table>";
            for ($i = 0; $i < $dimensiones; $i++) {
                $matriz[$i] = array();
                echo "<tr>";
                for ($j = 0; $j < $dimensiones; $j++) {
                    $matriz[$i][$j] = rand(1, 100);
                    echo "<td>" . $matriz[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }else {
            die("Error al enviar el formulario");
        }
    ?>
    
    <article>
        <h2>Recorrer la diagonal principal de la matriz</h2>
        <?php
            for ($i = 0; $i < $dimensiones; $i++) {
                echo "<p>" . $matriz[$i][$i] . "</p>";
            }
        ?>
    </article>
    <article>
        <h2>Recorrer la diagonal secundaria de la matriz</h2>
        <?php
            for ($i = 0; $i < $dimensiones; $i++) {
                echo "<p>" . $matriz[$i][$dimensiones - 1 - $i] . "</p>";
            }
        ?>
    </article>
    <article>
        <h2>Sumatoria valores de la matriz<h2><hr>
        <?php
            $suma = 0;
            for ($i = 0; $i < $dimensiones; $i++) {
                for ($j = 0; $j < $dimensiones; $j++) {
                    $suma += $matriz[$i][$j];
                }
            }
            echo "<p>" . $suma . "</p>";
        ?>
    </article>
</body>
</html>