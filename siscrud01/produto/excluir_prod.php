<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");
     $id = (int) $_GET["id"];
     $sql = "delete from produto where id_prod=$id;";
     $result = mysqli_query($con, $sql);
     if($result){
          echo "Produto excluído com sucesso.<br><hr>";
          include "lista_prod.php";
     }else{
          echo "ERRO";
     }
?>