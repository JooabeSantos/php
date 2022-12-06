<?php

class Veiculo{
    protected $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
    }
}




class Carro extends Veiculo{
    public function ligarLimpador (){
        echo " Limpando ";
    }
}

class Moto extends Veiculo{ 
    public function darGrau(){
        echo " Dando Grau ";
    }
}

$veiculo = new Veiculo();
$veiculo->setModelo("HILUX");
echo $veiculo->getModelo();


