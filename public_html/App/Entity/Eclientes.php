<?php


namespace App\Entity;
 use \app\db\Database;
use \PDO;


class Cliente{

  public $Id;
  public $cpf;
  public $nome;
  public $celular;
  public $ativo;
  public $rg;
  public $data_nascimento;
  public $email;
  public $endereco;
  public $numero;
  public $complemento;
  public $bairro;
  public $cep;
  public $cidade;
  public $estado;

//metodo que cadastra cliente no BD
  public function cadastrar(){

      //INSERIR O CADASTRO NO BD
    $obDatabase = new Database('clientes');
    $this->Id = $obDatabase->insert([
                                      'nome'    => $this->nome,
                                      'cpf' => $this->cpf,
                                      'ativo' => $this->ativo,
                                      'data_nascimento' => $this->data_nascimento,
                                      'rg' => $this->rg,
                                      'email' => $this->email,
                                      'endereco' => $this->endereco,
                                      'numero' => $this->numero,
                                      'bairro' => $this->bairro,
                                      'cidade' => $this->cidade,
                                      'estado' => $this->estado,
                                      'complemento' => $this->complemento,
                                      'cep' => $this->cep,
                                      'celular' => $this->celular

                                    ]);

    return true;
  }

  /**
   * Método responsável por atualizar a vaga no banco
   * @return boolean
   */
  public function atualizar(){
                            return (new Database('clientes'))->update('Id = '.$this->Id,[
                                                              'nome'    => $this->nome,
                                                              'cpf' => $this->cpf,
                                                              'ativo' => $this->ativo,
                                                              'data_nascimento' => $this->data_nascimento,
                                                              'rg' => $this->rg,
                                                              'email' => $this->email,
                                                              'endereco' => $this->endereco,
                                                              'numero' => $this->numero,
                                                              'bairro' => $this->bairro,
                                                              'cidade' => $this->cidade,
                                                              'estado' => $this->estado,
                                                              'complemento' => $this->complemento,
                                                              'cep' => $this->cep,
                                                              'celular' => $this->celular
                                                              ]);

                                                            }


  //  Método responsável por excluir a vaga do banco
  public function excluir(){
    return (new Database('clientes'))->delete('Id = '.$this->Id);
  }


// Método responsável por retornar a listagem de clientes cadastrados

  public static function getClientes($where = null, $order = null, $limit = null){
    return (new Database('clientes'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }


// Método responsável por retornar um cliente de acordo com seu ID

  public static function getCliente($Id){
    return (new Database('clientes'))->select('Id = '.$Id)
                                  ->fetchObject(self::class);
  }





}
