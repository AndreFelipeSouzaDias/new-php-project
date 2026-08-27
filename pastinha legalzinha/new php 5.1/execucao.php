<?php

require_once("modelo/Filme.php");

$filmes = [];

for ($i=1; $i <= 5; $i++) { 
    $titulo = readline("informe o nome do filme: \n");
    $diretor = readline("informe o nome do diretor do filme: \n");
    $anoLancamento = readline("informe o ano de lançamento do filme: \n");
    $genero = readline("informe o genero do filme: \n");

    $filmes[] = new Filme($titulo, $diretor, $anoLancamento, $genero);
}

do{
    echo "1-Buscar por titulo\n";
    echo "2-Buscar por genero\n";
    echo "0-Sair\n";
    $opcao = readline("Escolha uma opção: \n");

    switch ($opcao) {
        case 1:
            $titulo = readline("Digite o titulo do filme: \n");
            foreach ($filmes as $filme) {
                if ($filme->getTitulo() == $titulo) {
                    echo $filme;
                }else{
                    echo "filme não encontrado.\n";
                }
            }
            break;
        case 2:
            $genero = readline("Digite o genero do filme: \n");
            foreach ($filmes as $filme) {
                if ($filme->getGenero() == $genero) {
                    echo $filme;
                }else{
                    echo "filme não encontrado.\n";
                }

            }
            break;
        case 0:
            exit();
        default:
            echo "Opção inválida!\n";
    }
} while ($opcao != 0);