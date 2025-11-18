<?php

require_once("IConsumidorEnergia.php");
require_once("ConsumidorEnergia.php");

class Residencial extends ConsumidorEnergia implements IConsumidorEnergia {

    //Métodos
    public function getValorFatura() {
        $valor = $this->kWh * 1.05;
        return $valor;
    }


}