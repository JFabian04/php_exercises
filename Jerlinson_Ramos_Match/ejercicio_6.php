<?php 
$month = readline("Ingrese el numero del mes 1 a 12: ");


$response = match($month){
    '1' => 'Enero',
    '2' => 'Febrero',
    '3' => 'Marzo',
    '4' => 'Abril',
    '5' => 'Mayo',
    '6' => 'Junio',
    '7' => 'Julio',
    '8' => 'Agosto',
    '9' => 'Septiembre',
    '10'=> 'Octubre',
    '11'=> 'Noviembre',
    '12'=> 'Diciembre',
    default => "El mes ingresado no existe."
};
echo $response;