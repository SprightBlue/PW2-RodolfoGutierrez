<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>En la función A ingrese rojo, en el B amarillo y el C verde:<br>
        <?php
            include("ejercicio1.php");
            semaforo_a("rojo");
            echo "<br>";
            semaforo_b("amarillo");
            echo "<br>";
            semaforo_c("verde");
            echo "<br>";
        ?>
    </p>
</body>
</html>