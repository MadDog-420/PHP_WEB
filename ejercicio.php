<?php

    function ejercicio1($n){
        $sum=0;
        echo "N = <b>$n</b>"."<br/>";
        for($i=1 ; $i<($n*2) ; $i+=2){
            $sum+=$i;
        }
        echo "La suma de los <b>$n</b> primeros números primos es <b>$sum</b>"."<br/><br/>";
    }
    
    function ejercicio2($n1,$n2,$n3){
        $arr = [$n1,$n2,$n3];
        $arrsize = sizeof($arr);
        for($i = 0; $i < $arrsize; $i++){ 
            for ($j = 0; $j < $arrsize - $i - 1; $j++){ 
                if ($arr[$j] > $arr[$j+1]){ 
                    $t = $arr[$j]; 
                    $arr[$j] = $arr[$j+1]; 
                    $arr[$j+1] = $t; 
                } 
            } 
        }
        echo "Números ordenados: ";
        for ($i = 0; $i < $arrsize; $i++)
            echo "<b>".$arr[$i]."</b> - ";
        echo "<br/><br/>";
    }

    function ejercicio3($num){
        $random=$num;
        $cont=0;
        if($random==0){
            $cont=1;
        } else {
            do{
                $random=floor($random/10);
                $cont++;
            }while($random > 0);
        }
        echo "<b>$num</b> tiene <b>$cont</b> cifras"."<br/><br/>";
    }

    function ejercicio4(){
        $sum=0;
        for($i = 1;$i <= 15; $i++){
            echo "<b>$i</b>"." ";
            $sum+=$i;
        }
        echo "<br/>La suma de los 15 primeros números es: <b>$sum</b>"."<br/><br/>";
    }
    
?>