<?php

interface Crud {

    public function create($data);
    public function read();
    public function update();
    public function delete();
    
}

class Noticias implements Crud {
    
    public function create($data){
        //Aqui tera a logica para criar uma noticia
    }

    public function read(){
        //aqui uma logica para ler a noticia
    }

    public function update(){
        //aqui para atualizar uma noticia
    }

    public function delete(){
        //e aqui para deletar uma noticia
    }
    
}