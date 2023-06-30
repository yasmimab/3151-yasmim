<?php
    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $qnt = $_POST['qnt'];
    $qntmin = $_POST['qntmin'];
    $qntmax = $_POST['qntmax'];
    $dtfab = $_POST['dtfab'];
    $dtvali = $_POST['dtvali'];
    $obs = $_POST['obs'];

    $sql = "update produto set nome_prod='$nome', preco_prod='$preco', qtde_prod='$qnt', qtde_min_estoque='$qntmin', qtde_max_estoque='$qntmax', dt_fab_prod='$dtfab', dt_valid_prod='$dtvali', obs_prod='$obs' where id_prod=$id;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Produto atualizada com sucesso!<br><hr>";
        include "tab_prod.php";
    }
    else {
        echo "Não foi possível excluir o produto no momento. Tente novamente mais tarde";
    }
?>