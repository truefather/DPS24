<?php
include("connection.php");
$con = connection();

$id= $_POST['id_tester'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];


$sql = "INSERT INTO testers VALUES('$id_tester','$nombre','$apellido','$edad')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>
