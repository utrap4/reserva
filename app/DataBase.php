<?php
namespace App;
use PDO;
use PDOExecption;
class DataBase{
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const DB = 'reserva';
    private $connection;
    private $table;

    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:'.self::HOST.';dbname='.self::DB,self::USER,self::PASS);
            $this->connection->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXECEPTION);
        }catch(PDOExecption $e){
            die('ERROR: '.$e->getMessage());
        }        
    }
    public function insert($array){

    }
    public function update($id,$array){
        
    }
    public function delete($id){
        
    }
    public function select(){
        
    }
}