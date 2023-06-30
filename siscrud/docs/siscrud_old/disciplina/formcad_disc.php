<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <form action="inserir_disc.php" method="post">
        <label for="nome">Nome da Disciplina: </label>
        <input type="text" name="nome">
        <br><br>
        <label for="sigla">Sigla: </label>
        <input type="text" name="sigla">
        <br><br>
        <label for="ch">Carga Horária: </label>
        <input type="number" name="ch"> Horas
        <br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>