<?php

$paises = array();

//1- Leitura dos dados dos países
for($i=1; $i<=5; $i++) {
    echo "\n-----País " . $i . "-----\n";
    $pais['nome'] = readline("Informe o nome: ");
    $pais['continente'] = readline("Informe o continente: ");
    $pais['qtdHabitantes'] = readline("Informe a quantidade de habitantes: ");

    array_push($paises, $pais);
}

//2- Impressão dos países e cálculo dos habitentes
echo "\nDados dos países lidos:\n";
$totalHabitantes = 0;
foreach($paises as $p) {
    echo $p['nome'] . " | " . $p['continente'] . " | " . $p['qtdHabitantes'] . "\n";
    $totalHabitantes += $p['qtdHabitantes'];
}

//3- Impressão do total de habitantes
echo "\n\nTotal de habitantes dos 5 países: " . $totalHabitantes;
echo "\n";
