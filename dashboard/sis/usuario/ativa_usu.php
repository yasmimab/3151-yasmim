<?php
$id = (int) $_GET['id'];

$sql = "update usuario set ";
$sql .= "ativo='1' ";
$sql .= "where id = '".$id."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \3151-yasmim/dashboard/index.php?page=lista_usu&msg=5');
    mysqli_close($con);
}else{
	header('Location: \3151-yasmim/dashboard/index.php?page=lista_usu&msg=6');
    mysqli_close($con);
}
?>
