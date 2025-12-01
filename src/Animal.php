<?php

    class Animal{

        protected $nombre;

        function __construct($name = ""){
            $this->nombre = $name;
        }

        function hacerSonido(){
            echo "Sonido genérico";
        }

        function presentacion(){
            echo "Soy un animal llamado" . $this->nombre . ":" . hacerSonido();
        }
    }

?>