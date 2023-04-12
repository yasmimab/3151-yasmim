<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $id = $_POST["id_prod"];
     $nome = $_POST["nome"];
     $preco = $_POST["preco"];
     $qtde = $_POST["qtde"];
     $qtde_min = $_POST["qtde_min"];
     $qtde_max = $_POST["qtde_max"];
     $dt_fab = $_POST["dt_fab"];
     $dt_valid = $_POST["dt_valid"];
     $obs = $_POST["obs"];


     $sql = "update disciplina set nome_prod='$nome', preco_prod='$preco', qtde_prod='$qtde' qtde_min_prod='$qtde_min' qtde_max_prod='$qtde_max' dt_fab_prod='$dt_fab' dt_valid_prod='$dt_valid' obs_prod='$obs' where id_prod=$id;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Produto atualizado com sucesso.<br><hr>";
          include "lista_prod.php";
     }else{
          echo "ERRO";
     }
?>