<?php

    class Perro extends Animal{
        function hacerSonido(){
            echo "Guau";
            parent::hacerSonido();
        }

        function presentacion(){
            echo "Soy un animal llamado" . $this->nombre . ":" . hacerSonido();
            parent::presentacion();
        }
        
    }

?>