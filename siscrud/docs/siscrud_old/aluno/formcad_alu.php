<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <form action="inserir_alu.php" method="post">
        <label for="mat">Matrícula: </label>
        <input type="number" name="mat" min="10000000" max="99999999">
        <br><br>
        <label for="nome">Nome do Aluno: </label>
        <input type="text" name="nome" maxlength="150">
        <br><br>
        <label for="dtnasc">Data de Nascimento: </label>
        <input type="date" name="dtnasc"> 
        <br><br>
        <label for="rg">RG: </label>
        <input type="text" name="rg" onkeypress="mascara_rg(this)" onkeydown="return somente_numero(event)" maxlength="12">
        <br><br>
        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" onkeypress="mascara_cpf(this)" onkeydown="return somente_numero(event)" maxlength="14"> 
        <br><br>
        <label for="pai">Nome do Pai: </label>
        <input type="text" name="pai" maxlength="150"> 
        <br><br>
        <label for="mae">Mãe: </label>
        <input type="text" name="mae" maxlength="150"> 
        <br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <script src="script.js"></script>
</body>
</html>