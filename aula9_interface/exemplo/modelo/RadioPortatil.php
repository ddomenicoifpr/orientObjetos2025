<?php 

require_once("IRadio.php");

class RadioPortatil implements IRadio {

    private bool $ligado;

    //Métodos
    public function __construct() {
        $this->desligar();
    }

    public function ligar() {
        $this->ligado = true;
    }

    public function desligar() {
        $this->ligado = false;
    }

    public function getStatus()
    {
        if($this->ligado)
            return "Ligado";

        return "Desligado";
    }

    //GETs e SETs
    public function getLigado(): bool
    {
        return $this->ligado;
    }

    public function setLigado(bool $ligado): self
    {
        $this->ligado = $ligado;

        return $this;
    }
}