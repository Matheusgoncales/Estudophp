<?php

require 'aula8(namespace)/Classes/Produto.php';
require 'aula8(namespace)/Models/Produto.php';

use produtos\Produto /*Pode se utilziar o as para adicionar um novo nome e identar melhor a classe*/as productmodel;
use classes\Produto as productclasses;
//podemos utilizar da forma abaixo tambem
//$produto = new produtos\Produto();

$produto = new productmodel();
$produto->MostrarDetalhes();
echo"<br>";
$produto2 = new productclasses;
$produto2->MostrarDetalhes();