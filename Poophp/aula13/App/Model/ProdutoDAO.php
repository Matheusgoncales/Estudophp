<?php
namespace App\Model;

class ProdutoDAO{
    public function Create(Produto $p){
        $sql = 'INSERT INTO produtos (nome,descricao) VALUES(?,?)';
        $cadastrar = Conexao::getConn()->prepare($sql);

        $cadastrar->bindValue(1, $p->getNome());
        $cadastrar->bindValue(2, $p->getDescricao());

        $cadastrar->execute();

    }

    public function Read(){

        $sql = 'SELECT * FROM produtos';

        $ler = Conexao::getConn()->prepare($sql);
        $ler->execute();

        if($ler->rowCount() > 0 ):
            $resultado = $ler->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;

    }

    public function Update(Produto $p){

        $sql =  'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';

        $update = Conexao::getConn()->prepare($sql);
        $update->bindValue(1,$p->getNome());
        $update->bindValue(2,$p->getDescricao());
        $update->bindValue(3,$p->getID());

        $update->execute();

    }

    public function Delete($id){
        $sql = 'DELETE FROM produtos WHERE id = ?';

        $delete = Conexao::getConn()->prepare($sql);
        $delete->bindValue(1, $id);
        $delete->execute();

    }
}