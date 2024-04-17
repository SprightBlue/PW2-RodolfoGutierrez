<?php
    include("../ejercicio6/ejercicio6.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solución ejercicio 6</title>
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
            <li><a href="ejercicio5wh.php">Ejercicio 5</a></li>
            <li><a href="ejercicio6wh.php" class="active">Ejercicio 6</a></li>
        </ul>
    </nav>
    <section>
        <h2>Solución ejercicio 6 - Nombre completo</h2>
        <p class=solucion>El nombre y apellido de la clase Saludo es Rodolfo Gutierrez se pedida el saludo formal a las 8hs y el informal a las 17hs: <br>
            <?php
                $saludar = new Saludar("Rodolfo", "Gutierrez");
                echo "Nombre: " . $saludar->getNombre() . "<br>";
                echo "Apellido: " . $saludar->getApellido() . "<br>";
                $saludar->saludoFormal(8);
                echo "<br>";
                $saludar->saludoInformal(17);
            ?>
        </p>
    </section>    
</body>
</html>