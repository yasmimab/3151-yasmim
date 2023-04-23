<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");
     $id = (int) $_GET["id"];
     $sql = "delete from disciplina where id_disc=$id;";
     $result = mysqli_query($con, $sql);
     if($result){
          echo "Disciplina excluída com sucesso.<br><hr>";
          include "lista_disc.php";
     }else{
          echo "ERRO";
     }
?>