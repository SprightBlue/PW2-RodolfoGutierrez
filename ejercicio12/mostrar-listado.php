<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Listado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Listado Interplaentario</h1><hr>
    </header>
    <section>
        <?php
            $csv = fopen("datos.csv", "r");
            $contador = 0;
            echo "<table><tr><th>Nombre</th><th>Planeta</th></tr>";
            while(($datos = fgetcsv($csv, 1000, ";")) != false) {
                echo "<tr><td>" . $datos[0] . "</td><td>" . $datos[1] . "</td></tr>";
                if(strtolower($datos[1])!="tierra") {
                    $contador++;
                }
            }
            echo "</table><br><br><h2>Total de visitas que no pertenecen al planeta Tierra: " . $contador . "</h2>";
        ?>
    </section>
</body>
</html>