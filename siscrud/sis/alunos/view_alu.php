<?php
	$matricula = $_GET['matricula'];
	$sql = mysqli_query($con, "select * from aluno where mat_alu = '".$matricula."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Aluno - <?php echo $matricula; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>Matrícula</strong></p>
			<p><?php echo $row['mat_alu'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome Completo</strong></p>
			<p><?php echo $row['nome_alu'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>RG</strong></p>
			<p><?php echo $row['rg_alu'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>CPF</strong></p>
			<p><?php echo $row['cpf_alu'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<p><strong>Nome do Pai</strong></p>
			<p><?php echo $row['pai_alu'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome da Mãe</strong></p>
			<p><?php echo $row['mae_alu'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Data Nascimento</strong></p>
			<p><?php echo date('d/m/Y',strtotime($row['dt_nasc_alu'])); ?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_alu" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedita_alu&matricula=".$row['mat_alu']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_alu&matricula=".$row['mat_alu']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
