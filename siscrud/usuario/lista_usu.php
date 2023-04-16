<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $sql = "select * from usuario;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>ID</th> <th>USUARIO</th> <th>SENHA</th> <th>NIVEL</th> <th>ATIVO</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['id']."</td>
          <td>".$info['nome']."</td>
          <td>".$info['pass']."</td>
          <td>".$info['nivel']."</td>
          <td>".$info['ativo']."</td>
          <td><a href = 'fedit_usu.php?id=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_usu.php?id=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>