<?php

    class Pessoa{
        //objeto pessoa

        private $nome = 'Joabe';
        private $idade = '18';
        private $peso = '60kg';

        public function crescer(){
            $this->comer();
            echo 'estou crescendo';
        }

        private function comer(){
            echo 'estou comendo';
        }
    }

    //Instaciar tem que criar o objeto

    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();
    

?>  