<?php

require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");

//Teste da conexão com o banco
require_once("util/Conexao.php");
$pdo = Conexao::getConexao();
print_r($pdo);
exit;


do {
    echo "\n\n----CADASTRO DE CLIENTES----\n";
    echo "1- Cadastrar Cliente PF\n";
    echo "2- Cadastrar Cliente PJ\n";
    echo "3- Listar Clientes\n";
    echo "4- Buscar Cliente\n";
    echo "5- Excluir Cliente\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    switch ($opcao) {
        case 1:
            echo "Não implementado!\n";
            break;

        case 2:
            echo "Não implementado!\n";
            break;

        case 3:
            echo "Não implementado!\n";
            break;

        case 4:
            echo "Não implementado!\n";
            break;

        case 5:
            echo "Não implementado!\n";
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!";
    }
} while($opcao != 0);
