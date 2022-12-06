<?php

class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome. " de " .$this->idade." anos, Falou <br>";
    }
}

$joabe = new Pessoa();
$joabe->nome = "Joabe Oliveira Santos";
$joabe->idade = "18";
$joabe->Falar();

