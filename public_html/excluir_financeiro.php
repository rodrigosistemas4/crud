<?php

require __DIR__.'/app/db/Database.php';
require __DIR__.'/app/Entity/Efinanceiro.php';

use \App\Entity\Financeiro;

//verificando se o Id é válido
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//verificando dados Financeiros
$obFinanceiro = Financeiro::getFinanceiro($_GET['id']);



//validando a instancia
if(!$obFinanceiro instanceof Financeiro){
  header('location: index.php?status=error');
  exit;
}

//Validação dos dados via Post
if(isset($_POST['excluir'])){
  $obFinanceiro->excluir();
  header('location: editar-cliente.php?id='.$obFinanceiro->Id_cliente.'&status=success');
  exit;
}

include 'head.php';
include 'confirma_excluir_financeiro.php';
include 'footer.php';
