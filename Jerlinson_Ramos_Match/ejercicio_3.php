<?php 
$letra = readline("Ingrese una letra: ");

$response = match($letra){
    'a','A' => "Vocal A.",
    'e','E' => "Vocal E",
    'i','I' => "Vocal I",
    'o','O' => "Vocal O",
    'u','U' => "Vocal u",
    default => "La letra es una consonante."
};
echo $response;