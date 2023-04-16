<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");
     $id = (int) $_GET["id"];
     $sql = "delete from aluno where id = $id;";
     $result = mysqli_query($con, $sql);
     if($result){
          echo "Aluno excluído com sucesso.<br><hr>";
          include "lista_aluno.php";
     }else{
          echo "ERRO";
     }
?>