<?php

require_once("Animal.php");

class Gato extends Animal {

    public function falar() {
        return "Miau miau miau";
    }

    public function falarAnimal() {
        return parent::falar();
    }



}