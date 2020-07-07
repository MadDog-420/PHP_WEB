<?php
    class Person {
        public $nombre;
        public $age;

        function __construct($nombre,$age){
            $this->nombre=$nombre;
            $this->age=$age;
        }

        public function hablar(){
            echo "</br>Hola mundo";
        }
        function crecer(){
            $this->age+=1;
            echo "</br>Cumplí $this->age años";
        }
    }

    $P1=new Person('Bruce',19);
    echo "Nombre: ".$P1 -> nombre;
    echo "</br>";
    echo "Edad: ".$P1 -> age;
    $P1 -> hablar();
    $P1 -> crecer();
?>