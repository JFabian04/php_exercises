<?php
$age=readline("Ingrese su edad: ");

if($age>=18){
    $lic=readline("¿Tiene licencia de conducir? ");
    if($lic=="si"){
        echo"Puede conducir.";
    }
    if($lic=="no"){
        echo"Necesita tener un licencia para conducir.";
    }
}
if($age<18){
    echo"Usted no puede conducir";
}
?>