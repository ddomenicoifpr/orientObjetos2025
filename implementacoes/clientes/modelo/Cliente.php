<?php 

abstract class Cliente {

    //Atributos
    protected int $id;
    protected string $nomeSocial;
    protected string $email;

    //Métodos
    public abstract function getNomeCompleto();
    public abstract function getNroDoc();
    public abstract function getTipo();

    //GETs e SET
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNomeSocial(): string
    {
        return $this->nomeSocial;
    }

    public function setNomeSocial(string $nomeSocial): self
    {
        $this->nomeSocial = $nomeSocial;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}