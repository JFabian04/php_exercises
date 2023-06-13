<?php
$num = intval (readline("Ingrese un numero para hallar su factorial:"));
$mult=1;
for ($i=1; $i<=$num; $i++) { 
    $mult = $mult* $i;
    
}
echo $mult;

?>