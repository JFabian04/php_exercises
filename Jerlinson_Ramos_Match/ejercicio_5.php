<?php 
$day = readline("Ingrese el numero del 1 al 7, dependiendo el dia: ");

$response = match($day){
    '1' => 'Lunes',
    '2' => 'Martes',
    '3' => 'Miercoles',
    '4' => 'Jueves',
    '5' => 'Viernes',
    '6' => 'Sabado',
    '7' => 'Domingo',
    default => "El dia no existe."
};
echo $response;