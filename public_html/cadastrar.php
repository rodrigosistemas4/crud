<?php

require __DIR__.'/app/db/Database.php';
require __DIR__.'/app/Entity/Eclientes.php';

use \App\Entity\cliente;

$obCliente = new Cliente;

if(isset($_POST['nome'],$_POST['cpf'])){

  // valida o campo nome
  if( $_POST['nome']=='') {
      header('location: erro.php?error=Informe o nome do Cliente&id=0' );
    exit;
  }

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


   $obCliente->cadastrar();
   header('location: index.php?status=success');
   exit;
}

  include 'head.php';
  include 'detalhe-cliente.php';
  include 'footer.php';


 ?>
