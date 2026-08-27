<?php

class Departamento {
    private string $departamentoNome;
    private int $departamentoNumeroSala;
    
   public function __toString() {
        return "Nome: " . $this->departamentoNome . ", Número da Sala: " . $this->departamentoNumeroSala;
    } 

    public function __construct(string $departamentoNome, int $departamentoNumeroSala) {
        $this->departamentoNome = $departamentoNome;
        $this->departamentoNumeroSala = $departamentoNumeroSala;
    }

    public function getNome(): string
    {
        return $this->departamentoNome;
    }

    public function setNome(string $nome): self
    {
        $this->departamentoNome = $nome;

        return $this;
    }

    public function getNumeroSala(): int
    {
        return $this->departamentoNumeroSala;
    }

    public function setNumeroSala(int $numeroSala): self
    {
        $this->departamentoNumeroSala = $numeroSala;

        return $this;
    }

}