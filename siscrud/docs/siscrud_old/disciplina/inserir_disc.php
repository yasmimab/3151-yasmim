<?php
    $nome = $_POST['nome'];
    $sigla = $_POST['sigla'];
    $sigla = strtoupper($sigla);
    $ch = $_POST['ch'];

    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "insert into disciplina values (0, '$nome', '$sigla', $ch)";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Disciplina cadastrada com sucesso!<br><hr>";
        include "tab_disc.php";
    }
    else {
        echo "Não foi possível realizar o cadastro da disciplina no momento. Tente novamente mais tarde";
    }
?>