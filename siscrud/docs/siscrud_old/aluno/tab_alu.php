<?php
    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "select * from aluno;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "<table border=1>";
        echo "<th>Id</th><th>Matrícula</th><th>Nome do Aluno</th><th>Data de Nascimento</th><th>RG</th><th>CPF</th><th>Nome do Pai</th><th>Nome da Mãe</th><th colspan=2>Opções</th>";
        while ($row = mysqli_fetch_array($resposta)) {
            echo "<tr>";
            echo "<td>" . $row['id_alu'] . "</td>";
            echo "<td>" . $row['mat_alu'] . "</td>";
            echo "<td>" . $row['nome_alu'] . "</td>";
            $ndata = explode("-", $row['dt_nasc_alu']);
            $data = $ndata[2] . "/" . $ndata[1] . "/" . $ndata[0];
            echo "<td>" . $data . "</td>";
            echo "<td>" . $row['rg_alu'] . "</td>";
            echo "<td>" . $row['cpf_alu'] . "</td>";
            echo "<td>" . $row['pai_alu'] . "</td>";
            echo "<td>" . $row['mae_alu'] . "</td>";
            echo "<td><a href='fedit_alu.php?id=$row[0]'>Editar</a></td>";
            echo "<td><a href='excl_alu.php?id=$row[0]'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "<table>";
    }
?>