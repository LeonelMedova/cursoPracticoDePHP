<?php

$nombre = "Jose";
$apellido = "Montero";

echo $nombre . " " . $apellido . "\n";


// Concatenar con funcion

function concatenar($nombre, $apellido) {
    echo $nombre . " " . $apellido . "\n";    
}

concatenar($nombre, $apellido);


// Otro ejemplo con función

function sumarNumeros($numeros) {
    $suma = 0;
    for ($i=0; $i < 4; $i++) { 
        $suma = $suma + $numeros[$i] . "\n";
    }
    echo "La suma de los valores del array es: " . $suma;
}

$numeros = array(1, 2, 3, 4);
sumarNumeros($numeros);

echo "\n";

?>