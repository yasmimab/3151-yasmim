<?php
	$id = (int) $_GET['id'];
	$sql = mysqli_query($con, "select * from aluno where id = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Aluno - <?php echo $id;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_alu&id=<?php echo $row['id']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="id">Matrícula</label>
			<input type="text" class="form-control" name="id" value="<?php echo $row["id"]; ?>">
		</div>
		<div class="form-group col-md-5">
			<label for="nome">Nome Completo</label>
			<input type="text" class="form-control" name="nome" value="<?php echo $row["nome"]; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="nasc">Data Nascimento</label>
			<input type="text" class="form-control" name="nasc" value="<?php echo date('d/m/Y',strtotime($row["nasc"])); ?>">
		</div>
	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-6">
			<label for="pai">Nome do Pai</label>
			<input type="text" class="form-control" name="pai" value="<?php echo $row["pai"]; ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="mae">Nome da Mãe</label>
			<input type="text" class="form-control" name="mae" value="<?php echo $row["mae"]; ?>">
		</div>
	</div>

	<!-- 3ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-4">
			<label for="rg">RG</label>
			<input type="text" class="form-control" name="rg" value="<?php echo $row["rg"]; ?>">
		</div>
	 
		<div class="form-group col-md-4">
			<label for="cpf">CPF</label>
			<input type="text" class="form-control" name="cpf" value="<?php echo $row["cpf"]; ?>">
		</div>

	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_alu" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>