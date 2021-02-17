
<?php

$resultados= '';
foreach($Clientes as $Cliente){

	$resultados .= '<tr>
										 <td>'.$Cliente->Id.'</td>
										 <td>'.$Cliente->nome.'</td>
										 <td>'.$Cliente->cpf.'</td>
										 <td>'.$Cliente->rg.'</td>
										 <td>'.($Cliente->ativo == 'true' ? 'Ativo' : 'Inativo').'</td>
									 	 <td>
										  <a href="editar-cliente.php?id='.$Cliente->Id.'">
											<button type="button" class="btn btn-primary btn-sm"><i class="fas fa-info"></i></button>
									 		</a>
										  <a href="excluir_cliente.php?id='.$Cliente->Id.'"
											<button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
										 </a>
										 </td>
								 </tr>';

							 	}
									// exibe mensagem  quando não houver registros
									$resultados = strlen($resultados) ? $resultados : '<tr>
									<td colspan="6" >
										Não existem clientes cadastrados.
									</td>
								 </tr>';
?>

<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
		<div class="row">
			<div class="col-lg-12 mb-12">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Relação de Clientes</h6>
						<table id="dataSelect" data-order='[[ 0, "asc" ]]'
							class="table table-striped data_table display nowrap"
							cellspacing="0">
							<thead>
								<th style="padding-left: 8px;"><b>#</b></th>
								<th style="padding-left: 8px;"><b>Cliente</b></th>
								<th style="padding-left: 8px;"><b>CPF</b></th>
								<th style="padding-left: 8px;"><b>RG</b></th>
								<th style="padding-left: 8px;"><b>Status</b></th>
								<th style="padding-left: 8px;"><b>Ações</b></th>
							</thead>
							<tbody>
							<?php echo $resultados; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-2">

				<a href="cadastrar.php">
					<button type="button" class="btn btn-success">Cadastrar Cliente</button>
				</a>

				 
			</div>
		</div>
	</div>
</div>
