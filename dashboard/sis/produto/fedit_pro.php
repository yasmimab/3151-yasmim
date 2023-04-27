<?php
	$pro = (int) $_GET['pro'];
	$sql = mysqli_query($con, "select * from produto where id_produto = '".$pro."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro de Produto - <?php echo $pro;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_pro&id_produto=<?php echo $row['id_produto']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="id_produto">ID</label>
			<input type="text" class="form-control" name="id_produto" value="<?php echo $row["id_produto"]; ?>">
		</div>
		<div class="form-group col-md-5">
			<label for="nome_produto">Nome</label>
			<input type="text" class="form-control" name="nome_produto" value="<?php echo $row["nome_produto"]; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="preco_produto">Preço</label>
			<input type="num" class="form-control" name="preco_produto" value="<?php echo $row["preco_produto"]; ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="qtde_produto">Quantidade</label>
			<input type="num" class="form-control" name="qtde_produto" value="<?php echo $row["qtde_produto"]; ?>">
		</div>
	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-6">
			<label for="qtde_min_estoque">Quantidade minima</label>
			<input type="num" class="form-control" name="qtde_min_estoque" value="<?php echo $row["qtde_min_estoque"]; ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="qtde_max_estoque">Quantidade maxima</label>
			<input type="num" class="form-control" name="qtde_max_estoque" value="<?php echo $row["qtde_max_estoque"]; ?>">
		</div>
	</div>

	<!-- 3ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-4">
        <label for="dt_fab_produto">Data de fabricação</label>
			<input type="text" class="form-control" name="dt_fab_produto" value="<?php echo date('d/m/Y',strtotime($row["dt_fab_produto"])); ?>">
		</div>
	 
		<div class="form-group col-md-4">
			<label for="dt_val_produto">Data de validade</label>
			<input type="text" class="form-control" name="dt_valid_produto" value="<?php echo date('d/m/Y',strtotime($row["dt_valid_produto"])); ?>">
		</div>

        <div class="form-group col-md-4">
			<label for="obs_produto">Obs</label>
			<input type="text" class="form-control" name="obs_produto" value="<?php echo $row["obs_produto"]; ?>">
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