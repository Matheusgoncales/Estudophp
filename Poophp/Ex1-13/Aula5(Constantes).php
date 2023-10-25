<?php

class Pessoa {
    const nome = "Matheus";

    //referenciar a const

    public function ExibirNome(){
        echo self::nome;
    }
}

class Matheus extends Pessoa {
    const nome = "Gonçales";
    public function ExibirNome(){
        echo parent::nome;
    }
}

$matheus = new Matheus();
$matheus->ExibirNome();