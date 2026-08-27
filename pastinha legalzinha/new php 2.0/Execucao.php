<?php

require_once('modelo/Departamento.php');
require_once('modelo/Funcionario.php');

$Funcionarios = array();

for ($i = 0; $i < 5; $i++) {
    $nome = readline("Digite o nome do funcionário: ");
    $cargo = readline("Digite o cargo do funcionário: ");
    $salario = readline("Digite o salário do funcionário: ");
    $Nomedepto = readline("Digite o nome do departamento: ");
    $NumeroSala = readline("Digite o número da sala do departamento: ");

    $Departamento = new Departamento($Nomedepto, $NumeroSala);
    $Funcionario = new Funcionario($nome, $cargo, $salario, $Departamento);

    $Funcionarios[] = $Funcionario;
}

foreach ($Funcionarios as $f) {
    echo $f;
}
