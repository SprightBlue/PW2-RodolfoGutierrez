<?php
    function binomioCuadradoPerfecto_a($a, $b) {
        echo(($a+$b)**2);
    }

    function binomioCuadradoPerfecto_b($a, $b) {
        $resultado = (($a**2) + (2*$a*$b) + ($b**2));
        echo $resultado;
    }
?>