<?php
    $id= (int) $_GET["id"];

    $con = mysqli_connect("localhost", "root", "", "siscrud");

    $sql = "select * from produto where id = $id;";

    $result = mysqli_query($con, $sql) or die (mysqli_error($con));

    $info = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>edição de produto</title>
</head>
<body>
     <form action="atualiza_prod.php" method="post">
        <input type="hidden" name="id"
        value='<?php echo $info['id']?>'><br>
        PRODUTO: <input type="text" name="nome" 
        value='<?php echo $info['nome']?>'><br>
        PREÇO: <input type="text" name="preco"
        value='<?php echo $info['preco']?>'><br>
        QUANTIDADE: <input type="text" name="qtde"
        value='<?php echo $info['qtde']?>'><br>
        QUANTIDADE MÍNIMA: <input type="text" name="qtde_min"
        value='<?php echo $info['qtde_min']?>'><br>
        QUANTIDADE MÁXIMA: <input type="text" name="qtde_max"
        value='<?php echo $info['qtde_max']?>'><br>
        DATA DE FABRICAÇÃO: <input type="text" name="dt_fab"
        value='<?php echo $info['dt_fab']?>'><br>
        DATA DE VALIDADE: <input type="text" name="dt_valid"
        value='<?php echo $info['dt_valid']?>'><br>
        OBSERVAÇÃO: <input type="text" name="obs"
        value='<?php echo $info['obs']?>'><br>

        <input type="submit" value="Atualizar">
     </form>
</body>
</html>