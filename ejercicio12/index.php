<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Formulario Planeta Tierra</h1><hr>
    </header>
    <section>
        <form action="listado-interplanetario.php" method="post">
            <div>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="planeta">Planeta Perteneciente: </label>
                <input type="text" name="planeta" id="planeta">
            </div>
            <div>
                <input type="submit" name="enviar" value="Enviar">
            </div>
        </form>
    </section>
</body>
</html>