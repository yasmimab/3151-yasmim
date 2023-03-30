<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $sql = "select * from disciplina;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>ID</th> <th>NOME</th> <th>SIGLA</th> <th>CH</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['id_disc']."</td>
          <td>".$info['nome_disc']."</td>
          <td>".$info['sigla_disc']."</td>
          <td>".$info['ch_disc']."</td>
          <td><a href = 'fedit_disc.php?id=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_disc.php?id=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>