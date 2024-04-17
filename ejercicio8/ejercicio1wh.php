<?php
    include("../ejercicio1/ejercicio1.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solución ejercicio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Rodolfo Gutierrez</h2>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Enunciados</a></li>
            <li><a href="ejercicio1wh.php" class="active">Ejercicio 1</a></li>
            <li><a href="ejercicio2wh.php">Ejercicio 2</a></li>
            <li><a href="ejercicio3wh.php">Ejercicio 3</a></li>
            <li><a href="ejercicio4wh.php">Ejercicio 4</a></li>
            <li><a href="ejercicio5wh.php">Ejercicio 5</a></li>
            <li><a href="ejercicio6wh.php">Ejercicio 6</a></li>
        </ul>
    </nav>
    <section>
        <h2>Solución ejercicio 1 - Semáforo</h2>
        <p class="solucion">En la función A ingrese rojo, en el B amarillo y el C verde:<br>
            <?php
                semaforo_a("rojo");
                echo "<br>";
                semaforo_b("amarillo");
                echo "<br>";
                semaforo_c("verde");
                echo "<br>";
            ?>     
        </p>
    </section>    
</body>
</html>