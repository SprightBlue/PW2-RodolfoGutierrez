<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Menu no saludable</h1><hr>
    </header>
    <section>
        <form action="guardar-menu.php" method="post">
            <div>
                <input type="checkbox" name="entrada" id="entrada" value="Snacks">
                <label for="entrada">Entrada</label>
            </div>
            <div>
                <input type="checkbox" name="plato_principal" id="plato_principal" value="Milanesa">
                <label for="plato_principal">Plato Principal</label>
            </div>
            <div>
                <input type="checkbox" name="acompaniamiento" id="acompaniamiento" value="Papas fritas">
                <label for="acompaniamiento">Acompañamiento</label>
            </div>
            <div>
                <input type="checkbox" name="postre" id="postre" value="helado">
                <label for="postre">Postre</label>
            </div>
            <div>
                <input type="submit" name="enviar" value="Enviar">
            </div>
        </form>
    </section>
</body>
</html>