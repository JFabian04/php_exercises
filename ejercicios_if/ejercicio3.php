<?php
$day=readline("Ingrese un numero del 1 al 7 según el día de la semana: ");
if ($day == 1) {
    echo "Lunes";
}
elseif($day == 2){
    echo "Martes";
}
elseif($day == 3){
    echo "Miercoles";
}
elseif($day == 4){
    echo "Jueves";
}
elseif($day == 5){
    echo "Viernes";
}
elseif($day == 6){
    echo "Sabado";
}
elseif($day == 7){
    echo "Domingo";
}elseif($day >= 8 || $day <= 0){
    echo "Numero ingresado no valido.";
}
    
?>