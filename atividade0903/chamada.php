<?php
    $turma= array(
        array("1", "YAS"),
        array("2", "MARIA"),
        array("3", "EDUARDA"),
        array("4", "LÍVIA"),
        array("5", "LUCCAS")
    );
?>

<form action="rel_chamada.php" method="post">
    <h1>Chamada da turma</h1>
    <table border ="1">
        <tr><th>NR</th><th>NOME</th><th>FREQUÊNCIA</th></tr>
        <tr>
            <th>1</th>
            <th>YAS</th>
            <th><input type="radio" name="nome" value="nome" 
                <label>Presente</label>

                <input type="radio" name="nome" value="nome" 
                <label>Faltou</label>
            </th>
        </tr>

        <tr>
            <th>2</th>
            <th>MARIA</th>
            <th><input type="radio" name="nome" value="nome" 
                <label>Presente</label>

                <input type="radio" name="nome" value="nome" 
                <label>Faltou</label>
            </th>
        </tr>

        <tr>
            <th>3</th>
            <th>EDUARDA</th>
            <th><input type="radio" name="nome" value="nome" 
                <label>Presente</label>

                <input type="radio" name="nome" value="nome" 
                <label>Faltou</label>
            </th>
        </tr>

        <tr>
            <th>4</th>
            <th>LÍVIA</th>
            <th><input type="radio" name="nome" value="nome" 
                <label>Presente</label>

                <input type="radio" name="nome" value="nome" 
                <label>Faltou</label>
            </th>
        </tr>

        <tr>
            <th>5</th>
            <th>LUCCAS</th>
            <th><input type="radio" name="nome" value="nome" 
                <label>Presente</label>

                <input type="radio" name="nome" value="nome" 
                <label>Faltou</label>
            </th>
        </tr>

        <?php
            
        ?>
    </table>
</form>