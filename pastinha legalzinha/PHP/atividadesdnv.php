<?php

function imprimepaises($pais)
{
    $totalhabitantes = 0;

    foreach ($pais as $p) {
        echo $p["pais"] . "-";
        echo $p["continente"] . "-";
        echo $p["habitantes"] . "\n";
        $totalhabitantes += $p["habitantes"];
    }
    echo "\n o numero total de niggers é: $totalhabitantes \n";
}


for ($i = 1; $i <= 5; $i++) {
    $pais = readline("informe um nome de um pais: ");
    $cont = readline("informe o continente do seu pais: ");
    $hab = readline("informe o numero de habitantes: ");

    $pais = array("pais" => $pais, "continente" => $cont, "habitantes" => $hab);
    $paises[] = $pais;
}

imprimepaises($paises);
