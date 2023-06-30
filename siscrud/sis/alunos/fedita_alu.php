<?php
	//include "base\conexao.php";
	$matricula = $_GET['matricula'];
	$sql = mysqli_query($con, "select * from aluno where mat_alu = '".$matricula."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Aluno - <?php echo $matricula;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_alu&matricula=<?php echo $row['mat_alu']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<input type="hidden" name="id_aluno" value="<?php echo $row['id_alu'] ?>">
		<div class="form-group col-md-2">
			<label for="matricula">Matrícula</label>
			<input type="number" class="form-control" name="matricula" min="10000000" max="99999999" value="<?php echo $row["mat_alu"]; ?>">
		</div>
		<div class="form-group col-md-5">
			<label for="nome">Nome Completo</label>
			<input type="text" class="form-control" name="nome_aluno" maxlength="150" value="<?php echo $row["nome_alu"]; ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="rg">RG</label>
			<input type="text" class="form-control" name="rg_aluno" onkeypress="mascara_rg(this)" onkeydown="return somente_numero(event)" maxlength="12" value="<?php echo $row["rg_alu"]; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="cpf">CPF</label>
			<input type="text" class="form-control" name="cpf_aluno" onkeypress="mascara_cpf(this)" onkeydown="return somente_numero(event)" maxlength="14" value="<?php echo $row["cpf_alu"]; ?>">
		</div>
	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-5">
			<label for="nome_pai">Nome do Pai</label>
			<input type="text" class="form-control" name="nome_pai" value="<?php echo $row["pai_alu"]; ?>" maxlength="150">
		</div>

		<div class="form-group col-md-5">
			<label for="nome_mae">Nome da Mãe</label>
			<input type="text" class="form-control" name="nome_mae" value="<?php echo $row["mae_alu"]; ?>" maxlength="150">
		</div>
		<div class="form-group col-md-2">
			<label for="dt_nasc">Data Nascimento</label>
			<input type="date" class="form-control" name="dt_nasc" value="<?php echo $row["dt_nasc_alu"]; ?>">
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