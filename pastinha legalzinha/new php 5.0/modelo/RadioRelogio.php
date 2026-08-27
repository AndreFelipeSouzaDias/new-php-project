<?php

require_once('IRelogio.php');
require_once('IRadio.php');

class RadioRelogio implements IRadio, IRelogio {

        private string $estado;
        
        public function __construct() {
            $this->estado = "Desligado";
        }


        public function ligar(){
            $this->estado = "Ligado";
        }
    
        public function desligar(){
            $this->estado = "Desligado";
        }

        public function mostrarHora(){
            echo date("H:m:s");

        }
        /**
         * Get the value of estado
         */
        public function getEstado(): string
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         */
        public function setEstado(string $estado): self
        {
                $this->estado = $estado;

                return $this;
        }
   }
