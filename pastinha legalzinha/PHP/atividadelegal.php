<?php

 class Escola {

    private $nome;
    private $endereco;
    private $qtdAlunos;

    public function  __toString()
    {
        $dados = "nome: " . $this->nome . "\n";
        $dados .= " | endereço: " . $this->endereco . "\n";
        $dados .= " | quantidade de alunos: " . $this->qtdAlunos . "\n";
        return $dados;
    }



    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of qtdAlunos
     */
    public function getQtdAlunos()
    {
        return $this->qtdAlunos;
    }

    /**
     * Set the value of qtdAlunos
     */
    public function setQtdAlunos($qtdAlunos): self
    {
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }
}
echo "\n-----ESCOLA 1-----\n";
$e1 = new Escola();
$e1 -> setNome(readline("nome da escola 1: \n"));
$e1 -> setEndereco(readline("endereço da escola 1: \n"));
$e1 -> setQtdAlunos(readline("quantos alunos tem na escola 1: \n"));

echo "-----ESCOLA 2-----";
$e2 = new Escola();
$e2 -> setNome(readline("nome da escola 1: \n"));
$e2 -> setEndereco(readline("endereço da escola 2: \n"));
$e2 -> setQtdAlunos(readline("quantos alunos tem na escola 2: \n"));

echo "-----ESCOLA 3-----";
$e3 = new Escola();
$e3 -> setNome(readline("nome da escola 3: \n"));
$e3 -> setEndereco(readline("endereço da escola 3: \n"));
$e3 -> setQtdAlunos(readline("quantos alunos tem na escola 3: \n"));

echo "-----ESCOLA 4-----";
$e4 = new Escola();
$e4 -> setNome(readline("nome da escola 4: \n"));
$e4 -> setEndereco(readline("endereço da escola 4: \n"));
$e4 -> setQtdAlunos(readline("quantos alunos tem na escola 4: \n"));
