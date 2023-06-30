<?php
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];

    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "insert into usuario values (0, '$nome', sha1('$senha'), $nivel, 1)";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Usuário cadastrado com sucesso!<br><hr>";
        include "tab_user.php";
    }
    else {
        echo "Não foi possível realizar o cadastro do usuário no momento. Tente novamente mais tarde";
    }
?>