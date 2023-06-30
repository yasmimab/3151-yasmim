<?php
    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $id = $_POST['id'];
    $mat = $_POST['mat'];
    $nome = $_POST['nome'];
    $dtnasc = $_POST['dtnasc'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $pai = $_POST['pai'];
    $mae = $_POST['mae'];

    $sql = "update aluno set mat_alu='$mat', nome_alu='$nome', dt_nasc_alu='$dtnasc', rg_alu='$rg', cpf_alu='$cpf', pai_alu='$pai', mae_alu='$mae' where id_alu=$id;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Aluno atualizada com sucesso!<br><hr>";
        include "tab_alu.php";
    }
    else {
        echo "Não foi possível excluir o aluno no momento. Tente novamente mais tarde";
    }
?>