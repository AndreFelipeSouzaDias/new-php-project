<?php

class Pais {
    private $nome;
    private $continente;

    public function __construct($nome, $continente) {
        $this->nome = $nome;
        $this->continente = $continente;
    }

    public function __toString() {
        return "Nome: " . $this->nome . ", Continente: " . $this->continente;
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
     * Get the value of continente
     */
    public function getContinente()
    {
        return $this->continente;
    }

    /**
     * Set the value of continente
     */
    public function setContinente($continente): self
    {
        $this->continente = $continente;

        return $this;
    }
}
