<div> <?php include "mensagens.php"; ?> </div>
<div id="main" class="container-fluid">
	<h3 class="page-header">Cadastrar disciplina</h3>
	<form action="?page=insere_disc" method="post">
		
		<div id="linha01" class="row"> 
			<div class="form-group col-md-1">
				<label for="cod_disciplina">ID</label>
				<input type="text" disabled="disabled" value="0" class="form-control" name="cod_disciplina">
			</div>
			
			<div class="form-group col-md-5">
				<label for="nome_disciplina">Nome da disciplina</label>
				<input type="text" class="form-control" name="nome_disciplina">
			</div>
			
			<div class="form-group col-md-3">
				<label for="sigla_disciplina">Sigla</label>
				<input type="text" class="form-control" name="sigla_disciplina">
			</div>
			
			<div class="form-group col-md-2">
				<label for="ch_disciplina">Ch</label>
				<select class="form-control" name="ch_disciplina" id="ch_disciplina">
					<option value="M" >Manhã</option>
					<option value="T">Tarde</option>
					<option value="N">Noite</option>		
				</select>
			</div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_usu" class="btn btn-default">Cancelar</a>
			</div>
		</div>

	</form> 
</div>
