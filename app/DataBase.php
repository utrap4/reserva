<?php
namespace App;
use PDO;
use PDOExecption;
class DataBase{
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '123';
    const DB = 'reserva';
    private $connection;
    private $table;
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }
    private function setConnection(){
        try{
            $this->connection = new PDO
            ('mysql:'.self::HOST.';dbname='.self::DB,self::USER,self::PASS);
            //$this->connection->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXECEPTION);
        }catch(PDOExecption $e){
            die('ERROR: '.$e->getMessage());
        }        
    }
    public function execute($query, $values = null){
        try{
            echo "<pre>";
            print_r($query);
            echo "</pre>";
            $statement = $this->connection->prepare($query);
            $statement->execute($values);
            return $statement;
        }catch(PDOExecption $e){
            die('ERROR: '.$e->getMessage());
        }
    }
    public function insert($array){
        $fields = array_keys($array);
        $binds = array_pad([], count($array),'?');
        $query = "INSERT INTO ".$this->table." (".implode(', ',$fields).")
        VALUES(".implode(', ',$binds).")";
        $this->execute($query,array_values($array));
        return true;
        
    }
    public function update($id,$array){
        
    }
    public function delete($id){
        
    }
    public function select(){
        
    }
}