<?php
include("connection.php");
$con = connection();

$id = $_POST['id_tester'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];


$sql = "INSERT INTO productos VALUES('$id_tester','$nombre','$epellido','$edad')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>
