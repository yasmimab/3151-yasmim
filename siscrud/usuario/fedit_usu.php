<?php
    $id= (int) $_GET["id"];

    $con = mysqli_connect("localhost", "root", "", "siscrud");

    $sql = "select * from usuario where id=$id;";

    $result = mysqli_query($con, $sql) or die (mysqli_error($con));

    $info = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ediçaõ de usuário</title>
</head>
<body>
     <form action="atualiza_usu.php" method="post">
        <input type="hidden" name="id"
        value='<?php echo $info['id']?>'><br>
        USUÁRIO: <input type="text" name="usuario" 
        value='<?php echo $info['usuario']?>'><br>
        SENHA: <input type="password" name="senha"
        value='<?php echo $info['senha']?>'><br>
        NIVEL: <br>

        <select name="nivel">
            <option value="1" <?php if(!(strcmp(1, htmlentities($info['nivel'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";}?> >Administrador</option>
            <option value="2" <?php if(!(strcmp(1, htmlentities($info['nivel'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";}?> >Atendente</option>
            <option value="3" <?php if(!(strcmp(1, htmlentities($info['nivel'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";}?> >Gerente</option>
        </select><br>

        ATIVO: <input type="text" name="ativo"
        value='<?php echo $info['ativo']?>'><br>

        <input type="submit" value="Atualizar">
     </form>
</body>
</html>