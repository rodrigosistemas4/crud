<?php include('head.php') ?>
<main>

<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
		<div class="row">
			<div class="col-lg-12 mb-12">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h4 class="m-0 font-weight-bold text-danger">Atenção: Erro na validação dos Dados</h4>
							<?=$_GET['error']?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="form-group col-md-2">
      <?php
			if ($_GET['id']>0) {?>
			<a href="cadastrar-financeiro.php?id=<?=$_GET['id']?>&cliente=<?=$_GET['cliente']?>">Voltar</a>
  		<?php
		}
			if ($_GET['id']==0){?>
			<a href="cadastrar.php">Voltar</a>
		<?php } ?>
		</div>

</main>

<?php include('footer.php')?>;
