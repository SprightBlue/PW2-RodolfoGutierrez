<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Menu no saludable</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Menu seleccionado</h1><hr>
    </header>
    <section class="menu-lista">
    <?php
        $ini = parse_ini_file("menu.ini");
        foreach($ini as $k=>$v) {
            if($v!="") {
                echo "<p>" . $k . "=" . $v . "</p>";
            }
        }
    ?>
    </section>
</body>
</html>