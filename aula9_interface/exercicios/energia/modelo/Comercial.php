<?php

require_once("IConsumidorEnergia.php");
require_once("ConsumidorEnergia.php");

class Comercial extends ConsumidorEnergia implements IConsumidorEnergia {

    //Métodos
    public function getValorFatura() {
        $valor = 0;
        if($this->kWh <= 100)
            $valor = $this->kWh * 1.45;
        else
            $valor = (1.45 * 100) + (($this->kWh - 100) * 1.60);
        
        return $valor;
    }

}