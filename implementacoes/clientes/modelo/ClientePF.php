<?php

require_once("Cliente.php");

class ClientePF extends Cliente {

    //Atributos
    private string $nome;
    private string $cpf;

    //Métodos
    public function getNomeCompleto() {
        return $this->nome;
    }

    public function getNroDoc() {
        return $this->cpf;
    }

    public function getTipo() {
        return "F";
    }

    //GET e SET
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}