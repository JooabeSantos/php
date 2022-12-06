<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setId(8);
$produto->setNome('Cadeira Gamer');
$produto->setDescricao('sente');

$produtoDao = new \App\Model\ProdutoDao();
//$produtoDao->update($produto);
$produtoDao->delete(7);
$produtoDao->read();

foreach($produtoDao->read() as $produto):
    echo $produto['nome']."<br>" .$produto['descricao']."<hr>";
endforeach;