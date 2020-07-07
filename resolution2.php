<?php
    class Arbol{
        public $cantidadHojas,$tipo,$antiguedad,$altura;

        public function crecer($metros){
            $this->altura+=$metros;
            echo "</br>Árbol ahora mide ".$this->altura." metros";
        }
        public function crearHojas($hojas){
            $this->cantidadHojas+=$hojas;
            echo "</br>Árbol ahora tiene ".$this->cantidadHojas." hojas";
        }
        public function fotosintesis(){
            echo "</br>Árbol realiza fotosíntesis";
        }
    }

    class Humano{
        public $altura,$genero,$edad,$caracter;

        private $frases=array(
            "Hola mundo","Sup",
            "Yellow world","Qué cuentas?",
            "Qué fuentes","What's cooking, good looking?");
        
        private function fraseAleatoria(){
            $max=count($this->frases)-1;
            return "<p><i>".$this->frases[rand(0,$max)]."</i></p>";
        }
        public function hablar(){
            echo "</br>Humano dice: ".$this->fraseAleatoria();
        }
        public function correr(){
            echo "</br>Humano corriendo";
        }
        public function comer(){
            echo "</br>Humano comiendo";
        }
        
    }

    echo "<h2>Árbol</h2>";

    $A1=new Arbol();
    $A1 -> cantidadHojas=300;
    $A1 -> tipo="Sauco";
    $A1 -> antiguedad=6;
    $A1 -> altura=17;
    echo "Cantidad de hojas: ".$A1->cantidadHojas." hojas";
    echo "</br>Tipo: ".$A1->tipo;
    echo "</br>Antiguedad: ".$A1->antiguedad." años";
    echo "</br>Altura: ".$A1->altura." m.";
    $A1 -> crecer(2);
    $A1 -> crearHojas(120);
    $A1 -> fotosintesis();

    echo "</br></br>";

    echo "<h2>Humano</h2>";

    $H1=new Humano();
    $H1 -> altura=1.8;
    $H1 -> genero="Femenino";
    $H1 -> edad=20;
    $H1 -> caracter="Nervioso";
    echo "Altura: ".$H1->altura." m.";
    echo "</br>Género: ".$H1->genero;
    echo "</br>Edad: ".$H1->edad." años";
    echo "</br>Caracter: ".$H1->caracter;
    $H1 -> hablar();
    $H1 -> comer();
    $H1 -> correr();
?>