<?php
	//include "base\conexao.php";
	$id = $_GET['id'];
	$sql = mysqli_query($con, "select * from disciplina where id_disc = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro da Disciplina - <?php echo $id;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_disc&id=<?php echo $row['id_disc']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<input type="hidden" name="id_disc" value="<?php echo $row['id_disc'] ?>">
		<div class="form-group col-md-4">
			<label for="nome_disc">Nome da Disciplina</label>
			<input type="text" class="form-control" name="nome_disc" maxlength="60" value="<?php echo $row['nome_disc'] ?>">
		</div>
		<div class="form-group col-md-1">
			<label for="sigla_disc">Sigla</label>
			<input type="text" class="form-control" name="sigla_disc" maxlength="10" value="<?php echo $row['sigla_disc'] ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="ch_disc">Carga Horária</label>
			<input type="number" class="form-control" name="ch_disc" max="24"value="<?php echo $row['ch_disc'] ?>">
		</div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_disc" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>