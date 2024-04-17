<?php
    include("../ejercicio5/ejercicio5.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solución ejercicio 5</title>
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
            <li><a href="ejercicio4wh.php">Ejercicio 4</a></li>
            <li><a href="ejercicio5wh.php" class="active">Ejercicio 5</a></li>
            <li><a href="ejercicio6wh.php">Ejercicio 6</a></li>
        </ul>
    </nav>
    <section>
        <h2>Solución ejercicio 5 - Sumatoria</h2>
        <p class="solucion">El array que se utilizada para las 3 funciones es [1, 2, 3, 4, 5]:<br>
            <?php
                sumatoria_a(array(1, 2, 3, 4, 5));
                echo "<br>";
                sumatoria_b(array(1, 2, 3, 4, 5));
                echo "<br>";
                sumatoria_c(array(1, 2, 3, 4, 5));
            ?>
        </p>
    </section>    
</body>
</html>