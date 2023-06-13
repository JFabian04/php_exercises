<?php 
echo " 1: Suma \n 2: Resta \n 3: Multiplicacion \n 4: Division \n 5: Hallar numero mayor \n\n ";
$data = readline("Ingrese el numero de la acción que desea realizar: ");

$number1 = readline("Ingrese el primero numero: ");
$number2 = readline("Ingrese el segundo numero: ");
echo "\n";

$suma = $number1 + $number2;
$resta = $number1 - $number2;
$multiplicacion = $number1 * $number2;
$division = $number1 / $number2;
if ($number1 > $number2) {
   $mayor = "El primer numero es el mayor.";
}else{
   $mayor = "El segundo numero es el mayor.";
}
if ($number1 == $number2) {
   $mayor = "lo numeros son iguales";
}

$response = match($data){    
   '1' => "Resultado de la suma: ". $suma,
   '2' => "Resultado de la resta: ". $resta,
   '3' => "Resultado de la multiplicacion: ". $multiplicacion,
   '4' =>"Resultado ed la division: ". $division,
   '5' => $mayor,
   default => "Operacion no valida."
};
echo $response;