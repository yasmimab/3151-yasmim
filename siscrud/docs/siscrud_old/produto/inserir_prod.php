<?php
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $qnt = $_POST['qnt'];
    $qntmin = $_POST['qntmin'];
    $qntmax = $_POST['qntmax'];
    $dtfab = $_POST['dtfab'];
    $dtvali = $_POST['dtvali'];
    $obs = $_POST['obs'];

    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "insert into produto values (0, '$nome', '$preco', '$qnt', '$qntmin', '$qntmax', '$dtfab', '$dtvali', '$obs');";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Produto cadastrado com sucesso!<br><hr>";
        include "tab_prod.php";
    }
    else {
        echo "Não foi possível realizar o cadastro do produto no momento. Tente novamente mais tarde";
    }
?>