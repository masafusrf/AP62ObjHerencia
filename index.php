<?php

    require_once "autoloader.php";

    $animal1 = new Perro("Toby", "Guau");
    $animal1->presentacion();

    echo "<br>";
    
    $animal2 = new Gato("Uñitas", "Miau");
    $animal2->presentacion();
    
?>