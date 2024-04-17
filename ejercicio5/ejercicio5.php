<?php
    function sumatoria_a($array) {
        $total = 0;
        for($i=0; $i<count($array); $i++) {
            $total += $array[$i];
        }
        echo $total;
    }

    function sumatoria_b($array) {
        $total = 0;
        foreach($array as $k => $v) {
            $total += $v;
        }
        echo $total;
    }

    function sumatoria_c($array) {
        $total = 0; 
        $i = 0;
        while($i<count($array)) {
            $total+=$array[$i];
            $i++;
        }
        echo $total;
    }
?>