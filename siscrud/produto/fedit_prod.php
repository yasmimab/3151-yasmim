<?php
    $id= (int) $_GET["id"];

    $con = mysqli_connect("localhost", "root", "", "siscrud");

    $sql = "select * from produto where id_prod=$id;";

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
        <input type="hidden" name="id_prod"
        value='<?php echo $info['id_prod']?>'><br>
        PRODUTO: <input type="text" name="nome" 
        value='<?php echo $info['nome_prod']?>'><br>
        PREÇO: <input type="text" name="preco"
        value='<?php echo $info['preco_prod']?>'><br>
        QUANTIDADE: <input type="text" name="qtde"
        value='<?php echo $info['qtde_prod']?>'><br>
        QUANTIDADE MÍNIMA: <input type="text" name="qtde"
        value='<?php echo $info['qtde_prod']?>'><br>
        QUANTIDADE MÁXIMA: <input type="text" name="qtde"
        value='<?php echo $info['qtde_prod']?>'><br>
        DATA DE FABRICAÇÃO: <input type="text" name="qtde"
        value='<?php echo $info['qtde_prod']?>'><br>
        DATA DE VALIDADE: <input type="text" name="qtde"
        value='<?php echo $info['qtde_prod']?>'><br>
        OBSERVAÇÃO: <input type="text" name="qtde"
        value='<?php echo $info['qtde_prod']?>'><br>

        <input type="submit" value="Atualizar">
     </form>
</body>
</html>