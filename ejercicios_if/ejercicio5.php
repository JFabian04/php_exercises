<?php
$number1 = readline("Ingrese un Número: ");
$number2 = readline("Ingrese un Número: ");

if ($number1 > 10 or $number2 > 10) {
    if ($number1 > 10 && $number2 > 10) {
        echo "Ambos números son mayores que 10";
    } else {
        echo "Solo un número es mayor que 10";
    }
} else {
    echo "Ninguno de los números es mayor que 10";
};
