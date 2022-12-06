<?php


$nome = "Joabe";

function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();

echo "<hr>";


function exibecidade(){
    global $cidade;
    $cidade = "São Paulo";
}

exibeCidade();
echo $cidade;

echo "<hr>";

$a = 1;
$b = 2;
$c = 7;

function soma(){
   echo $GLOBALS['a'] + $GLOBALS ['b'] + $GLOBALS ['c'];
}

soma();
?>