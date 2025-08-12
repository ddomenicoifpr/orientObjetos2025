<?php

class Clube {

    private string $nome;
    private string $divisao;
    private int $anoFundacao;


    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDivisao(): string
    {
        return $this->divisao;
    }

    public function setDivisao(string $divisao): self
    {
        $this->divisao = $divisao;

        return $this;
    }

    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    public function setAnoFundacao(int $anoFundacao): self
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }
}

