<?php
<<?php
include("connection.php");
$con = connection();
$id_tester = $_POST['id_tester'];
$id= $_POST['id_tester'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];


$sql = "INSERT INTO tester VALUES('$id_tester','$nombre','$apellido','$edad')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{
@@ -17,4 +17,4 @@

}
