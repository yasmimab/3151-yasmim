<?php
$pro = (int) $_GET['pro'];
 
$sql = "delete from produto where id_produto = '$pro';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \dashboard_2/index.php?page=lista_pro&msg=3');
    mysqli_close($con);
}else{
    header('Location: \dashboard_2/index.php?page=lista_pro&msg=4');
    mysqli_close($con);
}
?>