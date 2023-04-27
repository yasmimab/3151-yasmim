<?php
$id              = $_POST["id"];
$nome             = $_POST["nome_prod"];
$preco            = $_POST["preco_prod"];
$qtde             = $_POST["qtd_prod"];
$qtdemin          = $_POST["min_prod"];
$qtdemax          = $_POST["max_prod"];
$dtfab            = $_POST["dt_fab_prod"];
$dtval            = $_POST["dt_valid_prod"];
$obs              = $_POST["obs"];

$fdt_fab 	= implode("-", array_reverse(explode("/", $dtfab)));
$fdt_val 	= implode("-", array_reverse(explode("/", $dtval)));

$sql = "update produto set ";
$sql .= "nome_prod='".$nome."', preco_prod='".$preco."', qtd_prod='".$qtde."',";
$sql .= "min_prod='".$qtdemin."', max_prod='".$qtdemax."', dt_fab_prod='".$fdt_fab."', dt_valid_prod='".$fdt_val."', obs='".$obs."'";
$sql .= "where id = '".$id."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());
if($resultado){
    header('Location: \3151-yasmim/dashboard/index.php?page=lista_pro&msg=2');
    mysqli_close($con);
}else{
    header('Location: \3151-yasmim/dashboard/index.php?page=lista_pro&msg=4');
    mysqli_close($con);
}
?>