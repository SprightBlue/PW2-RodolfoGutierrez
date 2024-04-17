<?php
    function buscar($clave, $texto) {
        $ocurrencias = 0;
        $clave = strtolower($clave);
        $texto = strtolower($texto);
        for($i=0; $i<strlen($texto); $i++) {
            if($texto[$i]==$clave[0]) {
                if((substr($texto, $i, strlen($clave))==$clave)) {
                    $ocurrencias++;
                }
            }
        }
        return $ocurrencias;
    }
?>