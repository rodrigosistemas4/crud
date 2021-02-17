
<main>

<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
		<div class="row">
			<div class="col-lg-12 mb-12">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Inclusão de Faturas</h6>

							<div class="row">
              	<h6 class="mt-3 m-0 font-weight-bold text-danger">Cliente: <?=$_GET['cliente']?></h6>
							</div>

						<form method="post">
							<div class="row mt-3" >
								<div class="form-group col-md-1">
									<label>id</label> <input type="text" readonly name="id"
										class="form-control"  />
								</div>
                <div class="form-group col-md-3">
                  <label>Banco</label> <select class="form-control"
                    name="banco" >
                    <option value="Bradesco" checked>Bradesco</option>
                    <option value="Itaú">Itaú</option>
                    <option value="Banco do Brasil">Banco do Brasil</option>
                    <option value="Nubank">Nubank</option>
                    <option value="Santander">Santander</option>
                  </select>
                </div>

                <div class="form-group col-md-3">
                  <label>Vencimento</label> <input type="date"
                    name="data_vencimento" class="form-control" value="<?=date('Y-m-d')?>"
                    placeholder="Selecione a data de nascimento" />
                </div>


								<div class="form-group col-md-3">
									<label>Valor</label> <input type="number" step="0.010" name="valor"
										class="form-control" placeholder="Valor da Fatura" />
								</div>

                <div class="form-group col-md-2">
                  <label>Mora Diária %</label> <input type="number" step="0.010" name="mora_dia"
                    class="form-control" placeholder="Mora % dia" />
                </div>
							</div>

							<div class="row">
                <div class="form-group">
                  <label>Informações</label>
                  <textarea class="form-control" name="descricao" rows="3"></textarea>
                </div>

							</div>


							<div class="row mt-3">
								<div class="form-group col-md-2">
									<button type="submit" class="btn btn-success">Salvar
										informações</button>
								</div>
							</div>

							<div class="row mt-3">
								<div class="form-group col-md-2">
									<a href="editar-cliente.php?id=<?php echo $_GET['id']?>">Voltar</a>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
