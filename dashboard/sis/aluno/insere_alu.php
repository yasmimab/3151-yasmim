<?php
$aluno          = $_POST["nome"];
$nasc          = $_POST["nasc"];
$nome_pai           = $_POST["pai"];
$nome_mae           = $_POST["mae"];
$rg           	  = $_POST["rg"];
$cpf              = $_POST["cpf"];

$fdt_nasc 	= implode("-", array_reverse(explode("/", $nasc)));


$sql = "insert into aluno values ";
$sql .= "(0, '$aluno', '$nome_pai', '$nome_mae', '$nasc', '$rg', '$cpf')";

$resultado = mysqli_query($con, $sql) or die(mysqli_error());

if($resultado){
    header('Location: \3151-yasmim\dashboard/index.php?page=lista_alu&msg=1');
    mysqli_close($con);
}else{
    header('Location: \3151-yasmim\dashboard/index.php?page=lista_alu&msg=4');
    mysqli_close($con);
}
?>