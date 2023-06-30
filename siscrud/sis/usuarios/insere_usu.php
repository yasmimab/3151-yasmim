<?php
$usuario		= $_POST["usuario"];
$senha			= $_POST["senha"];
$nivel			= $_POST["nivel"];

$sql = "insert into usuario values ";
$sql .= "('0','$usuario', '".sha1($senha)."','$nivel','1');";

$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

if($resultado){
	header('Location: \siscrud/index.php?page=lista_usu&msg=1');
	mysqli_close($con);
}else{
	header('Location: \siscrud/index.php?page=lista_usu&msg=6');
	mysqli_close($con);
}
?>