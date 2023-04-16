<?php
     $nome = $_POST["nome"];
     $preco = $_POST["preco"];
     $qtde = $_POST["qtde"];
     $qtde_min = $_POST["qtde_min"];
     $qtde_max = $_POST["qtde_max"];
     $dt_fab = $_POST["dt_fab"];
     $dt_valid = $_POST["dt_valid"];
     $obs = $_POST["obs"];

     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $sql = "insert into produto values ";
     $sql .= "(0, '$nome','$preco','$qtde','$qtde_min','$qtde_max','$dt_fab','$dt_valid','$obs')"; 

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Produto incluído com sucesso.<br><hr>";
          include "lista_prod.php";
     }else{
          echo "ERRO";
     }
?>