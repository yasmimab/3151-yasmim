<?php
     $usuario = $_POST["usuario"];
     $senha = $_POST["senha"];
     $nivel = $_POST["nivel"];

     $con = mysqli_connect("localhost", "root", "", "siscrud");

     $sql = "insert into usuario values ";
     $sql .= "(0, '$usuario', sha1('$senha'), $nivel, 1)"; 

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Usuário incluído com sucesso.<br><hr>";
          include "lista_usu.php";
     }else{
          echo "ERRO";
     }
?>