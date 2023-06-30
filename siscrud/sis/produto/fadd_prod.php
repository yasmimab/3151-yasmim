<div id="main" class="container-fluid">
	<div>
		<h2>Produtos</h2>
	</div>
	<form action="?page=insere_prod" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-1">
				<label for="id_prod">ID</label>
				<input type="text" class="form-control" name="id_prod" disabled="disabled" value="0">
			</div>
			<div class="form-group col-md-4">
				<label for="nome_prod">Nome do Produto</label>
				<input type="text" class="form-control" name="nome_prod" maxlength="50">
			</div>
			<div class="form-group col-md-2">
				<label for="preco_prod">Preço(R$)</label>
				<input type="number" class="form-control" name="preco_prod" step="0.5">
			</div>
			<div class="form-group col-md-1">
				<label for="qtde_prod">Quantidade</label>
				<input type="number" class="form-control" name="qtde_prod">
			</div>
			<div class="form-group col-md-2">
				<label for="qtde_min_estoque">Quantidade Mínima</label>
				<input type="number" class="form-control" name="qtde_min_estoque">
			</div>
			<div class="form-group col-md-2">
				<label for="qtde_max_estoque">Quantidade Máxima</label>
				<input type="number" class="form-control" name="qtde_max_estoque">
			</div>
		</div>
		<!-- 2ª LINHA -->
		<div class="row"> 
		<div class="form-group col-md-2">
				<label for="dt_fab_prod">Data de Fabricação</label>
				<input type="date" class="form-control" name="dt_fab_prod">
			</div>
		<div class="form-group col-md-2">
				<label for="dt_valid_prod">Data de Validação</label>
				<input type="date" class="form-control" name="dt_valid_prod">
			</div>
			<div class="form-group col-md-7">
				<label for="obs_prod">Observações</label>
				<input type="text" class="form-control" name="obs_prod">
			</div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_prod" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
