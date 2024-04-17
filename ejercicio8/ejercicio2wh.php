<?php
    include("../ejercicio2/ejercicio2.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solución ejercicio 2</title>
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
            <li><a href="ejercicio2wh.php" class="active">Ejercicio 2</a></li>
            <li><a href="ejercicio3wh.php">Ejercicio 3</a></li>
            <li><a href="ejercicio4wh.php">Ejercicio 4</a></li>
            <li><a href="ejercicio5wh.php">Ejercicio 5</a></li>
            <li><a href="ejercicio6wh.php">Ejercicio 6</a></li>
        </ul>
    </nav>
    <section>
        <h2>Solución ejercicio 2 - Binomio cuadrado perfecto</h2>
        <p class="solucion">En la función A y B los valores ingresados son 1 y 3:<br> 
            <?php
                binomioCuadradoPerfecto_a(2, 4);
                echo "<br>";
                binomioCuadradoPerfecto_b(2, 4);
            ?>
        </p>
    </section>    
</body>
</html>