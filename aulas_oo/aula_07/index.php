<?php

class Pessoa{
    const nome = "Joabe";

    public function exibirNome(){
        echo self::nome;
    }
}

class Joabe extends Pessoa {
    const nome = "Oliveira";
    public function exibirNome(){
        echo parent::nome;
    }
}

$joabe = new joabe();
$joabe->exibirNome();