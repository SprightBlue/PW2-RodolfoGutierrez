<?php
    if(isset($_POST["enviar"])) {
        $csv = fopen("datos.csv", "a");
        fwrite($csv, "" . $_POST["nombre"] . ";" . $_POST["planeta"] . "\n");
        fclose($csv);
    }else {
        die("Error al enviar el formulario");
    }
    header("location: mostrar-listado.php");
    exit();
?>