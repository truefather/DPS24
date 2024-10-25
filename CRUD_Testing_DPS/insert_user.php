<?php
<<?php
include("connection.php");
nclude("connection.php");
$con = connection();

$id_producto = $_POST['id_producto'];
$id_producto = $_POST['id_tester'];
$id= $_POST['id_tester'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];


$sql = "INSERT INTO tester VALUES('$id_tester','$nombre','$apellido','$edad')";
$sql = "INSERT INTO tester VALUES('$id_tester','$nombre','$apellido','$edad')";
$sql = "INSERT INTO tester VALUES('$id_tester','$nombre','$apellido','$edad')";
$sql = "INSERT INTO testers VALUES('$id_tester','$nombre','$apellido','$edad')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{
@@ -17,4 +17,4 @@

}
