<?php
    $id = (int) $_GET["id"];

    $conect = mysqli_connect("localhost", "root", "", "siscrud");

    $sql = "select * from usuario where id = $id;";
    $resposta = mysqli_query($conect, $sql) or die(mysqli_error($conect));
    $info = mysqli_fetch_array($resposta);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <form action="atualiza_user.php" method="post">
        <input type="hidden" name="id" value="<?php echo $info['id'] ?>">
        <label for="nome">Nome de Usuário: </label>
        <input type="text" name="nome" value="<?php echo $info['usuario']; ?>">
        <br><br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha">
        <br><br>
        <label for="nivel">Nível: </label>
        <select name="nivel">
            <option value="1"<?php if (!(strcmp(1, htmlentities($info['nivel'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Administrador</option>
            <option value="2"<?php if (!(strcmp(2, htmlentities($info['nivel'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Atendente</option>
            <option value="3"<?php if (!(strcmp(3, htmlentities($info['nivel'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Gerente</option>
        </select>
        <br><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>