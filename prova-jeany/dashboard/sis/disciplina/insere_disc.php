<?php
$nome             = $_POST["nome"];
$sigla            = $_POST["sigla"];
$ch               = $_POST["ch"];

$con = mysqli_connect("localhost", "root", "", "siscrud");


$sql = "insert into disciplina values ";
$sql .= "(0, '$nome', '$sigla', '$ch')";

$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

if($resultado){
	header('Location: \3151-yasmim/dashboard/index.php?page=lista_disc&msg=1');
	mysqli_close($con);
}else{
	header('Location: \3151-yasmim/dashboard/index.php?page=lista_disc&msg=6');
	mysqli_close($con);
}
?>