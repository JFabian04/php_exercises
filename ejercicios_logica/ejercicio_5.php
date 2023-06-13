 <?php
    $num = intval(readline("Ingrese el numero que desea conocer si es primo: "));
    $valida = 0;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i != 0) {
        } else {
            $valida = $valida + 10;
        }
    }
    if ($num == 1) {
        echo "El numero 1 es invalido en este proceso. ";
    } elseif($num > 1) {
        if ($valida > 0) {
            echo "NO es primo";
        } elseif ($valida == 0) {
            echo "Es primo";
        }
    }
    ?>