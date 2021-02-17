<?php

require __DIR__.'/app/db/Database.php';
require __DIR__.'/app/Entity/Eclientes.php';
require __DIR__.'/app/Entity/Efinanceiro.php';

use \App\Entity\Financeiro;

// valida o ID do cliente
if(!isset($_GET['id']) or !is_numeric($_GET['id'])) {
  header('location: clientes.php?status=error');
  exit;
}

if(isset($_POST['banco'],$_POST['valor'],$_POST['data_vencimento'],$_POST['mora_dia'],$_POST['descricao'])){

  // valida o campo descrição
  if( $_POST['descricao']=='') {
      header('location: erro.php?error=Informe uma descrição&id='.$_GET['id'].'&cliente='.$_GET['cliente'] );
    exit;
  }


  if( (!isset($_POST['valor'])) or ( floatval ($_POST['valor'])<=0 )) {
      header('location: erro.php?error=O Valor da Fatura não pode ser 0&id='.$_GET['id'].'&cliente='.$_GET['cliente'] );
    exit;
  }
  // valida valor da Multa
  if( (!isset($_POST['mora_dia'])) or ($_POST['mora_dia']<=0 )) {
    header('location: erro.php?error=O Valor da Multa não pode ser 0&id='.$_GET['id'].'&cliente='.$_GET['cliente'] );
    exit;
  }



    $obFinanceiro = new Financeiro;
    $obFinanceiro->Id_cliente = $_GET['id'];
    $obFinanceiro->banco = $_POST['banco'];
    $obFinanceiro->valor = $_POST['valor'];
    $obFinanceiro->data_vencimento = $_POST['data_vencimento'];
    $obFinanceiro->mora_dia = $_POST['mora_dia'];
    $obFinanceiro->descricao = $_POST['descricao'];
    $obFinanceiro->cadastrar();
    header('location: editar-cliente.php?id='. $_GET['id'].'&status=success');
}

  include 'head.php';
  include 'detalhe-financeiro.php';
  include 'footer.php';


 ?>
