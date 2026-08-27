<?php

function fatorial($n) {
    $fatorial = 1;
    for($i=$n; $i>=1; $i--){
        $fatorial = $fatorial * $i;
    }
    return $fatorial;
}

$num = readline("informe um número: ");
$fat = fatorial($num);
echo "fatorial: " . $fat . "\n";