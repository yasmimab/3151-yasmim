<?php
    $id               = $_POST["id_aluno"];
    $matricula        = $_POST["matricula"];
    $nome             = $_POST["nome_aluno"];
    $dt_nasc          = $_POST["dt_nasc"];
    $nomepai          = $_POST["nome_pai"];
    $nomemae          = $_POST["nome_mae"];
    $rg           	  = $_POST["rg_aluno"];
    $cpf              = $_POST["cpf_aluno"];

    $sql = "update aluno set ";
    $sql .= "mat_alu='".$matricula."',nome_alu='".$nome."', pai_alu='".$nomepai."', mae_alu='".$nomemae."',";
    $sql .= "dt_nasc_alu='".$dt_nasc."', rg_alu='".$rg."', cpf_alu='".$cpf."'";
    $sql .= "where id_alu = '$id';";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \siscrud/index.php?page=lista_alu&msg=2');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_alu&msg=4');
        mysqli_close($con);
    }
?>
