<?php


$senha = "123456";
$senha_db = '$2y$10$e56.5tXaGiABqbt.tZefbe5PJWiU4ZX13DsSE8j7VdHu9bGr0xWvC';

if(password_verify($senha, $senha_db)){
    echo "Senha válida";

}else{
    echo "Senha invalida";
}

$options = [
    'cost' => 10,
];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
