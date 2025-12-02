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

        //Converter os dados do array associativo para objeto
        $clientes = $this->map($dados);
        return $clientes;        
    }

    public function buscarPorId(int $idCliente) {
        $sql = "SELECT * FROM clientes WHERE id = ?";
        $conn = Conexao::getConexao();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$idCliente]);
        $dados = $stmt->fetchAll();

        //Converter os dados do array associativo para objeto
        $clientes = $this->map($dados);
        if(! empty($clientes))
            return $clientes[0];

        return null;
    }

    public function excluirPorId($idCliente) {
        $sql = "DELETE FROM clientes WHERE id = ?";
        $conn = Conexao::getConexao();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$idCliente]);
    }

    private function map($dados) {
        $clientes = array();
        foreach($dados as $d) {
            $cliente = null;
            if($d['tipo'] == 'F') {
                $cliente = new ClientePF();
                $cliente->setNome($d['nome']);
                $cliente->setCpf($d['cpf']);

            } else {
                $cliente = new ClientePJ();
                $cliente->setRazaoSocial($d['razao_social']);
                $cliente->setCnpj($d['cnpj']);
            }

            $cliente->setId($d['id']);
            $cliente->setNomeSocial($d['nome_social']);
            $cliente->setEmail($d['email']);

            array_push($clientes, $cliente);
        }

        return $clientes;
    }
}