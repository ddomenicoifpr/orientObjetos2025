<?php 

require_once("IRadio.php");
require_once("IRelogio.php");

class RadioRelogio implements IRadio, IRelogio {

    public function ligar() {
        echo "Ligado\n";
    }

    public function desligar() {
        echo "Desligado\n";
    }

    public function getStatus()
    {
        return "Utilize os métodos ligar() e desligar()";
    }

    public function mostraHora() {
        return date("H:i:s");
    }

}