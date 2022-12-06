<?php
// message, code, file, line
class Newsletter {
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este email é invalido", 1);
        }else {
            echo "Email cadastrado com sucesso!";
        }
    }
}

$newslatter = new Newsletter();

try{
$newslatter->cadastrarEmail("contato@");
}catch(Exception $e){
    echo "Mensagem: ".$e->getMessage()."<br>";
    echo "Código: ".$e->getCode()."<br>";
    echo "Linha: ".$e->getLine()."<br>";
    echo "Arquivo: ".$e->getFile();
}