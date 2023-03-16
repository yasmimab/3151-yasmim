<?php
     $usu = $_POST["usu"];
     $pass = $_POST["pass"];
     $nivel = $_POST["nivel"];

     $con = mysqli_connect("localhost", "root", "", "aula16032023");

     $sql = "insert into usuario values ";
     $sql .= "(0, '$usu', sha1('$pass'), $nivel, 1)"; 

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Usuário incluído com sucesso.<br><hr>";
          include "lista_usu.php";
     }else{
          echo "ERRO";
     }
?>