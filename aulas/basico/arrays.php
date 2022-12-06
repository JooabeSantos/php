<?php


$carros = array (1=>"BWM", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];

echo "<br>";
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[] = "Suzuki";
print_r($motos);

echo "<br>";
echo "<hr>";

$clientes = ["Joabe", "Felipe", "Paola"];
print_r($clientes);


echo "<br>";
echo "<hr>";

$nomes = array("Primo"=>"Denilson", "Visinho"=>"Felipe", "Mãe"=>"Lucia","Pai"=>"José");
$values = array_values($nomes);
print_r($values);

echo "<br>";
echo "<hr>";

$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);

print_r($veiculos);

echo "<hr>";

$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
echo array_shift($carros);
echo "<br>";
print_r($carros);

echo "<hr>";

$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_unshift($frutas, "Manga","Acerola", "Morango");
echo"<br>";
array_push($frutas, "Banana", "Abacaxi");
print_r($frutas);

echo "<hr>";


$keys = array("Campeão", "Vice", "Terceiro");
$values = array("São Paulo", "Vasco", "Botafogo");

$times = array_combine($keys, $values);
print_r($times);

echo "<hr>";

$soma = array(5,6,7,10);
echo array_sum($soma);

echo "<hr>";

$data = "30/02/2018";

$novadata = explode('/', $data);
print_r($novadata);
?>