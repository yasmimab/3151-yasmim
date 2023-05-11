<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Alunos</h2>
		</div>

		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar alunos -->
			<a href="?page=fcad_alu" class="btn btn-primary pull-right h2">Novo Aluno</a> 
		</div>
	</div>
	<form action="?page=insere_alu" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-2">
				<label for="id">Matrícula</label>
				<input type="text" class="form-control" name="id" readonly>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-5">
				<label for="nome">Nome Completo</label>
				<input type="text" class="form-control" name="nome">
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-3">
				<label for="nasc">Data Nascimento</label>
				<input type="date" class="form-control" name="nasc">
			</div>
		</div>
		<!-- 2ª LINHA -->
		<div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="pai">Nome do Pai</label>
				<input type="text" class="form-control" name="pai">
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="mae">Nome da Mãe</label>
				<input type="text" class="form-control" name="mae">
			</div>
		</div>
		<!-- 3ª LINHA -->
		<div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="rg">RG</label>
				<input type="text" class="form-control" name="rg">
			</div>
	
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="cpf">CPF</label>
				<input type="text" class="form-control" name="cpf">
			</div>

		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_alu" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
