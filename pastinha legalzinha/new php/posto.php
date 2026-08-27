<?php

class posto {
    private $QtdCombustivel;
    private $abastecimentos;


public function __construct() {
    $this->QtdCombustivel = 0;
    $this->abastecimentos = [];
}

public function abastecer($QtdLitros) {
    if ($QtdLitros <= $this->QtdCombustivel) {
        $this->QtdCombustivel -= $QtdLitros;
        $this->abastecimentos[] = $QtdLitros;
        echo "Abastecimento realizado com sucesso!\n";
    } else {
        echo "Não há combustível suficiente no estoque para abastecer.\n";
    }

}

public function reporEstoque($QtdLitros) {
    $this->QtdCombustivel += $QtdLitros;
    echo "Estoque reposto com sucesso!\n";
}

    /**
     * Get the value of qtdCombustivel
     */
    public function getQtdCombustivel()
    {
        return $this->QtdCombustivel;
    }

    /**
     * Set the value of qtdCombustivel
     */
    public function setQtdCombustivel($QtdCombustivel): self
    {
        $this->QtdCombustivel = $QtdCombustivel;

        return $this;
    }

    /**
     * Get the value of abastecimentos
     */
    public function getAbastecimentos()
    {
        return $this->abastecimentos;
    }

    /**
     * Set the value of abastecimentos
     */
    public function setAbastecimentos($abastecimentos): self
    {
        $this->abastecimentos = $abastecimentos;

        return $this;
    }

  }
  
  $posto = new posto();

  $opcao = 0;
  do {
    echo "1 - Abastecer\n";
    echo "2 - Repor Estoque\n";
    echo "3 - listar Abastecimentos\n";
    echo "0 - Sair\n";
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            $QtdLitros = readline("Digite a quantidade de litros para abastecer: ");
            $posto->abastecer($QtdLitros);
            break;

        case 2:
            $QtdLitros = readline("Digite a quantidade de litros para repor o estoque: ");
            $posto->reporEstoque($QtdLitros);
            break;

        case 3:
            echo "Abastecimentos realizados:\n";
            foreach ($posto->getAbastecimentos() as $a) {
                echo "Quantidade de litros: " . $a . "\n";
            }
            break;

        case 0:
            echo "Saindo...\n";
            break;

        default:
            echo "Opção inválida. Tente novamente.\n";
    }
  } while ($opcao != 0);

