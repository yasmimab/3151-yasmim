<?php
    $conect = mysqli_connect('localhost', 'root', '', 'siscrud');

    $sql = "select * from usuario;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "<table border=1>";
        echo "<th>Id</th><th>Usuário</th><th>Senha</th><th>Nível</th><th>Ativo</th><th colspan=2>Opções</th>";
        while ($row = mysqli_fetch_array($resposta)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['usuario'] . "</td>";
            echo "<td>" . $row['senha'] . "</td>";
            switch ($row['nivel']) {
                case 1: $niv = "Administrador"; break;
                case 2: $niv = "Atendente"; break;
                case 3: $niv = "Gerente"; break;
            }
            echo "<td>" . $niv . "</td>";
            if ($row['ativo'] == 1) {
                $ativ = "Sim";
            }
            else {
                $ativ = "Não";
            }
            echo "<td>" . $ativ . "</td>";
            echo "<td><a href='fedit_user.php?id=$row[0]'>Editar</a></td>";
            echo "<td><a href='excl_user.php?id=$row[0]'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "<table>";
    }
?>