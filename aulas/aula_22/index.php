<?php
//^ inicio da expressão, $ final da expressão
// [] conjunto de caracteres
//{} ocorrencia - ?{0,1} *{0,} +{1,}
$string = "q1";
$padrao = "/^[a-z0-9]{1,4}$/i";

if(preg_match($padrao, $string)){
    echo "Válido";
    echo "<br>";
    echo $string;
}else{
    echo "Inválido";
    echo '<br>';
}

echo '<hr>';

$string = "contato@gmail.com";
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\_\-]+\.(com|br|com.br)$/i";

if(preg_match($padrao, $string)){
    echo " Email Válido";
    echo "<hr>";
    echo $string;
}else{
    echo "Inválido";
    echo '<hr>';
}