<?php
	$id = (int) $_GET['id'];
	$sql = mysqli_query($con, "select * from aluno where id = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Aluno - <?php echo $id; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>Matrícula</strong></p>
			<p><?php echo $row['id'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome Completo</strong></p>
			<p><?php echo $row['nome'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Data Nascimento</strong></p>
			<p><?php echo date('d-m-Y',strtotime($row['nasc'])); ?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<p><strong>Nome do Pai</strong></p>
			<p><?php echo $row['pai'];?></p>
		</div>
		<div class="col-md-6">
			<p><strong>Nome da Mãe</strong></p>
			<p><?php echo $row['mae'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p><strong>RG</strong></p>
			<p><?php echo $row['rg'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>CPF</strong></p>
			<p><?php echo $row['cpf'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_alu" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_alu&id=".$row['id']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_alu&id=".$row['id']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
