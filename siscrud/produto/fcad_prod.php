<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>cadastro de produto</title>
</head>
<body>
     <form action="insere_prod.php" method="post">
          PRODUTO: <input type="text" name="nome"><br>
          PREÇO: <input type="text" name="preco"><br>
          QUANTIDADE: <input type="number" name="qtde"> <br>
          QUANTIDADE MÍNIMA: <input type="number" name="qtde_min"> <br>
          QUANTIDADE MÁXIMA: <input type="number" name="qtde_max"> <br>
          DATA DE FABRICAÇÃO: <input type="date" name="dt_fab"> <br>
          DATA DE VALIDADE: <input type="date" name="dt_valid"> <br>
          OBSERVAÇÃO: <input type="text" name="obs"> <br>
          <input type="submit" value="Salvar">
     </form>
</body>
</html>