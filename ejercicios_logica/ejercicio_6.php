<?php
$num = readline("Escribe el número a invertir: ");
$numstring = (string) $num;
$res = "";
for ($i = strlen($numstring) - 1; $i >= 0; $i--) {
    $res .= $numstring[$i];
}
echo "Número invertido: " . (int) $res . "\n";

?>