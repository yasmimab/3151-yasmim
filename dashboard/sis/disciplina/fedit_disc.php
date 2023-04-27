<?php
	$cod = (int) $_GET['cod'];
	$sql = mysqli_query($con, "select * from disciplina where cod_disciplina = '".$cod."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro da Disciplina - <?php echo $cod;?></h3>
	
	<!-- Área de campos do formulário de edição-->
	
	<form action="?page=atualiza_disc&cod=<?php echo $row['cod_disciplina']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		
		<div class="form-group col-md-1">
			<label for="cod_disciplina">ID</label>
			<input readonly type="text" class="form-control" name="cod_disciplina" value="<?php echo $row["cod_disciplina"]; ?>">
		</div>
		
		<div class="form-group col-md-5">
			<label for="nome_disciplina">Nome da disciplina</label>
			<input type="text" class="form-control" name="nome_disciplina" value="<?php echo $row["nome_disciplina"]; ?>">
		</div>
		
		<div class="form-group col-md-3">
			<label for="sigla_disciplina">Sigla</label>
			<input type="text" class="form-control" name="sigla_disciplina" value="<?php echo $row["sigla_disciplina"]; ?>">
		</div>
		
		<div class="form-group col-md-2">
			<label for="ch_disciplina">Ch</label>
			<select class="form-control" id="ch_disciplina" name="ch_disciplina">
				<option value="1"<?php if (!(strcmp(1, htmlentities($row['ch_disciplina'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Manhã</option>
				<option value="2"<?php if (!(strcmp(2, htmlentities($row['ch_disciplina'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Tarde</option>
				<option value="3"<?php if (!(strcmp(3, htmlentities($row['ch_disciplina'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Noite</option>		
			</select>
		</div>
	<hr/>
	<div id="actions" class="row">
	 <div class="col-md-12">
		<a href="?page=lista_disc" class="btn btn-default">Voltar</a>
		<button type="submit" class="btn btn-primary">Salvar Alterações</button>
	 </div>
	</div>
</div>
