<?php

    class Gato extends Animal{
        function hacerSonido(){
            echo "Miau";
            parent::hacerSonido();
        }

        function presentacion(){
            echo "Soy un animal llamado" . $this->nombre . ":" . hacerSonido();
            parent::presentacion();
        }
    }

?>