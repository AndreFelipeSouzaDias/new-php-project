<?php

class Pessoa{
    public $nome;
    public $endereço;
    public $cidade;
    public $uf;
    public $altura;

    function falarOla(){
        echo "Olá mundo, sou $this->nome \n";
    }

    function falarEndereco(){
        echo "Moro em $this->endereço, $this->cidade/$this->uf \n";
    }

    function falarAltura(){
        echo "Tenho $this->altura metros\n";
    }
}

$pessoa1 = new Pessoa();
$pessoa1 -> nome = "daniel";
$pessoa1 -> endereço = "rua do bauduco";
$pessoa1 -> cidade = "rolandia";
$pessoa1 -> uf = "CE";
$pessoa1 -> altura = 67.67;
$pessoa1 -> falarOla();
$pessoa1 -> falarEndereco();
$pessoa1 -> falarAltura();

$pessoa2 = new Pessoa();
$pessoa2 -> nome = "pedro";
$pessoa2 -> endereço = "rua do arrombado";
$pessoa2 -> cidade = "pintolandia";
$pessoa2 -> uf = "SP";
$pessoa2 -> altura = 1.37;
$pessoa2 -> falarOla();
$pessoa2 -> falarEndereco();
$pessoa2 -> falarAltura();


