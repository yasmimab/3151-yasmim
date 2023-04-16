<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $sql = "select * from aluno;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>ID</th> <th>NOME</th> <th>NASC</th> <th>RG</th> <th>CPF</th> <th>PAI</th> <th>MAE</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['id']."</td>
          <td>".$info['nome']."</td>
          <td>".$info['nasc']."</td>
          <td>".$info['rg']."</td>
          <td>".$info['cpf']."</td>
          <td>".$info['pai']."</td>
          <td>".$info['mae']."</td>
          <td><a href = 'fedit_aluno.php?id=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_aluno.php?id=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>