<?php

require_once("modelo/Clube.php");
require_once("modelo/Jogador.php");

$chape = new Clube();
$chape->setNome("Chapecoense");
$chape->setDivisao("B");
$chape->setAnoFundacao(1977);
//print_r($chape);

$jogador = new Jogador();
$jogador->setNome("Neymar");
$jogador->setNumero(10);
$jogador->setPosicao("Atacante");
$jogador->setClube($chape);

//Imprimir os dados
echo "Dados do Jogador: \n";
echo "Nome: " . $jogador->getNome() . "\n";
echo "Número: " . $jogador->getNumero() . "\n";
echo "Posição: " . $jogador->getPosicao() . "\n";
echo "Clube: " . $jogador->getClube()->getNome() . "\n";