<?php

class Produtos {
    public $name;
    public $valor;

    function __construct($name, $valor)
    {
        $this->name = $name;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function Adiciona(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function Mostrar(){
        foreach ($this->produtos as $produto){
             echo $produto->name."<br>";
             echo $produto->valor."<hr>";
        }
    }
}

$produto1 = new Produtos("Notebook", "3000");
$produto2 = new Produtos("Mouse", "200");
$produto3 = new Produtos("Teclado","150");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);
$carrinho->Mostrar();