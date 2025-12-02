<?php

require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("dao/ClienteDao.php");

//Teste da conexão com o banco
/*
require_once("util/Conexao.php");
$pdo = Conexao::getConexao();
print_r($pdo);
exit;
*/

//MENU
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
            $cliente = new ClientePF();
            $cliente->setNomeSocial(readline("Informe o nome social: "));
            $cliente->setEmail(readline("Informe o e-mail: "));
            $cliente->setNome(readline("Informe o nome: "));
            $cliente->setCpf(readline("Informe o CPF: "));

            //Persistir o objeto no banco de dados
            $dao = new ClienteDao();
            $dao->inserir($cliente);
            echo "Cliente PF inserido com sucesso!";
            break;

        case 2:
            //Ler os dados e criar o objeto 
            $cliente = new ClientePJ();
            $cliente->setNomeSocial(readline("Informe o nome social: "));
            $cliente->setEmail(readline("Informe o e-mail: "));
            $cliente->setRazaoSocial(readline("Informe a razão social: "));
            $cliente->setCnpj(readline("Informe o CNPJ: "));

            //Persistir o objeto no banco de dados
            $dao = new ClienteDao();
            $dao->inserir($cliente);
            echo "Cliente PJ inserido com sucesso!";
            break;

        case 3:
            $dao = new ClienteDao();
            $clientes = $dao->listar();

            foreach($clientes as $c) {
                echo  $c . "\n";
            }
            break;

        case 4:
            //1- Ler o ID do cliente a ser buscar     
            $id = readline("Informe o ID do cliente: ");

            //2- Obter o cliente do banco de dados e imprimí-lo
            $dao = new ClienteDao();
            $cliente = $dao->buscarPorId($id);

            //if($cliente != null)
            if($cliente)
                echo $cliente . "\n";
            else
                echo "Cliente não encontrado!\n";

            break;

        case 5:
            $dao = new ClienteDao();
            
            //1- Listar os clientes
            $clientes = $dao->listar();
            foreach($clientes as $c) {
                echo  $c . "\n";
            }

            //2- Ler o ID do cliente que será excluído
            $id = readline("Informe o ID do cliente:");

            //2.1- Validar se o ID corresponde a um cliente
            $cliente = $dao->buscarPorId($id);
            if($cliente) {
                //3- Excluir do banco de dados (pelo ID)
                $dao->excluirPorId($id);
                echo "Cliente excluído com sucesso!\n";
                
            } else
                echo "Cliente não encontrado!\n";

            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!";
    }
} while($opcao != 0);
