<?php

abstract class ConsumidorEnergia {

    //Atributos
    protected int $kWh;


    //GETs e SETs
    public function getKWh(): int
    {
        return $this->kWh;
    }

    public function setKWh(int $kWh): self
    {
        $this->kWh = $kWh;

        return $this;
    }
}