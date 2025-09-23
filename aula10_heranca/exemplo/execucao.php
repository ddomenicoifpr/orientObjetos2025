<?php

require_once("modelo/Aluno.php");
require_once("modelo/Professor.php");

//Criar um aluno
$aluno = new Aluno();
$aluno->setMatricula("1234556");
$aluno->setNome("Gabriel");
$aluno->setRg("43673ABC");
$aluno->setIdade(16);


//Criar um professor
$professor = new Professor();
$professor->setNome("Daniel");
$professor->setRg("HJD45HJK");
$professor->setIdade(27);
$professor->setSalario(1000);

echo $aluno . "\n";
echo $professor . "\n";
