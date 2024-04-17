<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Rodolfo Gutierrez</h1><hr>
    </header>
    <?php
        $csv = fopen("datos-imagenes.csv", "r");
        while(($datos = fgetcsv($csv, 1000, ";")) != false) {
            echo "<a href='mostrar-imagen.php?figcapture=" . $datos[0] . "'>" . $datos[0] . "</a><br><br>";
        }
    ?>
    <section>
        <form action="manejo-imagen.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="imagen">Imagen: </label>
                <input type="file" name="imagen" id="imagen">
            </div>
            <div>
                <input type="submit" name="enviar" id="enviar" value="Publicar">
            </div>
        </form>
    </section>
</body>
</html>