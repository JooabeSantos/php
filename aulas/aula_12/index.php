<?php

//strtoupper
$nome = "joabe oliveira";
$novoNome = strtoupper($nome);

echo $novoNome;

echo "<hr>";

//strtolower
$nome = "JOABE OLIVEIRA";
$novoNome = strtolower($nome);

echo $novoNome;

echo "<hr>";

//substr
$mensagem = "Olá mundo";
echo substr($mensagem, 4, 6);

echo "<hr>";

//str_pad
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "$", STR_PAD_RIGHT);
echo $novoObjeto;
echo "<hr>";

//str_repeat
$string = str_repeat("Sucesso!", 5);
echo $string;
echo "<hr>";

//strlen
$mensagem = "Olá mundo";
echo strlen($mensagem);
echo "<hr>";

//str_replace
$texto = "A seleção Brasileiro será campeã da copa do mundo de 2022.";
$novoText = str_replace("Brasileiro", "Brasileira", $texto);
echo $novoText;

echo "<hr>";

echo strpos($novoText, "será");
echo "<hr>";

//number_format
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";
echo "<hr>";

//round arredonda numero
echo round(4.4);
echo "<hr>";

//ceil arredonda para cima
echo ceil(5.10);
echo "<hr>";

//arredonda para baixo
echo floor(8.9);
echo "<hr>";


//rand gera numeros aleatorio
echo rand(1,20);