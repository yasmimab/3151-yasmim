<?php
    $id = (int) $_GET["id"];

    $conect = mysqli_connect("localhost", "root", "", "siscrud");

    $sql = "select * from disciplina where id_disc = $id;";
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
    <form action="atualiza_disc.php" method="post">
        <input type="hidden" name="id" value="<?php echo $info['id_disc'] ?>">
        <label for="nome">Nome da Disciplina: </label>
        <input type="text" name="nome" value="<?php echo $info['nome_disc']; ?>">
        <br><br>
        <label for="sigla">Sigla: </label>
        <input type="text" name="sigla" value="<?php echo $info['sigla_disc']; ?>">
        <br><br>
        <label for="ch">Carga Horária: </label>
        <input type="number" name="ch" value="<?php echo $info['ch_disc']; ?>"> Horas
        <br><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>