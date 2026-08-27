<?php

$tap = array(0 => array("nome" =>"João", "idade" => 24, "cidade" => "Foz do iguaçu", "UF" => "PR"),
1 => array("nome" =>"claudette", "idade" => 64, "cidade" => "Florianopolis", "UF" => "SC"),
2 => array("nome" =>"jefferson", "idade" => 46, "cidade" => "petropolis", "UF" => "RJ"),
3 => array("nome" =>"joana", "idade" => 34, "cidade" => "guarulhos", "UF" => "SP"));

echo $tap[0]["nome"];
echo $tap[1]["idade"];
echo $tap[2]["cidade"];
echo $tap[3]["UF"];

foreach ($tap as $key => $legal){
    echo "nome = " . $legal['nome'];
    echo " | idade = " . $legal['idade'];
    echo " | cidade = " . $legal['cidade'];
    echo " | UF = " . $legal['UF'];
    echo "\n";
}