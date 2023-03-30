<?php
     $con = mysqli_connect("localhost", "root", "", "aula16032023");

     $id = $_POST["id_usu"];
     $usu = $_POST["usu"];
     $pass = $_POST["pass"];
     $nivel = $_POST["nivel"];

     $sql = "update usuario set nome_usu='$usu', pass_usu='$pass', nivel_usu='$nivel' where id_usu=$id;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Usuário atualizado com sucesso.<br><hr>";
          include "lista_usu.php";
     }else{
          echo "ERRO";
     }
?>