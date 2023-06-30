<?php
    $id = $_GET['id'];

    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "delete from disciplina where id_disc = $id;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Disciplina excluído com sucesso!<br><hr>";
        include "tab_disc.php";
    }
    else {
        echo "Não foi possível excluir a disciplina no momento. Tente novamente mais tarde";
    }
?>