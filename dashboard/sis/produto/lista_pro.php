<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Produtos</h2>
		</div>

		<div class="col-md-2">
			<!-- Chama o Formulário para adicionar alunos -->
			<a href="?page=fcad_pro" class="btn btn-primary pull-right h2">Novo Produto</a> 
		</div>
	</div>
	<div>	<?php include "mensagens.php"; ?>	</div>
	<!--top - Lista dos Campos-->
	<hr/>
	<div id="bloco-list-pag">	
		<div id="list" class="row">
			<div class="table-responsive col-xs-12">
				<?php
					$quantidade = 5;

					$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					$inicio = ($quantidade * $pagina) - $quantidade;

					$data_all = mysqli_query($con, "select * from produto order by id;") or die(mysqli_error());

					echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
					echo "<thead><tr>";
					echo "<td><strong>ID</strong></td>"; 
					echo "<td><strong>Nome do produto</strong></td>"; 
					echo "<td><strong>Preço</strong></td>";
					echo "<td class='d-none d-md-table-cell'><strong>Quantidade</strong></td>";
					echo "<td class='d-none d-md-table-cell'><strong>Quantidade minima</strong></td>";
					echo "<td class='d-none d-md-table-cell'><strong>Quantidade maxíma</strong></td>";
					echo "<td class='d-none d-md-table-cell'><strong>Data de fabricação</strong></td>";
					echo "<td class='d-none d-md-table-cell'><strong>Data de validade</strong></td>";
                    echo "<td class='d-none d-md-table-cell'><strong>Obs</strong></td>";
					echo "<td class='actions'><strong>Ações</strong></td>"; 
					echo "</tr></thead><tbody>";

					while($info = mysqli_fetch_array($data_all)){ 
						echo "<tr>";
						echo "<td>".$info['id']."</td>";
						echo "<td>".$info['nome_prod']."</td>";
						echo "<td>".$info['preco_prod']."</td>";
						echo "<td class='d-none d-md-table-cell'>".$info['qtd_prod']."</td>";
						echo "<td class='d-none d-md-table-cell'>".$info['min_prod']." </td>";
						echo "<td class='d-none d-md-table-cell'>".$info['max_prod']."</td>";
						echo "<td class='d-none d-md-table-cell'>".date('d/m/Y',strtotime($info['dt_fab_prod']))."</td>";
                        echo "<td class='d-none d-md-table-cell'>".date('d/m/Y',strtotime($info['dt_valid_prod']))."</td>";
                        echo "<td class='d-none d-md-table-cell'>".$info['obs']."</td>";
						echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-success btn-xs' href=?page=view_pro&id=".$info['id']."> Visualizar </a>";
					echo "<a class='btn btn-warning btn-xs' href=?page=fedit_pro&id=".$info['id']."> Editar </a>"; 
					echo "<a href=?page=excluir_pro&id=".$info['id']." class='btn btn-danger btn-xs'> Excluir </a></td>";
						
					}
					echo "</tr></tbody></table>";
				?>				
			</div><!-- Div Table -->
		</div><!--list-->
</div><!--main-->