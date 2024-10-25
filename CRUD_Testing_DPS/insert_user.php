nclude("connection.php");
$con = connection();

$id_producto = $_POST['id_tester'];
$id= $_POST['id_tester'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];


$sql = "INSERT INTO productos VALUES('$id_tester','$nombre','$marca','$precio')";
$sql = "INSERT INTO testers VALUES('$id_tester','$nombre','$apellido','$edad')";
$query = mysqli_query($con, $sql);

if($query){
@@ -17,4 +17,4 @@

}

?>
