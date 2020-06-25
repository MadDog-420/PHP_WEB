
<?php

    $num=30;
    $num2=40;

    //if
    if($num>$num2){
        echo "número 1 es mayor";
    } else {
        echo "número 2 es mayor";
    };

    //switch
    $dia='lunes';
    switch ($dia){
        
        case 'lunes': echo "voy a trabajar"; 
        break;

        case 'martes':
        case 'viernes':
            echo "voy a comer";
        break;

        case 'jueves': echo "voy a mi cita (con la muerte)";
        break;

        default: echo "Voy a la universidad";
    }

    //while
    $num=0;
    while($num <= 10){
        echo $num;
        $num++;
        if($num==10){
            $num=0;
        break;
        }
    }

    //do while
    do{
        echo $num;
        $num++;
    }while($num <= 10);

    //for
    for($i=0;$i<=10;$i++){
        echo $i;
        echo "<br>";
    }

    
?>

