<?php
	$id = $_GET['id'];
	$sql = mysqli_query($con, "select * from disciplina where id_disc = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro da Disciplina - <?php echo $id; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_disc'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome da Disciplina</strong></p>
			<p><?php echo $row['nome_disc'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Sigla</strong></p>
			<p><?php echo $row['sigla_disc'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Carga Horária</strong></p>
			<p><?php echo $row['ch_disc'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_disc" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedita_disc&id=".$row['id_disc']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_disc&id=".$row['id_disc']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
