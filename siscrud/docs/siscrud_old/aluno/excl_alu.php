<?php
    $id = $_GET['id'];

    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "delete from aluno where id_alu = $id;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Aluno excluído com sucesso!<br><hr>";
        include "tab_alu.php";
    }
    else {
        echo "Não foi possível excluir o aluno no momento. Tente novamente mais tarde";
    }
?>