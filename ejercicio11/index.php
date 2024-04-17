<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Rodolfo Gutierrez</h1><hr>
    </header>
    <section>
        <form action="lanzar-dados.php" method="post">
            <div>
                <label for="dados">Cuantos dados desea lanzar?: </label>
                <input type="number" name="dados" id="dados">
            </div>
                <input type="submit" name="enviar" value="Lanzar dados">
        </form>
    </section>
</body>
</html>