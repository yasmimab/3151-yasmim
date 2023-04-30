<?php
     $nome = $_POST["nome"];
     $nasc = $_POST["nasc"];
     $rg = $_POST["rg"];
     $cpf = $_POST["cpf"];
     $pai = $_POST["pai"];
     $mae = $_POST["mae"];

     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $sql = "insert into aluno values ";
     $sql .= "(0, '$nome','$nasc','$rg','$cpf','$pai','$mae')"; 

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Aluno incluído com sucesso.<br><hr>";
          include "lista_aluno.php";
     }else{
          echo "ERRO";
     }
?>