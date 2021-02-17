<?php

require __DIR__.'/app/db/Database.php';
require __DIR__.'/app/Entity/Eclientes.php';
require __DIR__.'/app/Entity/Efinanceiro.php';

use \App\Entity\Cliente;
use \App\Entity\Financeiro;


// valida o ID do cliente
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: clientes.php?status=error');
  exit;
}

//Consulta o Cliente
$obCliente = Cliente::getCliente($_GET['id']);

//Valida a instância do Objeto ObCLiente
if(!$obCliente instanceof Cliente){
  echo ('entrou aqui');
  exit;
  header('location: clientes.php?status=error');
  exit;
}
//$obFinanceiro = new Financeiro();
$financeiros = Financeiro::getFinanceiros('Id_cliente='.$_GET['id']);
if(isset($_POST['nome'],$_POST['cpf'])){

$obCliente = new Cliente;
$obCliente->Id = $_GET['id'];
$obCliente->nome = $_POST['nome'];
$obCliente->cpf = $_POST['cpf'];
$obCliente->ativo = $_POST['ativo'];
$obCliente->data_nascimento = $_POST['data_nascimento'];
$obCliente->rg = $_POST['rg'];
$obCliente->email = $_POST['email'];
$obCliente->endereco = $_POST['endereco'];
$obCliente->numero = $_POST['numero'];
$obCliente->bairro = $_POST['bairro'];
$obCliente->cidade = $_POST['cidade'];
$obCliente->estado = $_POST['estado'];
$obCliente->complemento = $_POST['complemento'];
$obCliente->cep = $_POST['cep'];
$obCliente->celular = $_POST['celular'];

   $obCliente->atualizar();
 }

  include 'head.php';
  include 'detalhe-cliente.php';
    include 'financeiro.php';
  include 'footer.php';

?>
