<?php
$id		  		= $_POST["id"];
$nome 			= $_POST["nome"];
$usuario		= $_POST["usuario"];
$email			= $_POST["email"];
$nivel			= $_POST["nivel"];

$sql = "update usuario set ";
$sql .= "nome='".$nome."', usuario='".$usuario."', email='".$email."', nivel='".$nivel."' ";
$sql .= "where id = '".$id."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \3151-yasmim/dashboard/index.php?page=lista_usu&msg=2');
    mysqli_close($con);
}else{
	header('Location: \3151-yasmim/dashboard/index.php?page=lista_usu&msg=6');
    mysqli_close($con);
}

?>
