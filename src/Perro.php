<?php

    class Perro extends Animal{

        function __construct($name){
            parent::__construct($name);
        }

        function hacerSonido(){
            return "Guau";
        }

        function presentacion(){
            return "Soy un animal llamado " . $this->nombre;
        }
        
    }

?>