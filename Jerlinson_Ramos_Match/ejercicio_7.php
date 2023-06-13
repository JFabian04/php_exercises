<?php 
$length = readline("Ingrese una nota de 0 a 100: ");


$response = match(true){    
   $length >= 90 => 'Excelente',
   $length >= 60 => 'Bueno',
   $length >= 30 => 'regular',
   $length <= 30 => 'Malo',
   default => "Nota ingresa no valida."
};
echo $response;