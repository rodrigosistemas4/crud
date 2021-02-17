<?php

require __DIR__.'/app/db/Database.php';
require __DIR__.'/app/Entity/Eclientes.php';

use \App\Entity\Cliente;

//verificando se o Id é válido
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//verificando dados do Cliente
$obCliente = Cliente::getCliente($_GET['id']);

//validando a instancia
if(!$obCliente instanceof Cliente){
  header('location: index.php?status=error');
  exit;
}

//Validação dos dados via Post
if(isset($_POST['excluir'])){
  $obCliente->excluir();
  header('location: index.php?status=success');
  exit;
}

include 'head.php';
include 'confirma_excluir_cliente.php';
include 'footer.php';
