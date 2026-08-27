<?php

class veiculo{
    private $capacidade;
    private $PassagensVendidas;

    public function __construct($capacidade) {
        $this->capacidade = $capacidade;
        $this->PassagensVendidas = 0;

        }
        public function venderPassagem($quantidade){
                if($quantidade <= ($this->capacidade - $this->PassagensVendidas)) {
                    $this->PassagensVendidas += $quantidade;
                    return true;

                }
                return false;
        }

    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    public function getPassagensVendidas()
    {
        return $this->PassagensVendidas;
    }

    public function setPassagensVendidas($PassagensVendidas): self
    {
        $this->PassagensVendidas = $PassagensVendidas;

        return $this;
    }
}

$capacidade = readfile("informe a capacidade do veículo: ");
$veiculo = new veiculo($capacidade);

do {
    $qtd = readfile("Informe a quantidade de passagens: ");
    if($qtd > 0) {
    $vendeu = $veiculo->venderPassagem($qtd);
        if($vendeu) {
            echo "passagens vendidas!\n";
        } else {
            echo "não foi possivel vender a quantidade solicitada!\n";
        }
     }
} while ($qtd<= 10);