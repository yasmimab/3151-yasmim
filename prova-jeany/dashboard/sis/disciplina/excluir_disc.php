<?php
$id = (int) $_GET['id'];
 
$sql = "delete from disciplina where id = '$id';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \3151-yasmim/dashboard/index.php?page=lista_disc&msg=3');
    mysqli_close($con);
}else{
    header('Location: \3151-yasmim/dashboard/index.php?page=lista_disc&msg=4');
    mysqli_close($con);
}
?>