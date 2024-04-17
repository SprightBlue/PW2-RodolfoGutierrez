<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Imagen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Rodolfo Gutierrez</h1><hr>
    </header>
    <?php
        $csv = fopen("datos-imagenes.csv", "r");
        while(($datos = fgetcsv($csv, 1000, ";")) != false) {
            if($datos[0]==$_GET["figcapture"]) {
                echo "<figure><img src='" . $datos[1] . "' title='" . $datos[0] . "'>
                <figcaption>" . $datos[0]. "</figcaption</figure>";
            }
        }
    ?>
</body>
</html>