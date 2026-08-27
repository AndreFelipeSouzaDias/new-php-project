<?php

function circunferencia($raio){
    $circun = 2 * $raio * 3.14;
    return $circun;
}

for($i=1; $i<=3; $i++){
    $raio = readline("informe o raio: ");

    $area = $area($raio);
    echo "area do circulo: " . $area . "\n";

    $c = circunferencia($raio);
    echo "circunfenrecia do circulo: " . $c . "\n";
}