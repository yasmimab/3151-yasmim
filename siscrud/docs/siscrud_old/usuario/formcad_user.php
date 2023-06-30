<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <form action="inserir_user.php" method="post">
        <label for="nome">Nome de Usuário: </label>
        <input type="text" name="nome">
        <br><br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha">
        <br><br>
        <label for="nivel">Nível: </label>
        <select name="nivel">
            <option value="1">Administrador</option>
            <option value="2">Atendente</option>
            <option value="3">Gerente</option>
        </select>
        <br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>