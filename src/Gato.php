<?php

    class Gato extends Animal{

        function __construct($name){
            parent::__construct($name);
        }

        function hacerSonido(){
            return "Miau";
        }

        function presentacion(){
            return "Soy un animal llamado " . $this->nombre;
        }
    }

?>