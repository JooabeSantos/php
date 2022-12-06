<?php

//final uma classe que não pode ser erdada 
    class Filha{

      /*  protected function funcaoTeste(){
            echo 'chamando funcao teste';
        }
      */
        private function funcaoTeste(){
            echo 'chamando funca teste';
        }
        public function mostrarOla(){
            echo 'Ola mundo';
            echo '<br>';
            $this->funcaoTeste();
            echo '<hr>';
        }
        

    }
  
//extends = fazer uma classe erdar outra
    class Pai extends Filha{

        public function mostrarOla(){
            parent::mostrarOla();
            echo 'nova função!';
        }
        public function mostrarTchau(){
            echo 'Tchau Mundo!';
            echo '<br>';
           // $this->funcaoTeste();
        
        }
    }

    //$pai = new Pai;

    //$pai->mostrarTchau(); 

    $pai = new Pai;

    //$pai->mostrarOla();
    $pai->mostrarTchau();
    $pai->mostrarOla();
    //$filha->mostrarOla();

?>