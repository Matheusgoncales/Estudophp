<?php

Class Pessoa{
    private $dados = array ();

    //metodo magico set
    public function __set($name, $value)
    {
        $this->dados[$name]= $value;
    }

    //metodo magico get
    public function __get($name)
    {
        return $this->dados[$name];
    }

    //metodo magico tostring
    public function __toString()
    {
        return "Tentei imprimir o objeto";
    }

    public function __invoke()
    {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->name= "Matheus";
$pessoa->idade= 25;
$pessoa->sexo= "M";

echo $pessoa();

// var_dump($pessoa);

// echo $pessoa->name;
// echo "<br>";
// echo $pessoa->idade;
// echo "<br>";
// echo $pessoa->sexo;

