<?php 
$number = readline("Ingrese un numero: ");

$response = match($number){
    '1' => "El valor ingresado es igual a 1",
    '2' => "El valor ingresado es igual a 2",
    '3' => "El valor ingresado es igual a 3",
    default => "El numero ingresado no coincide."
};
echo $response;