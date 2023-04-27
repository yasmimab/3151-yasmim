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
				<label for="id">ID</label>
				<input type="text" class="form-control" name="id" readonly>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-5">
				<label for="nome_prod">Nome</label>
				<input type="text" class="form-control" name="nome_prod">
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-3">
				<label for="preco_prod">Preço</label>
				<input type="num" class="form-control" name="preco_prod">
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-2">
				<label for="qtd__prod">Quantidade</label>
				<input type="num" class="form-control" name="qtd_prod">
			</div>
		</div>
		<!-- 2ª LINHA -->
		<div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="min_prod">Quantidade minima</label>
				<input type="text" class="form-control" name="min_prod">
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="max_prod">Quantidade maxima</label>
				<input type="text" class="form-control" name="max_prod">
			</div>
		</div>
		<!-- 3ª LINHA -->
		<div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="dt_fab_prod">Data de fabricação</label>
				<input type="date" class="form-control" name="dt_fab_prod">
			</div>
	
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="dt_val_prod">Data de validade</label>
				<input type="date" class="form-control" name="dt_valid_prod">
			</div>

            <div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="obs">Obs</label>
				<input type="text" class="form-control" name="obs">
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
