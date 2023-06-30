<?php
    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sigla = $_POST['sigla'];
    $sigla = strtoupper($sigla);
    $ch = $_POST['ch'];

    $sql = "update disciplina set nome_disc='$nome', sigla_disc='$sigla', ch_disc='$ch' where id_disc=$id;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Disciplina atualizada com sucesso!<br><hr>";
        include "tab_disc.php";
    }
    else {
        echo "Não foi possível excluir disciplina no momento. Tente novamente mais tarde";
    }
?>