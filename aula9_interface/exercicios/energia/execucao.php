<?php

require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");
require_once("modelo/Residencial.php");

echo "1- Residencial\n";
echo "2- Comercial\n";
echo "3- Industrial\n";

$opcao = readline("Informe o tipo do consumidor: ");

$consumidor = null;
if($opcao == 1) {
    $consumidor = new Residencial();
    
} else if($opcao == 2) {
    $consumidor = new Comercial();
    
} else if($opcao == 3) {
    $consumidor = new Industrial();
    
} else {
    echo "Opção inválida!\n";
}

if($consumidor) {
    $consumidor->setKWh(readline("Informe a quantidade de kWh consumido: "));
    echo "Valor da energia R$ " . $consumidor->getValorFatura() . "\n";
}