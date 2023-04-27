<?php
	$pro = (int) $_GET['pro'];
	$sql = mysqli_query($con, "select * from produto where id_produto = '".$pro."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do produto - <?php echo $pro; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_produto'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome</strong></p>
			<p><?php echo $row['nome_produto'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Preço</strong></p>
			<p><?php echo $row['preco_produto'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Quantidade</strong></p>
			<p><?php echo $row['qtde_produto'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<p><strong>Quantidade minima</strong></p>
			<p><?php echo $row['qtde_min_estoque'];?></p>
		</div>
		<div class="col-md-6">
			<p><strong>Quantidade maxima</strong></p>
			<p><?php echo $row['qtde_max_estoque'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p><strong>Data de fabricação</strong></p>
			<p><?php echo date('d-m-Y',strtotime($row['dt_fab_produto']));?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Data de validade</strong></p>
			<p><?php echo date('d-m-Y',strtotime($row['dt_valid_produto']));?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Obs</strong></p>
			<p><?php echo $row['obs_produto'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_pro" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_pro&pro=".$row['id_produto']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_pro&pro=".$row['id_produto']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
