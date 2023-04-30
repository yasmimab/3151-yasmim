<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>cadastro de alunos</title>
</head>
<body>
     <form action="insere_aluno.php" method="post">
          NOME: <input type="text" name="nome"><br>
          NASCIMENTO: <input type="date" name="nasc"><br>
          RG: <input type="number" name="rg"><br>
          CPF: <input type="number" name="cpf"><br>
          PAI: <input type="text" name="pai"><br>
          MÃE: <input type="text" name="mae"><br>
          <input type="submit" value="Salvar">
     </form>
</body>
</html>