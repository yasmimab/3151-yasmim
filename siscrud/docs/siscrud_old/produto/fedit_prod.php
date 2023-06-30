<?php
    $id = (int) $_GET["id"];

    $conect = mysqli_connect("localhost", "root", "", "siscrud");

    $sql = "select * from produto where id_prod = $id;";
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
    <form action="atualiza_prod.php" method="post">
        <input type="hidden" name="id" value="<?php echo $info['id_prod']; ?>">
        <label for="nome">Nome do Produto: </label>
        <input type="text" name="nome" value="<?php echo $info['nome_prod']; ?>">
        <br><br>
        <label for="preco">Preço: </label>
        R$<input type="number" name="preco" step='0.05' value="<?php echo $info['preco_prod']; ?>">
        <br><br>
        <label for="qnt">Quantidade: </label>
        <input type="number" name="qnt" value="<?php echo $info['qtde_prod']; ?>"> 
        <br><br>
        <label for="qntmin">Quantidade Mínima: </label>
        <input type="number" name="qntmin" value="<?php echo $info['qtde_min_estoque']; ?>"> 
        <br><br>
        <label for="qntmax">Quantidade Máxima: </label>
        <input type="number" name="qntmax" value="<?php echo $info['qtde_max_estoque']; ?>"> 
        <br><br>
        <label for="dtfab">Data de Fabricação: </label>
        <input type="date" name="dtfab" value="<?php echo $info['dt_fab_prod']; ?>"> 
        <br><br>
        <label for="dtvali">Data de Validade: </label>
        <input type="date" name="dtvali" value="<?php echo $info['dt_valid_prod']; ?>"> 
        <br><br>
        <label for="obs">Observação: </label>
        <textarea name="obs"><?php echo $info['obs_prod']; ?></textarea>
        <br><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>