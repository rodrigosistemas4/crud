
<?php
$saldo_devedor=0;
$saldo_a_vencer=0;
$valor_atual=0;
$vencidos=0;
$avencer=0;
$resultados = '';

  foreach($financeiros as $financeiro){
  //calcula o número de dias Vencido
  $data_vencimento = new DateTime( $financeiro->data_vencimento ); ;
  $data_atual =   new DateTime(date('Y-m-d'));
  $dateInterval = $data_vencimento->diff($data_atual);
  $invert=$dateInterval->invert;


  //verifica se o existe vencimento na fatura para atualizar os totais
  if ($invert==0){
    $dias_atraso=$dateInterval->days;
    $mora=((($financeiro->valor/100) * $financeiro->mora_dia) * $dias_atraso );
    $valor_atual= $financeiro->valor + $mora;
    $saldo_devedor+=$valor_atual;
    $badge="<span class='badge bg-danger'>Vencido</span>";
    $vencidos++;
    }
    else{
      $dias_atraso=0;
      $mora=0;
      $valor_atual= $financeiro->valor;
      $saldo_a_vencer+=$valor_atual;
      $badge="<span  class='badge bg-success' >A Vencer</span>";
      $avencer++;
      }
       $resultados .= '<tr>
                          <td>'.$financeiro->Id.'</td>
                          <td>'.$badge.'</td>
                          <td>'.$financeiro->banco.'</td>
                          <td>'.number_format($financeiro->valor,2,",",".").'</td>
                          <td>'.$financeiro->descricao.'</td>
                          <td>'.date('d/m/Y',strtotime($financeiro->data_vencimento)).'</td>
                          <td>'.$dias_atraso.'</td>
                          <td>'.number_format($mora,2,",",".").'</td>
                          <td>'.number_format($valor_atual,2,",",".").'</td>
                          <td>
                          <a href="excluir_financeiro.php?id='.$financeiro->Id.'">
                            <button type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                          </a>
                          </td>
                      </tr>';
   }
                    // exibe mensagem  quando não houver registros
                    $resultados = strlen($resultados) ? $resultados : '<tr>
                    <td colspan="6" >
                      Sem Movimentação Financeira
                    </td>
                   </tr>';
 ?>


<div class="d-flex flex-column">
 <div>
   <div class="row">
     <div class="col-lg-12 mb-12">
       <div class="card shadow mb-4">
         <div class="card-header py-3">
        		<div class="row">
								<h6 class="m-0 font-weight-bold text-primary">Detalhamento
									Financeiro</h6>
							</div>
							<div class="row">
								<table id="dataSelect" data-order='[[ 0, "asc" ]]'
									class="table table-striped data_table display nowrap"
									cellspacing="0">
									<thead>
										<th style="padding-left: 8px;"><b>#</b></th>
                    <th style="padding-left: 8px;"><b></b></th>
										<th style="padding-left: 8px;"><b>Banco</b></th>
										<th style="padding-left: 8px;"><b>Valor Dcto</b></th>
										<th style="padding-left: 8px;"><b>Descrição</b></th>
										<th style="padding-left: 8px;"><b>Vencimento</b></th>
                    <th style="padding-left: 8px;"><b>Dias Vencido</b></th>
                      <th style="padding-left: 8px;"><b>Multa</b></th>
                    <th style="padding-left: 8px;"><b>Valor Atual</b></th>
                    <th style="padding-left: 8px;"><b>Ações</b></th>
									</thead>
									<tbody>
                  <?=$resultados?>
                  <tr>
                    <td colspan="10"  class="text-left">
	                     <div class="row">
                      <div class="form-group col-md-1">
                        <label> Títulos:  <span class="badge bg-primary"><?php echo count($financeiros);?></span></label>
                      </div>

                      <div class="form-group col-md-1">
                        <label>  Vencidos:  <span class="badge bg-danger"><?=$vencidos;?></span></label>
                      </div>

                      <div class="form-group col-md-1">
                        <label>  A vencer:  <span class="badge bg-success"><?=$avencer;?></span></label>
                      </div>

                      <div class="form-group col-md-2">
                        <label>Total Vencido:  <span class="badge bg-danger"><?=number_format($saldo_devedor,2,",",".");?></span></label>
                      </div>

                      <div class="form-group col-md-2">
                        <label> Total a Vencer:  <span class="badge bg-success"><?=number_format($saldo_a_vencer,2,",",".");?></span></label>
                      </div>

                      <div class="form-group col-md-2">
                        <label> Total Geral Devido:  <span class="badge bg-danger"><?=number_format($saldo_a_vencer+$saldo_devedor,2,",",".");?></span></label>
                      </div>

                    </td>
                      </div>
                </tr>
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="form-group col-md-2">
                  <a href="cadastrar-financeiro.php?cliente=<?=$obCliente->nome ?>&id=<?=$_GET['id']?>">
                          <button type="button" class="btn btn-primary">Incluir Fatura</button>
                  </a>

								</div>
							</div>
            </div>
          </div>
