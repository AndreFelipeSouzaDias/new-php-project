<?php

$num = [];

echo "escreva 10 numeros:\n";

for($i=1; $i <= 10; $i++){

    $entry = readline("informe o numero: ");

    $num[0]=$entry;

    if ($num[0]> 0) {
        echo "o numero " . $num[0] . " é positivo\n";

} else {
        echo "o numero " . $num[0] . " é negativo\n";

 }
}