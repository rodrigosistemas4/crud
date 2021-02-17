<?php

namespace App\Entity;
 use \app\db\Database;
use \PDO;

class Financeiro{

  public $Id;
  public $Id_cliente;
  public $descricao;
  public $data_vencimento;
  public $mora_dia;
  public $banco;
  public $valor;


   //Cadastrando registro financeiro

  public function cadastrar(){

      //INSERIR O CADASTRO NO BD
    $obDatabase = new Database('financeiro');
    $this->Id = $obDatabase->insert([
                                      'Id_cliente'    => $this->Id_cliente,
                                      'descricao' => $this->descricao,
                                      'data_vencimento' => $this->data_vencimento,
                                      'mora_dia' => $this->mora_dia,
                                      'banco' => $this->banco,
                                      'valor' => $this->valor

                                    ]);


    return true;
  }

//Exluir Registro
  public function excluir(){
    return (new Database('financeiro'))->delete('Id = '.$this->Id);
  }

// Lista os registro financeiros
  public static function getFinanceiros($where = null, $order = null, $limit = null){
    return (new Database('financeiro'))->select($where,$order,$limit)
                                        // ->fetchObject(self::class);
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }


 // Lista um determinado registro financeiro baseado no Id
  public static function getFinanceiro($Id){
    return (new Database('financeiro'))->select('Id = '.$Id)
                                  ->fetchObject(self::class);
  }





}
