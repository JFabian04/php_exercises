<?php
$hora = readline("Ingrese la hora, formato (00:00): ");

$responde = match (true) {
    ($hora >= '12:00' && $hora < '18:00') =>   "Franja horaria - Tarde",

    ($hora >= '18:00' && $hora < '23:59') =>  "Franja horaria - Noche.",

    ($hora >= '00:00' && $hora < '12:00') =>  "Franja horaria - Mañana.",
    
    default => "Hora no valida"
};

echo $responde;
