


<main>
<div class="d-flex flex-column">
	<div>
		<div class="row">
			<div class="col-lg-12 mb-12">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h4 class="m-0 font-weight-bold text-danger">Atenção: Você está prestes a Excluir um Registro</h4>
							<?=$obCliente->nome?>
					</div>
				</div>
			</div>
    <form method="post">
			<div class="form-group">
	      <a href="index.php">
	        <button type="button" class="btn btn-success">Cancelar</button>
	      </a>

	      <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
	    </div>
		</form>
		</div>
	</div>


</main>
