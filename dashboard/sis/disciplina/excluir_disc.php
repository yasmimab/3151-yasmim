<?php
$cod = (int) $_GET['cod'];
 
$sql = "delete from disciplina where cod_disciplina = '$cod';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \dashboard_2/index.php?page=lista_disc&msg=3');
    mysqli_close($con);
}else{
    header('Location: \dashboard_2/index.php?page=lista_disc&msg=4');
    mysqli_close($con);
}
?>