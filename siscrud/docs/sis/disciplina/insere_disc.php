<?php
     $nome = $_POST["nome"];
     $sigla = $_POST["sigla"];
     $ch = $_POST["ch"];

     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $sql = "insert into disciplina values ";
     $sql .= "(0, '$nome','$sigla',$ch)"; 

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Disciplina incluída com sucesso.<br><hr>";
          include "lista_disc.php";
     }else{
          echo "ERRO";
     }
?>