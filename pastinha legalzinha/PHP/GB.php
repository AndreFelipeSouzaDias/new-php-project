<?php

class carro{
    private $modelo;
    private $marca;
    private $anoFabrica;
    private $velocidadeMax;


    public function __toString()
    {
        $carro  = "modelo: " . $this->modelo;
        $carro .= " | marca: " . $this->marca;
        $carro .= " | ano de fabricação: " . $this->anoFabrica;
        $carro .= " | velocidade maxima: " . $this->velocidadeMax;
        return $carro . "\n";
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getAnoFabrica()
    {
        return $this->anoFabrica;
    }

    public function setAnoFabrica($anoFabrica): self
    {
        $this->anoFabrica = $anoFabrica;

        return $this;
    }

    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }
}
echo "----CARRO 1----\n";
$c1 = new carro();
$c1->setModelo(readline("Informe o modelo: "));
$c1->setMarca(readline("Informe o marca: "));
$c1->setAnoFabrica(readline("Informe o ano de fabricação: "));
$c1->setVelocidadeMax (readline("Informe a velocidade maxima: "));

echo "\n\n----CARRO 2----\n";
$c2 = new carro();
$c2->setModelo(readline("Informe o modelo: "));
$c2->setMarca(readline("Informe o marca: "));
$c2->setAnoFabrica(readline("Informe o ano da fabricação: "));
$c2->setVelocidadeMax(readline("Informe a velocidade maxima: "));

$carroMaisrapido = $c1;
$carroMaislento = $c1;

if($c2->getVelocidadeMax() > $carroMaisrapido->getVelocidadeMax())
    $carroMaisrapido = $c2;

echo "\n\nDados do carro mais rapido:\n";
echo $carroMaisrapido; 

if($c2->getVelocidadeMax() < $carroMaislento->getVelocidadeMax())
    $carroMaislento = $c2;

echo "\n\nDados do carro mais devagar:\n";
echo $carroMaislento;