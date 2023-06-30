<div id="main" class="container-fluid">
	<div>
		<h2>Alunos</h2>
	</div>
	<form action="?page=insere_alu" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-2">
				<label for="matricula">Matrícula</label>
				<input type="number" class="form-control" name="matricula" min="10000000" max="99999999">
			</div>
			<div class="form-group col-md-5">
				<label for="nome_aluno">Nome Completo</label>
				<input type="text" class="form-control" name="nome_aluno" maxlength="150">
			</div>
			<div class="form-group col-md-2">
				<label for="rg_aluno">RG</label>
				<input type="text" class="form-control" name="rg_aluno" onkeypress="mascara_rg(this)" onkeydown="return somente_numero(event)" maxlength="12">
			</div>
			<div class="form-group col-md-3">
				<label for="cpf_aluno">CPF</label>
				<input type="text" class="form-control" name="cpf_aluno" onkeypress="mascara_cpf(this)" onkeydown="return somente_numero(event)" maxlength="14">
			</div>
		</div>
		<!-- 2ª LINHA -->
		<div class="row"> 
			<div class="form-group col-md-5">
				<label for="nome_pai">Nome do Pai</label>
				<input type="text" class="form-control" name="nome_pai" maxlength="150">
			</div>

			<div class="form-group col-md-5">
				<label for="nome_mae">Nome da Mãe</label>
				<input type="text" class="form-control" name="nome_mae" maxlength="150">
			</div>
			<div class="form-group col-md-2">
				<label for="dt_nasc">Data Nascimento</label>
				<input type="date" class="form-control" name="dt_nasc">
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
