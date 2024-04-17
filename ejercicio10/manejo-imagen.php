<?php
    $name = $_FILES["imagen"]["name"];
    $tmp_name = $_FILES["imagen"]["tmp_name"];
    $type = $_FILES["imagen"]["type"];

    if(isset($_POST["enviar"])) {
        if(!file_exists("imagenes/".$name)) {
            if($type=="image/jpg" || $type=="image/png" || $type=="image/jpeg" || $type=="image/gif") {
                if(move_uploaded_file($tmp_name, "imagenes/".$name)) {
                    $csv = fopen("datos-imagenes.csv", "a");
                    fwrite($csv, "" . $_POST["nombre"] . ";imagenes/" . $name . "\n");
                    fclose($csv);
                }else {
                    echo "La imagen no pudo ser subida";
                }
            }else {
                echo "Imagen no permitida";
            }
        }else{
            echo "La imagen ya existe";
        }
    }else {
        echo "Error al enviar el formulario";
    }
    
    header("location: index.php");
    exit();
?>