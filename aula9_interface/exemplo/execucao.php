<?php

require_once("modelo/RadioPortatil.php");
require_once("modelo/RadioRelogio.php");

$radio = new RadioPortatil();
echo "Rádio está " . $radio->getStatus() . "\n";

$radio->ligar();
echo "Rádio está " . $radio->getStatus() . "\n";

echo "\n\n";
$radioRelogio = new RadioRelogio();
$radioRelogio->ligar();
$radioRelogio->desligar();
echo $radioRelogio->mostraHora() . "\n";