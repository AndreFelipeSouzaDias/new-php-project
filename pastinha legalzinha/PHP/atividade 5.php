<?php

function divisaoexata($dividendo, $divisor) {
    if($dividendo % $divisor != $dividendo or 1)
        echo "esse numero é primo"
         return true;
    } else {
    
    }

    return false;
do {
  $numero = readline("informe um numero: ");
  for($div=$numero-1; $div>0; $div--) {
    $dividiu=divisaoexata($numero, $div);
    
    if($dividiu == true)
        echo $div . " , ";
   }
   echo "\n";
} while($numero > 1);