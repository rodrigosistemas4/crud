<?php

namespace App\Db;
use \PDO;
use \PDOException;

class Database{

  const HOST = '';
  const NAME = '';
  const USER = '';
  const PASS = '';

  private $table;
  private $connection;

  //Instancia do Banco de dados
  public function __construct($table = null){
    $this->table = $table;
    $this->setConnection();
  }

  //conexão com o banco
  private function setConnection(){
    try{
      $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME.';charset=utf8',self::USER,self::PASS);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      }catch(PDOException $e){
      die('ERROR: '.$e->getMessage());
    }
  }

 //executa Qrys
  public function execute($query,$params = []){
    try{
      $statement = $this->connection->prepare($query);
      $statement->execute($params);
      return $statement;
    }catch(PDOException $e){
      die('ERROR: '.$e->getMessage());
    }
  }

// insert
  public function insert($values){
    //DADOS DA QUERY
    $fields = array_keys($values);
    $binds  = array_pad([],count($fields),'?');

    //qry
    $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
    //executa Insert
    $this->execute($query,array_values($values));
    //retorna o Id Inserido
    return $this->connection->lastInsertId();
  }


  public function select($where = null, $order = null, $limit = null, $fields = '*'){
    //informações da qry
    $where = strlen($where) ? 'WHERE '.$where : '';
    $order = strlen($order) ? 'ORDER BY '.$order : '';
    $limit = strlen($limit) ? 'LIMIT '.$limit : '';

    //Monta Qry
    $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

    //Executa
    return $this->execute($query);
  }

//metodo de Update
  public function update($where,$values){
    $fields = array_keys($values);
    $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;
    $this->execute($query,array_values($values));
    return true;
  }

//Exclui dados do Banco
  public function delete($where){

    $query = 'DELETE FROM '.$this->table.' WHERE '.$where;
    $this->execute($query);
    return true;
  }

}
