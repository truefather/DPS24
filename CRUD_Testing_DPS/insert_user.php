<?php
include("connection.php");
$con = connection();

// Obtener los datos del formulario
$id_tester = $_POST['id_tester'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

// Crear la consulta SQL para insertar datos en la tabla 'testers'
$sql = "INSERT INTO testers (id_tester, nombre, apellido, edad) VALUES ('$id_tester', '$nombre', '$apellido', '$edad')";
$query = mysqli_query($con, $sql);

// Redirigir si la consulta fue exitosa o mostrar un mensaje de error
if ($query) {
    header("Location: index.php");
} else {
    echo "Error en la inserción: " . mysqli_error($con);
}
?>

