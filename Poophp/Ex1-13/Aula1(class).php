<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar () {
        echo $this->nome. " de " .$this->idade .  " anos"  ." Acabou de falar";
    }
}

$matheus = new Pessoa();
$matheus->nome = "Matheus";
$matheus->idade = "25";
$matheus->Falar();


