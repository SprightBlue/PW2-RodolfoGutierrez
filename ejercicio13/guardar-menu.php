<?php
    if(isset($_POST["enviar"])) {
        $ini = fopen("menu.ini", "w");
        fwrite($ini, "entrada=" . $_POST["entrada"] . "\n");
        fwrite($ini, "plato_principal=" . $_POST["plato_principal"] . "\n");
        fwrite($ini, "acompaniamiento=" . $_POST["acompaniamiento"] . "\n");
        fwrite($ini, "postre=" . $_POST["postre"] . "\n");
        fclose($ini);
    }else {
        die("Error al enviar el formulario");
    }
    header("location: mostrar-menu.php");
    exit();
?>