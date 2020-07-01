<?php

    ejercicio1(2);
    ejercicio2(5,4);
    echo ejercicio3(5);
    
    function ejercicio1($n){
        $mod=$n%2;
        echo "$n es ";
        if($mod == 0){
            echo "par";
        } else {
            echo "impar";
        }
        echo "<br/><br/>";
    }
    
    function ejercicio2($n1,$n2){
        if($n1 > $n2){
            echo "$n1 es mayor";
        } else {
            if($n1 < $n2){
                echo "$n2 es mayor";
            } else {
                echo "$n1 y $n2 son iguales";
            }
        }
        echo "<br/><br/>";
    }

    function ejercicio3($num){
        return pow($num,2);
    }
?>