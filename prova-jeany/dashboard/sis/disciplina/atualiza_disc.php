<?php
$id		  	= $_POST["id"];
$nome 			= $_POST["nome"];
$sigla		    = $_POST["sigla"];
$ch			    = $_POST["ch"];

$sql = "update disciplina set ";
$sql .= "nome='".$nome."', sigla='".$sigla."', ch='".$ch."'";
$sql .= "where id = '".$id."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \3151-yasmim/dashboard/index.php?page=lista_disc&msg=2');
    mysqli_close($con);
}else{
	header('Location: \3151-yasmim/dashboard/index.php?page=lista_disc&msg=6');
    mysqli_close($con);
}

?>