<?php
$list = readline("Ingrese una lista de elementos separados por comas sin espacios: ");
$listArray = explode(",", $list);
$element = readline("Ingrese el nombre del elemento que desea buscar en la lista: ");
$position = -1;
for ($i = 0; $i < count($listArray); $i++) {
    if ($element == $listArray[$i]) {
        $position += $i + 1;
    }
}
echo "El elemento $element se encuentra en la posición $position.";
?>

