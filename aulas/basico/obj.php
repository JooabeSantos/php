<?php

class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente->atribuirNome("Joabe");
var_dump($cliente);

if(is_object('$cliente')){
    echo "É um objeto";
}

else{
    echo"Não é um objeto";
}

?>