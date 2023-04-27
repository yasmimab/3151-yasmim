<?php
$pro              = $_POST["id_produto"];
$nome             = $_POST["nome_produto"];
$preco            = $_POST["preco_produto"];
$qtde             = $_POST["qtde_produto"];
$qtdemin          = $_POST["qtde_min_estoque"];
$qtdemax          = $_POST["qtde_max_estoque"];
$dtfab            = $_POST["dt_fab_produto"];
$dtval            = $_POST["dt_valid_produto"];
$obs              = $_POST["obs_produto"];

$fdt_fab 	= implode("-", array_reverse(explode("/", $dtfab)));
$fdt_val 	= implode("-", array_reverse(explode("/", $dtval)));

$sql = "update produto set ";
$sql .= "nome_produto='".$nome."', preco_produto='".$preco."', qtde_produto='".$qtde."',";
$sql .= "qtde_min_estoque='".$qtdemin."', qtde_max_estoque='".$qtdemax."', dt_fab_produto='".$fdt_fab."', dt_valid_produto='".$fdt_val."', obs_produto='".$obs."'";
$sql .= "where id_produto = '".$pro."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());
if($resultado){
    header('Location: \dashboard_2/index.php?page=lista_pro&msg=2');
    mysqli_close($con);
}else{
    header('Location: \dashboard_2/index.php?page=lista_pro&msg=4');
    mysqli_close($con);
}
?>