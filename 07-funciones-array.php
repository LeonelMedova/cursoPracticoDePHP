<?php

$nombres = array("Ana", "Camilo", "Jose");
var_dump(is_array($nombres));

$nombre = "Ana";
var_dump(is_array($nombre));

echo "\n";


// Ejemplo

$si = array('esto', 'es', 'un array');

echo is_array($si) ? 'Array' : 'No es un array';
echo "\n";

$no = 'esto es un string';

echo is_array($no) ? 'Array' : 'No es un array';
echo "\n";

?>