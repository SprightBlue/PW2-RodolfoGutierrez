<?php
    include("../ejercicio1/ejercicio1.php");
    include("../ejercicio2/ejercicio2.php");
    include("../ejercicio3/ejercicio3.php");
    include("../ejercicio4/ejercicio4.php");
    include("../ejercicio5/ejercicio5.php");
    include("../ejercicio6/ejercicio6.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Rodolfo Gutierrez</h1>
    </header>
    
    <section class="contenedor-ejercicios">
        <article class="ejercicio">
            <h2 class="titulo-ejercicio">Ejercicio 1: Semáforo</h2>
            <p class="enunciado-ejercicio">Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
            “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
            “avance” o “estado desconocido” ante un caso no esperado.<br>
            a) función semaforo_a($color): Resuelva la solución utilizando if else<br>
            b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )<br>
            c) función semaforo_c($color): Resuelva la solución utilizando switch</p>
            <p class="resolucion-ejercicio">En la función A ingrese rojo, en el B amarillo y el C verde:<br>
                <?php
                    semaforo_a("rojo");
                    echo "<br>";
                    semaforo_b("amarillo");
                    echo "<br>";
                    semaforo_c("verde");
                    echo "<br>";
                ?>
            </p>
        </article>

        <article class="ejercicio">
            <h2 class="titulo-ejercicio">Ejercicio 2: Binomio cuadrado perfecto</h2>
            <p class="enunciado-ejercicio">Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
            recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)<sup>2</sup><br>
            a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
            potencia<br>
            b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
            desarrollada del binomio: a<sup>2</sup> + 2*a*b + b<sup>2</sup></p>
            <p class="resolucion-ejercicio">En la función A y B los valores ingresados son 1 y 3:<br> 
                <?php
                    binomioCuadradoPerfecto_a(2, 4);
                    echo "<br>";
                    binomioCuadradoPerfecto_b(2, 4);
                ?>
            </p>
        </article>

        <article class="ejercicio">
            <h2 class="titulo-ejercicio">Ejercicio 3: Concatenar textos</h2>
            <p class="enunciado-ejercicio">Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
            ambos textos concatenados como uno solo.</p>
            <p class="resolucion-ejercicio">Los textos ingresados en la función son Rodo y lfo:<br>
                <?php
                    concatenar("Rodo", "lfo");
                ?>
            </p>
        </article>

        <article class="ejercicio">
            <h2 class="titulo-ejercicio">Ejercicio 4: Incrementar</h2>
            <p class="enunciado-ejercicio">Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
            la función, el valor del parámetro haya sido incrementado en 1
            (Ver pasaje de parámetros por referencia)</p>
            <p class="resolucion-enunciado">El valor ingresado es 1 y deberia valer 2 luego de haberse ejecutado la función:<br>
                <?php
                    $i = 1;
                    incrementar($i);
                    echo $i;
                ?>
            </p>
        </article>

        <article class="ejercicio">
            <h2 class="titulo-ejercicio">Ejercicio 5: Sumatoria</h2>
            <p class="enunciado-ejercicio">Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
            valores.<br>
            a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for<br>
            b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each<br>
            c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while</p>
            <p class="resolucion-enunciado">El array que se utilizada para las 3 funciones es [1, 2, 3, 4, 5]:<br>
                <?php
                    sumatoria_a(array(1, 2, 3, 4, 5));
                    echo "<br>";
                    sumatoria_b(array(1, 2, 3, 4, 5));
                    echo "<br>";
                    sumatoria_c(array(1, 2, 3, 4, 5));
                ?>
            </p>
        </article>

        <article class="ejercicio">
            <h2 class="titulo-ejercicio">Ejercicio 6: Nombre completo</h2>
            <p class="enunciado-ejercicio">Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
            persona.<br>
            Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
            concatenado al nombre un prefijo dependiendo del horario:<br>
            05hs a 13hs “Buenos días”<br>
            13hs a 21hs “Buenas tardes”<br>
            21hs a 05hs “Buenas noches”<br>
            Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”<br>
            Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
            sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
            perteneciente al horario.<br>
            Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:<br>
            “¡Hola Ezequiel! Que tengas un buen día”</p>
            <p class="resolucion-ejercicio">El nombre y apellido de la clase Saludo es Rodolfo Gutierrez se pedida el saludo formal a las 8hs y el informal a las 17hs: <br>
                <?php
                    $saludar = new Saludar("Rodolfo", "Gutierrez");
                    echo "Nombre: " . $saludar->getNombre() . "<br>";
                    echo "Apellido: " . $saludar->getApellido() . "<br>";
                    $saludar->saludoFormal(8);
                    echo "<br>";
                    $saludar->saludoInformal(17);
                ?>
            </p>
        </article>
    </section>
</body>
</html>