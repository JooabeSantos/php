<?php

class Pessoa {
    public $idade;

    public function __clone(){
        echo "Clonagem de objeto ";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 18;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 20;

echo $pessoa->idade;