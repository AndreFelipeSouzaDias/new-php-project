<?php

class Cidade {
    private $nome;
    private $qtdHacbitantes;
    private $altitude;
    private $estado;

  

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
     * Get the value of qtdHacbitantes
     */
    public function getQtdHacbitantes()
    {
        return $this->qtdHacbitantes;
    }

    /**
     * Set the value of qtdHacbitantes
     */
    public function setQtdHacbitantes($qtdHacbitantes): self
    {
        $this->qtdHacbitantes = $qtdHacbitantes;

        return $this;
    }

    /**
     * Get the value of altitude
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     */
    public function setAltitude($altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}