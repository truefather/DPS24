<?php
include("connection.php");
$con = connection();

$id = $_POST['id_tester'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];


$sql="UPDATE testers SET id_tester='$id', nombre='$nombre', apellido='$apellido', edad='$edad' WHERE id_tester=$id";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>
