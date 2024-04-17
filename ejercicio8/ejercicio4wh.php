<?php
    include("../ejercicio4/ejercicio4.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solución ejercicio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Rodolfo Gutierrez</h2>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Enunciados</a></li>
            <li><a href="ejercicio1wh.php">Ejercicio 1</a></li>
            <li><a href="ejercicio2wh.php">Ejercicio 2</a></li>
            <li><a href="ejercicio3wh.php">Ejercicio 3</a></li>
            <li><a href="ejercicio4wh.php" class="active">Ejercicio 4</a></li>
            <li><a href="ejercicio5wh.php">Ejercicio 5</a></li>
            <li><a href="ejercicio6wh.php">Ejercicio 6</a></li>
        </ul>
    </nav>
    <section>
        <h2>Solución ejercicio 4 - Incrementar</h2>
        <p class="solucion">El valor ingresado es 1 y deberia valer 2 luego de haberse ejecutado la función:<br>
            <?php
                $i = 1;
                incrementar($i);
                echo $i;
            ?>
        </p>
    </section>    
</body>
</html>