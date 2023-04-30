<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $id = $_POST["id"];
     $nome = $_POST["nome"];
     $nasc = $_POST["nasc"];
     $rg = $_POST["rg"];
     $cpf = $_POST["cpf"];
     $pai = $_POST["pai"];
     $mae = $_POST["mae"];

     $sql = "update aluno set nome = '$nome', nasc = '$nasc', rg = '$rg', cpf = '$cpf', pai = '$pai', mae = '$mae' where id = '$id';";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Aluno atualizado com sucesso.<br><hr>";
          include "lista_aluno.php";
     }else{
          echo "ERRO";
     }
?>