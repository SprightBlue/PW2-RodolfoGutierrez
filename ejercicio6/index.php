<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>El nombre y apellido de la clase Saludo es Rodolfo Gutierrez se pedida el saludo formal a las 8hs y el informal a las 17hs: <br>
        <?php
            include("ejercicio6.php");
            $saludar = new Saludar("Rodolfo", "Gutierrez");
            echo "Nombre: " . $saludar->getNombre() . "<br>";
            echo "Apellido: " . $saludar->getApellido() . "<br>";
            $saludar->saludoFormal(8);
            echo "<br>";
            $saludar->saludoInformal(17);
        ?>
    </p>
</body>
</html>