<?php
    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "select * from produto;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "<table border=1>";
        echo "<th>Id</th><th>Nome</th><th>Preço</th><th>Quantidade</th><th>Quantidade Mínima</th><th>Quantidade Máxima</th><th>Data de Fabricação</th><th>Data de Validade</th><th>Observação</th><th colspan=2>Opções</th>";
        while ($row = mysqli_fetch_array($resposta)) {
            echo "<tr>";
            echo "<td>" . $row['id_prod'] . "</td>";
            echo "<td>" . $row['nome_prod'] . "</td>";
            echo "<td>R$" . number_format($row['preco_prod'], 2, ',', '.') . "</td>";
            echo "<td>" . $row['qtde_prod'] . "</td>";
            echo "<td>" . $row['qtde_min_estoque'] . "</td>";
            echo "<td>" . $row['qtde_max_estoque'] . "</td>";
            $nfdata = explode("-", $row['dt_fab_prod']);
            $fdata = $nfdata[2] . "/" . $nfdata[1] . "/" . $nfdata[0];
            echo "<td>" . $fdata . "</td>";
            $nvdata = explode("-", $row['dt_valid_prod']);
            $vdata = $nvdata[2] . "/" . $nvdata[1] . "/" . $nvdata[0];
            echo "<td>" . $vdata . "</td>";
            echo "<td>" . $row['obs_prod'] . "</td>";
            echo "<td><a href='fedit_prod.php?id=$row[0]'>Editar</a></td>";
            echo "<td><a href='excl_prod.php?id=$row[0]'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "<table>";
    }
?>