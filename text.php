<?php
    $num=10;
    $boolean=FALSE;

    $text ="<h1>Hola mundo</h1>
            <h2>Variable tipo numérica: $num</h2>
            <h3>Variable tipo booleana: $boolean</h3>
            <h3>Variable tipo array:</h3>";

    $coloresP=array(
        "Amarillo",
        "Rojo",
        "Azul"
    );
    $coloresS=array(
        "verde"=>"Verde es la combinación de amarillo y azul",
        "anaranjado"=>"Anaranjado es la combinación de rojo y amarillo",
        "morado"=>"Morado es la combinación de rojo y azul"
    );

    $manzana= (object)[
        "nombre"=>"Manzana",
        "precio"=>200
    ];

    var_dump($num);
    echo '<br>';
    var_dump($boolean);
    echo '<br>';
    var_dump($coloresP);
    echo '<br>';
    var_dump($coloresS);
    echo '<br>';
    var_dump($manzana);
?>