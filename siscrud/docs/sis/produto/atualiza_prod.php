<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $id = $_POST["id"];
     $nome = $_POST["nome"];
     $preco = $_POST["preco"];
     $qtde = $_POST["qtde"];
     $qtde_min = $_POST["qtde_min"];
     $qtde_max = $_POST["qtde_max"];
     $dt_fab = $_POST["dt_fab"];
     $dt_valid = $_POST["dt_valid"];
     $obs = $_POST["obs"];


     $sql = "update produto set nome = '$nome', preco = '$preco', qtde = '$qtde', qtde_min = '$qtde_min', qtde_max = '$qtde_max', dt_fab= '$dt_fab', dt_valid = '$dt_valid', obs = '$obs' where id = '$id';";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Produto atualizado com sucesso.<br><hr>";
          include "lista_prod.php";
     }else{
          echo "ERRO";
     }
?>