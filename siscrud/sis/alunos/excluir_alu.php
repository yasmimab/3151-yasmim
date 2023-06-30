<?php
$matricula = $_GET['matricula'];
 
$sql = "delete from aluno where mat_alu = '$matricula';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \siscrud/index.php?page=lista_alu&msg=3');
    mysqli_close($con);
}else{
    header('Location: \siscrud/index.php?page=lista_alu&msg=4');
    mysqli_close($con);
}
?>
