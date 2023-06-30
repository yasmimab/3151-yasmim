<div id="main" class="container-fluid">
	<div>
		<h2>Disciplinas</h2>
	</div>
	<form action="?page=insere_disc" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-1">
				<label for="id_disc">ID</label>
				<input type="text" class="form-control" name="id" value="0" disabled="disabled">
			</div>
			<div class="form-group col-md-4">
				<label for="nome_disc">Nome da Disciplina</label>
				<input type="text" class="form-control" name="nome_disc" maxlength="60">
			</div>
			<div class="form-group col-md-1">
				<label for="sigla_disc">Sigla</label>
				<input type="text" class="form-control" name="sigla_disc" maxlength="10">
			</div>
			<div class="form-group col-md-2">
				<label for="ch_disc">Carga Horária</label>
				<input type="number" class="form-control" name="ch_disc" max="24">
			</div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_disc" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
