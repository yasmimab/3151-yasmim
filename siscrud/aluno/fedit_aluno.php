<?php
    $id= (int) $_GET["id"];

    $con = mysqli_connect("localhost", "root", "", "siscrud");

    $sql = "select * from aluno where id = $id;";

    $result = mysqli_query($con, $sql) or die (mysqli_error($con));

    $info = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>edição de aluno</title>
</head>
<body>
     <form action="atualiza_aluno.php" method="post">
        <input type="hidden" name="id"
        value='<?php echo $info['id']?>'><br>
        NOME: <input type="text" name="nome"
        value='<?php echo $info['nome']?>'><br>
        NASCIMENTO: <input type="date" name="nasc"
        value='<?php echo $info['nasc']?>'><br>
        RG: <input type="number" name="rg" 
        value='<?php echo $info['rg']?>'><br>
        CPF: <input type="number" name="cpf" 
        value='<?php echo $info['cpf']?>'><br>
        PAI: <input type="text" name="pai" 
        value='<?php echo $info['pai']?>'><br>
        MÃE: <input type="text" name="mae" 
        value='<?php echo $info['mae']?>'><br>

        <input type="submit" value="Atualizar">
     </form>
</body>
</html>