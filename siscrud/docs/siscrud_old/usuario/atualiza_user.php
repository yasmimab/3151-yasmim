<?php
    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $nivel = $_POST['nivel'];
    if (isset($_POST['senha'])) {
        $senha = $_POST['senha'];
        $sql = "update usuario set usuario='$nome', senha=sha1('$senha'), nivel='$nivel' where id=$id;";
    }
    else {
        $sql = "update usuario set usuario='$nome', nivel='$nivel' where id=$id;";
    }

    
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Usuário atualizado com sucesso!<br><hr>";
        include "tab_user.php";
    }
    else {
        echo "Não foi possível excluir usuário no momento. Tente novamente mais tarde";
    }
?>