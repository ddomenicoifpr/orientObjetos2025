<?php

require_once("modelo/Animal.php");
require_once("modelo/Cachorro.php");
require_once("modelo/Gato.php");
require_once("modelo/Rottweiler.php");

$animal = new Animal();
echo $animal->falar() . "\n";

$cao = new Cachorro();
echo $cao->falar() . "\n";

$gato = new Gato();
echo $gato->falar() . "\n";
echo $gato->falarAnimal() . "\n";

$rot = new Rottweiler();
echo $rot->falar() . "\n";


/*
require_once("modelo/Sobrecarga.php");

$sobre = new Sobrecarga();
$sobre->escrever("Estudantes ansiosos pela Latinoware!");
$sobre->escrever("Turma foi bem na prova!");
$sobre->escrever();
*/