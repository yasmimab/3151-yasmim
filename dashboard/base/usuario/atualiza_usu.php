<?php
     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $id = $_POST["id"];
     $usuario = $_POST["usuario"];
     $senha = $_POST["senha"];
     $nivel = $_POST["nivel"];
    

     $sql = "update usuario set usuario='$usuario', senha='$senha', nivel='$nivel' where id=$id;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Usuário atualizado com sucesso.<br><hr>";
          include "lista_usu.php";
     }else{
          echo "ERRO";
     }
?>