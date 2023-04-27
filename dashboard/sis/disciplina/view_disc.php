<?php
	$cod = (int) $_GET['cod'];
	$sql = mysqli_query($con, "select * from disciplina where cod_disciplina = '".$cod."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro da Disciplina - <?php echo $cod; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['cod_disciplina'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome</strong></p>
			<p><?php echo $row['nome_disciplina'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Sigla</strong></p>
			<p><?php echo $row['sigla_disciplina'];?></p>
		</div>
		<<div class="col-md-2">
			<p><strong>Ch</strong></p>
			<p><?php switch($row['ch_disciplina'])
					{
						case 1: echo "MANHÂ";break;
						case 2: echo "TARDE";break;
						case 3: echo "NOITE";break;
					}
				?>
			</p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_disc" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_disc&cod=".$row['cod_disciplina']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_disc&cod=".$row['cod_disciplina']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
