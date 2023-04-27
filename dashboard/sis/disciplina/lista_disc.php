<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Disciplinas</h2>
		</div>

		<div class="col-md-2">
			<!-- Chama o Formulário para adicionar alunos -->
			<a href="?page=fcad_disc" class="btn btn-primary pull-right h2">Novo Disciplina</a> 
		</div>
	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>

	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<?php
				$data = mysqli_query($con, "select * from disciplina order by id;") or die(mysqli_error("ERRO: ".$con));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<td><strong>ID</strong></td>"; 
				echo "<td><strong>Nome</strong></td>"; 
				echo "<td class='d-none d-md-table-cell'><strong>Sigla</strong></td>";
				echo "<td class='d-none d-md-table-cell'><strong>Ch</strong></td>";
				echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['id']."</td>";
					echo "<td>".$info['nome']."</td>";
					echo "<td class='d-none d-md-table-cell'>".$info['sigla']." </td>";
					echo "<td class='d-none d-md-table-cell'>".$info['ch']."</td>";
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-success btn-xs' href=?page=view_disc&cod=".$info['id']."> Visualizar </a>";
					echo "<a class='btn btn-warning btn-xs' href=?page=fedit_disc&cod=".$info['id']."> Editar </a>"; 
					echo "<a href=?page=excluir_disc&cod=".$info['id']." class='btn btn-danger btn-xs'> Excluir </a></td>";
				}
				echo "</tr></tbody></table>";
			?>				
		</div>
	</div>
</div>
