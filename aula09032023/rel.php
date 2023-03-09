<?php
     echo "Nome: " .$_POST['nome'];
     echo "<br>";

     echo "Escolaridade: " .$_POST['escolar'];
     echo "<br>";

     if($_POST['sexo'] = "F"){
          echo "Sexo: Feminino";
     }else{
          echo "Sexo: Masculino";
     }
     echo "<br>";

     echo "Hobbies:<br>";
     foreach($_POST["hob"] as $hobbies){
          echo $hobbies ."<br>"; 
     }

?>
