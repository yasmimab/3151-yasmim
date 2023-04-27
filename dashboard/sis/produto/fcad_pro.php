<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Produto</h2>
		</div>

		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar alunos -->
			<a href="?page=fcad_pro" class="btn btn-primary pull-right h2">Novo Produto</a> 
		</div>
	</div>
	<form action="?page=insere_pro" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-2">
				<label for="id_produto">ID</label>
				<input type="text" class="form-control" name="id_produto" readonly>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-5">
				<label for="nome_produto">Nome</label>
				<input type="text" class="form-control" name="nome_produto">
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-3">
				<label for="preco_produto">Preço</label>
				<input type="num" class="form-control" name="preco_produto">
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-2">
				<label for="qtde_produto">Quantidade</label>
				<input type="num" class="form-control" name="qtde_produto">
			</div>
		</div>
		<!-- 2ª LINHA -->
		<div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="qtde_min_estoque">Quantidade minima</label>
				<input type="text" class="form-control" name="qtde_min_estoque">
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="qtde_max_estoque">Quantidade maxima</label>
				<input type="text" class="form-control" name="qtde_max_estoque">
			</div>
		</div>
		<!-- 3ª LINHA -->
		<div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="dt_fab_produto">Data de fabricação</label>
				<input type="date" class="form-control" name="dt_fab_produto">
			</div>
	
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="dt_val_produto">Data de validade</label>
				<input type="date" class="form-control" name="dt_valid_produto">
			</div>

            <div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="obs_produto">Obs</label>
				<input type="text" class="form-control" name="obs_produto">
			</div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_pro" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
