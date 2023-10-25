<?php

require 'Model/Produto.php';
require 'Model/ProdutoDAO.php';
require 'Model/Conexao.php';

$produto = new \App\Model\Produto();
 $produto->setID(4);
$produto->setNome("teclado HyperX");
$produto->setDescricao("Switch Brown");

$produtodao= new \App\Model\ProdutoDAO();
// $produtodao->Create($produto);
// $produtodao->Delete(2);
$produtodao->Update($produto);
$produtodao->read();


foreach($produtodao->read() as $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;

