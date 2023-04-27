<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>cadastro do usuário</title>
</head>
<body>
     <form action="insere_usu.php" method="post">
          USUÁRIO: <input type="text" name="usuario"><br>
          SENHA: <input type="password" name="senha"><br>
          NIVEL: <br>
          <select name="nivel" id="">
               <option value="1">Administrador</option>
               <option value="2">Atendente</option>
               <option value="3">Gerente</option>
          </select><br>
          <input type="submit" value="Salvar">
     </form>
</body>
</html>