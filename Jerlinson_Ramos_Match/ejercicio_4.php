<?php 
$day = readline("Ingrese el dia: ");
$month = readline("Ingrese el mes: ");
$year = readline("Ingrese el año: ");

$response = match($month){
    '1' => 'Comienzo de año',
    '2' => 'Volvemos al trabajo',
    '3' => 'Dia de la mujer',
    '4' => 'Dia del hombre',
    '5' => 'Vivan las madres',
    '6' => 'San Pedro!!!',
    '7' => 'Mitad de año',
    '8' => 'Mes de las cometas',
    '9' => 'Amor y amistad',
    '10'=> 'Hallowen',
    '11'=> 'Casi fin de año',
    '12'=> 'Fin de año!!',
    default => "El mes ingresado no existe."
};
echo $response;