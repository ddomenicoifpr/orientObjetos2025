<?php

abstract class Veiculo {

    protected float $valorAluguel;
    protected int $kmRodados;

    public abstract function getCustoViagem();

    public abstract function getTipo();

    public function __toString() {
        $dados = "O veículo " . $this->getTipo();
        $dados .= ",foi alugado por R$ " . $this->valorAluguel; 
        $dados .= ", rodou " . $this->kmRodados;
        $dados .= " quilômetros com custo total de R$ " . $this->getCustoViagem();
        $dados .= ".";

        return $dados;
    }

    public function getValorAluguel(): float
    {
        return $this->valorAluguel;
    }

    public function setValorAluguel(float $valorAluguel): self
    {
        $this->valorAluguel = $valorAluguel;

        return $this;
    }

    public function getKmRodados(): int
    {
        return $this->kmRodados;
    }

    public function setKmRodados(int $kmRodados): self
    {
        $this->kmRodados = $kmRodados;

        return $this;
    }
}