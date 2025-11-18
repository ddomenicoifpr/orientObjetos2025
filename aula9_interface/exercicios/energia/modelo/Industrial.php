<?php

require_once("IConsumidorEnergia.php");
require_once("ConsumidorEnergia.php");

class Industrial extends ConsumidorEnergia implements IConsumidorEnergia {

    //Métodos
    public function getValorFatura() {
        $valor = 0;
        if($this->kWh <= 500)
            $valor = $this->kWh * 1.80;
        else
            $valor = (1.80 * 500) + (($this->kWh - 500) * 2.30);
        
        return $valor;
    }

}