<?php
    $id = $_GET['id'];

    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "delete from usuario where id = $id;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Usuário excluído com sucesso!<br><hr>";
        include "tab_user.php";
    }
    else {
        echo "Não foi possível excluir usuário no momento. Tente novamente mais tarde";
    }
?>