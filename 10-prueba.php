<?php

$edad = readline("Escribe tu edad: \n");

function lugarDeBodega ($edad) {
    if ($edad < 5) {
        echo "espacios en la parte inferior de la bodega. \n";
    } else if ($edad >= 5 && $edad <=7) {
        echo "espacios en la parte media de la bodega. \n";
    } else if ($edad > 7) {
        echo "espacios en la parte alta de la bodega. \n";
    } else {
        echo "No tenemos registros de tu edad pero en la bodega de al lado puedes dejar tu mochila \n";
    }
    
};

lugarDeBodega($edad);

?>