<?php
$number = readline("Ingrese el total de numeros que desea ordenar: ");
$array = [];

for ($i = 0; $i < $number; $i++) {
    $n = readline("Ingrese el número: ");
    $array[$i] = $n;
}

for ($i = 0; $i < $number - 1; $i++) {
    for ($j = 0; $j < $number - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $change = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $change;
        }
    }
}


print_r($array);

?>
