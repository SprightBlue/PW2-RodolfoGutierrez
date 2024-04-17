<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Buscar ocurrencias Ejemplo</h1><hr>
    </header>
    <section>
        <p>la palabra a buscar es poke en el texto: Cuantos pokemones hay en la 
            pokedex de Kanto.
        </p>
        <?php
            include_once("ocurrencias.php");
            $clave = "poke";
            $texto = "Cuantos pokemon hay en la pokedex de Kanto.";
            echo buscar($clave, $texto);
        ?>
    </section>
</body>
</html>