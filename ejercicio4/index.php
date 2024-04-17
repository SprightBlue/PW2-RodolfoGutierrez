<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>El valor ingresado es 1 y deberia valer 2 luego de haberse ejecutado la función:<br>
        <?php
            include("ejercicio4.php");
            $i = 1;
            incrementar($i);
            echo $i;
        ?>
    </p>
</body>
</html>