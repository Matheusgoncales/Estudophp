<?php
//criação de uma classe
class Login {
    private $email;
    private $senha;
    private $nome;

    //criação de um construct que ao iniciar o loguin já vira com essas informações
    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);

    }

    //inicio dos metodos get e set
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    //fim dos metodos get e set

    //criação de um metodo
    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"){
            echo "Logado com sucesso";
        }
        else{echo"Erro ao logar, por favor verifique seu e-mail e senha";}
    }
}

$logar = new Login("teste@teste.com", "123456", "Matheus");
// $logar->setEmail("teste@teste.com");
// $logar->setSenha("123456");
$logar->Logar();
// echo"<br>";
// echo "Email: ".$logar->getEmail();
// echo "<br>";
// echo "Senha: ".$logar->getSenha();
