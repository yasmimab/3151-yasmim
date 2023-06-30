<?php
    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "select * from disciplina;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "<table border=1>";
        echo "<th>Id</th><th>Nome</th><th>Sigla</th><th>Carga Horária</th><th colspan=2>Opções</th>";
        while ($row = mysqli_fetch_array($resposta)) {
            echo "<tr>";
            echo "<td>" . $row['id_disc'] . "</td>";
            echo "<td>" . $row['nome_disc'] . "</td>";
            echo "<td>" . $row['sigla_disc'] . "</td>";
            echo "<td>" . $row['ch_disc'] . " Horas</td>";
            echo "<td><a href='fedit_disc.php?id=$row[0]'>Editar</a></td>";
            echo "<td><a href='excl_disc.php?id=$row[0]'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "<table>";
    }
?>