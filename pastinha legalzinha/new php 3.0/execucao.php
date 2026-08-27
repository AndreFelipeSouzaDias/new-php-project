<?php

require_once ('modelo/Pais.php');
require_once ('modelo/Atleta.php');

$atletas = array();

do{
 echo "1-Cadastrar Atleta\n";
 echo "2-Excluir Atleta\n";
 echo "3-Listar Atletas\n";
 echo "0-Sair\n";

$opcao = readline("escolha uma opção: ");

 switch ($opcao){
    case 1:
        $nome = readline("Digite o nome do atleta: ");
        $idade = readline("Digite a idade do atleta: ");
        $esporte = readline("Digite o esporte do atleta: ");
        $paisNome = readline("Digite o nome do país do atleta: ");
        $paisContinente = readline("Digite o continente do país do atleta: ");
        
        $pais = new Pais($paisNome, $paisContinente);
        
        $atleta = new Atleta($nome, $idade, $esporte, $pais);
        $atletas[] = $atleta;
        
        echo "Atleta cadastrado com sucesso!";
        break;
    case 2:
        $deletarNome = readline("Digite o nome do atleta a ser excluído: ");
        array_splice($atletas, $deletarNome);
        echo "Atleta excluído com sucesso!";
        break;
    case 3:
        foreach ($atletas as $atleta) {
            echo "Nome: " . $atleta->getNome() . "\n";
            echo "Idade: " . $atleta->getIdade() . "\n";
            echo "Esporte: " . $atleta->getEsporte() . "\n";
            echo "País: " . $atleta->getPais()->getNome() . "\n";
            echo "Continente: " . $atleta->getPais()->getContinente() . "\n";
            echo "-------------------------\n";
        }
        break;
    case 0:
        echo "Saindo...";
        break;
    default:
        echo "Opção inválida!";

 }
} while ($opcao != 0);