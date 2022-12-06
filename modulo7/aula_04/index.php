<?php
    abstract class teste{
        public function func1(){
            echo 'chamando funcao 1';
        }

        abstract function func2();
    }

    class Principal extends teste{

        public function func2(){
            echo 'estou declando oficialmente um metodo abstrato';
        }
    }

    $principal = new Principal;

    $principal->func1();

    $principal->func2();
?>