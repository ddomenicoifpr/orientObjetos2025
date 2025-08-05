<?php

class Livro {
    private $titulo;
    private $autor;
    private $genero;
    private $quantidadePaginas;
    private $valorPago;

    public function __toString()
    {
        $livro = "Título: " . $this->titulo;
        $livro .= " | Autor: " . $this->autor;
        $livro .= " | Gênero: " . $this->genero;
        $livro .= " | Páginas: " . $this->quantidadePaginas;
        $livro .= " | Valor: " . $this->valorPago . "\n";
        return $livro;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getQuantidadePaginas()
    {
        return $this->quantidadePaginas;
    }

    public function setQuantidadePaginas($quantidadePaginas): self
    {
        $this->quantidadePaginas = $quantidadePaginas;

        return $this;
    }

    public function getValorPago()
    {
        return $this->valorPago;
    }

    public function setValorPago($valorPago): self
    {
        $this->valorPago = $valorPago;

        return $this;
    }
}

//Programa principal

$livros = array();

//MENU
do {
    echo "\n\n------MENU-------\n";
    echo "1-Inserir livro\n";
    echo "2-Listar livros\n";
    echo "3-Buscar livro\n";
    echo "4-Total gasto\n";
    echo "0-Sair\n";

    $opcao = readline("Informe a opção: ");

    switch ($opcao) {
        case 1:
            $livro = new Livro();
            $livro->setTitulo(readline("Título: "));
            $livro->setGenero(readline("Gênero: "));
            $livro->setAutor(readline("Autor: "));
            $livro->setQuantidadePaginas(readline("Páginas: "));
            $livro->setValorPago(readline("Valor: "));
            
            array_push($livros, $livro);
            break;

        case 2:
            foreach ($livros as $l) {
                echo $l;
            }
            break;

        case 3:
            $idx = readline("Informe o índice do livro: ");

            if($idx >= 0 && $idx < count($livros))
                echo $livros[$idx];
            else
                echo "Índice informado não existe no array!\n";

            break;

        case 4:
            $total = 0;
            foreach ($livros as $l) {
               $total += $l->getValorPago();
            }
            echo "Total gasto: " . $total . "!\n";
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!\n";

    }
} while($opcao != 0);
