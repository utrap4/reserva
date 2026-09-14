<?php
namespace App;
class Item{
    public $id;
    public $nome;
    public $descricao;
    public $patrimonio;

    public function cadastrar(){
        
        $db = new DataBase();
        $db->insert([
            "nome"=> $this->nome,
            "descricao" => $this->descricao,
            "patrimonio" => $this->patrimonio
        ]);
        return true;        
    }
    public function alterar(){        
        return new DataBase()->update("id=".$this->id,[
            "nome"      => $this->nome,
            "descricao" => $this->descricao,
            "patrimonio"=> $this->patrimonio
        ]);
    }
    public function excluir(){
        return (new DataBase()->delete($this->id));
    }
    public function listar(){
        return (new DataBase()->select());
    } 
}