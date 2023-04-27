<?php
	$id = (int) $_GET['id'];
	$sql = mysqli_query($con, "select * from produto where id = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro de Produto - <?php echo $id;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_pro&id=<?php echo $row['id']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="id">ID</label>
			<input type="text" class="form-control" name="id" value="<?php echo $row["id"]; ?>">
		</div>
		<div class="form-group col-md-5">
			<label for="nome_prod">Nome</label>
			<input type="text" class="form-control" name="nome_prod" value="<?php echo $row["nome_prod"]; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="preco_prod">Preço</label>
			<input type="num" class="form-control" name="preco_prod" value="<?php echo $row["preco_prod"]; ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="qtd_prod">Quantidade</label>
			<input type="num" class="form-control" name="qtd_prod" value="<?php echo $row["qtd_prod"]; ?>">
		</div>
	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-6">
			<label for="min_prod">Quantidade minima</label>
			<input type="num" class="form-control" name="min_prod" value="<?php echo $row["min_prod"]; ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="max_prod">Quantidade maxima</label>
			<input type="num" class="form-control" name="max_prod" value="<?php echo $row["max_prod"]; ?>">
		</div>
	</div>

	<!-- 3ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-4">
        <label for="dt_fab_prod">Data de fabricação</label>
			<input type="text" class="form-control" name="dt_fab_prod" value="<?php echo date('d/m/Y',strtotime($row["dt_fab_prod"])); ?>">
		</div>
	 
		<div class="form-group col-md-4">
			<label for="dt_val_prod">Data de validade</label>
			<input type="text" class="form-control" name="dt_valid_prod" value="<?php echo date('d/m/Y',strtotime($row["dt_valid_prod"])); ?>">
		</div>

        <div class="form-group col-md-4">
			<label for="obs">Obs</label>
			<input type="text" class="form-control" name="obs" value="<?php echo $row["obs"]; ?>">
		</div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_pro" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>