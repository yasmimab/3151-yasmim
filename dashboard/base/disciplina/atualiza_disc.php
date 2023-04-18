<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $id = $_POST["id_disc"];
     $nome = $_POST["nome"];
     $sigla = $_POST["sigla"];
     $ch = $_POST["ch"];

     $sql = "update disciplina set nome_disc='$nome', sigla_disc='$sigla', ch_disc='$ch' where id_disc=$id;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Disciplina atualizada com sucesso.<br><hr>";
          include "lista_disc.php";
     }else{
          echo "ERRO";
     }
?>