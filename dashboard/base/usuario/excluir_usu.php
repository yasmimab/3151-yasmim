<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");
     $id = (int) $_GET["id"];
     $sql = "delete from usuario where id=$id;";
     $result = mysqli_query($con, $sql);
     if($result){
          echo "Usuário excluído com sucesso.<br><hr>";
          include "lista_usu.php";
     }else{
          echo "ERRO";
     }
?>