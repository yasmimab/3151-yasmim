<?php
$id = (int) $_GET['id'];
 
$sql = "delete from aluno where id = '$id';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \GitHub/3151-yasmim\dashboard/index.php?page=lista_alu&msg=3');
    mysqli_close($con);
}else{
    header('Location: \GitHub/3151-yasmim\dashboard/index.php?page=lista_alu&msg=4');
    mysqli_close($con);
}
?>