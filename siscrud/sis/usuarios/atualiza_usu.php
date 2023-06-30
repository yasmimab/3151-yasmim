<?php
$id		  		= $_POST["id"];
$usuario		= $_POST["usuario"];
$nivel			= $_POST["nivel"];

$sql = "update usuario set ";
$sql .= "usuario='$usuario', nivel='$nivel' ";
$sql .= "where id = '$id';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \siscrud/index.php?page=lista_usu&msg=2');
    mysqli_close($con);
}else{
	header('Location: \siscrud/index.php?page=lista_usu&msg=6');
    mysqli_close($con);
}

?>
