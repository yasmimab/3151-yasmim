<?php
    $id= (int) $_GET["id"];

    $con = mysqli_connect("localhost", "root", "", "siscrud");

    $sql = "select * from disciplina where id_disc=$id;";

    $result = mysqli_query($con, $sql) or die (mysqli_error($con));

    $info = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>edição de disciplina</title>
</head>
<body>
     <form action="atualiza_disc.php" method="post">
        <input type="hidden" name="id_disc"
        value='<?php echo $info['id_disc']?>'><br>
        DISCIPLINA: <input type="text" name="nome" 
        value='<?php echo $info['nome_disc']?>'><br>
        SIGLA: <input type="text" name="sigla"
        value='<?php echo $info['sigla_disc']?>'><br>
        CH: <input type="text" name="ch"
        value='<?php echo $info['ch_disc']?>'><br>

        <input type="submit" value="Atualizar">
     </form>
</body>
</html>