<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $id = $_POST["id_aluno"];
     $materia = $_POST["materia"];
     $nome = $_POST["nome"];
     $nasc = $_POST["nasc"];
     $rg = $_POST["rg"];
     $cpf = $_POST["cpf"];
     $pai = $_POST["pai"];
     $mae = $_POST["mae"];

     $sql = "update aluno set materia_aluno='$materia', nome_aluno='$nome', nasc_aluno='$nasc', rg_aluno='$rg', cpf_aluno='$cpf', pai_aluno='$pai', mae_aluno='$mae' where id_aluno=$id;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Aluno atualizado com sucesso.<br><hr>";
          include "lista_aluno.php";
     }else{
          echo "ERRO";
     }
?>