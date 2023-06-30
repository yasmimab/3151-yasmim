<?php
    $id = (int) $_GET["id"];

    $conect = mysqli_connect("localhost", "root", "", "siscrud");

    $sql = "select * from aluno where id_alu = $id;";
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
    <form action="atualiza_alu.php" method="post">
        <input type="hidden" name="id" value="<?php echo $info['id_alu']; ?>">
        <label for="mat">Matrícula: </label>
        <input type="number" name="mat" min="10000000" max="99999999" value="<?php echo $info['mat_alu']; ?>">
        <br><br>
        <label for="nome">Nome do Aluno: </label>
        <input type="text" name="nome" maxlength="150" value="<?php echo $info['nome_alu']; ?>">
        <br><br>
        <label for="dtnasc">Data de Nascimento: </label>
        <input type="date" name="dtnasc" value="<?php echo $info['dt_nasc_alu']; ?>"> 
        <br><br>
        <label for="rg">RG: </label>
        <input type="text" name="rg" onkeypress="mascara_rg(this)" onkeydown="return somente_numero(event)" maxlength="12" value="<?php echo $info['rg_alu']; ?>">
        <br><br>
        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" onkeypress="mascara_cpf(this)" onkeydown="return somente_numero(event)" maxlength="14" value="<?php echo $info['cpf_alu']; ?>"> 
        <br><br>
        <label for="pai">Nome do Pai: </label>
        <input type="text" name="pai" maxlength="150" value="<?php echo $info['pai_alu']; ?>"> 
        <br><br>
        <label for="mae">Mãe: </label>
        <input type="text" name="mae" maxlength="150" value="<?php echo $info['mae_alu']; ?>"> 
        <br><br>
        <input type="submit" value="Atualizar">
    </form>
    <script src="script.js"></script>
</body>
</html>