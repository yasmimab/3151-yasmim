<?php
	//include "base\conexao.php";
	$id = $_GET['id'];
	$sql = mysqli_query($con, "select * from produto where id_prod = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Produto - <?php echo $id;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_prod&id=<?php echo $row['id_prod']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<input type="hidden" name="id_prod" value="<?php echo $row['id_prod'] ?>">
		<div class="form-group col-md-4">
				<label for="nome_prod">Nome do Produto</label>
				<input type="text" class="form-control" name="nome_prod" maxlength="50" value="<?php echo $row['nome_prod'] ?>">
			</div>
			<div class="form-group col-md-2">
				<label for="preco_prod">Preço(R$)</label>
				<input type="number" class="form-control" name="preco_prod" step="0.5" value="<?php echo $row['preco_prod'] ?>">
			</div>
			<div class="form-group col-md-1">
				<label for="qtde_prod">Quantidade</label>
				<input type="number" class="form-control" name="qtde_prod" value="<?php echo $row['qtde_prod'] ?>">
			</div>
			<div class="form-group col-md-2">
				<label for="qtde_min_estoque">Quantidade Mínima</label>
				<input type="number" class="form-control" name="qtde_min_estoque" value="<?php echo $row['qtde_min_estoque'] ?>">
			</div>
			<div class="form-group col-md-2">
				<label for="qtde_max_estoque">Quantidade Máxima</label>
				<input type="number" class="form-control" name="qtde_max_estoque" value="<?php echo $row['qtde_max_estoque'] ?>">
			</div>
	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
	<div class="form-group col-md-2">
				<label for="dt_fab_prod">Data de Fabricação</label>
				<input type="date" class="form-control" name="dt_fab_prod" value="<?php echo $row['dt_fab_prod'] ?>">
			</div>
		<div class="form-group col-md-2">
				<label for="dt_valid_prod">Data de Validação</label>
				<input type="date" class="form-control" name="dt_valid_prod" value="<?php echo $row['dt_valid_prod'] ?>">
			</div>
			<div class="form-group col-md-7">
				<label for="obs_prod">Observações</label>
				<input type="text" class="form-control" name="obs_prod" value="<?php echo $row['obs_prod'] ?>">
			</div>
	</div>
	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_prod" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>