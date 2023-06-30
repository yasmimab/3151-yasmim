<?php
    $id = $_GET['id'];

    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "delete from produto where id_prod = $id;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Produto excluído com sucesso!<br><hr>";
        include "tab_prod.php";
    }
    else {
        echo "Não foi possível excluir o produto no momento. Tente novamente mais tarde";
    }
?>