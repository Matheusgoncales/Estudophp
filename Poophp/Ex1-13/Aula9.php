<?php

class NewsLetter{

    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Este e-mail é invalido", 1);
        else:
            echo "Email cadastrado com sucesso";
        endif;
    }
}

$newsletter = new NewsLetter();

try{
$newsletter->cadastrarEmail("Contatos@gmail.com");
} catch(Exception $e) {
    echo $e->getMessage();
}