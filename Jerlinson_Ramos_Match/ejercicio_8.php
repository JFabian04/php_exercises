<?php 
$string = readline("Ingrese un texto cualquiera: ");

$lengthString = strlen($string);

$response = match(true){    
   $lengthString >= 10 => 'La cadena es larga',
   default => "La cadena es corta."
};
echo $response;