<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <form action="rel.php" method="post">
          Nome: <input type="text" name="nome"><br>

          Escolaridade: <select name="escolar" id="">
               <option value="Ensino Fundamental">Ensino Fundamental</option>
               <option value="Ensino Médio">Ensino Médio</option>
               <option value="Ensino Superior">Ensino Superior</option>
          </select> <br>



          Sexo: <input type="radio" name="sexo" value="F">
          <label for="fem">Feminino</label>

          <input type="radio" name="sexo" value="M">
          <label for="mas">Masculino</label><br>



          Hobbies: <br>
          <label for="ler">Leitura</label>
          <input type="checkbox" name="hob[]" value="Leitura"><br>

          <label for="esp">Esporte</label>
          <input type="checkbox" name="hob[]" value="Esporte"><br>

          <label for="mus">Música</label>
          <input type="checkbox" name="hob[]" value="Música"><br>

          <label for="filme">Filmes</label>
          <input type="checkbox" name="hob[]" value="Filmes"><br>


          <input type="submit" value="Enviar">

     </form>
</body>
</html>