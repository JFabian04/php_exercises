<?php
$count = readline("Ingrese el total de notas que se ingresarán: \n");
if(is_numeric($count)){
    $notes =[];
    $sum=0;
    for ($i=1; $i<=$count ; $i++) { 
        $notes[$i-1]= floatval (readline("Nota: $i :\n"));
        $sum += $notes[$i-1];
    }
    $average = $sum/$count;
    echo("Promedio: $average\n");
}else{
    echo "Dato ingresado no valido";
}
