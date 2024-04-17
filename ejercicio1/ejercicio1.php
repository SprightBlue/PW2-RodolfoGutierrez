<?php
    function semaforo_a($color) {
        if($color == "rojo") {
            echo "frene";
        }elseif($color == "amarillo") {
            echo "precaución";
        }elseif($color == "verde") {
            echo "avance";
        }else {
            echo "estado desconocido";
        }
    }

    function semaforo_b($color) {
        echo ($color=="rojo" ? "frene" : 
                ($color=="amarillo" ? "precaución" : 
                    ($color=="verde" ? "avance" : 
                        "estado desconocido")));                     
    }

    function semaforo_c($color) {
        switch($color) {
            case "rojo":
                echo "frene";
                break;
            case "amarillo":
                echo "precaución";
                break;
            case "verde":
                echo "avance";
                break;
            default:
                echo "estado desconocido";
                break;
        }
    }
?>