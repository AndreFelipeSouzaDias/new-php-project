<?php

require_once("IRadio.php");

class Radio implements IRadio{

    //atributos
    private float $frequencia;
    private bool $ligado;

    //metodos

      public function __construct() {
            $this->ligado = true;

      }

      public function ligar() {
        $this->ligado = true;

      }
      public function desligar() {
        $this->ligado = false;
     
      }



    /**
     * Get the value of frequencia
     */
    public function getFrequencia(): float
    {
        return $this->frequencia;
    }

    /**
     * Set the value of frequencia
     */
    public function setFrequencia(float $frequencia)
    {
        $this->frequencia = $frequencia;

        return $this;
    }

    /**
     * Get the value of ligado
     */
    public function isLigado(): bool
    {
        return $this->ligado;
    }

    /**
     * Set the value of ligado
     */
    public function setLigado(bool $ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }
}