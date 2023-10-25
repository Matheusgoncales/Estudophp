<?php

class Pessoa {
    public function AtribuiNome($nome){
        return "O nome da pessoa é: ".$nome;
    }
}

class Exibe{
    public $pessoa;
    public $nome;
    
    function __construct($nome)
    {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function ExibeNome(){
        echo $this->pessoa->AtribuiNome($this->nome);
    }
}

$exibe = new Exibe("Matheus");
$exibe->ExibeNome();