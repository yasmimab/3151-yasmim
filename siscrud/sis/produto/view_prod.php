<?php
	$id = $_GET['id'];
	$sql = mysqli_query($con, "select * from produto where id_prod = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro de Produto - <?php echo $id; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_prod'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome do Produto</strong></p>
			<p><?php echo $row['id_prod'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Preço(R$)</strong></p>
			<p><?php
			$preco_prod = number_format($row['preco_prod'], 2, ',','.'); 
			echo $preco_prod;
			?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Quantidade</strong></p>
			<p><?php echo $row['qtde_prod'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<p><strong>Quantidade Mínima</strong></p>
			<p><?php echo $row['qtde_min_estoque'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Quantidade Máxima</strong></p>
			<p><?php echo $row['qtde_max_estoque'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Data de Fabricação</strong></p>
			<p><?php echo date('d/m/Y',strtotime($row['dt_fab_prod'])); ?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Data de Validação</strong></p>
			<p><?php echo date('d/m/Y',strtotime($row['dt_valid_prod'])); ?></p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<p><strong>Observações</strong></p>
			<p><?php echo $row['obs_prod'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_prod" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedita_prod&id=".$row['id_prod']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_prod&id=".$row['id_prod']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
