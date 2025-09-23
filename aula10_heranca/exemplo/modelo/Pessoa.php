<?php

class Pessoa {

    private string $nome;
    private string $rg;
    protected int $idade;

    

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getRg(): string
    {
        return $this->rg;
    }

    public function setRg(string $rg): self
    {
        $this->rg = $rg;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}