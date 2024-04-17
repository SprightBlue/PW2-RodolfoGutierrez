<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanzar Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Rodolfo Gutierrez</h1>
        <hr>
    </header>
    <section>
        <?php
            if(isset($_POST["enviar"])) {
                $cantidad = $_POST["dados"];
                $total = 0;
                echo "<div class='contenedor-dados'>";
                for($i=0; $i<$cantidad; $i++) {
                    $random = rand(1, 6);
                    switch($random) {
                        case 1:
                            echo "<img src='imagenes/dado1.png' title='dado1'>";
                            break;
                        case 2:
                            echo "<img src='imagenes/dado2.png' title='dado2'>";
                            break;
                        case 3:
                            echo "<img src='imagenes/dado3.png' title='dado3'>";
                            break;
                        case 4:
                            echo "<img src='imagenes/dado4.png' title='dado4'>";
                            break;
                        case 5:
                            echo "<img src='imagenes/dado5.png' title='dado5'>";
                            break;
                        case 6:
                            echo "<img src='imagenes/dado6.png' title='dado6'>";
                            break;
                    }
                    $total += $random;
                }
                echo "</div><br><br><h2>Resultado obtenido " . $total . "</h2>";
            }else {
                die("Error al enviar el formulario");
                header("location: index.php");
            }  
        ?>
    </section>
</body>
</html>