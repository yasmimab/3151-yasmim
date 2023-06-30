<?php
    $mat = $_POST['mat'];
    $nome = $_POST['nome'];
    $dtnasc = $_POST['dtnasc'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $pai = $_POST['pai'];
    $mae = $_POST['mae'];

    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "insert into aluno values (0, '$mat', '$nome', '$dtnasc', '$rg', '$cpf', '$pai', '$mae');";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Aluno cadastrado com sucesso!<br><hr>";
        include "tab_alu.php";
    }
    else {
        echo "Não foi possível realizar o cadastro do aluno no momento. Tente novamente mais tarde";
    }
?>