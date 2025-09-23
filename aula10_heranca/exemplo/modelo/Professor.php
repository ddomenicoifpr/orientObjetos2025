<?php

require_once("Pessoa.php");

class Professor extends Pessoa {

    private float $salario;

    //Métodos
   public function __toString() {

        $dados = "Nome: " . $this->getNome();
        $dados .= " | RG: " . $this->getRg();
        $dados .= " | Idade: " . $this->idade;
        $dados .= " | Salário: " . $this->salario; 
        return $dados;
    
   }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}