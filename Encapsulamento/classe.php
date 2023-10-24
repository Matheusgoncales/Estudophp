<?php 
require_once 'Controlador.php';
//atributos
    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;
   
    //metodos especiais
    public function __construct(){
        $this->setVolume(25);
        $this ->setLigado(false);
        $this->setTocando(false);
    }

    private function setVolume($volume){
        $this->volume=$volume;
    }
    private function getVolume(){
        return $this->volume;
    }   
    public function setLigado($ligado){
        $this->ligado=$ligado;
    }
    public function getLigado(){
        return $this->ligado;
    }
    public function setTocando($tocando){
        $this->tocando=$tocando;
    }
    public function getTocando(){
        return $this->tocando;
    }
    //fim metodos especiais

    //comeco metodos
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this_>setLigado(false);
    }
    public function abrirMenu(){
        echo"<br>Esta ligado?: " . ($this->getLigado()?"Sim":"Não");
        echo "<br>Esta tocando?" . ($this->getTocando()?"Sim":"Não");
        echo"<br>Volume: ". $this->getVolume();
        echo"<br>";
    }
    public function fecharMenu(){
        echo"<br>fechar menu...";
    }
    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 1);
        }
    }
    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 1);
        }
    }
    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }

    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() == 0){
            $this ->setvolume(25);
        }
    }
    public function play(){
        if ($this->getTocando()==false){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getTocando()){
            $this->getTocando(false);
        }
    }
}
?>