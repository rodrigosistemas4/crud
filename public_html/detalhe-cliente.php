
<main>
<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
		<div class="row">
			<div class="col-lg-12 mb-12">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Detalhamento do
							Cliente</h6>
						<form method="post">

							<div class="row">
								<div class="form-group col-md-1">
									<label>id</label> <input type="text" readonly name="id" value="<?=$obCliente->Id?>"
										class="form-control"  />
								</div>

								<div class="form-group col-md-6">
									<label>Nome/Razão Social</label> <input type="text" name="nome" value="<?=$obCliente->nome?>"
										class="form-control" placeholder="Nome do Cliente" />
								</div>


								<div class="form-group col-md-3">
									<label>Celular</label> <input type="number" name="celular" value="<?=$obCliente->celular?>"
										class="form-control" placeholder="DDD e número Cel" />
								</div>

								<div class="form-group col-md-2">
									<label>Status Operacional</label> <select class="form-control"
										name="ativo" value="<?=$obCliente->ativo?>">
										<option value="true" checked>Ativo</option>
										<option value="false">Inativo</option>
									</select>
								</div>

							</div>


							<div class="row">

								<div class="form-group col-md-2 col-lg-2 col-sm-2">
									<label>CPF/CNPJ</label> <input type="text" name="cpf" value="<?=$obCliente->cpf?>"
										class="form-control" value="" />
								</div>


								<div class="form-group col-md-2 col-lg-2 col-sm-2">
									<label>RG/Insc. Estadual</label> <input type="text" name="rg" value="<?=$obCliente->rg?>"
										class="form-control" value="" />
								</div>

								<div class="form-group col-md-3">
									<label>Nasc./Fundação</label> <input type="date"
										name="data_nascimento" class="form-control" value="<?=$obCliente->data_nascimento?>"
										placeholder="Selecione a data de nascimento" />
								</div>


								<div class="form-group col-md-5">
									<label>E-mail</label> <input type="email"  name="email" value="<?=$obCliente->email?>"
										class="form-control" placeholder="E-mail de contato">
								</div>

							</div>

							<h6 class="m-0 font-weight-bold text-primary">Informações sobre
								Endereço</h6>
								<div class="row">
									<div class="form-group col-md-5">
										<label>Endereço</label> <input type="text" value="<?=$obCliente->endereco?>"
											name="endereco" class="form-control"
											placeholder="Endereço do cliente" />
									</div>

									<div class="form-group col-md-2">
										<label>Número</label> <input type="texto" name="numero" value="<?=$obCliente->numero?>"
										class="form-control" placeholder="Número">
									</div>

									<div class="form-group col-md-5">
										<label>Complemento</label> <input type="texto" value="<?=$obCliente->complemento?>"
											name="complemento" class="form-control"
											placeholder="Complemento" />
									</div>
							</div>

							<div class="row">

								<div class="form-group col-md-4">
									<label>Bairro</label> <input   type="text" value="<?=$obCliente->bairro?>"
										name="bairro" class="form-control" placeholder="Bairro">
								</div>

								<div class="form-group col-md-2">
									<label>CEP:</label> <input  type="number" name="cep" value="<?=$obCliente->cep?>"
										 class="form-control" placeholder="Número do CEP" /><br>

								</div>

								<div class="form-group col-md-4">
									<label>Cidade</label> <input   type="text" value="<?=$obCliente->cidade?>"
										name="cidade" class="form-control" placeholder="Cidade" />
								</div>

								<div class="form-group col-md-2">
									<label>UF</label> <input  type="text" name="estado" value="<?=$obCliente->estado?>"
										class="form-control" placeholder="Estado">
								</div>

							</div>
							<div class="row">



								<div class="form-group col-md-2">
									<button type="submit" class="btn btn-success">Salvar
										informações</button>
								</div>

							</div>

							<div class="row mt-3">
								<div class="form-group col-md-2">
									<a href="index.php">Voltar</a>
								</div>


							</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</main>
