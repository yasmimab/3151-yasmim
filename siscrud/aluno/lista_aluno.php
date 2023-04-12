<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $sql = "select * from aluno;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>ID</th> <th>MATERIA</th> <th>NOME</th> <th>NASC</th> <th>RG</th> <th>CPF</th> <th>PAI</th> <th>MAE</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['id_aluno']."</td>
          <td>".$info['materia_aluno']."</td>
          <td>".$info['nome_aluno']."</td>
          <td>".$info['nasc_aluno']."</td>
          <td>".$info['rg_aluno']."</td>
          <td>".$info['cpf_aluno']."</td>
          <td>".$info['pai_aluno']."</td>
          <td>".$info['mae_aluno']."</td>
          <td><a href = 'fedit_aluno.php?id=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_aluno.php?id=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>