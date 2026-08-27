<?php


 $calculos = array();

for($i=1; $i <= 5; $i++){
    $base = readline("fale a base do seu retangulo: ");
    $altura = readline("fale a altura do seu retangulo: ");
    echo "\n";

    $calc = array("base" => $base, "altura" => $altura);
    $calculos[] = $calc;
}
    function result($base, $altura){
        $result = $base * $altura;
        return $result;
    };

    foreach ($calculos as $key => $i ) {
        $result = result($i["base"], $i["altura"]);
        echo "area do retangulo: " . $result . "\n";
    }