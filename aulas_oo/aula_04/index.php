<?php

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
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

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Preto";
$carro->ano= "2022";
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);

echo "<br>";

$moto = new Moto();
$moto->modelo = "Honda BIZ";
$moto->cor = "Preto";
$moto->ano = "2022";
$moto->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);
