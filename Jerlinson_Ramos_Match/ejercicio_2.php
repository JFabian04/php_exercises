<?php 
$color = readline("Ingrese un color: ");

$response = match($color){
    'rojo','Rojo' => "Color calido.",
    'azul','Azul' => "Color Frio",
    'verde','Verde' => "Color suave",
    default => "El color ingresado no pertenece."
};
echo $response;