<?php

class Aluno {
    //Atributos
    private $nome;
    private $matricula;
    private $curso;

    //Métodos
    public function estudar() {
        echo "Aluno estudando\n";
    }

    public function irBanheiro() {
        echo "Aluno indo ao banheiro\n";
    }

    //GETs e SETs
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso): self
    {
        $this->curso = $curso;

        return $this;
    }
} //Fim classe Aluno

//Programa principal
$aluno = new Aluno();
$aluno->setNome("Henrique");
$aluno->setMatricula(4546456);
$aluno->setCurso("TDS");
echo "O nome do aluno é: " . $aluno->getNome() . "\n";
echo "A matricula do aluno é: " . $aluno->getMatricula() . "\n";
echo "O curso do aluno é: " . $aluno->getCurso() . "\n";
$aluno->estudar();
$aluno->irBanheiro();
