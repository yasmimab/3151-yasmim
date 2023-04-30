<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $sql = "select * from produto;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>ID</th> <th>NOME</th> <th>PREÇO</th> <th>QUANTIDADE</th> <th>QUANTIDADE MÍNIMA</th> <th>QUANTIDADE MÁXIMA</th> <th>DATA DE FABRICAÇÃO</th> <th>DATA DE VALIDADE</th> <th>OBSERVAÇÃO</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['id']."</td>
          <td>".$info['nome']."</td>
          <td>".$info['preco']."</td>
          <td>".$info['qtde']."</td>
          <td>".$info['qtde_min']."</td>
          <td>".$info['qtde_max']."</td>
          <td>".$info['dt_fab']."</td>
          <td>".$info['dt_valid']."</td>
          <td>".$info['obs']."</td>
          <td><a href = 'fedit_prod.php?id=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_prod.php?id=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>