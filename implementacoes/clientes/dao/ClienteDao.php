<?php

require_once("modelo/Cliente.php");
require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("util/Conexao.php");

class ClienteDao {

    public function inserir(Cliente $cliente) {

        $sql = "INSERT INTO clientes 
                (tipo, nome_social, email, nome, cpf, razao_social, cnpj)
                VALUES 
                (?, ?, ?, ?, ?, ?, ?)";

        $conn = Conexao::getConexao();
        $stmt = $conn->prepare($sql);

        if($cliente instanceof ClientePF) {
            $stmt->execute(array($cliente->getTipo(),
                                $cliente->getNomeSocial(),
                                $cliente->getEmail(),
                                $cliente->getNome(),
                                $cliente->getCpf(),
                                NULL,
                                NULL));
        } else if($cliente instanceof ClientePJ) {
            $stmt->execute(array($cliente->getTipo(),
                                $cliente->getNomeSocial(),
                                $cliente->getEmail(),
                                NULL,
                                NULL,
                                $cliente->getRazaoSocial(),
                                $cliente->getCnpj()));
        } 

    }

    public function listar() {
        $sql = "SELECT * FROM clientes";

        $conn = Conexao::getConexao();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $dados = $stmt->fetchAll();

        //TODO - Converter os dados do array para objetos

        return $dados;
    }
}