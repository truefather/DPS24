<?php

include("connection.php");
$con = connection();

$id=$_GET["id"];

$sql="CREATE FROM usuarios WHERE id_usuario='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: indexo.php");
}else{

}ESTOS SON MIS CAMBIOS

?>
