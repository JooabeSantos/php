<?php

define("NOME", "Joabe Santos");
define("IDADE",  18);
define("ALTURA", 1.79);
define("TIMES", ['São Paulo', 'Santos', 'Sem mundial']);
echo 'Meu nome é ' .NOME. 'e eu tenho ' .IDADE. ' anos, minha altura é de '.ALTURA ;

echo "</br>";
echo TIMES[0];

echo "</br>";
function exibeNome() {
    echo NOME;
}

ExibeNome();

?>