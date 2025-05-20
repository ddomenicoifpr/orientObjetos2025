<?php

class Pokemon {

    //Atributos
    public $nome;
    public $tipo;
    public $experiencia;
    public $nivel;
    public $hp; //Pontos de vida

    public $ataque;
    public $defesa;
    public $velocidade;

    //Construtor
    function __construct($nome) {
       $this->experiencia = 0;
       $this->hp = 10;
       $this->nivel = 1;

       $this->ataque = 5;
       $this->defesa = 5;
       $this->velocidade = 5;

       $this->nome = $nome;
    }

    //Métodos
    function batalhar() {
        //$this->experiencia = $this->experiencia + 10;
        $this->experiencia += 10;
        $this->aumentarNivel();
    }

    function aumentarNivel() {
        if($this->experiencia >= 50) {
            $this->nivel++;
            $this->experiencia = 0;

            $this->aumentarHp();
            //Aumentar ataque, defesa e velocidade

            $this->evoluir();
        }
    }

    function aumentarHp() {
        $this->hp += 10;        
    }

    function evoluir() {
        if($this->nivel == 16) {
            if($this->nome == "Charmander")
                $this->nome = "Charmileon";
            else if($this->nome == "Psyduck")
                $this->nome = "Golduck";
        }
    }

} //FIM Classe Pokemon

//Programa principal
$pokemon1 = new Pokemon("Charmander");
$pokemon1->tipo = "Fogo";
$pokemon1->batalhar();


$pokemon2 = new Pokemon("Psyduck");
$pokemon2->tipo = "Água";
$pokemon1->batalhar();
