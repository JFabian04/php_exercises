<?php
 $word=readline("Ingrese una palabra: ");

  if ($word==strrev($word)) {
     echo"\nEs un palindromo.";
  }
  else{
    echo"\nNo es un palindromo.";
  }
?>