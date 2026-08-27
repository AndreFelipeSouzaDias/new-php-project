<?php

$pessoa = array("nome" => "Daniel",
                "profissão" => "Professor",
                "idade" => 28);

echo "O professor tem " . $pessoa["idade"] . " anos\n";

foreach($pessoa as $chaves => $dado) {
    echo $chave . " = " . $dado . "\n";
}
