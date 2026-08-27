<?php

class Receita{
    private $descricao;
    private $valor;

    public function __toString() {
        return "Descrição: " . $this->descricao . ", Valor: " . $this->valor . "\n";
    }

 public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}


class Despesa{
    private $descricao;
    private $valor;

     public function __toString() {
        return "Descrição: " . $this->descricao . ", Valor: " . $this->valor . "\n";
    }

    /**
     * Get the value of descricao
     */
   

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}
$receitas = [];
$despesas = [];

$opcao = 0;

do{
    echo "Escolha uma opção:\n";
    echo "1 - adicionar receita\n";
    echo "2 - adicionar despesa\n";
    echo "3 - listar receita\n";
    echo "4 - listar despesa\n";
    echo "5 - Sumarizar\n";
    echo "0 - Sair\n";
    $opcao = readline("Opção: ");

    switch ($opcao) {
        case 1:
            
            $descricao = readline("Digite a descrição da receita: ");
            $valor = (float)readline("Digite o valor da receita: ");
            $receita = new Receita();
            $receita->setDescricao($descricao);
            $receita->setValor($valor);
            $receitas[] = $receita;


            echo "Receita cadastrada com sucesso!\n";
            break;

        case 2:
            
            $descricao = readline("Digite a descrição da despesa: ");
            $valor = (float)readline("Digite o valor da despesa: ");
            $despesa = new Despesa();
            $despesa->setDescricao($descricao);
            $despesa->setValor($valor);
            $despesas[] = $despesa;
            

            echo "Despesa cadastrada com sucesso!\n";
            break;

        case 3:
            if(count($receitas) > 0) {
                echo "\nReceitas cadastradas:\n";
                foreach($receitas as $r) 
                    echo $r;
            } else
                echo "\nNão há receitas cadastradas!\n";
            
            break;

        case 4:
            if(count($despesas) > 0) {
                echo "\nDespesas cadastradas:\n";
                foreach($despesas as $d)
                    echo $d;
            } else
                echo "\nNão há despesas cadastradas!\n";
            
            break;

        case 5:
            $totalReceita = 0;
            $totalDespesa = 0;

            foreach ($receitas as $r ) {
                $totalReceita += $r->getValor();
            }
            foreach ($despesas as $d) {
                $totalDespesa += $d->getValor();
            };

            $saldo = $totalReceita - $totalDespesa;
            echo "seu saldo é de: " . $saldo . "\n";
            break;

        case 0: 
            echo "Saindo...\n";
            break;

        default:
            echo "Opção inválida. Tente novamente.\n";
    }
} while ($opcao != 0);