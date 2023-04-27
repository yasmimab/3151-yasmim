<?php
$id              =$_POST["id"];
$aluno          = $_POST["nome"];
$nasc          = $_POST["nasc"];
$nome_pai           = $_POST["pai"];
$nome_mae           = $_POST["mae"];
$rg           	  = $_POST["rg"];
$cpf              = $_POST["cpf"];

$fdg_dt_nasc = date('Y-m-d',strtotime($nasc)); 

$sql = "update aluno set ";
$sql .= "nome='".$aluno."', pai='".$nome_pai."', mae='".$nome_mae."',";
$sql .= "nasc='".$fdg_dt_nasc."', rg='".$rg."', cpf='".$cpf."' ";
$sql .= "where id = '".$id."';";

$resultado = mysqli_query($con, $sql) or die(mysqli_error());
if($resultado){
    header('Location: \GitHub\3151-yasmim/dashboard/index.php?page=lista_alu&msg=2');
    mysqli_close($con);
}else{
    header('Location: \GitHub\3151-yasmim/\dashboard/index.php?page=lista_alu&msg=4');
    mysqli_close($con);
}
?>