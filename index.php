<?php

    require_once "autoloader.php";

    $animal1 = new Perro("Toby");
    $animal2 = new Gato("Uñitas");

    echo $animal1->presentacion() . ": " . $animal1->hacerSonido() . "<br>";
    echo $animal2->presentacion() . ": " . $animal2->hacerSonido() . "<br>";
    
    
    
?>