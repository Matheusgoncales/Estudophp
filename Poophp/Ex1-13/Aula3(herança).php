<?php
//Herança permite que outras classes herdem algumas caracteristicas da classe pai

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo $this->modelo. " de cor ". $this->cor ." e ano ".$this->ano." Andou";
    }

    public function Parar(){
        echo $this->modelo. " de cor ". $this->cor ." e ano ".$this->ano." Parou";
    }
}

class Carro extends Veiculo {
    public function LigarLimpador(){
        echo "Limpando";
    }
}

class Moto extends Veiculo {
    public function DarGrau(){
        echo"Você deu um grauzao";
    }
}

$carro = new Carro();
$carro->modelo = "Golf";
$carro->cor = "Preto";
$carro->ano = "2023";
$carro->LigarLimpador();
$carro->Andar();
echo"<br>";
$moto = new Moto();
$moto->modelo = "Xj6";
$moto->cor = "Cinza";
$moto->ano = "2022";
$moto->DarGrau();
$moto->Parar();

